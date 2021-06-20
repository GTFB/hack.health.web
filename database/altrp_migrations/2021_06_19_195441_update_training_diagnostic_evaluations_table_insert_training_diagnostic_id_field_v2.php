<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTrainingDiagnosticEvaluationsTableInsertTrainingDiagnosticIdFieldV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training_diagnostic_evaluations', function (Blueprint $table) {
            $table->bigInteger('training_diagnostic_id')->nullable()->unsigned();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('training_diagnostic_evaluations', function (Blueprint $table) {
            
        });
    }
}