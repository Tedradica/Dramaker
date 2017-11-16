<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterScriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('character_scripts', function (Blueprint $table) {
           $table->integer('script_no')->unsigned();
           $table->integer('scene_no');
           $table->integer('sequence');
           $table->string('character_name')->nullable();
           $table->integer('user_no')->nullable();
           $table->string('name')->nullable();
           $table->text('script');

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
           Schema::dropIfExists('character_scripts');
     }
}
