<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('meettings', function (Blueprint $table) {
           $table->increments('no');
           $table->integer('schedule_no')->unsigned();
           $table->integer('sequence');
           $table->integer('team_no');
           $table->time('time');
           $table->text('content');

           $table->foreign('schedule_no')->references('schedule_no')->on('schedules');

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
           Schema::dropIfExists('meettings');
     }
}
