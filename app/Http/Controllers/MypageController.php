<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Upload_File;

class MypageController extends Controller
{
    public function video_write(Request $request){

      $user_no = Auth::user()->user_no;

      $sequence = DB::table('upload_files')
                  ->where('serial_no',$user_no)
                  ->max('sequence');
      $extension = $request->file('mypage_video')->getClientOriginalExtension();
      //파일 원본이름
      $original_name = $request->file('mypage_video')->getClientOriginalName();

      //파일 저장이름   -  양식 tabletype_usetype_serialno.extension
      $save_name = "users_video_".$user_no.".".$extension;

      //파일 업로드  storage/app/images/drama
      $path = $request->file('mypage_video')->storeAs('videos/users',$save_name);

      $upload_file = new Upload_File([
        'table_type' => 'users',
        'serial_no' => $user_no,
        'use_type' => 'video',
        'sequence' => 1,
        'original_name' => $original_name,
        'save_name' => $save_name,
        'path' => 'videos/users',
        'type' => $extension,
      ]);

      $upload_file->save();

      return back();
  }

  public function mypage_user_info(){
    $user_no = Auth::user()->user_no;

    $user = DB::table('users')
            ->select('users.name','users.birth','users.tel','users.email','users.type','upload_files.path','upload_files.save_name')
            ->leftjoin('upload_files',function ($join){
              $join->on('users.user_no','=','upload_files.serial_no')
              ->where([
                        ['upload_files.table_type','=','users'],
                        ['upload_files.use_type','=','profile'],
                      ]);
              })->where('serial_no',$user_no)->get();
                // var_dump($video);exit;
    return view('mypage.mypage', [
      'user' => $user
    ]);
  }

    public function video_view(){
      $user_no = Auth::user()->user_no;

      $video = DB::table('users')
              ->leftjoin('upload_files',function ($join){
                $join->on('users.user_no','=','upload_files.serial_no')
                ->where([
                          ['upload_files.table_type','=','users'],
                          ['upload_files.use_type','=','video'],
                        ]);
                })->where('serial_no',$user_no)->get();
                  // var_dump($video);exit;
    return view('mypage.mypage_video', [
      'videos' => $video
    ]);

  }


  public function video_view_get($file_no){
    $video = DB::table('upload_files')
             ->where('file_no',$file_no)
             ->get();
    return $video;
  }
}
