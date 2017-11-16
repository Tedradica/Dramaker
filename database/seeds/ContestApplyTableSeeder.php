<?php

use Illuminate\Database\Seeder;

class ContestApplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contest_apply = [
          // ['contest_no' => 1,	'user_no' => 16,	'title' => '생동성 연애',	'content' => '컵 밥으로 끼니를 때우는 치열한 청춘이 모여 있는 고시촌을 무대로 하는 풍자 로멘스',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 17,	'title' => '사랑은 방울방울',	'content' => '연인의 심장을 이식한 남자를 만나 특별한 사랑을 하게 된 여자가 자신을 둘러싼 비밀들과 마주하면서 긍정적인 성격으로 극복하고 헤쳐 나가며 사랑과 행복을 찾아가는 가족 멜로드라마',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 68,	'title' => '도쿄의 연인',	'content' => '사업으로 도쿄를 가게 된 남자 주인공과 재일 교포 3세인 여자 주인공의 알콩달콩한 로멘스',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 67,	'title' => '오늘도 내일도',	'content' => '오늘도 내일도 매일 그녀를 지켜보고만있다… 그리고 앞으로도 그래야 한다. 하지만 그 덕에 오늘도 내일도 그녀는 행복할 수 있겠지….  사랑하는 여자의 행복을 지켜보고만 있어야 하는 가슴아픈 사랑 이야기',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 63,	'title' => '시골이 뭐 어때서!?!?',	'content' => '사고로 인하여 시골로 전근을 오게된 선생님인 남주인공 과 시골 생활 25년차 여선생님인 여주인공의 사랑이야기',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 58,	'title' => '첫사랑은 안이루어진다.',	'content' => '고등학교 진학 후 처음 본 여주인공과 사랑에 빠져 고백하고 사귀는데 성공을 했지만 그녀에겐 비밀이!?!?',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 64,	'title' => '사랑 참 어렵다.',	'content' => '32세 모태솔로 회사원 김상식은 형편이 어려워 한번도 사랑에 대해서 생각을 해본적이 없었지만 이런 그도 사랑에 빠지게 되는데…',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 60,	'title' => '너만 있다면 괜찮아',	'content' => '시각 장애인인 여주인공과 시한부 인생을 숨긴채 생활하는 남자친구인 남주인공의 애뜻한 사랑이야기',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 59,	'title' => '사랑은 시공을 초월해',	'content' => '고려시대 금의 침략으로 죽은 연인이 현대에 전생했지만 서로를 못알아보지만 이상하리만큼 우연히 자주 만나게 되는데….',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 69,	'title' => '도피',	'content' => '때는 삼국시대 장소는 백제의 어느 마을 남자주인공은 군대를 가게 되면 연인과 헤어지게 되어 함께 도피를 하게 되는데 그때 백제는 침공을 받고….',	'created_at' => date("Y-m-d H:i:s"),	'like' => 3,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 62,	'title' => '로맨스릴러',	'content' => '내가 처음 사랑에 빠진 사람이 범죄자!?!? 22년 만에 처음으로 사랑에 빠진 사람이 공개수배된 범죄자 라는 사실에 충격에 빠진 여주인공과 사실은 사연이 있는 남자주인공의 로멘스',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 66,	'title' => '집에 갈래',	'content' => '필리핀에 해외여행을 가다가 비행기가 불시착하게 되고.. 무인도에는 남녀 두명이 떠내려오게 되는 그런 본격적인 생존 로멘스 ',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 61,	'title' => '그만좀 해',	'content' => '선으로 만나서 그이와 만났고 손주들을 본지금도 사랑한다고 말한적이없다. 오늘 그이가 뭔가 이상하다 보이지가 않는다… 사실 할아버지는 치매에 걸려있었다….. 애뜻한 실버 로멘스',	'created_at' => date("Y-m-d H:i:s"),	'like' => 2,	'apply_status' => 0],
          // ['contest_no' => 1,	'user_no' => 65,	'title' => '첫사랑을 다시 만났다.',	'content' => '어쩔 수 없는 사정으로 헤어졌지만 다시 만나면 결혼하기로 약속한 첫사랑그녀… 그녀를 10년 만에 다시 만났다.  그러나 난 2달 뒤 결혼하기로 한 약혼녀가 있다…….',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => 0],
          ['contest_no' => 1,	'user_no' => 16,	'title' => 'センドンソン恋愛',	'content' => 'カップご飯に食事を詰め激しい青春が集まっている考試村を舞台とする風刺ロマンス',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 17,	'title' => '愛はほろほろ',	'content' => '恋人の心臓を移植した男に会って特別な愛をするようにされた女性が自分を取り巻く秘密と向き合い、肯定的な性格を克服して乗り越えていき愛と幸せを探していく家族メロドラマ',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 68,	'title' => '東京の恋人',	'content' => '事業で東京を行くされた男主人公と在日同胞3世の女性主人公のあれやこれやなロマンス',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 67,	'title' => '今日も明日も',	'content' => '今日も明日も毎日彼女を守って見てるだけある...そしてこれからもようである。しかし、そのおかげで、今日も明日も、彼女は幸せになれだろう...。愛する女性の幸せを見てしか存在し悲痛な愛の物語',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 63,	'title' => '田舎がどう！？！？',	'content' => '事故により田舎に転勤を来た先生の男主人公と田舎暮らし25年目以上の先生であるヒロインの愛の物語',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 58,	'title' => '初恋はない行われます。',	'content' => '高校進学後の最初の本のヒロインと恋に落ちて告白して付き合っに成功したが、彼女には秘密が！？！？',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 64,	'title' => '愛は本当に難しい。',	'content' => '32歳母胎ソロ会社員キム・サンシクは都合が難しく、一度も恋に対して考えたことがなかったが、このような彼も恋に落ちるが...',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 60,	'title' => 'あなたさえいれば大丈夫',	'content' => '視覚障害者のヒロインと時限付き人生を隠したまま生活している人の友人である南主人公のエトゥトた愛の物語',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 59,	'title' => '愛は時空を超えて',	'content' => '高麗時代の金の侵略で死んだ恋人が現代に転生したが、お互いをカントみる異常なほど偶然よく会うが...。',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 69,	'title' => '逃避',	'content' => '時三国時代の場所は百済のある村の男主人公は軍隊を行くと、恋人と別れて一緒に逃避をすることになるその時、百済は侵攻を受けて...。',	'created_at' => date("Y-m-d H:i:s"),	'like' => 3,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 62,	'title' => 'ロマンスリラー',	'content' => '私が最初に恋に落ちた人が犯罪者！？！？22年ぶりに恋に落ちた人が公開手配された犯罪者であるという事実に衝撃に陥ったヒロインと、実際には事情がある男性主人公のロマンス',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 66,	'title' => '家に帰る',	'content' => 'フィリピン海外旅行を行っている途中、飛行機が不時着になって..無人島には男女二人が流されて来るようになる、そんな本格的な生存ロマンス',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 61,	'title' => 'やめとけ',	'content' => '線で会っそのこの出会い孫を見今愛していると言ったことがない。今日彼氏が何か変だ見えがない...事実祖父は認知症にかかっていた...。エトゥト銀ロマンス',	'created_at' => date("Y-m-d H:i:s"),	'like' => 2,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 65,	'title' => '初恋をもう一度出会った。',	'content' => 'やむを得ない事情で別れたが、再会えば結婚することを約束した初恋の彼女...彼女を10年ぶりに再び会った。しかし、私は2ヶ月後に結婚することにした婚約者がいる......。',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 274,	'title' => '再婚',	'content' => '負債に別れた夫婦ある日、夫婦はお互いに同時にお互いが知らないうちに宝くじに当選され、お互いに事実を隠したまま近づくが...',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 275,	'title' => '片思いの相手は高校生！？！？',	'content' => 'ある日通過女性を見て恋に落ちた男主人公を知ってみると、高校生であるという事実に衝撃を受けることになる。ヒロインは、実際にクンビョンにより3年を屈したという事実は、成人である学生が愛は合法か？',	'created_at' => date("Y-m-d H:i:s"),	'like' => 2,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 277,	'title' => 'ホームレスを愛している。',	'content' => '事実宝くじに当たって金持ちであるだけ学歴も家も薄っぺらないお金で虚勢を張る男と金持ちの家で飛び出し野宿をすることにしたヒロインのアールつけて混ざった愛の物語',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 278,	'title' => '浮気男と語長女',	'content' => '利得だけ取って使えば付き合うないヒロインと数多くの女性を連れて持っノン男ある日、お互いに関心を持つようになって愛に落ちるお互いの噂を聞くが...',	'created_at' => date("Y-m-d H:i:s"),	'like' => 1,	'apply_status' => '0'],
          ['contest_no' => 1,	'user_no' => 276,	'title' => '宝くじ南イケメン女',	'content' => '合コンで出会った彼らがお互い太っ相手に懐疑感を感じ斡旋者を悪口する。事実を知ってみると、男女ともに、お互いの過去を片思いした事ある。ほんの少しの肉を奪うときの男の姿を見て愛に過去イケメンかと過去イケメン時代の姿を見て恋に落ちた宝くじ南彼らの愛の物語',	'created_at' => date("Y-m-d H:i:s"),	'like' => 0,	'apply_status' => '0'],

        ];

        DB::table('contest_applys')->insert($contest_apply);

    }
}
