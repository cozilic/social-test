<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends_users', function (Blueprint $table) {
            $table->integer('users_id')->unsigned();
            $table->integer('friends_id')->unsigned();

            $table->foreign('users_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->foreign('friends_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->primary(['users_id', 'friends_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friends_users');
    }
}
