<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contests', function (Blueprint $table) {
          $table->increments('contest_no');
          $table->integer('production_no')->unsigned();
          $table->string('title');
          $table->timestamps();
          $table->date('dead_date');
          $table->text('content');
          $table->integer('view');

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
        Schema::dropIfExists('contests');
    }
}
