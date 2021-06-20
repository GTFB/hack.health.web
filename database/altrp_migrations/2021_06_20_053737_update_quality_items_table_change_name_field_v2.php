<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateQualityItemsTableChangeNameFieldV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('name' !== 'name') {
            Schema::table('quality_items', function (Blueprint $table) {
                $table->renameColumn('name', 'name');
            });
        }

        Schema::table('quality_items', function (Blueprint $table) {
            $table->text('name')->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quality_items', function (Blueprint $table) {

        });
    }
}
