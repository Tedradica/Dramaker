@extends('layout')

@section('title','스태프 상세 보기')

@section('content')

<div id="main">

  <section id="staff_find_view_title" class="two">
    <h2>스태프 상세 보기</h2>
  </section>

  <section id="staff_find_view_information" class="two">
    <!-- <form class="form-horizontal staff_find_view_form"> -->
      <div class="staff_find_view">
          <div class="staff_find_view_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="staff_find_view_form">
            <div class="staff_find_view_name">
              <label class="control-label col-sm-2">이름/예명</label>
              <div class="col-sm-9 staff_find_view_name_content">
              </div>
            </div>
            <div class="staff_find_view_birth">
              <label class="control-label col-sm-2">생년월일</label>
              <div class="col-sm-9 staff_find_view_birth_content">
              </div>
            </div>
            <div class="staff_find_view_tel">
              <label class="control-label col-sm-2">연락처</label>
              <div class="col-sm-9 staff_find_view_tel_content">
              </div>
            </div>
            <div class="staff_find_view_email">
              <label class="control-label col-sm-2">이메일</label>
              <div class="col-sm-9 staff_recruit_view_email_content">
              </div>
            </div>
            <div class="staff_recruit_view_local">
              <label class="control-label col-sm-2">지역</label>
              <div class="col-sm-9 staff_recruit_view_local">
              </div>
            </div>
          </div>
      </div>
    </section>
      <section id="staff_find_view_content" class="two">
      <div class="actor_find_view_content">
        <hr/>
        상세내용
      </div>


            <div class="form-group button_write">
              <a href="{{ url('/#') }}"><button type="button" class="btn btn-primary">채용하기</button></a>
              <a href="{{ url('/job') }}"><button type="button" class="btn btn-primary">취소</button></a>
            </div>
    <!-- </form> -->
  </section>

</div>

@endsection
