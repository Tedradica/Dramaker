<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('scripts', function (Blueprint $table) {
           $table->increments('script_no');
           $table->integer('user_no')->unsigned();
           $table->integer('drama_no')->unsigned();

           $table->foreign('user_no')->references('user_no')->on('users');
           $table->foreign('drama_no')->references('drama_no')->on('dramas');
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
           Schema::dropIfExists('scripts');
     }
}
