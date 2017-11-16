<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Contest;
use App\Contest_Apply;
use App\Upload_File;
use App\Timeline;
use Illuminate\Support\Facades\Auth;

class ContestController extends Controller
{

  public function index(){

    if(Auth::user()->user_type == '기업'){

      $user_no = Auth::user()->user_no;
      $apply_contests = DB::table('contests')
                              ->leftjoin('upload_files',function ($join){
                                  $join->on('contests.contest_no','=','upload_files.serial_no')
                                       ->where([
                                        ['upload_files.table_type','=','contests'],
                                        ['upload_files.use_type','=','title'],
                                      ]);
                              })->where('production_no',$user_no)->get();

    }else{  //개인인 경우

      $user_no = Auth::user()->user_no;
      $apply_contests = DB::table('contest_applys')
                              ->join('contests','contests.contest_no','=','contest_applys.contest_no')
                              ->leftjoin('upload_files',function ($join){
                                  $join->on('contest_applys.contest_no','=','upload_files.serial_no')
                                       ->where([
                                        ['upload_files.table_type','=','contests'],
                                        ['upload_files.use_type','=','title'],
                                      ]);
                              })->where('user_no',$user_no)->get();

    }

    $contests = DB::table('contests')
                      ->leftjoin('upload_files',function ($join){
                          $join->on('contests.contest_no','=','upload_files.serial_no')
                               ->where([
                                ['upload_files.table_type','=','contests'],
                                ['upload_files.use_type','=','title'],
                              ]);
                      })->get();


    return view('contest.contest',[
      'apply_contests'=>$apply_contests,
      'contests'=>$contests,
    ]);
  }

