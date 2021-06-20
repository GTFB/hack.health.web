<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\criterionEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\criterion;
use Illuminate\Foundation\Bus\DispatchesJobs;

class criterionObserver extends BaseObserver
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
     * Handle the criterion "created" event.
     *
     * @param  \App\AltrpModels\criterion $criterion
     * @return void
     */
    public function created(criterion $criterion)
    {
        $model = Model::where('name', 'criterion')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion,
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
     * Handle the criterion "updated" event.
     *
     * @param  \App\AltrpModels\criterion $criterion
     * @return void
     */
    public function updated(criterion $criterion)
    {
        $model = Model::where('name', 'criterion')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion,
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
     * Handle the criterion "deleted" event.
     *
     * @param  \App\AltrpModels\criterion $criterion
     * @return void
     */
    public function deleted(criterion $criterion)
    {
        $model = Model::where('name', 'criterion')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion,
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
     * Handle the criterion "restored" event.
     *
     * @param  \App\AltrpModels\criterion $criterion
     * @return void
     */
    public function restored(criterion $criterion)
    {
        //
    }

    /**
     * Handle the criterion "force deleted" event.
     *
     * @param  \App\AltrpModels\criterion $criterion
     * @return void
     */
    public function forceDeleted(criterion $criterion)
    {
        //
    }
}