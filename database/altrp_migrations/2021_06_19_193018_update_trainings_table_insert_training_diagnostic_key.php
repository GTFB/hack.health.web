<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTrainingsTableInsertTrainingDiagnosticKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training_diagnostics', function (Blueprint $table) {
            $table->foreign('training_id')->references('id')->on('trainings')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('training_diagnostics', function (Blueprint $table) {
            
        });
    }
}
