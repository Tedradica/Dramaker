@extends('layout')

@section('title','スケジュール修正')

@section('content')

<script>
var staff_info;

$(document).ready(function(){

// console.time("runtime");

  var drama_no = $("#schedule_drama_no").val();
  var url = $(".schedule_info").attr('data-link')+ "/" + drama_no;

  console.log(drama_no);
  console.log(url);

  $.ajax({
    url: url,
    type:'GET',
    success: function(data) {
      // alert(result);
      console.log("성공");
      staff_info = JSON.parse(data);
      console.log(staff_info);
    }
  });

  //날씨 추가
  //날씨에 local이 한국어로 되어있지않고, weather_am,pm을 가져오지 못해 javascript로 처리

  $("<img>").attr({
    src:"http://www.dramaker.net/images/weather/"+cloud_status[{!!"'".$weather[0]->weather_am."'"!!}].icon+".png",
  }).appendTo( $("#schedule_weather_am")  );
  $("<img>").attr({
    src:"http://www.dramaker.net/images/weather/"+cloud_status[{!!"'".$weather[0]->weather_pm."'"!!}].icon+".png",
  }).appendTo( $("#schedule_weather_pm")  );



});

// console.timeEnd("runtime");

</script>

<!-- weather -->
<script src="{{ asset('js/weather.js') }}"></script>



<div id="main">
<section id="schedule_write_title_section" class="two">
  <div class="schedule_write_title">
    <h2>スケジュール 修正</h2>
  </div>
</section>

