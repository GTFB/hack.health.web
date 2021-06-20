<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateServiceDiagnosticEvaluationsTableInsertQuantityField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_diagnostic_evaluations', function (Blueprint $table) {
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
        Schema::table('service_diagnostic_evaluations', function (Blueprint $table) {
            
        });
    }
}
