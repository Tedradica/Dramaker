<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDramaEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('drama_employees', function (Blueprint $table) {
          $table->integer('drama_no')->unsigned();
          $table->integer('sequence');
          $table->integer('team_no');
          $table->integer('user_no')->unsigned();
          $table->integer('position_no');
          $table->timestamps();

          $table->primary(['drama_no','sequence']);
          $table->foreign('drama_no')->references('drama_no')->on('dramas');
          $table->foreign('team_no')->references('team_no')->on('teams');
          $table->foreign('user_no')->references('user_no')->on('users');
          $table->foreign('position_no')->references('position_no')->on('positions');
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
        Schema::dropIfExists('drama_employees');
    }
}
