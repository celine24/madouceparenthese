<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table) {

            $table->increments('id');
            $table->string('title', 100);
            $table->longText('content');
            $table->boolean('published');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

        });

        Schema::table('posts', function(Blueprint $table){
            $table->integer('page_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
