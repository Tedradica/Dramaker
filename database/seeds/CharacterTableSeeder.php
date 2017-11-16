<?php

use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $character=[
          ['script_no' => 1,	'sequence' => 1,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성', 'introduce' => '주인공이며 촉망받는 의사이다.'],
          ['script_no' => 1,	'sequence' => 2,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진', 'introduce' => '준혁과 절친인 동시에 의사로써 라이벌 관계이다.'],
          ['script_no' => 1,	'sequence' => 3,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희', 'introduce' => '준혁의 의대 후배이며 준혁과 도영과 삼각관계 형성'],
          ['script_no' => 1,	'sequence' => 4,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인', 'introduce' => '준혁의 외과 선배이자 부원장'],
          ['script_no' => 1,	'sequence' => 5,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형', 'introduce' => '내과 과장 '],
          ['script_no' => 1,	'sequence' => 6,	'character_name' => '박회장',	'user_no' => 102,	'name' => '구민백', 'introduce' => '명인대학 병원 회장'],
          ['script_no' => 1,	'sequence' => 7,	'character_name' => '이정미',	'user_no' => 103,	'name' => '김혜미', 'introduce' => '도영의 후배이며 도영을 사랑하고있다'],
          ['script_no' => 1,	'sequence' => 8,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인', 'introduce' => '외과 원장'],
          ['script_no' => 1,	'sequence' => 9,	'character_name' => '임동일',	'user_no' => 109,	'name' => '박재일', 'introduce' => '준혁의 아버지'],
          ['script_no' => 1,	'sequence' => 10,	'character_name' => '집도의',	'user_no' => 110,	'name' => '윤상우', 'introduce' => '집도의'],
          ['script_no' => 1,	'sequence' => 11,	'character_name' => '마취의',	'user_no' => 111,	'name' => '김인우', 'introduce' => '마취의'],
          ['script_no' => 1,	'sequence' => 12,	'character_name' => '간호사1',	'user_no' => 112,	'name' => '시서호', 'introduce' => '간호사1'],
          ['script_no' => 1,	'sequence' => 13,	'character_name' => '간호사2',	'user_no' => 113,	'name' => '채호현', 'introduce' => '간호사2'],
          ['script_no' => 1,	'sequence' => 14,	'character_name' => '간호사3',	'user_no' => 114,	'name' => '방국현', 'introduce' => '간호사3'],
          ['script_no' => 1,	'sequence' => 15,	'character_name' => '환자1',	'user_no' => 115,	'name' => '추태인', 'introduce' => '환자1'],
          ['script_no' => 1,	'sequence' => 16,	'character_name' => '의사1',	'user_no' => 116,	'name' => '정제환', 'introduce' => '준혁의 동기 의사1'],
          ['script_no' => 1,	'sequence' => 17,	'character_name' => '의사2',	'user_no' => 117,	'name' => '최백규', 'introduce' => '준혁의 동기 의사2'],
          ['script_no' => 1,	'sequence' => 18,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'introduce' => '명인대학교병원 소화기내과 전임의'],
          ['script_no' => 1,	'sequence' => 19,	'character_name' => '노교수 환자',	'user_no' => 152,	'name' => '양종훈',	'introduce' => '은퇴한 노교수'],
          ['script_no' => 1,	'sequence' => 20,	'character_name' => '환자 어머니1',	'user_no' => 160,	'name' => '이숙자',	'introduce' => '환자의 어머니'],
          ['script_no' => 1,	'sequence' => 21,	'character_name' => '유미라',	'user_no' => 142,	'name' => '임단아',	'introduce' => '전 명인대학교 병원 일반외과 병동 책임간호사'],
          ['script_no' => 1,	'sequence' => 22,	'character_name' => '유정진',	'user_no' => 154,	'name' => '강민제',	'introduce' => ' 명인대학교 병원 흉부외과 과장'],
          ['script_no' => 1,	'sequence' => 23,	'character_name' => '원무과장',	'user_no' => 144,	'name' => '고예슬',	'introduce' => '원무과장 인원'],
          ['script_no' => 1,	'sequence' => 24,	'character_name' => '홍상일',	'user_no' => 132,	'name' => '윤일우',	'introduce' => '명인대학교 병원 일반외과 부교수'],
          ['script_no' => 1,	'sequence' => 25,	'character_name' => '함민승',	'user_no' => 151,	'name' => '한재승',	'introduce' => '명인대학교 병원 일반외과 의국장'],
          ['script_no' => 1,	'sequence' => 26,	'character_name' => '민수정',	'user_no' => 143,	'name' => '김하윤',	'introduce' => '장준혁의 부인'],
          ['script_no' => 1,	'sequence' => 27,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'introduce' => '이주완의 딸'],
          ['script_no' => 1,	'sequence' => 28,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'introduce' => '와인바 운영'],
          ['script_no' => 1,	'sequence' => 29,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'introduce' => '이주완의 아내'],
          ['script_no' => 1,	'sequence' => 30,	'character_name' => '홍성희',	'user_no' => 158,	'name' => '김영순',	'introduce' => '우용길의 아내이며 연분홍회 회장'],
          ['script_no' => 1,	'sequence' => 31,	'character_name' => '치프',	'user_no' => 131,	'name' => '정기문',	'introduce' => '치프 단역'],
          ['script_no' => 1,	'sequence' => 32,	'character_name' => '윤예리',	'user_no' => 147,	'name' => '안소영',	'introduce' => '도영 부인 역'],
          ['script_no' => 1,	'sequence' => 33,	'character_name' => '정영숙',	'user_no' => 175,	'name' => '김정윤',	'introduce' => '장준혁의 어머니'],


        ];

        DB::table('characters')->insert($character);
    }
}
