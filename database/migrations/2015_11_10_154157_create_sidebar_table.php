<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSidebarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidebar', function(Blueprint $table) {

        $table->increments('id');
        $table->longText('content');
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
        Schema::drop('sidebar');
    }
}
