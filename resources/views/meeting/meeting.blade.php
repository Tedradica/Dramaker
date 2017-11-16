@extends('layout')

@section('title','웹 오디션')

@section('content')

<script src="{{ asset('js/meetting/meetting.js') }}"></script>

<div id="main">

  <section id="metting_body" class="three">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item active">ウェブオーディション</li>
    </ol>

    <div class="meetting_title">
      <div class="meetting_menu">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#openRoom">ウェブオーディションルーム作り</button>
        <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#joinRoom">참석하기</button> -->
      </div>
    </div>

    <hr>
    <div class="meetting_body">
      <div class="meetting_body_title">
        ウェブオーディションリスト
      </div>
      <div class="meetting_body_room">
        <table id="meetting_room_table" class="table">
          <tr>
            <th>番号</th>
            <th>タイトル</th>
            <th>人数</th>
            <th>-</th>
          </tr>
        </table>
      </div>
    </div>

  </section>
</div>


<!--Modal-->
<div class="modal fade" id="openRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ウェブオーディションルーム作り</h5>
      </div>
      <div class="modal-body">
        <div class="modal-body-input">
            <span>タイトル</span>
            <input type="text" id="room_title" name="room_title" class="form-control" value="">
            <span>ルーム番号</span>
            <input type="text" id="room_number" name="room_number" class="form-control" value="">
            <span>人数</span>
            <input type="text" id="room_max_people" name="room_max_people" class="form-control" value="">
            <span>パスワード</span>
            <input type="text" id="room_password" name="room_password" class="form-control" value="">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="open_room()">作り</button>
        <button type="button" id="open_room_close" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
      </div>
    </div>
  </div>
</div>
<!--Modal end-->

<!--Modal-->
<div class="modal fade" id="joinRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">웹 오디션 참석하기</h5>
      </div>
      <div class="modal-body">
        <div class="modal-body-input">
          <span>방 번호</span>
          <input type="text" id="join_room_number" name="room_number" class="form-control" value="">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="join_room()">참석하기</button>
        <button type="button" id="join_room_close" class="btn btn-secondary" data-dismiss="modal">닫기</button>
      </div>
    </div>
  </div>
</div>
<!--Modal end-->







@endsection
