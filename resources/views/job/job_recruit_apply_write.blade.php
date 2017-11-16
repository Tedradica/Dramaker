
@extends('layout')

@section('title','지원')

@section('content')

<div id="main">

  <section id="recruit_apply_title" class="two">
    <h2>지원</h2>
  </section>

  <section id="recruit_apply_section" class="two">
    <form class="form-horizontal recruit_apply_form" action="{{ route('recruitApply') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group profile_check">
        <input type="checkbox" class="recruit_profile" name="profile" data-link="{{ url('/recruit_profile') }}" onclick="user_profile()">기존프로필
      </div>

      <div class="form-group recruit_apply_name">
        <label class="control-label col-sm-2">이름</label>
        <div class="col-sm-9">
          <input type="text" name="name" class="form-control name" >
        </div>
      </div>

      <div class="form-group recruit_apply_birth">
        <label class="control-label col-sm-2">생년월일</label>
        <div class="col-sm-9">
          <input type="text" name="birth" class="form-control birth">
        </div>
      </div>

      <div class="form-group recruit_apply_email">
        <label class="control-label col-sm-2">이메일</label>
        <div class="col-sm-9">
         <input type="email" name="email" class="form-control email">
        </div>
      </div>

      <div class="form-group recruit_apply_tel">
        <label class="control-label col-sm-2">tel</label>
        <div class="col-sm-9">
          <input type="text" name="tel" class="form-control tel">
        </div>
      </div>

      <div class="form-group recruit_apply_career">
        <label class="control-label col-sm-2">작품활동</label>
        <div class="col-sm-9">
          <textarea class="career" name="career" rows="8" cols="80"></textarea>
        </div>
      </div>

      <div class="form-group recruit_apply_stage_name">
        <label class="control-label col-sm-2">예명</label>
        <div class="col-sm-9">
          <input type="text" name="stage_name" class="form-control stage_name">
        </div>
      </div>

      <div class="form-group recruit_apply_gender">
        <label class="control-label col-sm-2">성별</label>
        <label class="control-label col-sm-2"><input type='radio' name='gender' value="w" checked>여성</label>
        <label class="control-label col-sm-2"><input type='radio' name='gender' value="m">남성</label>
      </div>

      <div class="form-group recruit_apply_body_size">
        <label class="control-label col-sm-2">신체정보</label>
        <label class="control-label col-sm-2">키(cm)<input type='text' class="height" name='height' value=""></label>
        <label class="control-label col-sm-2">몸무게(kg)<input type='text' class="weight" name='weight' value=""></label>
      </div>

      <div class="form-group recruit_apply_local">
        <label class="control-label col-sm-2">지역</label>
        <div class="col-sm-9">
          <input type="text" class="local" name="local" class="form-control">
        </div>
      </div>

      <div class="form-group recruit_apply_pr">
        <label class="control-label col-sm-2">PR영상업로드</label>
        <div class="col-sm-9">
         <input type="file" name="video">
        </div>
      </div>

      <button type="submit" class="btn btn-success">지원하기</button>
    </form>
  </section>

</div>

@endsection