<section id="schedule_write_section" class="three" >

  <!-- form -->
    {{ csrf_field() }}

    <div class="schedule_info" data-link="{{ url('/schedule/staff_get') }}">

        <input type="hidden" id="schedule_drama_no" name="drama_no" value="{{$schedule[0]->drama_no}}">
        <input type="hidden" id="schedule_no" name="schedule_no" value="{{$schedule[0]->schedule_no}}">


        <span>
          <p><strong>{{$date[0]}}年 {{$date[1]}}月 {{$date[2]}}日 </strong></p>
          <input type="hidden" id="default_date" name="" value="{{$date[0].'-'.$date[1].'-'.$date[2]}}">
        </span>

        <table id="schedule_table_info">
          <tr>
            <td>
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <i class="fa fa-film"></i>
                  <b>撮影回数</b>
                </div>
                <div class="ibox-content" id="schedule_sequence_input">
                  <!-- {{$schedule_number}}회차중 -->
                  <input type="text" class="form-control" value="{{$schedule[0]->number}}">
                </div>
              </div>
            </td>
            <td>
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <i class="fa fa-cloud"></i>
                  <b>天気</b>
                  <button type="button" id="schedule_info_weather_add_btn" class="btn btn-default btn-sm" >地益選択</button>
                </div>
                <div class="ibox-content">
                  <table id="schedule_info_weather" data-link="{{ url('/schedule_weather') }}" data-check-link="{{ url('/weather_check') }}" data-get-link="{{ url('/schedule_weather_get') }}" >
                    <tr id="schedule_info_weather_title">
                      <td> 地益 </td>
                      <td> 最低気温 </td>
                      <td> 最高気温 </td>
                      <td> 午前 </td>
                      <td> 午後 </td>
                    </tr>
                    <tr id="schedule_info_weather_content">
                      <td style="color:gray;" id="schedule_weather_location" data-elocal="{{$weather[0]->local}}"> {{$weather[0]->local}} </td>
                      <td style="color:gray;" id="schedule_weather_lowest"> {{$weather[0]->lowest_temperature}} </td>
                      <td style="color:black;" id="schedule_weather_highest"> {{$weather[0]->highest_temperature}} </td>
                      <td style="color:gray;" id="schedule_weather_am">  </td>
                      <td style="color:gray;" id="schedule_weather_pm">  </td>
                    </tr>
                  </table>
                </div>
              </div>
            </td>
            <td>
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <i class="fa fa-group"></i>
                  <b>スタッフ</b>
                </div>
                <div class="ibox-content">
                  <table>
                    <tr>
                      <td>監督</td>
                      <td>
                        @if($director->isEmpty())
                        @else{{$director[0]->name}}
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>作家</td>
                      <td>
                        @if($author->isEmpty())
                        @else{{$author[0]->name}}
                        @endif
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </td>
          </tr>
        </table>

        <div class="ibox float-e-margins">
          <div class="ibox-title">
            集合場所
          </div>
          <div class="ibox-content">
            <table class="table table-hover meetting_table">
                <tr>
                  <td><h5>-</h5></td>
                  <td><h5>時間</h5></td>
                  <td><h5>場所</h5></td>
                  <td><h5>チーム</h5></td>
                  <td><h5>地図</h5></td>
                  <td><h5>-</h5></td>
                </tr>


                @for($i = 0; $i < 3 ; $i++)
                  @if(isset($meetting[$i]))
                    <tr class="schedule_meetting_tr">
                      <td>{{$i+1}}</td>
                      <td>
                        <span class="meetting_time">
                          {{$meetting[$i]['time']}}
                        </span>
                      </td>
                      <td>
                        <span class="meetting_location">
                          {{$meetting[$i]['content']}}
                        </span>
                      </td>
                      <td>
                        @foreach($meetting[$i]['team'] as $team)
                          <span class="tag label label-primary" team-no="{{$team['team_no']}}" style="margin-right:5px;">
                            {{$team['team_type']}}
                          </span>
                        @endforeach
                      </td>
                      <td>
                        <i class="fa fa-map-marker"></i>
                      </td>
                      <td>
                        <button type="button" class="btn btn-default btn-sm schedule_meetting" data-meetting-no = "{{$i+1}}">
                          <i class="fa fa-plus"></i>
                        </button>
                      </td>
                    </tr>
                  @else
                    <tr class="schedule_meetting_tr">
                      <td>{{$i+1}}차</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <button type="button" class="btn btn-default btn-sm schedule_meetting" data-meetting-no = "{{$i+1}}">
                          <i class="fa fa-plus"></i>
                        </button>
                      </td>
                    </tr>
                  @endif
                @endfor
            </table>
          </div>
        </div>
      </div>

      <div class="schedule_content">
        <div class="schedule_content_left">

          <div class="ibox float-e-margins schedule_scene_info">
            <div class="ibox-title">
              シーン
            </div>
            <div class="ibox-content">
                <div class="schedule_scene_info_sort" data-link="{{ url('/scene_sort') }}">
                  <span>整列条件</span>
                  <button type="button" class="btn btn-primary btn-sm" data-sort="location" onclick="schedule_scene_sort('location')" >場所</button>
                  <button type="button" class="btn btn-primary btn-sm" data-sort="scene_no"  onclick="schedule_scene_sort('scene_no')" >番号</button>
                </div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>シーン</th>
                      <th width="50px">追加</th>
                    </tr>
                  </thead>
                  <tbody id="schedule_scene_info_table">

                  @foreach($scenes as $scene)
                  <tr>
                    <td>
                      <li>
                        <button type="button" class="schedule_scene_info_btn btn btn-default">
                          #{{$scene->scene_no}}
                          <span class="caret" ></span>
                        </button>
                        <ul id="schedule_scene_{{$scene->scene_no}}">
                          <li class="schedule_scene_add_location">
                            <b>場所:</b>
                            <span>{{$scene->location}}</span>
                          </li>
                          <li class="schedule_scene_add_summary">
                            <b>情報:</b>
                            <span>{{$scene->scene_summary}}</span>
                          </li>
                          <li class="schedule_scene_add_status">
                            @if($scene->status == 0)
                            <b>進行状態:</b>
                            <span class="tag label label-primary" style="margin-right:2px;font-size:12px;">
                              撮影前
                            </span>
                            <!-- <button type="button" class="btn btn-primary btn-sm" name="button">촬영전</button> -->
                            @else
                            <b>進行状態:</b>
                            <span class="tag label label-primary" style="margin-right:2px;font-size:12px;">
                              撮影終わり
                            </span>
                            <!-- <button type="button" class="btn btn-warning btn-sm" name="button">촬영완료</button> -->
                            @endif
                          </li>
                          <li class="schedule_scene_characters">
                            <b>登場人物</b>
                            <div class="characters">

                              @foreach($scene->characters as $character)
                                @if($character->character_name == "")

                                @else
                                <span class="tag label label-default" data-user-no="{{$character->user_no}}"
                                  data-user-name="{{$character->name}}" data-user-position="{{$character->position_no}}" data-team-no="{{$character->team_no}}"
                                  style="margin-right:2px;font-size:12px;">
                                  {{$character->character_name}}
                                </span>
                                @endif
                              @endforeach
                            </div>
                          </li>
                        </ul>
                      </li>
                    </td>
                    <td>
                      @if($scene->status == 0)
                      <button type="button" class="btn btn-primary btn-sm" name="button" onclick="schedule_scene_add({{$scene->scene_no}})">
                        <span class="glyphicon glyphicon-plus"></span>
                      </button>
                      @else
                      <button type="button" class="btn btn-default btn-sm" disabled="disabled" name="button" onclick="schedule_scene_add({{$scene->scene_no}})">
                        <span class="glyphicon glyphicon-ok"></span>
                      </button>
                      @endif
                    </td>
                  </tr>
                  @endforeach

                  </tbody>
                </table>

            </div>
          </div>


        </div>
        <div class="schedule_content_right">

          <div class="ibox float-e-margins schedule_scene_ibox">
            <div class="ibox-title">
              シーンスケジュール
            </div>
            <div class="ibox-content">
              <div class="schedule_scene">
                <table class="table table-striped" id="schedule_table">
                  <tr>
                    <th class="scene_no">s#</th>
                    <th class="scene_location">場所</th>
                    <th class="scene_dn">D/N</th>
                    <th class="scene_sol">S/O/L</th>
                    <th class="scene_ie">I/E</th>
                    <th class="scene_summary">内容</th>
                    <th class="scene_etc">備考</th>
                    <th class="scene_status">進行状態</th>
                    <th class="scene_delete_btn"> - </th>
                  </tr>
                  @foreach($schedule_summary as $summary)
                  <tr class="sequence_{{$summary->sequence}}">
                    <td class="scene_no">{{ trim($summary->scene_no) }}</td>
                    <td class="scene_location">{{$summary->location}}</td>
                    <td class="scene_dn">
                      <select class="scene_dn_select form-control">
                        @if($summary->mden == 'd')
                        <option value="d" selected>d</option>
                        <option value="n">n</option>
                        @else
                        <option value="d">d</option>
                        <option value="n" selected>n</option>
                        @endif
                      </select>
                    </td>
                    <td class="scene_sol">
                      <select class="scene_sol_select form-control">
                        @if($summary->sol == 's')
                        <option value="s" selected>s</option>
                        <option value="o">o</option>
                        <option value="l">l</option>
                        @elseif($summary->sol == 'o')
                        <option value="s" >s</option>
                        <option value="o" selected>o</option>
                        <option value="l">l</option>
                        @else
                        <option value="s">s</option>
                        <option value="o">o</option>
                        <option value="l" selected>l</option>
                        @endif
                      </select>
                    </td>
                    <td class="scene_ie">
                      <select class="scene_ie_select form-control">
                        @if($summary->ie == 'i')
                        <option value="i" selected>i</option>
                        <option value="e">e</option>
                        @else
                        <option value="i">i</option>
                        <option value="e" selected>e</option>
                        @endif
                      </select>
                    </td>
                    <td class="scene_summary">{{$summary->scene_summary}}</td>
                    <td class="scene_etc">
                      <input type="text" class="form-control" value="{{$summary->etc}}">
                    </td>
                    <td class="scene_status">
                      <!-- 촬영전 -->
                      @if($summary->schedule_status == 0)
                      <input type="checkbox" class="" data-toggle="toggle" data-on="撮影終わり" data-off="撮影前" data-onstyle="success" data-offstyle="default">
                      <!-- 촬영끝 -->
                      @else
                      <input type="checkbox" checked data-toggle="toggle" data-on="撮影終わり" data-off="撮影前" data-onstyle="success" data-offstyle="default">
                      @endif
                    </td>
                    <td class="scene_delete_btn">
                      <button class="btn btn-danger btn-sm">削除</button>
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>

          <div class="ibox float-e-margins schedule_team_ibox">
            <div class="ibox-title">
              <b>TEAM SCHEDULE</b>
            </div>
            <div class="ibox-content team_schedule_ibox" data-link="{{ url('/schedule_team_staff') }}">

              <div class="team_schedule_tab">
                <ul class="nav nav-tabs">
                  <li class>
                    <a data-toggle="tab" href="#tab-1" aria-expanded="false">
                      演出
                        @if( count($team_schedules[0]) == 0 )
                          <span class="badge" data-badge-no="1"></span>
                        @else
                          <span class="badge" data-badge-no="1">
                            {{ count($team_schedules[0]) }}
                          </span>
                        @endif
                    </a>
                  </li>
                  <li class>
                    <a data-toggle="tab" href="#tab-2" aria-expanded="false">
                      制作
                      @if( count($team_schedules[1]) == 0 )
                        <span class="badge" data-badge-no="2"></span>
                      @else
                        <span class="badge" data-badge-no="2">
                          {{ count($team_schedules[1]) }}
                        </span>
                      @endif
                    </a>
                  </li>
                  <li class>
                    <a data-toggle="tab" href="#tab-3" aria-expanded="false">
                      小道具
                      @if( count($team_schedules[2]) == 0 )
                        <span class="badge" data-badge-no="3"></span>
                      @else
                        <span class="badge" data-badge-no="3">
                          {{ count($team_schedules[2]) }}
                        </span>
                      @endif
                    </a>
                  </li>
                  <li class>
                    <a data-toggle="tab" href="#tab-4" aria-expanded="false">
                      美術
                      @if( count($team_schedules[3]) == 0 )
                        <span class="badge" data-badge-no="4"></span>
                      @else
                        <span class="badge" data-badge-no="4">
                          {{ count($team_schedules[3]) }}
                        </span>
                      @endif
                    </a>
                  </li>
                  <li class>
                    <a data-toggle="tab" href="#tab-5" aria-expanded="false">
                      衣装
                      @if( count($team_schedules[4]) == 0 )
                        <span class="badge" data-badge-no="5"></span>
                      @else
                        <span class="badge" data-badge-no="5">
                          {{ count($team_schedules[4]) }}
                        </span>
                      @endif
                    </a>
                  </li>
                  <li class>
                    <a data-toggle="tab" href="#tab-6" aria-expanded="false">
                      メーキャップ
                      @if( count($team_schedules[5]) == 0 )
                        <span class="badge" data-badge-no="6"></span>
                      @else
                        <span class="badge" data-badge-no="6">
                          {{ count($team_schedules[5]) }}
                        </span>
                      @endif
                    </a>
                  </li>
                  <li class>
                    <a data-toggle="tab" href="#tab-7" aria-expanded="false">
                      撮影/照明
                      @if( count($team_schedules[6]) == 0 )
                        <span class="badge" data-badge-no="7"></span>
                      @else
                        <span class="badge" data-badge-no="7">
                          {{ count($team_schedules[6]) }}
                        </span>
                      @endif
                    </a>
                  </li>
                  <li class>
                    <a data-toggle="tab" href="#tab-8" aria-expanded="false">
                      特殊効果/CG
                      @if( count($team_schedules[7]) == 0 )
                        <span class="badge" data-badge-no="8"></span>
                      @else
                        <span class="badge" data-badge-no="8">
                          {{ count($team_schedules[7]) }}
                        </span>
                      @endif
                    </a>
                  </li>
                  <li class="active">
                    <a data-toggle="tab" href="#tab-9" aria-expanded="true">
                      俳優
                      @if( count($team_schedules[8]) == 0 )
                        <span class="badge" data-badge-no="9"></span>
                      @else
                        <span class="badge" data-badge-no="9">
                          {{ count($team_schedules[8]) }}
                        </span>
                      @endif
                    </a>
                  </li>
                  <li class>
                    <a data-toggle="tab" href="#tab-10" aria-expanded="false">
                      エキストラ/車両
                      @if( count($team_schedules[9]) == 0 )
                        <span class="badge" data-badge-no="10"></span>
                      @else
                        <span class="badge" data-badge-no="10">
                          {{ count($team_schedules[9]) }}
                        </span>
                      @endif
                    </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="tab-1" class="tab-pane" data-team-no="1" data-team-name="direct_team" >
                    <b>演出チーム</b>
                    <button type="button" class="btn btn-primary btn-sm team_schedule_addBtn" name="button">
                      <i class="fa fa-plus"></i>
                    </button>
                    <hr>
                    <div class="team_schedule_content direct_team_todo">
                      <div class="team_schedule_content_staff">
                        @foreach($team_schedules[0] as $staff)
                          @if($staff->type == "staff")
                            <div class="team_schedule_staff" sequence="{{$staff->sequence}}" data-user-no="{{$staff->user_no}}" data-user-count="{{$staff->data_count}}" data-user-name="{{$staff->name}}">
                              <img class="img-circle" src="http://www.dramaker.net/storage/image/user/users_profile_{{$staff->user_no}}.jpg" style="width:60px;height:60px;" alt="">
                              <ul>
                                <li><b>{{$staff->name}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->tel}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->email}}</b></li>
                              </ul>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="team_schedule_content_todo">
                        @foreach($team_schedules[0] as $todo)
                          @if($todo->type == "todo")
                            <li class="list-group-item" sequence="{{$todo->sequence}}" data-user-no="{{$todo->user_no}}" data-user-count="{{$todo->data_count}}">
                              {{$todo->prop}}
                            </li>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div id="tab-2" class="tab-pane" data-team-no="2" data-team-name="produce_team">
                    <b>制作チーム</b>
                    <button type="button" class="btn btn-primary btn-sm team_schedule_addBtn" name="button">
                      <i class="fa fa-plus"></i>
                    </button>
                    <hr>
                    <div class="team_schedule_content produce_team_todo">
                      <div class="team_schedule_content_staff">
                        @foreach($team_schedules[1] as $staff)
                          @if($staff->type == "staff")
                            <div class="team_schedule_staff" sequence="{{$staff->sequence}}" data-user-no="{{$staff->user_no}}" data-user-count="{{$staff->data_count}}" data-user-name="{{$staff->name}}">
                              <img class="img-circle" src="http://www.dramaker.net/storage/image/user/users_profile_{{$staff->user_no}}.jpg" style="width:60px;height:60px;" alt="">
                              <ul>
                                <li><b>{{$staff->name}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->tel}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->email}}</b></li>
                              </ul>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="team_schedule_content_todo">
                        @foreach($team_schedules[1] as $todo)
                          @if($todo->type == "todo")
                            <li class="list-group-item" sequence="{{$todo->sequence}}" data-user-no="{{$todo->user_no}}" data-user-count="{{$todo->data_count}}">
                              {{$todo->prop}}
                            </li>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div id="tab-3" class="tab-pane" data-team-no="3" data-team-name="product_team">
                    <b>小道具チーム</b>
                    <button type="button" class="btn btn-primary btn-sm team_schedule_addBtn" name="button">
                      <i class="fa fa-plus"></i>
                    </button>
                    <hr>
                    <div class="team_schedule_content product_team_todo">
                      <div class="team_schedule_content_staff">
                        @foreach($team_schedules[2] as $staff)
                          @if($staff->type == "staff")
                            <div class="team_schedule_staff" sequence="{{$staff->sequence}}" data-user-no="{{$staff->user_no}}" data-user-count="{{$staff->data_count}}" data-user-name="{{$staff->name}}">
                              <img class="img-circle" src="http://www.dramaker.net/storage/image/user/users_profile_{{$staff->user_no}}.jpg" style="width:60px;height:60px;" alt="">
                              <ul>
                                <li><b>{{$staff->name}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->tel}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->email}}</b></li>
                              </ul>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="team_schedule_content_todo">
                        @foreach($team_schedules[2] as $todo)
                          @if($todo->type == "todo")
                            <li class="list-group-item" sequence="{{$todo->sequence}}" data-user-no="{{$todo->user_no}}" data-user-count="{{$todo->data_count}}">
                              {{$todo->prop}}
                            </li>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div id="tab-4" class="tab-pane" data-team-no="4" data-team-name="art_team">
                    <b>美術チーム</b>
                    <button type="button" class="btn btn-primary btn-sm team_schedule_addBtn" name="button">
                      <i class="fa fa-plus"></i>
                    </button>
                    <hr>
                    <div class="team_schedule_content art_team_todo">
                      <div class="team_schedule_content_staff">
                        @foreach($team_schedules[3] as $staff)
                          @if($staff->type == "staff")
                            <div class="team_schedule_staff" sequence="{{$staff->sequence}}" data-user-no="{{$staff->user_no}}" data-user-count="{{$staff->data_count}}" data-user-name="{{$staff->name}}">
                              <img class="img-circle" src="http://www.dramaker.net/storage/image/user/users_profile_{{$staff->user_no}}.jpg" style="width:60px;height:60px;" alt="">
                              <ul>
                                <li><b>{{$staff->name}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->tel}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->email}}</b></li>
                              </ul>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="team_schedule_content_todo">
                        @foreach($team_schedules[3] as $todo)
                          @if($todo->type == "todo")
                            <li class="list-group-item" sequence="{{$todo->sequence}}" data-user-no="{{$todo->user_no}}" data-user-count="{{$todo->data_count}}">
                              {{$todo->prop}}
                            </li>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div id="tab-5" class="tab-pane" data-team-no="5" data-team-name="clothes_team">
                    <b>衣装チーム</b>
                    <button type="button" class="btn btn-primary btn-sm team_schedule_addBtn" name="button">
                      <i class="fa fa-plus"></i>
                    </button>
                    <hr>
                    <div class="team_schedule_content clothes_team_todo">
                      <div class="team_schedule_content_staff">
                        @foreach($team_schedules[4] as $staff)
                          @if($staff->type == "staff")
                            <div class="team_schedule_staff" sequence="{{$staff->sequence}}" data-user-no="{{$staff->user_no}}" data-user-count="{{$staff->data_count}}" data-user-name="{{$staff->name}}">
                              <img class="img-circle" src="http://www.dramaker.net/storage/image/user/users_profile_{{$staff->user_no}}.jpg" style="width:60px;height:60px;" alt="">
                              <ul>
                                <li><b>{{$staff->name}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->tel}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->email}}</b></li>
                              </ul>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="team_schedule_content_todo">
                        @foreach($team_schedules[4] as $todo)
                          @if($todo->type == "todo")
                            <li class="list-group-item" sequence="{{$todo->sequence}}" data-user-no="{{$todo->user_no}}" data-user-count="{{$todo->data_count}}">
                              {{$todo->prop}}
                            </li>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div id="tab-6" class="tab-pane" data-team-no="6" data-team-name="style_team">
                    <b>メーキャップチーム</b>
                    <button type="button" class="btn btn-primary btn-sm team_schedule_addBtn" name="button">
                      <i class="fa fa-plus"></i>
                    </button>
                    <hr>
                    <div class="team_schedule_content style_team_todo">
                      <div class="team_schedule_content_staff">
                        @foreach($team_schedules[5] as $staff)
                          @if($staff->type == "staff")
                            <div class="team_schedule_staff" sequence="{{$staff->sequence}}" data-user-no="{{$staff->user_no}}" data-user-count="{{$staff->data_count}}" data-user-name="{{$staff->name}}">
                              <img class="img-circle" src="http://www.dramaker.net/storage/image/user/users_profile_{{$staff->user_no}}.jpg" style="width:60px;height:60px;" alt="">
                              <ul>
                                <li><b>{{$staff->name}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->tel}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->email}}</b></li>
                              </ul>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="team_schedule_content_todo">
                        @foreach($team_schedules[5] as $todo)
                          @if($todo->type == "todo")
                            <li class="list-group-item" sequence="{{$todo->sequence}}" data-user-no="{{$todo->user_no}}" data-user-count="{{$todo->data_count}}">
                              {{$todo->prop}}
                            </li>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div id="tab-7" class="tab-pane" data-team-no="7" data-team-name="camera_team">
                    <b>撮影/照明チーム</b>
                    <button type="button" class="btn btn-primary btn-sm team_schedule_addBtn" name="button">
                      <i class="fa fa-plus"></i>
                    </button>
                    <hr>
                    <div class="team_schedule_content camera_team_todo">
                      <div class="team_schedule_content_staff">
                        @foreach($team_schedules[6] as $staff)
                          @if($staff->type == "staff")
                            <div class="team_schedule_staff" sequence="{{$staff->sequence}}" data-user-no="{{$staff->user_no}}" data-user-count="{{$staff->data_count}}" data-user-name="{{$staff->name}}">
                              <img class="img-circle" src="http://www.dramaker.net/storage/image/user/users_profile_{{$staff->user_no}}.jpg" style="width:60px;height:60px;" alt="">
                              <ul>
                                <li><b>{{$staff->name}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->tel}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->email}}</b></li>
                              </ul>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="team_schedule_content_todo">
                        @foreach($team_schedules[6] as $todo)
                          @if($todo->type == "todo")
                            <li class="list-group-item" sequence="{{$todo->sequence}}" data-user-no="{{$todo->user_no}}" data-user-count="{{$todo->data_count}}">
                              {{$todo->prop}}
                            </li>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div id="tab-8" class="tab-pane" data-team-no="8" data-team-name="cg_team">
                    <b>特殊効果/CGチーム</b>
                    <button type="button" class="btn btn-primary btn-sm team_schedule_addBtn" name="button">
                      <i class="fa fa-plus"></i>
                    </button>
                    <hr>
                    <div class="team_schedule_content cg_team_todo">
                      <div class="team_schedule_content_staff">
                        @foreach($team_schedules[7] as $staff)
                          @if($staff->type == "staff")
                            <div class="team_schedule_staff" sequence="{{$staff->sequence}}" data-user-no="{{$staff->user_no}}" data-user-count="{{$staff->data_count}}" data-user-name="{{$staff->name}}">
                              <img class="img-circle" src="http://www.dramaker.net/storage/image/user/users_profile_{{$staff->user_no}}.jpg" style="width:60px;height:60px;" alt="">
                              <ul>
                                <li><b>{{$staff->name}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->tel}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->email}}</b></li>
                              </ul>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="team_schedule_content_todo">
                        @foreach($team_schedules[7] as $todo)
                          @if($todo->type == "todo")
                            <li class="list-group-item" sequence="{{$todo->sequence}}" data-user-no="{{$todo->user_no}}" data-user-count="{{$todo->data_count}}">
                              {{$todo->prop}}
                            </li>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div id="tab-9" class="tab-pane active" data-team-no="9" data-team-name="actor_team">
                    <b>俳優チーム</b>
                    <button type="button" class="btn btn-primary btn-sm team_schedule_addBtn" name="button">
                      <i class="fa fa-plus"></i>
                    </button>
                    <hr>
                    <div class="team_schedule_content actor_team_todo">
                      <div class="team_schedule_content_staff">
                        @foreach($team_schedules[8] as $staff)
                          @if($staff->type == "staff")
                            <div class="team_schedule_staff" sequence="{{$staff->sequence}}" data-user-no="{{$staff->user_no}}" data-user-count="{{$staff->data_count}}" data-user-name="{{$staff->name}}">
                              <img class="img-circle" src="http://www.dramaker.net/storage/image/user/users_profile_{{$staff->user_no}}.jpg" style="width:60px;height:60px;" alt="">
                              <ul>
                                <li><b>{{$staff->name}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->tel}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->email}}</b></li>
                              </ul>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="team_schedule_content_todo">
                        @foreach($team_schedules[8] as $todo)
                          @if($todo->type == "todo")
                            <li class="list-group-item" sequence="{{$todo->sequence}}" data-user-no="{{$todo->user_no}}" data-user-count="{{$todo->data_count}}">
                              {{$todo->prop}}
                            </li>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div id="tab-10" class="tab-pane" data-team-no="10" data-team-name="extra_team">
                    <b>エキストラ/車両チーム</b>
                    <button type="button" class="btn btn-primary btn-sm team_schedule_addBtn" name="button">
                      <i class="fa fa-plus"></i>
                    </button>
                    <hr>
                    <div class="team_schedule_content extra_team_todo">
                      <div class="team_schedule_content_staff">
                        @foreach($team_schedules[9] as $staff)
                          @if($staff->type == "staff")
                            <div class="team_schedule_staff" sequence="{{$staff->sequence}}" data-user-no="{{$staff->user_no}}" data-user-count="{{$staff->data_count}}" data-user-name="{{$staff->name}}">
                              <img class="img-circle" src="http://www.dramaker.net/storage/image/user/users_profile_{{$staff->user_no}}.jpg" style="width:60px;height:60px;" alt="">
                              <ul>
                                <li><b>{{$staff->name}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->tel}}</b></li>
                                <li><b style="font-size:13px;">{{$staff->email}}</b></li>
                              </ul>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="team_schedule_content_todo">
                        @foreach($team_schedules[9] as $todo)
                          @if($todo->type == "todo")
                            <li class="list-group-item" sequence="{{$todo->sequence}}" data-user-no="{{$todo->user_no}}" data-user-count="{{$todo->data_count}}">
                              {{$todo->prop}}
                            </li>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>

                </div>

              </div>


            </div>
          </div>

        </div>

      </div>


      <div class="schedule_control">
        <button type="button" class="btn btn-primary" id="schedule_modify_btn"  onclick="schedule_modify()" data-link="{{ url('/schedule_modify_save') }}" data-schedule-link="{{ url('/schedule/'.$schedule[0]->drama_no) }}"> 修正 </button>
        <button type="button" class="btn btn-default" name="button">閉じる</button>
      </div>



  <!-- ============================== modal ============================== -->

  <!-- 날씨 추가 -->
    <div id="weather" class="modal fade" role="dialog" data-link="{{ url('/local_weather_get') }}">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">天気</h4>
          </div>
          <div class="modal-body">

            <div class="weather_map">

              <div id="map_marker">

                <dl class="marker incheon" data-name="incheon">
                  <dt class="local_name">인천</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker seoul" data-name="seoul">
                  <dt class="local_name">서울</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker chuncheon" data-name="chuncheon">
                  <dt class="local_name">춘천</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker gangneung" data-name="gangneung">
                  <dt class="local_name">강릉</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker suwon" data-name="suwon">
                  <dt class="local_name">수원</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker seosan" data-name="seosan">
                  <dt class="local_name">서산</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker cheongju" data-name="cheongju">
                  <dt class="local_name">청주</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker andong" data-name="andong">
                  <dt class="local_name">안동</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker daejeon" data-name="daejeon">
                  <dt class="local_name">대전</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker jeonju" data-name="jeonju">
                  <dt class="local_name">전주</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker daegu" data-name="daegu">
                  <dt class="local_name">대구</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker pohang" data-name="pohang">
                  <dt class="local_name">포항</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker ulsan" data-name="ulsan">
                  <dt class="local_name">울산</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker mokpo" data-name="mokpo">
                  <dt class="local_name">목포</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker gwangju" data-name="gwangju">
                  <dt class="local_name">광주</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker yeosu" data-name="yeosu">
                  <dt class="local_name">여수</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker changwon" data-name="changwon">
                  <dt class="local_name">창원</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker busan" data-name="busan">
                  <dt class="local_name">부산</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker ulleung" data-name="ulleung">
                  <dt class="local_name">울릉도</dt>
                  <dd class="weather_img"></dd>
                </dl>
                <dl class="marker jeju" data-name="jeju">
                  <dt class="local_name">제주도</dt>
                  <dd class="weather_img"></dd>
                </dl>


              </div>
              <img id="korea_map" src="{{ asset('images/weather/korea_map2.png') }}" alt=""></img>

            </div>
            <div class="weather_info">
              <div class="weather_info_title">
                <div id="local_info_title">
                  天気予報
                </div>
                <div class="local_info">
                  <div class="local_info_left">
                    <div class="local_info_date"></div>
                    <div class="local_info_name"></div>
                    <div class="local_info_temperature"></div>
                  </div>
                  <div class="local_info_right">
                    <div class="local_info_status">
                      <div id="local_info_img1">
                        <div class="local_info_img_title">AM</div>
                        <div class="local_info_img"></div>
                        <div class="local_info_weather_status"></div>
                      </div>
                      <div id="local_info_img2">
                        <div class="local_info_img_title">PM</div>
                        <div class="local_info_img"></div>
                        <div class="local_info_weather_status"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="weather_info_content">
                <table id="weather_info_table">
                  <tr>
                    <th>日付</th>
                    <th>午前</th>
                    <th>午後</th>
                    <th>最高</th>
                    <th>最低</th>
                  </tr>
                </table>
              </div>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" id="weather_add_btn" class="btn btn-default">追加</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
          </div>
        </div>

      </div>
    </div>

  <!-- 스케줄 수동 추가 modal -->
    <div class="modal fade" id="schedule_add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="modal-team-info">
            </div>

            <!-- 크기 제한, 스크롤 -->
            <div class="modal-staff-add">

              <label>スタッフ</label>
              <table id="schedule_staff_add_table">
                <thead></thead>
                <tbody></tbody>
              </table>

            </div>
            <hr>
            <div class="modal-schedule-add">
              <label>仕事追加</label>
              <table id="schedule_todo_add_table">
                <thead>
                  <tr>
                    <th class="team_schedule_todo">仕事</th>
                    <th class="team_schedule_todo_add">
                      <button type="button" class="btn btn-primary" id="todo_add_btn" name="button">
                        <span class="glyphicon glyphicon-plus"></span>
                      </button>
                    </th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="team_schedule_add()">追加</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">キャンセル</button>
          </div>
        </div>
      </div>
    </div>

    <!-- 집합시간 추가 modal -->
    <div class="modal fade" id="schedule_meetting_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


            <div class="schedule_meetting_content">

              <table class="table table-hover">
                <tr>
                  <th id="schedule_meetting_team_time_th">時間</th>
                  <th id="schedule_meetting_location_th">場所</th>
                </tr>
                <tr>
                  <td><input type="time" id="schedule_meetting_time" class="form-control" name="" value=""></td>
                  <td><input type="text" id="schedule_meetting_location" class="form-control" name="" value=""></td>
                </tr>
              </table>

              <div id="map"></div>

            </div>

            <hr>

            <div class="schedule_meetting_team">

              <p>チーム</p>

              <table>
                <tr>
                  <td><button type="button" class="btn btn-default schedule_meetting_team_btn" name="button" data-check-status="f" data-meeting-status="f" data-team-no="1" value="연출팀">演出</button></td>
                  <td><button type="button" class="btn btn-default schedule_meetting_team_btn" name="button" data-check-status="f" data-meeting-status="f" data-team-no="2" value="제작팀">制作</button></td>
                  <td><button type="button" class="btn btn-default schedule_meetting_team_btn" name="button" data-check-status="f" data-meeting-status="f" data-team-no="3">小道具</button></td>
                  <td><button type="button" class="btn btn-default schedule_meetting_team_btn" name="button" data-check-status="f" data-meeting-status="f" data-team-no="4">美術</button></td>
                  <td><button type="button" class="btn btn-default schedule_meetting_team_btn" name="button" data-check-status="f" data-meeting-status="f" data-team-no="5">衣装</button></td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-default schedule_meetting_team_btn" name="button" data-check-status="f" data-meeting-status="f" data-team-no="6">メーキャップ</button></td>
                  <td><button type="button" class="btn btn-default schedule_meetting_team_btn" name="button" data-check-status="f" data-meeting-status="f" data-team-no="7">撮影/照明</button></td>
                  <td><button type="button" class="btn btn-default schedule_meetting_team_btn" name="button" data-check-status="f" data-meeting-status="f" data-team-no="8">特殊効果</button></td>
                  <td><button type="button" class="btn btn-default schedule_meetting_team_btn" name="button" data-check-status="f" data-meeting-status="f" data-team-no="9">俳優</button></td>
                  <td><button type="button" class="btn btn-default schedule_meetting_team_btn" name="button" data-check-status="f" data-meeting-status="f" data-team-no="10">補助</button></td>
                </tr>
              </table>


            </div>

          </div>
          <div class="modal-footer">
            <button type="button" id="meetting_team_add" class="btn btn-primary" data-dismiss="modal"  >追加</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
          </div>
        </div>
      </div>
    </div>


  </section>
