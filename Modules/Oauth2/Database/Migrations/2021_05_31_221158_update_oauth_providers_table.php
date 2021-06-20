<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOauthProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $nowTime = \Carbon\Carbon::now();

        \Illuminate\Support\Facades\DB::table('oauth_providers')->insert([
            [
                'name' => 'odnoklassniki',
                'redirect_uri' => '/login/odnoklassniki/callback',
                'status' => 'not installed',
                'created_at' => $nowTime,
                'updated_at' => $nowTime,
                'provider_class' => 'SocialiteProviders\\Odnoklassniki\\OdnoklassnikiExtendSocialite'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
