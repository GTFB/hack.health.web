<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDrugDiagnosticsTableInsertDayQuantityField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drug_diagnostics', function (Blueprint $table) {
            $table->integer('day_quantity')->default(null);
            
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
