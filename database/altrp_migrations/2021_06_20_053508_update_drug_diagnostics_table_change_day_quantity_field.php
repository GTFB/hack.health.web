<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDrugDiagnosticsTableChangeDayQuantityField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('day_quantity' !== 'day_quantity') {
            Schema::table('drug_diagnostics', function (Blueprint $table) {
                $table->renameColumn('day_quantity', 'day_quantity');
            });
        }

        Schema::table('drug_diagnostics', function (Blueprint $table) {
            $table->float('day_quantity')->change();
            
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
