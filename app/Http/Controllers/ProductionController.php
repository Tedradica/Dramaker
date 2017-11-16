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


class ProductionController extends Controller
{


  public function index(){

      $type = Auth::user()->user_type;
      $user_no = Auth::user()->user_no;

      if($type == '기업'){  //유저의 타입이 제작사일 경우   ************(수정필요)

        // $drama = DB::table('dramas')->where('production_no',$user_no)->get();

        //dramas 와 upload_files Join
        //이미지가 없다고 select되지 않으면 안되기때문에 leftJoin
        $drama = DB::table('dramas')
                  ->leftjoin('upload_files',function ($join){
                      $join->on('dramas.drama_no','=','upload_files.serial_no')
                           ->where([
                            ['upload_files.table_type','=','dramas'],
                            ['upload_files.use_type','=','title'],
                          ]);
                  })->where('production_no',$user_no)->orderBy('drama_no','desc')->get();

                  // var_dump($drama);exit;

        $equipment = DB::table('production_equipments')
                     ->leftjoin('upload_files',function ($join){
                        $join->on('production_equipments.equipment_no','=','upload_files.serial_no')
                            ->where([
                              ['upload_files.table_type','=','production_equipments'],
                              ['upload_files.use_type','=','title'],
                            ]);
                    })->where('production_no',$user_no)->orderBy('equipment_no')->paginate(12);

                    // var_dump($equipment);exit;

        // $equipment = DB::table('production_equipments')->where('production_no',$user_no)->get();
        // $employee = DB::table('v_production_employees')->where('production_no',$user_no)->get();

        $employee = DB::table('v_production_employees')
                     ->join('users','users.user_no','v_production_employees.user_no')
                     ->leftjoin('upload_files',function ($join){
                        $join->on('v_production_employees.user_no','=','upload_files.serial_no')
                            ->where([
                              ['upload_files.table_type','=','users'],
                              ['upload_files.use_type','=','profile'],
                            ]);
                    })->where('production_no',$user_no)->get();

        // 제작중인 드라마, 직원수, 장비 count
        $drama_cnt = DB::table('dramas')
                     ->where('production_no',$user_no)
                     ->where('drama_status','제작중')
                     ->count();
        $equipment_cnt = DB::table('production_equipments')
                        ->where('production_no',$user_no)
                        ->count();
        $employee_cnt = DB::table('production_employees')
                        ->where('production_no',$user_no)
                        ->count();
                  // var_dump($drama_cnt);
        return view('production.production',[
          'dramas'=>$drama,
          'production_equipments'=>$equipment,
          'production_employees'=>$employee,
          'drama_cnt'=>$drama_cnt,
          'equipment_cnt'=>$equipment_cnt,
          'employee_cnt'=>$employee_cnt,
        ]);

      }else{    //유저가 제작사가 아닐경우

        //dramas 와 upload_files Join
        //이미지가 없다고 select되지 않으면 안되기때문에 leftJoin
        $production_no = DB::table('production_employees')
                         ->where('user_no', $user_no)
                         ->value('production_no');

        $drama = DB::table('dramas')
                  ->join('drama_employees','drama_employees.drama_no','=','dramas.drama_no')
                  ->leftjoin('upload_files',function ($join){
                      $join->on('dramas.drama_no','=','upload_files.serial_no')
                           ->where([
                            ['upload_files.table_type','=','dramas'],
                            ['upload_files.use_type','=','title'],
                          ]);
                  })->where('drama_employees.user_no',$user_no)->orderBy('dramas.drama_no')->get();

                  // var_dump($drama);exit;

        $equipment = DB::table('production_equipments')
                     ->leftjoin('upload_files',function ($join){
                        $join->on('production_equipments.equipment_no','=','upload_files.serial_no')
                            ->where([
                              ['upload_files.table_type','=','production_equipments'],
                              ['upload_files.use_type','=','title'],
                            ]);
                    })->orderBy('equipment_no')->get();

                    // var_dump($equipment);exit;

        // $equipment = DB::table('production_equipments')->where('production_no',$user_no)->get();
        // $employee = DB::table('v_production_employees')->where('production_no',$user_no)->get();

        $employee = DB::table('v_production_employees')
                     ->join('users','users.user_no','v_production_employees.user_no')
                     ->leftjoin('upload_files',function ($join){
                        $join->on('v_production_employees.user_no','=','upload_files.serial_no')
                            ->where([
                              ['upload_files.table_type','=','users'],
                              ['upload_files.use_type','=','profile'],
                            ]);
                    })->where('production_no',$production_no)->get();


        return view('production.production',[
          'dramas'=>$drama,
          'production_equipments'=>$equipment,
          'production_employees'=>$employee,
        ]);


        return "미구현";

      }
    }

    public function drama_view($drama_no)
    {

      $drama = DB::table('dramas')
                  ->leftjoin('upload_files',function ($join){
                     $join->on('dramas.drama_no','=','upload_files.serial_no')
                         ->where([
                           ['upload_files.table_type','=','dramas'],
                           ['upload_files.use_type','=','title'],
                         ]);
                 })->where('drama_no',$drama_no)->get();

       $producers = DB::table('drama_employees')
                ->join('positions','positions.position_no','drama_employees.position_no')
                ->leftjoin('upload_files',function ($join){
                  $join->on('drama_employees.user_no','=','upload_files.serial_no')
                        ->where([
                                ['upload_files.table_type','=','users'],
                                ['upload_files.use_type','=','profile'],
                              ]);
                          })->where('drama_no',$drama_no)->where('drama_employees.position_no',3000)->get();

        $writer = DB::table('drama_employees')
                    ->join('positions','positions.position_no','drama_employees.position_no')
                    ->leftjoin('upload_files',function ($join){
                      $join->on('drama_employees.user_no','=','upload_files.serial_no')
                       ->where([
                                ['upload_files.table_type','=','users'],
                                ['upload_files.use_type','=','profile'],
                              ]);
                      })->where('drama_no',$drama_no)->where('drama_employees.position_no',1040)->get();

        $actor = DB::table('drama_employees')
                  ->join('positions','positions.position_no','drama_employees.position_no')
                  ->leftjoin('upload_files',function ($join){
                  $join->on('drama_employees.user_no','=','upload_files.serial_no')
                  ->where([
                            ['upload_files.table_type','=','users'],
                            ['upload_files.use_type','=','profile'],
                          ]);
                        })->where('drama_no',$drama_no)->where('drama_employees.position_no',2000)->get();

                          // var_dump($drama_staff);exit;

      $production_no =  $drama[0]->production_no;
      $production_name = DB::table('users')->where('user_no',$production_no)->value('name');

      $script_no = DB::table('scripts')->where('drama_no',$drama_no)->value('script_no');

    //전체 씬 개수
      $scene_all_count = DB::table('scenes')->where('script_no',$script_no)->count();
      //완료 된 씬
      $scene_complete_count = DB::table('scenes')->where([
        ['script_no',$script_no],
        ['status',1]
        ])->count();

      return view('production.production_drama_view',[
        'drama'=>$drama,
        'script_no'=>$script_no,
        'scene_all_count'=>$scene_all_count,
        'scene_complete_count'=>$scene_complete_count,
        'production_name'=>$production_name,
        'producers'=>$producers,
        'writers'=>$writer,
        'actors'=>$actor,
      ]);
    }


    //작품 등록시 스태프 추가에 필요한 스태프 목록, 팀 목록
    public function drama_write_employee(){
    $user_no = Auth::user()->user_no;

      $employee = DB::table('production_employees')
                  ->join('users', 'users.user_no', '=', 'production_employees.user_no')
                  ->join('positions', 'positions.position_no', '=', 'production_employees.position_no')
                  ->where('production_employees.production_no', $user_no)
                  ->orderBy('users.name')
                  ->get();
      $team_type = DB::table('teams')->get();
      // var_dump($team_type); exit;
      return view('production.production_drama_write', [
        'employees' => $employee,
        'team_types' => $team_type
      ]);
    }

