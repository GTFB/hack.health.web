<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateCriterionListsTableInsertCriterionEvaluationKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('criterion_evaluations', function (Blueprint $table) {
            $table->foreign('criterion_list_id')->references('id')->on('criterion_lists')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('criterion_evaluations', function (Blueprint $table) {
            
        });
    }
}
