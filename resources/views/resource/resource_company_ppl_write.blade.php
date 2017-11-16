@extends('layout')

@section('title','PPL상품등록')

@section('content')
<div id="main">

  <section id="company_ppl_write_title" class="two">
    <h2>PPL상품등록</h2>
  </section>

  <section id="company_ppl_write_section" class="two">
    <form class="form-horizontal company_ppl_write_form" action="{{ route('pplWrite') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <img id="p_img" src="" alt="">
      <div class="form-group contest_write_form_upload_file">
        <label class="control-label col-sm-2">사진업로드</label>
        <div class="col-sm-9">
         <input class="ppl_img" type="file" name="image">
        </div>
      </div>

      <div class="form-group company_ppl_form_title">
        <label class="control-label col-sm-2">상품명</label>
        <div class="col-sm-9">
          <input type="text" name="product_name" class="form-control" >
        </div>
      </div>

      <div class="form-group company_ppl_write_form_information">
        <label class="control-label col-sm-2">카테고리</label>
        <div class="col-sm-9">
          <select name="category_no">
            @foreach ($categorys as $category)
              <option value="{{$category->category_no}}">{{$category->category}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group company_ppl_write_form_content">
        <label class="control-label col-sm-2">상품설명</label>
        <div class="col-sm-9">
          <textarea class="form-control" name="introduce" rows="3"></textarea>
        </div>
      </div>

      <div class="form-group company_ppl_write_button">
        <button type="submit" class="btn btn-primary">등록</button>
        <a href="#"><button type="button" class="btn btn-primary">취소</button></a>
      </div>


    </form>
  </section>

</div>
@endsection
