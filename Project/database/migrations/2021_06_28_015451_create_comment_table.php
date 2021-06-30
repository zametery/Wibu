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
            $table->id('comment_id');
            $table->bigInteger('chapter_id')->unsigned();
            $table->bigInteger('creator_id')->unsigned();
            $table->foreign('chapter_id')->references('chapter_id')->on('chapter');
            $table->foreign('creator_id')->references('creator_id')->on('creator');
            $table->string('content')->nullable()->default('text');
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