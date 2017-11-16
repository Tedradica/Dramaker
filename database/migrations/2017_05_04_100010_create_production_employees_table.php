<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('production_employees', function (Blueprint $table) {
            $table->integer('production_no')->unsigned();
            $table->integer('sequence');
            $table->integer('user_no')->unsigned();
            $table->integer('position_no');
            $table->timestamps();
            $table->date('fall_date')->nullable();

            $table->primary(['production_no','sequence']);
            $table->foreign('production_no')->references('user_no')->on('users');
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
        Schema::dropIfExists('production_employees');
    }
}
