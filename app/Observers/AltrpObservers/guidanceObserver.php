<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\guidanceEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\guidance;
use Illuminate\Foundation\Bus\DispatchesJobs;

class guidanceObserver extends BaseObserver
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
     * Handle the guidance "created" event.
     *
     * @param  \App\AltrpModels\guidance $guidance
     * @return void
     */
    public function created(guidance $guidance)
    {
        $model = Model::where('name', 'guidance')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $guidance,
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
     * Handle the guidance "updated" event.
     *
     * @param  \App\AltrpModels\guidance $guidance
     * @return void
     */
    public function updated(guidance $guidance)
    {
        $model = Model::where('name', 'guidance')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $guidance,
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
     * Handle the guidance "deleted" event.
     *
     * @param  \App\AltrpModels\guidance $guidance
     * @return void
     */
    public function deleted(guidance $guidance)
    {
        $model = Model::where('name', 'guidance')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $guidance,
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
     * Handle the guidance "restored" event.
     *
     * @param  \App\AltrpModels\guidance $guidance
     * @return void
     */
    public function restored(guidance $guidance)
    {
        //
    }

    /**
     * Handle the guidance "force deleted" event.
     *
     * @param  \App\AltrpModels\guidance $guidance
     * @return void
     */
    public function forceDeleted(guidance $guidance)
    {
        //
    }
}