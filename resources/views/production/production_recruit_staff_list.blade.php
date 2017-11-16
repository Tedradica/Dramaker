
@extends('layout')

@section('title','구인')

@section('content')

<div id="main">
  <section id="recruiment_title" class="two">
    <h2>구인</h2>
  </section>

  <section id="recruiment_array" class="three">
    <a href="{{ url('recruitment') }}">
      <button type="button" class="btn btn-primary recruiment_sort_btn"> 배우 </button>
    </a>
    <a href="{{ url('production_recruit_staff_list') }}">
      <button type="button" class="btn btn-primary recruiment_sort_btn"> 스태프 </button>
    </a>
  </section>

  <section id="recruiment" class="three">
    <div class="container">

        <div class="recruiment_staff_container_wrapper thumbnail" data-toggle="modal" data-target="#recruit_staff">
          <div class="recruiment_staff_container">
            <div class="recruiment_staff_container_img">
              <img src="./images/test_img.png" alt="">
            </div>
            <div class="recruiment_staff_container_body">
              <div class="recruiment_staff__name"><strong>이름</strong></div>
              <div class="recruiment_staff_gender"><strong>성별</strong></div>
              <div class="recruiment_staff_position"><strong>직책</strong></div>
            </div>
          </div>
        </div>

        <div class="recruiment_staff_container_wrapper thumbnail" data-toggle="modal" data-target="#recruit_staff">
          <div class="recruiment_staff_container">
            <div class="recruiment_staff_container_img">
              <img src="./images/test_img.png" alt="">
            </div>
            <div class="recruiment_staff_container_body">
              <div class="recruiment_staff__name"><strong>이름</strong></div>
              <div class="recruiment_staff_gender"><strong>성별</strong></div>
              <div class="recruiment_staff_position"><strong>직책</strong></div>
            </div>
          </div>
        </div>

        <div class="recruiment_staff_container_wrapper thumbnail" data-toggle="modal" data-target="#recruit_staff">
          <div class="recruiment_staff_container">
            <div class="recruiment_staff_container_img">
              <img src="./images/test_img.png" alt="">
            </div>
            <div class="recruiment_staff_container_body">
              <div class="recruiment_staff__name"><strong>이름</strong></div>
              <div class="recruiment_staff_gender"><strong>성별</strong></div>
              <div class="recruiment_staff_position"><strong>직책</strong></div>
            </div>
          </div>
        </div>

        <div class="recruiment_staff_container_wrapper thumbnail" data-toggle="modal" data-target="#recruit_staff">
          <div class="recruiment_staff_container">
            <div class="recruiment_staff_container_img">
              <img src="./images/test_img.png" alt="">
            </div>
            <div class="recruiment_staff_container_body">
              <div class="recruiment_staff__name"><strong>이름</strong></div>
              <div class="recruiment_staff_gender"><strong>성별</strong></div>
              <div class="recruiment_staff_position"><strong>직책</strong></div>
            </div>
          </div>
        </div>

        <!--modal-->
        <div class="modal fade" id="recruit_staff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">제목</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="modal-recruit-staff-img">
                  <label>사진</label>
                </div>
                <div class="modal-recruit-staff-name">
                  <label>이름</label>
                </div>
                <div class="modal-recruit-staff-position">
                  <label>직책</label>
                </div>
                <div class="modal-recruit-staff-phonenum">
                  <label>연락처</label>
                </div>
                <div class="modal-recruit-staff-email">
                  <label>이메일</label>
                </div>
                <div class="modal-recruit-staff-career">
                  <label>작품활동/경력</label>
                  <textarea rows="8" cols="55" maxlength="10"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">채용</button>
                <button type="button" class="btn btn-primary">보류</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>

</div>
@endsection
