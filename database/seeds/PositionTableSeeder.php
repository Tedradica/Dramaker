<?php

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $postiion = [
          // ['position_no' => 1000,	'position' => '제작자',	'permission' => 'x'],
          // ['position_no' => 1010,	'position' => '기획자',	'permission' => 'x'],
          // ['position_no' => 1030,	'position' => '프로듀서',	'permission' => 'x'],
          // ['position_no' => 1040,	'position' => '작가',	'permission' => 'x'],
          // ['position_no' => 2000,	'position' => '주연',	'permission' => 'x'],
          // ['position_no' => 2001,	'position' => '조연',	'permission' => 'x'],
          // ['position_no' => 2002,	'position' => '단역',	'permission' => 'x'],
          // ['position_no' => 3000,	'position' => '감독',	'permission' => 'x'],
          // ['position_no' => 3001,	'position' => '조감독',	'permission' => 'x'],
          // ['position_no' => 3010,	'position' => '연출감독',	'permission' => 'x'],
          // ['position_no' => 3011,	'position' => '연출부원',	'permission' => 'x'],
          // ['position_no' => 3020,	'position' => '촬영감독',	'permission' => 'x'],
          // ['position_no' => 3021,	'position' => '촬영팀원',	'permission' => 'x'],
          // ['position_no' => 3030,	'position' => '조명감독',	'permission' => 'x'],
          // ['position_no' => 3031,	'position' => '조명팀원',	'permission' => 'x'],
          // ['position_no' => 3040,	'position' => '미술감독',	'permission' => 'x'],
          // ['position_no' => 3041,	'position' => '미술팀원',	'permission' => 'x'],
          // ['position_no' => 3050,	'position' => '특수효과감독',	'permission' => 'x'],
          // ['position_no' => 3051,	'position' => '특수효과팀원',	'permission' => 'x'],
          // ['position_no' => 3060,	'position' => '편집감독',	'permission' => 'x'],
          // ['position_no' => 3061,	'position' => '편집팀원',	'permission' => 'x'],
          // ['position_no' => 3070,	'position' => '음악감독',	'permission' => 'x'],
          // ['position_no' => 3071,	'position' => '음악팀원',	'permission' => 'x'],
          // ['position_no' => 3080,	'position' => '녹음감독',	'permission' => 'x'],
          // ['position_no' => 3081,	'position' => '녹음팀원',	'permission' => 'x'],
          // ['position_no' => 3090,	'position' => '헤어디자이너',	'permission' => 'x'],
          // ['position_no' => 3091,	'position' => '분장',	'permission' => 'x'],
          // ['position_no' => 3100,	'position' => '무술감독',	'permission' => 'x'],
          // ['position_no' => 3101,	'position' => '스턴트',	'permission' => 'x'],
          // ['position_no' => 3900,	'position' => '로케이션 매니저',	'permission' => 'x'],
          // ['position_no' => 3901,	'position' => '스케줄 관리사',	'permission' => 'x'],
          // ['position_no' => 3902,	'position' => '스크립터',	'permission' => 'x'],
          // ['position_no' => 3903,	'position' => '운송',	'permission' => 'x'],
          // ['position_no' => 4000,	'position' => '투자 책임자',	'permission' => 'x'],
          // ['position_no' => 4001,	'position' => '투자팀원',	'permission' => 'x'],
          ['position_no' => 1000,	'position' => '製作者',	'permission' => 'x'],
          ['position_no' => 1010,	'position' => '企画者',	'permission' => 'x'],
          ['position_no' => 1030,	'position' => 'プロデューサー',	'permission' => 'x'],
          ['position_no' => 1040,	'position' => '作家',	'permission' => 'x'],
          ['position_no' => 2000,	'position' => '主演俳優',	'permission' => 'x'],
          ['position_no' => 2001,	'position' => '助演俳優',	'permission' => 'x'],
          ['position_no' => 2002,	'position' => '端役俳優',	'permission' => 'x'],
          ['position_no' => 3000,	'position' => '監督',	'permission' => 'x'],
          ['position_no' => 3001,	'position' => '助監督',	'permission' => 'x'],
          ['position_no' => 3010,	'position' => '演出監督',	'permission' => 'x'],
          ['position_no' => 3011,	'position' => '演出',	'permission' => 'x'],
          ['position_no' => 3020,	'position' => '撮影監督',	'permission' => 'x'],
          ['position_no' => 3021,	'position' => '撮影',	'permission' => 'x'],
          ['position_no' => 3030,	'position' => '照明監督',	'permission' => 'x'],
          ['position_no' => 3031,	'position' => '照明',	'permission' => 'x'],
          ['position_no' => 3040,	'position' => '美術監督',	'permission' => 'x'],
          ['position_no' => 3041,	'position' => '美術',	'permission' => 'x'],
          ['position_no' => 3050,	'position' => '特殊効果監督',	'permission' => 'x'],
          ['position_no' => 3051,	'position' => '特殊効果',	'permission' => 'x'],
          ['position_no' => 3060,	'position' => '編集監督',	'permission' => 'x'],
          ['position_no' => 3061,	'position' => '編集',	'permission' => 'x'],
          ['position_no' => 3070,	'position' => '音楽監督',	'permission' => 'x'],
          ['position_no' => 3071,	'position' => '音楽',	'permission' => 'x'],
          ['position_no' => 3080,	'position' => '録音監督',	'permission' => 'x'],
          ['position_no' => 3081,	'position' => '録音',	'permission' => 'x'],
          ['position_no' => 3090,	'position' => 'ヘアデザイナー',	'permission' => 'x'],
          ['position_no' => 3091,	'position' => '扮装',	'permission' => 'x'],
          ['position_no' => 3100,	'position' => '武術監督',	'permission' => 'x'],
          ['position_no' => 3101,	'position' => 'スタント',	'permission' => 'x'],
          ['position_no' => 3900,	'position' => 'ロケーションマネージャー',	'permission' => 'x'],
          ['position_no' => 3901,	'position' => 'スケジュール管理者',	'permission' => 'x'],
          ['position_no' => 3902,	'position' => 'スクリプター',	'permission' => 'x'],
          ['position_no' => 3903,	'position' => '運送',	'permission' => 'x'],
          ['position_no' => 4000,	'position' => '投資責任者',	'permission' => 'x'],
          ['position_no' => 4001,	'position' => '投資',	'permission' => 'x'],

        ];

        DB::table('positions')->insert($postiion);
    }
}
