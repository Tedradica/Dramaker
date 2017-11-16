@extends('layout')

@section('title','공모전지원 확인')

@section('content')

  <div id="main">

    <section id="contestcheck" class="two">
      <div class="contest_check_container">

        <header>
          <h2> 공모전지원 확인 </h2>
        </header>

        <div class="contest_check_container_wrapper thumbnail" data-toggle="modal" data-target="#contestcheck_write">
          <div class="contest_check_container">
            <div class="contest_check_container_body">
              <div class="contest_check_title"><strong>제목</strong></div>
              <div class="contest_check_content"><strong>내용</strong></div>
              <div class="contest_check_recommend"><strong>추천수</strong></div>
            </div>
          </div>
        </div>

        <div class="contest_check_container_wrapper thumbnail" data-toggle="modal" data-target="#contestcheck_write">
          <div class="contest_check_container">
            <div class="contest_check_container_body">
              <div class="contest_check_title"><strong>제목</strong></div>
              <div class="contest_check_content"><strong>내용</strong></div>
              <div class="contest_check_recommend"><strong>추천수</strong></div>
            </div>
          </div>
        </div>

        <div class="contest_check_container_wrapper thumbnail" data-toggle="modal" data-target="#contestcheck_write">
          <div class="contest_check_container">
            <div class="contest_check_container_body">
              <div class="contest_check_title"><strong>제목</strong></div>
              <div class="contest_check_content"><strong>내용</strong></div>
              <div class="contest_check_recommend"><strong>추천수</strong></div>
            </div>
          </div>
        </div>

        <div class="contest_check_container_wrapper thumbnail" data-toggle="modal" data-target="#contestcheck_write">
          <div class="contest_check_container">
            <div class="contest_check_container_body">
              <div class="contest_check_title"><strong>제목</strong></div>
              <div class="contest_check_content"><strong>내용</strong></div>
              <div class="contest_check_recommend"><strong>추천수</strong></div>
            </div>
          </div>
        </div>


      </div>
    </section>

  <!-- Modal -->
  <div class="modal fade" id="contestcheck_write" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">제목</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-contest_check_title">
            <label>제목</label>
          </div>
          <div class="modal-contest_check_user_id">
            <label>작성자</label>
          </div>
          <div class="modal-contest_check_file">
            <label>파일</label>
          </div>
          <div class="modal-contest_check_content">
            <label>내용</label>
            <textarea rows="8" cols="55" maxlength="10"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">추천</button>
          <button type="button" class="btn btn-primary">채택</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

</div>

@endsection
