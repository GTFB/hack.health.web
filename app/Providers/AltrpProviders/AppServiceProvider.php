<?php


namespace App\Providers\AltrpProviders;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\AltrpModels\patient::observe(\App\Observers\AltrpObservers\patientObserver::class);

        \App\AltrpModels\diagnostic::observe(\App\Observers\AltrpObservers\diagnosticObserver::class);

        \App\AltrpModels\appeal::observe(\App\Observers\AltrpObservers\appealObserver::class);

        \App\AltrpModels\criterion::observe(\App\Observers\AltrpObservers\criterionObserver::class);

        \App\AltrpModels\quality_item::observe(\App\Observers\AltrpObservers\quality_itemObserver::class);

        \App\AltrpModels\criterion_list::observe(\App\Observers\AltrpObservers\criterion_listObserver::class);

        \App\AltrpModels\criterion_mkb::observe(\App\Observers\AltrpObservers\criterion_mkbObserver::class);

        \App\AltrpModels\criterion_evaluation::observe(\App\Observers\AltrpObservers\criterion_evaluationObserver::class);

        \App\AltrpModels\user_altrp::observe(\App\Observers\AltrpObservers\user_altrpObserver::class);

        \App\AltrpModels\training_diagnostic_evaluation::observe(\App\Observers\AltrpObservers\training_diagnostic_evaluationObserver::class);

        \App\AltrpModels\training_diagnostic::observe(\App\Observers\AltrpObservers\training_diagnosticObserver::class);

        \App\AltrpModels\training::observe(\App\Observers\AltrpObservers\trainingObserver::class);

        \App\AltrpModels\service_type::observe(\App\Observers\AltrpObservers\service_typeObserver::class);

        \App\AltrpModels\service_kind::observe(\App\Observers\AltrpObservers\service_kindObserver::class);

        \App\AltrpModels\service_diagnostic_evaluation::observe(\App\Observers\AltrpObservers\service_diagnostic_evaluationObserver::class);

        \App\AltrpModels\service_diagnostic::observe(\App\Observers\AltrpObservers\service_diagnosticObserver::class);

        \App\AltrpModels\service::observe(\App\Observers\AltrpObservers\serviceObserver::class);

        \App\AltrpModels\guidance::observe(\App\Observers\AltrpObservers\guidanceObserver::class);

        \App\AltrpModels\food_diagnostic_evaluation::observe(\App\Observers\AltrpObservers\food_diagnostic_evaluationObserver::class);

        \App\AltrpModels\food_diagnostic::observe(\App\Observers\AltrpObservers\food_diagnosticObserver::class);

        \App\AltrpModels\food::observe(\App\Observers\AltrpObservers\foodObserver::class);

        \App\AltrpModels\drug_measure::observe(\App\Observers\AltrpObservers\drug_measureObserver::class);

        \App\AltrpModels\drug_kind::observe(\App\Observers\AltrpObservers\drug_kindObserver::class);

        \App\AltrpModels\drug_diagnostic_evaluation::observe(\App\Observers\AltrpObservers\drug_diagnostic_evaluationObserver::class);

        \App\AltrpModels\drug_diagnostic::observe(\App\Observers\AltrpObservers\drug_diagnosticObserver::class);

        \App\AltrpModels\drug::observe(\App\Observers\AltrpObservers\drugObserver::class);

        \App\AltrpModels\condition::observe(\App\Observers\AltrpObservers\conditionObserver::class);

        \App\AltrpModels\age::observe(\App\Observers\AltrpObservers\ageObserver::class);

        \App\AltrpModels\aid_kind::observe(\App\Observers\AltrpObservers\aid_kindObserver::class);


    }
}