<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post',function (Blueprint $table){
            $table->increments('id')->index();
            $table->string('Title');
            $table->text('Description');
            $table->text('UseDescription');
            $table->text('ContentPost');
            $table->text('Picture');
            $table->Integer('Seen');
            $table->Integer('Active');
            $table->integer('topic_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('topic_id')->references('id')->on('Topic');
            $table->foreign('user_id')->references('id')->on('users');
            $table->rememberToken();
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
        Schema::dropIfExists('post');
    }
}
