<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDrugDiagnosticsTableInsertDrugDiagnosticEvaluationKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drug_diagnostic_evaluations', function (Blueprint $table) {
            $table->foreign('drug_diagnostic_id')->references('id')->on('drug_diagnostics')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drug_diagnostic_evaluations', function (Blueprint $table) {
            
        });
    }
}
