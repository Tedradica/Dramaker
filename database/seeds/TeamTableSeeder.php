<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $team=[
          ['team_no' => 1,	'team_type' => '演出'],
          ['team_no' => 2,	'team_type' => '制作'],
          ['team_no' => 3,	'team_type' => '小道具'],
          ['team_no' => 4,	'team_type' => '美術'],
          ['team_no' => 5,	'team_type' => '衣装'],
          ['team_no' => 6,	'team_type' => 'メーキャップ'],
          ['team_no' => 7,	'team_type' => '撮影/照明'],
          ['team_no' => 8,	'team_type' => '特殊効果'],
          ['team_no' => 9,	'team_type' => '俳優'],
          ['team_no' => 10,	'team_type' => '補助'],
        ];

        DB::table('teams')->insert($team);
    }
}
