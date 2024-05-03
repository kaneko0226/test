<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps(); //s複数形でcreated_atとupdated_atを生成

            $table->unsignedBigInteger('user_id')->nullable()
                ->onDelete('cascade'); //削除時のオプション
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('diary_id')->nullable()
                ->onDelete('cascade'); //削除時のオプション
            $table->foreign('diary_id')->references('diary_id')->on('diaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
