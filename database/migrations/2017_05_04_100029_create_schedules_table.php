<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('schedules', function (Blueprint $table) {
           $table->increments('schedule_no');
           $table->integer('drama_no')->unsigned();
           $table->string('local',50);
           $table->date('date');   //weathers의 date FK
           $table->integer('number'); //회차
           $table->timestamps();  //created_at / updated_at

           $table->foreign('drama_no')->references('drama_no')->on('dramas');
          //  $table->foreign('local')->references('local')->on('weathers');
          //  $table->foreign('date')->references('date')->on('weathers');
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
           Schema::dropIfExists('schedules');
     }
}
