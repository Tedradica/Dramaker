@extends('layout')

@section('title','배우 상세 보기')

@section('content')

<div id="main">

  <section id="actor_find_view_title" class="two">
    <h2>배우 상세 보기</h2>
  </section>

  <section id="actor_find_view_information" class="two">

      <div class="actor_find_view">
          <div class="actor_find_view_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="actor_find_view_form">
            <div class="actor_find_view_name">
              <label class="control-label col-sm-2">이름/예명</label>
              <div class="col-sm-9 actor_find_view_name_content">
              </div>
            </div>
            <div class="actor_find_view_birth">
              <label class="control-label col-sm-2">생년월일</label>
              <div class="col-sm-9 actor_find_view_birth_content">
              </div>
            </div>
            <div class="actor_find_view_bodyInfo">
              <label class="control-label col-sm-2">신체정보</label>
              <div class="col-sm-9 actor_find_view_bodyInfo_content">
              </div>
            </div>
            <div class="actor_find_view_tel">
              <label class="control-label col-sm-2">연락처</label>
              <div class="col-sm-9 actor_find_view_tel_content">
              </div>
            </div>
            <div class="actor_find_view_email">
              <label class="control-label col-sm-2">이메일</label>
              <div class="col-sm-9 actor_find_view_email_content">
              </div>
            </div>
            <div class="actor_find_view_local">
              <label class="control-label col-sm-2">지역</label>
              <div class="col-sm-9 actor_find_view_plocal_content">
              </div>
            </div>
          </div>
      </div>
  </section>
  <section id="actor_find_view_content" class="two">
      <div class="actor_find_view_content">

        <div class="actor_find_view_video">
        pr동영상
        </div>
        <div class="actor_find_view_content_content">
          작품활동/ 경력
        </div>
      </div>

            <div class="form-group button_write">
              <a href="{{ url('/job_actorapply') }}"><button type="button" class="btn btn-primary">채용하기</button></a>
              <a href="{{ url('/job') }}"><button type="button" class="btn btn-primary">취소</button></a>
            </div>

  </section>

</div>

@endsection
