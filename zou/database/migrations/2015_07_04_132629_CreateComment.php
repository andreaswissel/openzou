<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function(Blueprint $oTable){
            $oTable->increments('id');
            $oTable->string('content');
            $oTable->string('state');
            $oTable->timestamps();
            $oTable->integer('news_id')->unsigned();
            $oTable->foreign('news_id')->references('id')->on('news');
            $oTable->integer('reply_to')->unsigned()->nullable();
            $oTable->foreign('reply_to')->references('id')->on('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
