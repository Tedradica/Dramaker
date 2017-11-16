@extends('layout')

@section('title','スケジュール')

@section('content')


<script>
var staff_info;

$(document).ready(function(){

// // console.time("runtime");
//
//   var drama_no = $("#schedule_drama_no").val();
//   var url = $(".schedule_info").attr('data-link')+ "/" + drama_no;
//
//   console.log(drama_no);
//   console.log(url);
//
//   $.ajax({
//     url: url,
//     type:'GET',
//     success: function(data) {
//       // alert(result);
//       console.log("성공");
//       staff_info = JSON.parse(data);
//       console.log(staff_info);
//     }
//   });


  //날씨 추가
  //날씨에 local이 한국어로 되어있지않고, weather_am,pm을 가져오지 못해 javascript로 처리

  $("<img>").attr({
    // src:"http://54.92.37.34/dramaker/public/images/weather/"+cloud_status[{!!"'".$weather[0]->weather_am."'"!!}].icon+".png",
    src:"http://www.dramaker.net/images/weather/"+cloud_status[{!!"'".$weather[0]->weather_am."'"!!}].icon+".png",
  }).appendTo( $("#schedule_weather_am")  );
  $("<img>").attr({
    // src:"http://54.92.37.34/dramaker/public/images/weather/"+cloud_status[{!!"'".$weather[0]->weather_pm."'"!!}].icon+".png",
    src:"http://www.dramaker.net/images/weather/"+cloud_status[{!!"'".$weather[0]->weather_pm."'"!!}].icon+".png",
  }).appendTo( $("#schedule_weather_pm")  );


});

// console.timeEnd("runtime");
</script>

<script src="{{ asset('js/weather.js') }}"></script>


<div id="main">
  <section id="schedule_write_title_section" class="two">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/production') }}">制作現場</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/production_drama_view',[$schedule[0]->drama_no]) }}">作品の情報</a></li>
      <li class="breadcrumb-item"><a href="{{ URL::previous() }}">スケジュール</a></li>
      <li class="breadcrumb-item active">スケジュールの作成</a></li>
    </ol>
  </section>

<section id="schedule_read_section" class="three">

  <form class="" action="{{ url('/schedule_modify') }}" method="get">

    <input type="hidden" name="drama_no" value="{{$schedule[0]->drama_no}}">
    <input type="hidden" name="schedule_no" value="{{$schedule[0]->schedule_no}}">

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
            </div>
            <div class="ibox-content">
              <table id="schedule_info_weather">
                <tr id="schedule_info_weather_title">
                  <td> 地益 </td>
                  <td> 最低気温 </td>
                  <td> 最高気温 </td>
                  <td> 午前 </td>
                  <td> 午後 </td>
                </tr>
                <tr id="schedule_info_weather_content">
                  <td style="color:gray;" id="schedule_weather_location">{{ $weather[0]->local }} </td>
                  <td style="color:gray;" id="schedule_weather_lowest"> {{ $weather[0]->lowest_temperature }} </td>
                  <td style="color:black;" id="schedule_weather_highest"> {{ $weather[0]->highest_temperature }} </td>
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
            </tr>

            @for($i = 0; $i < 3 ; $i++)
              @if(isset($meetting[$i]))
                <tr class="schedule_meetting_tr">
                  <td>{{$i+1}}</td>
                  <td>{{$meetting[$i]['time']}}</td>
                  <td>{{$meetting[$i]['content']}}</td>
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
                </tr>
              @else
              @endif
            @endfor
        </table>
      </div>
    </div>

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
            </tr>
            @foreach($schedule_summary as $summary)
            <tr>
              <td>{{$summary->scene_no}}</td>
              <td>{{$summary->location}}</td>
              <td>{{$summary->mden}}</td>
              <td>{{$summary->sol}}</td>
              <td>{{$summary->ie}}</td>
              <td>{{$summary->scene_summary}}</td>
              <td>{{$summary->etc}}</td>
              <td>
                @if($summary->schedule_status == 0)
                <button type="button" class="btn btn-default btn-sm" name="button">撮影前</button>
                @else
                <button type="button" class="btn btn-primary btn-sm" name="button">撮影終わり</button>
                @endif
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>

    <div class="schedule_read_team_wrapper">

      @foreach($team_schedules as $team_schedule)
      <div class="ibox float-e-margins schedule_read_team_ibox">
        <div class="ibox-title">
          <b>{{$team_schedule['team_type']}}</b>
        </div>
        <div class="ibox-content">
          <div class="schedule_read_staff">
            @foreach($team_schedule['schedule'] as $schedule)
              @if($schedule->type == "staff")
                  <div class="schedule_read_staff_info">
                    <img class="img-circle" src= {{ asset('storage/image/user/users_profile_'.$schedule->user_no.'.jpg') }} onerror="this.src=`{{ asset('images/test_img.png') }}`" >

                    <!-- <img class="img-circle" src="http://54.92.37.34/dramaker/public/storage/image/user/users_profile_{{$schedule->user_no}}.jpg" alt=""> -->
                    <ul>
                      <li>{{$schedule->name}}</li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div>
              @endif
            @endforeach
          </div>
          <div class="schedule_read_todo">
            <ul>

            @foreach($team_schedule['schedule'] as $schedule)
              @if($schedule->type == "todo")
                <li>
                  {{$schedule->prop}}
                </li>
              @endif
            @endforeach
          </ul>
          </div>
        </div>
      </div>
      @endforeach

    </div>

    <div class="schedule_control">
      <button type="submit" class="btn btn-primary" > 修正 </button>
      <button type="button" class="btn btn-default" name="button">戻る</button>
    </div>

  </form>

</section>
</div>


@endsection
