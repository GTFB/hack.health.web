<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\service_typeEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\service_type;
use Illuminate\Foundation\Bus\DispatchesJobs;

class service_typeObserver extends BaseObserver
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
     * Handle the service_type "created" event.
     *
     * @param  \App\AltrpModels\service_type $service_type
     * @return void
     */
    public function created(service_type $service_type)
    {
        $model = Model::where('name', 'service_type')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $service_type,
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
     * Handle the service_type "updated" event.
     *
     * @param  \App\AltrpModels\service_type $service_type
     * @return void
     */
    public function updated(service_type $service_type)
    {
        $model = Model::where('name', 'service_type')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $service_type,
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
     * Handle the service_type "deleted" event.
     *
     * @param  \App\AltrpModels\service_type $service_type
     * @return void
     */
    public function deleted(service_type $service_type)
    {
        $model = Model::where('name', 'service_type')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $service_type,
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
     * Handle the service_type "restored" event.
     *
     * @param  \App\AltrpModels\service_type $service_type
     * @return void
     */
    public function restored(service_type $service_type)
    {
        //
    }

    /**
     * Handle the service_type "force deleted" event.
     *
     * @param  \App\AltrpModels\service_type $service_type
     * @return void
     */
    public function forceDeleted(service_type $service_type)
    {
        //
    }
}