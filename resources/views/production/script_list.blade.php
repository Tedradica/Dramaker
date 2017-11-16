@extends('layout')

@section('title','台本作成')

@section('content')

<script>
$(document).ready(function() {
    //new ajax data send
    $("form#data").submit(function(event){
      console.log("클릭");
      var url = $(".script_write_form").attr('data-link');
      console.log("url : "+url);
      //disable the default form submission
      event.preventDefault();
      //grab all form data
      var formData = new FormData($(this)[0]);
      console.log(formData);
      $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
  	    processData: false,
        success: function (data) {
          console.log(data);
          console.log("성공");
          //알람부분
          //for in 문으로 순회하면서 alarm서버로 데이터 전송
          for(var i in data){
            // console.log(data[i]);
            socket.emit('scene_write',
              { sender : data[i]['sender'],
                receiver : data[i]['receiver'],
                time : data[i]['time'],
                notice : data[i]['notice'],
                token: data[i]['token'],
              }
            );
          }
          alert("작성되었습니다.");
          location.reload(true);
        },
        error:function(e){
            console.log(e);
        }
      }); //ajax end
     }); //event end
 });
 </script>

<div id="test"></div>
<div id="main">

  <div id="field" data-field-id="{{$characters}}" ></div>
  <div id="last_script_count" data-field-id="{{$last_script_count}}" ></div>

  <?php
  echo( $relative_path.$php_filename );
  ?>

  <section id="script_info_form" class="two" style="padding: 0;">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/production') }}">制作現場</a></li>
      <li class="breadcrumb-item"><a href="{{ URL::previous() }}">作品情報</a></li>
      <li class="breadcrumb-item active">台本作成</li>
    </ol>

    <div class="script_info_form">
      <!-- <div class="script_info_form" style=" margin:50px;  background-color : white"> -->
    <br>
    <div id="floatMenu">
      <div style="text-align:center">
        <strong style="font-weight:bold; font-size:35px;">アクターリスト</strong>
      </div>

      <hr>

      <div style="text-align:left">

        <span id="floatMenu_actor_list" style="vertical-align:top;font-size:25px;"><b>登場人物</b></span> &nbsp;
        <button type="button" class="btn btn-primary" data-target="#character_add_list" data-toggle="modal" style="cursor:pointer" >
          <i class="fa fa-plus"></i>
        </button>
        <!-- <img id="btn_actor_add" data-target="#character_add_list" data-toggle="modal" src="../images/plus_icon2.png" width="40px" style="cursor:pointer"> -->

        <div id="actor_list_view">

          <div class="script_character_nav_tabs">

            <ul class="nav nav-tabs">
              <li class="active">
                <a data-toggle="tab" href="#character-tab-1" aria-expanded="true">
                  <i class="fa fa-user"></i>
                  主演俳優
                </a>
              </li>
              <li>
                <a data-toggle="tab" href="#character-tab-2" aria-expanded="false">
                  <i class="fa fa-user"></i>
                  助演俳優
                </a>
              </li>
            </ul>

          </div>
          <div class="tab-content">
            <!-- 주연 -->
            <div id="character-tab-1" class="tab-pane active">

              @foreach($characters as $character)
                @if($character->position_no == 2000)
                <div class="script_actor_list">
                  <img class="img m-t-xs script_actor_add_img" src="{{ asset('storage/'.$character->path.$character->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
                  <br>
                  <span>
                    <b>
                      {{$character->character_name}}
                    </b>
                  </span>
                  <br>
                  <span>
                    {{$character->name}}
                  </span>
                </div>

                @endif
              @endforeach

            </div>
            <!-- 조연 -->
            <div id="character-tab-2"  class="tab-pane">

              @foreach($characters as $character)
                @if($character->position_no != 2000)
                <div class="script_actor_list">
                  <img class="img m-t-xs script_actor_add_img" src="{{ asset('storage/'.$character->path.$character->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
                  <br>
                  <span>
                    <b>
                      {{$character->character_name}}
                    </b>
                  </span>
                  <br>
                  <span>
                    {{$character->name}}
                  </span>
                </div>

                @endif
              @endforeach

            </div>
          </div>


        </div> <!-- actor_list_view  end-->
      </div>
    </div>


    </div>
  </section>

  <section id="script_add_form" class="two" style="padding: 0;">

    <div align="left" style="text-align:center;margin-bottom:20px;">
      <br>
      @if(1)

      <button id="btn_script_create" class="btn btn-primary btn-lg">シーン追加</button>
      @endif
    </div>

    <div id="script_add" style="display:none; ">
      <form class="script_write_form" onkeydown="return captureReturnKey(event)" id="data" data-link="{{ url('script_add',[$script_no])}}" data-link-script="{{ url('script_list/') }}">
        {{ csrf_field() }}
        <input id="hidden_scriptCount" type="hidden" name="script_count">
        <input id="hidden_angleCount" type="hidden" name="angle_count">
        <input type="hidden" id = "character_package" name="character_package">
        <input type="hidden" id = "script_package" name="script_package">
        <div style="display: flex" >
          <div style=" flex:0.3;" /></div>
          <div style=" flex:8;" />
            <div style="display:flex; border:1px solid black; text-align:left; margi:20px 0px 0px 0px; border:7px solid #bfbfbf; border-bottom: 3px solid #bfbfbf;">
              シーン番号 &nbsp;&nbsp; <input id="scene_no_set" name="scene_no" style="background-color:transparent; border:none; text-align:center;" type="number" min="1" max="999">
              場所 &nbsp;&nbsp; <input name="location" style="background-color:transparent; border:none; width:80%; " type="text" size="50%">
            </div>
            <div style="display:flex; border:1px solid black; text-align:left; margin:0px 0px 7px 0px; border:7px solid #bfbfbf; border-top:0px;">
              シーン説明 &nbsp;&nbsp; <input name="scene_summary" style="background-color:transparent; border:none; width:93%;" type="text">
            </div>
          </div>
          <div style=" flex:0.3;" /></div>
        </div>
        <div style="display: flex" >

          <div style=" flex:0.3; height:400px" /></div>

          <div id="conti_area"
             style=" flex: 1.5; margin: 5px; border:7px solid #bfbfbf; overflow-x:hidden; overflow-y:auto;"  />

          </div>

          <div id="angle_area"
             style=" flex: 1.5; overflow:auto; margin: 5px; border:7px solid #bfbfbf; overflow-x:hidden; " />

          </div>

          <div id="script_area"
             style=" flex: 5; overflow:auto; margin: 5px; border:7px solid #bfbfbf; " />
          </div>

          <div style=" flex:0.3" /></div>

        </div>
        <br>
        <div id="file_upload" style="display:flex">
          <div style="flex:2"></div>
          <div id="drop_zone" style="border:1.5px dashed #bfbfbf; flex:6; height:75px; align:center"> ファイルアップロード </div>
          <div style="flex:2"></div>
        </div>
        <br>
        <button class="btn btn-primary btn-lg" type="submit" id="btn_script_add">セーブ</button>
        <button class="btn btn-primary btn-lg" type="button" id="btn_script_cancel">キャンセル</button>
      </form>
    </div>

  </section>

  <section id="script_list_form" class="two" style="padding: 0;">
    <div style=" margin:50px; background-color:white">

      <br>
      <strong style="font-weight:bold; font-size:35px;">スクリプトリスト</strong>
          <hr>
      <br>

      <div>
        <select id ="select_category" data-link="{{ url('/script_view') }}" >
            <option value="scene_no">シーン番号</option>
            <option value="scene_summary">シーン説明</option>
            <option value="actor">俳優名</option>
            <option value="location">場所名</option>
        </select>
        <input id="category_value" type="text" name="" value="">

        <!-- <button type="button" class="btn btn-default" onclick="location.href='{{url('/script_view')}}/select_category.value/category_value.value/{{$script_no}}'" name="search">검색</button>
        <button type="button" class="btn btn-default" onclick="alert(select_category.value)" name="search">검색</button> -->

        <button type="button" class="btn btn-default" onclick="go_to_category(select_category.value, category_value.value, {{$script_no}})" name="search">검색</button>
        <!-- {{url('/script_all_view')}}/{{$script_no}} -->

      </div>
      <br>
    <div class="script_list_form">
      <table class="table table-hover">
        <tr>
          <td colspan="5"> <strong style="font-weight:bold; font-size:25px;"><a href=" {{ url('/script_all_view') }}/{{ $script_no }} ">全体台本</a></strong> </td>
        </tr>
        <tr>
          <td>シーン番号</td>
          <td>場所</td>
          <td>シーン説明</td>
          <td>作成日付</td>
          <td>修正日付</td>
        </tr>
        <script>
          var pre_script_count = 0;
        </script>
        @foreach($scenes as $scene)
          @foreach($target_scenes as $target_scene)
            @if($target_scene->scene_no == $scene->scene_no)
              <tr>
                <td ><a class="scene{{$scene->scene_no}}" onclick="toggle_layer(event)" style="cursor:pointer">{{$scene->scene_no}}</a></td>
                <td ><a class="scene{{$scene->scene_no}}" onclick="toggle_layer(event)" style="cursor:pointer">{{$scene->location}}</a></td>
                <td ><a class="scene{{$scene->scene_no}}" onclick="toggle_layer(event)" style="cursor:pointer">{{$scene->scene_summary}}</a></td>
                @if( date("Y-m-d") == date("Y-m-d", strtotime($scene->created_at)) )
                <!-- 만약에 오늘과 날짜가 같은 경우에, 맞으면 시간까지 보여주고, 아니면 시간을 보여주지  않는다. -->
                <td ><a class="scene{{$scene->scene_no}}" onclick="toggle_layer(event)" style="cursor:pointer">{{ date("Y-m-d H:i", strtotime($scene->created_at)) }}</a></td>
                @else
                <td ><a class="scene{{$scene->scene_no}}" onclick="toggle_layer(event)" style="cursor:pointer">{{ date("Y-m-d", strtotime($scene->created_at))  }}</a></td>
                @endif

                @if( date("Y-m-d") == date("Y-m-d", strtotime($scene->updated_at)) )
                <!-- 만약에 오늘과 날짜가 같은 경우에, 맞으면 시간까지 보여주고, 아니면 시간을 보여주지  않는다. -->
                <td ><a class="scene{{$scene->scene_no}}" onclick="toggle_layer(event)" style="cursor:pointer">{{ date("Y-m-d H:i", strtotime($scene->updated_at)) }}</a></td>
                @else
                <td ><a class="scene{{$scene->scene_no}}" onclick="toggle_layer(event)" style="cursor:pointer">{{ date("Y-m-d", strtotime($scene->updated_at)) }}</a></td>
                @endif
              </tr>

        <tr>
          <!-- 마우스 오버 효과빼주기 .. -->
          <td colspan="5" id="scene{{$scene->scene_no}}_toggle" style="display:none; background-color:#f5fafa !important;">
            <div>

              <!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
              <div id="script_add" style="text-align:center; ">
                  <div style="display: flex" >
                    <!-- <div style=" flex:0.5;">
                    </div> -->
                    <div style=" flex:9; background-color:white; margin:20px 0px 7px 0px; border:7px solid #bfbfbf">
                      @foreach($target_scenes as $target_scene)
                      @if($target_scene->scene_no == $scene->scene_no)
                      <div style="text-align:left; margin:10px; ">
                        <div style="display:flex; ">
                          <div style="flex:7">
                            <span style="font-weight:bold">シーン番号 : </span>
                            <!-- <strong>씬번호 :</strong>  -->
                            <label name="scene_no">&nbsp; {{$target_scene->scene_no}} </label> &nbsp;&nbsp;
                          </div>
                          <div style="flex:3">
                            <span style="font-weight:bold">作成日付 : </span>
                            <label name="date">&nbsp; {{$target_scene->created_at}} </label><br>
                          </div>
                        </div>

                      </div>

                      <div style="text-align:left; margin:10px;">
                      <span style="font-weight:bold">場所 : </span>
                      <!-- <strong>장소 :</strong>  -->
                      <label name="location">&nbsp; {{$target_scene->location}} </label> &nbsp;&nbsp;
                      </div>
                      <div style="display:flex; text-align:left; margin:10px;">
                        <!-- <strong>씬 설명 :</strong> -->
                        <span style="font-weight:bold">シーン説明 : </span>
                        <label name="date">&nbsp; {{$target_scene->scene_summary}} </label>
                      </div>
                      @endif
                      @endforeach
                    </div>
                    <!-- <div style=" flex:0.5;" /></div> -->
                  </div>
                  <div style="display: flex" >

                    <!-- <div style=" flex:0.5; height:400px" /></div> -->

                      <div id="conti_area"
                         style=" flex: 1.5; overflow-x:hidden; overflow-y:auto; margin:7px; padding:10px; background-color:white; border:7px solid #bfbfbf" />
                         <div style="background-color:#bfbfbf; color:white"><span style="font-weight:bold; ">コンテ</span></div>
                         <br><br>
                         @foreach($target_continuitys as $target_continuity)
                         @if($target_continuity->scene_no == $scene->scene_no)
                         <img src="..{{$target_continuity->path}}{{$target_continuity->save_name}}" width="100%">
                         @endif
                         @endforeach
                      </div>

                      <div id="angle_area"
                         style=" flex: 1.5; overflow:auto; overflow-x:hidden; margin:7px; padding:10px; background-color:white; border:7px solid #bfbfbf" />
                         <div style="background-color:#bfbfbf; color:white"><span style="font-weight:bold">アングル</span></div>
                         <br><br>
                         @foreach($target_cameras as $target_camera)
                         @if($target_camera->scene_no == $scene->scene_no)
                         <div id="view_angle{{$target_camera->sequence}}">{{$target_camera->content}}</div>
                         @endif
                         @endforeach
                      </div>

                      <div id="script_area" class="script_area"
                         style=" flex: 6; overflow:auto; margin:7px; padding:10px; background-color:white; border:7px solid #bfbfbf" />
                         <div style="background-color:#bfbfbf; color:white"><span style="font-weight:bold">セリフ</span></div>
                         <br><br>
                         @foreach($target_character_scripts as $target_character_script)


                         @if($target_character_script->scene_no == $scene->scene_no)
                           @if($target_character_script->character_name)
                           <div id="view_script{{$target_character_script->sequence}}" style="display:flex; text-align:left; margin:10px; ">
                             @if( Auth::user()->user_no == $target_character_script->user_no )
                             <div style="flex:1.5; color:#E27689;">
                               <!-- <button class="btn btn-default">{{$target_character_script->character_name}}</button> -->
                               <strong style="color:#E27689">{{$target_character_script->character_name}}</strong>
                             </div>
                             <div style="flex:8.5; color:#E27689;">{!! nl2br($target_character_script->script) !!}</div>
                             @else

                             <div style="flex:1">
                               <strong>{{$target_character_script->character_name}}</strong>
                               <!-- <button class="btn btn-default">{{$target_character_script->character_name}}</button> -->
                             </div>
                             <div style="flex:8.5">{!! nl2br($target_character_script->script) !!}</div>
                             @endif
                           </div>
                           @endif

                           @if(!$target_character_script->character_name)
                           <br>
                           <div id="view_script{{$target_character_script->sequence}}" style="display:flex; text-align:left; margin:10px; padding:10px;">
                             <div style="flex:1.5"></div>
                             <div style="flex:8.5">{!! nl2br($target_character_script->script) !!}</div>
                           </div>
                           <br>
                           @endif
                         @endif
                         @endforeach
                      </div>

                      <div id="pre_script_area" class="pre_script_area" style="flex: 6; overflow:auto; text-align:left; display:none; background-color:white; margin:10px; padding:10px; border:7px solid #bfbfbf">


                        <div id="pre_script_area_script" style="display:none;">
                        @foreach($target_character_scripts as $target_character_script)
                        @if($target_character_script->scene_no == $scene->scene_no)
                        STARTMAINDIV
                          STARTCHARACTERDIV
                            {{$target_character_script->character_name}}
                          ENDDIV
                          STARTSCRIPTDIV
                            {!! nl2br($target_character_script->script) !!}
                          ENDDIV
                        ENDDIV
                        @endif
                        @endforeach
                        </div>


                        <div id="pre_script_area_pre_script" style="display:none;">
                        @foreach($target_pre_character_scripts as $target_pre_character_script)
                        @if($target_pre_character_script->scene_no == $scene->scene_no)
                        STARTMAINDIV
                          STARTCHARACTERDIV
                            {{$target_pre_character_script->character_name}}
                          ENDDIV
                          STARTSCRIPTDIV
                            {!! nl2br($target_pre_character_script->script) !!}
                          ENDDIV
                        ENDDIV
                        @endif
                        @endforeach
                        </div>

                        <div id="pre_script_area_result" >
                          test
                        </div>
                        <script>
                          pre_script_count++;

                          document.getElementById("pre_script_area_script").setAttribute("id", "pre_script_area_script_" + pre_script_count);
                          document.getElementById("pre_script_area_pre_script").setAttribute("id", "pre_script_area_pre_script_" + pre_script_count);
                          document.getElementById("pre_script_area_result").setAttribute("id", "pre_script_area_result_" + pre_script_count);


                          // document.getElementById("pre_script_area").
                        </script>

                      </div>

                    <!-- <div style=" flex:0.5" /></div> -->

                  </div>

                  <div style="padding:10px">
                    <button class="btn btn-primary btn-lg btn_view_pre_script" >バージョン管理</button>
                    <button class="btn btn-primary btn-lg" onclick="location.href='{{url('/script_update')}}/{{$script_no}}/{{$scene->scene_no}}'" id="btn_script_add">修正</button>
                    <button class="btn btn-primary btn-lg" onclick="location.href='{{url('/script_delete')}}/{{$script_no}}/{{$scene->scene_no}}'" id="btn_script_delete">削除</button>
                  </div>
              </div>
              <!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
            </div>
          </td>
        </tr>
            @endif
          @endforeach
        @endforeach
      </table>
    </div>
    </div>
  </section>

