<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->unsignedBigInteger('likes');
            $table->unsignedBigInteger('dislikes');
            $table->unsignedBigInteger('answers');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('video_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('video_id')->references('id')->on('video');
            $table->foreign('parent_id')->references('id')->on('comment');
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
        Schema::dropIfExists('comment');
    }
}
