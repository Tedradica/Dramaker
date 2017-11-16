<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionEmployeeView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement("CREATE VIEW v_production_employees AS
                      SELECT pe.production_no as 'production_no',
                      pu.name  as 'company_name',
                      u.user_no as 'user_no',
                      u.name as 'user_name',
                      po.position as 'position'
                      FROM production_employees pe , users u , users pu , positions po
                      WHERE u.user_no = pe.user_no
                      AND pe.production_no = pu.user_no
                      AND po.position_no = pe.position_no");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement("DROP VIEW v_production_employees");
    }
}
