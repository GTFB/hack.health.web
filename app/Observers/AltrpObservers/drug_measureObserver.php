<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\drug_measureEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\drug_measure;
use Illuminate\Foundation\Bus\DispatchesJobs;

class drug_measureObserver extends BaseObserver
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
     * Handle the drug_measure "created" event.
     *
     * @param  \App\AltrpModels\drug_measure $drug_measure
     * @return void
     */
    public function created(drug_measure $drug_measure)
    {
        $model = Model::where('name', 'drug_measure')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $drug_measure,
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
     * Handle the drug_measure "updated" event.
     *
     * @param  \App\AltrpModels\drug_measure $drug_measure
     * @return void
     */
    public function updated(drug_measure $drug_measure)
    {
        $model = Model::where('name', 'drug_measure')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $drug_measure,
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
     * Handle the drug_measure "deleted" event.
     *
     * @param  \App\AltrpModels\drug_measure $drug_measure
     * @return void
     */
    public function deleted(drug_measure $drug_measure)
    {
        $model = Model::where('name', 'drug_measure')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $drug_measure,
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
     * Handle the drug_measure "restored" event.
     *
     * @param  \App\AltrpModels\drug_measure $drug_measure
     * @return void
     */
    public function restored(drug_measure $drug_measure)
    {
        //
    }

    /**
     * Handle the drug_measure "force deleted" event.
     *
     * @param  \App\AltrpModels\drug_measure $drug_measure
     * @return void
     */
    public function forceDeleted(drug_measure $drug_measure)
    {
        //
    }
}