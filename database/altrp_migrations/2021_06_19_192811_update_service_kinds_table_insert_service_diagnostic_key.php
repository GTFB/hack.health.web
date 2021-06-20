<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateServiceKindsTableInsertServiceDiagnosticKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_diagnostics', function (Blueprint $table) {
            $table->foreign('service_kind_id')->references('id')->on('service_kinds')->onUpdate('set null')->onDelete('set null');
            
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
