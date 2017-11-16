<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePplProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ppl_products', function (Blueprint $table) {
          $table->increments('ppl_no');
          $table->integer('drama_no')->unsigned();
          $table->integer('production_no')->unsigned();
          $table->integer('company_no');
          $table->integer('product_no');
          $table->string('product_name');
          $table->integer('category_no');
          $table->text('content');
          $table->string('ppl_status');

          $table->foreign('drama_no')->references('drama_no')->on('dramas');
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
        Schema::dropIfExists('ppl_products');
    }
}
