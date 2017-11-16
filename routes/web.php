<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');


//================== Login/Register route ==================

//register 회원 선택
Route::get('register/user','Auth\RegisterController@viewUser');
Route::get('register/company','Auth\RegisterController@viewCompany');

// ================== Contest route ==================

//contest 메인화면
Route::get('/contest','ContestController@index')->name('contest_main');
//contest 공모전 글쓰기
Route::post('/contest_wirte', 'ContestController@contest_write')->name('contestWrite');
//contest 공모전 지원 글쓰기
Route::post('/contest_apply', 'ContestController@contest_apply')->name('contestApply');

//contest 공모전 글 읽기
Route::get('/contest_view/{contest_no}','ContestController@contest_view');
//contest 공모전 지원글 modal창 읽기 위한 ajax통신 Route
Route::get('/contest_view/apply_get/{apply_no?}','ContestController@contest_apply_get');
//공모전 지원글 모달 추천
Route::get('/contest_apply_recommend/{apply_no}', 'ContestController@contest_apply_recommend');
//공모전 지원글 모달 채택
Route::get('/contest_apply_choose/{apply_no}', 'ContestController@contest_apply_choose');
//공모전 추천수 정렬
Route::get('/apply_recommend_sort/{contest_no}', 'ContestController@apply_recommend_sort');

Route::get('/contest_apply_write/{contest_no}', 'ContestController@contest_no');

Route::get('/contest_apply_choose/{apply_no}','ContestController@contest_apply_choose');

Route::get('/contest_open_write',function () {
    return view('contest/contest_open_write');
});
Route::get('/contest_check_view',function () {
    return view('contest/contest_check_view');
});
Route::get('/contest_open_view',function () {
    return view('contest/contest_open_view');
});

Route::get('/contest_apply_view',function () {
    return view('contest/contest_apply_view');
});
Route::get('/contest_open_modify',function () {
    return view('contest/contest_open_modify');
});
Route::get('/contest_apply_modify',function () {
    return view('contest/contest_apply_modify');
});


//================== Job route ==================

Route::get('/job',"JobController@index")->name('job_main');

Route::get('/job_recruit_write', 'JobController@recruit_drama_choice');

Route::post('/recruit_write', 'JobController@recruit_write')->name('recruitWrite');

//구인구직 신청시 기존 프로필 내용 가져오기
Route::get('/recruit_profile', 'JobController@recruit_profile');

Route::post('/recruit_apply', 'JobController@recruit_apply')->name('recruitApply');

Route::get('/job_staff_recruit_write',function () {
    return view('job/job_staff_recruit_write');
});

Route::get('/job_recruit_view/{recruit_no}', 'JobController@recruit_view');

Route::get('/job_actor_find_list','JobController@find_actor_list');

Route::get('/job_staff_find_list','JobController@find_staff_list');

Route::get('/recruit_apply_write',function () {
    return view('job/job_recruit_apply_write');
});





Route::get('/job_actor_find_view',function () {
  return view('job/job_actor_find_view');
});
Route::get('/job_staff_find_view',function () {
  return view('job/job_staff_find_view');
});



Route::get('/job_staff_recruit_modify',function () {
    return view('job/job_staff_recruit_modify');
});
Route::get('/job_staff_recruit_list',function () {
    return view('job/job_staff_recruit_list');
});
Route::get('/job_actor_recruit_view',function () {
    return view('job/job_actor_recruit_view');
});
Route::get('/job_actor_recruit_list',function () {
    return view('job/job_actor_recruit_list');
});

Route::get('/job_actor_recruit_write',function () {
    return view('job/job_actor_recruit_write');
});
Route::get('/job_actor_recruit_modify',function () {
    return view('job/job_actor_recruit_modify');
});
Route::get('/job_actorapply',function () {
    return view('job/job_actorapply');
});
Route::get('/job_actorapplycheck',function () {
    return view('job/job_actorapplycheck');
});

//================== Mypage route ==================

Route::get('/mypage','MypageController@mypage_user_info');
//내 동영상 등록
Route::post('/video', 'MypageController@video_write')->name('Video');
//마이페이지-내 동영상 관리
Route::get('/mypage_video','MypageController@video_view');
//동영상 modal ajax 통신
Route::get('/video_play/{file_no}','MypageController@video_view_get');

