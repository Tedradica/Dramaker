@extends('layout')

@section('title','배우 모집글 보기')

@section('content')

<div id="main">

  <section id="actor_recruit_view_title" class="two">
    <h2>배우 모집 글</h2>
  </section>

  <section id="actor_recruit_view_information" class="two">
    <form class="form-horizontal actor_recruit_view_form">
      <div class="actor_recruit_view">
          <div class="actor_recruit_view_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="actor_recruit_view_form">
            <div class="actor_recruit_view_title">
              <label class="control-label col-sm-2">제목</label>
              <div class="col-sm-9 staff_recruit_view_title_content">
              </div>
            </div>
            <div class="actor_recruit_view_writer">
              <label class="control-label col-sm-2">작성자</label>
              <div class="col-sm-9 staff_recruit_view_writer_content">
              </div>
            </div>
            <div class="actor_recruit_view_date">
              <label class="control-label col-sm-2">작성일자</label>
              <div class="col-sm-9 staff_recruit_view_date_content">
              </div>
            </div>
            <div class="actor_recruit_view_dead_date">
              <label class="control-label col-sm-2">마감기한</label>
              <div class="col-sm-9 staff_recruit_view_dead_date_content">
              </div>
            </div>
            <div class="actor_recruit_view_workInformation">
              <label class="control-label col-sm-2">작품정보</label>
              <div class="col-sm-9 staff_recruit_view_workInformation_content">
              </div>
            </div>
            <div class="actor_recruit_view_productionInformation">
              <label class="control-label col-sm-2">제작사정보</label>
              <div class="col-sm-9 staff_recruit_view_productionInformation_content">
              </div>
            </div>
            <div class="actor_recruit_view_local">
              <label class="control-label col-sm-2">지역</label>
              <div class="col-sm-9 staff_recruit_view_area_content">
              </div>
            </div>
            <div class="actor_recruit_view_job">
              <label class="control-label col-sm-2">모집 직종</label>
              <div class="col-sm-9 staff_recruit_view_job_content">
              </div>
            </div>

          </div>
      </div>
  </section>
  <section id="actor_recruit_view_content" class="two">
      <div class="actor_recruit_view_content">
        상세내용
      </div>

            <div class="form-group button_content">
              <a href="{{ url('/job_actorapply') }}"><button type="button" class="btn btn-primary">지원하기</button></a>
              <a href="{{ url('/job') }}"><button type="button" class="btn btn-primary">취소</button></a>
            </div>
    </form>
  </section>

</div>

@endsection
