@extends('layout')

@section('title','作品チャート')

@section('content')

<link rel="stylesheet" href="{{ asset('css/c3.min.css') }}" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"/>
<script src="{{ asset('js/d3.min.js') }}"></script>
<!-- <script src="{{ asset('js/c3.min.js') }}"></script> -->

<div id="main">

  <section id="drama_chart_title" class="two">
    <h2>作品チャート</h2>
  </section>

  <section id="drama_chart_content" class="three">
    <div class="drama_chart_info">


      <!-- 드라마에 대한 정보들  -->

      <div class="drama_chart_info_left">

        <!-- 드라마 스태프 수 -->
        <div class="col-lg-6">
          <div class="drama_chart_info_widget">
            <div class="drama_chart_info_widget_left">
              <i class="fa fa-user fa-4x"></i>
            </div>
            <div class="drama_chart_info_widget_right">
              <span>スタッフ数</span>
              <div class="drama_chart_value">
                {{$staff_count}}
              </div>
            </div>
          </div>
        </div>
        <!-- 드라마 Scene 수 -->
        <div class="col-lg-6 drama_chart_widget">
          <div class="drama_chart_info_widget">
            <div class="drama_chart_info_widget_left">
              <i class="fa fa-film fa-4x"></i>
            </div>
            <div class="drama_chart_info_widget_right">
              <span>シーン数</span>
              <div class="drama_chart_value">
                {{$scene_count}}
              </div>
            </div>
          </div>
        </div>

        <!-- 드라마 진행상황  -->
        <div class="col-lg-12">
          <div class="drama_chart_info_widget">
            <div class="drama_chart_info_widget_left">
              <i class="fa fa-film fa-4x"></i>
            </div>
            <div class="drama_chart_info_widget_right">
              <span>進捗率</span>
              <div class="drama_chart_value">
                {{ floor( ($scene_complete_count/$scene_count)*100 ) }}%
              </div>
            </div>
          </div>
        </div>


      </div>
      <div class="drama_chart_info_right">

        <!-- 드라마 감독 -->
        <div class="col-lg-6">
          <div class="drama_chart_info_widget">
            <div class="drama_chart_info_title">
              監督
            </div>
            <div class="drama_chart_info_content">
              <span>{{$director[0]->name}}</span>
              <img class="img-circle m-b-md img-responsive staff_profile_img" src="{{ asset('storage/'.$director[0]->path.$director[0]->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
              <span>{{$director[0]->email}}</span>
            </div>
          </div>
        </div>
        <!-- 드라마 작가 -->
        <div class="col-lg-6">
          <div class="drama_chart_info_widget">
            <div class="drama_chart_info_title">
              作家
            </div>
            <div class="drama_chart_info_content">
              <span>{{$author[0]->name}}</span>
              <img class="img-circle m-b-md img-responsive staff_profile_img" src="{{ asset('storage/'.$author[0]->path.$author[0]->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
              <span>{{$author[0]->email}}</span>
            </div>
          </div>
        </div>

      </div>




    </div>
    <div class="drama_chart_top">
      <!-- 드라마에 대한 통계정보  -->

      <div class="drama_chart_left">

        <!--  직종별 스태프 인원수  -->
        <div class="drama_chart_staff">
          <div class="drama_chart_title">
            <span>チーム別スタッフ数</span>
          </div>
          <div class="chart">
            <canvas id="chart_staff"></canvas>
          </div>
        </div>

      </div>
      <div class="drama_chart_right">

        <!--  회차별 스태프 투입현황  -->
        <div class="drama_chart_staff">
          <div class="drama_chart_title">
            <span>撮影回数別スタッフ投入状況 </span>
          </div>
          <div class="chart">
            <canvas id="chart_schedule_staff"></canvas>
          </div>
        </div>

        <!--  회차별 배우 투입현황  -->
        <div class="drama_chart_staff">
          <div class="drama_chart_title">
            <span>撮影回数別俳優投入状況 </span>
          </div>
          <div class="chart">
            <canvas id="chart_schedule_actor"></canvas>
          </div>
        </div>



      </div>

    </div>
    <div class="drama_chart_bottom">



      <!--  회차별 씬 촬영현황  -->
      <div class="drama_chart_staff">
        <div class="drama_chart_title">
          <span>撮影回数別シーン撮影状況 </span>
        </div>
        <div class="chart">
          <canvas id="chart_schedule_scene"></canvas>
        </div>
      </div>

    </div>
  </section>



