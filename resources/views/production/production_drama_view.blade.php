@extends('layout')

@section('title','作品の情報')

@section('content')

<script type="text/javascript">


$(document).ready(function(){


  var complete_progress = $('#drama_complete_progress').val();
  var all_progress = $('#drama_all_progress').val();

  var progress = (complete_progress/all_progress);

  var bar = new ProgressBar.Line('#drama_product_progress', {
    strokeWidth: 2,
    easing: 'easeInOut',
    duration: 1400,
    color: '#F15F5F',
    trailColor: '#FFD8D8',
    trailWidth: 1,
    svgStyle: {width: '100%', height: '100%'},
    text: {
      style: {
        color: '#999',
        right: '0',
        top: '30px',
        padding: 0,
        margin: 0,
        transform: null
      },
      autoStyleContainer: false
    },
    from: {color: '#FFEA82'},
    to: {color: '#ED6A5A'},
    step: (state, bar) => {
      bar.setText(Math.round(bar.value() * 100) + ' %');
    }
  });

  bar.animate(progress);  // Number from 0.0 to 1.0

  // console.log(progress);
  // console.log(all_progress);
  // console.log(complete_progress);

});

</script>


<div id="main">
  <section id="production_drama_title_section" class="two">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/production') }}">制作現場</a></li>
      <li class="breadcrumb-item active">作品の情報</li>
    </ol>
    <div class="drama_view">
      <div class="drama_title_v">
        {{$drama[0]->drama_name}}
        <hr/>
      </div>
      <br/>
      <div class="drama_img">
        <img src="{{ asset('storage/'.$drama[0]->path.$drama[0]->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
      </div>
      <div class="drama_info">
        <div class="drama_info_production"><label>制作社</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $production_name }}</div>
        <div class="drama_info_create_at"><label>生成日</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$drama[0]->created_at}}</div>
        <div class="drama_info_genre"><label>ジャンル</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$drama[0]->genre}}</div>
        <div class="drama_info_status"><label>制作の状態</label>&nbsp;&nbsp;&nbsp;&nbsp;{{$drama[0]->drama_status}}</div>

        <!-- <div class="drama_staff_info"> -->
          <div class="drama_info_producer"><label>監督</label>&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="drama_info_producer_img">
            @foreach($producers as $producer)
            <img class="img-circle" src="{{ asset('storage/'.$producer->path.$producer->save_name) }}">
            @endforeach
          </div>

          <div class="drama_info_writer_div">
            <div class="drama_info_writer"><label>作家</label>&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <div class="drama_info_write_img">
              @foreach($writers as $writer)
              <img class="img-circle" src="{{ asset('storage/'.$writer->path.$writer->save_name) }}">
              @endforeach
            </div>
          </div>

          <div class="drama_info_actor"><label>主演</label>&nbsp;&nbsp;&nbsp;&nbsp;</div>
          <div class="drama_info_actor_img">
            @foreach($actors as $actor)
            <img class="img-circle" src="{{ asset('storage/'.$actor->path.$actor->save_name) }}">
            @endforeach
          </div>
        <!-- </div> -->

        <div id="drama_product_progress">
          <label>進捗率</label>
          <input type="hidden" id="drama_complete_progress" value="{{$scene_complete_count}}">
          <input type="hidden" id="drama_all_progress" value="{{$scene_all_count}}">
        </div>
      </div>
    </div>
  </section>


  <section id="production_drama_view_list_section" class="two">

    <div class="production_drama_menu">
      <a href="{{ url('script_list', [$script_no]) }}">
        <button type="button" class="script_btn btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
          <img class="script_icon" src="{{ asset('images/script_icon.png') }}" alt="">
          <label class="drama_view_icon_sm_title">write a script</label><br/>
          <label class="drama_view_icon_lg_title">台本</label>
        </button>
      </a>

      <a href="{{ url('schedule',[$drama[0]->drama_no]) }}">
        <button type="button" class="schedule_btn btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
          <img class="script_icon" src="{{ asset('images/schedule_icon.png') }}" alt="">
          <label class="drama_view_icon_sm_title">write a schedule</label><br/>
          <label class="drama_view_icon_lg_title">スケジュール</label>
        </button>
      </a>


      <a href="{{ url('staff_list',[$drama[0]->drama_no]) }}">
        <button type="button" class="staff_btn btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
          <img class="script_icon" src="{{ asset('images/staff_icon.png') }}" alt="">
          <label class="drama_view_icon_sm_title">resource list</label><br/>
          <label class="drama_view_icon_lg_title">スタッフ/装備</label>
        </button>
      </a>

      <a href="{{ url('staffpull',[$drama[0]->drama_no]) }}">
        <button type="button" class="staffpull_btn btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
          <img class="script_icon" src="{{ asset('images/staffpull_icon2.png') }}" alt="">
          <label class="drama_view_icon_sm_title">find a staff</label><br/>
          <label class="drama_view_icon_lg_title">スタッフフル</label>
        </button>
      </a>

      <a href="{{ url('recruitment',[$drama[0]->drama_no]) }}">
        <button type="button" class="recruit_btn btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
          <img class="script_icon" src="{{ asset('images/recruit_icon.png') }}" alt="">
          <label class="drama_view_icon_sm_title">staff recruitment</label><br/>
          <label class="drama_view_icon_lg_title">求人</label>
        </button>
      </a>


      <a href="{{ url('/production_drama_chart',[$drama[0]->drama_no]) }}">
        <button type="button" class="chart_btn btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
          <img class="script_icon" src="{{ asset('images/chart_icon.png') }}" alt="">
          <label class="drama_view_icon_sm_title">drama chart</label><br/>
          <label class="drama_view_icon_lg_title">作品チャート</label>
        </button>
      </a>
    </div>


  </section>

</div>
@endsection
