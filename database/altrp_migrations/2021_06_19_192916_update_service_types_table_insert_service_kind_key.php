<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateServiceTypesTableInsertServiceKindKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_kinds', function (Blueprint $table) {
            $table->foreign('service_type_id')->references('id')->on('service_types')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_kinds', function (Blueprint $table) {
            
        });
    }
}
