<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Recruit;
use App\Drama;
use App\Recruit_Apply;
use App\Upload_File;
use App\Recruit_Field;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{


  public function index(){
    //
    // $rr=DB::table('recruits')
    // ->select('dead_date','-','create_at','/86400','as fff')
    // ->get();
    // var_dump($rr);exit;

    $recruits_array = array();    //커스텀한 recruit객체를 담을 배열
    $recruit_position_array = array();  //recruit_position이 여러개 있을때를 위해 배열에 넣어 관리
    $temp = "0";



    $recruits = DB::table('recruits')
                      ->join('recruit_fields','recruits.recruit_no','=','recruit_fields.recruit_no')
                      ->join('users','recruits.production_no','=','users.user_no')
                      ->select('recruits.*','recruit_fields.*','users.name')
                      ->get();

    //모집직종을 합치기 위함
    foreach($recruits as $recruit){

      if($temp == $recruit->recruit_no){    //recruit_no가 전것과 같은가?
        array_push($recruit_position_array,$recruit->recruit_position); //recruit_position을 배열에 넣음
        $recruit->recruit_position = $recruit_position_array;   //recruit객체의 recruit_positio값을 배열로 치환

        array_pop($recruits_array); //전 loof에서 들어간 recruit객체 뺌
        array_push($recruits_array,$recruit); //recruit객체를 배열에 넣음

        continue; //같으면 loof넘어감

      }else{
        $recruit_position_array = array();  //recruit_position_array 초기화
        array_push($recruit_position_array,$recruit->recruit_position); //recruit_position을 배열에 넣음
        $recruit->recruit_position = $recruit_position_array;   //recruit객체의 recruit_positio값을 배열로 치환

        array_push($recruits_array,$recruit); //recruit객체를 배열에 넣음

      }

      $temp = $recruit->recruit_no; //temp를 지금 recruit_no로 초기화

    } //end foreach


    // print_r($recruits_array);
    // exit;

    // var_dump($recruits_array);exit;

    return view('job.job',[
      'recruits'=> $recruits_array,
    ]);


  }


  public function recruit_view($recruit_no){

    $recruit = DB::table('recruits')
               ->join('recruit_fields','recruit_fields.recruit_no','=', 'recruits.recruit_no')
               ->where('recruits.recruit_no', $recruit_no)->first();
    $production_no = $recruit->production_no;
    $production = DB::table('users')->where('user_no',$production_no)->value('name');

    $recruit_position = DB::table('recruits')
                       ->join('recruit_fields','recruit_fields.recruit_no','=', 'recruits.recruit_no')
                       ->select('recruit_fields.recruit_position','recruit_fields.volume')
                       ->where('recruits.recruit_no', $recruit_no)->get();
    $drama = DB::table('recruits')
             ->join('dramas','dramas.drama_no','=','recruits.drama_no')
             ->select('dramas.*')
             ->where('recruits.recruit_no', $recruit_no)->first();

    return view('job.job_recruit_view',[
      'recruit'=> $recruit,
      'production'=>$production,
      'recruit_positions'=>$recruit_position,
      'drama'=>$drama
    ]);

  }



  public function recruit_drama_choice(){
    $user = Auth::user();
    $user_no= $user->user_no;

    $recruit_drama = DB::table('dramas')->select('drama_no', 'drama_name')->where('production_no', $user_no)->get();
    $recruit_position = DB::table('positions')->select('position')->get();

    // var_dump($recruit_drama); exit;
    return view('job.job_recruit_write',[
      'recruit_dramas'=> $recruit_drama,
      'recruit_positions' => $recruit_position
    ]);

  }


  public function recruit_write(Request $request){
    // dd($request);exit;
      $user = Auth::user();
      $user_no= $user->user_no;
      // var_dump($request);exit;
      $recruit = new Recruit([
        'drama_no' => $request->get('drama_no'),
        'production_no'=> $user_no,
        'user_no'=> $user_no,
        'title'=> $request->get('title'),
        'local'=> $request->get('local'),
        'dead_date'=> $request->get('dead_date'),
        'content'=> $request->get('content')
      ]);

      $recruit->save();

      $recruit_no = DB::table('recruits')->max('recruit_no');
      $recruit_position = $request->get('recruit_position');
      $volume = $request->get('volume');
      $recruit_position_cnt = count($recruit_position);

      for($i=0; $i<=$recruit_position_cnt-1; $i++){
        $recruit_fields = new Recruit_Field([
          'recruit_no' => $recruit_no,
          'sequence' => $i+1,
          'recruit_position' => $recruit_position[$i],
          'volume' => $volume[$i]
        ]);

        $recruit_fields->save();
      }
    return redirect()->route('job_main');
  }

  public function recruit_apply(Request $request){
    $user = Auth::user();
    $user_no= $user->user_no;
    $user_type= $user->type;

    $recruit_apply = new Recruit_Apply([
      'recruit_no' => 1,
      'user_no'=> $user_no,
      'name'=> $request->get('name'),
      'birth'=> $request->get('birth'),
      'email'=> $request->get('email'),
      'tel'=> $request->get('tel'),
      'career'=> $request->get('career'),
      'type'=> $user_type,
      'stage_name'=> $request->get('stage_name'),
      'gender'=> $request->get('gender'),
      'height'=> $request->get('height'),
      'weight'=> $request->get('weight'),
      'local'=> $request->get('local'),
      'like' => 3,
      'recruit_status'=> 0,
    ]);
    $recruit_apply->save();

    //금방 삽입된 drama의 drama_no를 가져오기 위함
    $apply_no = DB::table('recruit_applys')->max('apply_no');
    $file = $request->file('video');

    if($file == null){
      $upload_file = new Upload_File([
        'table_type' => 'recruit_apply',
        'serial_no' => $apply_no,
        'use_type' => 'content',
        'sequence' => 1,
        'original_name' => '',
        'save_name' => '',
        'path' => 'videos/recruit_apply',
        'type' => '',
      ]);
      $upload_file->save();
    }else{
    //파일업로드
    //파일 확장자
    $extension = $request->file('video')->getClientOriginalExtension();
    //파일 원본이름
    $original_name = $request->file('video')->getClientOriginalName();
    //파일 저장이름   -  양식 tabletype_usetype_serialno.extension
    $save_name = "recruit_apply_content_".$apply_no.".".$extension;
    //파일 업로드  storage/app/images/drama
    $path = $request->file('video')->storeAs('videos/recruit_apply',$save_name);


    // $date= date('Ymd');
    $upload_file = new Upload_File([
      'table_type' => 'recruit_apply',
      'serial_no' => $apply_no,
      'use_type' => 'content',
      'sequence' => 1,
      'original_name' => $original_name,
      'save_name' => $save_name,
      'path' => 'videos/recruit_apply',
      'type' => $extension,
    ]);

    $upload_file->save();
  }
  return redirect()->route('job_main');
}

  public function recruit_profile(){
    $user_no = Auth::user()->user_no;

    $profile = DB::table('users')->where('user_no',$user_no)->get();

    return $profile;
  }


// =============================================================================


  public function find_actor_list(){

    $actor = DB::table('users')
             ->leftjoin('upload_files','upload_files.serial_no','users.user_no')
             ->where('users.user_type','개인')
             ->where('upload_files.table_type','=','users')
             ->where('upload_files.use_type','=','profile')
             ->paginate(20);

            //  var_dump($actor);exit;

    return view('job.job_actor_find_list',[
      'actors'=> $actor,
    ]);

  }

  public function find_staff_list(){

    $staff = DB::table('users')
            ->select('users.user_no','users.name','users.type','users.gender','users.local','users.career','upload_files.path','upload_files.save_name')
            ->leftjoin('upload_files','upload_files.serial_no','users.user_no')
            ->where('users.user_type','=','개인')
            ->where('users.type','!=','배우')
            ->where('upload_files.table_type','=','users')
            ->where('upload_files.use_type','=','profile')
            ->paginate(20);

    return view('job.job_staff_find_list',[
      'staffs'=> $staff,
    ]);

  }
}
