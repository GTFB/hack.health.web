<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateCriteriaTableInsertCriterionListKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('criterion_lists', function (Blueprint $table) {
            $table->foreign('criterion_id')->references('id')->on('criteria')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('criterion_lists', function (Blueprint $table) {
            
        });
    }
}
