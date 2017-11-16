<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScenariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('scenario', function (Blueprint $table) {
          $table->increments('scenario_no');
          $table->integer('drama_no')->unsigned();
          $table->integer('user_no')->unsigned();
          $table->string('title');
          $table->text('content');
          $table->date('date');

          $table->foreign('drama_no')->references('drama_no')->on('dramas');
          $table->foreign('user_no')->references('user_no')->on('users');
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
        Schema::dropIfExists('scenario');
    }
}
