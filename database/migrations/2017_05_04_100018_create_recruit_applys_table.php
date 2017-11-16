<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitApplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('recruit_applys', function (Blueprint $table) {
          $table->increments('apply_no');
          $table->integer('recruit_no')->unsigned();
          $table->integer('user_no')->unsigned();
          $table->string('name');
          $table->date('birth');
          $table->string('email',100);
          $table->string('tel');
          $table->text('career')->nullable();
          $table->string('type');
          $table->string('stage_name')->nullable();
          $table->string('gender')->nullable();
          $table->smallInteger('height')->nullable();
          $table->smallInteger('weight')->nullable();
          $table->string('local')->nullable();
          $table->integer('like');
          $table->timestamps();
          $table->integer('recruit_status');

          $table->foreign('recruit_no')->references('recruit_no')->on('recruits');
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
        Schema::dropIfExists('recruit_applys');
    }
}
