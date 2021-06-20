<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDrugDiagnosticEvaluationsTableInsertAppealIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drug_diagnostic_evaluations', function (Blueprint $table) {
            $table->bigInteger('appeal_id')->nullable()->unsigned();
            
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
