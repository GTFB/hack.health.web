<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDiagnosticsTableInsertCriterionMkbKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('criterion_mkbs', function (Blueprint $table) {
            $table->foreign('diagnostic_id')->references('id')->on('diagnostics')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('criterion_mkbs', function (Blueprint $table) {
            
        });
    }
}
