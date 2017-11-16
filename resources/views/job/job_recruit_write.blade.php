@extends('layout')

@section('title','스태프 모집 글 작성')

@section('content')

<div id="main">

  <section id="job_recruit_write_section" class="two">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/job') }}">求人・求職</a></li>
      <li class="breadcrumb-item active">募集文の作成</li>
    </ol>
    <form class="form-horizontal job_recruit_write_form" action="{{ route('recruitWrite') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group job_recruit_modify_form_title">
        <label class="control-label col-sm-2">タイトル</label>
        <div class="col-sm-9">
          <input type="text" name="title" class="form-control" >
        </div>
      </div>

      <div class="form-group job_recruit_write_form_information">
        <label class="control-label col-sm-2">作品の選択</label>
        <div class="col-sm-9">
          <select class="drama" name="drama_no">
            @foreach ($recruit_dramas as $recruit_drama)
              <option value="{{$recruit_drama->drama_no}}">{{$recruit_drama->drama_name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="recruit_add">
        <label class="control-label col-sm-2">募集人員の追加</label>
        <div class="col-sm-9">
          <img src="{{ asset('images/plus_icon2.png') }}" width="40" height="40" onclick="recruit_add()">
        </div>
      </div>

      <div class="recruit_select">
        <div class="form-group job_recruit_write_form_position">
          <label class="control-label col-sm-2">募集職種</label>
          <div class="col-sm-9">
            <select class="position" name="recruit_position[]">
              @foreach ($recruit_positions as $recruit_position)
                <option value="{{$recruit_position->position}}">{{$recruit_position->position}}</option>
              @endforeach
            </select>
          </div>

          <label class="control-label col-sm-2">募集人員</label>
          <div class="col-sm-9">
            <input type="text" name="volume[]" value="">
          </div>
        </div>
      </div>

      <div class="form-group job_recruit_write_form_dead_date">
        <label class="control-label col-sm-2">締め切り</label>
        <div class="col-sm-9">
          <input type="date" name="dead_date" class="form-control">
        </div>
      </div>

      <div class="form-group job_recruit_write_form_place">
        <label class="control-label col-sm-2">地域</label>
        <div class="col-sm-9">
          <input type="text" name="local" class="form-control">
        </div>
      </div>

      <div class="form-group job_recruit_write_form_content">
        <label class="control-label col-sm-2">内容</label>
        <div class="col-sm-9">
          <textarea name="content" rows="8" cols="80"></textarea>
        </div>
      </div>


      <div class="form-group button_write">
        <button type="submit" class="btn btn-primary">書き込み</button>
        <a href="#"><button type="button" class="btn btn-primary">キャンセル</button></a>
      </div>

    </form>
  </section>

</div>

@endsection
