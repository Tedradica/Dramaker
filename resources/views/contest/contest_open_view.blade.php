@extends('layout')

@section('title','개최 공모전')

@section('content')

<div id="main">
  <section id="contest_view_header" class="two">
    <header>
      <h2>개최공모전</h2>
    </header>
  </section>

  <section id="contest_view_title_section" class="three">
    <div class="contest_title">
      <h2>공모전 제목</h2>
    </div>

    <div class="contest_info">
      <div class="contest_view_user_id"><label>작성자</label></div>
      <div class="contest_view_reg_date"><label>작성시간</label></div>
      <div class="contest_view_dead_date"><label>마감시간</label></div>
    </div>

    <!--button-->
    <div class="contest_view_apply_btn">
      <a href="{{ url('contest_apply_write') }}">
        <button class="btn btn-primary" type="button" name="contest_apply">지원하기</button>
      </a>
    </div>

    <div class="contest_view_modify_btn">
      <a href="{{ url('contest_open_modify') }}">
        <button class="btn btn-primary" type="button" name="contest_modify">수정</button>
      </a>
    </div>
  </section>

  <section id="contest_detail" class="three">
    <div class="contest_detail_info">
      <label>상세내용</label>
    </div>
  </section>


</div>
@endsection
