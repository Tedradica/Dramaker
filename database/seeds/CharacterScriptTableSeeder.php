<?php

use Illuminate\Database\Seeder;

class CharacterScriptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $character_script=[
          ['script_no' => 1,
          'scene_no' => 1,
          'sequence' => 1,
          'character_name' => NULL,
          'user_no' => NULL,
          'name' => NULL,
          'script' => '모니터에 사진 띄우고, 환자 챠트와 컴퓨터 입력 상태 확인하는 의국원들.
            썩션과 이런 저런 기계들 스위치 켜는 간호사들과 마취팀.
            환자 베드 들어오면 바코드 확인하는 어시스트 간호사.
            수술 가운 입은 스크럽 간호사 들어와 글러브 끼고,
            민승, 동일 수술 가운 입고 들어오면 스크럽 간호사 글러브 끼워준다.
            민승, 환자 복부에 소독하고, 사이드 테이블 위에 소독포와 기구들 계속 올려놓는 어시스트 간호사.
            스크럽 간호사와 민승, 동일 대공포 펼쳐 덮고 클립으로 빠르게 여러 곳을 묶는다.
            소공포 이어 덮고, 클립 고리 사이로 기구들 연결 선 잇는 민승, 동일.
            무영등 들어오고, 무영등 손잡이 연결하는 동일과 스크럽 간호사.
            환자 복부에 라이트 위치 조정하는 사이에...가로대 너머 마취팀들 분주하게 기계 조작하고,
            마취 간호사, 환자 링거에 주사 놓는다.
            어시스트 간호사, 식염수 등을 쏟아준다.
            스크럽 간호사, 기구 정리하며 실린지에 식염수 채우고, 메스 기구 맨 앞에 놓는다.
            건하, 수술 가운 입고 들어오면 스크럽 간호사 글러브 끼워준다.
            수술대 주위로 초음파며 보비기 등 옮겨지고...
            복도를 따라 걸어가는 준혁, 로젯 들어서면서 아웃가운 버는 준혁.
            참관실 - 학부생들 들아와 자리 잡는다.
            수술 내복으로 바꿔 입고 소독대에서 손 씻는 준혁.
            마취 펌프 움직이고, 기구들 놓여지는 소리와,
            수술대 주위에 놓여 질 소품들 옮겨 놓는 어시스트 간호사.
            건하, 민승, 동일 모니터 화면에 뜬 필름 보면서 얘기 나누는...'],
          ['script_no' => 1,	'scene_no' => 2,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '9시 30분 수술 예전시간 보이고, 정각을 가리키면...시계를 힐끔 힐끔 올려다보는 민승과 동일.
            참관실의 건하 역시 시계를 보는데...
            자동문 열리고 양손을 든 채 걸어오는 준혁. 스텝들 인사하고.
            어시스트 간호사 가운 들고 있고, 준혁 입으면 바로 묶어준다.
            스크럽 간호사는 글러브를, 어시스트 간호사는 루삐를 끼워 준다.
            참관하러 온 학생들 벌떡 일어나 인사하면,
            준혁, 쓱 보고 수술대에 선다.'],
          ['script_no' => 1,	'scene_no' => 2,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '학부애들 참관 수업 있다고 했지 참...'],
          ['script_no' => 1,	'scene_no' => 2,	'sequence' => 3,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '오늘 장교수님 집도라 더 많이 온 것 같습니다.'],
          ['script_no' => 1,	'scene_no' => 2,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '더 잘하란 소리지? (웃고, 간호사에게) 스피커 켜 주구.'],
          ['script_no' => 1,	'scene_no' => 2,	'sequence' => 5,	'character_name' => '간호사1',	'user_no' => 112,	'name' => '시서호',	'script' => '(스피커 켜면)'],
          ['script_no' => 1,	'scene_no' => 2,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(참관실 보며) 내 얘기 들리나?'],
          ['script_no' => 1,	'scene_no' => 2,	'sequence' => 7,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '네, 말씀하십시오.'],
          ['script_no' => 1,	'scene_no' => 2,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '수술 개요는 들었지? (참관실에서 대답하는 모습이 보이고, 이어 수술방 분위기가 스케치 되면서)
            그렇다. 오늘 수술은 간이식 방법을 응용한 복잡한 수술이야. 가만 놔두면 이 환자는 3개월을 넘기기 힘들어.
            우리는 이 환자가 더 많은 시간을 가족과 친구들과 함께 할 수 있도록 최선을 다할 거야.
            잘 지켜보고 수술 과정을 리포트로 제출하도록!
            (학생들 열심히 메모하는 모습 보이고) 자, 그럼, 시작하겠다...'],
          ['script_no' => 1,	'scene_no' => 2,	'sequence' => 9,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 마커로 복부에 절개 부분을 표시한다.
            참관실, 학생들 목을 빼고 보고 있다.
            준혁, 메스를 사용한 후 건네주고, 전기 메스를 받는다.
            전기 메스를 받아 절개를 계속하는데... 치익하며 작게 연기가 피어오르는데...'],
          ['script_no' => 1,	'scene_no' => 3,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영, 내과 외래 앞으로 걸어온다...
            대기 중인 여러 환자와 가족들이 전면에 환자 현황 모니터를 바라보다 도영에게 인사한다.
            도영, 인사 받고 들어가려다가 다시 돌아보면...
            한쪽에 앉은 병실 환자의 링거 줄이 꼬여 피가 역류하고 있다.
            가서 수액을 틀어 피가 다시 들어가게 해주면, 환자 고맙다고 인사하고,
            도영, 안으로 들어간다.
            준비하고 있던 간호사, 인사를 해오고...'],
          ['script_no' => 1,	'scene_no' => 3,	'sequence' => 2,	'character_name' => '간호사1',	'user_no' => 112,	'name' => '시서호',	'script' => '20분 남았는데 벌써 내려오셨어요?'],
          ['script_no' => 1,	'scene_no' => 3,	'sequence' => 3,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(앉으며) 환자들 와서 기다리고 계시니까 바로 하지 뭐.
            다른 일 남았으면 환자만 들여보내. 내가 알아서 할게.'],
          ['script_no' => 1,	'scene_no' => 3,	'sequence' => 4,	'character_name' => '간호사1',	'user_no' => 112,	'name' => '시서호',	'script' => '(웃으며)다른 일이 뭐 있겠어요. 꾀부리는 거죠. 환자 부를게요.'],
          ['script_no' => 1,	'scene_no' => 3,	'sequence' => 5,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(웃고)'],
          ['script_no' => 1,	'scene_no' => 4,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '어두운 실내. 스크린에 영사되는 병원 신축 건물 시뮬레이션. 명인 대학 병원 신축 현황 자막 뜨고. 병원 연혁 등의 자막들 흐르면서...'],
          ['script_no' => 1,	'scene_no' => 4,	'sequence' => 2,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '브리핑(E)
            지난 반세기 동안 최고의 명성으로 국내 의료계를 선도해온
            저희 명인 대학 병원이 개원 55주년을 맞아 최첨단 디지털 병원을 모토로 신축하게 될 병원은 4만 2천 7평의 부지 위에
            건축면적 7천 320평, 연면적 5만 2천 400평, 병원동 5천 700평 지하 4층 지상 20층으로
            총 82개의 진찰실로 하루 4000여 명의 외래 진료가 가능하며 병상수는 일반병상 1025 베드, 특수병상 103 베드,
            수술실은 무균실 5실 포함 30실입니다. 그 외 특성화 센터로 건강증진센터, 담석센터, 노인의료센터 등 10개를 비롯해,
            유방암 클리닉, 대장항문클리닉 등이 들어갈 예전입니다.'],
          ['script_no' => 1,	'scene_no' => 4,	'sequence' => 3,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '용길을 필두로 서열대로 앉아 자료를 보며 설명 듣는 교수진.'],
          ['script_no' => 1,	'scene_no' => 4,	'sequence' => 4,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(주완에게) 외과는 3층에 둘 예전인데 이 과장님 생각은 어떠세요?'],
          ['script_no' => 1,	'scene_no' => 4,	'sequence' => 5,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '어련히 알아서 해주셨겠죠.'],
          ['script_no' => 1,	'scene_no' => 4,	'sequence' => 6,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '외과가 우리 병원 얼굴 아닙니까. 채광이나 뭐나, 젤 좋은 자리라 잴 것도 없이 외과로 했습니다.'],
          ['script_no' => 1,	'scene_no' => 5,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '수술 중인 준혁, 손놀림이 빠르다. 작은 리드렉터 잡고 있는 민승.'],
          ['script_no' => 1,	'scene_no' => 5,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '왼쪽 좀 올려주세요.
            (수술대 왼쪽이 기계음을 내며 약간 올라가고) 오케이.
            (수술 부위 들여다보며) 문맥과 담관에 침습된 종양이 보이지? (살피며) 간이 절반 정도 살아있는 거 같다.
            이런 경우, 종양을 완벽하게 제거하면 환자는 정상에 가깝게 회복할 수 있어. 운이 좋았어.'],
          ['script_no' => 1,	'scene_no' => 5,	'sequence' => 3,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '
            조수들, 고개 끄덕이고...
            참관실에 학생들, 다행이라는 듯 끄덕이고...'],
          ['script_no' => 1,	'scene_no' => 5,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(간호사에게) 보비.'],
          ['script_no' => 1,	'scene_no' => 5,	'sequence' => 5,	'character_name' => '간호사1',	'user_no' => 112,	'name' => '시서호',	'script' => '(건네면)'],
          ['script_no' => 1,	'scene_no' => 5,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '아니, 메쨈. (메쨈을 받는데...)'],
          ['script_no' => 1,	'scene_no' => 17,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 능숙하게 혈관을 잇는 실들이 오르락내리락하고.
          집도의, 한쪽으로 떨어져서는 준혁을 인정하듯 끄덕이고.'],
          ['script_no' => 1,	'scene_no' => 17,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '컷.'],
          ['script_no' => 1,	'scene_no' => 17,	'sequence' => 3,	'character_name' => '집도의',	'user_no' => 110,	'name' => '윤상우',	'script' => '고마워, 수고했어.'],
          ['script_no' => 1,	'scene_no' => 17,	'sequence' => 4,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 미소를 지운 채 스탭들하고 인사하고 교수들 향해 인사하고 나간다.
          마무리하기 위해 수술대에 서는 집도의와 스텝들. 분위기 가라앉은.'],
          ['script_no' => 1,	'scene_no' => 18,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '교수들 하나 둘 자리를 뜨는데... 심박 모니터가 삐하며 멈추고...
          교수들 놀라 다시 들어오고.'],
          ['script_no' => 1,	'scene_no' => 19,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '집도의 수술포를 확 찢고, 세컨드, 환자 가슴에 손 얹어 압박한다.
          집도의 제세동기에 준비하고, 세컨드, 손떼면.'],
          ['script_no' => 1,	'scene_no' => 19,	'sequence' => 2,	'character_name' => '집도의',	'user_no' => 110,	'name' => '윤상우',	'script' => '200주울'],
          ['script_no' => 1,	'scene_no' => 19,	'sequence' => 3,	'character_name' => '간호사3',	'user_no' => 114,	'name' => '방국현',	'script' => '200주울'],
          ['script_no' => 1,	'scene_no' => 19,	'sequence' => 4,	'character_name' => '집도의',	'user_no' => 110,	'name' => '윤상우',	'script' => '슛'],
          ['script_no' => 1,	'scene_no' => 19,	'sequence' => 5,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '모니터 플랫상태…'],
          ['script_no' => 1,	'scene_no' => 19,	'sequence' => 6,	'character_name' => '집도의',	'user_no' => 110,	'name' => '윤상우',	'script' => '300주울'],
          ['script_no' => 1,	'scene_no' => 19,	'sequence' => 7,	'character_name' => '간호사3',	'user_no' => 114,	'name' => '방국현',	'script' => '300주울'],
          ['script_no' => 1,	'scene_no' => 19,	'sequence' => 8,	'character_name' => '집도의',	'user_no' => 110,	'name' => '윤상우',	'script' => '슛'],
          ['script_no' => 1,	'scene_no' => 19,	'sequence' => 9,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '여전히 플랫...당황하는 집도의와 스탭들.'],
          ['script_no' => 1,	'scene_no' => 20,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '놀라 보던 교수진과 의국원들.'],
          ['script_no' => 1,	'scene_no' => 20,	'sequence' => 2,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(다급함에) 흉부외과에 연락해!'],
          ['script_no' => 1,	'scene_no' => 20,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '오는 시간까지 버틸 수 없을 겁니다…'],
          ['script_no' => 1,	'scene_no' => 20,	'sequence' => 4,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '아...이거 참...'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 1,	'character_name' => '집도의',	'user_no' => 110,	'name' => '윤상우',	'script' => '360'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 2,	'character_name' => '간호사3',	'user_no' => 114,	'name' => '방국현',	'script' => '(머뭇)'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 3,	'character_name' => '집도의',	'user_no' => 110,	'name' => '윤상우',	'script' => '(탁보고)'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 4,	'character_name' => '간호사3',	'user_no' => 114,	'name' => '방국현',	'script' => '360 주울…'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 5,	'character_name' => '집도의',	'user_no' => 110,	'name' => '윤상우',	'script' => '(쏘려다) 장교수 좀 다시 불러.'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 6,	'character_name' => '간호사3',	'user_no' => 114,	'name' => '방국현',	'script' => '(얼른 나가고)'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 7,	'character_name' => '집도의',	'user_no' => 110,	'name' => '윤상우',	'script' => '슛'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 8,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '플랫 그대로...
          // 집도의 제세동기 옆으로 던지듯 주고, 마사지 하는데
          // 준혁, 다시 들어와 보고는'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 9,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '메스'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 10,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '간호사, 집도의 등, 준혁을 쳐다보고…'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 11,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '메스!'],
          // ['script_no' => 1,	'scene_no' => 21,	'sequence' => 12,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '간호사, 얼결에 건네주고...
          // 준혁, 가로막을 확 가르고 메스를 건네 준 후 손을 쏙 집어넣는다.'],
          // ['script_no' => 1,	'scene_no' => 22,	'sequence' => 1,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(놀라는) 저래도 되는 겁니까?'],
          // ['script_no' => 1,	'scene_no' => 22,	'sequence' => 2,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '... 심장을 직접 손으로 마사지하는 겁니다.'],
          // ['script_no' => 1,	'scene_no' => 22,	'sequence' => 3,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '그거는 알죠. 하지만 저건…'],
          // ['script_no' => 1,	'scene_no' => 22,	'sequence' => 4,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '지금은 선택의 여지가 없습니다.'],
          // ['script_no' => 1,	'scene_no' => 23,	'sequence' => 1,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '심장이 쪼그라들었어. 혈액 풀로 틀어.'],
          // ['script_no' => 1,	'scene_no' => 23,	'sequence' => 2,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '마취 간호사 수혈액 공급 스위치 끝까지 올리면, 줄줄 떨어지는 혈액.
          // 준혁, 마사지하며 모니터 보지만 반응이 오려다 멈춘다. 다들 어쩔 줄 모르는데…'],
          // ['script_no' => 1,	'scene_no' => 23,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '에피네프린 6미리!'],
          // ['script_no' => 1,	'scene_no' => 23,	'sequence' => 4,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '다들 기겁하듯 눈이 동그래져서 쳐다본다.'],
          // ['script_no' => 1,	'scene_no' => 24,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '모니터로 보이는.
          // 심장 쪽에 손을 넣어 주무르다 멈추는 준혁.'],
          // ['script_no' => 1,	'scene_no' => 24,	'sequence' => 2,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(인터폰 들고) 장준혁 교수, 지금 뭐하는 거야? 이봐 장교수…'],
          // ['script_no' => 1,	'scene_no' => 25,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '앰플 6개를 든 손, 손가락을 튀길 때마다 앰플 머리 부분이 날아간다.
          // 주사기에 앰플 속의 액체가 차오르고
          // 준혁, 주사기 받아 든다.'],
          // ['script_no' => 1,	'scene_no' => 25,	'sequence' => 2,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '장교수! 그만 둬!'],
          // ['script_no' => 1,	'scene_no' => 25,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(무시하고) 꺼!'],
          // ['script_no' => 1,	'scene_no' => 25,	'sequence' => 4,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '스탭들 서로 눈치보고, 간호사가 인터폰 스위치를 끈다.
          // 주완의 입모양만 보이는 가운데... 정적이 흐른다.
          // 준혁, 확자 가슴을 노려보다 한순간 주사기 팍 내리 꽂는다.
          // 주위 스텝들 흠짓, 놀라고…'],
          // ['script_no' => 1,	'scene_no' => 26,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '뚫어져라 보는 교수진과 의국원들.
          // 심박 모니터에 자발 박동이 일고.
          // 다들 의자에 하나 둘 앉는다.'],
          // ['script_no' => 1,	'scene_no' => 26,	'sequence' => 2,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '참...배짱 한 번 두둑하네. 허허...
          // 이과장님, 후임 하난 기막히게 길러내셨네요.'],
          // ['script_no' => 1,	'scene_no' => 26,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '예... 환자를 살려서 다행입니다.
          // (애써 웃어보이곤 얼른 표정이 굳는)'],
          // ['script_no' => 1,	'scene_no' => 27,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '초음파 진단 마친 도영, 데스크 쪽으로 가면
          // 침상에서 몸 일으키는 50대 여자 환자. 간호사, 재빠르게 다가와 도와준다.
          // 도영, 모니터를 심각하게 보고 있다.'],
          // ['script_no' => 1,	'scene_no' => 27,	'sequence' => 2,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '좀 더 자세하게 보기 위해서 초음파 내시경을 해야겠습니다.'],
          // ['script_no' => 1,	'scene_no' => 27,	'sequence' => 3,	'character_name' => '환자1',	'user_no' => 115,	'name' => '추태인',	'script' => '또 뭘 해요? 아후, (앞에 앉고) 뭐가 문젠지 알고나 검사를 하던지 해야지 답답해서 죽겠어요. 정말…'],
          // ['script_no' => 1,	'scene_no' => 27,	'sequence' => 4,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '저도 안 답답하게 해드렸으면 좋겠는데요,
          // 어떤 병이든 한두 번 검사했다고 다 알 수 있는 게 아니거든요. 힘드시겠지만... 받으시는 게 좋겠어요.'],
          // ['script_no' => 1,	'scene_no' => 28,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '환자 수면 내시경 하고...
          // 모니터에 원형으로 초음파 화면이 나오고 있다. 화면에 마크가 된다.'],
          // ['script_no' => 1,	'scene_no' => 28,	'sequence' => 2,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '그냥 만성 췌장염 아닐까요?'],
          // ['script_no' => 1,	'scene_no' => 28,	'sequence' => 3,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '아냐...뭔가 있어. 여기 봐봐. 췌관확장이 전보다 심해졌잖아. 췌장두부에 저음영의 작은 종괴도 의심되고...'],
          // ['script_no' => 1,	'scene_no' => 28,	'sequence' => 4,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '잘 모르겠는데요...'],
          // ['script_no' => 1,	'scene_no' => 28,	'sequence' => 5,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그냥 단순한 췌장염은 아닌 거 같아. 황달도 좀 있고, 혈액 검사에서 CA19-9 (씨에이 십구다시구) 수치도 높았잖아.'],
          // ['script_no' => 1,	'scene_no' => 28,	'sequence' => 6,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '췌장염만으로도 어느 정도는 올라갈 수 있지 않을까요?'],
          // ['script_no' => 1,	'scene_no' => 28,	'sequence' => 7,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그렇긴 한데... (미심쩍은) 췌장 CT 부탁해서 찍어야겠다.'],
          // ['script_no' => 1,	'scene_no' => 28,	'sequence' => 8,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '검사 많다고 환자분 컴프레인 심한데...'],
          // ['script_no' => 1,	'scene_no' => 28,	'sequence' => 9,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '찾아 볼 수 있는 방법은 다 해봐야지.'],
          // ['script_no' => 1,	'scene_no' => 29,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완. 쓸쓸히 걸어온다. 창가 앞에 휠체어에 앉아 있던 노교수를 못보고 지나친다.'],
          // ['script_no' => 1,	'scene_no' => 29,	'sequence' => 2,	'character_name' => '노교수 환자',	'user_no' => 152,	'name' => '양종훈',	'script' => '이교수, 이주완 교수.'],
          // ['script_no' => 1,	'scene_no' => 29,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(돌아보고) 아, 교수님…'],
          // ['script_no' => 1,	'scene_no' => 29,	'sequence' => 4,	'character_name' => '노교수 환자',	'user_no' => 152,	'name' => '양종훈',	'script' => '그 교수 소리 이젠 빼. 내가 여기 떠난 게 몇 년짼데...
          // 근데 무슨 생각을 하길래 불러도 몰라?'],
          // ['script_no' => 1,	'scene_no' => 29,	'sequence' => 5,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '아, 네... 교수님 좀 어떠세요? 어서 털고 일어나셔야 할텐데…'],
          // ['script_no' => 1,	'scene_no' => 29,	'sequence' => 6,	'character_name' => '노교수 환자',	'user_no' => 152,	'name' => '양종훈',	'script' => '후후 이만큼도 다행이지 뭐. 일에서 손 놓고 나면
          // 머리 세는 거랑 없던 병 만드는 거 밖에 없지 싶어.
          // 그러고 보니 당신도 얼마 안 남았지?'],
          // ['script_no' => 1,	'scene_no' => 29,	'sequence' => 7,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '예. 저도 곧…'],
          // ['script_no' => 1,	'scene_no' => 29,	'sequence' => 8,	'character_name' => '노교수 환자',	'user_no' => 152,	'name' => '양종훈',	'script' => '계속 움직일 생각하고 자리를 떠도 떠, 쉴 생각 말고.'],
          // ['script_no' => 1,	'scene_no' => 29,	'sequence' => 9,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '그래야죠.'],
          // ['script_no' => 1,	'scene_no' => 30,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '테라스로 나오는 주완과 노교수.'],
          // ['script_no' => 1,	'scene_no' => 30,	'sequence' => 2,	'character_name' => '노교수 환자',	'user_no' => 152,	'name' => '양종훈',	'script' => '뒷방 늙은이로 지낸다는 게 보통 일이 아니야.'],
          // ['script_no' => 1,	'scene_no' => 30,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '말씀 안하셔도 알 것 같습니다.'],
          // ['script_no' => 1,	'scene_no' => 30,	'sequence' => 4,	'character_name' => '노교수 환자',	'user_no' => 152,	'name' => '양종훈',	'script' => '아니, 아직은 다 몰라. 닥쳐봐야 안다는 말이 그래서 있는 거 같애. 나중에 정 다른 일 없으면 성경이든 금강경이든 천천히 베껴 써보는 것도 소일로 나쁘지 않아.'],
          // ['script_no' => 1,	'scene_no' => 30,	'sequence' => 5,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(미소) 교수님도 참…'],
          // ['script_no' => 1,	'scene_no' => 30,	'sequence' => 6,	'character_name' => '노교수 환자',	'user_no' => 152,	'name' => '양종훈',	'script' => '(웃고) 우습게 듣지 말라구. (천천히 보며, 잡지 건넨다.)
          // 이 교수, 후계자 하난 잘 길렀더군. 외과의로 환자 살리는 것도 중요하지만 실력 갖춘 후임 양성도 그 못지 않은 좋은 일이지…'],
          // ['script_no' => 1,	'scene_no' => 30,	'sequence' => 7,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완, 잡지 건네 받아보면 준혁의 사진과 함께 난 기사.
          // “간담췌의 젊은 권위자 장준혁 외과의”
          // 주완, 끙 해지는. 입을 꾹 다무는.'],
          // ['script_no' => 1,	'scene_no' => 31,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 천으로 덮힌 스테인레스 그릇을 든 간호사와 들어오면...
          // 가족들, ‘선생님...’ 하며 일어난다.'],
          // ['script_no' => 1,	'scene_no' => 31,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '수술은 잘 끝났습니다. 생각보다 남은 간의 크기가 커서 예후가 좋을 거 같습니다.'],
          // ['script_no' => 1,	'scene_no' => 31,	'sequence' => 3,	'character_name' => '환자 어머니1',	'user_no' => 160,	'name' => '이숙자',	'script' => '감사합니다... 감사합니다…'],
          // ['script_no' => 1,	'scene_no' => 31,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '지금부터 환자 몸에서 제거한 간을 보면서 설명을 드릴텐데... 비위가 약하신 분들은 나가 계시는 게…'],
          // ['script_no' => 1,	'scene_no' => 31,	'sequence' => 5,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '가족들, 아닙니다... 나가지 않고…'],
          // ['script_no' => 1,	'scene_no' => 31,	'sequence' => 6,	'character_name' => '유미라',	'user_no' => 142,	'name' => '임단아',	'script' => '(문 열고) 이주완 과장님께서 오시라는데요?'],
          // ['script_no' => 1,	'scene_no' => 31,	'sequence' => 7,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '알았어. 그럼…'],
          // ['script_no' => 1,	'scene_no' => 31,	'sequence' => 8,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '간호사, 그릇을 덮고 있던 천을 제거하면...
          // 가족들, 절반 쯤 고개들 돌리는데…'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '클래식이 흐르는 주완의 방. 주완, 책상 앞에 앉아 있고.
          // 학회 자료를 든 준혁 들어온다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '부르셨습니까?'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '수술은 잘 끝났나?'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '네, 지금 회복실에 있습니다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 5,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '흠.. 잘 됐군. 요즘 왜 보기 어때? 특진이나 소개 환자가 많을텐데…'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '많다기 보다 거절하기 힘든 경로로 오는 환자들이 종종 있어 좀 곤란할 때가 있습니다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 7,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '점점 많아지겠지. 수술의 천재, 간담췌 젊은 권위자를 찾고 싶은 환자들로 말야.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(의아한) 무슨 그런 말씀을...아직 전 더 배워야 합니다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 9,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '그렇게 생각하는 친구가 이렇게 PR을 했나? (잡지 툭 던지고)'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 10,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(당황!) 이건 전문지도 아니고... 그저 안면 있는 기자가 통 사정을 하길래 잠깐 응해준 건데... 이렇게 과장할 줄은 몰랐습니다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 11,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '상대가 누구건 외과의 모든 일은 나를 통해야 한다는 거 잘 알잖아?'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 12,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '죄송합니다. 제가 생각이 너무 짧았습니다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 13,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(뒤로 슬쩍 몸이 빠지며) 그렇게까지 사과하면 내가 오히려 지나쳤던 것 같잖아. 알았으면 됐어. 앞으론 실수 없도록 해.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 14,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(잡지 위에 학회 자료 놓고) 과장님 학회 자료 다 마무리 했습니다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 15,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(멋쩍은) 수고했어. 흠흠... 장교수도 위치에 있는 사람인데...
          // 이런 잔소리가 기껍지는 않겠지만... 장교수를 내 후임으로 생각하는 마음에서 그러는 거니까 나쁘게만 듣지 마.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 16,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '한 번도 그런 적 없습니다. 좋게 봐 주셔서 감사합니다, 과장님.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 17,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 슬며시 입가에 미소가 도는데...
          // 노크 소리와 함께 50대 실업가, 비서와 함께 들어온다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 18,	'character_name' => '박회장',	'user_no' => 102,	'name' => '구민백',	'script' => '교수님 말씀 중이신 거 아닙니까?'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 19,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '아닙니다. 회장님. 기다리고 있었습니다. 이쪽으로 앉으시죠. (준혁에게) 그만 나가봐.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 20,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '비서, 양주인 듯한 선물 테이블 옆에 놓고 인사하고 나간다.
          // 준혁, 나가려는데'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 21,	'character_name' => '박회장',	'user_no' => 102,	'name' => '구민백',	'script' => '마침 잘 됐네요. 그렇잖아도 장준혁 교수님도 함께 뵀으면 했는데…'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 22,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '?'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 23,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(? 앉고)'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 24,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(준혁에게) 인사드리지. 여기 우진 해운 박흥식 회장님.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 25,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '처음 뵙겠습니다. 장준혁입니다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 26,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '회장님께서 우리 장교수한테 무슨...?'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 27,	'character_name' => '박회장',	'user_no' => 102,	'name' => '구민백',	'script' => '제 안사람이 곧 수술받기로 되어 있지 않습니까.
          // 이 교수님께서 어련히 알아서 해 주실 텐데도...
          // 큰 일 많으신 분한테 자기까지 부탁할 거 뭐 있냐고
          // 장준혁 교수한테 받자고 성화를 해놔서…'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 28,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(안색이 변하는) 아 예…'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 29,	'character_name' => '박회장',	'user_no' => 102,	'name' => '구민백',	'script' => '이럴 때 그냥 모른 척 신세도 지고, 해야 하는데 착한건지 모자란 건지... (더 오버해서) 하하하.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 30,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '장교수 실력이면 잘 할겁니다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 31,	'character_name' => '박회장',	'user_no' => 102,	'name' => '구민백',	'script' => '장교수님 요즘 점점 찾는 환자가 많다고 하던데 어떻게 부탁 좀 드려도 될까요? (준혁을 본다)'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 32,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '교수님 계신데 제가 어떻게...(주완 눈치보면)'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 33,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '장교수, 그렇게 얼버무리면 꼭 내가 막는 것 같잖아...
          // 실력 발휘할 또 다른 기횐데 놓치지 마.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 34,	'character_name' => '박회장',	'user_no' => 102,	'name' => '구민백',	'script' => '(얼른) 감사합니다. 잘 좀 부탁드리겠습니다.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 35,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(애써 웃어 보이는) 신경 써서 잘 해드려.'],
          // ['script_no' => 1,	'scene_no' => 32,	'sequence' => 36,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 겸양의 표정을 잃지 않는다.
          // 하지만 이주완, 표정이 점차 싸늘하게 식어가는데…'],
          // ['script_no' => 1,	'scene_no' => 33,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 만족스러운 듯 잡지의 기사를 넘겨본다.
          // 잡지를 봉투에 넣으려다 다시 꺼내, 수표를 잡지 사이에 끼워 넣는다.
          // 봉투에 강원도 속초 쯤 주소를 쓰고, 수취인 ‘이정순’ 쓴다.
          // 준혁, 우체국 빠져나가고.'],
          // ['script_no' => 1,	'scene_no' => 34,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '걸어오는 용길과 유정진'],
          // ['script_no' => 1,	'scene_no' => 34,	'sequence' => 2,	'character_name' => '유정진',	'user_no' => 154,	'name' => '강민제',	'script' => '지금 당장 수술 스케줄을 변경하기는 힘들 거 같습니다.'],
          // ['script_no' => 1,	'scene_no' => 34,	'sequence' => 3,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '아니까 유과장님한테 직접 부탁하는 거 아니겠습니까? 응급으로 잡힌 환자들도 없다면서요?'],
          // ['script_no' => 1,	'scene_no' => 34,	'sequence' => 4,	'character_name' => '유정진',	'user_no' => 154,	'name' => '강민제',	'script' => '그렇긴 하지만 수술 시간을 이미 환자들도 알고 있어나서…'],
          // ['script_no' => 1,	'scene_no' => 34,	'sequence' => 5,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '다른 환자면 몰라도 병원 신축에도 워낙 손을 대주는 거물이라 군소리 나오면 골치 아픈 일이 한 두 갭니까?'],
          // ['script_no' => 1,	'scene_no' => 34,	'sequence' => 6,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '대답 듣지도 않고 앞서 걷는데, 뒤에서 곤란한 표정으로 따라가는 정진.
          // 내과 외래 앞에 가득 모인 사람들 앞을 지나쳐 들어가려다 멈추는 용길.
          // 돌아보지는 않는데…'],
          // ['script_no' => 1,	'scene_no' => 34,	'sequence' => 7,	'character_name' => '유정진',	'user_no' => 154,	'name' => '강민제',	'script' => '(하는 수 없이) 그렇게 처리하겠습니다, 부원장님.'],
          // ['script_no' => 1,	'scene_no' => 34,	'sequence' => 8,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(그제야 보고) 그래요. 고맙습니다. (들어가고)'],
          // ['script_no' => 1,	'scene_no' => 34,	'sequence' => 9,	'character_name' => '유정진',	'user_no' => 154,	'name' => '강민제',	'script' => '(표정 싹 굳어 획 돌아간다)'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '환자, 진찰 끝내고 막 나가고. 들어오는 용길.
          // 도영, 모니터에 오더 입력하고 있다가 용길 보고 고개 끄덕한다.'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 2,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '기다리는 환자들 많던데 시간 조절 좀 하지 그래?'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 3,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '네. 참, 이 환자 좀 봐주세요.
          // (모니터에 화면 띄우고)
          // 부원장님 환자 중에 제가 대진한 환잔데…'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 4,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(화면보고) 만성 췌장염이라고 했는데 왜?'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 5,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '초음파 내시경 검사와 혈액 검사를 해봤는데요.'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 6,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(끊으며) 대진을 맡겼지 임의대로 검사해도 좋단 말은 한 기억이 없는데?'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 7,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '췌장염으로 볼 수만은 없다는 소견입니다. 그래서…'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 8,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(답답한 듯) 뭘 더 어떻게 하고 싶단 거야?'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 9,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '일단 입원을 시켜서...(하는데)'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 10,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '입원? 대학 병원 병실이 그렇게 한가롭나?
          // 이러니 우리과만 유독 기다리는 환자 많다는 소리가 들리는 거야. (나가려다) 내 환자들 대진 할 땐 오더대로만 해. (획 나가고)'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 11,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영, 굽히지 않을 듯 모니터에 CT와 ad(입원) 입력.'],
          // ['script_no' => 1,	'scene_no' => 35,	'sequence' => 12,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(간호사에게) 병실 있나 알아봐 줄래요?'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영, 원무과장장과 실랑이 하고 있다.'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 2,	'character_name' => '원무과장',	'user_no' => 144,	'name' => '고예슬',	'script' => '저희도 죽겠습니다. 교수님 뿐 아니라 매일 베드 찾는 과들로 조용할 날이 없어요.'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 3,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(한숨) 웨이팅 베드는요?'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 4,	'character_name' => '원무과장',	'user_no' => 144,	'name' => '고예슬',	'script' => '아휴, 웨이팅은 원장님이라도 못 드리는 거 아시잖아요.
          // 사정 봐서 내드렸다 응급 터지면 전부 저희 책임인데요.'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 5,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(답답해지는)'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(뒤에서 나타 어깨를 치며) 여기서 뭐해?'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 7,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '어... 베드 때문에…'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '무슨 환잔데?'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 9,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '검사를 더 해봐야 알겠지만 췌장 쪽이 의심스러워서…'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 10,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(관심) 그래? ... (하고 원무과장을 본다) 참, 원무과장님, 자제분 담임선생님 수술 받고 이제 괜찮으시죠?'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 11,	'character_name' => '원무과장',	'user_no' => 144,	'name' => '고예슬',	'script' => '(난처한) 네? 에... 그럼요. 너무 잘 해주셔서…'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 12,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '다시 한번 봐 드릴 테니까...언제 외래로 모시고 나오세요.'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 13,	'character_name' => '원무과장',	'user_no' => 144,	'name' => '고예슬',	'script' => '아...네, 네...고맙습니다.'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 14,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '베드 없는 거 알지만... 우리 최 교수, 신경 좀 써주세요'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 15,	'character_name' => '원무과장',	'user_no' => 144,	'name' => '고예슬',	'script' => '(어쩔 수 없다) 네, 한번 수배 해 보겠습니다.'],
          // ['script_no' => 1,	'scene_no' => 36,	'sequence' => 16,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 끄덕이곤 도영에게 가자하는데…'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영, 앉아있고. 준혁, 커피를 뽑아 건네고 앉는다.'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '대학 때나 지금이나 넌 그렇게 요령이 없냐?'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 3,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(피식)'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '상대를 봐 가면서 구슬리기도 하고 달래기도 해야지.'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 5,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '수술 없어?'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '오늘은 끝났어. 근데, 췌장에 문제 있어 보이는 환자라고? 암이야?'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 7,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '확실하진 않구... CT 나오면 좀 봐 줘.'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '그야 뭐 어렵냐. 췌장암 확인되면 우리과로 돌리겠네?'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 9,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그래야겠지... (하면서도 어두워지는)'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 10,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '어째 믿고 맡기기 어렵단 얼굴인데?'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 11,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '무슨 소리야. 니 실력이야 다 아는데.'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 12,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '인정해 주는 거야?'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 13,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(일어나) 예전부터 해왔어.'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 14,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(일어나) 니 칭찬 들으니까 그냥은 못 넘기겠는데, 저녁에 한잔 할래?'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 15,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '3시간마다 데이터 나오는 거 확인해야 돼. 다음에 하자.'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 16,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(그럼, 그렇지 하는 표정) 알았어, 수고해. (가고)'],
          // ['script_no' => 1,	'scene_no' => 37,	'sequence' => 17,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '수고해 (한시름 놓은 듯 숨을 뱉어내고 다른 쪽으로 간다.)'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '책상에 앉아 모니터 보는 의국원들과 중간 테이블에 모여 간식 먹으며 잡담하는 상일, 건하, 민승 등.
          // 이때, 가방을 들고 퇴근하는 길에 들른 듯 들어오는 주완.
          // 의국원들 전부 벌떡 일어나고.'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 2,	'character_name' => '홍상일',	'user_no' => 132,	'name' => '윤일우',	'script' => '아직 퇴근 안하셨어요?'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '하는 길이야. 장교수 여기 없나?'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 4,	'character_name' => '홍상일',	'user_no' => 132,	'name' => '윤일우',	'script' => '(건하를 힐끗보면)'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 5,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '(민승을 힐끗보고)'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 6,	'character_name' => '함민승',	'user_no' => 151,	'name' => '한재승',	'script' => '(동일에게) 동일아! (찾아보라고 눈짓)'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 7,	'character_name' => '임동일',	'user_no' => 109,	'name' => '박재일',	'script' => '(전화기 들고 내선 번호 찾는다)'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 8,	'character_name' => '함민승',	'user_no' => 151,	'name' => '한재승',	'script' => '(발로 툭 차며 나가보라고 하는데)'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 9,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '내년 스페인 학회 참석자 명단 정리 누가 했지?'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 10,	'character_name' => '임동일',	'user_no' => 109,	'name' => '박재일',	'script' => '제가 했습니다.'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 11,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '거기 내 이름이 빠진 것 같던데…'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 12,	'character_name' => '임동일',	'user_no' => 109,	'name' => '박재일',	'script' => '장교수님께서 빼신 것 같은데...?'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 13,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(놀라고)'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 14,	'character_name' => '임동일',	'user_no' => 109,	'name' => '박재일',	'script' => '교수님께선 퇴임하실 때라 못 가실 거라고 하시던데요?'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 15,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(임기웅변) 아...참 그랬지...수고들 해.
          // (돌아서 나가는 표정 굳어지고)'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 16,	'character_name' => '홍상일',	'user_no' => 132,	'name' => '윤일우',	'script' => '(따라 나가며 시선은 의국원들 노려본다)'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 17,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '(동일 쥐어박고) 할 말이 따로 있지. 퇴임 얘길 어디서 꺼 내냐, 아후 증말.'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 18,	'character_name' => '임동일',	'user_no' => 109,	'name' => '박재일',	'script' => '(뭘 잘못했나 하는 얼굴로 머리 긁적이며 민승 보면)'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 19,	'character_name' => '함민승',	'user_no' => 151,	'name' => '한재승',	'script' => '머리 긁는다고 좋아지냐? 그럼 눈을 긁어라. 눈치 좀 있어지게.'],
          // ['script_no' => 1,	'scene_no' => 38,	'sequence' => 20,	'character_name' => '임동일',	'user_no' => 109,	'name' => '박재일',	'script' => '(긁적이던 손 멈칫하고, 눈치 본다.)'],
          // ['script_no' => 1,	'scene_no' => 39,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완, 굳은 표정으로 나와 대기 중인 차에 타선 문을 꽝 닫는다.
          // 기사, 놀라 룸미러 보면,
          // 의자에 기대 눈을 감고 숨을 고르는 주완. 손잡이를 놓지 않고 꽉 잡고'],
          // ['script_no' => 1,	'scene_no' => 40,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '의자에 깁스 환자와 나일롱으로 보이는 환자들 죽치고 앉아 떠들고 있고.'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '감사패와 위촉장이 유난히 많은 실내...
          // 민원장, 앉아 계산기 두드리며 명세서며 계산서들 정리하고 있다.
          // 수정, 들어와 소파에 앉아 쇼핑백에서 새로 산 가방 꺼내 보인다.'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 2,	'character_name' => '민수정',	'user_no' => 143,	'name' => '김하윤',	'script' => '아빠, 이거 어때?'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 3,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '(보지도 않고) 지 남편이 밤낮으로 수술해 번 돈 잘도 뿌린다. 쯧쯧.'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 4,	'character_name' => '민수정',	'user_no' => 143,	'name' => '김하윤',	'script' => '내 돈으로 산거네요.'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 5,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '(소파로 와서 앉고) 그게 니 돈이냐? 이 애비가 준 돈이지.'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 6,	'character_name' => '민수정',	'user_no' => 143,	'name' => '김하윤',	'script' => '줬음 끝나는 거지. 치사하게…'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 7,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '백화점 들었다 놨음 집으로 가지 여긴 왜 왔어?'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 8,	'character_name' => '민수정',	'user_no' => 143,	'name' => '김하윤',	'script' => '아빠한테 저녁 사달래려구. 맛있는 거 사줘요. 오빠도 부를게.'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 9,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '니 남편 오늘 약속 있어.'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 10,	'character_name' => '민수정',	'user_no' => 143,	'name' => '김하윤',	'script' => '아빠가 어떻게 알아?'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 11,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '(일어나 옷 챙겨 입으며) 나랑 만나기로 했거든.'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 12,	'character_name' => '민수정',	'user_no' => 143,	'name' => '김하윤',	'script' => '그럼 잘됐네. 어디서 만나는데?'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 13,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '남자들끼리 할 얘기 있어. 넌 들어가 내조 잘 할 생각이나 해.'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 14,	'character_name' => '민수정',	'user_no' => 143,	'name' => '김하윤',	'script' => '뭐야, 왜 나만 빼?'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 15,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '남자들끼리라고 했잖아. 니가 남자냐? (나가고)'],
          // ['script_no' => 1,	'scene_no' => 41,	'sequence' => 16,	'character_name' => '민수정',	'user_no' => 143,	'name' => '김하윤',	'script' => '아빠!~ (쇼핑백 챙겨들고 쫓아나간다.)'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '벽에 의사 가문의 사진들이 걸려있고, 한 쪽에 주완 가족 사진.
          // 퇴근해 들어오는 주완과 외출하는 차림으로 나가는 윤진 마주친다.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 2,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '이제 오세요?'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '그래 (소파에 앉고)'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 4,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '엄만, 모임 가셨어요. 저 나가요, 아빠.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 5,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '시간 괜찮으면 잠깐 앉아 봐.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 6,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '(앉고)'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 7,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '다 저녁에 무슨 볼일이야?'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 8,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '아빠 맘에 안 들어 하시는 볼일인데...(미소)'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 9,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '또 집회니 뭐니 하는데 가려는 거야?'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 10,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '몇 십 년을 터 잡고 일하던 영세업자들이 철거로 나 앉게 됐어요.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 11,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(한숨, 보면)'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 12,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '무슨 말씀하시려는지 아는데...저 그래도 해요. 아시잖아요.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 13,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '너 아니라도 그런 사람들 돕는 손들은 많아.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 14,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '많지만 거기에 제 손도 필요하다가 생각해주시면 안돼요?'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 15,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '아빠는 니가 결혼해서 안정되게 사는 게 보고 싶은 거야.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 16,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '저랑 살겠다는 남자 있으면 꽉 붙잡아서 데려올게요.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 17,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '엄마가 몇 변 말했다던 선 자리는 다 싫다고 했다면서?'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 18,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '(사진 보며) 저 다음 사진에 들어갈... 그런 조건 되는 사람 만나고 싶지 않아요.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 19,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '그건 우리 집안이 의사 집안이니까 결혼 할 사람도 되도록이면 같았으면 한다는 거지.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 20,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '그게 액자에 딱 맞게 맞춤형으로 주문 재작된 사람이란 거잖아요.'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 21,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '윤진아!'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 22,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '(일어나) 버릇없었어요. 그래도 전 이 말밖에 못 드리겠어요. 다녀올게요. (나가고)'],
          // ['script_no' => 1,	'scene_no' => 42,	'sequence' => 23,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(한숨 내쉬며 소파에 기대고 눈 감는다)'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '술 마시고 있는 준혁과 민회장'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '자주 자리 만들지 못해 죄송합니다, 아버님.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 3,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '신경 쓸 거 없어. 바깥일 할 땐 해야지.
          // 그건 그렇고, 자네네 경기는 요즘 어때?'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '저처럼 월급 받는 부교수 입장에서야 환자가 많던 적던 똑같죠, 뭐.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 5,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '비서, 돈 가방 들고 들어온다.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 6,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '거기 놔. 수고했어.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 7,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '비서, 나가면 민원장, 돈 가방을 테이블에 척 올려 준혁 쪽으로 밀고는 열어보란 듯 고개 짓한다. 준혁, 열어보고 가득한 돈에 놀라며.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '이게 뭡니까? 아버님?'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 9,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '자네 병원이 간담췌 수준만큼은 세게 탑클래스잖아.
          // 거기서 (엄지손가락 들며) 이게 되면 세계 최고 외과의가 되는 거 아닌가?'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 10,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '예, 뭐…'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 11,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '그런 명예로운 자리는 말이야, 노리는 놈들이 많을 수밖에 없어.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 12,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '그렇긴 하지만…'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 13,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '어때? 싸움에서 이길 자신 있나?'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 14,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '실력으로 한다면 저도 뒤지지 않는다고 생각하지만…'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 15,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '좀 전에 내가 싸움이라고 했지? 싸움 할 때 필요한 게 뭐야? 힘이야, 힘. 그리고 돈이 바로 힘이야.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 16,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '아버님 덕분에 제가 늘 힘을 얻습니다.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 17,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '하지만 돈이 암만 많아도 명예가 없으면 쓸쓸한 거야.
          // 돈은 그냥 돈일 뿐이지. 명예가 있는 놈한테는 돈도 따라오고, 권력도 따라 오는 거야.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 18,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '…'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 19,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '세상에 공짜는 없어. 나도 자네한테 투자하는 거야.
          // 내가 갖지 못한 걸 자네를 통해서라도 쥐어보고 싶거든.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 20,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '열심히 해 보겠습니다.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 21,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '건배하려고 잔을 가져다 대는 민원장.
          // 준혁, 건배하려는데 휴대폰 울린다.
          // 준혁, 보고 받지 않고 다시 잔 든다.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 22,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '(다 알고) 병원 인가 본데 받아.'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 23,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(눈치보다 받으며 나간다) 네…'],
          // ['script_no' => 1,	'scene_no' => 43,	'sequence' => 24,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '민원장, 술잔을 들어 마시며 나가는 준혁을 가만히 보는.'],
          // ['script_no' => 1,	'scene_no' => 44,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '희재, 퇴근 할 듯 가방 채겨 들며 전화한다.'],
          // ['script_no' => 1,	'scene_no' => 44,	'sequence' => 2,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '오늘 가게 올 거였음 오지 말라구. 좀 피곤해서 일찍 들어가 쉴래.'],
          // ['script_no' => 1,	'scene_no' => 44,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '아니, 기다리고 있어.'],
          // ['script_no' => 1,	'scene_no' => 44,	'sequence' => 4,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '얼마나?'],
          // ['script_no' => 1,	'scene_no' => 44,	'sequence' => 5,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '오래 안 걸릴 거야.'],
          // ['script_no' => 1,	'scene_no' => 44,	'sequence' => 6,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '간다는 사람 붙잡는 거 보니까 뭐가 있긴 있나보네...?
          // 뭔지 궁금해서라도 기다려야겠다. 알았어, 이따 봐. (끊고)'],
          // ['script_no' => 1,	'scene_no' => 45,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 들어오고'],
          // ['script_no' => 1,	'scene_no' => 45,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '아버님, 술 더 하셔야죠?'],
          // ['script_no' => 1,	'scene_no' => 45,	'sequence' => 3,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '자네 여자 있나?'],
          // ['script_no' => 1,	'scene_no' => 45,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(뜨끔) 아닙니다. 제가 무슨...그런 일 없습니다.'],
          // ['script_no' => 1,	'scene_no' => 45,	'sequence' => 5,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '남자한테 여자 섞이는 거야 있을 수 있는 일인데...지금 같은 때는 구설수 하나도 조심하지 않으면 한방에 가게 돼.'],
          // ['script_no' => 1,	'scene_no' => 45,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '예…'],
          // ['script_no' => 1,	'scene_no' => 45,	'sequence' => 7,	'character_name' => '민원장',	'user_no' => 108,	'name' => '서성인',	'script' => '쎈 놈이 살아남는 게 아니라 살아남는 놈이 쎈 놈인 거야.
          // 이 말 명심해.'],
          // ['script_no' => 1,	'scene_no' => 45,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(각오를 다지는 표정) 예, 명심하겠습니다. 아버님.'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '이주완, 외과 저널을 보고 있는데...
          // 주완 처, 외출에서 돌아온 차림 그대로 문을 벌컥 열고 들어와 한 쪽 의자에 앉아 씩씩댄다.'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 2,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '당신 뭐하는 양반이에요?!'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(책만 보고) 왜?'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 4,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '내가 지금 어떤 소릴 듣고 온 줄이나 알아요?
          // 당신과를 장준혁 외과라고 부르더라니까요?'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 5,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(책장 넘기다 멈칫하지만 태연한 척) 그래? (픽 웃고)'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 6,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '웃음이 나와요? 당신이 아직 버젓이 외과 과장으로 있는데 어디 붙일 말이 없어서 장준혁 외과냐구요?'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 7,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '여자들 모여서 없는 말들 만드는 거 하루 이틀 일인가?
          // 흘려듣고 말아.'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 8,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '흘려들을 말이 따로 있지. (하다 주완 태도에 열이 올라)
          // 지금 책이 눈에 들어와요, 당신은?!'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 9,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(그제야 보고) 참... 이 사람이 왜 이렇게... 그 같지도 않은 소리에도 휘둘리니까 말이 점점 커지는 거야!'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 10,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '(수그러들어) 당신, 분명히 말하지만 난 우리 지위를 장준혁 같은 부류한테 넘겨주는 꼴 못 보니까 알아서 하세요. (획 나가고)'],
          // ['script_no' => 1,	'scene_no' => 46,	'sequence' => 11,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(책을 탁 덮어버린다.)'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '차 안에서 키스를 나누고 떨어지는 준혁과 희재.'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 2,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '근데 왜 하필 이런데다 차를 세웠어?'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 3,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 대답 않고 헤드라이트 켠다. 전면에 병원 신축 건물 조감도 보이고.
          // 차 앞에서 내려 차 엠에 나란히 기대 바라보는 두 사람.'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(감격스러운 듯) 여기가 내가 외과과장이 돼서 들어갈 신축 병원이야. 어때 멋있지…'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 5,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '(준혁을 보고 피식 웃는다)'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(모르고) 저기 17층 쯤 아님 19층 쯤 내 방이 있을 거야'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 7,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '(웃음 참고) 정망 좋은 방이겠네.'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '그치...(하다 이상한, 희재 보고) 말이 왜 그래?'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 9,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '(어깨만 들썩)'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 10,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(또박또박) 여기 내가 곧 들어갈 병원이라니까?'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 11,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '그래, 들었어.'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 12,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(기분 상한) 가자 그만 (가려는데)'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 13,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '(잡고) 또 발끈한다. (준혁의 머리를 흩트리듯 하며) 이럴 때 보면 꼭 애지...(반응 없자) 어? 진짜 삐졌네…'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 14,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(머리만 쓸며, 퉁하게) 삐지긴 뭘 삐져.'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 15,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '아님 다행이구. (일부러 일어나 옷 툭툭 턴다.) 뭐해? 가자며?'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 16,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '진짜 아무렇지도 않아? 저걸 보고도 아무 느낌이 없어?'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 17,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '(픽 웃고) 왜 없겠어. 이 앞으로 가게 옮기려면 돈 깨나 들겠다 싶은 느낌이 팍 오는데…'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 18,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '뭐?'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 19,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '얼른 돈 벌러 가야겠다. (가다 돌아보고) 안가? 가자며?'],
          // ['script_no' => 1,	'scene_no' => 47,	'sequence' => 20,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(웃고 마는)'],
          // ['script_no' => 1,	'scene_no' => 48,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁팀 수술 중.
          // 참관실로 들어와 앉는 주완. 목 풀던 건하, 주완을 보고 놀라며 목 인사한다.'],
          // ['script_no' => 1,	'scene_no' => 48,	'sequence' => 2,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '과장님 들어오셨는데요?'],
          // ['script_no' => 1,	'scene_no' => 48,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(힐끔 올려다보고 다시 수술)'],
          // ['script_no' => 1,	'scene_no' => 48,	'sequence' => 4,	'character_name' => '함민승',	'user_no' => 151,	'name' => '한재승',	'script' => '왠일이시지? 환자가 아는 분이신가?'],
          // ['script_no' => 1,	'scene_no' => 48,	'sequence' => 5,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '아닌데, (간호사에게)그런말 못 들었죠?'],
          // ['script_no' => 1,	'scene_no' => 48,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(켈리 잡으라고) 잡어,'],
          // ['script_no' => 1,	'scene_no' => 48,	'sequence' => 7,	'character_name' => '함민승',	'user_no' => 151,	'name' => '한재승',	'script' => '나도 못 들었는데…'],
          // ['script_no' => 1,	'scene_no' => 48,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '집중 안 해!'],
          // ['script_no' => 1,	'scene_no' => 48,	'sequence' => 9,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '스텝들 움찔하고,
          // 준혁, 수술하다 힐끗 눈동자만 참관실 쪽으로 보면...
          // 주완, 근엄하게 내려다보는.'],
          // ['script_no' => 1,	'scene_no' => 49,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '환자들 TV 보면서 잡담하고 있는데 미라, 들어와 TV 끄고.'],
          // ['script_no' => 1,	'scene_no' => 49,	'sequence' => 2,	'character_name' => '유미라',	'user_no' => 142,	'name' => '임단아',	'script' => '회진 준비해주세요.'],
          // ['script_no' => 1,	'scene_no' => 49,	'sequence' => 3,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '미라, 나가고 환자들 침상 정리한다.'],
          // ['script_no' => 1,	'scene_no' => 50,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '미라, 병실마다 다니는 모습과 함께 스테이션 앞에 스텝들.
          // 챠트며 필름 등을 챙기다 엘리베이터 소리 나면 차례로 도열한다.
          // 엘리베이터 열리면서 주완과 준혁, 상일, 건하 내리고.
          // 주완을 필두로 준혁, 상일, 건하, 민승, 동일, 등등 따르며 회진 시작된다.
          // 각 병실 앞에 담당 레지던트와 간호사가 있고, 병실로 들어가는 일행.'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '첫 번째 환자 앞에 서는 주완과 상일'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 2,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '안녕하십니까?'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 3,	'character_name' => '환자1',	'user_no' => 115,	'name' => '추태인',	'script' => '안녕하세요?'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 4,	'character_name' => '홍상일',	'user_no' => 132,	'name' => '윤일우',	'script' => 'Cholecystectomy (담낭절제술, 콜레시스텍토미)이틀 쨉니다. 바이틀 스테이블하고 특이소견 없습니다.'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 5,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '수술은 잘 됐는데, 어디 불편한데 있어요?'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 6,	'character_name' => '환자1',	'user_no' => 115,	'name' => '추태인',	'script' => '아뇨...괜찮아요.'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 7,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '별 다른 증상 없으면 회복 좀 하고 주중에 퇴원해도 되겠네.'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 8,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완, 다음 환자로 가고.'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 9,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => 'gallbladder cancer(골블레더 캔서)로 수술한지 삼일 쨉니다.
          // 로컬에서 cholecystitis(콜레시스타이티스) 진단받고 저희 병원으로 수술 받기 위해 트랜스퍼 된 환자였는데 수술 소견상 담낭벽 진층을 침범한 담낭암으로 판정되었습니다.
          // 1차 수술 후 일주일이 경과한 뒤 portal vein embolizatidn(포탈 베인 엠볼리제이션, 문맥색전술) 하고, 4주 만에 2차 수술에 들어가 extended right hepatectomy(익스텐디드 라이트 헤파텍토미, 확대 우엽 절제술) 시행하였습니다.'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 10,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '바이탈은?'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 11,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '미열 외엔 노말한 상탭니다.'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 12,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(배액관 살피며) 양은 얼마나 나와?'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 13,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '묽게 300cc 정도 나오고 있습니다.'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 14,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '랩은?'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 15,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => 'OT/PT(오티피티) 각 150, 200, total bilirubin(토탈 빌리루빈) 5. (주완 얼굴 찌푸린다.) albumin(알부민) 2.7입니다.'],
          // ['script_no' => 1,	'scene_no' => 51,	'sequence' => 16,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(끄덕이고, 환자에게) 걱정 하지 마시고, 기침 많이 하고, 조금씩 움직이는 정도로 운동 좀 하세요. (돌아서는)'],
          // ['script_no' => 1,	'scene_no' => 52,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완, 준혁 일행들과 나오고 있다.'],
          // ['script_no' => 1,	'scene_no' => 52,	'sequence' => 2,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '확대 담낭 절제면 될 텐데 뭐하러 문맥색전에 우열절제로 했어?'],
          // ['script_no' => 1,	'scene_no' => 52,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '좀 더 공격적인 수술이 암세포의 근치적인 제거라고 생각했습니다.'],
          // ['script_no' => 1,	'scene_no' => 52,	'sequence' => 4,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '빌리루빈 수치는 오른 거야? 내린 거야?'],
          // ['script_no' => 1,	'scene_no' => 52,	'sequence' => 5,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '수술 첫 날엔 3이었습니다.'],
          // ['script_no' => 1,	'scene_no' => 52,	'sequence' => 6,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '그러면 안심할 수 없는 상황이잖아.
          // 그런 수술로 간부전이 오면 아예 손 쑬 수 없다는 거 몰랐나?
          // 올해 NCCN 가이드라인에서도 담낭에 국한 된 암일 경우 확대술만으로도 충분하다는 통계가 나온 걸로 아는데…'],
          // ['script_no' => 1,	'scene_no' => 52,	'sequence' => 7,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '알고 있습니다. 하지만...50회 이상의 제 임상 경험으로 비춰볼 때 공격적인 수술을 했던 환자들의 생존율이 더 높았습니다. 그래서 그간 데이터들을 정리해 내년 세계 간담췌 학회에 발표할 예정에 있습니다.'],
          // ['script_no' => 1,	'scene_no' => 52,	'sequence' => 8,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(걷다 멈추고 척보며) 모르고 하는 소리야, 이름을 알리고 싶은 거야?'],
          // ['script_no' => 1,	'scene_no' => 52,	'sequence' => 9,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(놀라) 예?'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '들어오는 주완과 준혁, 나머지 의국원들.'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 2,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(들어오며) 케이스 셀력션도 제대로 안되고, 전향적인 연구도 아니면서 젊은 자네 경험만 바탕으로 가이드라인을 만든다고 해서 NCCN... (비웃듯) 비교 할 것도 안 되겠지만, 하여튼 전세계 외과의들이 따르는 그런 가이드라인보다 우월할 거라 생각하나?'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '제가 드린 말씀은 그런 뜻이 아니라 임상 경험을 통해 얻은 자료로 만든 논문이 SCI에 등재 된다면, 지금의 가이드라인은 충분히 바뀔 수 있다는 의미입니다. 물론 성공 확률에 대한 자신도 있습니다.'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 4,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(버럭) 자네 항상 그 자신감 운운하는데, 나는 자신이 없어서 못하는 줄 아나!!'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 5,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '의국원들 놀라 각기 책상에서 돌아보면,
          // 주완 멋쩍어지자...흠흠 마른기침을 하다 결국 사래 들린 듯 잔기침을 해댄다.
          // 건하, 얼른 물 한 컵 놓아주면 얼른 쉬지 않고 마시는 주완.'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 6,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(좀 수그러, 준혁에게) 외과의들이 몰라서 안하는 게 아냐.
          // 환자를 다룬다는 것이 성패를 반복해도 되는 실험이 아니기 때문에 그만큼 신중을 기하는 거야.'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 7,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(은근히 열 받는) 그럼 과장님은 이 방법이 전혀 옳지 않다고 생각하시는 겁니까?'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 8,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '내가 전혀라고 했나? 지금 술식은 간부전 합병도 문제가 되고...(하는데)'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 9,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '모두 합병이 생기는 것도 아니고 현재, 그 환잔 빌리루빈 수치가 오르고 있는 상탭니다. 물론 수술 3일째지만 예후 이상에 대한 증후도 없구요. 그리고 이번 달 미국에서 간담췌 학회장 피터 제럴드 박사가 담낭암에 대해 리뷰 저널을 발표한 것을 보면…'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 10,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(끊으며) 이 봐, 장교수, 아직 내 말 뜻을 잘 이해하지 못한 것 같은데 자네 방식을 옹호한 다른 의사들의 의견에 힘을 얻는 습자적인 의식은 환자에 대한 배려는 없고, 병만 치료하겠다는 기술자적인 생각만 담긴 거야. 자넨, 사람을 만지는 의사지 기계를 다루는 기술자가 아니잖나. 알 만한 사람이 오늘따라 왜 그래?'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 11,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(기분 상하지만 대꾸도 못하고) …'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 12,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(괜히 시계보고) 말이 길어졌군. (일어나 나가며) 수고들 해.'],
          // ['script_no' => 1,	'scene_no' => 53,	'sequence' => 13,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완, 나가는데 다들 일어나 인사하는데 준혁만 꼿꼿이 서 있고
          // 주완 나가다 슬쩍 돌아보는 시선 주면
          // 준혁, 마지못해 고개만 내린다.
          // 주완, 나가고.
          // 준혁, 앉아 책상에 올린 손에 주먹이 쥐어진다.
          // 의국원들 슬금 눈치보며 앉고.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '용길, 용길 처와 소파에 앉아 있다. 간호사 들어와 약 봉투 건네 나간다.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 2,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '소화제 정도야 가까운 약국에서 사먹지 뭘 번거롭게 병원까지 와.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 3,	'character_name' => '홍성희',	'user_no' => 158,	'name' => '김영순',	'script' => '일부러 왔나? 부인회 가는 길에 겸사겸사해서 들렀다니까.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 4,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '오늘 회장 투푠가 뭐 한다고 했나? 이번에도 당신이 되는 거야?'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 5,	'character_name' => '홍성희',	'user_no' => 158,	'name' => '김영순',	'script' => '그야 뭐 병원에서 당신 힘이 여전하냐에 달렸겠죠. (웃고)'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 6,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영, 들어온다.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 7,	'character_name' => '홍성희',	'user_no' => 158,	'name' => '김영순',	'script' => '최교수님 오랜만에 뵙네요.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 8,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '안녕하셨어요, 사모님?'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 9,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '당신 그만 가 봐.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 10,	'character_name' => '홍성희',	'user_no' => 158,	'name' => '김영순',	'script' => '일어서요 지금. 참, 최교수님 사모님은 교수부인회에서 보기가 힘드네. 얼굴 좀 보면서 지내자고 전해주세요.
          // (용길에게) 저 가요. (나가고)'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 11,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '무슨 일이야?'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 12,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(머뭇하다) 어제 말씀 드린 환자, 저한테 돌렸으면 합니다.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 13,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(탁 보며) 나를 못 믿겠단 소린가?'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 14,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그런 뜻은 아닙니다.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 15,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(큰 소리로) 그럼 뭐야?'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 16,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '몇 가지 검사가 더 필요하다는 소견입니다.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 17,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '환자를 일일이 검사해서 진단하면 정작 필요한 검사를 받지 못하는 환자가 일 년이면 얼마나 되는 줄 아나? 부교수 정도면 틀에 맞게 환자도 다룰 줄 알아야지 이름만 달면 뭐해?'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 18,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그 환잔 경험으로 직관 할 케이스가 아니라고 생각합니다.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 19,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '아니면? 검사가 더 필요한 생각은 뭔가?'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 20,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그건…'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 21,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '그것도 직관이야. 단, 그걸 환자가 처치에 요령 있게 이용하란 거야. 덮어놓고 검사해서 병을 잡아내면 공이 되고 아니면 다행이란 건가?'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 22,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그럼 외과로 트랜스퍼 시키겠습니다.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 23,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '뭐? 최교수는 단지 내과의사 일 뿐이겠지만 난 진료부원장이야! 내과든 외과든 환자가 있는 곳 모두 내 소관이란 거 모르나?
          // 최 교수 이럴수록 여러 사람이 불편해진다는 거 명심해.'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 24,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(꾹 참고 보면)'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 25,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(보고) 더 할 말 있나?'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 26,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(인사하고 나간다)'],
          // ['script_no' => 1,	'scene_no' => 54,	'sequence' => 27,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(절래절래)'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완 처, 옷매무새를 만지며 나오고, 편한 캐주얼 차림을 뒤따라 나오는 윤진.'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 2,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '옷이 좀 고급스럽나? 얘, 엄마 어때? 너무 튀니?'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 3,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '엄마 튀는 거 좋아하시잖아.'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 4,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '오늘 교수 부인회잖아. 그것만 아니면 아빠가 생일날 사주신 투피스가 딱 좋은데…'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 5,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '입으면 되지?'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 6,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '입울 줄 몰라 그래. 부원장 사모 땜에 그러지. 좀 센스가 없잖아.'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 7,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '그게 무슨 상관이야?'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 8,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '그게 다 상관있단다. 부원장 사모가 회장 아니니.
          // 대장보다 튀어봐야 남는 건 불똥 밖에 없는 거야.'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 9,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '그럼 내 옷 입고 가시던가?'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 10,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '(짝 째려보고) 너도 제발 그 옷 좀... 아휴 내가 말을 말아야지.'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 11,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '근데 며칠 전에 모임 했다면서 오늘은 또 무슨 제목이야?'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 12,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '임원 투표. 명목상 매년 하는 거야. 회장이 연임 할 건 뻔하고, 내가 또 부회장 일텐데... 에이 귀찮아. (가고)'],
          // ['script_no' => 1,	'scene_no' => 55,	'sequence' => 13,	'character_name' => '이윤진',	'user_no' => 145,	'name' => '김미라',	'script' => '(어이없어 웃고)'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '호텔의 작은 이벤트 룸으로 연분홍회 정기총회라는 타이틀이 걸려있다.
          // 한쪽에 뷔페가 차려져 있고, 서른 명 가량의 회원들이 테이블에 앉아있다.
          // 수정, 등나무 바구니를 들고 테이블을 돌며 투표용지를 받아온다.
          // 주완 처, 낚아채듯이 받아서 개표를 한다.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 2,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '그럼, 내년도 회장선출을 위한 개표를 시작하겠습니다.
          // 자...(뽑고 반색하며) 우리 회장님이신... 홍성희님.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 3,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '회원들 박수치고, 용길 처, 고맙다며 눈인사를 한다.
          // 수정, 보드에 홍성희라고 쓰고 바를 정자를 쓰기 시작한다.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 4,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '홍성희 님. (박수) 아... 또 홍성희 님. 어머나 기권이 나왔네요.
          // 회장님께서 겸손하셔서 보인 표를 포기하신 것 같습니다.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 5,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '용길 처, 은근히 미소. 보드에 홍성희의 바를 정자가 늘어간다.
          // 결과를 보면, 홍성희 29표, 기권 1표.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 6,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '이렇게 해서 우리 연분홍회 회장직은 계속 해서 홍성희 회장님께서 연임하시게 됐습니다.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 7,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '일동, 박수가 터지고 수정도 열심히 박수를 친다.
          // 용길 처, 인사하며 나온다.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 8,	'character_name' => '홍성희',	'user_no' => 158,	'name' => '김영순',	'script' => '감사합니다. 부족한 저를 이렇게 3년 연속 뽑아주시니 몸들 바를 모르겠습니다. 내년에도 우리 연분홍회가 더욱 발전할 수 있도록 최선을 다하겠습니다. 감사합니다.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 9,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '일동, 열띤 박수를 치고…'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 10,	'character_name' => '홍성희',	'user_no' => 158,	'name' => '김영순',	'script' => '그럼, 저와 함께 연분홍회를 이끌어갈 임원단을 지명하겠습니다.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 11,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '(일어설 준비하고)'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 12,	'character_name' => '홍성희',	'user_no' => 158,	'name' => '김영순',	'script' => '내년에 저와 함께 해주실 부회장님은... 올해 총무로 수고해 주셨던 산부인과 하익현 과장 사모님이신 최지연님이 맡아주셨으면 합니다.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 13,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완 처, 일어서려다 놀라 얼른 털썩 앉고.
          // 최지면. 일어나 인사를 하고…'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 14,	'character_name' => '홍성희',	'user_no' => 158,	'name' => '김영순',	'script' => '그 동안 부회장님으로 저를 도와 연분홍회를 이끌어 오신 김영아 회원님께도 박수 부탁드립니다.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 15,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완 처, 애써 웃으며 인사하고...
          // 수정, 열심히 박수치면 주완 처, 탁 쳐다본다.
          // 움찔해서 박수 그치는 수정.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 16,	'character_name' => '홍성희',	'user_no' => 158,	'name' => '김영순',	'script' => '그리고 이번엔 안살림을 맡아줄 총무를 지명하겠습니다.
          // 총무는 젊은 분이 아무래도 좋지 않을까 싶어 외과 장준혁 선생 사모님이신 민수정님께 부탁드리고 싶네요.'],
          // ['script_no' => 1,	'scene_no' => 56,	'sequence' => 17,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완 처, 깜짝 놀라고...
          // 수정도 의외라는 듯 일어나 생글 거리며 인사한다.'],
          // ['script_no' => 1,	'scene_no' => 57,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완 처, 좌변실에 들어와 털썩 앉는다. 신세 처량하고, 눈물이 나고, 한숨이 절로 나온다.
          // 화장지로 눈물을 찍어내다가 마음을 다잡고 컴팩트 꺼내 화장 고친다.'],
          // ['script_no' => 1,	'scene_no' => 58,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '사람들 뷔페 음식을 접시에 담거나, 자리에서 먹고 있다.
          // 주완 처, 접시에 음식을 담고 돌아보면...
          // 저만치 회장 주변에 수정과 신임부회장 등이 앉아 떠들며 음식을 먹고있 다.
          // 앉을 자리가 없고, 시선을 돌리면 구석에 빈자리가 있다.
          // 가서 앉긴 했는데...갑자기 화가 치밀어 오르고, 옆에 놓인 칵테일을 들어 단숨에 마신다.
          // 눈치 보며 다시 새 칵테일을 들고 또 쭉 마신다.'],
          // ['script_no' => 1,	'scene_no' => 59,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '다리가 풀린 주완 처, 수정과 신임부회장의 부축을 받고 걸어온다.
          // 수정, 벗겨진 주완 처의 신발 한 짝을 들고 있고...
          // 주완 처, 발이 지면에서 떨어져 공중에서 헛걸음질 치는 형국이다.'],
          // ['script_no' => 1,	'scene_no' => 59,	'sequence' => 2,	'character_name' => '김영아',	'user_no' => 164,	'name' => '이인순',	'script' => '나 걸을 수 있는데... 어, 이상하다... 나 걸을 수 있는데…'],
          // ['script_no' => 1,	'scene_no' => 59,	'sequence' => 3,	'character_name' => '민수정',	'user_no' => 143,	'name' => '김하윤',	'script' => '(힘들다) 네, 지금 걷고 계세요.'],
          // ['script_no' => 1,	'scene_no' => 59,	'sequence' => 4,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '용길 처가 걸어 나오며 쯔쯧 거리곤 획 가버린다.
          // 여전히 허우적대는 주완 처'],
          // ['script_no' => 1,	'scene_no' => 60,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '환자 기계 속에서 촬영하고 있다.
          // 참관실에서 도영과 은혜가 보고 있다.
          // 화면을 보던 도영, 뭔가 잡힌 듯 바짝 다가가 보고는 은혜에게 끄덕인다.'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '서둘러 들어와 앉는 도영과 뒤따라 은혜 들어오고, 모니터에 사진 띄운다.'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 2,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(모니터 보며) 역시 췌장에 문제가 있는 거 같아.'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 3,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '(걱정스런) 교수님...'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 4,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(모니터만 보며) 어.'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 5,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '부원장님 오더 없이 계속 진행 시키셔도 될까요?'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 6,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(보며) 되게 해야지. 장준혁 교수 방에 좀 다녀올게.'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 7,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '나가려던 도영, 퇴근하는 차림으로 들어오던 용길과 마주치고.
          // 기겁을 하는 은혜, 얼른 모니터를 가리며 반사적으로 끈다.
          // 용길, 은혜의 행동을 힐끗 보는데.'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 8,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '퇴근하세요?'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 9,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '뭐 하고 있던 중인가?'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 10,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '내일 컨퍼런스 때문에 교수님하고 상의 중이었습니다.'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 11,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '어...그렇잖아도 이교수, 내일 말야 내 대신 오전 컨퍼런스 좀 하자. 교수 회의가 좀 길어질 것 같아서.'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 12,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '예.'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 13,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '수고들 해. (나가려다 말고) 참, 이교수가 말한 그 췌장염 환자 말이야...(하는데)'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 14,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '(얼른) 오전에 치료 받고 가셨는데요?'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 15,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '그래...통원 치료 정도면 되는 환자니까 괜한 신경 쓰지 말아. 수고해 (나간다)'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 16,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(은혜 보면)'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 17,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '죄송해요…'],
          // ['script_no' => 1,	'scene_no' => 61,	'sequence' => 18,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(가만 보고) 다음부터는 그러지 마. (툭 쳐주고 나간다)'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '수술 환자에게 저녁 처치하는 (약 나눠주는) 간호사.'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 2,	'character_name' => '간호사1',	'user_no' => 112,	'name' => '시서호',	'script' => '약 드시고 어제처럼 속 쓰리면 말씀하세요?
          // (반응 없자) 왜 그러세요?'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 3,	'character_name' => '환자1',	'user_no' => 115,	'name' => '추태인',	'script' => '(쳐져서) 어디가 문젠지 알고나 먹어야 약이 될 거 같아서…'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 4,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영, 들어온다.'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 5,	'character_name' => '환자1',	'user_no' => 115,	'name' => '추태인',	'script' => '마침 오시네. 선생님, 저 어디가 나빠요?'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 6,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그게...아직…'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 7,	'character_name' => '환자1',	'user_no' => 115,	'name' => '추태인',	'script' => '아직도 병명이 안 나왔단 말씀이세요?'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 8,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => 'PET-C에서도 췌장쪽 의심은 되는데 눈으로는 명확한 확인이 되질 않아서 시험절개를 했으면 (하는데)'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 9,	'character_name' => '환자1',	'user_no' => 115,	'name' => '추태인',	'script' => '시험...절개면...수술이요?'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 10,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '네.'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 11,	'character_name' => '환자1',	'user_no' => 115,	'name' => '추태인',	'script' => '(기막혀) 이제 하다하다 열어봐야 안다는 거예요?
          // 그럼 첨부터 배부터 째자고 하지... 검사란 검사는 모조리 해서 사람 진을 다 빼요, 빼긴. 뭐 이런데가 다 있어…'],
          // ['script_no' => 1,	'scene_no' => 62,	'sequence' => 12,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '병에 따라서 검사만으로 다 알 수 없는 경우가 있습니다.
          // 그리고 수술이라고 해서 무조건 겁내실 게 아니라 확실한 1차 치료 방법이라고 생각하세요.'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영과 퇴근 차림의 준혁, CT화면을 보고 있다.'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '1CM(일씨엠)보다 조금 클 듯한데... 췌장암인 거 같아.
          // 후후. 보기 드문 케이스야…'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 3,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그렇지? 지금 상황에서 시험절개가 최선이겠지?'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '후후 난 이선생한테 놀랐는데?
          // 실력은 알지만 이런 걸 잡아낸다는 건 아무나 할 수 있는 건 아니지. 이 환잔 운이 좋았네. 이선생 같은 의사 만나서.'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 5,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '다행이었지…'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '췌장염으로 진단 냈다는 선생한테 한 수 가르쳐줘.
          // 혼자만 독주하지 말구.'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 7,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그만해, 민망하다. 내가 할 수 있는 건 여기까지야. 다음은...장선생이 해줬으면 좋겠는데…'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '안 맡긴다고 하면 섭섭했지. 근데 누구 초진이야?'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 9,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '부원장님.'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 10,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(!) 부원장? 지금 부원장 환자를 최선생이 움직이는 거였어?'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 11,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(아무 생각 없이) 췌장염이라고 다른 말도 못 꺼내게 해.'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 12,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '그래서? 소신으로 밀어붙였다 그거야?'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 13,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '필요한 조치를 한건데 뭘?'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 14,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(어이없어, 픽 웃고) 괜히 윗선 건드려봐야 서로 피곤해, 손 떼자.'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 15,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '지금 그 말...수술 못 하겠다는 거야?'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 16,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '못하는 게 아니라 안하는 거지?'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 17,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '왜? 장준혁 니 앞날에 해라도 될까 싶어서?'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 18,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(기분 나쁜) 넌 아닐 꺼 같애?
          // 소신으로 덤비다 내 몰리면 너 그 좋아하는 연구는 어디서 할래?
          // 장비하나 갖춰 놓기 힘든 병원으로 가게 되면 니가 견딜 거 같애?
          // 정확한 진단보다 교수 권력이 강한 곳이 대학병원의 현실이고 인정하기 싫어도 받아들일 수밖에 없는 우리 현실이야. (나가는데)'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 19,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '너 겨우 이 정도였어?'],
          // ['script_no' => 1,	'scene_no' => 63,	'sequence' => 20,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(탁 보며) 나만 비열한 인간으로 몰지 마.
          // 들여다보면 너나 나나 죽을 힘 다해 안 떨어지려고 발버둥치고 있는 건 똑같아. (나간다)'],
          // ['script_no' => 1,	'scene_no' => 64,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 나오고. 도영, 쫓아 나온다.'],
          // ['script_no' => 1,	'scene_no' => 64,	'sequence' => 2,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그래, 어쩜 너하고 난 같은 모습일지도 몰라.
          // 하지만 그건 지금 이 문제하고는 다른 차원이야.'],
          // ['script_no' => 1,	'scene_no' => 64,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '아니, 나한텐 이 병원 안에서 일어나는 모든 일은 다 같애.'],
          // ['script_no' => 1,	'scene_no' => 64,	'sequence' => 4,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '너 정말…'],
          // ['script_no' => 1,	'scene_no' => 64,	'sequence' => 5,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '그만하자. 달라질 거 없는데 더 얼굴 붉힐 필요 없잖아.
          // 먼저 간다.'],
          // ['script_no' => 1,	'scene_no' => 64,	'sequence' => 6,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '장준혁, 환자 목숨이 달렸어!'],
          // ['script_no' => 1,	'scene_no' => 64,	'sequence' => 7,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(천천히 돌아서, 낮지만 강한) 최도영, 내 목숨도 달렸어.'],
          // ['script_no' => 1,	'scene_no' => 64,	'sequence' => 8,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '차갑게 돌아서서 걷는 준혁. 분한 얼굴로 바라보는 도영.'],
          // ['script_no' => 1,	'scene_no' => 65,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '항암 임상 치료 결과 그래프 포스터와 의료 실험 기기들 앞에서 현미경을 들여다보며 은혜, 손에 든 카운터를 착착 누르고 있다.'],
          // ['script_no' => 1,	'scene_no' => 65,	'sequence' => 2,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '(신나서) 교수님, 세포 배양에서 viability(바이어블리티, 생존율)이 90% 이상이에요.'],
          // ['script_no' => 1,	'scene_no' => 65,	'sequence' => 3,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '어...좀 이따 볼게. (자리에 앉아 멍하니)'],
          // ['script_no' => 1,	'scene_no' => 65,	'sequence' => 4,	'character_name' => '하은혜',	'user_no' => 141,	'name' => '한송이',	'script' => '(의아한) …'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '건하를 비롯한 의국원들 떠나는 치프와 송별회를 한다.'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 2,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '(치프에게) 그 동안 수고 많았다.'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 3,	'character_name' => '함민승',	'user_no' => 151,	'name' => '한재승',	'script' => '대장도 그렇지. 고생한 낙도 없이 단박에 내치시냐… '],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 4,	'character_name' => '치프',	'user_no' => 131,	'name' => '정기문',	'script' => '내 능력이 안되나부지 뭐…'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 5,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '기운 내. 막말로 어디 가서든 의사 짓만 하면 되지.'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 6,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 들어온다. 다들 인사하고.'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 7,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '좀 늦었지. (치프에게 잔 들며) 한잔 하자.'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 8,	'character_name' => '치프',	'user_no' => 131,	'name' => '정기문',	'script' => '(마시고, 침울) 교수님, 그동안 감사했습니다.'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 9,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '무슨 소리야. 데리고 있으면서 신경도 못 써줬는데.
          // 대신 어디서든 열심히 하고 있어.
          // 내가 너 부를 수 있는 위치가 되면 찾을 테니까.'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 10,	'character_name' => '치프',	'user_no' => 131,	'name' => '정기문',	'script' => '(감격) 눈물 날 것 같네요. 말씀만 들어도…'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 11,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '거봐. 사람이 죽으라는 법은 없는 거라니까. 다 길이 있어요.'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 12,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '그렇게 단정 짓진 말고.'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 13,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '교수님 아니면 누가 외과 과장이 되겠습니까? 안 그래?'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 14,	'character_name' => '함민승',	'user_no' => 151,	'name' => '한재승',	'script' => '저희 이미 다 그렇게 알고 있는데요?'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 15,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '모두들, 동조하고…'],
          // ['script_no' => 1,	'scene_no' => 66,	'sequence' => 16,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(손사래) 아냐, 아냐...그건 아무도 모르는 거야. (그래도 좋은)'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '희재, 주완과 용길을 자리로 안내한다.'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 2,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '여기가 그래도 젤 조용해요. 음악도 작게 들리고…'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(앉으면서) 뭐... 대단한 얘길 하는 것도 아닌데…'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 4,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '그럼, 준비해 드릴게요. (가고)'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 5,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '근데 무슨 일이십니까?'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 6,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '허허... 뭐 그냥... 한잔 하고 싶어서요.'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 7,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '허, 그러신가요?'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 8,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '부원장님 덕분에 이쪽에 와서... 10년 동안 잘 있다 가네요.
          // 그게 고맙고, 감사하고 그러네요.'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 9,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '아휴...무슨 말씀을... 제가 이과장님 선친께 입은 은혜는 어떻구요. 갚으려면 아직 멀었습니다. 하하하...
          // 근데...이거 왠지...좀 심각한 얘기가 나올 거 같습니다.'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 10,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '역시 환자 얼굴만 봐도 병을 찾아내는 분이시라... 어디가 달라도 다르시네요.'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 11,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '아휴...그렇게 말씀하는 걸 보니 하실 얘기가 있으시긴 한 것 같은데...(가만 보면)'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 12,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(한숨) 참... 고민입니다. 고민... (눈치보고)'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 13,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '무슨...?'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 14,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(뜸들이고) ... 요즘 우리과 내에서 불만들이 나오네요...
          // 장준혁 그 친구... 너무 나선다고 할까...설친다고 할까... 아무튼... 이런 저런 문제들을 많이 일으켜서 큰일입니다. 휴... 부원장님도 아시다시피... 내 후임으로 생각하고, 특별히 키워온 친구 아닙니까... 부원장님 같으면, 이럴 때 어떻게 하시겠습니까?'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 15,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '아... 그런 일 참으로 난처하죠.'],
          // ['script_no' => 1,	'scene_no' => 67,	'sequence' => 16,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '이주완, 끄덕이며 표정을 살피는데…'],
          // ['script_no' => 1,	'scene_no' => 68,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '취기가 오른 준혁 일행들, 와인바에 들어가려는 중이다.'],
          // ['script_no' => 1,	'scene_no' => 68,	'sequence' => 2,	'character_name' => '함민승',	'user_no' => 151,	'name' => '한재승',	'script' => '근데 요즘 이주완 교수님 너무 하시는 거 같습니다.'],
          // ['script_no' => 1,	'scene_no' => 68,	'sequence' => 3,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '말년엔 다 그러는 거야. 괜히 심술도 부리고...
          // 너 같으면 안 그럴 거 같애? 안 그렇습니까?'],
          // ['script_no' => 1,	'scene_no' => 68,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(웃으며) 자, 들어가서 딱 한 잔만 더하고 헤어지자고.'],
          // ['script_no' => 1,	'scene_no' => 69,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁 일행, 자리에 앉으면…'],
          // ['script_no' => 1,	'scene_no' => 69,	'sequence' => 2,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '저기 부원장님하고, 과장님 계세요.'],
          // ['script_no' => 1,	'scene_no' => 69,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(보면) ....'],
          // ['script_no' => 1,	'scene_no' => 69,	'sequence' => 4,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '저쪽 용길과 주완, 준혁 일행을 발견한 듯 보고 있다.
          // 준혁, 일어나 인사를 꾸벅하면, 나머지도 일어나 인사하고...
          // 용길과 주완 끄덕인다.'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '유리방과 같은 구조로 와인이 진열되어 있다.
          // 준혁, 와인을 고르고 있으면 희재가 들어온다.'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 2,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '(와인 고르며) 자기 얘기하고 있던데?'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '응? (하며 고개 돌리면)'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 4,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '유리 너머 저만치에 주완과 용길, 대화하는 게 보인다.'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 5,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '언뜻 듣기론... 후임자 논의 같든데…'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '그래? (이주완 쪽을 보고)'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 7,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '스파이 노릇 좀 해줄까?'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '어? 아냐...됐어. (하고 와인을 고르고)'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 9,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '싫음 말구. (하고 나가는데) …'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 10,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '잠깐... 뭐... 들을 수 있음 들어보고... 무리할 것까진 없고.'],
          // ['script_no' => 1,	'scene_no' => 70,	'sequence' => 11,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '희재, 피식 웃으며 나가고...준혁, 와인 한 병을 꺼낸 후 주완 쪽을 보는데…'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완과 용길 대화중이고, 저쪽에 준혁 일행이 술 마시는 게 보인다.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 2,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(어이없는 웃음) 수술의 천재…'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(같이 웃는) …'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 4,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '매스컴에 그런 식으로 나는 걸 즐긴다... 그건 국립대학병원에 몸담고 있는 사람이 할 행동은 아닌 것 같네요.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 5,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '그럼요. 솜씨는 좋지만... 공명심이 너무 앞서서 말입니다.
          // 이래서야 우리과를 잘 이끌어 나갈 수 있을지?
          // 흠.... 어떻게 해야 할지 판단이 서지를 않아서...
          // 이럴 때 부원장님이라면 어떻게 하시겠습니까?'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 6,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '희재, 와서 와인 따기 시작한다.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 7,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(희재를 의식하고) 흠... 정히 싫으시면, 다른 데서 데려오면 되잖아요.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 8,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '흠흠...하지만 남들이 인정하는 그런 것들이 있어서... 섣불리 그렇게 해버리면... 이런저런 뒷말이 나올 수도 있고…'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 9,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '하긴 그것도 그렇죠.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 10,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '정말 고민입니다.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 11,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '희재, 무심한 척 와인을 따라준다.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 12,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '근데 문제는 이과장님 결정만으로 되는 게 아니고, 교수회의에서 투표로 결정하는 거잖습니까. 거기서 이과장님이 마음먹은 쪽으로 표를 돌려버리면 되잖아요.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 13,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '아... 그게 어디 쉬운 일입니까...'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 14,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '그게 안 되면...미우나 고우나...그냥 넘겨주고 손 터는 거 아니겠습니까? 하지만 그렇게 되면, 그 친구 성격상 나중에 이과장님이 찬밥 신세가 되지 말라는 법이 없어요.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 15,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(걱정인 듯 한숨)'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 16,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '희재, 주완 테이블 쪽에서 오면서 준혁에게 눈짓을 하고...
          // 그쪽에 신경을 쓰고 있던 준혁, 신호를 알아차린다.
          // 치프, 와인을 벌컥벌컥 마시고 있다.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 17,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '이번엔 드라이한 걸루 한번 마셔볼까?'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 18,	'character_name' => '함민승',	'user_no' => 151,	'name' => '한재승',	'script' => '저흰 무조건 콜입니다.'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 19,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 일어나서 와인 저장고로 가고…'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 20,	'character_name' => '치프',	'user_no' => 131,	'name' => '정기문',	'script' => '이주완 교수님... 진짜 너무하는 거 아닙니까? 개처럼 부려먹고…'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 21,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '임마, 장교수님은 저 이과장님... 자그마치 십년 동안 밑 닦아줬어. 넌 아무것도 아니라니까. (하는데)'],
          // ['script_no' => 1,	'scene_no' => 71,	'sequence' => 22,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '병 깨지는 소리가 들린다. 돌아보면, 와인 저장고에서 와인 병이 깨진 듯 하다.'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '바닥에 와인 병이 깨져있고...
          // 준혁, 흥분상태에서 앉아서 병 조각들을 손으로 치운다.'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 2,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '(걱정) 괜찮아?'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(자신이 뭘 하는 지도 모르는 듯) ....'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 4,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '(주위 보며) 만지지마. 내가 치울게…'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 5,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(이를 악문 채) 개새끼...날 어떻게? (기가 막히고)'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 6,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '놔두라니까... 다쳐…'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 7,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '윽...(하면 손이 베이며 피가 흐른다)'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 8,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '아휴, 거 봐... (와인 싸는 헝겊으로 손을 감싸주는)'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 9,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '건하, 유리문 열고 들어온다.'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 10,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '교수님, 다치셨어요?'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 11,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '어... 아냐, 아무것도…'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 12,	'character_name' => '강희재',	'user_no' => 140,	'name' => '이연혜',	'script' => '그대로 있어요. 어디 밴드가 있을 거예요. (하고 나가고)'],
          // ['script_no' => 1,	'scene_no' => 72,	'sequence' => 13,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 손을 감싸 쥐며 주완 쪽을 보다가 뭔가 발견하면…'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '치프, 주완과 용길 테이블 잡고 서 있고, 민승과 동일 등이 떼어내려고 하고 있다.
          // 용길과 주완 당황하고…'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 2,	'character_name' => '치프',	'user_no' => 131,	'name' => '정기문',	'script' => '(꾸벅) 정말 너무 하신 거 아닙니까?
          // 저 여기 남을 줄 알았거든요.'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 3,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '(달려와) 민석아.. 얌마.. 교수님, 죄송합니다.. 뭐해?
          // (떼어내려 하지만 꼭 잡고 안 떨어진다.)'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 4,	'character_name' => '치프',	'user_no' => 131,	'name' => '정기문',	'script' => '저 하루에 두 시간씩 자면서 열심히 했습니다.
          // 와이프 애 날 때도 못 보러 가구요.'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 5,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(나타나서) 차민석! 그만 해!'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 6,	'character_name' => '치프',	'user_no' => 131,	'name' => '정기문',	'script' => '저 억울합니다…'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 7,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(어깨를 당기며) 그만 하라고 했잖아!'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 8,	'character_name' => '치프',	'user_no' => 131,	'name' => '정기문',	'script' => '저 할 말 좀 해야겠습니다. 교수님... 그렇게 뒤통수치시는 거 아닙니다.'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 9,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 순간 치프 멱살 잡고 따귀를 때린다.
          // 테이블 주위에 있는 모든 사람들 깜짝 놀란다.
          // 치프, 쓰러져서 입을 벌린 채 멍하니 준혁을 보고…'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 10,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '아무리 자타가 공인하는 실력을 가졌어요 임마... (감정이 복받치고) 아니라면 그걸로 아닌거야! 이 자식이 어따 대고...
          // 뭐, 억울해? 니가 뭘 했는데 억울해, 정말 억울한 게 뭔지 제대로 알고나 까불란 말야. 알았어!!'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 11,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '지금 뭣들 하는 건가!!'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 12,	'character_name' => '치프',	'user_no' => 131,	'name' => '정기문',	'script' => '(고개 떨구고 흐느끼고)…'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 13,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '의국장, 다들 취한 것 같은데 그만들 보내.'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 14,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '의국원들 치프 데리고 나간다.'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 15,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(정중하게 인사하는) 소란을 피워서 죄송합니다.
          // 뒤통수라는 말에 저도 모르게... (하고 주완을 쳐다보면)'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 16,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(근엄한 기침을 하며 시선 피하고)'],
          // ['script_no' => 1,	'scene_no' => 73,	'sequence' => 17,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '용길, 준혁과 주완을 번갈아 보는데... 준혁, 손에서 피가 흐르고 있다.'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영의 처 문 열어주면 들어오는 도영. 가방 받아주는 도영 처.'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 2,	'character_name' => '윤예리',	'user_no' => 147,	'name' => '안소영',	'script' => '오늘은 왠일로 이렇게 빨리 들어와?'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 3,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(소파에 앉으며) 민아는?'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 4,	'character_name' => '윤예리',	'user_no' => 147,	'name' => '안소영',	'script' => '잠들었어. 유치원에서 윗몸 일으키기 시합했다고 피곤하대.'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 5,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(건성)그래…'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 6,	'character_name' => '윤예리',	'user_no' => 147,	'name' => '안소영',	'script' => '(이상한) 당신, 무슨 일 있었어?'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 7,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '...어...(하다) 어? 뭐라고 했어?'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 8,	'character_name' => '윤예리',	'user_no' => 147,	'name' => '안소영',	'script' => '밥 먹게 씻으라구.'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 9,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '응. (욕실로)'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 10,	'character_name' => '윤예리',	'user_no' => 147,	'name' => '안소영',	'script' => '(가만히 보고)'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 11,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '식탁에 마주 앉은 도영과 처.
          // 도영, 먹는 둥 마는 둥 깨작.
          // 보고 있던 도영 처, 일어나 맥주 캔 꺼내와 앞에 놓아준다.'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 12,	'character_name' => '윤예리',	'user_no' => 147,	'name' => '안소영',	'script' => '왜 그러는지 묻지 마?'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 13,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '당신 보기에도 내가 좀 막힌 사람인가?'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 14,	'character_name' => '윤예리',	'user_no' => 147,	'name' => '안소영',	'script' => '아니라곤 못하겠는데? 대신 책임감은 강한 사람이잖아, 당신.'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 15,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그렇지도 않아…'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 16,	'character_name' => '윤예리',	'user_no' => 147,	'name' => '안소영',	'script' => '아니긴? 환자 일이라면 아무것도 생각 안하고 그것만 고민하면서…'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 17,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '아무것도 생각 안하고 싶은데 현실은 아니라고 하네…'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 18,	'character_name' => '윤예리',	'user_no' => 147,	'name' => '안소영',	'script' => '(느끼고, 일부러) 당신, 물랐구나...
          // 당신 원래 현실씨하고 잘 맞는 타입 아니야. 나하고나 잘 맞지. (웃어주며 도영의 캔에 건배한다.)'],
          // ['script_no' => 1,	'scene_no' => 74,	'sequence' => 19,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(편하게 웃고)'],
          // ['script_no' => 1,	'scene_no' => 75,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '수술 간호사, 오디오를 틀면 클래식이 흘러나온다.
          // 상일과 스탭들 준비하고 있는데, 주완, 들어와 수술복을 여유롭게 입으며'],
          // ['script_no' => 1,	'scene_no' => 75,	'sequence' => 2,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '환자 상태는?'],
          // ['script_no' => 1,	'scene_no' => 75,	'sequence' => 3,	'character_name' => '마취의',	'user_no' => 111,	'name' => '김인우',	'script' => '이상 없습니다.'],
          // ['script_no' => 1,	'scene_no' => 75,	'sequence' => 4,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '시작하지... (하다 멈칫하면)'],
          // ['script_no' => 1,	'scene_no' => 75,	'sequence' => 5,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '참관실에서 준혁이 내려다보고 있다. 시선이 마주치자 준혁, 일어나서 인사 한다.
          // 주완, 신경이 쓰이고...주완, 수술하다가 슬쩍 보면, 준혁이 보이고...
          // 주완, 수술에 임하는데...준혁, 냉소를 흘리며 수술 장면을 보고 있다.'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완, 마스크와 모자를 벗으며 들어오면 준혁이 맞이한다.'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '잘 봤습니다.'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 3,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '스페셜 케이스도 아닌데 뭐 볼게 있다고 참관했어? 더 잘하면서…'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '아닙니다, 과장님. 보면서 반성 많이 했습니다. 제가 요즘 의사로서 본분을 잃고 정말 기술자처럼 행동했던 것 같습니다.'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 5,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(얄미워지는) 수술에 대한 본인 생각이 그렇다면 고쳐 가면 되는 거고…'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '수술 뿐 아니라 어느 면에서든 어긋나지 않도록 노력하겠습니다.'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 7,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '그렇게만 된다면 더 없이 좋겠지... 역시 자넨 욕심이 많은 친구야.'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 8,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '칭찬으로 듣겠습니다.'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 9,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(태연히) 물론이야. 선배의사로서 해주는 말이니까.'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 10,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '감사합니다. 앞으로 차기 외과과장으로 손색이 없도록 열심히 하겠습니다.'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 11,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(흠칫 놀라고) 어...수고해, 그럼. (나간다)'],
          // ['script_no' => 1,	'scene_no' => 76,	'sequence' => 12,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 인사하는데 주완, 문을 나가 지나면서 힐끗 보고 간다.
          // 준혁, 주완 지나면 단단히 각오하는 표정을 짓는다.'],
          // ['script_no' => 1,	'scene_no' => 77,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영과 준혁 마주친다.
          // 도영, 싸늘하게 지나친다.
          // 준혁, 가다 말고 돌아본다.'],
          // ['script_no' => 1,	'scene_no' => 78,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '찝찝한 표정으로 들어온 준혁, 책상에 앉는다.
          // 컴퓨터에서 췌장암 환자 PET-CT를 다시 유심히 들여다본다.
          // 휴대폰 울리고.'],
          // ['script_no' => 1,	'scene_no' => 78,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '네 엄마, 책 받으셨죠?'],
          // ['script_no' => 1,	'scene_no' => 79,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁 모, 마루에서 잡지와 돈을 보며 전화하고 있다.'],
          // ['script_no' => 1,	'scene_no' => 79,	'sequence' => 2,	'character_name' => '정영숙',	'user_no' => 175,	'name' => '김정윤',	'script' => '그래. 근데 돈은 뭐하러 보내.'],
          // ['script_no' => 1,	'scene_no' => 79,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '통장에 넣어 드리면 안꺼내시잖아.'],
          // ['script_no' => 1,	'scene_no' => 79,	'sequence' => 4,	'character_name' => '정영숙',	'user_no' => 175,	'name' => '김정윤',	'script' => '필요하면 어련이 쓸까... 그리구 혼자 살림에 쓸 덴 또 어디가 있다구...괜한 신경 쓰지 마라.'],
          // ['script_no' => 1,	'scene_no' => 79,	'sequence' => 5,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '허리 아프신 건 어떠세요?'],
          // ['script_no' => 1,	'scene_no' => 79,	'sequence' => 6,	'character_name' => '정영숙',	'user_no' => 175,	'name' => '김정윤',	'script' => '괜찮아.'],
          // ['script_no' => 1,	'scene_no' => 79,	'sequence' => 7,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '다른데 불편하신 건 없구요?'],
          // ['script_no' => 1,	'scene_no' => 79,	'sequence' => 8,	'character_name' => '정영숙',	'user_no' => 175,	'name' => '김정윤',	'script' => '애미한테 맘 쓰지 말고 니 할 일이나 게을리 말고 잘해.
          // 나 여기서 무슨 일 나면 연락 갈 곳은 너 밖에 더 있니?
          // 아무 소식 없음 잘 있는 거야. 걱정 말구 일봐라. 끊자.'],
          // ['script_no' => 1,	'scene_no' => 79,	'sequence' => 9,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '수화기 내려놓고, 사진을 곱게 쓸어준다.'],
          // ['script_no' => 1,	'scene_no' => 80,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '전화 끊는 준혁. 가만히 전화기 내려다보면 편안한 미소 짓고.
          // 다시 모니터 보며 곰곰이 생각하다, 수술 스케줄을 열어보면 주완의 학회가 잡혀 있다. 반짝하는.
          // 인터폰 한다.'],
          // ['script_no' => 1,	'scene_no' => 80,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '이도영 교수 있나? (사이) 알았어. (끊고 나간다)'],
          // ['script_no' => 1,	'scene_no' => 81,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '환자와 도영 대화 중.'],
          // ['script_no' => 1,	'scene_no' => 81,	'sequence' => 2,	'character_name' => '환자1',	'user_no' => 115,	'name' => '추태인',	'script' => '선생님, 저 그럼 수술은 언제쯤 하게 돼요?'],
          // ['script_no' => 1,	'scene_no' => 81,	'sequence' => 3,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '저 그게 아무래도 시간이 좀…'],
          // ['script_no' => 1,	'scene_no' => 81,	'sequence' => 4,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(나타나) 어 이교수, 환자 PET-CT보고 연락한다더니 직접 왔어?'],
          // ['script_no' => 1,	'scene_no' => 81,	'sequence' => 5,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(황당한)'],
          // ['script_no' => 1,	'scene_no' => 81,	'sequence' => 6,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(환자에게) 수술은 내일 하는 걸로 하죠.'],
          // ['script_no' => 1,	'scene_no' => 81,	'sequence' => 7,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영, 뭐야 하는 시선...준혁, 웃으며 끄덕이고…'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '도영, 화난 얼굴로 걸어 나오고. 준혁, 곁에.'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 2,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '뭐하자는 거야?'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 3,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '못 들었어? 수술 하자고 했잖아.'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 4,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(딱 멈춰) 장난해?'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 5,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '우리가 환자 놓고 장난이나 칠 만큼 한가하진 않지.'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 6,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '그럼 뭐야? 부원장 환자라고 기겁하고 손 떼겠다고 한 게 누군데?'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 7,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '환자를 우선으로 생각하는 이선생하고 같은 마음이라면 믿겠어?'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 8,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(기가 찬)'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 9,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '어떤 이유를 대도 굽히지 않을 거면 수술이나 맡겨.
          // 이주완 교수님 학회 때문에 자리 비우니까 내일 하면 돼.'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 10,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '몰래 하자는 거야?'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 11,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(답답한) 그럼, 부원장 오진 우리가 찾아냈다 광고라도 할래? 서로 덜 피곤해지는 쪽으로 가.'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 12,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '난 싫다.'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 13,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '너 좋자고 하는 일 아니야, 환자 생각하자며?
          // 널 나하고 같은 부류라고 생각 안 할테니까 이번은 내 말대로 해. 내일이다 (가고)'],
          // ['script_no' => 1,	'scene_no' => 82,	'sequence' => 14,	'character_name' => '이도영',	'user_no' => 3,	'name' => '유해진',	'script' => '(어쩌지 못하고)'],
          // ['script_no' => 1,	'scene_no' => 83,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 주완과 의국원들 앞에서 수술 전 컨퍼런스 중.
          // 모니터에 CT 사진 보면서 설명하는 준혁.'],
          // ['script_no' => 1,	'scene_no' => 83,	'sequence' => 2,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '다음은 acute cholecystitis (급성 담낭염, 이큐트 콜레시스타이티스)로 ER(이알) 통해 들어온 55세 여자 환자로 현재 담낭 농양 증후를 동반한 고열로 항생제 투여 중이며 경과를 본 후 cholecystectomy(담낭 절제술, 콜레시스텍토미) 예정입니다. 이상입니다.'],
          // ['script_no' => 1,	'scene_no' => 83,	'sequence' => 3,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '불 켜지고, 다들 정리하는 분위기.'],
          // ['script_no' => 1,	'scene_no' => 83,	'sequence' => 4,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '그 이외 잡힌 수술은 없나?'],
          // ['script_no' => 1,	'scene_no' => 83,	'sequence' => 5,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(뜨끔) 네…'],
          // ['script_no' => 1,	'scene_no' => 83,	'sequence' => 6,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '의국장, 뭐 보고 할 건 없어?'],
          // ['script_no' => 1,	'scene_no' => 83,	'sequence' => 7,	'character_name' => '이건하',	'user_no' => 4,	'name' => '김태희',	'script' => '예, 없습니다.'],
          // ['script_no' => 1,	'scene_no' => 83,	'sequence' => 8,	'character_name' => '이주완',	'user_no' => 101,	'name' => '강두형',	'script' => '(일어나) 나 없는 동안 일들은 장교수하고 의논하고. (나간다)'],
          // ['script_no' => 1,	'scene_no' => 83,	'sequence' => 9,	'character_name' => '장준혁',	'user_no' => 1,	'name' => '조인성',	'script' => '(따라 나간다)'],
          // ['script_no' => 1,	'scene_no' => 84,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '주완과 걸어 나오는 준혁.
          // 용길과 도영, 의국원들과 지나치며 인사한다.
          // 준혁과 도영, 가다 서로 돌아보며 눈 마주치고.
          // 용길, 슬쩍 돌아보고 아무 일 없듯 걸어간다.'],
          // ['script_no' => 1,	'scene_no' => 85,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '수술할 환자 베드와 함께 들어오는 도영. 환자에게 안심하라는 듯 웃어주고.
          // 환자 베드 수술실로 들어가는데, 준혁 들어온다.
          // 준혁, 도영의 어깨 짚어주고 로젯으로 들어간다.
          // 도영, 미소만 보이고 나간다.'],
          // ['script_no' => 1,	'scene_no' => 86,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '수술 준비를 마친 상태로 건하와 민승이 기다리고 있다.
          // 각각 참관실과 수술실로 들어오는 도영과 준혁.
          // 준혁, 도영을 한번 올려다보고 수술대에 선다.
          // 준혁, 간호사에게 메스를 건네받아 절개를 시작하는데…'],
          // ['script_no' => 1,	'scene_no' => 87,	'sequence' => 1,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '지켜보단 도영, 인기척에 돌아보면 용길이 태연하게 들어선다.
          // 놀라는 도영'],
          // ['script_no' => 1,	'scene_no' => 87,	'sequence' => 2,	'character_name' => '박용길',	'user_no' => 100,	'name' => '최상인',	'script' => '(옆에 앉으며) 어디 좀 볼까?'],
          // ['script_no' => 1,	'scene_no' => 87,	'sequence' => 3,	'character_name' => NULL,	'user_no' => NULL,	'name' => NULL,	'script' => '준혁, 고개를 들다가 소스라치게 놀라는데…'],


        ];

        DB::table('character_scripts')->insert($character_script);
    }
}
