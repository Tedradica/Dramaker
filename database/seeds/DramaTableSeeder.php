<?php

use Illuminate\Database\Seeder;

class DramaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $drama=[
          // ['production_no' => 71,
          // 'drama_name' => '굿닥터',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '휴먼 메디컬',
          // 'story' => '[서번트 신드롬] 현상을 겪는 자폐증 환자이자, 초등학생 정도의 인격을 가진 발달장애 청년이, 모진 시선과 고된 미션을 극복하고, [소아외과 전문의]로 거듭 나는 휴먼 메디컬 스토리',
          // 'drama_status' => '제작중'],
          //
          // ['production_no' => 72,
          // 'drama_name' => '태양의 후예',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '휴먼 액션 로맨스',
          // 'story' => '한 때는 푸른 초원과 울창한 숲, 에메랄드 빛 바다와 먼 산의 만년설로 ‘신들의 정원’으로 불렸던 ‘우르크’. 그러나 몇 년째 끝도 없이 계속되는 가뭄과 홍수 그로인한 장기적인 경제 불황으로 신들도 떠나버린 땅이 된 지 오래다. 우르크는 매장된 풍부한 천연자원을 노리는 이웃국가들과 벌어지는 국지전으로 인해 더욱 위기에 처하고 UN에 도움을 요청하기에 이른다. 지금으로부터 2년 전 UN의 주도하에 이웃 국가들과 평화협정이 체결됨에 따라 UN의 요청으로 우르크의 수도에 주둔한 한국의 ‘동해부대’는 UN평화유지군 소속으로 평화 재건 임무를 맡게 되었다.',
          // 'drama_status' => '제작전'],
          //
          // ['production_no' => 73,
          // 'drama_name' => '굿와이프',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '정치 스릴러',
          // 'story' => '승승장구하던 검사 남편이 정치 스캔들과 부정부패로 구속되자 결혼 이후 일을 그만두었던 아내가 가정의 생계를 책임지기 위해 변호사로 복귀하면서 자신의 진정한 정체성을 찾아가는 법정 수사 드라마.',
          // 'drama_status' => '제작전'],
          //
          // ['production_no' => 74,
          // 'drama_name' => '시크릿 가든',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '판타지 코미디 로맨스',
          // 'story' => '여자라면 누구나 동화 속 공주님처럼 마법 같은 사랑이 찾아오길 꿈꾼다. 때문에 여자들에겐 현실보다 환상이 더 달콤한 법이다. 그런 당신이 어느 날 진짜 마법에 걸린다면?!! 중세유럽의 대 장원(莊園)을 연상케 하는 아름답고 거대한 대저택. 사람들은 숲과 연못으로 둘러싸인 그곳을 ‘시크릿 가든’이라 부른다. 외부와 철저히 차단된 그곳엔 히스테릭하고 까칠한 백화점 사장 주원과 오만방자한 한류스타 오스카가 살고 있다. 흰 토끼를 쫓다 ‘이상한 나라’로 굴러 떨어진 앨리스처럼 어느 날 라임은 누구나 한번은 꿈꾸어 보았을 환상적인 공간 ‘시크릿 가든’에 발을 들여놓고 만다.  앨리스에게 모자장수와 체셔 고양이가 있었다면 라임에겐 ‘시크릿 가든’의 꽃미남 4.5촌(?)형제 주원과 오스카가 있는데... ',
          // 'drama_status' => '제작전'],
          //
          // ['production_no' => 72,
          // 'drama_name' => '오 나의 귀신님',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '코미디 로맨스',
          // 'story' => '음탕한 처녀귀신과 귀신 따위 믿지 않는 자뻑 셰프의 응큼발칙 로맨스. 남자 무지하게 밝히는 처녀귀신, 인간으로 환생하기 위해 인간남자를 꼬시려다 ‘진짜 사랑’을 하다.',
          // 'drama_status' => '제작전'],
          //
          // ['production_no' => 75,
          // 'drama_name' => '상속자들',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '하이틴 로맨스',
          // 'story' => '부유층 고교생들의 사랑과 우정을 그리는 하이틴 트렌디 드라마.',
          // 'drama_status' => '제작전'],
          //
          // ['production_no' => 74,
          // 'drama_name' => '해를 품은 달',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '추리 드라마',	'story' =>
          // '문무를 겸비한 군주 성조대왕은 선왕 대부터 지속되어 온 외척세력의
          //  권세를 제한하고, 그들을 조정에서 배제하고자 노력한다.
          //  그러나 자신이 총애하던 이복동생 의성군이 역모에 연루되는 사건이
          //  발생하고, 이로 인해 정국은 급반전을 맞게 된다.',
          //  'drama_status' => '제작전'],
          //
          // ['production_no' => 71,
          // 'drama_name' => '너의 목소리가 들려',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '초능력 법정',
          // 'story' => '속물 국선전담변호사 장혜성과 사람의 마음을 읽는 신비의 초능력 소년 박수하,
          // 바른 생활 사나이 차관우가 만나며 벌어지는 사건들을 흥미진진하게 그린 드라마 ',
          // 'drama_status' => '제작완료'],
          //
          // ['production_no' => 71,
          // 'drama_name' => '내 딸 금사월',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '가족 로맨스',
          // 'story' => '인간 삶의 보금자리인 집에 대한 드라마로 주인공 금사월이 복수와 증오로 완전히
          //  해체된 가정 위에 새롭게 꿈의 집을 짓는 드라마판 건축학개론.',
          //  'drama_status' => '제작완료'],
          //
          // ['production_no' => 71,
          // 'drama_name' => '또 오해영',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '로맨스 코미디',
          // 'story' => '"오해영"이라는 동명이인의 두 여자와 그들 사이에서 미래를 보기 시작한 남자
          // "박도경"이 미필적 고의로 서로의 인생에 얽혀가는 동명 오해 로맨스',
          // 'drama_status' => '제작완료'],
          //
          // ['production_no' => 71,
          // 'drama_name' => '쇼핑왕 루이',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '로맨스 코미디',
          // 'story' => '돈으로 무엇이든 살 수 있었던 남자 쇼핑왕 루이가 날개없는 천사
          // 고복실을 만나 돈으로는 쇼핑 불가능한 사랑의 정서를 귀하게 얻어 가는 이야기',
          // 'drama_status' => '제작완료'],
          //
          // ['production_no' => 71,
          // 'drama_name' => '달의 연인 보보경심 려',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '시대극 판타지 청춘 로맨스',
          // 'story' => '고려 태조 이후 황권 경쟁 한복판에 서게 되는 황자들과 개기일식 날
          // 고려 소녀 해수로 들어간 현대 여인 고하진이 써내려가는
          // 사랑과 우정, 신의의 궁중 트렌디 로맨스',
          // 'drama_status' => '제작완료'],
          //
          // ['production_no' => 71,
          // 'drama_name' => '힘쎈여자 도봉순',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '판타지 로맨스 코미디 범죄 ',
          // 'story' => '힘쎈여자 도봉순을 중심으로 여성들을 대변하는 스토리를 그린 드라마로
          // 선천적으로 어마무시한 괴력을 타고난 도봉순이 세상 어디에도 본 적 없는 똘끼충만한
          // 재벌 2세 안민혁과 정의감에 불타는 경찰 인국두를 만나면서 벌어지는 세 남녀의 힘겨루기 로맨스',
          // 'drama_status' => '제작완료'],
          //
          // ['production_no' => 71,
          // 'drama_name' => '응급남녀',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '로맨스 코미디',
          // 'story' => '6년 전에 이혼했던 원수 같은 부부 오진희, 오창민이 병원 응급실에서 늦깎이 인턴으로 다시 만나 펼치는 로맨틱 코미디 드라마',
          // 'drama_status' => '제작완료'],
          //
          // ['production_no' => 71,
          // 'drama_name' => '호텔킹',
          // 'created_at' => date("Y-m-d H:i:s"),
          // 'genre' => '스릴러 로맨스',
          // 'story' => '어머니와 자신을 버린 아버지에 대한 한을 품은 차재완(이동욱)이라는 남자가
          // 냉철하고 빈틈없는 호텔리어로 성장하는 이야기를 담은 드라마',
          // 'drama_status' => '제작완료'],
          ['production_no' => 71,
          'drama_name' => '白い巨塔',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => '医療',
          'story' => '浪速大学病院の手術室では鶴川大阪府知事の食道がんの手術が始まろうとしていた。
          第一外科の金井講師（奥田達士）や佃医局長（片岡孝太郎）らが緊張し忙しく立ち働いている。
          見学室には、鵜飼医学部長（伊武雅刀）、東第一外科教授（石坂浩二）、則内病院長（田中主将）もそろった。
          だが、執刀医の財前五郎助教授（唐沢寿明）が現れない。オペの時間が始まろうとするその時、財前が登場した。
          あせる周囲を黙殺し、財前は、時計を一瞥、一気にメスを振るい始めた。神業のような財前の手並みは正確にして敏速を極めた。
          がんは食道だけではなく大動脈にまで浸潤していたが、財前はひるまずメスを進め、吹き出る血にも顔色一つ変えず腕を振るう。
          手術完了。4時間35分…驚異的な短さである。財前は見学室に一礼した。
          そんなころ、里見第一内科助教授（江口洋介）は、鵜飼によって胃がんと診断された患者・小西みどりの症状に疑問を抱き始めていた。',
          'drama_status' => '制作中'],

          ['production_no' => 72,
          'drama_name' => '月の恋人～Moon Lovers～',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => 'ロマンス',
          'story' => '国内で急成長中のインテリアメーカー「レゴリス」社長・葉月蓮介は中国進出を企てていた。蓮介が乗りこんだのは活気あふれる都市、
          上海。そこで蓮介を待っていたのは仕事を共にしてきたインテリアデザイナー・二宮真絵美、資産家令嬢で人気モデル・大貫柚月、
          そして中国人女性・リュウ・シュウメイとの出会い。この3人の女性との出会いを機に、蓮介の人生に転機が訪れる。',
          'drama_status' => '制作前'],

          ['production_no' => 73,
          'drama_name' => '新参者',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => '刑事',
          'story' => '「舞台となるのは「日本橋・人形町」。一人の女性が殺害され、この殺人事件を担当することになったのが、
          日本橋署に異動してきたばかりの、ニューカマー・加賀恭一郎。その加賀恭一郎の捜査線上に浮かび上がった容疑者は、
          なんと人形町の商店街住民全員。人形町の人々の「心の謎」を抜群の洞察力と、推理力で紐解いていく加賀恭一郎。
          複雑に入り組んだ人間関係をひとつひとつ解き明かし、最後に浮かび上がった容疑者とは!?バラバラに散らばっているかのように見える物語が、
          実はひとつの線で結ばれており、その一本の線が繋がったとき、全ての謎が解き明かされる。',
          'drama_status' => '制作前'],

          ['production_no' => 74,
          'drama_name' => 'フリーター、家を買う。',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => 'ドラマ',
          'story' => '「３ヵ月で就職先を辞め、その気になればいつでも働けるという甘い考えのまま家にひきこもって、
          だらしない生活を送っていた誠治（二宮和也）は、ある日母親がうつ病を患っていることを知る。
          母親・寿美子（浅野温子）は、無関心な家族の態度や近所からの陰湿ないじめに静かに耐え続けた結果、
          かなり重度のうつ病にかかっていたのだ。家族のサポートや、ストレスを排除することが重要だと医者から忠告されるが、
          典型的な企業戦士だった父親・誠一（竹中直人）は、その事実を受け止めきれず、母を気遣うどころか、
          家から逃避してしまうありさま。母の一番の理解者である誠治の姉・亜矢子（井川遥）は、数年前に埼玉の開業医のもとに嫁いでおり、
          嫁ぎ先での人間関係や息子の育児に悩みながらも、自分が出た後の武家を、そして自堕落な弟をとても心配していた。',
          'drama_status' => '制作前'],

          ['production_no' => 72,
          'drama_name' => '臨場',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => '刑事',
          'story' => '倉石の下で見習い中の調査官心得・一ノ瀬は愕然とする。おそらく自殺、
          と判断された遺体の身元がかつての不倫相手・ゆかりだったのだ。2人の関係は終わっていたものの、
          自分との過去がバレるのはマズいと考えた一ノ瀬は、倉石に同行し現場に臨場する。
          結婚すると赤いルビーの指輪を見せびらかしていた生前の彼女の様子からは、自殺とは縁がないように思われた。
          その上、彼女の遺体からは指輪が消えていた。自殺ではない、と思う一ノ瀬だが、そんなことを言えるはずもなく、
          他殺の痕跡が一切見つからないため、縊死と判断を下さざるを得ない状況になってしまう。',
          'drama_status' => '制作前'],

          ['production_no' => 75,
          'drama_name' => '曲げられない女',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => 'コメディー',
          'story' => '司法試験に合格した直後に事故死した父・義紀が果たせなかった弁護士になる夢を諦められずにいる荻原早紀は、
          弁護士法人事務所で見習いパラリーガルをしながら弁護士を目指しているものの、司法試験には9年連続で不合格。
          周囲からは結婚を勧められているが、彼女は物事をきちんとしないと気が済まない「曲げられない女」だった。
          ある日、早紀は、高校時代の同級生・璃子と再会。直後に恋人の正登からプロポーズされたが、
          ひょんなことから知り合った光輝に「結婚に夢を持つな」と忠告され、曲げられなかった自分の人生に迷いが生まれる。',
          'drama_status' => '制作前'],

          ['production_no' => 74,
          'drama_name' => '絶対零度～未解決事件特命捜査～',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => '刑事',
          'story' => '警視庁捜査一課に新しく設置された『未解決事件特命捜査対策室』に、3ヶ月前に配属された新人刑事・桜木泉。
          彼女は強烈な個性を持つ捜査員達と対立しながらも、難事件を解決していく。しかし、「八王子都営住宅女性射殺事件（八王子事件）」と
          「板東産婦人科医院殺人放火事件」の捜査中に起きた出来事が、対策室のメンバーの心に暗い影を落とすこととなる。',
          'drama_status' => '制作前'],

          ['production_no' => 71,
          'drama_name' => '同窓会～ラブ・アゲイン症候群',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => 'ロマンス',
          'story' => '「30年ぶりに同窓会で再会した４人の男女。平凡な子持ち主婦、妻子ある刑事、離婚寸前のジャーナリスト、
          起業家の妻でヒルズ族。恋におちた彼らが巻き込まれていく「嵐」とは？',
          'drama_status' => '制作終わり'],

          ['production_no' => 71,
          'drama_name' => 'ナサケの女 ～国税局査察官～',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => '刑事',
          'story' => '職業物の刑事ドラマ的な要素が強く、ドラマの進行としても勧善懲悪且つ1話構成で毎回ゲストが脱税容疑者として登場し、
          これらを裁くという至ってシンプルな構成である。しかし、主人公松子の周囲に様々なクセのある人間が絡み、回を重ねるごとに人間ドラマも描写される。',
          'drama_status' => '制作終わり'],

          ['production_no' => 71,
          'drama_name' => '怪物くん',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => 'ファンタジー',
          'story' => 'わがままが行き過ぎて追放された怪物ランドの王子は、お付きのオオカミ男、ドラキュラ、フランケンと共に人間界にやってきた。
          その頃、かつて怪物族との戦いに敗れた悪魔族の王子・デモキンもまた記憶を失ったまま人間界に復活をしていた。',
          'drama_status' => '制作終わり'],

          ['production_no' => 71,
          'drama_name' => 'ホタルノヒカリ2',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => 'ロマンス',
          'story' => '「ずっとラブ無しだったOL・ホタルが、なぜか突然上司の高野部長と同居するハメに。
          しかも年下のイケメン彼氏までできちゃった!?…でも、心は部長（心地よい縁側のある一軒家つき）に落ち着いて、
          干物女は成長した、はずでした。…あれから３年！あのホタルがついに「結婚」と直面!?「女子の憧れ・夢」…だけどキレイ事だけじゃないのが「結婚」。
          「恋愛」さえも「どーやるんだっけ？」だったホタルが、「結婚」する事なんてできるのだろーか？',
          'drama_status' => '制作終わり'],

          ['production_no' => 71,
          'drama_name' => '医龍　Team Medical Dragon 3',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => '医療',
          'story' => '天才的な外科手腕を持つ朝田龍太郎と、彼が率いる医療チームが様々な困難を乗り越えて患者を救っていく。
          共演は稲森いずみ、佐々木蔵之介、阿部サダヲほか。明真大学付属病院の集中治療室にバイク事故の負傷者が運び込まれてきた。
          医師たちは内部の損傷のひどさに諦めかけるが、そこへ病院を去ったはずの朝田龍太郎が現れ手術を成功させる。',
          'drama_status' => '制作終わり'],

          ['production_no' => 71,
          'drama_name' => '警視庁 失踪人捜査課',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => '刑事 ファンタジー',
          'story' => '超能力者を自称するエドガー大友の超能力ショーで、彼に批判的だった物理学者の今岡勝が姿を消した。
          捜査員の調べによると今岡は多額の借金があり、それを理由に失踪したのだと見られた。しかし大友と今岡が親友であったことを知った失踪人捜査課の高城賢吾は、
          事件は単純な蒸発ではないと見抜く。',
          'drama_status' => '制作終わり'],

          ['production_no' => 71,
          'drama_name' => '獣医ドリトル',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => '医療',
          'story' => '「獣医はビジネス」が口癖で、口が汚く、金と飼い主に厳しい、「悪徳敏腕獣医」と評判の鳥取健一（通称・ドリトル）が、飼い主の知識や注意が足りず、
          病気やケガに遭いながら苦しみを伝えられない「声なき動物たち」を救うだけでなく、問題を抱えた飼い主の心までをも華麗に治療していく。',
          'drama_status' => '制作終わり'],

          ['production_no' => 71,
          'drama_name' => '流れ星',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => 'ロマンス',
          'story' => '新江ノ島水族館で働く岡田健吾はある時、妹・マリアが難病で肝臓の移植を必要としていることを知る。
          親族かその配偶者でなければ臓器提供は法によって厳しく規制されているが、親族の中から移植に同意してくれる人はおらず、
          最後の望みの綱であった婚約者も移植を拒否し、二人は別れてしまう。一方、風俗嬢として働く梨沙は、兄・修一の作った借金のために自暴自棄になっていた。
          偶然出会った健吾と梨紗は借金の肩代わりと、結婚し移植をすることを互いに条件とし契約を結び、結婚する。本来出逢うはずのない二人であったが、
          お互いが背負った境遇が二人を引き寄せていく。',	'drama_status' => '制作終わり'],

          ['production_no' => 71,
          'drama_name' => '半沢直樹',
          'created_at' => date("Y-m-d H:i:s"),
          'genre' => 'サスペンス',
          'story' => 'バブル期、都市銀行の数は全部で13行。銀行に入ったら一生安泰と言われていた時代で、
          銀行員はエリートの代名詞でもあった。そんな日本経済が熱狂していた時代に入行したのが、いわゆる「バブル入行組」。
          この物語は、そんなバブル期に東京中央銀行に入行したバンカー・半沢直樹が、銀行の内外に現れる「敵」と戦い、組織と格闘していく様子を中心に描いていきます。',
          'drama_status' => '制作中'],

        ];

        DB::table('dramas')->insert($drama);
    }
}