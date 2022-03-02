<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->boolean('isSend');
            $table->integer('like_id');
            $table->integer('comment_id');
            $table->integer('re_tooti_id');
            $table->integer('following_id');
            $table->integer('user_id');
            $table->integer('device_id');
            $table->integer('mention_id');
            $table->integer('tooti_id');
            $table->timestamp('notify_time_creation');
            //$table->timestamps();
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
