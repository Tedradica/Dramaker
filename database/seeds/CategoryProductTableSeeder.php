<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
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
          ['category_no' => 1001,	'category' => '여성'],
          ['category_no' => 1002,	'category' => '남성'],
          ['category_no' => 1003,	'category' => '유아'],
          ['category_no' => 1004,	'category' => '스포츠'],
          ['category_no' => 1005,	'category' => '캐주얼'],
          ['category_no' => 1006,	'category' => '신발'],
          ['category_no' => 1007,	'category' => '가방/잡화'],
          ['category_no' => 1008,	'category' => '명품'],
          ['category_no' => 2001,	'category' => '스킨케어'],
          ['category_no' => 2002,	'category' => '메이크업'],
          ['category_no' => 2003,	'category' => '향수'],
          ['category_no' => 2004,	'category' => '헤어'],
          ['category_no' => 2005,	'category' => '바디'],
          ['category_no' => 2006,	'category' => '네일'],
          ['category_no' => 2007,	'category' => '뷰티소품'],
          ['category_no' => 2008,	'category' => '남성화장품'],
          ['category_no' => 2009,	'category' => '명품화장품'],
          ['category_no' => 2010,	'category' => '헬스화장품'],
          ['category_no' => 2011,	'category' => '선물세트/키트'],
          ['category_no' => 3001,	'category' => '완구/교구'],
          ['category_no' => 3002,	'category' => '유아동 도서'],
          ['category_no' => 3003,	'category' => '베이비패션'],
          ['category_no' => 3004,	'category' => '여아키즈패션'],
          ['category_no' => 3005,	'category' => '남아키즈패션'],
          ['category_no' => 3006,	'category' => '기저귀/물티슈'],
          ['category_no' => 3007,	'category' => '분유/유아식품'],
          ['category_no' => 3008,	'category' => '수유/이유용품'],
          ['category_no' => 3009,	'category' => '외출용품'],
          ['category_no' => 3010,	'category' => '유아목욕/스킨케어'],
          ['category_no' => 3011,	'category' => '위생/건강/세제'],
          ['category_no' => 3012,	'category' => '놀이매트/안전용품'],
          ['category_no' => 3013,	'category' => '유아동침구'],
          ['category_no' => 3014,	'category' => '유아가구/인테리어'],
          ['category_no' => 3015,	'category' => '임부/태교용품'],
          ['category_no' => 3016,	'category' => '출산준비물/선물'],
          ['category_no' => 4001,	'category' => '유기농/친환경전문관'],
          ['category_no' => 4002,	'category' => '과일'],
          ['category_no' => 4003,	'category' => '견과/건과'],
          ['category_no' => 4004,	'category' => '채소'],
          ['category_no' => 4005,	'category' => '쌀/잡곡'],
          ['category_no' => 4006,	'category' => '축산/계란'],
          ['category_no' => 4007,	'category' => '수산물/건어물'],
          ['category_no' => 4008,	'category' => '생수/음료'],
          ['category_no' => 4009,	'category' => '커피/원두/차'],
          ['category_no' => 4010,	'category' => '과자/간식'],
          ['category_no' => 4011,	'category' => '면/통조림/가공식품'],
          ['category_no' => 4012,	'category' => '가루/조미료/오일'],
          ['category_no' => 4013,	'category' => '장/소스/드레싱/식초'],
          ['category_no' => 4014,	'category' => '유제품/아이스크림'],
          ['category_no' => 4015,	'category' => '냉장/냉동/반찬'],
          ['category_no' => 4016,	'category' => '건강식품'],
          ['category_no' => 4017,	'category' => '분유/유아식품'],
          ['category_no' => 4018,	'category' => '선물세트/키트'],
          ['category_no' => 4019,	'category' => '수입식품'],
          ['category_no' => 5001,	'category' => '냄비/프라이팬'],
          ['category_no' => 5002,	'category' => '그룻/홈세트'],
          ['category_no' => 5003,	'category' => '컵/잔/텀블러'],
          ['category_no' => 5004,	'category' => '수저/커트러리'],
          ['category_no' => 5005,	'category' => '밀폐저장/도시락'],
          ['category_no' => 5006,	'category' => '보온/보냉용품'],
          ['category_no' => 5007,	'category' => '주방조리도구'],
          ['category_no' => 5008,	'category' => '이유/유아식기'],
          ['category_no' => 5009,	'category' => '주방수납/잡화'],
          ['category_no' => 5010,	'category' => '일회용품/종이컵'],
          ['category_no' => 5011,	'category' => '간식도구/베이킹'],
          ['category_no' => 5012,	'category' => '커피/티/와인'],
          ['category_no' => 5013,	'category' => '교자상/제수용품'],
          ['category_no' => 5014,	'category' => '주방가전'],
          ['category_no' => 5015,	'category' => '캠핑주방/버너'],
          ['category_no' => 5016,	'category' => '수입주방'],
          ['category_no' => 6001,	'category' => '화장지/생리대'],
          ['category_no' => 6002,	'category' => '세제'],
          ['category_no' => 6003,	'category' => '헤어/바디/세안'],
          ['category_no' => 6004,	'category' => '방향/제습/살충'],
          ['category_no' => 6005,	'category' => '구강/면도'],
          ['category_no' => 6006,	'category' => '욕실/세탁/청소용품'],
          ['category_no' => 6007,	'category' => '수납/정리'],
          ['category_no' => 6008,	'category' => '벽지/페인트/DIY'],
          ['category_no' => 6009,	'category' => '조명/전기/전지'],
          ['category_no' => 6010,	'category' => '공구/철물'],
          ['category_no' => 6011,	'category' => '안전/방재용품'],
          ['category_no' => 6012,	'category' => '생활잡화'],
          ['category_no' => 6013,	'category' => '건강/의료용품'],
          ['category_no' => 6014,	'category' => '주방수납/잡화'],
          ['category_no' => 6015,	'category' => '성인용품'],
          ['category_no' => 7001,	'category' => '가구'],
          ['category_no' => 7002,	'category' => '수납/정리'],
          ['category_no' => 7003,	'category' => '침구/수예'],
          ['category_no' => 7004,	'category' => '커튼/블라인드'],
          ['category_no' => 7005,	'category' => '카페트/매트'],
          ['category_no' => 7006,	'category' => '인테리어용품'],
          ['category_no' => 7007,	'category' => '인테리어자재'],
          ['category_no' => 7008,	'category' => '원예/가드닝'],
          ['category_no' => 8001,	'category' => '공기청정/계절가전'],
          ['category_no' => 8002,	'category' => '노트북/pc/태블릿'],
          ['category_no' => 8003,	'category' => '저장장치/공유기'],
          ['category_no' => 8004,	'category' => '모니터/프린터'],
          ['category_no' => 8005,	'category' => 'pc부품/주변기기'],
          ['category_no' => 8006,	'category' => '게임/RC/전동휠'],
          ['category_no' => 8007,	'category' => '휴대폰/액세서리'],
          ['category_no' => 8008,	'category' => '음향기기/이어폰'],
          ['category_no' => 8009,	'category' => 'TV/영상가전'],
          ['category_no' => 8010,	'category' => '카메라/캠코더'],
          ['category_no' => 8011,	'category' => '차량용 디지털기기'],
          ['category_no' => 8012,	'category' => '세탁기/생활가전'],
          ['category_no' => 8013,	'category' => '건강가전'],
          ['category_no' => 8014,	'category' => '이미용가전'],
          ['category_no' => 8015,	'category' => '냉장고/김치냉장고'],
          ['category_no' => 8016,	'category' => '주방가전'],
          ['category_no' => 9001,	'category' => '스포츠의류/잡화'],
          ['category_no' => 9002,	'category' => '스포츠 슈즈'],
          ['category_no' => 9003,	'category' => '스포츠 용품'],
          ['category_no' => 9004,	'category' => '등산/캠핑용품'],
          ['category_no' => 9005,	'category' => '낚시용품'],
          ['category_no' => 9006,	'category' => '레져용품'],
          ['category_no' => 10001,	'category' => '실내용품'],
          ['category_no' => 10002,	'category' => '실외용품/익스테리어'],
          ['category_no' => 10003,	'category' => '세차/관리용품'],
          ['category_no' => 10004,	'category' => '매트/시트/쿠션'],
          ['category_no' => 10005,	'category' => '공기청정/방향/탈취'],
          ['category_no' => 10006,	'category' => '비상/안전/차량가전'],
          ['category_no' => 10007,	'category' => '차량용디지털기기'],
          ['category_no' => 10008,	'category' => '오일/정비/소모품'],
          ['category_no' => 10009,	'category' => '타이어/휠/체인'],
          ['category_no' => 10010,	'category' => '차량용튜닝용품'],
          ['category_no' => 10011,	'category' => '램프/배터리/전기'],
          ['category_no' => 11001,	'category' => '유아 도서'],
          ['category_no' => 11002,	'category' => '어린이 도서'],
          ['category_no' => 11003,	'category' => '소설/에세이/시'],
          ['category_no' => 11004,	'category' => '가정 살림'],
          ['category_no' => 11005,	'category' => '건강/취미/여행'],
          ['category_no' => 11006,	'category' => '만화/라이트노벨'],
          ['category_no' => 11007,	'category' => '경제/경영/자기계발'],
          ['category_no' => 11008,	'category' => '예술/종교/과학'],
          ['category_no' => 11009,	'category' => '인문/사회/역사'],
          ['category_no' => 11010,	'category' => '초등참고서'],
          ['category_no' => 11011,	'category' => '중고등참고서'],
          ['category_no' => 11012,	'category' => '수험서/IT교재'],
          ['category_no' => 11013,	'category' => '국어/외국어.사전'],
          ['category_no' => 11014,	'category' => '해외원서'],
          ['category_no' => 11015,	'category' => '음반/DVD'],
          ['category_no' => 12001,	'category' => '연령별완구'],
          ['category_no' => 12002,	'category' => '캐릭터별완구'],
          ['category_no' => 12003,	'category' => '로봇/작동완구'],
          ['category_no' => 12004,	'category' => '블럭놀이'],
          ['category_no' => 12005,	'category' => '인형'],
          ['category_no' => 12006,	'category' => '역할놀이'],
          ['category_no' => 12007,	'category' => '승용완구/실내완구'],
          ['category_no' => 12008,	'category' => '스포츠/야외완구'],
          ['category_no' => 12009,	'category' => '물놀이/계절완구'],
          ['category_no' => 12010,	'category' => '학습완구/교구'],
          ['category_no' => 12011,	'category' => '신생아/영아완구'],
          ['category_no' => 12012,	'category' => '퍼즐/보드게임'],
          ['category_no' => 12013,	'category' => '피규어'],
          ['category_no' => 12014,	'category' => '프라모델'],
          ['category_no' => 12015,	'category' => 'RC/드론'],
          ['category_no' => 12016,	'category' => 'DIY'],
          ['category_no' => 12017,	'category' => '악기/음향기기'],
          ['category_no' => 12018,	'category' => '원예/가드닝'],
          ['category_no' => 13001,	'category' => '필기류'],
          ['category_no' => 13002,	'category' => '노트/다이어리'],
          ['category_no' => 13003,	'category' => '바인더/파일/앨범'],
          ['category_no' => 13004,	'category' => '복사용품/라벨지'],
          ['category_no' => 13005,	'category' => '사무용품'],
          ['category_no' => 13006,	'category' => '사무기기'],
          ['category_no' => 13007,	'category' => '사무용가구/수납'],
          ['category_no' => 13008,	'category' => '미술/화방용품'],
          ['category_no' => 13009,	'category' => '카드/엽서/봉투'],
          ['category_no' => 13010,	'category' => '데코/포장용품'],
          ['category_no' => 13011,	'category' => '파티용품'],
          ['category_no' => 13012,	'category' => '학습준비물'],
          ['category_no' => 14001,	'category' => '강아지 사료'],
          ['category_no' => 14002,	'category' => '강아지 간식'],
          ['category_no' => 14003,	'category' => '강아지 용품'],
          ['category_no' => 14004,	'category' => '고양이 사료'],
          ['category_no' => 14005,	'category' => '고양이 캔/간식'],
          ['category_no' => 14006,	'category' => '고양이 용품'],
          ['category_no' => 14007,	'category' => '관상어 용품'],
          ['category_no' => 14008,	'category' => '소동물 용품'],
          ['category_no' => 15001,	'category' => '항공사'],
          ['category_no' => 15002,	'category' => '호텔'],
          ['category_no' => 15003,	'category' => '테마파크'],
          ['category_no' => 16001,	'category' => '영화'],
          ['category_no' => 16002,	'category' => '뮤지컬'],
          ['category_no' => 16003,	'category' => '콘서트'],
          ['category_no' => 17001,	'category' => '아파트'],
          ['category_no' => 18001,	'category' => '승용차'],
          ['category_no' => 18002,	'category' => 'RV'],
          ['category_no' => 18003,	'category' => '택시/소형상용'],
          ['category_no' => 18004,	'category' => '트럭/버스'],
          ['category_no' => 19001,	'category' => '일반'],
          ['category_no' => 19002,	'category' => '산악'],
        ];

        DB::table('category_products')->insert($category);
    }
}
