<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateServiceDiagnosticEvaluationsTableInsertServiceDiagnosticIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_diagnostic_evaluations', function (Blueprint $table) {
            $table->bigInteger('service_diagnostic_id')->nullable()->unsigned();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_diagnostic_evaluations', function (Blueprint $table) {
            
        });
    }
}
