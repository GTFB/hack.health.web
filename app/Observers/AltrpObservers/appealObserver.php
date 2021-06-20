<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\appealEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\appeal;
use Illuminate\Foundation\Bus\DispatchesJobs;

class appealObserver extends BaseObserver
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
     * Handle the appeal "created" event.
     *
     * @param  \App\AltrpModels\appeal $appeal
     * @return void
     */
    public function created(appeal $appeal)
    {
        $model = Model::where('name', 'appeal')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $appeal,
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
     * Handle the appeal "updated" event.
     *
     * @param  \App\AltrpModels\appeal $appeal
     * @return void
     */
    public function updated(appeal $appeal)
    {
        $model = Model::where('name', 'appeal')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $appeal,
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
     * Handle the appeal "deleted" event.
     *
     * @param  \App\AltrpModels\appeal $appeal
     * @return void
     */
    public function deleted(appeal $appeal)
    {
        $model = Model::where('name', 'appeal')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $appeal,
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
     * Handle the appeal "restored" event.
     *
     * @param  \App\AltrpModels\appeal $appeal
     * @return void
     */
    public function restored(appeal $appeal)
    {
        //
    }

    /**
     * Handle the appeal "force deleted" event.
     *
     * @param  \App\AltrpModels\appeal $appeal
     * @return void
     */
    public function forceDeleted(appeal $appeal)
    {
        //
    }
}