</div>

<!-- 차트 정보 -->
<script type="text/javascript">


  //팀별 스태프 인원수 차트

  var chart_staff_label = [];
  var chart_staff_data = [];

  @foreach($employees as $employee)
  chart_staff_label.push( "{{$employee->team_type }}");
  chart_staff_data.push( "{{ $employee->count }}");
  @endforeach

  var chart_staff_ctx = document.getElementById("chart_staff").getContext('2d');
  var chart_staff = new Chart(chart_staff_ctx, {
      type: 'doughnut',
      data: {
          labels: chart_staff_label,
          datasets: [{
              label: '# of Votes',
              data: chart_staff_data,
              backgroundColor: [
                'rgba(254, 46, 46, 0.8)',
                  'rgba(250, 88, 88, 0.8)',
                  'rgba(247, 129, 129, 0.8)',
                  'rgba(245, 169, 169, 0.8)',
                  'rgba(246, 206, 206, 0.8)',
                  'rgba(189, 189, 189, 0.5)',
                  'rgba(164, 164, 164, 0.5)',
                  'rgba(132, 132, 132, 0.5)',
                  'rgba(110, 110, 110, 0.5)',
                  'rgba(88, 88, 88, 0.5)',
              ],
          }]
      },

  });

  //회차 별 스태프 투입현황

  var schedule_staff_label = [];
  var schedule_staff_data = [];

  @foreach($schedule_staffs as $schedule_staff)
    schedule_staff_label.push( "{{ $schedule_staff->number }}");
    schedule_staff_data.push( "{{ $schedule_staff->count }}");
  @endforeach

  var schedule_staff_ctx = document.getElementById("chart_schedule_staff").getContext('2d');
  var schedule_staff = new Chart(schedule_staff_ctx, {
      type: 'line',
      data: {
          labels: schedule_staff_label,
          datasets: [{
              label: 'スタッフ数',
              data: schedule_staff_data,
              backgroundColor: [
                'rgba(254, 46, 46, 0.5)',
              ],
          }]
      },

  });

  //회차 별 배우 투입현황

  var schedule_actor_label = [];
  var schedule_actor_data = [];

  @foreach($schedule_actors as $schedule_actor)
    schedule_actor_label.push( "{{ $schedule_actor->number }}");
    schedule_actor_data.push( "{{ $schedule_actor->count }}");
  @endforeach

  var schedule_actor_ctx = document.getElementById("chart_schedule_actor").getContext('2d');
  var schedule_actor = new Chart(schedule_actor_ctx, {
    type: 'line',
    data: {
        labels: schedule_actor_label,
        datasets: [{
            label: '俳優数',
            data: schedule_actor_data,
            backgroundColor: [
              'rgba(247, 129, 129, 0.5)',
            ],
        }]
    },

  });

  //회차 별 씬 촬영현황

  var schedule_scene_label = [];
  var schedule_scene_data = [];   //전체 씬
  var schedule_scene_status1 = []; //촬영 완료 씬
  var schedule_scene_status0= []; //촬영 전 씬

  @foreach($schedule_scenes as $schedule_scene)
    schedule_scene_label.push( "{{ $schedule_scene->number }}");
    schedule_scene_data.push( "{{ $schedule_scene->count }}");
    schedule_scene_status1.push( "{{ $schedule_scene->status_count }}");

    //남은 씬
    //전체 씬에서 촬영완료 씬을 뺌
    var remain_scene = {{ $schedule_scene->count - $schedule_scene->status_count  }}
    schedule_scene_status0.push(remain_scene);

  @endforeach

  var schedule_scene_ctx = document.getElementById("chart_schedule_scene").getContext('2d');
  var schedule_scene = new Chart(schedule_scene_ctx, {
      type: 'bar',
      data: {
          labels: schedule_scene_label,
          datasets: [{

              label: '撮影終わり',
              backgroundColor: 'rgba(254, 46, 46, 0.7)',
              data: schedule_scene_status1,

          },  {

              label: '撮影前',
              backgroundColor: 'rgba(164, 164, 164, 0.7)',
              data: schedule_scene_status0,

          }]
      },
      options: {
        scales: {
            xAxes: [{
                stacked: true
            }],
            yAxes: [{
                stacked: true
            }]
        }
    }

  });






</script>


@endsection
