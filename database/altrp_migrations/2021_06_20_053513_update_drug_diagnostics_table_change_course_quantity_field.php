<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDrugDiagnosticsTableChangeCourseQuantityField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('course_quantity' !== 'course_quantity') {
            Schema::table('drug_diagnostics', function (Blueprint $table) {
                $table->renameColumn('course_quantity', 'course_quantity');
            });
        }

        Schema::table('drug_diagnostics', function (Blueprint $table) {
            $table->float('course_quantity')->change();
            
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
