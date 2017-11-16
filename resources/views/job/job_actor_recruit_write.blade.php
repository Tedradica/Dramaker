@extends('layout')

@section('title','스태프 모집 글 작성')

@section('content')

<div id="main">

  <section id="job_recruit_write_title" class="two">
    <h2>모집 글 작성</h2>
  </section>

  <section id="job_recruit_write_section" class="two">
    <form class="form-horizontal job_recruit_write_form" action="{{ route('recruitWrite') }}">
      <div class="form-group job_recruit_modify_form_title">
        <label class="control-label col-sm-2">제목</label>
        <div class="col-sm-9">
          <input type="text" name="title" class="form-control" >
        </div>
      </div>

      <div class="form-group job_recruit_write_form_information">
        <label class="control-label col-sm-2">작품선택</label>
        <select class="form-contorl col-sm-2" name="drama_no">
          @foreach ($recruit_dramas as $recruit_drama)
            <option value="{{$recruit_drama->drama_no}}">{{$recruit_drama->drama_name}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group job_recruit_write_form_dead_date">
        <label class="control-label col-sm-2">마감기간</label>
        <div class="col-sm-9">
          <input type="text" name="dead_date" class="form-control">
        </div>
      </div>

      <!-- <div class="form-group job_recruit_write_form_job">
        <label class="control-label col-sm-2">모집직종</label>
        <div class="col-sm-9">
         <input type="text" name="" class="form-control">
        </div>
      </div> -->

      <div class="form-group job_recruit_write_form_place">
        <label class="control-label col-sm-2">지역</label>
        <div class="col-sm-9">
          <input type="text" name="local" class="form-control">
        </div>
      </div>

      <div class="form-group job_recruit_write_form_content">
        <label class="control-label col-sm-2">내용</label>
        <div class="col-sm-9">
          <textarea name="content" rows="8" cols="80"></textarea>
        </div>
      </div>


      <div class="form-group button_write">
        <button type="submit" class="btn btn-primary">글쓰기</button>
        <a href="#"><button type="button" class="btn btn-primary">취소</button></a>
      </div>


    </form>
  </section>

</div>

@endsection
