@extends('layout')

@section('title','스태프 모집글쓰기')

@section('content')

<div id="main">

  <section id="staff_recruit_write_title" class="two">
    <h2>스태프 모집 글</h2>
  </section>

  <section id="staff_recruit_write_section" class="two">
    <form class="form-horizontal staff_recruit_write_form">
      <div class="form-group staff_recruit_write_form_title">
        <label class="control-label col-sm-2">제목</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" >
        </div>
      </div>

      <div class="form-group staff_recruit_write_form_information">
        <label class="control-label col-sm-2">작품정보</label>
        <div class="col-sm-1">
          <button type="button" class="btn btn-primary">작품선택</button>
        </div>
      </div>

      <div class="form-group staff_recruit_write_form_dead_date">
        <label class="control-label col-sm-2">마감기간</label>
        <div class="col-sm-9">
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group staff_recruit_write_form_job">
        <label class="control-label col-sm-2">모집직종</label>
        <div class="col-sm-9">
         <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group staff_recruit_write_form_local">
        <label class="control-label col-sm-2">지역</label>
        <div class="col-sm-9">
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group staff_recruit_write_form_content">
        <label class="control-label col-sm-2">내용</label>
        <div class="col-sm-9">
          <textarea name="name" rows="8" cols="80"></textarea>
        </div>
      </div>


      <div class="form-group button_write">
        <button type="button" class="btn btn-primary">글쓰기</button>
        <a href="{{ url('/job') }}"><button type="button" class="btn btn-primary">취소</button></a>
      </div>


    </form>
  </section>

</div>

@endsection
