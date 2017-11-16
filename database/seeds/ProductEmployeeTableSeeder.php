<?php

use Illuminate\Database\Seeder;

class ProductEmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employee = [
          // ['production_no' => 71,	'sequence' => 1,	'user_no' => 6,	'position_no' => 1000,	'created_at' => date("Y-m-d H:i:s")],
          // ['production_no' => 71,	'sequence' => 2,	'user_no' => 7,	'position_no' => 1030,	'created_at' => date("Y-m-d H:i:s")],
          // ['production_no' => 71,	'sequence' => 3,	'user_no' => 59,	'position_no' => 1040,	'created_at' => date("Y-m-d H:i:s")],
          // ['production_no' => 71,	'sequence' => 4,	'user_no' => 68,	'position_no' => 1040,	'created_at' => date("Y-m-d H:i:s")],
          // ['production_no' => 71,	'sequence' => 5,	'user_no' => 30,	'position_no' => 1010,	'created_at' => date("Y-m-d H:i:s")],
          // ['production_no' => 71,	'sequence' => 6,	'user_no' => 186,	'position_no' => 1030,	'created_at' => date("Y-m-d H:i:s")],

          ['production_no' => 71,	'sequence' => 1,	'user_no' => 6,	'position_no' => 1000,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 71,	'sequence' => 2,	'user_no' => 7,	'position_no' => 1030,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 71,	'sequence' => 3,	'user_no' => 59,	'position_no' => 1040,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 71,	'sequence' => 4,	'user_no' => 68,	'position_no' => 1040,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 71,	'sequence' => 5,	'user_no' => 30,	'position_no' => 1010,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 72,	'sequence' => 1,	'user_no' => 48,	'position_no' => 1030,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 72,	'sequence' => 2,	'user_no' => 12,	'position_no' => 3030,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 72,	'sequence' => 3,	'user_no' => 17,	'position_no' => 1040,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 73,	'sequence' => 1,	'user_no' => 6,	'position_no' => 1030,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 73,	'sequence' => 2,	'user_no' => 16,	'position_no' => 1040,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 73,	'sequence' => 3,	'user_no' => 33,	'position_no' => 3090,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 73,	'sequence' => 4,	'user_no' => 21,	'position_no' => 3040,	'created_at' => date("Y-m-d H:i:s")],
          ['production_no' => 71,	'sequence' => 6,	'user_no' => 180,	'position_no' => 1030,	'created_at' => date("Y-m-d H:i:s")],


        ];

        DB::table('production_employees')->insert($employee);
    }
}
