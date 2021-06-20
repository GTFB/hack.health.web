<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateServiceTypesTableChangeNameField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('name' !== 'name') {
            Schema::table('service_types', function (Blueprint $table) {
                $table->renameColumn('name', 'name');
            });
        }

        Schema::table('service_types', function (Blueprint $table) {
            $table->string('name', 191)->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_types', function (Blueprint $table) {

        });
    }
}
