<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDrugMeasuresTableInsertDrugDiagnosticKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drug_diagnostics', function (Blueprint $table) {
            $table->foreign('drug_measure_id')->references('id')->on('drug_measures')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drug_diagnostics', function (Blueprint $table) {
            
        });
    }
}
