
@extends('layout')

@section('title','PPL')

@section('content')

<div id="main">
  <section id="recruiment_title" class="two">
    <h2>PPL</h2>
  </section>

  <section id="recruiment_array" class="three">
    카테고리
  </section>

  <section id="recruiment_array" class="three">
    <a href="{{ url('/production_ppl_write') }}">
      <button type="button" name="ppl_write">요구상품등록</button>
    </a>
  </section>

  <section id="recruiment" class="three">
    <div class="container">

      <header>
        <h2>PPL추천상품</h2>
      </header>

      <div class="PPL_container_wrapper thumbnail" data-toggle="modal" data-target="#production_member">
        <div class="PPL_container">
          <div class="PPL_container_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="PPL_container_body">
            <div class="PPL_title"><strong>상품명</strong></div>
            <div class="PPL_position"><strong>카테고리</strong></div>
          </div>
        </div>
      </div>

      <div class="PPL_container_wrapper thumbnail" data-toggle="modal" data-target="#production_member">
        <div class="PPL_container">
          <div class="PPL_container_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="PPL_container_body">
            <div class="PPL_title"><strong>상품명</strong></div>
            <div class="PPL_position"><strong>카테고리</strong></div>
          </div>
        </div>
      </div>

      <div class="PPL_container_wrapper thumbnail" data-toggle="modal" data-target="#production_member">
        <div class="PPL_container">
          <div class="PPL_container_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="PPL_container_body">
            <div class="PPL_title"><strong>상품명</strong></div>
            <div class="PPL_position"><strong>카테고리</strong></div>
          </div>
        </div>
      </div>

      <div class="PPL_container_wrapper thumbnail" data-toggle="modal" data-target="#production_member">
        <div class="PPL_container">
          <div class="PPL_container_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="PPL_container_body">
            <div class="PPL_title"><strong>상품명</strong></div>
            <div class="PPL_position"><strong>카테고리</strong></div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="recruiment" class="three">
    <div class="container">

      <header>
        <h2>PPL진행상품</h2>
      </header>

      <div class="PPL_container_wrapper thumbnail" data-toggle="modal" data-target="#recommend_ppl">
        <div class="PPL_container">
          <div class="PPL_container_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="PPL_container_body">
            <div class="PPL_title"><strong>상품명</strong></div>
            <div class="PPL_position"><strong>카테고리</strong></div>
          </div>
        </div>
      </div>

      <div class="PPL_container_wrapper thumbnail" data-toggle="modal" data-target="#recommend_ppl">
        <div class="PPL_container">
          <div class="PPL_container_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="PPL_container_body">
            <div class="PPL_title"><strong>상품명</strong></div>
            <div class="PPL_position"><strong>카테고리</strong></div>
          </div>
        </div>
      </div>

      <div class="PPL_container_wrapper thumbnail" data-toggle="modal" data-target="#recommend_ppl">
        <div class="PPL_container">
          <div class="PPL_container_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="PPL_container_body">
            <div class="PPL_title"><strong>상품명</strong></div>
            <div class="PPL_position"><strong>카테고리</strong></div>
          </div>
        </div>
      </div>

      <div class="PPL_container_wrapper thumbnail" data-toggle="modal" data-target="#recommend_ppl">
        <div class="PPL_container">
          <div class="PPL_container_img">
            <img src="./images/test_img.png" alt="">
          </div>
          <div class="PPL_container_body">
            <div class="PPL_title"><strong>상품명</strong></div>
            <div class="PPL_position"><strong>카테고리</strong></div>
          </div>
        </div>
      </div>

      <!--ppl modal-->
      <div class="modal fade" id="recommend_ppl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">제목</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="modal-ppl-img">
                <label>사진</label>
              </div>
              <div class="modal-ppl-name">
                <label>상품명</label>
              </div>
              <div class="modal-ppl-category">
                <label>카테고리</label>
              </div>
              <div class="modal-ppl-phonenum">
                <label>담장자 연락처</label>
              </div>
              <div class="modal-ppl-content">
                <label>상세설명</label>
                <textarea rows="8" cols="55" maxlength="10"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

</div>
@endsection
