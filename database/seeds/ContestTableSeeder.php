<?php

use Illuminate\Database\Seeder;

class ContestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contests = [
          // ['production_no' => 71,	'title' => '달콤한 연애 드라마',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20171230,
          // 'content' => '수상작 발표 2018년 1월 예정
          // 형식 및 분량
          // 1.docx파일
          // 2.페이지 5장
          // 3.파일이름 : 제목_이름
          // 4.캐릭터 설명 1장 포함',
          // 'view' => 98],
          ['production_no' => 71,	'title' => '甘い恋愛ドラマ',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20171230,	'content' => '受賞作発表2018年1月予定',	'view' => 98],
          ['production_no' => 75,	'title' => '医学ドラマ',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20180530,	'content' => '受賞作発表2018年6月予定',	'view' => 48],
          ['production_no' => 71,	'title' => 'ファンタジー史劇',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20180120,	'content' => '受賞作発表2018年2月予定',	'view' => 45],
          ['production_no' => 72,	'title' => '伝統史劇',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20180303,	'content' => '受賞作発表2018年1月予定',	'view' => 46],
          ['production_no' => 73,	'title' => 'シットコム第2のノンストップ',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20171130,	'content' => '受賞作発表2018年1月予定',	'view' => 28],
          ['production_no' => 75,	'title' => '自由ドラマ',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20171220,	'content' => '受賞作発表2018年1月予定',	'view' => 49],
          ['production_no' => 74,	'title' => '捜査ドラマ',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20181225,	'content' => '受賞作発表2019年1月予定',	'view' => 50],

        ];

        DB::table('contests')->insert($contests);

    }
}
