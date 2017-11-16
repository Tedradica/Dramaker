
@extends('layout')

@section('title','배우 지원')

@section('content')

<div id="main">

  <section id="actorapply_title" class="two">
    <h2>배우 지원</h2>
  </section>

  <section id="actorapply_section" class="two">
    <form class="form-horizontal actorapply_form">
      <div class="form-group actorapply_form_name">
        <label class="control-label col-sm-2">이름/예명</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" >
        </div>
      </div>

      <div class="form-group actorapply_form_size">
        <label class="control-label col-sm-2">신체정보</label>
        <div class="col-sm-9">
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group actorapply_form_phonenum">
        <label class="control-label col-sm-2">연락처</label>
        <div class="col-sm-9">
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group actorapply_form_email">
        <label class="control-label col-sm-2">이메일</label>
        <div class="col-sm-9">
         <input type="email" class="form-control" id="inputEmail3">
        </div>
      </div>

      <div class="form-group actorapply_form_place">
        <label class="control-label col-sm-2">지역</label>
        <div class="col-sm-9">
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group actorapply_form_log">
        <label class="control-label col-sm-2">작품활동</label>
        <div class="col-sm-9">
          <textarea name="name" rows="8" cols="80"></textarea>
        </div>
      </div>

      <div class="form-group actorapply_form_imgs">
        <label class="control-label col-sm-2">사진업로드</label>
        <div class="col-sm-9">
         <input type="file">
        </div>
      </div>

      <div class="form-group actorapply_form_pr">
        <label class="control-label col-sm-2">PR영상업로드</label>
        <div class="col-sm-9">
         <input type="file">
        </div>
      </div>

      <button type="button" class="btn btn-success">지원하기</button>
    </form>
  </section>

</div>

@endsection
