<?php

use Illuminate\Database\Seeder;

class RecruitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $recruit = [
          // ['drama_no' => 1,	'production_no' => 71,	'user_no' => 7,	'title' => '조연 및 단역배우 구함',	'local' => '서울',	'created_at' => date("Y-m-d H:i:s"), 'dead_date' => 20170830,
          // 'content' => '남자 주인공의 친구인 조연1명 각종역할을 맡을 단역배우 남여불문 3명 구합니다.'],
          // ['drama_no' => 1,	'production_no' => 71,	'user_no' => 7,	'title' => '연출 구합니다.',	'local' => '서울',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170831,
          // 'content' => 'FD를 맡을 막내 구합니다. 가볍게 생각하지 마시고 열심히 하실 생각 있으신분만 오세요. 잘모르시면 잘가르쳐 드리니 그런 부분은 걱정 마세요'],
          // ['drama_no' => 5,	'production_no' => 72,	'user_no' => 48,	'title' => '연출',	'local' => '서울',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170830,
          // 'content' => '연출 구합니다. 중간에 나간 인원이 있어서 급하게 구합니다.'],
          // ['drama_no' => 3,	'production_no' => 73,	'user_no' => 6,	'title' => '배우구합니다.',	'local' => '서울',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170630,
          // 'content' => '조연 및 단역 구합니다.'],
          // ['drama_no' => 5,	'production_no' => 72,	'user_no' => 48,	'title' => '조명구합니다.',	'local' => '서울',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170830,
          // 'content' => '조명담당자 구합니다. 2명정도 구합니다.'],
          // ['drama_no' => 3,	'production_no' => 73,	'user_no' => 6,	'title' => '녹음기사 구합니다.',	'local' => '서울',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170630,
          // 'content' => '녹음기사 구합니다. 3명정도 구합니다.'],
          // ['drama_no' => 1,	'production_no' => 71,	'user_no' => 7,	'title' => '작가 구합니다.',	'local' => '서울',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170830,
          // 'content' => '작가 구합니다.'],
          ['drama_no' => 1,	'production_no' => 71,	'user_no' => 7,	'title' => '助演俳優と端役俳優',	'local' => 'TOKYO',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170830,
          'content' => '助演俳優、一人　端役俳優、3人'],
          ['drama_no' => 1,	'production_no' => 71,	'user_no' => 7,	'title' => '演出する人？',	'local' => 'TOKYO',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170831,
          'content' => 'よく教えてあげます、心配しないでください'],
          ['drama_no' => 5,	'production_no' => 72,	'user_no' => 48,	'title' => '演出する人？',	'local' => 'TOKYO',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170830,
          'content' => '演出する人1人早く連絡をしてください'],
          ['drama_no' => 3,	'production_no' => 73,	'user_no' => 6,	'title' => '俳優する人？',	'local' => 'TOKYO',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170630,
          'content' => '助演俳優と端役俳優する人、2人'],
          ['drama_no' => 5,	'production_no' => 72,	'user_no' => 48,	'title' => '照明する人？',	'local' => 'TOKYO',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170830,
          'content' => '照明する人、2人'],
          ['drama_no' => 3,	'production_no' => 73,	'user_no' => 6,	'title' => '録音する人？',	'local' => 'TOKYO',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170630,
          'content' => '録音する人、2人'],
          ['drama_no' => 1,	'production_no' => 71,	'user_no' => 7,	'title' => '作家する人？',	'local' => 'TOKYO',	'created_at' => date("Y-m-d H:i:s"),	'dead_date' => 20170830,
          'content' => '作家する人ないですか'],

        ];

        DB::table('recruits')->insert($recruit);
    }
}
