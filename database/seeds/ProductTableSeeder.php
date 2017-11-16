<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = [
          ['company_no' => 82,	'product_name' => '소나타',	'category_no' => 18001,	'introduce' => '고대자동차의 승용차'],
          ['company_no' => 82,	'product_name' => '이오닉 electric',	'category_no' => 18001,	'introduce' => '고대자동차의 신형 승용차'],
          ['company_no' => 82,	'product_name' => '투산 ix Fuel Cell',	'category_no' => 18002,	'introduce' => '고대자동차의 RV신형차'],
          ['company_no' => 76,	'product_name' => '갤럭시x8',	'category_no' => 8007,	'introduce' => '사성전자의 최신형 스마트폰'],
          ['company_no' => 87,	'product_name' => 'RG V20',	'category_no' => 8007,	'introduce' => 'RG전자의 예술적인 카메라'],
          ['company_no' => 76,	'product_name' => '갤럭시 YESTE8',	'category_no' => 8007,	'introduce' => '사성전자의 보급형 스마트폰'],
          ['company_no' => 76,	'product_name' => 'QLED TV',	'category_no' => 8009,	'introduce' => '세계 유일 100% 컬러볼륨의 미래 TV'],
          ['company_no' => 84,	'product_name' => '해피라떼',	'category_no' => 4009,	'introduce' => '마시면 행복해지는 그맛 해피라떼'],
          ['company_no' => 83,	'product_name' => '망고팡팡',	'category_no' => 4009,	'introduce' => '입안 가득 망고의 향'],
          ['company_no' => 86,	'product_name' => '산보쌈',	'category_no' => 4006,	'introduce' => '산할머니보쌈의 예술적인 맛'],
          ['company_no' => 77,	'product_name' => 'LUCILE',	'category_no' => 7001,	'introduce' => '침대는 과학입니다. 바로 신혼부부를 위한 과학'],
          ['company_no' => 77,	'product_name' => 'Eliza',	'category_no' => 7001,	'introduce' => '가구가 아닙니다. 고급스러운 과학을 보여드리겠습니다.'],
          ['company_no' => 77,	'product_name' => 'Brigitte',	'category_no' => 7001,	'introduce' => '부담없는 과학을 원하신다면 바로 이제품'],
          ['company_no' => 80,	'product_name' => '패션스 맨투맨',	'category_no' => 1002,	'introduce' => '최신 유행하는 패션 패션스 맨투맨'],
          ['company_no' => 80,	'product_name' => '패션스 후드',	'category_no' => 1007,	'introduce' => '오늘부터 이것만 입을래요 패션스 후드'],
          ['company_no' => 81,	'product_name' => '맨스 트레이닝',	'category_no' => 1002,	'introduce' => '남자의 트레이닝 맨스 트래이닝'],
          ['company_no' => 81,	'product_name' => '맨스 셔츠',	'category_no' => 1002,	'introduce' => '남성미가 철철 맨스 셔츠'],
          ['company_no' => 78,	'product_name' => '자존감 수업',	'category_no' => 11007,	'introduce' => '포기하지마세요 이책이 도와드립니다.'],
          ['company_no' => 78,	'product_name' => '세상의 중심에 너 홀로 서라',	'category_no' => 11007,	'introduce' => '랄프 왈도 에머슨의 에세이로 오바마도 읽는 바로 그책'],
          ['company_no' => 78,	'product_name' => '얼굴은 답을 알고 있다.',	'category_no' => 11007,	'introduce' => '얼굴은 답을 알고 있습니다.'],
          ['company_no' => 79,	'product_name' => '파파파파파닉스',	'category_no' => 11013,	'introduce' => '영어는 기초부터'],
          ['company_no' => 79,	'product_name' => '걱정노노',	'category_no' => 11011,	'introduce' => '시험공부는 이제부터 걱정노노시리즈로 걱정노노'],
          ['company_no' => 79,	'product_name' => '자격지심',	'category_no' => 11012,	'introduce' => '자격증은 자격지심시리즈로 지금부터 심심하면 해요'],
        ];

        DB::table('products')->insert($product);

    }
}
