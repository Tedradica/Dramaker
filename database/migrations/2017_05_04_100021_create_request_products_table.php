<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('request_products', function (Blueprint $table) {
          $table->integer('drama_no')->unsigned();
          $table->integer('sequence');
          $table->integer('category_no');
          $table->text('content');

          $table->primary(['drama_no','sequence']);
          $table->foreign('drama_no')->references('drama_no')->on('dramas');

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
        Schema::dropIfExists('request_products');
    }
}
