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
        $table->longText('content');
        $table->boolean('published');
        $table->integer('page_id')->unsigned->index;
        $table->dateTime('created_at');
        $table->dateTime('updated_at');

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
deleted:    database/migrations/2015_11_10_154157_create_sidebar_table.php