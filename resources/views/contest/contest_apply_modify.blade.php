
@extends('layout')

@section('title','공모전수정')

@section('content')

<div id="main">

  <section id="contest_write_title" class="two">
    <h2>공모전 수정<h2>
  </section>

  <section id="contest_write_title_section" class="three">
    <form class="form-horizontal contestwrite_form">
      <div class="form-group contest_write_form_title">
        <label class="control-label col-sm-2">제목</label>
        <div class="col-sm-9">
          <input type="text" name="title" class="form-control" >
        </div>
      </div>


      <div class="form-group contest_write_form_dead_date">
        <label class="control-label col-sm-2">마감기한</label>
        <div class="col-sm-9">
          <input type="text" name="dead_date" class="form-control">
        </div>
      </div>

      <div class="form-group contest_write_form_content">
        <label class="control-label col-sm-2">내용</label>
        <div class="col-sm-9">
          <textarea class="form-control" name="content" rows="3"></textarea>
        </div>
      </div>

      <div class="form-group contest_write_form_upload_file">
        <label class="control-label col-sm-2">파일업로드</label>
        <div class="col-sm-9">
         <input type="file" name="upload_file">
        </div>
      </div>

      <!--button-->
      <div class="contest_write_btn">
        <button class="btn btn-primary contest_modify_btn" type="submit" name="contest_modify">수정</button>
        <button class="btn btn-primary contest_cancel_btn" type="submit" name="contest_cancel">취소</button>
      </div>
    </form>
  </section>

</div>

@endsection
