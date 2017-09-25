<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Topic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Topic',function (Blueprint $table){
            $table->increments('id')->index();
            $table->string('name');
            $table->string('namedescript');
            $table->text('Description')->nullable();
            $table->tinyInteger('Display');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->text('tag')->nullable();
            $table->foreign('parent_id')->references('id')->on('Topic');
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
        Schema::dropIfExists('Topic');
    }
}
