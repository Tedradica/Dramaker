<?php

use Illuminate\Database\Seeder;

class ScriptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         //
         $script=[
           ['user_no' => 59,	'drama_no' => 1],
           ['user_no' => 17,	'drama_no' => 2],
           ['user_no' => 16,	'drama_no' => 3],
           ['user_no' => 260,	'drama_no' => 4],
           ['user_no' => 261,	'drama_no' => 5],
           ['user_no' => 263,	'drama_no' => 6],
           ['user_no' => 262,	'drama_no' => 7],
         ];

         DB::table('scripts')->insert($script);
     }
}