Route::get('/message',function () {
    return view('mypage/message');
});
Route::get('/activity_log',function () {
    return view('mypage/activity_log');
});
Route::get('/staffpullcheck',function () {
    return view('mypage/staffpullcheck');
});

///================== Production route ==================

Route::get('/production','ProductionController@index')->name('production_main');

Route::get('/production_drama_view/{drama_no?}','ProductionController@drama_view');

Route::get('/production_drama_write','ProductionController@drama_write_employee');

Route::post('/drama_write', 'ProductionController@drama_write')->name('dramaWrite');

Route::get('/production_equipment_write', 'ProductionController@production_equipment_write_category');

Route::post('/equipment_write', 'ProductionController@production_equipment_write')->name('equipmentWrite');

//경호
Route::get('/script_list/{script_no}', 'ProductionController@drama_script_list');

Route::post('/script_add/{script_no}', 'ProductionController@drama_script_add');

Route::post('/character_add/{script_no}', 'ProductionController@drama_character_add');

Route::get('/script_all_view/{script_no}', 'ProductionController@drama_script_view_all');

Route::get('/script_view/{search_type}/{search_value}/{script_no}', 'ProductionController@drama_script_view');

Route::get('/script_delete/{script_no}/{scene_no}', 'ProductionController@drama_script_delete');

Route::get('/script_update/{script_no}/{scene_no}', 'ProductionController@drama_script_update');

Route::post('/script_update_set/{script_no}/{scene_no}', 'ProductionController@drama_script_update_set');

//스케줄
Route::get('/schedule/{drama_no?}','ProductionController@schedule');
//캘린더에 표시하기 위한 schedule 정보 get
Route::get('/schedule/get/{drama_no}','ProductionController@schedule_get');
//스케줄 읽기
Route::get('/schedule_read/{schedule_no}','ProductionController@schedule_read');
//스케줄 작성
Route::get('/schedule/write/{drama_no}/{date}','ProductionController@schedule_write');
//스케줄 작성 > 드라마에 소속된 모든 스태프 정보 get
Route::get('/schedule/staff_get/{drama_no}','ProductionController@drama_employee_all_get');
//날씨 체크
Route::get('/weather_check','ProductionController@weather_check');
//날씨 업데이트
//URI가 너무 길어져서 에러나므로 post방식
Route::post('/schedule_weather','ProductionController@weather_update');
//날씨 가져오기
Route::get('/schedule_weather_get','ProductionController@weather_get');
//지역별 날씨 가져오기
Route::get('/local_weather_get','ProductionController@local_weather_get');
//스케줄 수동 추가시 팀 staff 가져오기
Route::get('/schedule_team_staff/{drama_no}/{team_no}','ProductionController@schedule_team_staff');
//씬 정렬
Route::get('/scene_sort','ProductionController@scene_sort');
//스케줄 저장
Route::post('/schedule_save','ProductionController@schedule_save')->name('schedule_save');
//스케줄 수정
Route::get('/schedule_modify','ProductionController@schedule_modify');

Route::post('/schedule_modify_save','ProductionController@schedule_modify_save');

Route::get('/schedulewrite',function () {
  return view('production/schedulewrite');
});



//다희작업

Route::get('/production_ppl_write', 'ProductionController@production_ppl_write_category');

Route::post('/ppl_write_production', 'ProductionController@production_ppl_write')->name('productionpplWrite');

//ajax 통신 route
Route::get('/production_equipment/{equipment_no}','ProductionController@production_equipment_get');
// Route::get('/equipment_rewrite/{equipment_no}','ProductionController@production_equipment_rewrite')

//ajax 통신 route
Route::get('/production_employee/{user_no}','ProductionController@production_employee_get');

