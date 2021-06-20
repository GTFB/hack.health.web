<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateAppealsTableInsertDiagnosticKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diagnostics', function (Blueprint $table) {
            $table->foreign('id')->references('diagnostic_id')->on('appeals')->onUpdate('restrict')->onDelete('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diagnostics', function (Blueprint $table) {
            
        });
    }
}
