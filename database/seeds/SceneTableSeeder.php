<?php

use Illuminate\Database\Seeder;

class SceneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $scene=[
          ['script_no' => 1,	'scene_no' => 1,	'created_at' => date("Y-m-d H:i:s"),	'location' => '명인대학 병원',	'scene_summary' => '수술 준비 스케치',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 2,	'created_at' => date("Y-m-d H:i:s"),	'location' => '수술실 안',	'scene_summary' => '학생들앞에서 집도하는 준혁',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 3,	'created_at' => date("Y-m-d H:i:s"),	'location' => '내과 외래',	'scene_summary' => '외래를 하러온 도영 ',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 4,	'created_at' => date("Y-m-d H:i:s"),	'location' => '회의실',	'scene_summary' => '회의를 진행하는 의사들',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 5,	'created_at' => date("Y-m-d H:i:s"),	'location' => '수술실 안',	'scene_summary' => '집도에 열중하는 준혁',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 6,	'created_at' => date("Y-m-d H:i:s"),	'location' => '회의실',	'scene_summary' => '회의를 진행하는 의사들',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 7,	'created_at' => date("Y-m-d H:i:s"),	'location' => '수술실',	'scene_summary' => '집도를 끝내는 준혁',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 8,	'created_at' => date("Y-m-d H:i:s"),	'location' => '수술실 복도',	'scene_summary' => '준혁과 부딪히는 간호사',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 9,	'created_at' => date("Y-m-d H:i:s"),	'location' => '회의실 밖 복도',	'scene_summary' => '회의가 끝나고 방송에서 준혁을 찾는다',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 10,	'created_at' => date("Y-m-d H:i:s"),	'location' => '샤워실',	'scene_summary' => '샤워하는 준혁',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 11,	'created_at' => date("Y-m-d H:i:s"),	'location' => 'B 로젯 안',	'scene_summary' => '긴박한 수술실',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 12,	'created_at' => date("Y-m-d H:i:s"),	'location' => '참관실',	'scene_summary' => '수술을 참관하는 의사들',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 13,	'created_at' => date("Y-m-d H:i:s"),	'location' => 'B 로젯 안',	'scene_summary' => '다급하게 들어오는 준혁',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 14,	'created_at' => date("Y-m-d H:i:s"),	'location' => '참관실',	'scene_summary' => '극적인 수술과정을 바라보는 의사들',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 15,	'created_at' => date("Y-m-d H:i:s"),	'location' => 'B 로젯 안',	'scene_summary' => '극적으로 수술이 성공',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 16,	'created_at' => date("Y-m-d H:i:s"),	'location' => '참관실',	'scene_summary' => '준혁을 칭찬하는 의사들',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 17,	'created_at' => date("Y-m-d H:i:s"),	'location' => '로젯 안',	'scene_summary' => '수술을 마무리하고 나가는 준혁',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 18,	'created_at' => date("Y-m-d H:i:s"),	'location' => '참관실',	'scene_summary' => '반전되는 수술 상황',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 19,	'created_at' => date("Y-m-d H:i:s"),	'location' => '로젯 안',	'scene_summary' => '당황하는 집도의와 스탭들',	'status' => 0],
          ['script_no' => 1,	'scene_no' => 20,	'created_at' => date("Y-m-d H:i:s"),	'location' => '참관실',	'scene_summary' => '놀라 보던 교수진과 의국원들',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 21,	'created_at' => date("Y-m-d H:i:s"),	'location' => '로젯 안',	'scene_summary' => '다시 돌아온 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 22,	'created_at' => date("Y-m-d H:i:s"),	'location' => '참관실',	'scene_summary' => '심장 마사지를 시도하다.',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 23,	'created_at' => date("Y-m-d H:i:s"),	'location' => '로젯 안',	'scene_summary' => '혈액을 요청하는 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 24,	'created_at' => date("Y-m-d H:i:s"),	'location' => '참관실',	'scene_summary' => '당황한 주완',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 25,	'created_at' => date("Y-m-d H:i:s"),	'location' => '로젯 안',	'scene_summary' => '과감하게 시도하는 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 26,	'created_at' => date("Y-m-d H:i:s"),	'location' => '참관실',	'scene_summary' => '애써웃는 주완',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 27,	'created_at' => date("Y-m-d H:i:s"),	'location' => '내과 외래 안',	'scene_summary' => '환자를 안내하는 도영',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 28,	'created_at' => date("Y-m-d H:i:s"),	'location' => '내시경실',	'scene_summary' => '내시경 촬영 결과',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 29,	'created_at' => date("Y-m-d H:i:s"),	'location' => '병원 복도',	'scene_summary' => '주완과 대화를 나누는 노교수',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 30,	'created_at' => date("Y-m-d H:i:s"),	'location' => '테라스',	'scene_summary' => '테라스로 나와 얘기하는 주완과 노교수',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 31,	'created_at' => date("Y-m-d H:i:s"),	'location' => '상담실',	'scene_summary' => '환자 가족과 이야기하는 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 32,	'created_at' => date("Y-m-d H:i:s"),	'location' => '주완 교수실',	'scene_summary' => '이야기를 나누는 준혁과 주완',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 33,	'created_at' => date("Y-m-d H:i:s"),	'location' => '원내 우체국',	'scene_summary' => '잡지를 보는 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 34,	'created_at' => date("Y-m-d H:i:s"),	'location' => '복도 일각',	'scene_summary' => '걸으며 이야기를 나누는 정진과 용길',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 35,	'created_at' => date("Y-m-d H:i:s"),	'location' => '내과 안',	'scene_summary' => '대화를 나누는 용길과 도영',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 36,	'created_at' => date("Y-m-d H:i:s"),	'location' => '원무과장 앞',	'scene_summary' => '원무과장장과 실랑이 하는 도영',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 37,	'created_at' => date("Y-m-d H:i:s"),	'location' => '휴게실',	'scene_summary' => '커피를 마시며 얘기하는 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 38,	'created_at' => date("Y-m-d H:i:s"),	'location' => '의국',	'scene_summary' => '잡담하는 상일',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 39,	'created_at' => date("Y-m-d H:i:s"),	'location' => '병원 앞',	'scene_summary' => '차에 타는 주완',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 40,	'created_at' => date("Y-m-d H:i:s"),	'location' => '민원장 병원 로비',	'scene_summary' => '얘기하는 환자들',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 41,	'created_at' => date("Y-m-d H:i:s"),	'location' => '원장실',	'scene_summary' => '딸과 얘기하는 민원장',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 42,	'created_at' => date("Y-m-d H:i:s"),	'location' => '거실',	'scene_summary' => '주완과 마주치는 윤진',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 43,	'created_at' => date("Y-m-d H:i:s"),	'location' => '일식집 룸',	'scene_summary' => '술 마시고 있는 준혁과 민회장',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 44,	'created_at' => date("Y-m-d H:i:s"),	'location' => '와인바 안',	'scene_summary' => '전화하는 희재',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 45,	'created_at' => date("Y-m-d H:i:s"),	'location' => '일식집',	'scene_summary' => '들어오는 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 46,	'created_at' => date("Y-m-d H:i:s"),	'location' => '주완의 서재',	'scene_summary' => '씩씩대는 주완 처',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 47,	'created_at' => date("Y-m-d H:i:s"),	'location' => '공사 현장',	'scene_summary' => '차 안에서 키스를 나누는 준혁과 희재',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 48,	'created_at' => date("Y-m-d H:i:s"),	'location' => '수술실 참관실',	'scene_summary' => '수술중인 준혁팀',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 49,	'created_at' => date("Y-m-d H:i:s"),	'location' => '외과 병실',	'scene_summary' => '회진을 준비하다',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 50,	'created_at' => date("Y-m-d H:i:s"),	'location' => '병동 복도',	'scene_summary' => '회진이 시작되다',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 51,	'created_at' => date("Y-m-d H:i:s"),	'location' => '병실',	'scene_summary' => '첫 번째 환자 앞에 서는 주완과 상일',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 52,	'created_at' => date("Y-m-d H:i:s"),	'location' => '병실 밖',	'scene_summary' => '주완, 준혁 일행들과 나오고 있다',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 53,	'created_at' => date("Y-m-d H:i:s"),	'location' => '의국',	'scene_summary' => '들어오는 주완과 준혁, 나머지 의국원들',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 54,	'created_at' => date("Y-m-d H:i:s"),	'location' => '부원장실',	'scene_summary' => '용길, 용길 처와 소파에 앉아 있다',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 55,	'created_at' => date("Y-m-d H:i:s"),	'location' => '주완의 집 현관 밖',	'scene_summary' => '뒤따라 나오는 윤진',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 56,	'created_at' => date("Y-m-d H:i:s"),	'location' => '호텔 이벤트 룸',	'scene_summary' => '회장선출이 시작되다',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 57,	'created_at' => date("Y-m-d H:i:s"),	'location' => '화장실',	'scene_summary' => '눈물이 나오는 주완 처',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 58,	'created_at' => date("Y-m-d H:i:s"),	'location' => '이벤트 룸',	'scene_summary' => '화가나는 주완 처',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 59,	'created_at' => date("Y-m-d H:i:s"),	'location' => '호텔로비',	'scene_summary' => '여전히 허우적대는 주완 처',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 60,	'created_at' => date("Y-m-d H:i:s"),	'location' => 'CT실',	'scene_summary' => '환자 기계 속에서 촬영하고 있다',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 61,	'created_at' => date("Y-m-d H:i:s"),	'location' => '도영 연구실',	'scene_summary' => '이야기를 나누는 도영과 은혜',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 62,	'created_at' => date("Y-m-d H:i:s"),	'location' => '외과병동',	'scene_summary' => '약 나눠주는 간호사',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 63,	'created_at' => date("Y-m-d H:i:s"),	'location' => '준혁 교수실',	'scene_summary' => '도영과 퇴근 차림의 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 64,	'created_at' => date("Y-m-d H:i:s"),	'location' => '교수실 복도',	'scene_summary' => '준혁, 나오고. 도영, 쫓아 나온다',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 65,	'created_at' => date("Y-m-d H:i:s"),	'location' => '연구실',	'scene_summary' => '신나는 은혜',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 66,	'created_at' => date("Y-m-d H:i:s"),	'location' => '맥주 집 저녁',	'scene_summary' => '떠나는 치프와 송별회',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 67,	'created_at' => date("Y-m-d H:i:s"),	'location' => '와인바',	'scene_summary' => '희재, 주완과 용길을 자리로 안내한다',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 68,	'created_at' => date("Y-m-d H:i:s"),	'location' => '와인바 앞',	'scene_summary' => '취기가 오른 준혁 일행들',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 69,	'created_at' => date("Y-m-d H:i:s"),	'location' => '와인 바 안',	'scene_summary' => '인사를 하는 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 70,	'created_at' => date("Y-m-d H:i:s"),	'location' => '와인 바 내 와인 저장고',	'scene_summary' => '피식 웃으며 나가는 희재',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 71,	'created_at' => date("Y-m-d H:i:s"),	'location' => '와인바',	'scene_summary' => '용길 대화중인 주완',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 72,	'created_at' => date("Y-m-d H:i:s"),	'location' => '와인 저장고',	'scene_summary' => '흥분한 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 73,	'created_at' => date("Y-m-d H:i:s"),	'location' => '와인바',	'scene_summary' => '당황한 용길과 주완',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 74,	'created_at' => date("Y-m-d H:i:s"),	'location' => '도영의 집 거실 주방',	'scene_summary' => '들어오는 도영',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 75,	'created_at' => date("Y-m-d H:i:s"),	'location' => '수술실 참관실',	'scene_summary' => '여유있는 주완',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 76,	'created_at' => date("Y-m-d H:i:s"),	'location' => '수술실 휴게실',	'scene_summary' => '주완을 맞이하는 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 77,	'created_at' => date("Y-m-d H:i:s"),	'location' => '건물 이어지는 통로',	'scene_summary' => '도영과 준혁 마주친다',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 78,	'created_at' => date("Y-m-d H:i:s"),	'location' => '준혁의 교수실',	'scene_summary' => '찝찝한 표정으로 들어온 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 79,	'created_at' => date("Y-m-d H:i:s"),	'location' => '동해안 바닷가 집',	'scene_summary' => '준혁 모 전화하고 있다.',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 80,	'created_at' => date("Y-m-d H:i:s"),	'location' => '준혁 교수실',	'scene_summary' => '전화 끊는 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 81,	'created_at' => date("Y-m-d H:i:s"),	'location' => '외과 병동',	'scene_summary' => '환자와 도영 대화 중',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 82,	'created_at' => date("Y-m-d H:i:s"),	'location' => '병실 밖',	'scene_summary' => '도영, 화난 얼굴로 걸어 나오고',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 83,	'created_at' => date("Y-m-d H:i:s"),	'location' => '컨퍼런스 룸',	'scene_summary' => '준혁 수술전 컨퍼런스 중',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 84,	'created_at' => date("Y-m-d H:i:s"),	'location' => '2층 복도',	'scene_summary' => '주완과 걸어 나오는 준혁',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 85,	'created_at' => date("Y-m-d H:i:s"),	'location' => '수술실 복도',	'scene_summary' => '환자 베드와 함께 들어오는 도영',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 86,	'created_at' => date("Y-m-d H:i:s"),	'location' => '수술실',	'scene_summary' => '수술 준비를 마친 상태',	'status' => 0],
          // ['script_no' => 1,	'scene_no' => 87,	'created_at' => date("Y-m-d H:i:s"),	'location' => '참관실',	'scene_summary' => '놀라는 도영',	'status' => 0],


        ];

        DB::table('scenes')->insert($scene);
    }
}