</div>

<!-- 구글 자동완성 기능 -->
<script type="text/javascript">



  var myLatlng = new google.maps.LatLng(37.549, 126.990);
  var mapOptions = {
  zoom: 12,
  center: myLatlng,
  mapTypeId: 'satellite'
  };
  var map = new google.maps.Map(document.getElementById('map'),
    mapOptions);

  map.setMapTypeId('roadmap');

  var autoComplete = new google.maps.places.Autocomplete(
  document.getElementById('schedule_meetting_location'), {
  types: ['(cities)']
  });

  var input = document.getElementById('schedule_meetting_location');
  var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(37.549, 126.990)
  );

  var searchBox = new google.maps.places.SearchBox(input, {
    bounds: defaultBounds
  });

  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    if(typeof markers != "undefined"){
      markers.forEach(function(marker) {
        marker.setMap(null);
      });
    }
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
      }
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });



// modal에서 map이 회색으로 표시되는 문제 해결
  $('#schedule_meetting_modal').on('shown.bs.modal',function(){
    google.maps.event.trigger(map,'resize');
  })





  // google.maps.event.addListener(autoComplete, 'place_changed', function() {
  //
  //   var place = autocomplete.getPlace();
  //
  //   if (place.geometry) {
  //   map.panTo(place.geometry.location);
  //   map.setZoom(15);
  //   }
  //
  // });

</script>
<style media="screen">

  /* google maps 자동완성기능이 modal에서 안보이기때문에 */
  /* z-index 수정 */
  .pac-container{
    z-index: 1070 !important;
  }
</style>


@endsection
