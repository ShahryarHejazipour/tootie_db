<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTootisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tootis', function (Blueprint $table) {
            $table->id();
            $table->text('tooti_text');
            $table->timestamp('tooti_time_creation');
            $table->integer('user_id');
            $table->text('quote_text');
            $table->integer('device_id');
            $table->integer('re_tooti_id');
            $table->integer('image_url_id');
            $table->integer('view_id');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tootis');
    }
}
