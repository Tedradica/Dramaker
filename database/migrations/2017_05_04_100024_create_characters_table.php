<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('characters', function (Blueprint $table) {
           $table->integer('script_no')->unsigned();
           $table->integer('sequence');
           $table->string('character_name');
           $table->integer('user_no');
           $table->string('name');
           $table->text('introduce');

           $table->primary(['script_no','sequence']);
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
           Schema::dropIfExists('characters');
     }
}
