<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $location = [
          // ['category_no' => 11001,	'address' => '(323-802) 충남 부여군 부여읍 왕릉로 61',	'location_name' => '부여 능산리 고분',	'manager' => '충남 문화재팀 문화재 담당',	'manager_tel' => '041 - 830 - 2890',	'location_introduce' => '백제 시대 왕들의 무덤군으로 7기의 고분군으로 되어 있으며 백제 시대 무덤 가운데 가장 크다.'],
          // ['category_no' => 22001,	'address' => '(406-840) 인천 연수구 인천타워대로 250 트라이볼',	'location_name' => '송도 트라이볼',	'manager' => '인천아트플랫폼',	'manager_tel' => '032 - 455 - 7004',	'location_introduce' => '송도센트럴파크 일원에 위치한 인천세계도시축전 기념물. 내부 공연장 및 전시장.'],
          // ['category_no' => 32003,	'address' => '(140-022) 서울 용산구 남산공원길 105 N서울타워',	'location_name' => 'N서울타워',	'manager' => 'CJ엔시티',	'manager_tel' => '02 - 3455 - 9277',	'location_introduce' => '구 남산타워로 서울시내의 전경을 모두 볼수있고 N타워에서 보는 야경은 일품.서울의 랜드마크의 일부 ※ 문의: 3455-9277'],
          // ['category_no' => 41001,	'address' => '(339-713) 세종특별자치시 군면 대학길 300',	'location_name' => '한국 영상대학교',	'manager' => '한국 영상대학교',	'manager_tel' => '044 - 850 - 9000',	'location_introduce' => '산속깊숙한 조용한곳에자리하고 있으며 인제를 양성하고있다. 학교 주변등 경관이 아름 답다.'],
          // ['category_no' => 54003,	'address' => '(134-852) 서울 강동구 올림픽로 936',	'location_name' => '서원마을회관',	'manager' => '권오현',	'manager_tel' => '02 - 3425 - 5252',	'location_introduce' => '서원마을에 있는 마을회관입니다. 작은도서관과 어르신 쉼터가 있으며 아늑한 분위기로 촬영장소로 이미 많이 알려져 있습니다.'],
          // ['category_no' => 61002,	'address' => '(121-865) 서울 마포구 성미산로23길 8-5',	'location_name' => 'SPACE 93',	'manager' => '김남륜 실장',	'manager_tel' => '010 - 2845 - 1480',	'location_introduce' => '#. 2016. 11월 새롭게 OPEN한 스튜디오&게스트하우스, 마당이 넓은 2층 단독주택입니다. #. 영화/방송/예능/화보/웨딩 촬영에 적합하며 단체 촬영가능합니다.  #. 150평 부지에 50평 크기의 단독주택입니다.  #. 방6개, 화장실2개, 샤워룸1개가 준비되어 있습니다.  #. 마당에서 촬영도 언제든지 가능하며 촬영상황에 맞춰 모든 촬영이 가능합니다.  #. 각 방은 컨셉별로 구분되며 촬영상황에 따라 가구의 위치조정이 가능합니다.'],
          // ['category_no' => 72007,	'address' => '(130-817) 서울 동대문구 청계천로 563',	'location_name' => '동대문환경자원센터',	'manager' => '심성일',	'manager_tel' => '02 - 2127 - 4718',	'location_introduce' => '동대문구의 일반쓰레기 및 재활용쓰레기를 처리하고, 재활용하여 바이오에너지 등으로 가공하는, 재활용처리장 동대문환경자원센터입니다.'],
          // ['category_no' => 83001,	'address' => '(137-726) 서울 서초구 신반포로 194',	'location_name' => '서울고속버스터미널',	'manager' => '서울고속버스터미널 주식회사',	'manager_tel' => '02 - 535 - 4152',	'location_introduce' => '서울고속버스터미널은 육상운송의 혁명으로 일컬어지는 고속도로와 고속버스의 출현과 더불어 경제개발의 중심년대인 1975년도에 설립되었습니다. 기존의 류장 개념을 탈피하여 여객,물류,유통 그리고 지역간 네트워크 등 종합 허브기능이 강화된 세계 최대 규모의 고속터미널로서 경제발전과 국토의 균형개발 그리고, 지역간 문화교류를 촉진하는데 노력을 다하고 있습니다.'],
          // ['category_no' => 21005,	'address' => '(137-040) 서울 서초구 신반포로11길 40 650 한강공원',	'location_name' => '새빛둥둥섬',	'manager' => '천세영',	'manager_tel' => '02 - 2155 - 6225',	'location_introduce' => '플로팅아일랜드는 세계 최초로 물 위에 떠 있을 수 있는 부체 위에 건물을 짓는 플로팅 형태의 건축물입니다. 서울의 중심인 한강에 색다른 수변문화를 체험할 수 있는 랜드마크를 만들어보자는 아이디어에서 기획되었으며, 광화문과 예술의 전당, 과천 정부종합청사를 잇는 문화와 행정의 중심축에 위치한 특성을 살리고, 새롭게 한강을 조망할 수 있는 기회를 제공하는 문화, 관광의 거점이 될 것입니다.'],
          // ['category_no' => 42001,	'address' => '(130-805) 서울 동대문구 천호대로 317',	'location_name' => '하늘병원',	'manager' => '기획관리부 업무조정실',	'manager_tel' => '1544 - 7588',	'location_introduce' => '검진에서 치료, 재활까지 ONE-STOP 치료 SYSTEM, 정밀한 진단, 환자 맞춤형 치료방식, 스포츠의학적 치료, 체계적인 척추 및 근관절치료 SYSTEM을 갖춘 하늘병원입니다.'],

          ['category_no' => 11001,	'address' => '（323-802）忠南扶余郡ブヨウプ陵路61',	'location_name' => '付与陵山里古墳',	'manager' => '忠清南道文化財チームの文化財担当',	'manager_tel' => '041 - 830 - 2890',
          'location_introduce' => '百済時代の王の墓群で7期の古墳群となっており、百済時代の墓の中で最も大きい。'],
          ['category_no' => 22001,	'address' => '（406-840）仁川延寿区仁川タワー路250トライボール',	'location_name' => '松島トライボール',	'manager' => 'アートプラットホーム',	'manager_tel' => '032 - 455 - 7004',
          'location_introduce' => '松島セントラルパークメンバーの仁川世界都市祝典モニュメント。内部会場と展示場。'],
          ['category_no' => 32003,	'address' => '（140-022）ソウル龍山区南山公園道105 Nソウルタワー',	'location_name' => 'Nソウルタワー',	'manager' => 'CJエンシティ',	'manager_tel' => '02 - 3455 - 9277',
          'location_introduce' => '南山タワーにソウル市内の景色をすべて見るおりNタワーで見る夜景は絶品ソウルのランドマークの一部※お問い合わせ：3455-9277'],
          ['category_no' => 41001,	'address' => '（339-713）世宗特別自治市グンミョンデハクギル300',	'location_name' => '韓国映像大学',	'manager' => '韓国映像大学',	'manager_tel' => '044 - 850 - 9000',
          'location_introduce' => '山奥深い静かな環境に位置しており、制を養成している。学校周辺などの景観が美しいです。'],
          ['category_no' => 54003,	'address' => '（134-852）ソウル江東区オリンピック路936',	'location_name' => '書院タウンホール',	'manager' => 'クォン・オヒョン',	'manager_tel' => '02 - 3425 - 5252',
          'location_introduce' => '書院村の村会館です。小さな図書館とタオの避難所があり、居心地の良い雰囲気で撮影場所には既に広く知られています。'],
          ['category_no' => 61002,	'address' => '（121-865）ソウル麻浦区ソンミ山路23道8-5',	'location_name' => 'SPACE 93',	'manager' => 'キムナムリュン室長',	'manager_tel' => '010 - 2845 - 1480',
          'location_introduce' => '＃。 2016年11月に新たにOPENしたスタジオ・ゲストハウス、庭が広い2階一戸建て住宅です。 ＃。映画/テレビ/芸能/グラビア/結婚式の写真撮影に適しており、団体撮影が可能です。 ＃。 150坪の敷地に50坪サイズの一戸建て住宅です。 ＃。部屋6個、トイレ2つ、シャワールーム1つ用意されています。 ＃。庭での撮影も、いつでも可能であり、撮影状況に合わせて、すべての撮影が可能です。 ＃。各部屋はコンセプトごとに区分され、撮影状況に応じて家具の位置調整が可能です。'],
          ['category_no' => 72007,	'address' => '（130-817）ソウル東大門区清渓川路563',	'location_name' => '東大門環境資源センター',	'manager' => 'シムソンイル',	'manager_tel' => '02 - 2127 - 4718',
          'location_introduce' => '東大門区の一般ごみとリサイクルゴミを処理し、リサイクルして、バイオエネルギーなどに加工される、リサイクル処理場東大門環境資源センター.'],
          ['category_no' => 83001,	'address' => '（137-726）ソウル瑞草区シンバンポ路194',	'location_name' => 'ソウル高速バスターミナル',	'manager' => 'ソウル高速バスターミナル株式会社',	'manager_tel' => '02 - 535 - 4152',
          'location_introduce' => 'ソウル高速バスターミナルは陸上輸送の革命といわれる高速道路と高速バスの出現と経済開発の中心年代の1975年度に設立されました。既存のリュジャン概念を脱皮して、旅客、物流、流通および地域間のネットワークなどの総合ハブ機能が強化された世界最大規模の高速ターミナルとして、経済発展と国土の均衡開発で、地域間の文化交流を促進するために努力を尽くしています。'],
          ['category_no' => 21005,	'address' => '（137-040）ソウル瑞草区シンバンポ路11道40 650漢江公園',	'location_name' => 'セビトぷかぷか島',	'manager' => 'チョンセヨン',	'manager_tel' => '02 - 2155 - 6225',
          'location_introduce' => 'フローティングアイランドは、世界初の水の上に浮かんでいることができる浮体の上に建物を建てるフローティングタイプの建築物です。ソウルの中心である漢江に風変わりな水辺の文化を体験することができるランドマークを作ってみようというアイデアで企画され、光化門と芸術の殿堂、果川政府総合庁舎を結ぶ文化と行政の中心軸に位置する特性を生かして、新たに漢江を眺望できる機会を提供する文化、観光の拠点になります。'],
          ['category_no' => 42001,	'address' => '（130-805）ソウル東大門区千戸路317',	'location_name' => '空の病院',	'manager' => '企画管理部業務調整室',	'manager_tel' => '1544 - 7588',
          'location_introduce' => '検診で治療、リハビリまでONE-STOP治療SYSTEM、良い診断、患者オーダーメード型治療方式、スポーツ医学治療、体系的な脊椎と筋関節の治療SYSTEMを備えた空の病院です。'],

        ];

        DB::table('locations')->insert($location);
    }
}
