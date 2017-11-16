
@extends('layout')

@section('title','공모전등록')

@section('content')

<div id="main">

  <!-- <section id="contest_write_title" class="two">
    <h2>공모전 등록<h2>
  </section> -->

  <section id="contest_write_title_section" class="three">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/contest') }}">コンテスト</a></li>
      <li class="breadcrumb-item active">コンテストの登録</li>
    </ol>
    <form class="form-horizontal contestwrite_form" action="{{ route('contestWrite') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <img id="c_img" src="" alt="">
      <div class="form-group contestwrite_form_img">
        <label class="control-label col-sm-2">メインの写真</label>
        <div class="col-sm-9">
          <input class="contest_img" type="file" name="image"/>
        </div>
      </div>

      <div class="form-group contestwrite_form_title">
        <label class="control-label col-sm-2">タイトル</label>
        <div class="col-sm-9">
          <input type="text" name="title" class="form-control" >
        </div>
      </div>


      <div class="form-group contest_write_form_dead_date">
        <label class="control-label col-sm-2">締め切り</label>
        <div class="col-sm-9">
          <input type="date" name="dead_date" class="form-control">
        </div>
      </div>

      <div class="form-group contest_write_form_content">
        <label class="control-label col-sm-2">内容</label>
        <div class="col-sm-9">
          <textarea class="form-control" name="content" rows="3"></textarea>
        </div>
      </div>

      <div class="form-group contest_write_form_upload_file">
        <label class="control-label col-sm-2">ファイルのアップロード</label>
        <div class="col-sm-9">
         <input type="file" name="document">
        </div>
      </div>
      <button class="btn btn-primary contest_register_btn" type="submit" name="contest_register">登録</button>
      <button class="btn btn-primary contest_cancel_btn" type="submit" name="contest_cancel">キャンセル</button>
    </form>
  </section>

</div>

@endsection
