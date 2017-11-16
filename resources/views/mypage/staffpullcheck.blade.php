@extends('layout')

@section('title','스태프풀 요청 확인')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="main">
  <section id="staffpullcheck_title" class="two">
    <h2>스태프풀 요청 확인</h2>
  </section>

  <section id="staffpullcheck" class="three">
    <div class="staffpullcheck">
      <div class="satffpull_photo" style="float: left; margin-left: 300px;">
        <img src="./images/test_img.png" width="150" height="150">
      </div>

      <div data-toggle="modal" data-target="#exampleModalLong" style="float: left; margin-top: 10px; margin-left:50px;">
        <div class=""><label>작품제목</label></div>
        <div class=""><label>일할기간-역할</label></div>
        <div class=""><label>메세지 내용</label></div>
      </div>
    </div>
  </section>

  <!--modal-->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">제목</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-contestcheck-title">
            <label>작품제목</label>
          </div>
          <div class="modal-contestcheck-writer">
            <label>제작사 정보</label>
          </div>
          <div class="modal-contestcheck-content">
            <label>내용</label>
            <textarea rows="8" cols="55" maxlength="10"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">수락</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">거절</button>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection
