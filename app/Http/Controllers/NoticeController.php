<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    //모든 알람을 가져오는 함수
    public function noticeGet(){

      $user_no = Auth::user()->user_no;

      //알람 상태 0에서 2로 변경
      // 알람상태
      // 0 : 읽지않음
      // 1 : 읽음
      // 2 : 알람페이지에 들어왔으나 읽지 않음
      DB::table('timelines')
                  ->where([
                    ['receiver','=',$user_no],
                    ['notice_status','=',0],
                  ])->update(['notice_status'=>2]);

      //알람 가져옴
      $notice = DB::table('timelines')
                  ->select('notice_no','sender','receiver','time','timelines.created_at','notice_type','timelines.table_type','timelines.serial_no','url','notice','notice_status','user_no','name','upload_files.path','upload_files.save_name')
                  ->join('users','users.user_no','=','timelines.sender')
                  ->leftjoin('upload_files','upload_files.serial_no','=','timelines.sender')
                  ->where('receiver',$user_no)
                  ->where('upload_files.table_type','=','users')
                  ->where('upload_files.use_type','=','profile')
                  ->orderBy('notice_no','desc')->get();

      // $user = $notice->user_no;




      $time = date("Y-m-d H:i:s",time());


      return view('mypage.notice',[
        'notices'=>$notice,
        'time'=>$time,
      ]);
    }

    // 읽지 않은 알람을 확인하기 위한 함수
    public function notice($user_no){

      $notice = DB::table('timelines')
                  ->where([
                    ['receiver','=',$user_no],
                    ['notice_status','=',0]
                  ])->get();

      return $notice;

    }

    //읽은 알람을 처리하기 위한 함수
    public function noticeRead($notice_no){

      //알람 상태 1로 변경
      DB::table('timelines')
                  ->where('notice_no',$notice_no)
                  ->update(['notice_status'=>1]);

      $notice = DB::table('timelines')
                  ->where('notice_no',$notice_no)
                  ->get();

      $redirect_url = $notice[0]->url.$notice[0]->serial_no;

      return redirect($redirect_url);

    }
}
