<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDramaEquipments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('drama_equipments', function (Blueprint $table) {
           $table->increments('no');
           $table->integer('drama_no')->unsigned();
           $table->integer('production_no')->unsigned();
           $table->integer('equipment_no');
           $table->date('rental_date');
           $table->date('return_date');
           $table->string('status');


           $table->foreign('drama_no')->references('drama_no')->on('dramas');
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
         Schema::dropIfExists('drama_equipments');
     }
}
