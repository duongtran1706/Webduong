<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blogpost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BlogPost', function (Blueprint $table) {
            $table->integer('blog_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->primary(array('post_id', 'blog_id'));
            $table->foreign('blog_id')->references('id')->on('Blog');
            $table->foreign('post_id')->references('id')->on('post');
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
        Schama::dropIfExists('BlogPost');
    }
}
