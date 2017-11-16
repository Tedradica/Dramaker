<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // echo "??";exit;

      $user_image=" ";
      $recruits_array = array();    //커스텀한 recruit객체를 담을 배열
      $recruit_position_array = array();  //recruit_position이 여러개 있을때를 위해 배열에 넣어 관리
      $temp = "0";

      $drama_count = DB::table('dramas')->count();
      $user_count = DB::table('users')->count();
      $product_count = DB::table('products')->count();

      $contests = DB::table('contests')
                ->leftjoin('upload_files',function ($join){
                    $join->on('contests.contest_no','=','upload_files.serial_no')
                         ->where([
                          ['upload_files.table_type','=','contests'],
                          ['upload_files.use_type','=','title'],
                        ]);
                })->orderBy('contest_no')->get();

      // $recruits = DB::table('recruits')
      //           ->join('dramas','dramas.drama_no','=','recruits.drama_no')
      //           ->leftjoin('upload_files',function($join){
      //               $join->on('dramas.drama_no','=','upload_files.serial_no')
      //                    ->where([
      //                      ['upload_files.table_type','=','dramas'],
      //                      ['upload_files.use_type','=','title'],
      //                    ]);
      //           })->orderBy('recruit_no')->get();


      $recruits = DB::table('recruits')
                        ->join('dramas','dramas.drama_no','=','recruits.drama_no')
                        ->join('recruit_fields','recruits.recruit_no','=','recruit_fields.recruit_no')
                        ->join('users','recruits.production_no','=','users.user_no')
                        ->leftjoin('upload_files',function($join){
                            $join->on('dramas.drama_no','=','upload_files.serial_no')
                                 ->where([
                                   ['upload_files.table_type','=','dramas'],
                                   ['upload_files.use_type','=','title'],
                                 ]);
                        })->select('recruits.*','recruit_fields.*','users.name','upload_files.*')
                        ->orderBy('recruits.recruit_no')
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


      $equipments = DB::table('rental_equipments')
                ->leftjoin('upload_files',function ($join){
                    $join->on('rental_equipments.equipment_no','=','upload_files.serial_no')
                         ->where([
                          ['upload_files.table_type','=','rental_equipments'],
                          ['upload_files.use_type','=','title'],
                        ]);
                })->orderBy('equipment_no')->get();

      $products = DB::table('products')
                ->leftjoin('upload_files',function ($join){
                    $join->on('products.product_no','=','upload_files.serial_no')
                         ->where([
                          ['upload_files.table_type','=','ppl_products'],
                          ['upload_files.use_type','=','title'],
                        ]);
                })->orderBy('product_no')->get();




      //Session에 user no 저장

      if(Auth::guest()){
        //  x
      }else{
        Session::put('user_no',Auth::user()->user_no);
      }


      // if(!Auth::guest()){
      //   $user_image = DB::table('v_user_pictures')->where('user_no',Auth::user()->user_no)->value('save_name');
      // }

        return view('home',[
          'drama_count'=>$drama_count,
          'user_count'=>$user_count,
          'product_count'=>$product_count,
          // 'user_image'=>$user_image,
          'contests'=>$contests,
          'recruits'=>$recruits_array,
          'equipments'=>$equipments,
          'products'=>$products,
      ]);
    }
}