  public function contest_write(Request $request){

      $user = Auth::user();
      $user_no= $user->user_no;

      $contest = new Contest([
        'production_no' => $user_no,
        'title'=> $request->get('title'),
        'dead_date'=> $request->get('dead_date'),
        'content'=> $request->get('content'),
        'view'=> 30
      ]);
      $contest->save();

      //금방 삽입된 drama의 drama_no를 가져오기 위함
      $contest_no = DB::table('contests')->max('contest_no');

      $img_file = $request->file('image');
      $file = $request->file('document');

      if($img_file == null){
        $upload_file = new Upload_File([
          'table_type' => 'contest',
          'serial_no' => $contest_no,
          'use_type' => 'title',
          'sequence' => 1,
          'original_name' => '',
          'save_name' => '',
          'path' => '/images/contest',
          'type' => '',
        ]);
        $upload_file->save();
      }else{
      //파일업로드
      //파일 확장자
      $extension = $request->file('image')->getClientOriginalExtension();
      //파일 원본이름
      $original_name = $request->file('image')->getClientOriginalName();
      //파일 저장이름   -  양식 tabletype_usetype_serialno.extension
      $save_name = "contest_title_".$contest_no.".".$extension;
      //파일 업로드  storage/app/images/drama
      $path = $request->file('image')->storeAs('images/contest',$save_name);


      $date= date('Ymd');
      $upload_file_img = new Upload_File([
        'table_type' => 'contest',
        'serial_no' => $contest_no,
        'use_type' => 'title',
        'sequence' => 1,
        'original_name' => $original_name,
        'save_name' => $save_name,
        'path' => '/images/contest',
        'type' => $extension,
      ]);

      $upload_file_img->save();
      }

      if($file == null){
        $upload_file = new Upload_File([
          'table_type' => 'contest',
          'serial_no' => $contest_no,
          'use_type' => 'content',
          'sequence' => 1,
          'original_name' => '',
          'save_name' => '',
          'path' => 'documents/contest',
          'type' => '',
        ]);
        $upload_file->save();
      }else{
      //기타 파일 저장
      $contest_apply_no = DB::table('contests')->max('contest_no');

      $extension = $request->file('document')->getClientOriginalExtension();
      //파일 원본이름
      $original_name = $request->file('document')->getClientOriginalName();
      //파일 저장이름   -  양식 tabletype_usetype_serialno.extension
      $save_name = "contest_content_".$contest_apply_no.".".$extension;
      //파일 업로드  storage/app/images/drama
      $path = $request->file('document')->storeAs('documents/contest',$save_name);
      // var_dump($path);exit;

      $date= date('Ymd');
      $upload_file = new Upload_File([
        'table_type' => 'contest',
        'serial_no' => $contest_apply_no,
        'use_type' => 'content',
        'sequence' => 1,
        'original_name' => $original_name,
        'save_name' => $save_name,
        'path' => 'documents/contest',
        'type' => $extension,
      ]);

      $upload_file->save();
  }
  return redirect()->route('contest_main');
}

public function contest_apply(Request $request){


    $user_no = Auth::user()->user_no;
    $user_name = Auth::user()->name;

    $contest_apply = new Contest_Apply([
      'contest_no' => $request->get('contest_no'),
      'user_no' => $user_no,
      'title'=> $request->get('title'),
      'content'=> $request->get('content'),
      'like'=> 0,
      'apply_status'=> 0
    ]);
    $contest_apply->save();

    $contest_apply_no = DB::table('contest_applys')->max('apply_no');
    $file = $request->file('document');

    if($file == null){
      $upload_file = new Upload_File([
        'table_type' => 'contest_apply',
        'serial_no' => $contest_apply_no,
        'use_type' => 'content',
        'sequence' => 1,
        'original_name' => '',
        'save_name' => '',
        'path' => 'documents/contest_apply',
        'type' => '',
      ]);
      $upload_file->save();
    }else{
    //파일업로드
    //파일 확장자
    $extension = $request->file('document')->getClientOriginalExtension();
    //파일 원본이름
    $original_name = $request->file('document')->getClientOriginalName();
    //파일 저장이름   -  양식 tabletype_usetype_serialno.extension
    $save_name = "contest_apply_content_".$contest_apply_no.".".$extension;
    //파일 업로드  storage/app/images/drama
    $path = $request->file('document')->storeAs('documents/contest_apply',$save_name);
    // var_dump($path);exit;

    $date= date('Ymd');
    $upload_file = new Upload_File([
      'table_type' => 'contest_apply',
      'serial_no' => $contest_apply_no,
      'use_type' => 'content',
      'sequence' => 1,
      'original_name' => $original_name,
      'save_name' => $save_name,
      'path' => 'documents/contest_apply',
      'type' => $extension,
    ]);

    $upload_file->save();
  }

    //  알람 부분

    //지원한 공모전의 회사 번호
    $contests = DB::table('contests')->where('contest_no',$request->get('contest_no'))->get();


    $notice = new Timeline([
      'sender' => $user_no,
      'receiver' => $contests[0]->production_no,
      'time' => $contests[0]->created_at,
      'notice_type'=> '알림',
      'table_type'=> 'contests',
      'serial_no'=> $request->get('contest_no'),
      'url'=>'contest_view/',
      'notice'=> '회원님의 공모전 '.$contests[0]->title.'에 '.$user_name.'님이 지원하였습니다.',
      'notice_status'=> 0,
    ]);
      //notice_status 0 => 확인전, 1 => 확인

    $notice->save();

    $notice_no = DB::table('timelines')->max('notice_no');
    $notices = DB::table('timelines')->where('notice_no',$notice_no)->get();

    // return $notices;
    return redirect()->route('contest_main');


}

  //공모전 지원시 contest_no를 저장
  public function contest_no($contest_no){
    $contest_number=DB::table('contests')->where('contest_no',$contest_no)->get();
    // var_dump($contest_number[0]->contest_no);exit;

    return view('contest.contest_apply_write', [
      'contest_no' => $contest_number,
    ]);
  }

  public function contest_view($contest_no){

    $contest = DB::table('contests')->where('contest_no',$contest_no)->first();
    $production_no = $contest->production_no;
    $production = DB::table('users')->where('user_no',$production_no)->value('name');
    $applys = DB::table('contest_applys')
              ->join('users','users.user_no','contest_applys.user_no')
              ->leftjoin('upload_files','upload_files.serial_no','contest_applys.user_no')
              ->select('contest_applys.*', 'users.name', 'upload_files.path','upload_files.save_name')
              ->where('contest_no',$contest_no)
              ->where('upload_files.table_type','=','users')
              ->where('upload_files.use_type','=','profile')
              ->get();
              // var_dump($applys);exit;

    // $user_imgs = DB::table('contest_applys')
    //             ->leftjoin('upload_files',function ($join){
    //               $join->on('contest_applys.user_no','=','upload_files.serial_no')
    //                    ->where([
    //                      ['upload_files.table_type','=','users'],
    //                      ['upload_files.use_type','=','profile'],
    //                   ]);
    //           })->first();
              // var_dump($user_imgs);exit;


    $content = DB::table('contests')
                ->leftjoin('upload_files',function ($join){
                    $join->on('contests.contest_no','=','upload_files.serial_no')
                         ->where([
                          ['upload_files.table_type','=','contests'],
                          ['upload_files.use_type','=','content'],
                        ]);
                })->where('contests.contest_no',$contest_no)->first();

    $contest_img = DB::table('contests')
                ->leftjoin('upload_files',function ($join){
                $join->on('contests.contest_no','=','upload_files.serial_no')
                ->where([
                  ['upload_files.table_type','=','contests'],
                  ['upload_files.use_type','=','title'],
                ]);
              })->where('contests.contest_no',$contest_no)->first();
    // var_dump($applys);exit;
    return view('contest.contest_view',[
      'contest'=>$contest,
      'production'=>$production,
      'applys'=>$applys,
      'content'=>$content,
      'contest_img'=>$contest_img,
    ]);
  }

