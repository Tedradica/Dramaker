@extends('layout')

@section('title','배우지원 확인')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div id="main">

    <section id="actorapply_check" class="two">
      <div class="container">

        <header>
          <h2> 배우지원 확인 </h2>
        </header>

        <div class="contest_container_wrapper thumbnail " data-toggle="modal" data-target="#exampleModalLong">
          <div class="actorapply_check_container">
            <div class="actorapply_check_container_body">
              <div class="actorapply_check_photo"><strong>사진</strong></div>
              <div class="actorapply_check_name"><strong>이름</strong></div>
              <div class="actorapply_check_profile"><strong>신체프로필</strong></div>
              <div class="actorapply_check_recommend"><strong>추천수</strong></div>
            </div>
          </div>
        </div>

        <div class="contest_container_wrapper thumbnail" data-toggle="modal" data-target="#exampleModalLong">
          <div class="contest_container">
            <div class="contest_container_body">
              <div class="applycheck_photo"><strong>사진</strong></div>
              <div class="applycheck_name"><strong>이름</strong></div>
              <div class="applycheck_profile"><strong>신체프로필</strong></div>
              <div class="applycheck_recommend"><strong>추천수</strong></div>
            </div>
          </div>
        </div>

        <div class="contest_container_wrapper thumbnail" data-toggle="modal" data-target="#exampleModalLong">
          <div class="contest_container">
            <div class="contest_container_body">
              <div class="applycheck_photo"><strong>사진</strong></div>
              <div class="applycheck_name"><strong>이름</strong></div>
              <div class="applycheck_profile"><strong>신체프로필</strong></div>
              <div class="applycheck_recommend"><strong>추천수</strong></div>
            </div>
          </div>
        </div>

        <div class="contest_container_wrapper thumbnail" data-toggle="modal" data-target="#exampleModalLong">
          <div class="contest_container">
            <div class="contest_container_body">
              <div class="applycheck_photo"><strong>사진</strong></div>
              <div class="applycheck_name"><strong>이름</strong></div>
              <div class="applycheck_profile"><strong>신체프로필</strong></div>
              <div class="applycheck_recommend"><strong>추천수</strong></div>
            </div>
          </div>
        </div>

      </div>
    </section>

  <!-- Modal -->
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
          <div class="modal-actorapply-check-title">
            <label>사진</label>
          </div>

          <div class="modal-actorapply-check-writer">
            <label>이름/예명</label>
          </div>

          <div class="modal-actorapply-check-file">
            <label>신체정보</label>
            <input type="file" name="" value="">
          </div>

          <div class="modal-actorapply-check-phonenum">
            <label>연락처</label>
          </div>

          <div class="modal-actorapply-check-email">
            <label>이메일</label>
          </div>

          <div class="modal-actorapply-check-place">
            <label>지역</label>
          </div>

          <div class="modal-actorapply-check-career">
            <label>작품활동/경력</label>
            <textarea rows="8" cols="55" maxlength="10"></textarea>
          </div>

          <div class="modal-actorapply-check-img">
            <label>사진</label>
          </div>

          <div class="modal-actorapply-check-pr">
            <label>PR영상</label>
          </div>

          <div class="modal-actorapply-check-recommend">
            <label>추천수</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">남기기</button>
          <button type="button" class="btn btn-primary">보류</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">버리기</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal end -->

</div>

@endsection
