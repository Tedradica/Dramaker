<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_no');
            $table->integer('company_no')->unsigned();
            $table->string('product_name');
            $table->integer('category_no');
            $table->string('introduce');

            $table->foreign('company_no')->references('user_no')->on('users');
            $table->foreign('category_no')->references('category_no')->on('category_products');
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
        Schema::dropIfExists('products');
    }
}
