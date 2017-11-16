
@extends('layout')

@section('title','작품등록')

@section('content')

<div id="main">

    <section id="prouduction_drama_write_title_section" class="three">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ URL::previous() }}">制作現場</a></li>
        <li class="breadcrumb-item active">作品の登録</li>
      </ol>
      <form class="form-horizontal production_drama_write_form" action="{{ route('dramaWrite') }}" method="POST" enctype="multipart/form-data" >
        {{ csrf_field() }}

        <img id="d_img" src="" alt="">
        <div class="form-group production_drama_write_form_drama_image">
          <label class="control-label col-sm-2">作品の写真</label>
          <div class="col-sm-9">
            <input class="drama_img" type="file" name="image"/>
          </div>
        </div>

        <div class="form-group production_drama_write_form_drama_name">
          <label class="control-label col-sm-2">作品名</label>
          <div class="col-sm-9">
            <input type="text" name="drama_name" class="form-control" >
          </div>
        </div>


        <div class="form-group cproduction_drama_write_form_genre">
          <label class="control-label col-sm-2">ジャンル</label>
          <div class="col-sm-9">
            <select name="genre">
              <option value="로맨스">ロマンス</option>
              <option value="스릴러">スリラー</option>
              <option value="액션">アクション</option>
              <option value="사극">時代劇</option>
              <option value="판타지">ファンタジー</option>
              <option value="추리">推理</option>
              <option value="공포">恐怖</option>
            </select>
          </div>
        </div>

        <div class="form-group contest_write_form_story">
          <label class="control-label col-sm-2">粗筋</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="story" rows="3"></textarea>
          </div>
        </div>

        <div class="staff_add">
          <label class="control-label col-sm-2">スタッフの追加</label>
          <div class="col-sm-9">
            <img src="{{ asset('images/plus_icon2.png') }}" width="40" height="40" onclick="staff_add()">
          </div>
        </div>

        <div class="staff_select">
          <div class="form-group contest_write_form_staff">
            <label class="control-label col-sm-2">チームの選択</label>
            <div class="col-sm-9">
              <select name="team_type[]">
                @foreach ($team_types as $team_type)
                  <option value="{{$team_type->team_no}}">{{$team_type->team_type}}</option>
                @endforeach
              </select>
            </div>

            <label class="control-label col-sm-2">スタッフの選択</label>
            <div class="col-sm-9">
              <select name="employee[]">
                @foreach ($employees as $employee)
                  <option value="{{$employee->user_no}}">{{$employee->name}}/{{$employee->position}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

    <!--button-->
        <div class="production_drama_write_btn">
          <button class="btn btn-primary cont_modify_btn" type="submit" name="production_drama_modify">登録</button>
          <button class="btn btn-primary contest_cancel_btn" type="submit" name="production_drama_cancel">キャンセル</button>
        </div>
      </form>
    </section>


</div>

@endsection
