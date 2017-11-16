@extends('layout')

@section('title','장비정보')

@section('content')

<div id="main">
  <section id="equipmentinfo_title" class="two">
    <header>
      <h2>장비정보</h2>
    </header>
  </section>

  <section id="equipmentinfo" class="three">
    <div class="equipmentinfo_img">
      <img src="./images/test_img.png" width="450" height="450" class="img-thumbnail">
    </div>
    <div class="equipmentinfo_content">
      <div class="equipmentinfo_name">
        <strong>장비이름</strong>
      </div>
      <div class="equipmentinfo_price">
        <strong>장비대여가격</strong>
      </div>
      <div class="equipmentinfo_status">
        <strong>장비상태</strong>
      </div>
      <div class="equipmentinfo_company">
        <strong>장비임대회사정보</strong>
      </div>
    </div>
  </section>
  <section id="equipment_detail_img" class="three">
    <div class="equipment_datail_img">
      장비 상세 이미지
    </div>
    <div class="equipment_btn">
      <button type="button" class="btn btn-primary">장비대여</button>
      <button type="button" class="btn btn-secondary">뒤로가기</button>
    </div>
  </section>
</div>
@endsection
