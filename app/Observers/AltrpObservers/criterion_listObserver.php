<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\criterion_listEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\criterion_list;
use Illuminate\Foundation\Bus\DispatchesJobs;

class criterion_listObserver extends BaseObserver
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
     * Handle the criterion_list "created" event.
     *
     * @param  \App\AltrpModels\criterion_list $criterion_list
     * @return void
     */
    public function created(criterion_list $criterion_list)
    {
        $model = Model::where('name', 'criterion_list')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion_list,
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
     * Handle the criterion_list "updated" event.
     *
     * @param  \App\AltrpModels\criterion_list $criterion_list
     * @return void
     */
    public function updated(criterion_list $criterion_list)
    {
        $model = Model::where('name', 'criterion_list')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion_list,
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
     * Handle the criterion_list "deleted" event.
     *
     * @param  \App\AltrpModels\criterion_list $criterion_list
     * @return void
     */
    public function deleted(criterion_list $criterion_list)
    {
        $model = Model::where('name', 'criterion_list')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion_list,
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
     * Handle the criterion_list "restored" event.
     *
     * @param  \App\AltrpModels\criterion_list $criterion_list
     * @return void
     */
    public function restored(criterion_list $criterion_list)
    {
        //
    }

    /**
     * Handle the criterion_list "force deleted" event.
     *
     * @param  \App\AltrpModels\criterion_list $criterion_list
     * @return void
     */
    public function forceDeleted(criterion_list $criterion_list)
    {
        //
    }
}