    public function drama_write(Request $request){
            // dd($request);exit;
            $user_no = Auth::user()->user_no;
            $drama = new Drama([
              'production_no' => $user_no,
              'drama_name'=> $request->get('drama_name'),
              'genre'=> $request->get('genre'),
              'story'=> $request->get('story'),
              'drama_status'=> '제작중'
            ]);

            $drama->save();

            //금방 삽입된 drama의 drama_no를 가져오기 위함
            $drama_no = DB::table('dramas')->max('drama_no');
            $file = $request->file('image');

            if($file == null){
              $upload_file = new Upload_File([
                'table_type' => 'dramas',
                'serial_no' => $drama_no,
                'use_type' => 'title',
                'sequence' => 1,
                'original_name' => '',
                'save_name' => '',
                'path' => 'image/drama/',
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
            $save_name = "dramas_title_".$drama_no.".".$extension;
            //파일 업로드  storage/app/images/drama
            $path = $request->file('image')->storeAs('image/drama',$save_name);


            $upload_file = new Upload_File([
              'table_type' => 'dramas',
              'serial_no' => $drama_no,
              'use_type' => 'title',
              'sequence' => 1,
              'original_name' => $original_name,
              'save_name' => $save_name,
              'path' => 'image/drama/',
              'type' => $extension,
            ]);

            $upload_file->save();
            // dd($request);exit;
            $team_type = $request->get('team_type');
            $employee = $request->get('employee');
            $team_type_cnt = count($team_type);
            $drama_no = DB::table('dramas')->max('drama_no');
            // var_dump($employee[1]);exit;
            for($i=0; $i<=$team_type_cnt-1; $i++){


            // $team_no = $request->get('team_type');
            // $employee_no = $request->get('employee');
            $position_no = DB::table('production_employees')
                          ->join('users', 'users.user_no', '=', 'production_employees.user_no')
                          ->join('positions', 'positions.position_no', '=', 'production_employees.position_no')
                          ->where('users.user_no',$employee[$i])
                          ->value('positions.position_no');

            $drama_employee = new Drama_Employee([
              'drama_no' => $drama_no,
              'sequence' => $i+1,
              'team_no' => $team_type[$i],
              'user_no' => $employee[$i],
              'position_no' => $position_no
            ]);
            // var_dump($employee_no);exit;
            $drama_employee->save();
          }
        }
          return redirect()->route('production_main');
      }

    public function production_equipment_write_category(){
      $equipment_category = DB::table('category_equipments')->get();

      return view('production.production_equipment_write',[
        'equipment_categorys'=>$equipment_category
      ]);
    }

    public function production_equipment_write(Request $request){
      $user = Auth::user();
    $user_no= $user->user_no;

    $production_equipment = new Production_Equipment([
      'production_no' => $user_no,
      'equipment_name'=> $request->get('equipment_name'),
      'category_no'=> $request->get('category_no'),
      'sequence'=> $request->get('sequence'),
      'equipment_status'=> $request->get('equipment_status')
    ]);

    $production_equipment->save();

    //금방 삽입된 drama의 drama_no를 가져오기 위함
    $equipment_no = DB::table('production_equipments')->max('equipment_no');
    $file = $request->file('image');

    if($file == null){
      $upload_file = new Upload_File([
        'table_type' => 'production_equipment',
        'serial_no' => $equipment_no,
        'use_type' => 'title',
        'sequence' => 1,
        'original_name' => '',
        'save_name' => '',
        'path' => '/images/resource',
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
    $save_name = "production_equipment_title_".$equipment_no.".".$extension;
    //파일 업로드  storage/app/images/drama
    $path = $request->file('image')->storeAs('images/resource',$save_name);


    $upload_file = new Upload_File([
      'table_type' => 'production_equipment',
      'serial_no' => $equipment_no,
      'use_type' => 'title',
      'sequence' => 1,
      'original_name' => $original_name,
      'save_name' => $save_name,
      'path' => '/images/resource',
      'type' => $extension,
    ]);

    $upload_file->save();

    return redirect()->route('production_main');
    }
  }

    public function production_equipment_get($equipment_no){
      $equipment = DB::table('production_equipments')
                  ->leftjoin('upload_files',function ($join){
                      $join->on('production_equipments.equipment_no','=','upload_files.serial_no')
                      ->where([
                      ['upload_files.table_type','=','product_equipment'],
                      ['upload_files.use_type','=','title'],
                    ]);
                  })->where('equipment_no', $equipment_no)->get();
      return $equipment;

    }

    public function production_employee_get($user_no){
      $employee = DB::table('v_production_employees')
                  ->join('users','users.user_no','=','v_production_employees.user_no')
                  ->leftjoin('upload_files',function ($join){
                      $join->on('v_production_employees.user_no','=','upload_files.serial_no')
                      ->where([
                      ['upload_files.table_type','=','users'],
                      ['upload_files.use_type','=','profile'],
                    ]);
                  })->where('v_production_employees.user_no', $user_no)->get();
      return $employee;

    }

    public function drama_employee_all_get($drama_no){
      $staff = DB::table('drama_employees')
      ->join('users','users.user_no','=','drama_employees.user_no')
      ->join('positions', 'positions.position_no','=','drama_employees.position_no')
      ->where('drama_employees.drama_no',$drama_no)
      ->get();
      return json_encode($staff);
    }



public function recruit_apply_choose($apply_no){
    //채택
    $apply_choose = DB::table('recruit_applys')
                    ->where('apply_no',$apply_no)
                    ->update(['recruit_status' => 1]);

    //채택 후 모든 상태가 미채택으로 바뀜(버리기 제외)
    $apply_choose_1 = DB::table('recruit_applys')
                    ->where('apply_no','<>',$apply_no)
                    ->where('recruit_status','<>',3)
                    ->update(['recruit_status' => 2]);

  return $apply_choose_1;
}

public function recruit_apply_cancel($apply_no){
  $apply_cancel = DB::table('recruit_applys')
                  ->where('apply_no',$apply_no)
                  ->update(['recruit_status' => 3]);
  return $apply_cancel;

}




// ================================== drama ==========================================


//대본
public function drama_script_list($script_no){




  $scenes = DB::table('scenes')->where('script_no', $script_no)->get();

  $characters = DB::table('characters')
                  ->select('characters.user_no','characters.character_name','characters.name',
                  'characters.introduce','upload_files.path','upload_files.save_name','drama_employees.position_no')
                  ->join('drama_employees','characters.user_no','=','drama_employees.user_no')
                  ->join('users','characters.user_no','=','users.user_no')
                  ->join('upload_files',function ($join){
                     $join->on('characters.user_no','=','upload_files.serial_no')
                         ->where([
                           ['upload_files.table_type','=','users'],
                           ['upload_files.use_type','=','profile'],
                         ]);
                  })->where('script_no', $script_no)->get();

  // $actor_list = DB::table('users')
  // ->join('drama_employees', 'users.user_no', '=', 'drama_employees.user_no')->
  // select('users.name')->where('drama_employees.drama_no', $script_no)->get();
  $drama_no = DB::table('scripts')
                  ->where('script_no',$script_no)
                  ->value('drama_no');

  $actor_lists = DB::table('users')
                    ->join('drama_employees', 'users.user_no', '=', 'drama_employees.user_no')
                    ->join('upload_files',function ($join){
                       $join->on('drama_employees.user_no','=','upload_files.serial_no')
                           ->where([
                             ['upload_files.table_type','=','users'],
                             ['upload_files.use_type','=','profile'],
                           ]);
                    })->where('drama_employees.drama_no', $drama_no)
                    ->whereIn('position_no',[2000,2001,2002])
                    ->get();



  $target_scenes = DB::select('select * from scenes where script_no = :script_no', ['script_no' => $script_no]);
  $target_continuitys = DB::select('select * from continuitys where script_no = :script_no', ['script_no' => $script_no]);
  $target_cameras = DB::select('select * from cameras where script_no = :script_no', ['script_no' => $script_no]);
  $target_character_scripts = DB::select('select * from character_scripts where script_no = :script_no', ['script_no' => $script_no]);
  $last_script_count = DB::table('scenes')->where('script_no', $script_no)->max('scene_no');

  $target_pre_character_scripts = DB::select('select * from pre_character_scripts where script_no = :script_no', ['script_no' => $script_no]);

  return view('production.script_list', [
    'scenes'=>$scenes,
    'script_no'=>$script_no,
    'characters'=>$characters,
    'actor_lists'=> $actor_lists,
    'target_scenes'=>$target_scenes,
    'target_continuitys'=>$target_continuitys,
    'target_cameras'=>$target_cameras,
    'target_character_scripts'=>$target_character_scripts,
    'last_script_count'=>$last_script_count,
    'target_pre_character_scripts'=>$target_pre_character_scripts
  ]);

}

public function drama_character_add(Request $request, $script_no){

  $character_count = $request->input('characterCount');

  for($i = 0 ; $i < $character_count ; $i++){

    $name = $request->input('actor'.$i);
    $user_no = DB::select('select users.user_no from users, drama_employees where users.user_no = drama_employees.user_no and drama_employees.drama_no = :script_no and users.name = :name', ['name'=>$name, 'script_no'=>$script_no])[0]->user_no;
    $sequence = DB::select('select max(sequence) as sequence from characters where script_no = :script_no', ['script_no' => $script_no])[0]->sequence
    ? DB::select('select max(sequence)+1 as sequence from characters where script_no = :script_no', ['script_no' => $script_no])[0]->sequence : 1;

    DB::table('characters')->insert(
      array(
        "script_no"=> $script_no,
        "sequence"=> $sequence,
        "character_name"=> $request->input('character'.$i) ? $request->input('character'.$i) : "",
        "user_no"=> $user_no,
        "name"=> $name,
        "introduce"=> $request->input('introduce'.$i)
      )
    );

  }

  return back();

}

public function drama_script_delete($script_no, $scene_no){

  //삭제시키기 위한 함수..

  $conti = DB::table('continuitys')->where('script_no', $script_no)->where('scene_no', $scene_no)->get();

  if($conti){
    foreach ($conti as $conti){
      unlink(".".$conti->path.$conti->save_name);
    }
  }

  $characters = DB::table('characters')->where('script_no', $script_no)->get();
  $scenes = DB::table('scenes')->where('script_no', $script_no)->get();
  DB::table('cameras')->where('script_no', '=', $script_no)->where('scene_no', '=', $scene_no)->delete();
  DB::table('character_scripts')->where('script_no', '=', $script_no)->where('scene_no', '=', $scene_no)->delete();
  DB::table('pre_character_scripts')->where('script_no', '=', $script_no)->where('scene_no', '=', $scene_no)->delete();
  DB::table('continuitys')->where('script_no', '=', $script_no)->where('scene_no', '=', $scene_no)->delete();
  DB::table('scenes')->where('script_no', '=', $script_no)->where('scene_no', '=', $scene_no)->delete();

  return redirect("/script_list". "/" . $script_no);
}


public function drama_script_update_set(Request $request, $script_no, $scene_no){


  $drama_no = DB::table('scripts')
              ->where('script_no',$script_no)->value('drama_no');

  // 업데이트를 시키기 위한 액션(함수)..
  $scene = Scene::where('script_no', $script_no)
  ->where('scene_no', $scene_no)->get();

  Scene::where('script_no', $script_no)
  ->where('scene_no', $scene_no)->update(['scene_no'=> $request->input('scene_no'),'location'=> $request->input('location'), 'scene_summary'=> $request->input('scene_summary')]);

  DB::table('continuitys')->where('script_no', $script_no)
  ->where('scene_no', $scene_no)->update(['scene_no'=> $request->input('scene_no')]);

  $pre_character_scripts = DB::table('character_scripts')->where('script_no', '=', $script_no)->where('scene_no', '=', $scene_no)->get();

  DB::table('pre_character_scripts')->where('script_no', '=', $script_no)->where('scene_no', '=', $scene_no)->delete();

  foreach ($pre_character_scripts as $pre_character_script) {
  //기존에 있는 스크립트를 pre_character_scripts로 옮긴다.
      DB::table('pre_character_scripts')->insert(
        array(
          "script_no"=> $pre_character_script->script_no,
          "scene_no"=> $pre_character_script->scene_no,
          "sequence"=> $pre_character_script->sequence,
          "character_name"=> $pre_character_script->character_name,
          "user_no"=> $pre_character_script->user_no,
          "name"=> $pre_character_script->name,
          "script" => $pre_character_script->script,
        )
      );

  }

  //기존데이터 삭제
  DB::table('cameras')->where('script_no', '=', $script_no)->where('scene_no', '=', $scene_no)->delete();
  DB::table('character_scripts')->where('script_no', '=', $script_no)->where('scene_no', '=', $scene_no)->delete();

  $angle_count = $request->input('angle_count');
  $scene_no = $request->input('scene_no');
  $characters = explode( "division,", $request->input('character_package') );
  $scripts = explode( "division,", $request->input('script_package') );

  $script_count = count($characters);

  for($i = 0 ; $i < $angle_count+1 ; $i++){

    if( $request->input('angle'.$i) ){

      $sequence =  DB::select('select max(sequence) as sequence from cameras where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no])[0]->sequence
      ? DB::select('select max(sequence)+1 as sequence from cameras where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no])[0]->sequence : 1;

      //앵글을 넣는 for문
      DB::table('cameras')->insert(
        array( "script_no"=>$script_no, "scene_no"=>$scene_no,
        "sequence"=>$sequence,
        "content" => $request->input('angle'.$i) ? $request->input('angle'.$i) : ""
        )
      );
    }

  }

  // for($i = 0 ; $i <= $script_count ; $i++){
  //
  //   $sequence =  DB::select('select max(sequence) as sequence from character_scripts where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no])[0]->sequence
  //   ? DB::select('select max(sequence)+1 as sequence from character_scripts where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no])[0]->sequence : 1;
  //   $user_no = ( DB::table('characters')->where('character_name', $request->input('character'.$i))->value('user_no') ) ? DB::table('characters')->where('character_name', $request->input('character'.$i))->value('user_no') : 0;
  //   $user_name = ( DB::table('characters')->where('character_name', $request->input('character'.$i))->value('name') ) ? DB::table('characters')->where('character_name', $request->input('character'.$i))->value('name') : "";
  //
  // //script를 넣는 for문
  //   DB::table('character_scripts')->insert(
  //     array(
  //       "script_no"=>$script_no,
  //       "scene_no"=>$scene_no,
  //       "sequence"=>$sequence,
  //       "character_name"=>$request->input('character'.$i) ? $request->input('character'.$i) : "",
  //       "user_no"=> $user_no,
  //       "name"=>$user_name,
  //       "script" => $request->input('script'.$i),
  //     )
  //   );
  // }

  for($i = 0 ; $i < $script_count ; $i++){

    $sequence =  DB::select('select max(sequence) as sequence from character_scripts where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no])[0]->sequence
    ? DB::select('select max(sequence)+1 as sequence from character_scripts where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no])[0]->sequence : 1;
    $user_no = DB::table('characters')->where('character_name', $characters[$i] )->value('user_no');
    $user_name = DB::table('characters')->where('character_name', $characters[$i] )->value('name');
  //script를 넣는 for문
    DB::table('character_scripts')->insert(
      array(
        "script_no"=>$script_no,
        "scene_no"=>$scene_no,
        "sequence"=>$sequence,
        "character_name"=> ($characters[$i] !='notValue') ? $characters[$i] : "",
        "user_no"=> ($user_no) ? ($user_no):0,
        "name"=>($user_name)?($user_name):0,
        "script" => ($scripts[$i]!='notValue') ? $scripts[$i] : "",
      )
    );
  }


  $_tmp = explode(";base64,", $request->input('conti'));

  //콘티가 있을경우 실행
  if(count($_tmp) == 2) {

    $conti = DB::table('continuitys')->where('script_no', $script_no)->where('scene_no', $scene_no)->get();


    if($conti){
      foreach ($conti as $conti){
        unlink(".".$conti->path.$conti->save_name);
      }
    }
    DB::table('continuitys')->where('script_no', '=', $script_no)->where('scene_no', '=', $scene_no)->delete();

    $filename = "conti" . $script_no ."_". $scene_no . ".png";
    $imageData = base64_decode($_tmp[1]);
    $fp = fopen("./images/conti/".$filename, "wb");

    //file이 있을 때
    if($fp) {
      fwrite($fp, $imageData);
      fclose($fp);
      $sequence =  DB::select('select max(sequence) as sequence from continuitys')[0]->sequence
      ? DB::select('select max(sequence)+1 as sequence from continuitys')[0]->sequence : 1;

      DB::table('continuitys')->insert(
        array(
          'script_no'=>$script_no,
          'scene_no'=>$scene_no,
          'sequence'=>$sequence,
          'original_name'=>"",
          'save_name'=>$filename,
          'path'=>"/images/conti/",
          'content'=>"",
        )
      );


    }else{
      //file 없을때
    } //end file if

  }//end conti if

  //알람등록

  $drama_employees = DB::table('drama_employees')
                      ->where('drama_no',$drama_no)
                      ->get();

  $drama_info = DB::table('dramas')
                  ->join('users','users.user_no','=','dramas.production_no')
                  ->where('drama_no',$drama_no)
                  ->get();

  $scene_info = DB::table('scenes')
                  ->where([
                    ['script_no',$script_no],
                    ['scene_no',$scene_no]
                  ])->get();

  foreach($drama_employees as $employee){

    $notice = new Timeline([
      'sender' => (int)$drama_info[0]->user_no,
      'receiver' => (int)$employee->user_no,
      'time' => $scene_info[0]->created_at,
      'notice_type'=> '알림',
      'table_type'=> 'scenes',
      'serial_no'=> (int)$script_no,
      'url'=>'script_list/',
      'notice'=> $drama_info[0]->name.'のドラマ『'.$drama_info[0]->drama_name.'』の台本が修正されました。',
      'notice_status'=> 0,

    ]);
    //notice_status 0 => 확인전, 1 => 확인
    $notice->save();

  }

  $modify_created_at = DB::table('timelines')
                          ->where([
                            ['sender','=',$drama_info[0]->user_no],
                            ['time','=',$scene_info[0]->created_at],
                            ['table_type','=','scenes'],
                          ])->max('created_at');

  $notices = DB::table('timelines')
              ->leftjoin('fcm_tokens','fcm_tokens.user_no','=','timelines.receiver')
              ->where([
                  ['sender',$drama_info[0]->user_no],
                  ['created_at',$modify_created_at],
                  ['table_type','scenes']
                ])->get();

  // $notices = DB::table('timelines')
  //             ->where([
  //                 ['sender',$drama_info[0]->user_no],
  //                 ['time',$scene_info[0]->created_at],
  //                 ['table_type','scenes']
  //               ])->get();

  return $notices;
  // return redirect("/script_list". "/" . $script_no);
}

public function drama_script_update($script_no, $scene_no){

  // 업데이트를 시켜주기위한 페이지로 이동하는 액션(함수)..
  $scenes = DB::select('select * from scenes where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no]);
  $continuitys = DB::select('select * from continuitys where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no]);
  $cameras = DB::select('select * from cameras where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no]);
  $character_scripts = DB::select('select * from character_scripts where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no]);
  $script_count = DB::table('character_scripts')->where('script_no', $script_no)->where('scene_no', $scene_no)->max('sequence');
  $angle_count = DB::table('cameras')->where('script_no', $script_no)->where('scene_no', $scene_no)->max('sequence');
  $characters = DB::table('characters')->where('script_no', $script_no)->get();

  return view('production.script_list_update', ['scenes'=>$scenes, 'continuitys'=>$continuitys, 'cameras'=>$cameras, 'character_scripts'=>$character_scripts, 'script_no'=>$script_no, 'characters'=>$characters, 'script_count'=>$script_count, 'angle_count'=>$angle_count]);

}

public function drama_script_add(Request $request, $script_no){

  $characters = explode( "division,", $request->input('character_package') );
  $scripts = explode( "division,", $request->input('script_package') );

  $script_count = count($characters);
  $angle_count = $request->input('angle_count');
  $scene_no = $request->input('scene_no');
  $drama_no = DB::table('scripts')
              ->where('script_no',$script_no)->value('drama_no');



  // 만약 입력한 씬 번호가 이미 존재하는 경우, 이미 존재하는 씬과 그 이후의 씬들의 씬번호를 모두 1씩 증가 시킨다.
  $scenes = DB::select('select * from scenes where script_no = :script_no and scene_no >= :scene_no order by scene_no desc', ['script_no' => $script_no, 'scene_no'=>$scene_no]);
  foreach ($scenes as $scene) {

    //continuitys scene_no 바꾸기
    $continuitys = DB::select('select * from continuitys where script_no = :script_no and scene_no = :scene_no order by scene_no desc', ['script_no' => $script_no, 'scene_no'=>$scene->scene_no]);

      foreach ($continuitys as $continuity) {

        //삭제
        DB::table('continuitys')
            ->where('script_no',$scene->script_no)->where('scene_no', $scene->scene_no)
            ->delete();

        if($continuity->scene_no){
          copy(".".$continuity->path.$continuity->save_name, ".".$continuity->path.($continuity->save_name)+1);
          unlink(".".$continuity->path.$continuity->save_name);
        }
      }


    //cameras scene_no 바꾸기
    $cameras = DB::select('select * from cameras where script_no = :script_no and scene_no = :scene_no order by scene_no desc', ['script_no' => $script_no, 'scene_no'=>$scene->scene_no]);
    // 삭제
    DB::table('cameras')
        ->where('script_no',$scene->script_no)->where('scene_no', $scene->scene_no)
        ->delete();

    //character_scripts scene_no 바꾸기
    $character_scripts = DB::select('select * from character_scripts where script_no = :script_no and scene_no = :scene_no order by scene_no desc', ['script_no' => $script_no, 'scene_no'=>$scene->scene_no]);

    // 삭제
    DB::table('character_scripts')
        ->where('script_no',$scene->script_no)->where('scene_no', $scene->scene_no)
        ->delete();


    DB::table('scenes')
      ->where('script_no', $scene->script_no )->where('scene_no', $scene->scene_no )
      ->update([
        'scene_no' => ($scene->scene_no)+1,
      ]);

      foreach ($continuitys as $continuity) {
        if($continuity->save_name){
          //삽입
          DB::table('continuitys')->insert(
            array( 'script_no'=>$continuity->script_no,
            'scene_no'=> ($continuity->scene_no)+1,
            'sequence'=>$continuity->sequence,
            'original_name'=>$continuity->original_name,
            'save_name'=> $continuity->save_name,
            'path'=>$continuity->path,
            'content'=>$continuity->content, )
          );
        }
      }

      foreach ($cameras as $camera) {
        # code...
        // 삽입
        DB::table('cameras')->insert(
          array( "script_no"=> $camera->script_no,
          "scene_no"=> ($camera->scene_no)+1,
          "sequence"=> $camera->sequence,
          "content" => $camera->content  )
        );
      }

      foreach ($character_scripts as $character_script) {
        # code...
        // 삽입
        DB::table('character_scripts')->insert(
          array( "script_no"=> $character_script->script_no,
          "scene_no"=> ($character_script->scene_no)+1,
          "sequence"=> $character_script->sequence,
          "character_name"=> $character_script->character_name,
          "user_no"=> $character_script->user_no,
          "name"=> $character_script->name,
          "script" => $character_script->script  )
        );
      }

  }
  // 만약 입력한 씬 번호가 이미 존재하는 경우, 이미 존재하는 씬과 그 이후의 씬들의 씬번호를 모두 1씩 증가 시킨다. [end]


  $scenes = new Scene([
    "script_no"=>$script_no,
    "scene_no"=>$scene_no,
    "location"=>$request->input("location"),
    "scene_summary"=>$request->input("scene_summary"),
    "status"=>0,
  ]);

  $scenes->save();

  for($i = 0 ; $i <= $angle_count ; $i++){

    $sequence =  DB::select('select max(sequence) as sequence from cameras where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no])[0]->sequence
    ? DB::select('select max(sequence)+1 as sequence from cameras where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no])[0]->sequence : 1;

  //앵글을 넣는 for문
    DB::table('cameras')->insert(
      array( "script_no"=>$script_no, "scene_no"=>$scene_no,
      "sequence"=>$sequence, "content" => $request->input('angle'.$i)?$request->input('angle'.$i):"" )
    );
  }

  for($i = 0 ; $i < $script_count ; $i++){

    $sequence =  DB::select('select max(sequence) as sequence from character_scripts where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no])[0]->sequence
    ? DB::select('select max(sequence)+1 as sequence from character_scripts where script_no = :script_no and scene_no = :scene_no', ['script_no' => $script_no, 'scene_no'=>$scene_no])[0]->sequence : 1;
    $user_no = DB::table('characters')->where('character_name', $characters[$i] )->value('user_no');
    $user_name = DB::table('characters')->where('character_name', $characters[$i] )->value('name');

  //script를 넣는 for문
    DB::table('character_scripts')->insert(
      array(
        "script_no"=>$script_no,
        "scene_no"=>$scene_no,
        "sequence"=>$sequence,
        "character_name"=> ($characters[$i] !='notValue') ? $characters[$i] : "",
        "user_no"=> ($user_no) ? ($user_no):0,
        "name"=>($user_name)?($user_name):0,
        "script" => ($scripts[$i]!='notValue') ? $scripts[$i] : "",

        //여기도 유저 넘버랑 이름 입력해주어야한다.
      )
    );
  }


  $_tmp = explode(";base64,", $request->input('conti'));

  if(count($_tmp) == 2) {

    $filename = "conti" . $script_no ."_". $scene_no . ".png";
    $imageData = base64_decode($_tmp[1]);
    $fp = fopen("./images/conti/".$filename, "wb");
    if($fp) {
      fwrite($fp, $imageData);
      fclose($fp);
      $sequence =  DB::select('select max(sequence) as sequence from continuitys')[0]->sequence
      ? DB::select('select max(sequence)+1 as sequence from continuitys')[0]->sequence : 1;

      DB::table('continuitys')->insert(
        array(
          'script_no'=>$script_no,
          'scene_no'=>$scene_no,
          'sequence'=>$sequence,
          'original_name'=>"",
          'save_name'=>$filename,
          'path'=>"/images/conti/",
          'content'=>"",
        )
      );
    }

  }


//알람등록

$drama_employees = DB::table('drama_employees')
                    ->where('drama_no',$drama_no)
                    ->get();

$drama_info = DB::table('dramas')
                ->join('users','users.user_no','=','dramas.production_no')
                ->where('drama_no',$drama_no)
                ->get();

$scene_info = DB::table('scenes')
                ->where([
                  ['script_no',$script_no],
                  ['scene_no',$scene_no]
                ])->get();

foreach($drama_employees as $employee){

  $notice = new Timeline([
    'sender' => (int)$drama_info[0]->user_no,
    'receiver' => (int)$employee->user_no,
    'time' => $scene_info[0]->created_at,
    'notice_type'=> '알림',
    'table_type'=> 'scenes',
    'serial_no'=> (int)$script_no,
    'url'=>'script_list/',
    'notice'=> $drama_info[0]->name.'のドラマ『'.$drama_info[0]->drama_name.'』に新しい台本が登録されました。',
    'notice_status'=> 0,

  ]);
  //notice_status 0 => 확인전, 1 => 확인
  $notice->save();

}

$notices = DB::table('timelines')
            ->leftjoin('fcm_tokens','fcm_tokens.user_no','=','timelines.receiver')
            ->where([
                ['sender',$drama_info[0]->user_no],
                ['time',$scene_info[0]->created_at],
                ['table_type','scenes']
              ])->get();

// $notices = DB::table('timelines')
//             ->where([
//                 ['sender',$drama_info[0]->user_no],
//                 ['time',$scene_info[0]->created_at],
//                 ['table_type','scenes']
//               ])->get();

return $notices;



}

public function drama_script_view($search_type, $search_value, $script_no){

  //데이터 베이스 들고오기 ..

  //2017.06.16 새벽 작업..
  //like문을 사용해서 해당하는 scenes 가져오기 ..

  $drama_no = DB::table('scripts')->where('script_no',$script_no)->value('drama_no');
  $scenes = DB::table('scenes')->where('script_no', $script_no)->get();
  // $characters = DB::table('characters')->where('script_no', $script_no)->get();
  // $actor_list = DB::table('users')
  // ->join('drama_employees', 'users.user_no', '=', 'drama_employees.user_no')->
  // select('users.name')->where('drama_employees.drama_no', $script_no)->get();
  $characters = DB::table('characters')
                  ->select('characters.user_no','characters.character_name','characters.name',
                  'characters.introduce','upload_files.path','upload_files.save_name','drama_employees.position_no')
                  ->join('drama_employees','characters.user_no','=','drama_employees.user_no')
                  ->join('users','characters.user_no','=','users.user_no')
                  ->join('upload_files',function ($join){
                     $join->on('characters.user_no','=','upload_files.serial_no')
                         ->where([
                           ['upload_files.table_type','=','users'],
                           ['upload_files.use_type','=','profile'],
                         ]);
                  })->where('script_no', $script_no)->get();

  // $actor_list = DB::table('users')
  // ->join('drama_employees', 'users.user_no', '=', 'drama_employees.user_no')->
  // select('users.name')->where('drama_employees.drama_no', $script_no)->get();
  $drama_no = DB::table('scripts')
                  ->where('script_no',$script_no)
                  ->value('drama_no');

  $actor_lists = DB::table('users')
                    ->join('drama_employees', 'users.user_no', '=', 'drama_employees.user_no')
                    ->join('upload_files',function ($join){
                       $join->on('drama_employees.user_no','=','upload_files.serial_no')
                           ->where([
                             ['upload_files.table_type','=','users'],
                             ['upload_files.use_type','=','profile'],
                           ]);
                    })->where('drama_employees.drama_no', $drama_no)
                    ->whereIn('position_no',[2000,2001,2002])
                    ->get();

  $last_script_count = DB::table('scenes')->where('script_no', $script_no)->max('scene_no');


  if($search_type == "actor"){

    $target_scenes = DB::select('select * from scenes where script_no = :script_no and scene_no in (select distinct(scene_no) from character_scripts where script_no = 8 and name = :search_value)', ['script_no'=>$script_no, 'search_value'=>$search_value]);
    // dd($target_scenes);
  }else{

    if($search_type == "scene_no"){
      $target_scenes = DB::table('scenes')
                      ->where([
                          ['script_no', $script_no],
                          [$search_type,$search_value]
                        ])
                      ->get();

    }else{
      $target_scenes = DB::table('scenes')
                      ->where([
                          ['script_no', $script_no],
                          [$search_type, 'like', '%'.$search_value.'%'] ])
                      ->get();
    }

  }

  $target_continuitys = DB::select('select * from continuitys where script_no = :script_no', ['script_no' => $script_no]);
  $target_cameras = DB::select('select * from cameras where script_no = :script_no', ['script_no' => $script_no]);
  $target_character_scripts = DB::select('select * from character_scripts where script_no = :script_no', ['script_no' => $script_no]);

  $target_pre_character_scripts = DB::select('select * from pre_character_scripts where script_no = :script_no', ['script_no' => $script_no]);

  // return $target_scenes;
  // return view('production.test', ['target_scenes'=>$target_scenes]);



  return view('production.script_list', [
    'scenes'=>$scenes,
    'script_no'=>$script_no,
    'characters'=>$characters,
    'actor_lists'=> $actor_lists,
    'target_scenes'=>$target_scenes,
    'target_continuitys'=>$target_continuitys,
    'target_cameras'=>$target_cameras,
    'target_character_scripts'=>$target_character_scripts,
    'last_script_count'=>$last_script_count,
    'target_pre_character_scripts'=>$target_pre_character_scripts]);

//================================================================================================





}

public function drama_script_view_all($script_no){

  //데이터 베이스 들고오기 ..
  $scenes = DB::select('select * from scenes where script_no = :script_no', ['script_no' => $script_no]);
  $continuitys = DB::select('select * from continuitys where script_no = :script_no', ['script_no' => $script_no]);
  $cameras = DB::select('select * from cameras where script_no = :script_no', ['script_no' => $script_no]);
  $character_scripts = DB::select('select * from character_scripts where script_no = :script_no', ['script_no' => $script_no]);
  $drama = DB::select('select * from dramas where drama_no = :script_no', ['script_no' => $script_no]);
  $last_script_count = DB::table('scenes')->where('script_no', $script_no)->max('scene_no');

  // return $last_script_count;
  // return $drama;
  // return $character_scripts;
  // return $cameras;
  // return $continuitys;
  // return $scenes;
  return view('production.script_list_view_all', ['scenes'=>$scenes, 'continuitys'=>$continuitys, 'cameras'=>$cameras, 'character_scripts'=>$character_scripts, 'script_no'=>$script_no, 'drama'=>$drama, 'last_script_count'=>$last_script_count]);

}

// 대본 끝


    //========================= 스케줄 =========================

    public function schedule($drama_no){

      return view('production.schedule',[
        'drama_no'=>$drama_no,
      ]);
    }

    //스케줄에 표시하기 위한 schedule 정보 get
    public function schedule_get($drama_no){

      $schedule_get = DB::table('schedules')->where('drama_no',$drama_no)->get();

      return $schedule_get;

    }

    public function schedule_read($schedule_no){

      $schedule = DB::table('schedules')
                    ->where('schedule_no',$schedule_no)->get();

      //드라마 번호
      $drama_no = $schedule[0]->drama_no;
      //스케줄 전체 회차
      $schedule_number = DB::table('schedules')->where('drama_no',$drama_no)->max('number');
      //날짜
      $date = explode('-',$schedule[0]->date);
      //스케줄 지역
      $schedule_local = DB::table('schedules')
                          ->where([
                            ['drama_no','=',$drama_no],
                            ['date','=',$schedule[0]->date]
                          ])->value('local');
      //스케줄 날씨
      $schedule_weather = DB::table('weathers')
                            ->where([
                              ['date','=',$schedule[0]->date],
                              ['local','=',$schedule_local]
                            ])->get();

      $director = DB::table('drama_employees')
                      ->join('users','users.user_no','=','drama_employees.user_no')
                      ->where([
                          ['drama_no',$drama_no],
                          ['position_no',3000],
                      ])->select('name','users.user_no')->get();

      $author = DB::table('drama_employees')
                      ->join('users','users.user_no','=','drama_employees.user_no')
                      ->where([
                          ['drama_no',$drama_no],
                          ['position_no',1040],
                      ])->select('name','users.user_no')->get();

      $schedule_summary = DB::table('schedule_summarys')
                    ->where('schedule_no',$schedule_no)->get();

      $meettings = DB::table('meettings')
                    ->join('teams','meettings.team_no','=','teams.team_no')
                    ->where('schedule_no',$schedule_no)->get();

      //meetting 가공

      $meetting_arr = array();
      $meetting_team = array();
      $test_array1 = array();
      $test_array2 = array();
      $test_array3 = array();

      foreach($meettings as $meetting){


        $meetting_sequence = $meetting->sequence;

        $team_info = array();
        $team_info['team_no'] = $meetting->team_no;
        $team_info['team_type'] = $meetting->team_type;

        array_push(${"test_array".$meetting_sequence},$team_info);

        $meetting_team = ${"test_array".$meetting_sequence};


        $meetting_info = ["time"=>$meetting->time , "content"=>$meetting->content , "team"=>$meetting_team];

        $meetting_arr[$meetting_sequence-1] = $meetting_info;

      }

      // dd($meetting_arr);
      //1번부터 10번팀까지 돌며 배열에 넣음

      $team_schedules = [];

      for($i = 1 ; $i <= 10 ; $i++){

        // $team_type = DB::table('teams')
        //                   ->where('team_no',$i)->value('team_type');

        $team_schedule = array(
            'team_type' => DB::table('teams')
                              ->where('team_no',$i)->value('team_type'),
            'schedule' => DB::table('team_schedules')
                              ->join('teams','teams.team_no','=','team_schedules.team_no')
                              ->where([
                                ['schedule_no',$schedule_no],
                                ['team_schedules.team_no',$i]
                                ])->orderBy('team_schedules.team_no')->get(),
        );


        array_push($team_schedules,$team_schedule);

      }

      // for($i = 1 ; $i <= 10 ; $i++){
      //
      //   $team_schedules[] = DB::table('team_schedules')
      //                 ->join('teams','teams.team_no','=','team_schedules.team_no')
      //                 ->where([
      //                   ['schedule_no',$schedule_no],
      //                   ['team_schedules.team_no',$i]
      //                   ])->orderBy('team_schedules.team_no')->get();
      //
      //
      // }
      //
      // $team_type[] = DB::table('teams')
      //                 ->orderBy('team_no')->get();


      // dd($team_schedules);

      return view('production.schedule_read',[
        'schedule_number'=>$schedule_number,
        'date'=>$date,
        'schedule'=>$schedule,
        'weather'=>$schedule_weather,
        'director'=>$director,
        'author'=>$author,
        'schedule_summary'=>$schedule_summary,
        'meetting'=>$meetting_arr,
        'team_schedules'=>$team_schedules,
      ]);


    }

    public function schedule_write($drama_no,$date){

      $scene_array = array();    //커스텀한 scene객체 담을 배열

      $default_date = $date;  //기존 형식  schedule write에서  db에 넣기위함
      $date = explode('-',$date);

      $schedule_sequence = DB::table('schedules')->where('drama_no',$drama_no)->count();


      $script_no = DB::table('scripts')->where('drama_no',$drama_no)->value('script_no');
      $scenes = DB::table('scenes')->where('script_no',$script_no)->get();

      $director = DB::table('drama_employees')
                      ->join('users','users.user_no','=','drama_employees.user_no')
                      ->where([
                          ['drama_no',$drama_no],
                          ['position_no',3000],
                      ])->select('name','users.user_no')->get();

      $author = DB::table('drama_employees')
                      ->join('users','users.user_no','=','drama_employees.user_no')
                      ->where([
                          ['drama_no',$drama_no],
                          ['position_no',1040],
                      ])->select('name','users.user_no')->get();



      foreach($scenes as $scene){

        $characters = DB::table('character_scripts')
                      ->join('drama_employees','drama_employees.user_no','=','character_scripts.user_no')
                      ->where([
                        ['script_no','=',$script_no],
                        ['scene_no','=',$scene->scene_no],
                      ])->select('character_name','character_scripts.user_no','character_scripts.name','drama_employees.team_no','drama_employees.position_no')
                      ->distinct()
                      ->get();

        $scene->characters = $characters;

        array_push($scene_array,$scene);

      }

      // dd($scene_array);

      // var_dump($date);exit;

      return view('production.schedule_write',[
        'drama_no'=>$drama_no,
        'schedule_sequence' =>$schedule_sequence + 1,
        'director'=>$director,
        'author'=>$author,
        'default_date'=>$default_date,
        'date'=>$date,
        'scenes'=>$scene_array,
      ]);

    }

    public function weather_check(Request $request){

      $date = $request->get('date');

      $date_exist = DB::table('weathers')
                      ->where('date','=',$date)
                      ->get();

      // date_exist 는 값이 없으면 길이가 0임. 안에 아무것도 없기때문.
      if(count($date_exist)){  //값이 있을경우 1이상의 수가 반환
        //날짜 갱신이 필요없음으로 false반환
        return 0;
      }else{
        //날짜 갱신이 필요함으로 true반환
        return 1;
      }

    }

    public function weather_update(Request $request){

      $weathers = $request->weather;

      // var_dump($weathers);

      foreach($weathers as $local){
        $local_name = $local['elocal'];

        foreach($local['weather'] as $weather){

          $date = $weather['date'];
          $high_tem = $weather['high_tem'];
          $low_tem = $weather['low_tem'];
          $weather_am = $weather['weather_am'];
          $weather_pm = $weather['weather_pm'];

          //중복되는 데이터 처리
          $weather_duplicate = DB::table('weathers')->where([
            ['date','=',$date],
            ['local','=',$local_name],
          ])->value('date');

          if(empty($weather_duplicate)){  //데이터가 없을 경우

            DB::table('weathers')->insert([
              'date' => $date,
              'local' => $local_name,
              'lowest_temperature' => (int) $low_tem,
              'highest_temperature' => (int) $high_tem,
              'weather_am' => $weather_am,
              'weather_pm' => $weather_pm,
              'humidity' => 0,
            ]);

          }else{  //데이터가 있을 새로 갱신

            DB::table('weathers')
              ->where([
                ['date','=',$date],
                ['local','=',$local_name]
              ])->update([
                'lowest_temperature' => (int) $low_tem,
                'highest_temperature' =>(int) $high_tem,
                'weather_am' => $weather_am,
                'weather_pm' => $weather_pm,
              ]);

          }

        } //end foreach

      } //end foreach

    }

    public function weather_get(Request $request){

      $date = $request->get('date');

      $weathers = DB::table('weathers')
                    ->where('date','=',$date)
                    ->get();

      return $weathers;

    }

    public function local_weather_get(Request $request){

      $local = $request->get('local');
      $date = $request->get('date');
      $front_date = $request->get('front_date');
      $back_date = $request->get('back_date');

      $weathers = DB::table('weathers')
                    ->where('local','=',$local)
                    ->whereBetween('date',[$back_date,$front_date])
                    ->get();

      return $weathers;
    }

    public function scene_sort(Request $request){

      $sort_type = $request->get('sort_type');
      $drama_no = $request->get('drama_no');

      $scene_array = array();    //커스텀한 scene객체 담을 배열

      $script_no = DB::table('scripts')->where('drama_no',$drama_no)->value('script_no');
      $scenes = DB::table('scenes')->where('script_no',$script_no)->orderBy($sort_type)->get();
      //씬 장소 종류

      foreach($scenes as $scene){

        $characters = DB::table('character_scripts')
                      ->join('drama_employees','drama_employees.user_no','=','character_scripts.user_no')
                      ->where([
                        ['script_no','=',$script_no],
                        ['scene_no','=',$scene->scene_no],
                      ])->select('character_name','character_scripts.user_no','character_scripts.name','drama_employees.team_no','drama_employees.position_no')
                      ->distinct()
                      ->get();

        $scene->characters = $characters;

        array_push($scene_array,$scene);

      }

      return $scene_array;

    }

    public function schedule_team_staff($drama_no , $team_no){


      $team_info = DB::table('drama_employees')
                    ->join('positions','positions.position_no','=','drama_employees.position_no')
                    ->join('teams','teams.team_no','=','drama_employees.team_no')
                    ->join('users','users.user_no','=','drama_employees.user_no')
                    ->where([
                      ['drama_no',$drama_no],
                      ['drama_employees.team_no',$team_no],
                    ])->get();


      return $team_info;

    }

    //스케줄 수정
    public function schedule_modify(Request $request){

      // 드라마 번호
      $drama_no = $request->get('drama_no');
      // 스케줄 번호
      $schedule_no = $request->get('schedule_no');

      // dd($request->all());

      $scene_array = array();    //커스텀한 scene객체 담을 배열

      //scene 추가 table
      $script_no = DB::table('scripts')->where('drama_no',$drama_no)->value('script_no');
      $scenes = DB::table('scenes')->where('script_no',$script_no)->get();


      foreach($scenes as $scene){

        $characters = DB::table('character_scripts')
                      ->join('drama_employees','drama_employees.user_no','=','character_scripts.user_no')
                      ->where([
                        ['script_no','=',$script_no],
                        ['scene_no','=',$scene->scene_no],
                      ])->select('character_name','character_scripts.user_no','character_scripts.name','drama_employees.team_no','drama_employees.position_no')
                      ->distinct()
                      ->get();

        $scene->characters = $characters;

        array_push($scene_array,$scene);

      }


      //drama info
      $schedule = DB::table('schedules')
                    ->where('schedule_no',$schedule_no)->get();
      // 스케줄 전체 회차
      $schedule_number = DB::table('schedules')->where('drama_no',$drama_no)->max('number');
      //날짜
      $date = explode('-',$schedule[0]->date);

      //스케줄 날씨
      $schedule_weather = DB::table('weathers')
                            ->where([
                              ['date','=',$schedule[0]->date],
                              ['local','=',$schedule[0]->local]
                            ])->get();


      $director = DB::table('drama_employees')
                      ->join('users','users.user_no','=','drama_employees.user_no')
                      ->where([
                          ['drama_no',$drama_no],
                          ['position_no',3000],
                      ])->select('name','users.user_no')->get();

      $author = DB::table('drama_employees')
                      ->join('users','users.user_no','=','drama_employees.user_no')
                      ->where([
                          ['drama_no',$drama_no],
                          ['position_no',1040],
                      ])->select('name','users.user_no')->get();

      $schedule_summary = DB::table('schedule_summarys')
                    ->where('schedule_no',$schedule_no)->get();

      $meettings = DB::table('meettings')
                    ->join('teams','meettings.team_no','=','teams.team_no')
                    ->where('schedule_no',$schedule_no)->get();

      //meetting 가공

      $meetting_arr = array();
      $meetting_team = array();
      $test_array1 = array();
      $test_array2 = array();
      $test_array3 = array();

      foreach($meettings as $meetting){


        $meetting_sequence = $meetting->sequence;

        $team_info = array();
        $team_info['team_no'] = $meetting->team_no;
        $team_info['team_type'] = $meetting->team_type;

        array_push(${"test_array".$meetting_sequence},$team_info);

        $meetting_team = ${"test_array".$meetting_sequence};


        $meetting_info = ["time"=>$meetting->time , "content"=>$meetting->content , "team"=>$meetting_team];

        $meetting_arr[$meetting_sequence-1] = $meetting_info;

      }



      $team_name = [
        'direct_team_todo',
        'produce_team_todo',
        'product_team_todo',
        'art_team_todo',
        'clothes_team_todo',
        'style_team_todo',
        'camera_team_todo',
        'cg_team_todo',
        'actor_team_todo',
        'extra_team_todo',
      ];
      //1번부터 10번팀까지 돌며 배열에 넣음
      //table이 2개로 나누어져있기때문에 1~5, 6~10 따로 돌림
      for($i = 1 ; $i <= 10 ; $i++){

        $team_schedules[] = DB::table('team_schedules')
                      ->join('teams','teams.team_no','=','team_schedules.team_no')
                      ->leftJoin('users','users.user_no','=','team_schedules.user_no')
                      ->where([
                        ['schedule_no',$schedule_no],
                        ['team_schedules.team_no',$i]
                        ])->orderBy('team_schedules.team_no')
                      ->select('schedule_no','team_schedules.team_no','sequence','data_count','team_schedules.type','teams.team_type','team_schedules.user_no','users.name','prop','email','tel')
                      ->get();
      }


      //team schedule 에 team이름과 team no를 넣기 위한 배열
      // $team_info[0] = {'team_name'=>'direct_team_todo','team_no'=>1};

      // dd($team_schedule_2);

      // dd($scene_array);

      // dd($team_schedules);

      return view('production.schedule_modify',[
        'scenes'=>$scene_array,
        'schedule_number'=>$schedule_number,
        'date'=>$date,
        'schedule'=>$schedule,
        'weather'=>$schedule_weather,
        'director'=>$director,
        'author'=>$author,
        'schedule_summary'=>$schedule_summary,
        'meetting'=>$meetting_arr,
        'team_schedules'=>$team_schedules,
      ]);


    }


    //스케줄 저장
    public function schedule_save(Request $request){


      $schedule_data = $request->schedule;

      // ============================ schedule ============================
      $schedule = new Schedule([
        'drama_no' => (int)$schedule_data['schedule'][0]['drama_no'],
        'local'=> $schedule_data['schedule'][0]['local'],
        'date'=> $schedule_data['schedule'][0]['date'],
        'number'=> (int)$schedule_data['schedule'][0]['schedule_number'],
      ]);

      $schedule->save();

      $schedule_no = DB::table('schedules')
                      ->where([
                          ['drama_no',$schedule_data['schedule'][0]['drama_no']],
                          ['date',$schedule_data['schedule'][0]['date']],
                        ])
                      ->value('schedule_no');

      // ============================ schedule_summary ============================


      foreach($schedule_data['schedule_summary'] as $summary){

        DB::table('schedule_summarys')->insert([
          'schedule_no' => (int)$schedule_no,
          'sequence' => (int)$summary['sequence'],
          'scene_no' => (int)$summary['scene_no'],
          'location' => $summary['location'],
          'mden' => $summary['dn'],
          'sol' => $summary['sol'],
          'ie' => $summary['ie'],
          'scene_summary' => $summary['scene_summary'],
          'etc' => $summary['etc'],
          'schedule_status' => $summary['schedule_status'],
        ]);

      }

      // ============================ meetting ============================
      foreach($schedule_data['meetting'] as $meetting){
        foreach($meetting['team_no'] as $team){

          DB::table('meettings')->insert([
              'schedule_no' => (int)$schedule_no,
              'sequence' => (int)$meetting['sequence'],
              'team_no' => (int)$team['team_no'],
              'time' => $meetting['time'],
              'content' => $meetting['content'],
            ]);

        }
      }

      //  ============================ team_schedule ============================

      foreach($schedule_data['team_schedule'] as $team){

        if(isset($team['schedule'])){

          foreach($team['schedule'] as $team_schedule){

            DB::table('team_schedules')->insert([
              'schedule_no' => (int)$schedule_no,
              'team_no' => (int)$team['team_no'],
              'sequence' => (int)$team_schedule['sequence'],
              'type' => $team_schedule['type'],
              'user_no' => $team_schedule['user_no'],
              'name' => $team_schedule['name'],
              'prop' => $team_schedule['prop'],
              'data_count'=>(int)$team_schedule['data_count'],
            ]);
          } //end foreach

        } //end if

      }

      $drama_employees = DB::table('drama_employees')
                          ->where('drama_no',$schedule_data['schedule'][0]['drama_no'])
                          ->get();

      $drama_info = DB::table('dramas')
                        ->join('users','users.user_no','=','dramas.production_no')
                        ->where('drama_no',$schedule_data['schedule'][0]['drama_no'])
                        ->get();

      $schedule_info = DB::table('schedules')
                          ->where([
                              ['drama_no',$schedule_data['schedule'][0]['drama_no']],
                              ['date',$schedule_data['schedule'][0]['date']],
                            ])
                          ->get();

      //알람등록
      foreach($drama_employees as $employee){

        $notice = new Timeline([
          'sender' => $drama_info[0]->user_no,
          'receiver' => $employee->user_no,
          'time' => $schedule_info[0]->created_at,
          'notice_type'=> '알림',
          'table_type'=> 'schedules',
          'serial_no'=> (int)$schedule_no,
          'url'=>'schedule_read/',
          'notice'=> $drama_info[0]->name.'のドラマ『'.$drama_info[0]->drama_name.'』に新しいスケジュールが登録されました。',
          'notice_status'=> 0,

        ]);
        //notice_status 0 => 확인전, 1 => 확인
        $notice->save();

      }

      //토큰 포함하여 notice전송
      $notices = DB::table('timelines')
                  ->leftjoin('fcm_tokens','fcm_tokens.user_no','=','timelines.receiver')
                  ->where([
                      ['sender',$drama_info[0]->user_no],
                      ['time',$schedule_info[0]->created_at],
                      ['table_type','schedules']
                    ])->get();

      return $notices;


    } //end schedule_save

    //스케줄 수정 저장
    public function schedule_modify_save(Request $request){


      // var_dump($request->schedule); exit;

      $schedule_data = $request->schedule;
      $schedule_no = $schedule_data['schedule_no'];


      // ============================ schedule ============================
      DB::table('schedules')
          ->where('schedule_no',$schedule_no)
          ->update([
            'drama_no' => (int)$schedule_data['schedule'][0]['drama_no'],
            'local'=> $schedule_data['schedule'][0]['local'],
            'date'=> $schedule_data['schedule'][0]['date'],
            'number'=> (int)$schedule_data['schedule'][0]['schedule_number'],
            'updated_at'=>date("Y-m-d H:i:s"),
          ]);

      // ============================ schedule_summary ============================





      DB::table('schedule_summarys')
          ->where('schedule_no',$schedule_no)
          ->delete();

      $script_no = DB::table('scripts')
                      ->where('drama_no',(int)$schedule_data['schedule'][0]['drama_no'])
                      ->value('script_no');

      foreach($schedule_data['schedule_summary'] as $summary){

        DB::table('schedule_summarys')->insert([
          'schedule_no' => (int)$schedule_no,
          'sequence' => (int)$summary['sequence'],
          'scene_no' => (int)$summary['scene_no'],
          'location' => $summary['location'],
          'mden' => $summary['dn'],
          'sol' => $summary['sol'],
          'ie' => $summary['ie'],
          'scene_summary' => $summary['scene_summary'],
          'etc' => $summary['etc'],
          'schedule_status' => $summary['schedule_status'],
        ]);

        if($summary['schedule_status'] == 1){

          DB::table('scenes')
          ->where([
            ['script_no','=',$script_no],
            ['scene_no','=',(int)$summary['scene_no']]
          ])->update(['status'=>1]);

        }elseif($summary['schedule_status'] == 0){

          DB::table('scenes')
          ->where([
            ['script_no','=',$script_no],
            ['scene_no','=',(int)$summary['scene_no']]
          ])->update(['status'=>0]);

        }

      }

      // ============================ meetting ============================
      // var_dump($schedule_data['meetting']);
      // exit;

      DB::table('meettings')
          ->where('schedule_no',$schedule_no)
          ->delete();


      foreach($schedule_data['meetting'] as $meetting){
        foreach($meetting['team_no'] as $team){

          DB::table('meettings')->insert([
              'schedule_no' => (int)$schedule_no,
              'sequence' => (int)$meetting['sequence'],
              'team_no' => (int)$team['team_no'],
              'time' => $meetting['time'],
              'content' => $meetting['content'],
            ]);
        }
      }

      //  ============================ team_schedule ============================

      DB::table('team_schedules')
          ->where('schedule_no',$schedule_no)
          ->delete();


      foreach($schedule_data['team_schedule'] as $team){

        if(isset($team['schedule'])){

          foreach($team['schedule'] as $team_schedule){

            DB::table('team_schedules')->insert([
              'schedule_no' => (int)$schedule_no,
              'team_no' => (int)$team['team_no'],
              'sequence' => (int)$team_schedule['sequence'],
              'type' => $team_schedule['type'],
              'user_no' => $team_schedule['user_no'],
              'name' => $team_schedule['name'],
              'prop' => $team_schedule['prop'],
              'data_count'=>(int)$team_schedule['data_count'],
            ]);
          } //end foreach

        } //end if

      }

      $drama_employees = DB::table('drama_employees')
                          ->where('drama_no',$schedule_data['schedule'][0]['drama_no'])
                          ->get();

      $drama_info = DB::table('dramas')
                        ->join('users','users.user_no','=','dramas.production_no')
                        ->where('drama_no',$schedule_data['schedule'][0]['drama_no'])
                        ->get();

      $schedule_info = DB::table('schedules')
                          ->where([
                              ['drama_no',$schedule_data['schedule'][0]['drama_no']],
                              ['date',$schedule_data['schedule'][0]['date']],
                            ])
                          ->get();

      //알람등록
      foreach($drama_employees as $employee){

        $notice = new Timeline([
          'sender' => $drama_info[0]->user_no,
          'receiver' => $employee->user_no,
          'time' => $schedule_info[0]->updated_at,
          'notice_type'=> '알림',
          'table_type'=> 'schedules',
          'serial_no'=> (int)$schedule_no,
          'url'=>'schedule_read/',
          'notice'=> $drama_info[0]->name.'のドラマ『'.$drama_info[0]->drama_name.'』のスケジュールが修正されました。',
          'notice_status'=> 0,

        ]);
        //notice_status 0 => 확인전, 1 => 확인
        $notice->save();
      }

      $notices = DB::table('timelines')
                  ->leftjoin('fcm_tokens','fcm_tokens.user_no','=','timelines.receiver')
                  ->where([
                      ['sender',$drama_info[0]->user_no],
                      ['time',$schedule_info[0]->updated_at],
                      ['table_type','schedules']
                    ])->get();

      // $notices = DB::table('timelines')
      //             ->where([
      //                 ['sender',$drama_info[0]->user_no],
      //                 ['time',$schedule_info[0]->updated_at],
      //                 ['table_type','schedules']
      //               ])->get();

      return $notices;


    }
    //========================= 스태프 =========================

    public function staff_list($drama_no){
      $staff = DB::table('drama_employees')
              ->join('users','users.user_no','=','drama_employees.user_no')
              ->join('teams','drama_employees.team_no','=','teams.team_no')
              ->join('positions', 'positions.position_no','=','drama_employees.position_no')
              ->join('upload_files',function ($join){
                 $join->on('drama_employees.user_no','=','upload_files.serial_no')
                     ->where([
                       ['upload_files.table_type','=','users'],
                       ['upload_files.use_type','=','profile'],
                     ]);
                })
              ->where('drama_no',$drama_no)
              ->paginate(15);
      $position = DB::table('positions')->orderBy('position')->get();

      $drama_number = $drama_no;

      // var_dump($drama_number);exit;

              // var_dump($staff);exit;


      return view('production.staff_list',[
        'staffs' => $staff,
        'positions' => $position,
        'drama_number' => $drama_number
      ]);
    }

        public function staff_list_category_sort($category_no){
          $staff = DB::table('drama_employees')
                  ->join('users','users.user_no','=','drama_employees.user_no')
                  ->join('teams','drama_employees.team_no','=','teams.team_no')
                  ->join('positions', 'positions.position_no','=','drama_employees.position_no')
                  ->join('upload_files',function ($join){
                     $join->on('drama_employees.user_no','=','upload_files.serial_no')
                         ->where([
                           ['upload_files.table_type','=','users'],
                           ['upload_files.use_type','=','profile'],
                         ]);
                 })
                  ->where('drama_no',1)
                  ->where('positions.position_no',$category_no)
                  ->get();
          $position = DB::table('positions')->orderBy('position')->get();

                  // var_dump($staff);exit;


          return view('production.staff_list_sort',[
            'staffs' => $staff,
            'positions' => $position
          ]);
        }

        //드라마 인력 modal
        public function drama_employee_get($user_no){

          $drama_employee = DB::table('users')
                            ->join('drama_employees','drama_employees.user_no','=','users.user_no')
                            ->join('positions', 'positions.position_no','=','drama_employees.position_no')
                            ->leftjoin('upload_files',function ($join){
                                $join->on('users.user_no','=','upload_files.serial_no')
                                     ->where([
                                      ['upload_files.table_type','=','users'],
                                      ['upload_files.use_type','=','profile'],
                                    ]);
                            })->where('users.user_no',$user_no)->get();

          // $drama_employee = DB::table('users')->where('user_no',$user_no)->get();

          return $drama_employee;
        }

        //드라마 인력 추가 페이지-> 포지션 목록
    public function drama_employee_add($drama_no){

      $position_list = DB::table('positions')->get();
      $team_list = DB::table('teams')->get();
      $drama_number = $drama_no;

      return view('production.drama_employee_add',[
        'position_lists' => $position_list,
        'team_lists' => $team_list,
        'drama_number' => $drama_no
      ]);
    }

    public function position_select($position_no){
      $user_no = Auth::user()->user_no;
      $team_staff = DB::table('production_employees')
                    ->join('positions','positions.position_no','production_employees.position_no')
                    ->join('users','users.user_no','production_employees.user_no')
                    ->where('production_employees.position_no',$position_no)
                    ->where('production_employees.production_no',$user_no)
                    ->get();

      return $team_staff;
    }

    //drama 스태프 추가
    public function employee_add(Request $request){
      $employee_position = $request->get('employee_position');
      $employee = $request->get('employee');
      // var_dump($employee);
      $employee_team= $request->get('employee_team');
      $drama_no = $request->get('drama_number');
      $ctn = count($employee_position);
      $staff_cnt = 0;

      for($i=0; $i<=$ctn-1; $i++){
        $count = DB::table('drama_employees')
        ->where('user_no',$employee[$i])
        ->count();

        if($count > 0){
          $staff_cnt++;
        }

      }

      if($staff_cnt > 0){
        // return back();
        echo "<script>
        window.history.back();
        alert('이미 등록된 스태프가 있습니다.');
        </script>";
      }else{
        for($y=0; $y<=$ctn-1; $y++){
            $sequence = DB::table('drama_employees')->where('drama_no', $drama_no)->max('sequence');
            $drama_employee = new Drama_Employee([
              'drama_no' => $drama_no,
              'sequence' => $sequence+1,
              'team_no' => $employee_team[$y],
              'user_no' => $employee[$y],
              'position_no' => $employee_position[$y]
            ]);
            $drama_employee->save();
          }
          echo "<script>
          alert('스태프가 등록되었습니다');
          </script>";

          return redirect()->route('staffList',[$drama_no]);
      }



    }

    //drama staff 삭제
    public function drama_staff_delete($user_no){
      DB::table('drama_employees')
      ->where('user_no',$user_no)
      ->delete();
    }


    //========================= 장비 =========================

    //드라마 장비
    public function drama_equipment($drama_no){

      $production_no = DB::table('dramas')->where('drama_no',$drama_no)->value('production_no');

      $equipments = DB::table('drama_equipments')
                      ->where('drama_no',$drama_no)
                      ->get();

      // var_dump($production_no);exit;

      return view('production.drama_equipment',[
        'equipments' => $equipments,
        'production_no' => $production_no,
      ]);
    }

    public function production_equipments_get($production_no){

      $equipments_list = DB::table('production_equipments')
                        ->join('category_equipments','category_equipments.category_no','=','production_equipments.category_no')
                        ->where('production_no',$production_no)->get();

      return $equipments_list;

    }

    // public function production_equipment_rewrite($equipment_no){
    //   $equipment = DB::talbe('
    //   ')
    // }


    //========================= PPL =========================

    public function production_ppl_write_category(){
      $user_no = Auth::user()->user_no;

      $category = DB::table('category_products')->get();
      $drama_category= DB::table('dramas')->select('drama_no', 'drama_name')->where('production_no', $user_no)->get();

      return view('production.production_ppl_write', [
        'categorys' => $category,
        'drama_categorys' => $drama_category
      ]);
    }

    public function production_ppl_write(Request $request){
        $ppl = new Request_Product([
          'drama_no' => $request->get('drama_no'),
          'sequence'=> 1,
          'category_no'=> $request->get('category_no'),
          'content'=> $request->get('content')
        ]);

        $ppl->save();

        return redirect()->route('production_ppl_main');
      }

    //========================= 스태프풀 =========================

    public function staffpull($drama_no){

      return view('production.staffpull', [
        'drama_no' => $drama_no,
      ]);

    }



    public function staffpull_list(Request $request){



      $start_date = $request->get('start_date');
      $end_date = $request->get('end_date');
      $check_staff = $request->get('check_staff');
      $drama_no = $request->get('drama_no');

      //DB쿼리

      // $staff_pull =  DB::select(
      //   "SELECT u.user_no, u.name, ts.team_no, u.type, s.date, s.drama_no, count(s.date) as ct
      //   FROM schedules s
      //   JOIN team_schedules ts
      //   ON s.schedule_no = ts.schedule_no
      //   RIGHT JOIN users u
      //   ON u.user_no = ts.user_no
      //   WHERE s.date >= date(':start_date')
      //   AND s.date <= date(':stop_date')
      //   OR s.date is null
      //   group by u.user_no
      //   ORDER BY ct",[ 'start_date' => $start_date , 'stop_date' => $end_date ]
      // );

      $staff_pull = DB::table('schedules')
                        ->select(DB::raw('users.user_no, users.name, users.type, users.user_type, count(schedules.date) as ct'))
                        ->join('team_schedules',function($join) {
                            $join->on('schedules.schedule_no','=','team_schedules.schedule_no');
                        })->rightjoin('users',function($join) {
                            $join->on('users.user_no','=','team_schedules.user_no');
                        })->join('drama_employees','drama_employees.user_no','=','users.user_no')
                        ->where('drama_employees.drama_no','!=',$drama_no)
                        ->whereIn('users.type',$check_staff)
                        ->where([
                            ['schedules.date','>=',date($start_date)],
                            ['schedules.date','<=',date($end_date)]
                        ])->orWhereNull('schedules.date')
                          ->whereIn('users.type',$check_staff)
                          ->groupBy('users.user_no','users.name','users.type', 'users.user_type')
                          ->having('users.user_type','!=','기업')
                          ->orderBy('ct')
                          ->get();

      //join

      // SELECT u.user_no, u.name, ts.team_no, u.type, s.date, s.drama_no, count(s.date) as ct
      // FROM schedules s
      // JOIN team_schedules ts
      // ON s.schedule_no = ts.schedule_no
      // RIGHT JOIN users u
      // ON u.user_no = ts.user_no
      // WHERE s.date >= date('2017-06-20')
      // AND s.date <= date('2017-06-22')
      // OR s.date is null
      // group by u.user_no
      // ORDER BY ct ;


      return $staff_pull;

    }

    public function staffpull_user_schedule(Request $request){

      $user_no = $request->get('user_no');
      $start_date = $request->get('start_date');
      $end_date = $request->get('end_date');

      $user_schedule = DB::table('team_schedules')
                          ->join('schedules','team_schedules.schedule_no','=','schedules.schedule_no')
                          ->where([
                            ['schedules.date','>=',date($start_date)],
                            ['schedules.date','<=',date($end_date)],
                          ])->where('user_no',$user_no)
                          ->get();


      return $user_schedule;

    }

    public function staffpull_request(Request $request){

      $sender_no = $request->get('sender_no');
      $staff_no = $request->get('staff_no');
      $drama_no = $request->get('drama_no');


      $drama_sequence = DB::table('drama_employees')
                          ->where('drama_no',$drama_no)
                          ->max('sequence');

      $staff_info = DB::table('users')
                      ->where('user_no',$staff_no)
                      ->get();


      //시연을위해 직접 값 입력.


      DB::table('drama_employees')->insert(
          ['drama_no' => (int)$drama_no,
          'sequence' => (int)$drama_sequence+1,
          'team_no' => 1,
          'user_no' => (int)$staff_no,
          'position_no' => 3011,
          ]
      );


      //알람등록

      $drama_employees = DB::table('drama_employees')
                          ->where('drama_no',$drama_no)
                          ->get();

      $drama_info = DB::table('dramas')
                      ->join('users','users.user_no','=','dramas.production_no')
                      ->where('drama_no',$drama_no)
                      ->get();

      $time = date("Y-m-d H:i:s");

      foreach($drama_employees as $employee){

        $notice = new Timeline([
          'sender' => (int)$drama_info[0]->user_no,
          'receiver' => (int)$employee->user_no,
          'time' => $time,
          'notice_type'=> '알림',
          'table_type'=> 'staffpull',
          'serial_no'=> (int)0,
          'url'=>'none',
          'notice'=> $drama_info[0]->name.'のドラマ『'.$drama_info[0]->drama_name.'』に '.$staff_info[0]->name.'が新しいメンバーで追加されました。',
          'notice_status'=> 0,
        ]);
        //notice_status 0 => 확인전, 1 => 확인
        $notice->save();

      }

      $notices = DB::table('timelines')
                  ->where([
                      ['sender',$drama_info[0]->user_no],
                      ['time',$time],
                      ['table_type','staffpull']
                    ])->get();

      return $notices;



    }

    //========================= 구인 =========================


        public function recruitment($drama_no){

          $recruits_array = array();


          $recruits = DB::table('recruits')
                  ->where('drama_no',$drama_no)
                  ->get();

          foreach($recruits as $recruit){
            $recruit_no = $recruit->recruit_no;
            $recruit_apply = DB::table('recruit_applys')
                                    ->join('upload_files',function ($join){
                                       $join->on('recruit_applys.user_no','=','upload_files.serial_no')
                                           ->where([
                                             ['upload_files.table_type','=','users'],
                                             ['upload_files.use_type','=','profile'],
                                           ]);
                                    })->where('recruit_no',$recruit_no)->where('recruit_status','<>',3)->get();

            $recruit->{'apply_list'} = $recruit_apply;

            array_push($recruits_array,$recruit);
          }

          // print_r($recruits_array);
          // exit;

          return view('production.recruitment',[
            'recruitments'=>$recruits_array,
            'recruits' => $recruits
          ]);

        }

        public function recruit_list($recruit_no){
          $recruit_list = DB::table('recruit_applys')
                          ->where('recruit_no',$recruit_no)
                          ->where('recruit_status','<>',3)->get();

          return $recruit_list;
        }

        public function recruit_check_get($apply_no){
            $recruit_apply = DB::table('recruit_applys')
                                    ->leftjoin('upload_files',function ($join){
                                        $join->on('recruit_applys.user_no','=','upload_files.serial_no')
                                             ->where([
                                              ['upload_files.table_type','=','users'],
                                              ['upload_files.use_type','=','profile'],
                                            ]);
                                    })->where('apply_no',$apply_no)->get();

            // $recruit_apply = DB::table('recruit_applys')->get();
            return $recruit_apply;
          }

        public function staff_info($user_no){
          $staff_info = DB::table('users')
                                  ->leftjoin('upload_files',function ($join){
                                      $join->on('users.user_no','=','upload_files.serial_no')
                                           ->where([
                                            ['upload_files.table_type','=','users'],
                                            ['upload_files.use_type','=','profile'],
                                          ]);
                                  })->where('user_no',$user_no)->get();
          return $staff_info;
        }


        //========================= 작품통계 =========================

        public function drama_chart($drama_no){


          $script_no = DB::table('scripts')->where('drama_no',$drama_no)->value('script_no');

          //스태프 수
          $staff_count = DB::table('drama_employees')->where('drama_no',$drama_no)->count();
          //씬 수
          $scene_count = DB::table('scenes')->where('script_no',$script_no)->count();
          //진행상황
          $scene_complete_count = DB::table('scenes')->where([
            ['script_no',$script_no],
            ['status',1]
            ])->count();

          //감독
          $director = DB::table('drama_employees')
                          ->join('users','users.user_no','=','drama_employees.user_no')
                          ->leftjoin('upload_files',function ($join){
                             $join->on('drama_employees.user_no','=','upload_files.serial_no')
                                 ->where([
                                   ['upload_files.table_type','=','users'],
                                   ['upload_files.use_type','=','profile'],
                                 ]);
                          })->where([
                              ['drama_no',$drama_no],
                              ['position_no',3000],
                          ])->get();


          //작가
          $author = DB::table('drama_employees')
                          ->join('users','users.user_no','=','drama_employees.user_no')
                          ->leftjoin('upload_files',function ($join){
                             $join->on('drama_employees.user_no','=','upload_files.serial_no')
                                 ->where([
                                   ['upload_files.table_type','=','users'],
                                   ['upload_files.use_type','=','profile'],
                                 ]);
                          })->where([
                              ['drama_no',$drama_no],
                              ['position_no',1040],
                          ])->get();




          //팀별 스태프 수
          //join안에서 변수 사용하려면 use해야함
          $employees = DB::table('teams')
                          ->select(DB::raw('teams.team_type ,count(drama_employees.user_no) as count'))
                          ->leftjoin('drama_employees',function ($join) use($drama_no){
                              $join->on('teams.team_no','=','drama_employees.team_no')
                                    ->where('drama_employees.drama_no',$drama_no);
                          })->groupBy('teams.team_type')
                          ->orderBy('teams.team_type')
                          ->get();

          //회차별 씬 촬영 현황
          //씬 촬영 여부도 포함
          //count 에 if문을 넣어 처리함.
          // schedule_status : 0  촬영 전  /  schedule_status : 1  촬영 완료
          $schedule_scenes = DB::table('schedules')
                          ->select(DB::raw('schedules.number ,count(schedules.schedule_no) as count ,count(if(schedule_summarys.schedule_status=1,schedule_summarys.schedule_status,null)) as status_count'))
                          ->leftjoin('schedule_summarys',function ($join){
                              $join->on('schedules.schedule_no','=','schedule_summarys.schedule_no');
                          })->where([
                            ['drama_no','=',$drama_no],
                          ])->groupBy('schedules.number')
                          ->get();



          //회차별 스태프 투입현황
          $schedule_staffs = DB::table('schedules')
                          ->select(DB::raw('schedules.number ,count(schedules.schedule_no) as count'))
                          ->leftjoin('team_schedules',function ($join){
                              $join->on('schedules.schedule_no','=','team_schedules.schedule_no')
                                   ->where([
                                    ['team_schedules.type','=','staff'],
                                  ]);
                          })->where('drama_no','=',$drama_no)
                          ->groupBy('schedules.number')
                          ->get();


          //배우별 등장 현황
          $schedule_actors = DB::table('schedules')
                          ->select(DB::raw('schedules.number ,count(schedules.schedule_no) as count'))
                          ->leftjoin('team_schedules',function ($join){
                              $join->on('schedules.schedule_no','=','team_schedules.schedule_no')
                                   ->where([
                                    ['team_schedules.type','=','staff'],
                                  ]);
                          })->join('drama_employees','team_schedules.user_no','=','drama_employees.user_no')
                          ->where('schedules.drama_no','=',$drama_no)
                          ->whereIn('drama_employees.position_no',[2000,2001,2002])
                          ->groupBy('schedules.number')
                          ->get();


          return view('production.production_drama_chart',[
            'staff_count'=>$staff_count,
            'scene_count'=>$scene_count,
            'scene_complete_count'=>$scene_complete_count,
            'director'=>$director,
            'author'=>$author,
            'employees'=>$employees,
            'schedule_staffs'=>$schedule_staffs,
            'schedule_actors'=>$schedule_actors,
            'schedule_scenes'=>$schedule_scenes,
          ]);

      }

}