//ajax 통신 route
Route::get('/drama_employee/{user_no}','ProductionController@drama_employee_get');
//스태프 추가 페이지-> 팀 목록
Route::get('/drama_employee_add/{drama_no}','ProductionController@drama_employee_add');
//스태프 추가 페이지-> 팀에 맞는 스태프
Route::get('/position_select/{position_no}','ProductionController@position_select');
//user에 맞는 정보 뜨기
Route::get('/staff_info/{user_no}','ProductionController@staff_info');
//drama_employee_add form데이터 받아 저장
Route::post('/employee_add','ProductionController@employee_add');
//staff 삭제
Route::get('/staff_delete/{user_no}','ProductionController@drama_staff_delete');

//ajax 통신 route
Route::get('/recruit_check/{apply_no}','ProductionController@recruit_check_get');

Route::get('/production_drama_chart/{drama_no}', 'ProductionController@drama_chart');

//구인구직 모달 채용
Route::get('/recruit_apply_choose/{apply_no}','ProductionController@recruit_apply_choose');
//구인구직 모달 버리기
Route::get('/recruit_apply_cancel/{apply_no}','ProductionController@recruit_apply_cancel');


Route::get('/production_drama_view',function () {
    return view('production/production_drama_view');
});
Route::get('/work_information',function () {
    return view('production/work_information');
});
//작품에 소속된 스태프 리스트
Route::get('/staff_list/{drama_no}','ProductionController@staff_list')->name('staffList');

//직급별로 리스트
Route::get('/staff_position_sort/{category_no}', 'ProductionController@staff_list_category_sort');

//드라마 인력 modal
Route::get('/drama_employee/{user_no}', 'ProductionController@drama_employee_get');

//드라마 장비
Route::get('/equipment_list/{drama_no}','ProductionController@drama_equipment');

//드라마 장비 대여를 위한 제작사 장비목록 가져오기
Route::get('/production_equipments_get/{production_no}','ProductionController@production_equipments_get');

//드라마 구인
Route::get('/recruitment/{drama_no}','ProductionController@recruitment');
Route::get('/recruit_list/{recruit_no}','ProductionController@recruit_list');


//스태프풀 view
Route::get('/staffpull/{drama_no?}','ProductionController@staffpull');
//ajax 통신으로 스태프풀 list가져옴
Route::get('/staffpull_list','ProductionController@staffpull_list');
//ajax 통신으로 스태프 스케줄 가져옴
Route::get('/staffpull_schedule','ProductionController@staffpull_user_schedule');
//staffpull 요청
Route::get('/staffpull_request','ProductionController@staffpull_request');


Route::get('/scriptwrite',function () {
    return view('production/scriptwrite');
});
Route::get('/production_recruit_staff_list',function () {
    return view('production/production_recruit_staff_list');
});
Route::get('/production_ppl_list/{drama_no}',function () {
    return view('production/production_ppl_list');
});
Route::get('/production_people_write',function () {
    return view('production/production_people_write');
});

Route::get('/placeinfo/{location_no}', 'ResourceController@location');




//================== Resource route ==================

Route::get('/resource_equipment','ResourceController@equipment_index');

Route::get('/resource_location','ResourceController@location_index');

Route::get('/resource_ppl','ResourceController@ppl_index');





Route::get('/resource_company_ppl_write','ResourceController@company_ppl_write_category');

Route::get('/ppl_write','ResourceController@company_ppl_write')->name('pplWrite');

Route::get('/ppl_view/{product_no}','ResourceController@ppl_view');

Route::get('/ppl_category_sort/{category_no}', 'ResourceController@ppl_category_sort');

Route::get('/equipmentinfo',function () {
    return view('resource/equipmentinfo');
});
Route::get('/placeinfo',function () {
    return view('resource/placeinfo');
});

//================== Meeting route ==================

Route::get('/meeting',function () {
    return view('meeting/meeting');
});

//================== Notice route ==================
//알람 페이지
Route::get('/notice','NoticeController@noticeGet')->name('noticeGet');
//새로운 알람 여부 확인
Route::get('/notice/{user_no?}','NoticeController@notice')->name('notice');
//알람 페이지 처리
Route::get('/notice_read/{notice_no?}','NoticeController@noticeRead');

//================== etc ==================
//유저 정보
Route::get('/user/{user_no?}','Controller@userInfo')->name('userInfoGet');


//================== application route ==================
//사용자 id,no,token 추가,수정
Route::get('/app_token','AppController@tokenUpdate');
