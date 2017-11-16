<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestApplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contest_applys', function (Blueprint $table) {
          $table->increments('apply_no');
          $table->integer('contest_no')->unsigned();
          $table->integer('user_no')->unsigned();
          $table->string('title');
          $table->text('content');
          $table->timestamps();
          $table->integer('like');
          $table->integer('apply_status');

          $table->foreign('contest_no')->references('contest_no')->on('contests');
          $table->foreign('user_no')->references('user_no')->on('users');
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
        Schema::dropIfExists('contest_applys');
    }
}
