@extends('layout')

@section('title','구인구직')

@section('content')
<div id="main">

  <section id="recruit_view_title" class="two">
    <div class="job_recruit_view">
      <h2>{{$recruit->title}}</h2><hr/>
      <div class="recurit_view_info_title">
        <div class="recurit_view_production_name"><strong>制作社</strong></div>
        <div class="recurit_view_date"><strong>作成日</strong></div>
        <div class="recurit_view_dead_date"><strong>締め切り</strong></div>
        <div class="recurit_view_location"><strong>地域</strong></div>
        <div class="recurit_view_position"><strong>募集職種, 募集人数</strong></div>
      </div>

      <div class="recurit_view_info">
        <div class="recurit_view_production_name"><label>{{$production}}</label></div>
        <div class="recurit_view_date"><label>{{$recruit->created_at}}</label></div>
        <div class="recurit_view_dead_date"><label>{{$recruit->dead_date}}</label></div>
        <div class="recurit_view_location"><label>{{$recruit->local}}</label></div>
        @foreach ($recruit_positions as $recruit_position)
          <span class="recurit_view_position"><label>{{$recruit_position->recruit_position}}-{{$recruit_position->volume}}名</label></span>
        @endforeach
      </div>

      <div class="recruit_button">
        <a href="{{ url('recruit_apply_write') }}"><button type="button" class="btn btn-primary">志望する</button></a>
      </div>

      <div class="recruit_drama_info_btn">
        <button type="button" class="staff_add_icon btn btn-default btn-lg" aria-label="Left Align" onclick="recruit_drama_info()">
          作品の情報
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </button>
      </div>

      <!-- <div class="recruit_view_drama_div"> -->
        <div class="recurit_view_drama_title recruit_drama_info">
          <div><strong>作品名</strong></div>
          <div><strong>ジャンル</strong></div>
          <div><strong>粗筋</strong></div><br/><br/>
        </div>


        <div class="recurit_view_drama recruit_drama_info">
          <div><strong>{{$drama->drama_name}}</strong></div>
          <div><strong>{{$drama->genre}}</strong></div>
          <div><strong>{{$drama->story}}</strong></div><br/>
        </div>
      <!-- </div> -->



    </div>
</section>

  <section class="two">
    <div class="recurit_view_detail_info">
      <h2>詳細の内容</h2><hr>
      <p>{!! nl2br($recruit->content) !!}</p>
      </div>
    </div>
  </section>
</div>
@endsection
