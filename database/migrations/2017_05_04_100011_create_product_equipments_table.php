<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('production_equipments', function (Blueprint $table) {
            $table->increments('equipment_no');
            $table->integer('production_no')->unsigned();
            $table->string('equipment_name');
            $table->integer('category_no');
            $table->integer('sequence');
            $table->string('equipment_status');

            $table->foreign('production_no')->references('user_no')->on('users');
            $table->foreign('category_no')->references('category_no')->on('category_equipments');
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
        Schema::dropIfExists('production_equipments');
    }
}