</div>

<!-- 배우 추가를 위한 모달창 -->
<div class="modal fade" id="character_add_list" >
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- header -->
      <div class="modal-header">
        <!-- 닫기(x) 버튼 -->
        <button type="button" class="close" data-dismiss="modal">×</button>
        <!-- header title -->
        <h4 class="modal-title">配役追加</h4>
      </div>
      <!-- body -->
      <form class="form_character_add" action="{{ url('/character_add') }}/{{ $script_no }}" onkeydown="return captureReturnKey(event)" method="post">
        {{ csrf_field() }}
        <input id="hidden_characterCount" type="hidden" name="characterCount">
        <!-- 배우리스트<br> -->
        <div class="modal-content-script-actor" style="padding: 10px 0px 0px 50px;">



          <div class="script_actor_add_list">

            <div class="actor_list">

              <ul class="nav nav-tabs">
                <li class="active">
                  <a data-toggle="tab" href="#actor-tab-1" aria-expanded="true">
                    <i class="fa fa-user"></i>
                    主演俳優
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#actor-tab-2" aria-expanded="false">
                    <i class="fa fa-user"></i>
                    助演俳優
                  </a>
                </li>
              </ul>

            </div>
            <div class="tab-content">
              <!-- 주연 -->
              <div id="actor-tab-1" class="tab-pane active">
                <table class="script_actor_add_table">
                    @foreach($actor_lists as $actor_list)
                      @if($actor_list->position_no == 2000)
                      <tr>
                        <td>
                          <img class="img-circle m-t-xs script_actor_add_img" src="{{ asset('storage/'.$actor_list->path.$actor_list->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
                        </td>
                        <td>
                          <a data-toggle="tab" href="#staff-info-{{$actor_list->user_no}}">
                            <b>
                            {{$actor_list->name}}
                            </b>
                          </a>
                        </td>
                        <td> {{$actor_list->birth}} </td>
                        <td>
                          @if($actor_list->gender == "m")
                            <span class="label label-primary">m</span>
                          @else
                            <span class="label label-danger">w</span>
                          @endif
                        </td>
                        <td>
                          <span class="label label-default">主演俳優</span>
                        </td>
                      </tr>
                      @endif
                    @endforeach
                </table>
              </div>
              <!-- 조연 -->
              <div id="actor-tab-2"  class="tab-pane">
                <table class="script_actor_add_table">
                    @foreach($actor_lists as $actor_list)
                      @if($actor_list->position_no != 2000)
                      <tr>
                        <td>
                          <img class="img-circle m-t-xs script_actor_add_img" src="{{ asset('storage/'.$actor_list->path.$actor_list->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
                        </td>
                        <td>
                          <a data-toggle="tab" href="#staff-info-{{$actor_list->user_no}}">
                            <b>
                            {{$actor_list->name}}
                            </b>
                          </a>
                        </td>
                        <td> {{$actor_list->birth}} </td>
                        <td>
                          @if($actor_list->gender == "m")
                            <span class="label label-primary">m</span>
                          @else
                            <span class="label label-danger">w</span>
                          @endif
                        </td>
                        <td>
                          @if($actor_list->position_no == 2000)
                          <span class="label label-default">主演俳優</span>
                          @elseif($actor_list->position_no == 2001)
                          <span class="label label-default">助演俳優</span>
                          @else
                          <span class="label label-default">端役俳優</span>
                          @endif
                        </td>
                      </tr>
                      @endif
                    @endforeach
                </table>
              </div>
            </div>

          </div> <!-- script_actor_add_list  end-->
          <div class="script_actor_add_info">

            <div class="ibox-content">
              <div class="tab-content">
                <div id="staff-info-0" class="tab-pane active">
                  <div class="staff_info_title">
                    <b>俳優情報</b>
                  </div>
                  <div class="staff_info_detail">
                      <table class="staff_info_detail_table table">
                        <tr>
                          <td class="staff_info_detail_table_label">ニックネーム</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>生年月日</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>性別</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>体の情報</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>地域</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>メールアドレス</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>電話番号</td>
                          <td>-</td>
                        </tr>
                      </table>
                  </div>

                </div>
                @foreach($actor_lists as $actor_list)
                <div id="staff-info-{{$actor_list->user_no}}" class="tab-pane">
                  <div class="staff_info_title">
                    <div class="col-md-5 col-lg-5">
                      <img class="img-circle m-t-xs script_actor_info_img" src="{{ asset('storage/'.$actor_list->path.$actor_list->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
                    </div>
                    <div class="col-md-7 col-lg-7">
                      <div class="staff_info_title_name">
                        {{$actor_list->name}}
                      </div>
                      <div class="staff_info_title_about">
                        <span>about</span>
                        <br>
                        {{$actor_list->introduce}}
                      </div>
                    </div>
                  </div>
                  <div class="staff_info_detail">
                      <table class="table">
                        <tr>
                          <td class="staff_info_detail_table_label">ニックネーム</td>
                          <td>{{$actor_list->stage_name}}</td>
                        </tr>
                        <tr>
                          <td>生年月日</td>
                          <td>{{$actor_list->birth}}</td>
                        </tr>
                        <tr>
                          <td>性別</td>
                          <td>{{$actor_list->gender}}</td>
                        </tr>
                        <tr>
                          <td>体の情報</td>
                          <td>{{$actor_list->height}}cm / {{$actor_list->weight}}kg</td>
                        </tr>
                        <tr>
                          <td>地域</td>
                          <td>{{$actor_list->local}}</td>
                        </tr>
                        <tr>
                          <td>メールアドレス</td>
                          <td>{{$actor_list->email}}</td>
                        </tr>
                        <tr>
                          <td>電話番号</td>
                          <td>{{$actor_list->tel}}</td>
                        </tr>
                      </table>
                  </div>

                </div>
                @endforeach
              </div>
            </div>
            <!-- ibox-content end -->
          </div>

        </div><hr>
        <div class="character-modal-body">
          <button type="button" id="btn_character_actor_create" class="btn btn-primary">俳優・配役追加</button>

          <div class="character_actor_area">
            <table class="table">
              <tr>
                <td>配役</td>
                <td>俳優</td>
                <td>説明</td>
              </tr>
            </table>
          </div>

        </div>
        <!-- Footer -->
        <div class="modal-footer">
          <button id="btn_character_add" class="btn btn-primary" >追加</button>
          <button class="btn btn-primary" data-dismiss="modal">キャンセル</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection
