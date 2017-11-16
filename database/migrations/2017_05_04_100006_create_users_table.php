<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_no');
            $table->string('user_type');
            $table->string('id',20)->unique();
            $table->string('password',255);
            $table->string('name',50);
            $table->date('birth');
            $table->string('email',100)->unique();
            $table->string('tel',15);
            $table->string('type');
            $table->text('introduce');

            $table->string('stage_name',30)->nullable();         //예명
            $table->string('gender',1)->nullable();
            $table->smallInteger('height')->nullable();
            $table->smallInteger('weight')->nullable();
            $table->string('local')->nullable();
            $table->text('career')->nullable();

            $table->string('license_no')->nullable();
            $table->string('ceo')->nullable();
            $table->string('address')->nullable();
            $table->string('homepage')->nullable();
            $table->string('manager')->nullable();
            $table->string('manager_position')->nullable();
            $table->string('manager_tel')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
