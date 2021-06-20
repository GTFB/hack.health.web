<?php

namespace App\Altrp;

use Illuminate\Database\Eloquent\Model;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportExcel extends Model
{
    const TEMPLATES_ROOT = 'modules/reports/templates/';

    public $data;

    public $template;

    public $filename;

    protected $worksheet;

    /** @var Worksheet $sheet */
    protected $sheet;

    protected $spreadsheet;

    public function __construct($data, $template, $filename)
    {
        $this->data = json_decode($data, true);
        $this->template = false;
        if (file_exists($template))
            $this->template = $template;
        $this->filename = 'report.xlsx';
        if ($filename)
            $this->filename = $filename;
        //echo $this->filename;
    }

    protected function getDelimiter($file)
    {
        $delimiters = [";" => 0, "," => 0, "\t" => 0, "|" => 0];
        $handle = fopen($file, "r");
        $firstLine = fgets($handle);
        fclose($handle);
        foreach ($delimiters as $delimiter => &$count) {
            $count = count(str_getcsv($firstLine, $delimiter));
        }
        return array_search(max($delimiters), $delimiters);
    }

    protected function getStartRow()
    {
        $row = false;
        for ($i = 0; $i < count($this->worksheet); $i++) {
            if (!array_filter($this->worksheet[$i])) {
                if ($row === false)
                    $row = $i;
            }
        }
        if ($row === false)
            $row = 1;
        $row++;
        return $row;
    }

    protected function parseTemplateData()
    {
        if (!empty($this->worksheet)) {
            for ($i = 0; $i < count($this->worksheet); $i++) {
                for ($j = 0; $j < count($this->worksheet[$i]); $j++) {
                    preg_match_all('/\{\{*.data:([^{}]+)\}\}/im', trim($this->worksheet[$i][$j]), $data);
                    if (!empty($data[1])) {
                        $ColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($j + 1);
                        $column = $ColumnIndex . ($i + 1);
                        foreach ($data[1] as $item) {
                            $key = trim($item);
                            //вставляем одиночную переменную
                            $this->worksheet[$i][$j] = str_replace('data:' . $item, $this->data[$key], $this->worksheet[$i][$j]);
                            $this->worksheet[$i][$j] = str_replace('{{', '', $this->worksheet[$i][$j]);
                            $this->worksheet[$i][$j] = str_replace('}}', '', $this->worksheet[$i][$j]);
                            $this->spreadsheet->getActiveSheet()->setCellValue($column, $this->worksheet[$i][$j]);
                        }
                    }
                }
            }
        } else {
            throw new \Exception('Не удалось вставить данные');
        }
    }

    protected function parseTemplateArray(&$offset, $rows)
    {
        if (!empty($this->worksheet)) {
            for ($i = 0; $i < count($this->worksheet); $i++) {
                for ($j = 0; $j < count($this->worksheet[$i]); $j++) {
                    preg_match('/\{\{*.array:([^{}]+)\}\}/im', trim($this->worksheet[$i][$j]), $data);
                    if (!empty($data[1])) {
                        $ColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($j + 1);
                        $column = $ColumnIndex . ($i + 1 + $offset);
                        $key = trim($data[1]);
                        //вставляем массив
                        $this->worksheet[$i][$j] = '';
                        if (isset($rows[$key]) && !empty($rows[$key])) {
                            $countRows = count($rows[$key]) - 1;
                            $this->sheet->insertNewRowBefore($i + 2 + $offset, $countRows);
                            $this->sheet->fromArray($rows[$key], NULL, $column);
                            $offset = $offset + $countRows;
                            return;
                        }
                    }
                }
            }
        } else {
            throw new \Exception('Не удалось вставить массив');
        }
    }

    public function export()
    {
        try {
            if ($this->template) {

                $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($this->template);
                $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
                if ($inputFileType == 'Csv') {
                    $reader->setDelimiter($this->getDelimiter($this->template));
                }

                $reader->setReadDataOnly(false);

                $this->spreadsheet = $reader->load($this->template);

                $this->sheet = $this->spreadsheet->getActiveSheet(0);

                $this->worksheet = $this->sheet->toArray();

                $this->parseTemplateData();
                $offset = 0;
                if ($this->data && is_array($this->data)) {
                  foreach ($this->data as $key => $data) {
                    if (is_array($data)) {
                      $this->parseTemplateArray($offset, $data);
                    }
                  }
                }

            } else {
                $this->spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
                $this->sheet = $this->spreadsheet->getActiveSheet();
                $this->sheet->fromArray($this->data['dataArray'], NULL, 'A1');
            }
            /*
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $this->filename . '"');
            header('Cache-Control: max-age=0');
            */
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'. urlencode($this->filename).'.xlsx"');

            $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($this->spreadsheet, "Xlsx");
            //$writer->save('php://output');
            //$writer->save('j:\NewServer\data\altrp\storage\tmp\text.xlsx');
            $filename = storage_path() . '/tmp/' . $this->filename . '.xlsx';
            $writer->save($filename);
            readfile($filename);
            unlink($filename);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
