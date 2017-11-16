<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('cameras', function (Blueprint $table) {
           $table->integer('script_no')->unsigned();
           $table->integer('scene_no');
           $table->integer('sequence');
           $table->text('content');

           $table->primary(['script_no','scene_no','sequence']);
           $table->foreign(['script_no','scene_no'])->references(['script_no','scene_no'])->on('scenes');

          //  $table->foreign('script_no')->references('script_no')->on('scripts');
          //  $table->foreign('scene_no')->references('scene_no')->on('scenes');
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
           Schema::dropIfExists('cameras');
     }
}
