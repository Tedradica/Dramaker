<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFcmTokens extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
       //
       Schema::create('fcm_tokens', function (Blueprint $table) {
         $table->integer('user_no')->unique();
         $table->string('user_id',20)->unique();
         $table->string('token')->nullable();

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
      Schema::dropIfExists('fcm_tokens');

  }
}
