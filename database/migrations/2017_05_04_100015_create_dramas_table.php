<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dramas', function (Blueprint $table) {
          $table->increments('drama_no');
          $table->integer('production_no')->unsigned();
          $table->string('drama_name');
          $table->timestamps();
          $table->string('genre');
          $table->text('story');
          $table->string('drama_status');

          $table->foreign('production_no')->references('user_no')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('dramas');
    }
}
