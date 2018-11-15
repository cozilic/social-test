<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->integer('from_user_id')->unsigned();
            $table->integer('to_user_id')->unsigned();
            $table->string('type');
            $table->timestamps();

            $table->foreign('from_user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->foreign('to_user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->primary(['from_user_id', 'to_user_id']);
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
