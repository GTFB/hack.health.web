<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\drug_kindEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\drug_kind;
use Illuminate\Foundation\Bus\DispatchesJobs;

class drug_kindObserver extends BaseObserver
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
     * Handle the drug_kind "created" event.
     *
     * @param  \App\AltrpModels\drug_kind $drug_kind
     * @return void
     */
    public function created(drug_kind $drug_kind)
    {
        $model = Model::where('name', 'drug_kind')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $drug_kind,
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
     * Handle the drug_kind "updated" event.
     *
     * @param  \App\AltrpModels\drug_kind $drug_kind
     * @return void
     */
    public function updated(drug_kind $drug_kind)
    {
        $model = Model::where('name', 'drug_kind')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $drug_kind,
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
     * Handle the drug_kind "deleted" event.
     *
     * @param  \App\AltrpModels\drug_kind $drug_kind
     * @return void
     */
    public function deleted(drug_kind $drug_kind)
    {
        $model = Model::where('name', 'drug_kind')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $drug_kind,
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
     * Handle the drug_kind "restored" event.
     *
     * @param  \App\AltrpModels\drug_kind $drug_kind
     * @return void
     */
    public function restored(drug_kind $drug_kind)
    {
        //
    }

    /**
     * Handle the drug_kind "force deleted" event.
     *
     * @param  \App\AltrpModels\drug_kind $drug_kind
     * @return void
     */
    public function forceDeleted(drug_kind $drug_kind)
    {
        //
    }
}