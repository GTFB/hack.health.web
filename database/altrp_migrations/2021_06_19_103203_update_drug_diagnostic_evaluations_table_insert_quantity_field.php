<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDrugDiagnosticEvaluationsTableInsertQuantityField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drug_diagnostic_evaluations', function (Blueprint $table) {
            $table->integer('quantity')->default(null);
            
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
