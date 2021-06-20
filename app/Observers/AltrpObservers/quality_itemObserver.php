<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\quality_itemEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\quality_item;
use Illuminate\Foundation\Bus\DispatchesJobs;

class quality_itemObserver extends BaseObserver
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
     * Handle the quality_item "created" event.
     *
     * @param  \App\AltrpModels\quality_item $quality_item
     * @return void
     */
    public function created(quality_item $quality_item)
    {
        $model = Model::where('name', 'quality_item')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $quality_item,
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
     * Handle the quality_item "updated" event.
     *
     * @param  \App\AltrpModels\quality_item $quality_item
     * @return void
     */
    public function updated(quality_item $quality_item)
    {
        $model = Model::where('name', 'quality_item')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $quality_item,
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
     * Handle the quality_item "deleted" event.
     *
     * @param  \App\AltrpModels\quality_item $quality_item
     * @return void
     */
    public function deleted(quality_item $quality_item)
    {
        $model = Model::where('name', 'quality_item')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $quality_item,
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
     * Handle the quality_item "restored" event.
     *
     * @param  \App\AltrpModels\quality_item $quality_item
     * @return void
     */
    public function restored(quality_item $quality_item)
    {
        //
    }

    /**
     * Handle the quality_item "force deleted" event.
     *
     * @param  \App\AltrpModels\quality_item $quality_item
     * @return void
     */
    public function forceDeleted(quality_item $quality_item)
    {
        //
    }
}