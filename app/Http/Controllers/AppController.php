<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Drama;
use App\Production_Equipment;
use App\Category_Equipment;
use App\Request_Product;
use App\Upload_File;
use App\Scene;
use App\Drama_Employee;
use App\Schedule;
use App\Schedule_Summary;
use App\Meeting;
use App\Team_Schedule;
use App\Timeline;
use Illuminate\Support\Facades\Auth;


class AppController extends Controller
{
    //
    public function tokenUpdate(Request $request){


      $callback = $request->get('callback');



      $user_no = $request->get('user_no');
      $user_id = $request->get('user_id');
      $user_token = $request->get('user_token');

      //token이 없으면 추가 있으면 교체
      //지금 로그인하는 사람의 token값을 다른 사람이 가지고있다면
      //그 사람의 토큰은 지워버림


      //DB에 없는 유저 이면 데이터 추가

      $user_exists = DB::table('fcm_tokens')
                        ->where('user_no',$user_no)
                        ->value('user_no');

      if($user_exists == NULL){
        //사용자에게 token 추가
        DB::table('fcm_tokens')->insert([
          'user_no' => (int) $user_no,
          'user_id' => $user_id,
          'token' => $user_token
        ]);
      }

      //유저가 token을 가지고 있는지 검사
      $token_exists = DB::table('fcm_tokens')
                          ->where('user_no',$user_no)
                          ->value('token');


      if($token_exists == NULL){  //토큰이 없을 경우


        //지금 로그인하는 사람의 token값을 가진 다른 사용자들 token을 NULL로 초기화
        DB::table('fcm_tokens')
            ->where('token',$user_token)
            ->update(['token' => NULL]);

        DB::table('fcm_tokens')
            ->where('user_no',$user_no)
            ->update(['token' => $user_token]);

      }else{  //토큰이 있을 경우


        //지금 로그인하는 사람의 token값을 가진 다른 사용자들 token을 지움
        DB::table('fcm_tokens')
            ->where('token',$user_token)
            ->update(['token' => NULL]);


        DB::table('fcm_tokens')
            ->where('user_no',$user_no)
            ->update(['token' => $user_token]);

      }


      return $callback."('success')";

    }
}
