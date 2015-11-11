<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function(Blueprint $table) {

        $table->increments('id');
        $table->string('title', 20);
        $table->longText('content');
        $table->string('url', 20);
        $table->string('location');
        $table->boolean('published');
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
        Schema::drop('pictures');
    }
}
