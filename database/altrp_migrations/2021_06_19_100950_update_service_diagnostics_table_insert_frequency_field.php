<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateServiceDiagnosticsTableInsertFrequencyField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_diagnostics', function (Blueprint $table) {
            $table->integer('frequency')->default(null);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_diagnostics', function (Blueprint $table) {
            
        });
    }
}
