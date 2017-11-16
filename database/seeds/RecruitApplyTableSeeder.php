<?php

use Illuminate\Database\Seeder;

class RecruitApplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $recruit_apply = [
          // ['recruit_no' => 1,	'user_no' => 56,	'name' => '지호선',	'birth' => 19870707,	'email' => 'gstar777@gmail.com',	'tel' => '010-8666-8666',	'career' => '드림하이',	'type' => '배우',	'stage_name' => '지스타',
          // 'gender' => 'm',	'height' => 185,	'weight' => 73,	'local' => '서울특별시',	'like' => 3,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 1,	'user_no' => 51,	'name' => '남민수',	'birth' => 19900909,	'email' => 'man1667@gmail.com',	'tel' => '010-8888-7878',	'career' => '연개소문',	'type' => '배우',	'stage_name' => '남단역',
          // 'gender' => 'm',	'height' => 175,	'weight' => 65,	'local' => '서울특별시',	'like' => 2,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 1,	'user_no' => 57,	'name' => '현수연',	'birth' => 19880828,	'email' => 'water7535@naver.com',	'tel' => '010-8784-8784',	'career' => '별에서온그대',	'type' => '배우',	'stage_name' => '현진',
          // 'gender' => 'm',	'height' => 191,	'weight' => 63,	'local' => '경기도 과천',	'like' => 1,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 1,	'user_no' => 54,	'name' => '나구현',	'birth' => 19911225,	'email' => 'watashi@gmail.com',	'tel' => '010-8686-8696',	'career' => '없음',	'type' => '배우',	'stage_name' => '나알바',
          // 'gender' => 'w',	'height' => 166,	'weight' => 48,	'local' => '서울특별시',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 1,	'user_no' => 55,	'name' => '손수선',	'birth' => 19951011,	'email' => 'handteacher@naver.com',	'tel' => '010-8787-8787',	'career' => '학교',	'type' => '배우',	'stage_name' => '손선생',
          // 'gender' => 'w',	'height' => 170,	'weight' => 52,	'local' => '경기도 인천',	'like' => 1,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 1,	'user_no' => 53,	'name' => '지상수',	'birth' => 19911111,	'email' => 'walk123@gmail.com',	'tel' => '010-8524-8524',	'career' => '시크릿가든',	'type' => '배우',	'stage_name' => '지나행',
          // 'gender' => 'm',	'height' => 172,	'weight' => 63,	'local' => '경기도 안산',	'like' => 1,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 1,	'user_no' => 52,	'name' => '여다혜',	'birth' => 19901212,	'email' => 'girl13@naver.com',	'tel' => '010-8899-9945',	'career' => '피노키오',	'type' => '배우',	'stage_name' => '여단역',
          // 'gender' => 'w',	'height' => 159,	'weight' => 46,	'local' => '경기도 부천',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 4,	'user_no' => 138,	'name' => '정예주',	'birth' => 19880102,	'email' => 'jung1252@gmail.com',	'tel' => '010-8000-0051',	'career' => '새어머니',	'type' => '배우',	'stage_name' => '예주',
          // 'gender' => 'w',	'height' => 173,	'weight' => 50,	'local' => '경기도 파주',	'like' => 3,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 4,	'user_no' => 139,	'name' => '이연정',	'birth' => 19870504,	'email' => 'duswjd8034@naver.com',	'tel' => '010-8000-0052',	'career' => '김과장',	'type' => '배우',	'stage_name' => '이연정',
          // 'gender' => 'w',	'height' => 173,	'weight' => 50,	'local' => '경기도 파주',	'like' => 1,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 4,	'user_no' => 142,	'name' => '임단아',	'birth' => 19840206,	'email' => 'dana3335@naver.com',	'tel' => '010-8000-0055',	'career' => '격투소녀',	'type' => '배우',	'stage_name' => '단아',
          // 'gender' => 'w',	'height' => 162,	'weight' => 48,	'local' => '인천광역시',	'like' => 2,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 4,	'user_no' => 147,	'name' => '안소영',	'birth' => 19800309,	'email' => 'soyoung5582@naver.com',	'tel' => '010-8000-0060',	'career' => '미로',	'type' => '배우',	'stage_name' => '안소영',
          // 'gender' => 'w',	'height' => 156,	'weight' => 45,	'local' => '경기도 수원',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 4,	'user_no' => 145,	'name' => '김미라',	'birth' => 19860705,	'email' => 'mira7845@naver.com',	'tel' => '010-8000-0058',	'career' => '발그레 미소',	'type' => '배우',	'stage_name' => '미라',
          // 'gender' => 'w',	'height' => 164,	'weight' => 48,	'local' => '경기도 부천',	'like' => 1,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 4,	'user_no' => 140,	'name' => '이연혜',	'birth' => 19860204,	'email' => 'lee6878@gmail.com',	'tel' => '010-8000-0053',	'career' => '신데렐라',	'type' => '배우',	'stage_name' => '연이',
          // 'gender' => 'w',	'height' => 149,	'weight' => 39,	'local' => '서울특별시',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 4,	'user_no' => 146,	'name' => '정사랑',	'birth' => 19870714,	'email' => 'sarang368@gmail.com',	'tel' => '010-8000-0059',	'career' => '퀸카',	'type' => '배우',	'stage_name' => '정사랑',
          // 'gender' => 'w',	'height' => 165,	'weight' => 49,	'local' => '경기도 수원',	'like' => 2,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 4,	'user_no' => 141,	'name' => '한송이',	'birth' => 19870609,	'email' => 'hansong1265@gmail.com',	'tel' => '010-8000-0054',	'career' => '그녀',	'type' => '배우',	'stage_name' => '한송이',
          // 'gender' => 'w',	'height' => 156,	'weight' => 45,	'local' => '서울특별시',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 5,	'user_no' => 234,	'name' => '방준혁',	'birth' => 19900728,	'email' => 'jun9774@gmail.com',	'tel' => '010-1000-0055',	'career' => '단군왕검',	'type' => '조명',	'stage_name' => '방준혁',
          // 'gender' => 'm',	'height' => 0,	'weight' => 0,	'local' => '경기도 파주',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 5,	'user_no' => 235,	'name' => '남영춘',	'birth' => 19810506,	'email' => 'dudcns112222@naver.com',	'tel' => '010-1000-0056',	'career' => '스캔들',	'type' => '조명',	'stage_name' => '남영춘',
          // 'gender' => 'm',	'height' => 0,	'weight' => 0,	'local' => '인천광역시',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 5,	'user_no' => 236,	'name' => '허범진',	'birth' => 19840807,	'email' => 'qjawls8764@gmail.com',	'tel' => '010-1000-0057',	'career' => '그때 그 시절',	'type' => '조명',	'stage_name' => '허범진',
          // 'gender' => 'm',	'height' => 0,	'weight' => 0,	'local' => '인천광역시',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 5,	'user_no' => 239,	'name' => '장용두',	'birth' => 19950524,	'email' => 'dyden0524@naver.com',	'tel' => '010-1000-0060',	'career' => '돌아온 청춘',	'type' => '조명',	'stage_name' => '장용두',
          // 'gender' => 'm',	'height' => 0,	'weight' => 0,	'local' => '인천광역시',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 5,	'user_no' => 238,	'name' => '하병화',	'birth' => 19910624,	'email' => 'qudghk0624@naver.com',	'tel' => '010-1000-0059',	'career' => '단군왕검',	'type' => '조명',	'stage_name' => '하병화',
          // 'gender' => 'm',	'height' => 0,	'weight' => 0,	'local' => '대전광역시',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 5,	'user_no' => 233,	'name' => '유주식',	'birth' => 19890624,	'email' => 'jusik87642@naver.com',	'tel' => '010-1000-0054',	'career' => '돌아온 청춘',	'type' => '조명',	'stage_name' => '유주식',
          // 'gender' => 'm',	'height' => 0,	'weight' => 0,	'local' => '경기도 연천',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],
          // ['recruit_no' => 5,	'user_no' => 237,	'name' => '서대기',	'birth' => 19921011,	'email' => 'daeki4473@naver.com',	'tel' => '010-1000-0058',	'career' => '손녀',	'type' => '조명',	'stage_name' => '서대기',
          // 'gender' => 'm',	'height' => 0,	'weight' => 0,	'local' => '부산광역시',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"), 'recruit_status' => 0],

          ['recruit_no' => 1,	'user_no' => 51,	'name' => '小嶋 雄',	'birth' => 19900909,	'email' => 'man1667@gmail.com',	'tel' => '010-8888-7878',	'career' => 'DOCTORS3　最強の名医',	'type' => '俳優',	'stage_name' => '小嶋 雄',
          'gender' => 'm',	'height' => 175,	'weight' => 65,	'local' => 'nagoya',	'like' => 3,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 1,	'user_no' => 52,	'name' => '梅原 愛 ',	'birth' => 19901212,	'email' => 'girl13@naver.com',	'tel' => '010-8899-9945',	'career' => 'デスノート',	'type' => '俳優',	'stage_name' => '梅原 愛 ',
          'gender' => 'w',	'height' => 159,	'weight' => 46,	'local' => 'nagoya',	'like' => 2,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 1,	'user_no' => 53,	'name' => '中塚 英雄',	'birth' => 19911111,	'email' => 'walk123@gmail.com',	'tel' => '010-8524-8524',	'career' => '花咲舞が黙ってない',	'type' => '俳優',	'stage_name' => '中塚 英雄',
          'gender' => 'm',	'height' => 172,	'weight' => 63,	'local' => 'fukuoka',	'like' => 1,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 1,	'user_no' => 54,	'name' => '松山 美佐',	'birth' => 19911225,	'email' => 'watashi@gmail.com',	'tel' => '010-8686-8696',	'career' => '銭の戦争',	'type' => '俳優',	'stage_name' => '松山 美佐',
          'gender' => 'w',	'height' => 166,	'weight' => 48,	'local' => 'tokyo',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 1,	'user_no' => 55,	'name' => '阿部 有希',	'birth' => 19951011,	'email' => 'handteacher@naver.com',	'tel' => '010-8787-8787',	'career' => '偽装の夫婦',	'type' => '俳優',	'stage_name' => '阿部 有希',
          'gender' => 'w',	'height' => 170,	'weight' => 52,	'local' => 'akita',	'like' => 1,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 1,	'user_no' => 56,	'name' => '島村 真樹',	'birth' => 19870707,	'email' => 'gstar777@gmail.com',	'tel' => '010-8666-8666',	'career' => '花より男子2（リターンズ）',	'type' => '俳優',	'stage_name' => '島村 真樹',
          'gender' => 'm',	'height' => 185,	'weight' => 73,	'local' => 'osaka',	'like' => 1,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 1,	'user_no' => 57,	'name' => '細野 竜一',	'birth' => 19880828,	'email' => 'water7535@naver.com',	'tel' => '010-8784-8784',	'career' => 'ごくせん　第3シリーズ',	'type' => '俳優',	'stage_name' => '細野 竜一',
          'gender' => 'm',	'height' => 191,	'weight' => 63,	'local' => 'gunma',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 4,	'user_no' => 138,	'name' => '大崎 光江',	'birth' => 19880102,	'email' => 'jung1252@gmail.com',	'tel' => '010-8000-0051',	'career' => '新撰組',	'type' => '俳優',	'stage_name' => '大崎 光江',
          'gender' => 'w',	'height' => 173,	'weight' => 50,	'local' => 'tokyo',	'like' => 3,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 4,	'user_no' => 139,	'name' => '田渕 友理子',	'birth' => 19870504,	'email' => 'duswjd8034@naver.com',	'tel' => '010-8000-0052',	'career' => 'Space Brothers',	'type' => '俳優',	'stage_name' => '田渕 友理子',
          'gender' => 'w',	'height' => 165,	'weight' => 48,	'local' => 'ehime',	'like' => 1,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 4,	'user_no' => 140,	'name' => '森岡 智帆',	'birth' => 19860204,	'email' => 'lee6878@gmail.com',	'tel' => '010-8000-0053',	'career' => '義経',	'type' => '俳優',	'stage_name' => '森岡 智帆',
          'gender' => 'w',	'height' => 149,	'weight' => 39,	'local' => 'tokyo',	'like' => 2,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 4,	'user_no' => 141,	'name' => '手塚 裕香',	'birth' => 19870609,	'email' => 'hansong1265@gmail.com',	'tel' => '010-8000-0054',	'career' => '白い巨塔',	'type' => '俳優',	'stage_name' => '手塚 裕香',
          'gender' => 'w',	'height' => 156,	'weight' => 45,	'local' => 'tokyo',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 4,	'user_no' => 142,	'name' => '井澤 香穂',	'birth' => 19840206,	'email' => 'dana3335@naver.com',	'tel' => '010-8000-0055',	'career' => '白い巨塔',	'type' => '俳優',	'stage_name' => '井澤 香穂',
          'gender' => 'w',	'height' => 162,	'weight' => 48,	'local' => 'tokyo',	'like' => 1,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 4,	'user_no' => 145,	'name' => '下山 明香',	'birth' => 19860705,	'email' => 'mira7845@naver.com',	'tel' => '010-8000-0058',	'career' => 'ウルトラマンガイア',	'type' => '俳優',	'stage_name' => '下山 明香',
          'gender' => 'w',	'height' => 164,	'weight' => 48,	'local' => 'tokyo',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 4,	'user_no' => 146,	'name' => '沖田 美生',	'birth' => 19870714,	'email' => 'sarang368@gmail.com',	'tel' => '010-8000-0059',	'career' => '無',	'type' => '俳優',	'stage_name' => '沖田 美生',
          'gender' => 'w',	'height' => 165,	'weight' => 49,	'local' => 'fukuoka',	'like' => 2,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 4,	'user_no' => 147,	'name' => '塩田 惠美子',	'birth' => 19800309,	'email' => 'soyoung5582@naver.com',	'tel' => '010-8000-0060',	'career' => '高校教師',	'type' => '俳優',	'stage_name' => '塩田 惠美子',
          'gender' => 'w',	'height' => 156,	'weight' => 45,	'local' => 'chiba',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 5,	'user_no' => 233,	'name' => '岡村 健介',	'birth' => 19890624,	'email' => 'jusik87642@naver.com',	'tel' => '010-1000-0054',	'career' => 'ザ世界仰天ニュース',	'type' => '照明',	'stage_name' => '岡村 健介',
          'gender' => 'm',	'height' => 170,	'weight' => 63,	'local' => 'tokyo',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 5,	'user_no' => 234,	'name' => '沼田 真',	'birth' => 19900728,	'email' => 'jun9774@gmail.com',	'tel' => '010-1000-0055',	'career' => '青い鳥',	'type' => '照明',	'stage_name' => '沼田 真',
          'gender' => 'm',	'height' => 166,	'weight' => 59,	'local' => 'tokyo',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 5,	'user_no' => 235,	'name' => '川村 信之',	'birth' => 19810506,	'email' => 'dudcns112222@naver.com',	'tel' => '010-1000-0056',	'career' => 'ウルトラマンガイア',	'type' => '照明',	'stage_name' => '川村 信之',
          'gender' => 'm',	'height' => 169,	'weight' => 58,	'local' => 'ehime',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 5,	'user_no' => 236,	'name' => '下田 雅人',	'birth' => 19840807,	'email' => 'qjawls8764@gmail.com',	'tel' => '010-1000-0057',	'career' => '無',	'type' => '照明',	'stage_name' => '下田 雅人',
          'gender' => 'm',	'height' => 180,	'weight' => 72,	'local' => 'tokyo',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 5,	'user_no' => 237,	'name' => '畑中 洋一',	'birth' => 19921011,	'email' => 'daeki4473@naver.com',	'tel' => '010-1000-0058',	'career' => '高校教師',	'type' => '照明',	'stage_name' => '畑中 洋一',
          'gender' => 'm',	'height' => 184,	'weight' => 73,	'local' => 'tokyo',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 5,	'user_no' => 238,	'name' => '早川 正志',	'birth' => 19910624,	'email' => 'qudghk0624@naver.com',	'tel' => '010-1000-0059',	'career' => '最後の家族',	'type' => '照明',	'stage_name' => '早川 正志',	
          'gender' => 'm',	'height' => 182,	'weight' => 70,	'local' => 'fukuoka',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],
          ['recruit_no' => 5,	'user_no' => 239,	'name' => '片桐 康弘',	'birth' => 19950524,	'email' => 'dyden0524@naver.com',	'tel' => '010-1000-0060',	'career' => 'ニコニコ少女',	'type' => '照明',	'stage_name' => '片桐 康弘',
          'gender' => 'm',	'height' => 167,	'weight' => 62,	'local' => 'chiba',	'like' => 0,	'created_at' => date("Y-m-d H:i:s"),	'recruit_status' => 0],

        ];

        DB::table('recruit_applys')->insert($recruit_apply);
    }
}
