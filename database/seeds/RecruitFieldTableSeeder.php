<?php

use Illuminate\Database\Seeder;

class RecruitFieldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $recruit_field = [
          // ['recruit_no' => 1,	'sequence' => 1,	'recruit_position' => '단역',	'volume' => 3],
          // ['recruit_no' => 1,	'sequence' => 2,	'recruit_position' => '조연',	'volume' => 1],
          // ['recruit_no' => 2,	'sequence' => 1,	'recruit_position' => '연출',	'volume' => 1],
          // ['recruit_no' => 3,	'sequence' => 1,	'recruit_position' => '연출',	'volume' => 2],
          // ['recruit_no' => 4,	'sequence' => 1,	'recruit_position' => '조연',	'volume' => 2],
          // ['recruit_no' => 4,	'sequence' => 2,	'recruit_position' => '단역',	'volume' => 2],
          // ['recruit_no' => 5,	'sequence' => 1,	'recruit_position' => '조명',	'volume' => 2],
          // ['recruit_no' => 6,	'sequence' => 1,	'recruit_position' => '녹음',	'volume' => 2],
          // ['recruit_no' => 7,	'sequence' => 1,	'recruit_position' => '작가',	'volume' => 1],

          ['recruit_no' => 1,	'sequence' => 1,	'recruit_position' => '端役俳優',	'volume' => 3],
          ['recruit_no' => 1,	'sequence' => 2,	'recruit_position' => '助演俳優',	'volume' => 1],
          ['recruit_no' => 2,	'sequence' => 1,	'recruit_position' => '演出',	'volume' => 1],
          ['recruit_no' => 3,	'sequence' => 1,	'recruit_position' => '演出',	'volume' => 2],
          ['recruit_no' => 4,	'sequence' => 1,	'recruit_position' => '助演俳優',	'volume' => 2],
          ['recruit_no' => 4,	'sequence' => 2,	'recruit_position' => '端役俳優',	'volume' => 2],
          ['recruit_no' => 5,	'sequence' => 1,	'recruit_position' => '照明',	'volume' => 2],
          ['recruit_no' => 6,	'sequence' => 1,	'recruit_position' => '録音',	'volume' => 2],
          ['recruit_no' => 7,	'sequence' => 1,	'recruit_position' => '作家',	'volume' => 1],

        ];

        DB::table('recruit_fields')->insert($recruit_field);
    }
}
