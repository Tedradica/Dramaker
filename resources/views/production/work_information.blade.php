@extends('layout')

@section('title','마이페이지')

@section('content')

<div id="main">
  <section id="work_information_title" class="two">
    <header>
      <h2>작품정보</h2>
    </header>
  <div class="work_information">
    <div class="work_information_img">
      <img src="./images/test_img.png" alt="">
    </div>
    <div class="work_information">
      <div class="work_information_content">
        <div class="work_information_name"><strong>작품이름</strong></div>
        <div class="work_information_company"><strong>제작사정보</strong></div>
        <div class="work_information_director"><strong>감독/작가</strong></div>
        <div class="work_information_date"><strong>생성날짜/장르</strong></div>
        <div class="work_information_summary"><strong>줄거리</strong></div>
      </div>
      <div class="work_information_chart">
        <strong>작품통계</strong>
      </div>
    </div>
  </div>
  </section>

  <section id="work_information_list" class="two">
    <div class="work_information_list">
      <div class="work_information_schedule">
        <button type="button">스케줄</button>
      </div>

      <div class="work_information_script">
        <a href="{{ url('/script_list') }}"><button type="button">대본</button></a>
      </div>

      <div class="work_information_staff">
        <button type="button">스태프</button>
      </div>

      <div class="work_information_equipment">
        <a href="{{ url('/equipment_list') }}"><button type="button">장비</button></a>
      </div>

      <div class="work_information_ppl">
        <button type="button">ppl</button>
      </div>

      <div class="work_information_staffpull">
        <button type="button">스태프풀</button>
      </div>

      <div class="work_information_recruiment">
        <a href="{{ url('/recruitment') }}"><button type="button">구인</button></a>
      </div>

    </div>
  </section>

</div>
@endsection
