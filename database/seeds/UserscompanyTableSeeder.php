<?php

use Illuminate\Database\Seeder;

class UserscompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = [
          // ['user_type'=>'기업',	'id' => 'pid1',	'password' => bcrypt(123456),	'name' => '㈜알엠로드',	'birth' => 20100505,	'email' => 'tmdgh96@naver.com',	'tel' => '050-8132-6858',	'type' => '제작사',	'introduce' => '드라마는 역시 알엠',	'license_no' => '206-87-05939',
          // 'ceo' => '조승호',	'address' => '서울특별시 마포구 동교로 144',	'homepage' => 'rmroad.co.kr',	'manager' => '하전영',	'manager_position' => '팀장',	'manager_tel' => '010-6868-5656'],
          // ['user_type'=>'기업',	'id' => 'pid2',	'password' => bcrypt(123456),	'name' => '와이낫미디어',	'birth' => 20130909,	'email' => 'whynot1@naver.com',	'tel' => '070-4564-1531',	'type' => '제작사',	'introduce' => '웹드라마',	'license_no' => '201-46-45487',
          // 'ceo' => '마주현',	'address' => '경기도 수원시 박지성로 751 ',	'homepage' => 'webwhynot.com',	'manager' => '기성용',	'manager_position' => '팀장',	'manager_tel' => '010-6464-6464'],
          // ['user_type'=>'기업',	'id' => 'pid3',	'password' => bcrypt(123456),	'name' => '단테미디어렙',	'birth' => 20140609,	'email' => 'dantework@naver.com',	'tel' => '050-4645-4455',	'type' => '제작사',	'introduce' => '올해도 한번',	'license_no' => '301-45-48942',
          // 'ceo' => '김기현',	'address' => '경기도 성남시 황새울로 234 분당트라팰리스',	'homepage' => 'danteworks.com',	'manager' => '황소현',	'manager_position' => '팀장',	'manager_tel' => '010-4646-4646'],
          // ['user_type'=>'기업',	'id' => 'pid4',	'password' => bcrypt(123456),	'name' => '먹고자미디어',	'birth' => 20160501,	'email' => 'eat132@naver.com',	'tel' => '010-4444-4646',	'type' => '제작사',	'introduce' => '먹고자도 할건 합니다.',	'license_no' => '333-33-55555',
          // 'ceo' => '강호동',	'address' => '경기도 남양주시 남양주로 195',	'homepage' => 'eatandsleep.com',	'manager' => '이수근',	'manager_position' => '팀장',	'manager_tel' => '010-6666-6633'],
          // ['user_type'=>'기업',	'id' => 'pid5',	'password' => bcrypt(123456),	'name' => '삶미디어',	'birth' => 20151230,	'email' => 'life@gmail.com',	'tel' => '010-4242-4747',	'type' => '제작사',	'introduce' => '의미 있는 삶을 살아요.',	'license_no' => '333-33-33333',
          // 'ceo' => '이혁진',	'address' => '인천광역시 연수구 인천타워대로 323',	'homepage' => 'dramalife.com',	'manager' => '장산수',	'manager_position' => '팀장',	'manager_tel' => '010-6123-6412'],
          // ['user_type'=>'기업',	'id' => 'cid1',	'password' => bcrypt(123456),	'name' => '사성전자',	'birth' => 19800506,	'email' => 'sasumg@naver.com',	'tel' => '02-2255-0114',	'type' => '기업',	'introduce' => '전자제품은 사성',	'license_no' => '124-81-00998',
          // 'ceo' => '권사현',	'address' => '경기도 수원시 영통구 사성로 129',	'homepage' => 'sasung.com',	'manager' => '사담당',	'manager_position' => '전무',	'manager_tel' => '010-6969-6922'],
          // ['user_type'=>'기업',	'id' => 'cid2',	'password' => bcrypt(123456),	'name' => '심몬스',	'birth' => 19950622,	'email' => 'master@simmons.co.kr',	'tel' => '1899-8182',	'type' => '기업',	'introduce' => '가구는 역시 심몬스',	'license_no' => '126-81-24808',
          // 'ceo' => '안경호',	'address' => '경기도 이천시 대월면 대평로 590',	'homepage' => 'simmons.co.kr',	'manager' => '김영훈',	'manager_position' => '관리책임자',	'manager_tel' => '010-6123-6789'],
          // ['user_type'=>'기업',	'id' => 'cid3',	'password' => bcrypt(123456),	'name' => '교소문고',	'birth' => 19820105,	'email' => 'privacy@kyosobook.co.kr',	'tel' => '1544-1900',	'type' => '기업',	'introduce' => '교소문고아닌교',	'license_no' => '102-81-11670',
          // 'ceo' => '이한우',	'address' => '서울특별시 종로구 종로 1',	'homepage' => 'kyoso.co.kr',	'manager' => '한상준',	'manager_position' => '관리책임자',	'manager_tel' => '010-6663-6548'],
          // ['user_type'=>'기업',	'id' => 'cid4',	'password' => bcrypt(123456),	'name' => 'no24',	'birth' => 19880611,	'email' => 'privacy@no24.com',	'tel' => '1544-3800',	'type' => '기업',	'introduce' => '뭐든지 no',	'license_no' => '229-81-37000',
          // 'ceo' => '김기호',	'address' => '서울특별시 영등포구 은행로 11',	'homepage' => 'no24.com',	'manager' => '김석환',	'manager_position' => '공동대표',	'manager_tel' => '010-6775-2922'],
          // ['user_type'=>'기업',	'id' => 'cid5',	'password' => bcrypt(123456),	'name' => '패션스',	'birth' => 20090504,	'email' => 'privacy@fas.com',	'tel' => '1544-4444',	'type' => '기업',	'introduce' => '패션은 역시 패션스',	'license_no' => '228-81-12345',
          // 'ceo' => '소시현',	'address' => '서울특별시 마포구 마파람로 168',	'homepage' => 'fas.com',	'manager' => '소시현',	'manager_position' => '대표',	'manager_tel' => '010-6666-1234'],
          // ['user_type'=>'기업',	'id' => 'cid6',	'password' => bcrypt(123456),	'name' => '맨스숍',	'birth' => 20130609,	'email' => 'privacy@mans.com',	'tel' => '1544-9988',	'type' => '기업',	'introduce' => '남자의 패션 맨스숍',	'license_no' => '228-81-12346',
          // 'ceo' => '한남자',	'address' => '인천광역시 연수구 인천타워대로 323',	'homepage' => 'mans.com',	'manager' => '한남자',	'manager_position' => '대표',	'manager_tel' => '010-6487-3322'],
          // ['user_type'=>'기업',	'id' => 'cid7',	'password' => bcrypt(123456),	'name' => '고대자동차',	'birth' => 19630404,	'email' => 'master@kodai.com',	'tel' => '1544-4433',	'type' => '기업',	'introduce' => '고대자동차가 자동차를',	'license_no' => '229-81-14811',
          // 'ceo' => '정주몽',	'address' => '울산광역시 남구 옥주로 154',	'homepage' => 'kodai.com',	'manager' => '한기손',	'manager_position' => '전무',	'manager_tel' => '010-6777-7777'],
          // ['user_type'=>'기업',	'id' => 'cid8',	'password' => bcrypt(123456),	'name' => '망고식스',	'birth' => 20020202,	'email' => 'mango@naver.com',	'tel' => '02-501-7266',	'type' => '기업',	'introduce' => '디저트는 망고 시익스',	'license_no' => '211-88-50923',
          // 'ceo' => '강훈',	'address' => '서울특별시 강남구 신사동 563-30',	'homepage' => 'mangosix.co.kr',	'manager' => '최선현',	'manager_position' => '팀장',	'manager_tel' => '010-6999-9999'],
          // ['user_type'=>'기업',	'id' => 'cid9',	'password' => bcrypt(123456),	'name' => '해피커피',	'birth' => 20080808,	'email' => 'happyco@naver.com',	'tel' => '1544-4466',	'type' => '기업',	'introduce' => '행복하게 커피를',	'license_no' => '213-85-11123',
          // 'ceo' => '한행복',	'address' => '대전광역시 남구 손주로 11',	'homepage' => 'happyco.co.kr',	'manager' => '한불주',	'manager_position' => '팀장',	'manager_tel' => '010-6988-8888'],
          // ['user_type'=>'기업',	'id' => 'cid10',	'password' => bcrypt(123456),	'name' => '엄마손김치',	'birth' => 20040909,	'email' => 'momskimchi@naver.com',	'tel' => '1599-1543',	'type' => '기업',	'introduce' => '엄마손맛',	'license_no' => '123-88-88844',
          // 'ceo' => '엄손임',	'address' => '인천광역시 연수구 김수로 121',	'homepage' => 'momskimchi.com',	'manager' => '조고린',	'manager_position' => '팀장',	'manager_tel' => '010-6977-7777'],
          // ['user_type'=>'기업',	'id' => 'cid11',	'password' => bcrypt(123456),	'name' => '산할머니보쌈',	'birth' => 20030405,	'email' => 'halmoney@naver.com',	'tel' => '1699-1666',	'type' => '기업',	'introduce' => '아.아.아.아. 산할머니보쌈!',	'license_no' => '123-89-12456',
          // 'ceo' => '한먼임',	'address' => '경기도 안산시 도두로 스시로 45',	'homepage' => 'halmeat.co.kr',	'manager' => '마누린',	'manager_position' => '팀장',	'manager_tel' => '010-6966-6666'],
          // ['user_type'=>'기업',	'id' => 'cid12',	'password' => bcrypt(123456),	'name' => 'RG전자',	'birth' => 19731010,	'email' => 'master@rge.co.kr',	'tel' => '02-3777-1114',	'type' => '기업',	'introduce' => '역시 RG전자',	'license_no' => '107-86-14075',
          // 'ceo' => '조성진',	'address' => '서울특별시 영등포구 여의대로 239 RG트윈타워',	'homepage' => 'rge.co.kr',	'manager' => '정도현',	'manager_position' => '공동대표',	'manager_tel' => '010-6565-5566'],


          ['user_type'=>'기업',	'id' => 'pid1',	'password' => bcrypt(123456),	'name' => '㈜JM ROAD',	'birth' => 20100505,	'email' => 'tmdgh96@naver.com',	'tel' => '050-8132-6858',	'type' => 'production',	'introduce' => 'ドラマはやっぱりジェーエム',
          'license_no' => '206-87-05939',	'ceo' => '小谷 翔太',	'address' => '144, Donggyo-ro, Mapo-gu, Seoul, Republic of Korea',	'homepage' => 'rmroad.co.kr',	'manager' => '永野 一紀',	'manager_position' => 'チーム長',	'manager_tel' => '010-6868-5656'],
          ['user_type'=>'기업',	'id' => 'pid2',	'password' => bcrypt(123456),	'name' => 'WHYNOTmedia',	'birth' => 20130909,	'email' => 'whynot1@naver.com',	'tel' => '070-4564-1531',	'type' => 'production',	'introduce' => 'ウェブドラマ',
          'license_no' => '201-46-45487',	'ceo' => '水野 孝彦',	'address' => 'Yeongtong-ro 331beon-gil, Yeongtong-gu, Suwon-si, Gyeonggi-do, Republic of Korea',	'homepage' => 'webwhynot.com',	'manager' => '杉田 郁生',	'manager_position' => 'チーム長',	'manager_tel' => '010-6464-6464'],
          ['user_type'=>'기업',	'id' => 'pid3',	'password' => bcrypt(123456),	'name' => 'DANTE media',	'birth' => 20140609,	'email' => 'dantework@naver.com',	'tel' => '050-4645-4455',	'type' => 'production',	'introduce' => '今年こそ',
          'license_no' => '301-45-48942',	'ceo' => '市川 瑞樹 ',	'address' => '234, Hwangsaeul-ro, Bundang-gu, Seongnam-si, Gyeonggi-do, Republic of Korea',	'homepage' => 'danteworks.com',	'manager' => '宮川 真琴',	'manager_position' => 'チーム長',	'manager_tel' => '010-4646-4646'],
          ['user_type'=>'기업',	'id' => 'pid4',	'password' => bcrypt(123456),	'name' => 'eatand sleep',	'birth' => 20160501,	'email' => 'eat132@naver.com',	'tel' => '010-4444-4646',	'type' => 'production',	'introduce' => '食べて寝ましょう',
          'license_no' => '333-33-55555',	'ceo' => '若井 浩一',	'address' => '25, Pyeongnae-ro, Namyangju-si, Gyeonggi-do, Republic of Korea',	'homepage' => 'eatandsleep.com',	'manager' => '早田 宏治',	'manager_position' => 'チーム長',	'manager_tel' => '010-6666-6633'],
          ['user_type'=>'기업',	'id' => 'pid5',	'password' => bcrypt(123456),	'name' => 'LIFE media',	'birth' => 20151230,	'email' => 'life@gmail.com',	'tel' => '010-4242-4747',	'type' => 'production',	'introduce' => '意味のある生活のために',	
          'license_no' => '333-33-33333',	'ceo' => '南 俊治',	'address' => '323, Incheon tower-daero, Yeonsu-gu, Incheon, Republic of Korea',	'homepage' => 'dramalife.com',	'manager' => '小野田 賢三',	'manager_position' => 'チーム長',	'manager_tel' => '010-6123-6412'],
          ['user_type'=>'기업',	'id' => 'cid1',	'password' => bcrypt(123456),	'name' => 'SAMSUNG',	'birth' => 19800506,	'email' => 'sasumg@naver.com',	'tel' => '02-2255-0114',	'type' => 'company',	'introduce' => 'samsung',
          'license_no' => '124-81-00998',	'ceo' => '植木 隆太',	'address' => '54-40, Saseong-ro, Gwangmyeong-si, Gyeonggi-do, Republic of Korea',	'homepage' => 'sasung.com',	'manager' => '佐竹 和郎',	'manager_position' => '専務',	'manager_tel' => '010-6969-6922'],
          ['user_type'=>'기업',	'id' => 'cid2',	'password' => bcrypt(123456),	'name' => 'Simmons Bedding Company',	'birth' => 19950622,	'email' => 'master@simmons.co.kr',	'tel' => '1899-8182',	'type' => 'company',	'introduce' => 'ベッドは科学',
          'license_no' => '126-81-24808',	'ceo' => '河合 玲',	'address' => '590, Daepyeong-ro, Daewol-myeon, Icheon-si, Gyeonggi-do, Republic of Korea',	'homepage' => 'simmons.co.kr',	'manager' => '西島 利樹',	'manager_position' => '共同代表',	'manager_tel' => '010-6123-6789'],
          ['user_type'=>'기업',	'id' => 'cid3',	'password' => bcrypt(123456),	'name' => 'kyobobook',	'birth' => 19820105,	'email' => 'privacy@kyosobook.co.kr',	'tel' => '1544-1900',	'type' => 'company',	'introduce' => 'kyobo',
          'license_no' => '102-81-11670',	'ceo' => '石塚 裕亮',	'address' => '1, Jong-ro, Jongno-gu, Seoul, Republic of Korea',	'homepage' => 'kyoso.co.kr',	'manager' => '江頭 一希',	'manager_position' => '共同代表',	'manager_tel' => '010-6663-6548'],
          ['user_type'=>'기업',	'id' => 'cid4',	'password' => bcrypt(123456),	'name' => 'NO24',	'birth' => 19880611,	'email' => 'privacy@no24.com',	'tel' => '1544-3800',	'type' => 'company',	'introduce' => '何でも',
          'license_no' => '229-81-37000',	'ceo' => '秋吉 宏樹',	'address' => '11, Eunhaeng-ro, Yeongdeungpo-gu, Seoul, Republic of Korea',	'homepage' => 'no24.com',	'manager' => '岩山 義和',	'manager_position' => '共同代表',	'manager_tel' => '010-6775-2922'],
          ['user_type'=>'기업',	'id' => 'cid5',	'password' => bcrypt(123456),	'name' => 'FashionS',	'birth' => 20090504,	'email' => 'privacy@fas.com',	'tel' => '1544-4444',	'type' => 'company',	'introduce' => 'ファッション',
          'license_no' => '228-81-12345',	'ceo' => '白井 郁弥',	'address' => '235, World Cup-ro, Mapo-gu, Seoul, Republic of Korea',	'homepage' => 'fas.com',	'manager' => '兼田 弘行',	'manager_position' => '共同代表',	'manager_tel' => '010-6666-1234'],
          ['user_type'=>'기업',	'id' => 'cid6',	'password' => bcrypt(123456),	'name' => 'MANSHOP',	'birth' => 20130609,	'email' => 'privacy@mans.com',	'tel' => '1544-9988',	'type' => 'company',	'introduce' => '男のファッション',
          'license_no' => '228-81-12346',	'ceo' => '笠原 哲弥',	'address' => '323, Incheon tower-daero, Yeonsu-gu, Incheon, Republic of Korea',	'homepage' => 'mans.com',	'manager' => '木幡 義弘',	'manager_position' => '共同代表',	'manager_tel' => '010-6487-3322'],
          ['user_type'=>'기업',	'id' => 'cid7',	'password' => bcrypt(123456),	'name' => 'hyundai',	'birth' => 19630404,	'email' => 'master@kodai.com',	'tel' => '1544-4433',	'type' => 'company',	'introduce' => 'hyundai',
          'license_no' => '229-81-14811',	'ceo' => '熊坂 隆一',	'address' => '154-1, Sinjeong-ro, Nam-gu, Ulsan, Republic of Korea',	'homepage' => 'kodai.com',	'manager' => '多胡 隆宏',	'manager_position' => '専務',	'manager_tel' => '010-6777-7777'],
          ['user_type'=>'기업',	'id' => 'cid8',	'password' => bcrypt(123456),	'name' => 'mangosix',	'birth' => 20020202,	'email' => 'mango@naver.com',	'tel' => '02-501-7266',	'type' => 'company',	'introduce' => 'mangosix',
          'license_no' => '211-88-50923',	'ceo' => '濱田 颯',	'address' => '171, Dosan-daero, Gangnam-gu, Seoul, Republic of Korea',	'homepage' => 'mangosix.co.kr',	'manager' => '桶谷 卓',	'manager_position' => 'チーム長',	'manager_tel' => '010-6999-9999'],
          ['user_type'=>'기업',	'id' => 'cid9',	'password' => bcrypt(123456),	'name' => 'happycoffee',	'birth' => 20080808,	'email' => 'happyco@naver.com',	'tel' => '1544-4466',	'type' => 'company',	'introduce' => 'happycoffee',
          'license_no' => '213-85-11123',	'ceo' => '豊川 克己',	'address' => '143, Mannyeonnam-ro 3beon-gil, Seo-gu, Daejeon, Republic of Korea',	'homepage' => 'happyco.co.kr',	'manager' => '泊 和典',	'manager_position' => 'チーム長',	'manager_tel' => '010-6988-8888'],
          ['user_type'=>'기업',	'id' => 'cid10',	'password' => bcrypt(123456),	'name' => 'motherskimchi',	'birth' => 20040909,	'email' => 'momskimchi@naver.com',	'tel' => '1599-1543',	'type' => 'company',	'introduce' => 'motherskimchi',
          'license_no' => '123-88-88844',	'ceo' => '勝田 明彦',	'address' => '4, Yongdam-ro 99beon-gil, Yeonsu-gu, Incheon, Republic of Korea',	'homepage' => 'momskimchi.com',	'manager' => '江上 彰吾',	'manager_position' => 'チーム長',	'manager_tel' => '010-6977-7777'],
          ['user_type'=>'기업',	'id' => 'cid11',	'password' => bcrypt(123456),	'name' => 'sanhalmony',	'birth' => 20030405,	'email' => 'halmoney@naver.com',	'tel' => '1699-1666',	'type' => 'company',	'introduce' => 'sanhalmony',
          'license_no' => '123-89-12456',	'ceo' => '深江 陽平',	'address' => ' 25-1, Sido-ro 86beon-gil, Bukdo-myeon, Ongjin-gun, Incheon, Republic of Korea',	'homepage' => 'halmeat.co.kr',	'manager' => '深澤 一矢',	'manager_position' => 'チーム長',	'manager_tel' => '010-6966-6666'],
          ['user_type'=>'기업',	'id' => 'cid12',	'password' => bcrypt(123456),	'name' => 'LG electronics',	'birth' => 19731010,	'email' => 'master@rge.co.kr',	'tel' => '02-3777-1114',	'type' => 'company',	'introduce' => 'LG electronics',
          'license_no' => '107-86-14075',	'ceo' => '藤島 昇平',	'address' => '70, Yeoui-daero, Yeongdeungpo-gu, Seoul, Republic of Korea',	'homepage' => 'rge.co.kr',	'manager' => '八尋 雄平',	'manager_position' => '共同代表',	'manager_tel' => '010-6565-5566'],



        ];

        DB::table('users')->insert($users);
    }
}
