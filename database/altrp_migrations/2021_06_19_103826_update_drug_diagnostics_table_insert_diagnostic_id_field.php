<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDrugDiagnosticsTableInsertDiagnosticIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drug_diagnostics', function (Blueprint $table) {
            $table->bigInteger('diagnostic_id')->nullable()->unsigned();
            
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
