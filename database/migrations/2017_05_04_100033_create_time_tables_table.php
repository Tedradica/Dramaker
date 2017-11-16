<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('time_tables', function (Blueprint $table) {
           $table->integer('schedule_no')->unsigned();
           $table->integer('sequence');
           $table->time('time');
           $table->text('content');

           $table->primary(['schedule_no','sequence']);
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
           Schema::dropIfExists('time_tables');
     }
}
