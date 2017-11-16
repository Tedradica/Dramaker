<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPicturesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement("CREATE VIEW v_user_pictures AS
                      SELECT u.user_no , u.name , u.type 'type' , uf.file_no , uf.use_type , uf.sequence , uf.save_name , uf.path , uf.type 'file_type'
                      FROM users u, upload_files uf
                      WHERE u.user_no = uf.serial_no
                      AND uf.table_type = 'users'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement("DROP VIEW v_user_pictures");
    }
}
