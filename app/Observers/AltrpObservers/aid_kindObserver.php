<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\aid_kindEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\aid_kind;
use Illuminate\Foundation\Bus\DispatchesJobs;

class aid_kindObserver extends BaseObserver
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
     * Handle the aid_kind "created" event.
     *
     * @param  \App\AltrpModels\aid_kind $aid_kind
     * @return void
     */
    public function created(aid_kind $aid_kind)
    {
        $model = Model::where('name', 'aid_kind')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $aid_kind,
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
     * Handle the aid_kind "updated" event.
     *
     * @param  \App\AltrpModels\aid_kind $aid_kind
     * @return void
     */
    public function updated(aid_kind $aid_kind)
    {
        $model = Model::where('name', 'aid_kind')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $aid_kind,
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
     * Handle the aid_kind "deleted" event.
     *
     * @param  \App\AltrpModels\aid_kind $aid_kind
     * @return void
     */
    public function deleted(aid_kind $aid_kind)
    {
        $model = Model::where('name', 'aid_kind')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $aid_kind,
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
     * Handle the aid_kind "restored" event.
     *
     * @param  \App\AltrpModels\aid_kind $aid_kind
     * @return void
     */
    public function restored(aid_kind $aid_kind)
    {
        //
    }

    /**
     * Handle the aid_kind "force deleted" event.
     *
     * @param  \App\AltrpModels\aid_kind $aid_kind
     * @return void
     */
    public function forceDeleted(aid_kind $aid_kind)
    {
        //
    }
}