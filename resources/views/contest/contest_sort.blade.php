@extends('layout')

@section('title','공모전')

@section('content')

<div id="main">
  <section id="contest_view_title_section" class="three">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/contest') }}">공모전</a></li>
      <li class="breadcrumb-item active">공모전 상세</li>
    </ol>

    <div class="contest_view">
      <div class="contest_title_v">
        {{$contest->title}}
      </div><hr>
      <br/>
      <div class="contest_img">
        <div class="contest_view_img"><img src="{{ asset('storage/'.$contest_img->path.'/'.$contest_img->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" ></div>
      </div>
      <div class="contest_info">
        <div class="contest_view_user_id"><label>작성자</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$production}}</div>
        <div class="contest_view_reg_date"><label>작성시간</label>&nbsp;&nbsp;&nbsp; {{$contest->created_at}}</div>
        <div class="contest_view_dead_date"><label>마감시간</label>&nbsp;&nbsp;&nbsp; {{$contest->dead_date}}</div>
        <div class="contest_view_file"><label>첨부파일</label> <a href="{{ asset('storage/'.$content->path.'/'.$content->save_name) }}">{{$content->original_name}}</a></div>
      </div>

      <!--button-->
      <div class="contest_view_apply_btn">
        <a href="{{ url('/contest_apply_write', [$contest->contest_no]) }}">
          <button class="btn btn-primary btn-lg recruitment_btn" type="button">지원하기</button>
          <!-- <img class="recruit_img" src="{{ asset('images/recruit_icon.png') }}"> -->
        </a>
      </div>
    </div>
  </section>

  <section id="contest_detail" class="three">
    <div class="contest_detail_info">
      <h2>상세내용</h2><hr>
      <p>{!! nl2br($contest->content) !!}</p>
    </div>
  </section>


  @if(Auth::user()->user_type == '기업')
  <!-- 제작사일 경우 볼 수 있음 -->



  <section id="contestcheck" class="three">

    <div class="contest_apply_table_div">
      <header class="contest_check_title">
        <h2>공모전지원 확인 </h2>
      </header>
      <div class="apply_sort">
        <button type="button" class="btn btn-default btn-lg recommend_sort" data-link="{{ url('/apply_recommend_sort') }}" onclick="recommend_sort({{$contest->contest_no}})">추천수</button>
      </div>
      <table class="table table-hover contest_apply_table">
        <tr class="contest_apply_table_header">
          <th colspan="2">작성자</th>
          <th>제목</th>
          <th>지원일</th>
          <th>추천수</th>
          <th>지원상태</th>
        </tr>
        @foreach($applys as $apply)
          @if($apply->apply_status == 1)
          <tr class="contest_check choose_apply" data-link="{{url('/contest_view/apply_get/')}}" onclick="show({{$apply->apply_no}})">
          @elseif($apply->apply_status ==2)
          <tr class="contest_check no_choose_contest_apply" data-link="{{url('/contest_view/apply_get/')}}" onclick="show({{$apply->apply_no}})">
          @else
          <tr class="contest_check new_apply" data-link="{{url('/contest_view/apply_get/')}}" onclick="show({{$apply->apply_no}})">
          @endif
            <th class="contest_apply_img">
              <img class="img-circle m-t-xs img-responsive" src="{{ asset('storage/'.$apply->path.$apply->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
            </th>
            <th>{{$apply->name}}<br/></th>
            <th class="contest_apply_th">{{$apply->title}}</th>
            <th class="contest_apply_th">{{$apply->created_at}}</th>
            <th class="contest_apply_th">{{$apply->like}}</th>
            <!--지원상태가 숫자로 표시되어 있어서 채택, 미채택으로 바꾸기 위함-->
            @if($apply->apply_status == 1)
            <th class="contest_apply_th">
              <span class="label label-primary recruit_choose_btn">&nbsp;&nbsp;채택&nbsp;&nbsp;</span>
            </th>
            @else
            <th class="contest_apply_th"><span class="label label-default recruit_nochoose_btn">미채택</span></th>
            @endif
          </tr>
          </tr>
        </tr>
        @endforeach
        </table>

    </div>
</section>

  <!-- Modal -->
  <div class="modal fade" id="contestcheck_write" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-contestcheck-title">
            <label>제목 :</label>
            <span></span>
          </div>
          <div class="modal-contestcheck-writer">
            <label>작성자 :</label>
            <span></span>
          </div>
          <div class="modal-contestcheck-date">
            <label>작성 날짜 :</label>
            <span></span>
          </div>
          <div class="modal-contestcheck-status">
            <label>지원 상태 :</label>
            <span></span>
          </div>
          <div class="modal-contestcheck-recommend">
            <label>추천수 :</label>
            <span></span>
          </div>
          <div class="modal-contestcheck-file">
            <label>첨부파일 :</label>
            <span></span>
          </div>
          <div class="modal-contestcheck-content">
            <label>내용</label>
            <div></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary recommend" data-link="{{ url('/contest_apply_recommend/') }}">추천</button>
          <button type="button" class="btn btn-success choose" data-link="{{ url('/contest_apply_choose/') }}">채택</button>
          <!-- <button type="button" class="btn btn-danger cancel" data-link="{{ url('/contest_apply_delete/') }}">제외</button> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
@endif
</div>
@endsection