  //공모전 지원글 modal ajax
  public function contest_apply_get($apply_no){

    //JOIN
    $content = DB::table('contest_applys')
                ->join('users','users.user_no','=','contest_applys.user_no')
                ->leftjoin('upload_files',function ($join){
                    $join->on('contest_applys.apply_no','=','upload_files.serial_no')
                         ->where([
                          ['upload_files.table_type','=','contest_apply'],
                          ['upload_files.use_type','=','content'],
                        ]);
                })->where('contest_applys.apply_no',$apply_no)
                ->select('users.user_no','title','content','contest_applys.created_at','like','apply_status','name','save_name','original_name','path')
                ->get();


    return $content;

  }

  //공모전 지원글 추천수 올리기
  public function contest_apply_recommend($apply_no){
          DB::table('contest_applys')
          ->where('apply_no', $apply_no)
          ->increment('like', 1);
          $recommend = DB::table('contest_applys')
                      ->join('users','users.user_no','=','contest_applys.user_no')
                      ->select('contest_applys.*','users.name')
                      ->where('apply_no',$apply_no)
                      ->get();

                      return $recommend;

      }





  //공모전 지원글 채택
  public function contest_apply_choose($apply_no){
    DB::table('contest_applys')
    ->where('apply_no',$apply_no)
    ->update(['apply_status'=> 1]);

    DB::table('contest_applys')
    ->where('apply_no','<>',$apply_no)
    ->update(['apply_status'=> 2]);

    $contest_apply = DB::table('contest_applys')
                    ->where('apply_no',$apply_no)->get();

    return $contest_apply;

  }

  public function apply_recommend_sort($contest_no){
    $contest = DB::table('contests')->where('contest_no',$contest_no)->first();
    $production_no = $contest->production_no;
    $production = DB::table('users')->where('user_no',$production_no)->value('name');
    $applys = DB::table('contest_applys')
              ->join('users','users.user_no','contest_applys.user_no')
              ->leftjoin('upload_files','upload_files.serial_no','contest_applys.user_no')
              ->select('contest_applys.*', 'users.name', 'upload_files.path','upload_files.save_name')
              ->where('upload_files.table_type','=','users')
              ->where('upload_files.use_type','=','profile')
              ->where('contest_no',$contest_no)->orderBy('like','desc')->get();

    $content = DB::table('contests')
                ->leftjoin('upload_files',function ($join){
                    $join->on('contests.contest_no','=','upload_files.serial_no')
                         ->where([
                          ['upload_files.table_type','=','contests'],
                          ['upload_files.use_type','=','content'],
                        ]);
                })->where('contests.contest_no',$contest_no)->first();

    $contest_img = DB::table('contests')
                ->leftjoin('upload_files',function ($join){
                $join->on('contests.contest_no','=','upload_files.serial_no')
                ->where([
                  ['upload_files.table_type','=','contests'],
                  ['upload_files.use_type','=','title'],
                ]);
              })->where('contests.contest_no',$contest_no)->first();
    // var_dump($contest_img);exit;
    return view('contest.contest_sort',[
      'contest'=>$contest,
      'production'=>$production,
      'applys'=>$applys,
      'content'=>$content,
      'contest_img'=>$contest_img
    ]);

  }


  // public function contest_apply_delete($apply_no){
  //   // var_dump($apply_no);exit;
  // $min_apply_no = DB::table('contest_applys')->min('apply_no')->get();
  // // DB::table('contest_applys')->where('apply_no',$apply_no)->delete();
  //
  // return $min_apply_no;
  // // $final_apply_no = DB::table('contest_apply')
  // }

}
