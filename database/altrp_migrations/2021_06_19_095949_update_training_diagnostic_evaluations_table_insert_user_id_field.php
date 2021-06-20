<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTrainingDiagnosticEvaluationsTableInsertUserIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training_diagnostic_evaluations', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable()->unsigned();
            
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
