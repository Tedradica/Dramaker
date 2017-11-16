<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('location_no');
            $table->integer('category_no');
            $table->string('address');
            $table->string('location_name');
            $table->string('manager');
            $table->string('manager_tel');
            $table->text('location_introduce');
            
            $table->foreign('category_no')->references('category_no')->on('category_locations');

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
        Schema::dropIfExists('locations');
    }
}
