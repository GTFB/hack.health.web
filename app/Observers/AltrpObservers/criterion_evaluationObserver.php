<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\criterion_evaluationEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\criterion_evaluation;
use Illuminate\Foundation\Bus\DispatchesJobs;

class criterion_evaluationObserver extends BaseObserver
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
     * Handle the criterion_evaluation "created" event.
     *
     * @param  \App\AltrpModels\criterion_evaluation $criterion_evaluation
     * @return void
     */
    public function created(criterion_evaluation $criterion_evaluation)
    {
        $model = Model::where('name', 'criterion_evaluation')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion_evaluation,
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
     * Handle the criterion_evaluation "updated" event.
     *
     * @param  \App\AltrpModels\criterion_evaluation $criterion_evaluation
     * @return void
     */
    public function updated(criterion_evaluation $criterion_evaluation)
    {
        $model = Model::where('name', 'criterion_evaluation')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion_evaluation,
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
     * Handle the criterion_evaluation "deleted" event.
     *
     * @param  \App\AltrpModels\criterion_evaluation $criterion_evaluation
     * @return void
     */
    public function deleted(criterion_evaluation $criterion_evaluation)
    {
        $model = Model::where('name', 'criterion_evaluation')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion_evaluation,
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
     * Handle the criterion_evaluation "restored" event.
     *
     * @param  \App\AltrpModels\criterion_evaluation $criterion_evaluation
     * @return void
     */
    public function restored(criterion_evaluation $criterion_evaluation)
    {
        //
    }

    /**
     * Handle the criterion_evaluation "force deleted" event.
     *
     * @param  \App\AltrpModels\criterion_evaluation $criterion_evaluation
     * @return void
     */
    public function forceDeleted(criterion_evaluation $criterion_evaluation)
    {
        //
    }
}