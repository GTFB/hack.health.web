<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\criterion_mkbEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\criterion_mkb;
use Illuminate\Foundation\Bus\DispatchesJobs;

class criterion_mkbObserver extends BaseObserver
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
     * Handle the criterion_mkb "created" event.
     *
     * @param  \App\AltrpModels\criterion_mkb $criterion_mkb
     * @return void
     */
    public function created(criterion_mkb $criterion_mkb)
    {
        $model = Model::where('name', 'criterion_mkb')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion_mkb,
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
     * Handle the criterion_mkb "updated" event.
     *
     * @param  \App\AltrpModels\criterion_mkb $criterion_mkb
     * @return void
     */
    public function updated(criterion_mkb $criterion_mkb)
    {
        $model = Model::where('name', 'criterion_mkb')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion_mkb,
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
     * Handle the criterion_mkb "deleted" event.
     *
     * @param  \App\AltrpModels\criterion_mkb $criterion_mkb
     * @return void
     */
    public function deleted(criterion_mkb $criterion_mkb)
    {
        $model = Model::where('name', 'criterion_mkb')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $criterion_mkb,
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
     * Handle the criterion_mkb "restored" event.
     *
     * @param  \App\AltrpModels\criterion_mkb $criterion_mkb
     * @return void
     */
    public function restored(criterion_mkb $criterion_mkb)
    {
        //
    }

    /**
     * Handle the criterion_mkb "force deleted" event.
     *
     * @param  \App\AltrpModels\criterion_mkb $criterion_mkb
     * @return void
     */
    public function forceDeleted(criterion_mkb $criterion_mkb)
    {
        //
    }
}