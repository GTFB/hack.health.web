<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\training_diagnosticEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\training_diagnostic;
use Illuminate\Foundation\Bus\DispatchesJobs;

class training_diagnosticObserver extends BaseObserver
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
     * Handle the training_diagnostic "created" event.
     *
     * @param  \App\AltrpModels\training_diagnostic $training_diagnostic
     * @return void
     */
    public function created(training_diagnostic $training_diagnostic)
    {
        $model = Model::where('name', 'training_diagnostic')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $training_diagnostic,
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
     * Handle the training_diagnostic "updated" event.
     *
     * @param  \App\AltrpModels\training_diagnostic $training_diagnostic
     * @return void
     */
    public function updated(training_diagnostic $training_diagnostic)
    {
        $model = Model::where('name', 'training_diagnostic')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $training_diagnostic,
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
     * Handle the training_diagnostic "deleted" event.
     *
     * @param  \App\AltrpModels\training_diagnostic $training_diagnostic
     * @return void
     */
    public function deleted(training_diagnostic $training_diagnostic)
    {
        $model = Model::where('name', 'training_diagnostic')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $training_diagnostic,
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
     * Handle the training_diagnostic "restored" event.
     *
     * @param  \App\AltrpModels\training_diagnostic $training_diagnostic
     * @return void
     */
    public function restored(training_diagnostic $training_diagnostic)
    {
        //
    }

    /**
     * Handle the training_diagnostic "force deleted" event.
     *
     * @param  \App\AltrpModels\training_diagnostic $training_diagnostic
     * @return void
     */
    public function forceDeleted(training_diagnostic $training_diagnostic)
    {
        //
    }
}