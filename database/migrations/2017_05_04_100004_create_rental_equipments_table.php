<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rental_equipments', function (Blueprint $table) {
            $table->increments('equipment_no');
            $table->string('company_name');
            $table->integer('category_no');
            $table->string('equipment_name');
            $table->string('equipment_status');

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
        Schema::dropIfExists('rental_equipments');
    }
}
