<?php


namespace App\Services\Robots\Blocks;


use App\Altrp\Model;
use App\Altrp\Source;
use App\Jobs\SendCurl;
use App\Notifications\RobotNotification;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class Action
{
    use DispatchesJobs;

    /**
     * @var object Узел диаграммы
     */
    protected $node;

    /**
     * @var string Запись модели
     */
    protected $modelData;

    /**
     * Action constructor.
     * @param $node
     * @param null $modelData
     */
    public function __construct($node, $modelData = null)
    {
        $this->node = $node;
        $this->modelData = $modelData;
    }

    /**
     * Запустить действие в зависимости от типа
     */
    public function runAction()
    {
        $res = [
            'name' => '',
            'value' => ''
        ];
        switch ($this->getNodeProperties()->nodeData->type) {
            case 'crud':
                $res = $this->execCrud();
                break;
            case 'send_notification':
                $res = $this->sendNotification();
                break;
            case 'api':
                $res = $this->sendApiRequest();
                break;
        }
        return $res;
    }

    /**
     * Отправить API запрос
     * @return array
     */
    protected function sendApiRequest()
    {
        $source = Source::find($this->getNodeProperties()->nodeData->data->source);
        $res = [];
        if ($source) {
            $url = $source->url;
            $method = $source->request_type;
            $name = $source->name;
        } else {
            $url = $this->getNodeProperties()->nodeData->data->url;
            $method = $this->getNodeProperties()->nodeData->data->method;
            $name = $this->getNodeProperties()->nodeData->data->name;
        }

        $params = $this->getNodeProperties()->nodeData->data->data;
        $data = [];

        if ($params) {
            $params = explode(PHP_EOL, $params);
            foreach ($params as $param) {
                $paramParts = explode('|', $param);
                $val = setDynamicData(trim($paramParts[1], ' '), $this->modelData);
                $default = $paramParts[2] ?? null;
                $data[trim($paramParts[0], ' ')] = $val != null ? $val : $default; // $modelData['app']->request[str_replace(['{{', '}}'], '', trim($paramParts[1], ' '))] ?? null;
            }
        }

        $job = new SendCurl($url, $method, $data, [], true);
        $job->delay(2);
        $this->dispatchNow($job);
        $res = $job->getResponse();

        $source = strtolower(implode('_', explode(' ', $name)));

        return [
            'name' => $source,
            'value' => $res
        ];
    }

    /**
     * Выполнить операцию в базе данных (CRUD)
     * @return mixed
     */
    protected function execCrud()
    {
        $data = json_decode(json_encode($this->node->data->props->nodeData->data->body), true);
        $newData = [];
        foreach ($data as $key => $value){
            $newData[$key] = setDynamicData($value, $this->modelData);
        }
        $model = Model::find($this->node->data->props->nodeData->data->model_id);
        $modelNamespace = $model->parent ? $model->parent->namespace : $model->namespace;
        $modelClass = '\\' . $modelNamespace;
        $method = $this->node->data->props->nodeData->data->method;
        if ($method == 'create') {
            $entity = new $modelClass($newData);
            $result = $entity->$method($newData);
        } elseif ($method == 'delete') {
            $id = setDynamicData($this->node->data->props->nodeData->data->record, $this->modelData);
            $entity = $modelClass::find($id);
            $result = $entity->$method();
        } else {
            $id = setDynamicData($this->node->data->props->nodeData->data->record, $this->modelData);
            $entity = $modelClass::find($id);
            $result = $entity->$method($newData);
        }
        return [
            'name' => $model->name,
            'value' => $result
        ];
    }

    /**
     * Отправить уведомление
     * @return array
     */
    protected function sendNotification()
    {
        $entitiesData = $this->getNodeProperties()->nodeData->data->entitiesData;
        $entities = $this->getNodeProperties()->nodeData->data->entities;
        $users = $this->getRequiredUsers($entities, $entitiesData);
        Notification::send($users, new RobotNotification($this->node, $this->modelData));
        return [
            'name' => 'notice',
            'value' => true
        ];
    }

    /**
     * Получить свойства узла
     * @return mixed
     */
    protected function getNodeProperties()
    {
        return $this->node->data->props;
    }

    /**
     * Получить пользователей, которых нужно уведомить
     * @param $type
     * @param $entities
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    protected function getRequiredUsers($type, $entities)
    {
        if ($type == 'dynamic') {
            $field = $entities->dynamicValue;
            $columnName = 'id';
            $users = [];
            $value = setDynamicData($entities->dynamicValue, $this->modelData);
            if (isset($this->modelData['record']) && !Str::contains($field, "{{"))
                $value = $this->modelData['record']->$field;
            if (Str::contains($field, "|")){
                $field = explode('|', $field);
                $fieldOne = str_replace(' ', '', $field[1]);
                $value = setDynamicData($fieldOne, $this->modelData);
                $columnName = str_replace(' ', '', $field[0]);
            }
            $users = User::where($columnName, $value)->get();
        } else {
            if (is_object($entities) && $type != 'all') {
                $users = isset($entities->users) && !empty($entities->users) ? User::whereIn('id', $entities->users): null;
                if (isset($entities->roles) && !empty($entities->roles)) {
                    $roles = $entities->roles;
                    $users = $users ? $users->whereHas('roles', function ($q) use ($roles){
                        $q->whereIn('roles.id', $roles);
                    }) : User::whereHas('roles', function ($q) use ($roles){
                        $q->whereIn('roles.id', $roles);
                    });
                }
                $users = isset($users) ? $users->get() : [];
            } else {
                $users = User::all();
            }
        }
        return $users;
    }
}
