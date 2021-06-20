<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\service_diagnostic_evaluationEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\service_diagnostic_evaluation;
use Illuminate\Foundation\Bus\DispatchesJobs;

class service_diagnostic_evaluationObserver extends BaseObserver
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
     * Handle the service_diagnostic_evaluation "created" event.
     *
     * @param  \App\AltrpModels\service_diagnostic_evaluation $service_diagnostic_evaluation
     * @return void
     */
    public function created(service_diagnostic_evaluation $service_diagnostic_evaluation)
    {
        $model = Model::where('name', 'service_diagnostic_evaluation')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $service_diagnostic_evaluation,
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
     * Handle the service_diagnostic_evaluation "updated" event.
     *
     * @param  \App\AltrpModels\service_diagnostic_evaluation $service_diagnostic_evaluation
     * @return void
     */
    public function updated(service_diagnostic_evaluation $service_diagnostic_evaluation)
    {
        $model = Model::where('name', 'service_diagnostic_evaluation')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $service_diagnostic_evaluation,
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
     * Handle the service_diagnostic_evaluation "deleted" event.
     *
     * @param  \App\AltrpModels\service_diagnostic_evaluation $service_diagnostic_evaluation
     * @return void
     */
    public function deleted(service_diagnostic_evaluation $service_diagnostic_evaluation)
    {
        $model = Model::where('name', 'service_diagnostic_evaluation')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $service_diagnostic_evaluation,
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
     * Handle the service_diagnostic_evaluation "restored" event.
     *
     * @param  \App\AltrpModels\service_diagnostic_evaluation $service_diagnostic_evaluation
     * @return void
     */
    public function restored(service_diagnostic_evaluation $service_diagnostic_evaluation)
    {
        //
    }

    /**
     * Handle the service_diagnostic_evaluation "force deleted" event.
     *
     * @param  \App\AltrpModels\service_diagnostic_evaluation $service_diagnostic_evaluation
     * @return void
     */
    public function forceDeleted(service_diagnostic_evaluation $service_diagnostic_evaluation)
    {
        //
    }
}