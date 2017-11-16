
@extends('layout')

@section('title','스태프 풀')

@section('content')
<link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.print.min.css') }}" media='print' />

<script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('js/calendar/staffpull_calendar.js') }}"></script>

<script>

$.datepicker.setDefaults({
        dateFormat: 'yy-mm-dd',
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        showMonthAfterYear: true,
        yearSuffix: 'Year'
    });

    $(function() {
        $(".datepicker").datepicker();
    });




$(document).ready(function(){


  // 체크 박스 모두 체크

  $("#check_all").click(function(){

    if($("#check_all").prop("checked")) {
      //해당화면에 전체 checkbox들을 체크해준다
      $("input[name='staffpull_staf_list']").prop("checked",true);
    }else{
      //해당화면에 모든 checkbox들의 체크를해제시킨다.
      $("input[name='staffpull_staf_list']").prop("checked",false);
    }

  });

});

</script>



<div id="main">

  <input type="hidden" id="drama_no" value="{{$drama_no}}">
  <!-- <section id="job" class="two">
    <header>
      <h2> 스태프 풀 </h2>
    </header>
  </section> -->

  <section id="job_sort" class="three">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/production') }}">制作現場</a></li>
      <li class="breadcrumb-item"><a href="{{ URL::previous() }}">作品の情報</a></li>
      <li class="breadcrumb-item active">スタッフフル</li>
    </ol>
    <div class="staff_pull_select">
      <div class="staff_pull_select_label">
        <label>期間の選択</label>
      </div>

      <div class="staff_pull_date_select">
        <div class="input-group staffpull_input_date col-md-2">
          <span class="input-group-addon glyphicon glyphicon-calendar" ></span>
          <input type="text" id="start_date" class="datepicker form-control">
        </div>
        <div class="input-group staffpull_input_date col-md-2">
          <span class="input-group-addon glyphicon glyphicon-calendar" ></span>
          <input type="text" id="end_date" class="datepicker form-control">
        </div>
        <hr>
        <div class="staffpull_input_type">
          <div class="staffpull_input_type_label">
            <label>検索の設定</label>
          </div>

          <div class="staffpull_checkbox">

              <!-- <input type="checkbox" id="check_all">전체&nbsp; -->
              <div class="checkbox staffpull_checkbox_margin">
                <label>
                  <input type="checkbox" id="check_all">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  全体
                </label>
              </div>
              <div class="checkbox staffpull_checkbox_margin">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="연출">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  演出
                </label>
              </div>
              <div class="checkbox staffpull_checkbox_margin">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="작가">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  作家
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="촬영">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  撮影
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="조명">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  照明
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="편집">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  編集
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="미술">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  美術
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="분장">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  扮装
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="헤어">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  ヘア
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="특수효과">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  特殊効果
                </label>
              </div>
              <div class="checkbox staffpull_checkbox_margin">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="음악">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  音楽
                </label>
              </div>
              <div class="checkbox staffpull_checkbox_margin">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="녹음">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  録音
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="무술">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  武術
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="스케줄">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  スケジュール
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="운송">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  輸送
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="로케이션">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  ロケーション
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="staffpull_staf_list" value="배우">
                  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                  俳優
                </label>
              </div>

          </div>


        </div>
      </div>
      <br>
      <button type="button" id="staffpull_search" class="btn btn-primary" name="button" data-link="{{ url('staffpull_list') }}">検索 ></button>

    </div>





  </section>

  <section id="job_menu" class="three">
    <table id="staffpull_table" class="table table-hover">
      <tr>
        <td>名前</td>
        <td>職種</td>
        <td>状態</td>
        <td>スケジュールの確認</td>
      </tr>
    </table>
  </section>

  <!--date modal-->
  <div class="modal fade" id="staffpull_calendar" data-url="{{ url('/staffpull_schedule') }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">スケジュール</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div id="calendar">

        </div>

      </div>
    </div>
  </div>

  <!--staff profile modal-->
  <div class="modal fade" id="staff_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-url="{{ route('userInfoGet') }}">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">スタッフの情報</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <table id="staffpull_user_info_table">
            <tbody>

            </tbody>
          </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="staffpull_request" data-url="{{ url('/staffpull_request') }}">リクエストする</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        </div>
      </div>
    </div>
  </div>


</div>

@endsection
