<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTimestampsAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (1 && (!Schema::hasColumn('appeals', 'created_at')
          && !Schema::hasColumn('appeals', 'updated_at'))) {
            Schema::table('appeals', function (Blueprint $table) {
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        } else {
            if (!1 && Schema::hasColumn('appeals', 'created_at') && Schema::hasColumn('appeals', 'updated_at')) {
                Schema::table('appeals', function (Blueprint $table) {
                    $table->dropTimestamps();
                });
            }
        }

        if (false && !Schema::hasColumn('appeals', 'deleted_at')) {
            Schema::table('appeals', function (Blueprint $table) {
                $table->softDeletes();
            });
        } else {
            if (!false && Schema::hasColumn('appeals', 'deleted_at')) {
                Schema::table('appeals', function (Blueprint $table) {
                    $table->dropSoftDeletes();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (1) {
            Schema::table('appeals', function (Blueprint $table) {
                $table->dropTimestamps();
            });
        }
        if (false) {
            Schema::table('appeals', function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
    }
}
