<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateServiceDiagnosticsTableInsertServiceKindIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_diagnostics', function (Blueprint $table) {
            $table->bigInteger('service_kind_id')->nullable()->unsigned();
            
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
