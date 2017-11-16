<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('recruits', function (Blueprint $table) {
          $table->increments('recruit_no');
          $table->integer('drama_no')->unsigned();
          $table->integer('production_no')->unsigned();
          $table->integer('user_no')->unsigned();
          $table->string('title');
          $table->timestamps();
          $table->string('local');
          $table->date('dead_date');
          $table->text('content');

          $table->foreign('drama_no')->references('drama_no')->on('dramas');
          $table->foreign('production_no')->references('user_no')->on('users');
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
        Schema::dropIfExists('recruits');
    }
}
