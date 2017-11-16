<?php

use Illuminate\Database\Seeder;

class CategoryEquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = [
          ['category_no' => 1,	'category' => '세트장비'],
          ['category_no' => 2,	'category' => '특수장비'],
          ['category_no' => 3,	'category' => '촬영장비'],
          ['category_no' => 4,	'category' => '렌즈'],
          ['category_no' => 5,	'category' => '삼각대'],
          ['category_no' => 6,	'category' => '조명'],
          ['category_no' => 7,	'category' => '음향장비'],
          ['category_no' => 8,	'category' => '영상장비'],
          ['category_no' => 9,	'category' => '편집장비'],
          ['category_no' => 10,	'category' => '기타'],
        ];

        DB::table('category_equipments')->insert($category);
    }
}
