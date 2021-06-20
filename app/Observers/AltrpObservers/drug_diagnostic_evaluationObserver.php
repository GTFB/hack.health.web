<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\drug_diagnostic_evaluationEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\drug_diagnostic_evaluation;
use Illuminate\Foundation\Bus\DispatchesJobs;

class drug_diagnostic_evaluationObserver extends BaseObserver
{
    use DispatchesJobs;

    /**
     * @var RobotsService
     */
    protected $robotsService;

    /**
     * @var CurrentEnvironment|mixed
     */
    protected $currentEnvironment;

    /**
     * test_postObserver constructor.
     * @param RobotsService $robotsService
     */
    public function __construct(RobotsService $robotsService)
    {
        $this->robotsService = $robotsService;
        $this->currentEnvironment = CurrentEnvironment::getInstance();
    }

    /**
     * Handle the drug_diagnostic_evaluation "created" event.
     *
     * @param  \App\AltrpModels\drug_diagnostic_evaluation $drug_diagnostic_evaluation
     * @return void
     */
    public function created(drug_diagnostic_evaluation $drug_diagnostic_evaluation)
    {
        $model = Model::where('name', 'drug_diagnostic_evaluation')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $drug_diagnostic_evaluation,
            'action_type' => 'create'
        ];

        $robots = $this->robotsService->getCurrentModelRobots($model);

        $this->dispatch(new RunRobotsJob(
            $robots,
            $this->robotsService,
            $data,
            'created',
            $this->currentEnvironment
        ));
    }

    /**
     * Handle the drug_diagnostic_evaluation "updated" event.
     *
     * @param  \App\AltrpModels\drug_diagnostic_evaluation $drug_diagnostic_evaluation
     * @return void
     */
    public function updated(drug_diagnostic_evaluation $drug_diagnostic_evaluation)
    {
        $model = Model::where('name', 'drug_diagnostic_evaluation')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $drug_diagnostic_evaluation,
            'action_type' => 'update'
        ];

        $robots = $this->robotsService->getCurrentModelRobots($model);

        $this->dispatch(new RunRobotsJob(
            $robots,
            $this->robotsService,
            $data,
            'updated',
            $this->currentEnvironment
        ));
    }

    /**
     * Handle the drug_diagnostic_evaluation "deleted" event.
     *
     * @param  \App\AltrpModels\drug_diagnostic_evaluation $drug_diagnostic_evaluation
     * @return void
     */
    public function deleted(drug_diagnostic_evaluation $drug_diagnostic_evaluation)
    {
        $model = Model::where('name', 'drug_diagnostic_evaluation')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $drug_diagnostic_evaluation,
            'action_type' => 'delete'
        ];

        $robots = $this->robotsService->getCurrentModelRobots($model);

        $this->dispatch(new RunRobotsJob(
            $robots,
            $this->robotsService,
            $data,
            'deleted',
            $this->currentEnvironment
        ));
    }

    /**
     * Handle the drug_diagnostic_evaluation "restored" event.
     *
     * @param  \App\AltrpModels\drug_diagnostic_evaluation $drug_diagnostic_evaluation
     * @return void
     */
    public function restored(drug_diagnostic_evaluation $drug_diagnostic_evaluation)
    {
        //
    }

    /**
     * Handle the drug_diagnostic_evaluation "force deleted" event.
     *
     * @param  \App\AltrpModels\drug_diagnostic_evaluation $drug_diagnostic_evaluation
     * @return void
     */
    public function forceDeleted(drug_diagnostic_evaluation $drug_diagnostic_evaluation)
    {
        //
    }
}