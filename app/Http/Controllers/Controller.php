<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function userInfo($user_no){

      $user_info = DB::table('users')
                      ->join('upload_files',function($join){
                        $join->on('users.user_no','=','upload_files.serial_no')
                            ->where([
                              ['upload_files.table_type','=','users'],
                              ['upload_files.use_type','=','profile'],
                            ]);
                      })
                      ->where('user_no',$user_no)
                      ->get();



      return $user_info;

    }
}
