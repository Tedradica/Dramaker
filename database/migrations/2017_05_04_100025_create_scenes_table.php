<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('scenes', function (Blueprint $table) {
           $table->integer('script_no')->unsigned();
           $table->integer('scene_no');
           $table->timestamps();  //created_ad / updated_at
           $table->string('location');
           $table->text('scene_summary');
           $table->integer('status');

           $table->primary(['script_no','scene_no']);
           $table->foreign('script_no')->references('script_no')->on('scripts');

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
           Schema::dropIfExists('scenes');
     }
}
