<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('upload_files', function (Blueprint $table) {
          $table->increments('file_no');
          $table->string('table_type');
          $table->integer('serial_no');
          $table->string('use_type');
          $table->integer('sequence');
          $table->string('original_name')->nullable();
          $table->string('save_name')->nullable();
          $table->timestamps();
          $table->string('path');
          $table->string('type')->nullable();
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
        Schema::dropIfExists('upload_files');
    }
}
