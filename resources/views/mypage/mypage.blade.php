@extends('layout')

@section('title','マイページ')

@section('content')

<div id="main">
  <!-- <section id="mypage_title" class="two">
    <header>
      <h2>마이페이지</h2>
    </header>
  </section> -->

<section id="mypage" class="three">
  <div class="mypage_title">
    <h2 >マイページ</h2>
  </div>
  @foreach($user as $user)
  <div class="mypage_info_div">
    <div class="mypage_user_info_img_div">
      <div class="mypage_user_img">
        <img class="img-rounded" src="{{ asset('storage/'.$user->path.$user->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`">
      </div>
    </div>

    <div class="mypage_user_info_line_div">
      <div class="mypage_user_info_div">
        <h2 class="mypage_user_name">{{$user->name}} <span class="label label-primary user_type_btn">&nbsp;&nbsp;{{$user->type}}&nbsp;&nbsp;</span></h2>
        <h2 class="mypage_user_birth">{{$user->birth}}</h2>
        <h2 class="mypage_user_tel">{{$user->tel}}</h2>
        <h2 class="mypage_user_email">{{$user->email}}</h2>
      </div>
    </div><!--mypage_user_info_line_div end-->
  </div><!--mypage_info_div end-->
  @endforeach

    <div class="mypage_menu_div_line">
      <div class="mypage_menu_div">
        <ul class="mypage_menu">
          <li><a href="#">個人情報の変更</a></li>
          <li><a href="{{ url('/mypage_video')  }}">PR動画</a></li>
          <li><a href="#">タイムライン</a></li>
          <li><a href="{{ url('/staffpullcheck')  }}">リクエスト</a></li>
        </ul>
      </div>
    </div>
  <!-- </div> -->



  <!-- <section id="mypage_message" class="three">
    타임라인
    <a href="{{ url('/message') }}"><h2>타임라인 더보기</h2></a>
  </section> -->


</div>
</section>
@endsection
