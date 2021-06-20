<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDrugDiagnosticsTableChangeFrequencyField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('frequency' !== 'frequency') {
            Schema::table('drug_diagnostics', function (Blueprint $table) {
                $table->renameColumn('frequency', 'frequency');
            });
        }

        Schema::table('drug_diagnostics', function (Blueprint $table) {
            $table->float('frequency')->change();
            
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
