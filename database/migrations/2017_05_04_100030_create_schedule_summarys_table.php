<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleSummarysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('schedule_summarys', function (Blueprint $table) {
           $table->integer('schedule_no')->unsigned();
           $table->integer('sequence');
           $table->integer('scene_no');
           $table->string('location');
           $table->string('mden');
           $table->string('sol');
           $table->string('ie');
           $table->text('scene_summary');
           $table->text('etc')->nullable();
           $table->string('schedule_status');

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
           Schema::dropIfExists('schedule_summarys');
     }
}
