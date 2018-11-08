<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('avatar')->default('/images/default_avatar.png');
            $table->string('bgimage')->default('/images/default_bg.png');
            $table->string('bio')->default('My bio');
            $table->string('facebook_username')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('google_username')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
