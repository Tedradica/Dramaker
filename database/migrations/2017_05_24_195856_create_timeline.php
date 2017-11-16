<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('timelines', function (Blueprint $table) {
           $table->increments('notice_no');
           $table->integer('sender');
           $table->integer('receiver');
           $table->dateTime('time');
           $table->timestamps();
           $table->string('notice_type');
           $table->string('table_type');
           $table->integer('serial_no');
           $table->string('url')->nullable();
           $table->string('notice');
           $table->integer('notice_status');
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
         Schema::dropIfExists('timelines');
     }
}
