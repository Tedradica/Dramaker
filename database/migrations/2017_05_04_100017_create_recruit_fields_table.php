<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('recruit_fields', function (Blueprint $table) {
          $table->integer('recruit_no')->unsigned();
          $table->integer('sequence');
          $table->string('recruit_position');
          $table->integer('volume');

          $table->primary(['recruit_no','sequence']);
          $table->foreign('recruit_no')->references('recruit_no')->on('recruits');

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
        Schema::dropIfExists('recruit_fields');
    }
}
