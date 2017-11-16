
@extends('layout')

@section('title','요구상품등록')

@section('content')

<div id="main">

  <section id="prouduction_drama_write_title" class="two">
    <h2>요구상품등록<h2>
  </section>

    <section id="prouduction_drama_write_title_section" class="three">
      <form class="form-horizontal production_drama_write_form" action="{{ route('productionpplWrite') }}" method="POST" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="form-group company_ppl_write_form_information">
          <label class="control-label col-sm-2">작품선택</label>
          <select class="form-contorl col-sm-2" name="drama_no">
            @foreach ($drama_categorys as $drama_category)
              <option value="{{$drama_category->drama_no}}">{{$drama_category->drama_name}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group company_ppl_write_form_information">
          <label class="control-label col-sm-2">카테고리</label>
          <select class="form-contorl col-sm-2" name="category_no">
            @foreach ($categorys as $category)
              <option value="{{$category->category_no}}">{{$category->category}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group contest_write_form_story">
          <label class="control-label col-sm-2">내용</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="content" rows="3"></textarea>
          </div>
        </div>


    <!--button-->
        <div class="production_drama_write_btn">
          <button class="btn btn-primary cont_modify_btn" type="submit" name="production_drama_modify">등록</button>
          <button class="btn btn-primary contest_cancel_btn" type="submit" name="production_drama_cancel">취소</button>
        </div>
      </form>
    </section>


</div>

@endsection
