@extends('layout')

@section('title','제작사 장비 등록')

@section('content')

<div id="main">

  <section id="production_equipment_write_section" class="two">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ URL::previous() }}">制作現場</a></li>
      <li class="breadcrumb-item active">装備の登録</li>
    </ol>
    <form class="form-horizontal production_equipment_write_form" action="{{ route('equipmentWrite') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <img id="e_img" src="" alt="">
      <div class="form-group production_drama_write_form_drama_image">
        <label class="control-label col-sm-2">装備の写真</label>
        <div class="col-sm-9">
          <input class="equipment_img" type="file" name="image"/>
        </div>
      </div>

      <div class="form-group production_equipment_write_name">
        <label class="control-label col-sm-2">装備名</label>
        <div class="col-sm-9">
          <input type="text" name="equipment_name" class="form-control">
        </div>
      </div>

      <div class="form-group production_equipment_write_category">
        <label class="control-label col-sm-2">カテゴリー</label>
        <div class="col-sm-9">
          <select name="category_no">
            @foreach ($equipment_categorys as $equipment_category)
              <option value="{{$equipment_category->category_no}}">{{$equipment_category->category}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group production_equipment_write_count">
        <label class="control-label col-sm-2">装備数</label>
        <div class="col-sm-9">
          <input type="text" name="sequence" class="form-control">
        </div>
      </div>

      <div class="form-group production_equipment_write_status">
        <label class="control-label col-sm-2">装備の状態</label>
        <div class="col-sm-9">
          <select name="equipment_status">
            <option value="사용중">使用中</option>
            <option value="사용 가능">使用可能</option>
            <option value="고장">故障</option>
          </select>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">登録</button>
      <button class="btn btn-primary" type="submit">キャンセル</button>
    </form>
  </section>

</div>

@endsection
