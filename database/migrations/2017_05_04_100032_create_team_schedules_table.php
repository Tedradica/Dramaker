<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('team_schedules', function (Blueprint $table) {
           $table->integer('schedule_no')->unsigned();
           $table->integer('team_no');
           $table->integer('sequence');
           $table->string('type',20);
           $table->integer('user_no')->nullable();
           $table->string('name')->nullable();
           $table->text('prop')->nullable();
           $table->integer('data_count');

           $table->primary(['schedule_no','team_no','type','sequence']);
           $table->foreign('schedule_no')->references('schedule_no')->on('schedules');
           $table->foreign('team_no')->references('team_no')->on('teams');
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
           Schema::dropIfExists('team_schedules');
     }
}
