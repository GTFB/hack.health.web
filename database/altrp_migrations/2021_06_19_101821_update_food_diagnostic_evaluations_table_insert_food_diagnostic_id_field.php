<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateFoodDiagnosticEvaluationsTableInsertFoodDiagnosticIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food_diagnostic_evaluations', function (Blueprint $table) {
            $table->bigInteger('food_diagnostic_id')->nullable()->unsigned();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food_diagnostic_evaluations', function (Blueprint $table) {
            
        });
    }
}
