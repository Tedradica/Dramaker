<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreCharacterScripts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('pre_character_scripts', function (Blueprint $table) {
           $table->integer('script_no')->unsigned();
           $table->integer('scene_no');
           $table->integer('sequence');
           $table->string('character_name')->nullable();
           $table->integer('user_no')->nullable();
           $table->string('name')->nullable();
           $table->text('script');

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
        Schema::dropIfExists('pre_character_scripts');

    }
}
