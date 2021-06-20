<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\service_diagnosticEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\service_diagnostic;
use Illuminate\Foundation\Bus\DispatchesJobs;

class service_diagnosticObserver extends BaseObserver
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
     * Handle the service_diagnostic "created" event.
     *
     * @param  \App\AltrpModels\service_diagnostic $service_diagnostic
     * @return void
     */
    public function created(service_diagnostic $service_diagnostic)
    {
        $model = Model::where('name', 'service_diagnostic')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $service_diagnostic,
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
     * Handle the service_diagnostic "updated" event.
     *
     * @param  \App\AltrpModels\service_diagnostic $service_diagnostic
     * @return void
     */
    public function updated(service_diagnostic $service_diagnostic)
    {
        $model = Model::where('name', 'service_diagnostic')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $service_diagnostic,
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
     * Handle the service_diagnostic "deleted" event.
     *
     * @param  \App\AltrpModels\service_diagnostic $service_diagnostic
     * @return void
     */
    public function deleted(service_diagnostic $service_diagnostic)
    {
        $model = Model::where('name', 'service_diagnostic')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $service_diagnostic,
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
     * Handle the service_diagnostic "restored" event.
     *
     * @param  \App\AltrpModels\service_diagnostic $service_diagnostic
     * @return void
     */
    public function restored(service_diagnostic $service_diagnostic)
    {
        //
    }

    /**
     * Handle the service_diagnostic "force deleted" event.
     *
     * @param  \App\AltrpModels\service_diagnostic $service_diagnostic
     * @return void
     */
    public function forceDeleted(service_diagnostic $service_diagnostic)
    {
        //
    }
}