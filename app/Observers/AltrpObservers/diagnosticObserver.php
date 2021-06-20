<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\diagnosticEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\diagnostic;
use Illuminate\Foundation\Bus\DispatchesJobs;

class diagnosticObserver extends BaseObserver
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
     * Handle the diagnostic "created" event.
     *
     * @param  \App\AltrpModels\diagnostic $diagnostic
     * @return void
     */
    public function created(diagnostic $diagnostic)
    {
        $model = Model::where('name', 'diagnostic')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $diagnostic,
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
     * Handle the diagnostic "updated" event.
     *
     * @param  \App\AltrpModels\diagnostic $diagnostic
     * @return void
     */
    public function updated(diagnostic $diagnostic)
    {
        $model = Model::where('name', 'diagnostic')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $diagnostic,
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
     * Handle the diagnostic "deleted" event.
     *
     * @param  \App\AltrpModels\diagnostic $diagnostic
     * @return void
     */
    public function deleted(diagnostic $diagnostic)
    {
        $model = Model::where('name', 'diagnostic')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $diagnostic,
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
     * Handle the diagnostic "restored" event.
     *
     * @param  \App\AltrpModels\diagnostic $diagnostic
     * @return void
     */
    public function restored(diagnostic $diagnostic)
    {
        //
    }

    /**
     * Handle the diagnostic "force deleted" event.
     *
     * @param  \App\AltrpModels\diagnostic $diagnostic
     * @return void
     */
    public function forceDeleted(diagnostic $diagnostic)
    {
        //
    }
}