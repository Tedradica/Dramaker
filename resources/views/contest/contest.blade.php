
@extends('layout')

@section('title','공모전')

@section('content')

<div id="main">

  <section id="contest" class="two">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item active">コンテスト</li>
    </ol>
    <div class="container">

      <div class="contest_main_title">
        <h2> 開催したコンテスト/志願したコンテスト</h2>
      </div>

      <div class="swiper-container">
        <div class="swiper-scrollbar"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-wrapper">

        @foreach ($apply_contests as $contest)

          <div class="swiper-slide" >
            <a href="{{ url( '/contest_view' , [$contest->contest_no] ) }}">
              <div class="contest_container_wrapper thumbnail ">
                <div class="contest_container">
                  <div class="contest_container_img">
                    <img src="{{ asset('storage/'.$contest->path.$contest->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
                  </div>
                  <div class="contest_container_body">
                    <div class="contest_title"><h2>{{$contest->title}}</h2></div>
                    <div class="contest_period"><h2>締め切り: {{$contest->dead_date}}</h2></div>
                    <div class="contest_dday">
                      <?php
                        $today = date('Y-m-d', time());
                        $date = $contest->dead_date;
                        if($date > $today){
                          $ddy = ( strtotime($date) - strtotime($today) ) / 86400;
                           echo '<button class="btn btn-warning" name="button">'."D-".$ddy.'</button>';} else{
                             echo "締め切り";
                           }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

        @endforeach

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>


<!-- 정렬 도구  ========================================================= -->


  <section id="contest_sort" class="three">
    <a href="{{ url('/contest_open_write') }}"><button type="button" class="btn btn-primary contest_write_btn"> コンテストの登録 </button></a>
  </section>


<!-- 공모전  ========================================================= -->


  <section id="contest_list" class="four">
    <div class="container">

      <div class="contest_main_title_1">
        <h2> 全体のコンテスト </h2>
      </div>

      @foreach ($contests as $contest)

        <div class="swiper-slide" >
          <a href="{{ url( '/contest_view' , [$contest->contest_no] ) }}">
            <div class="contest_container_wrapper thumbnail ">
              <div class="contest_container">
                <div class="contest_container_img">

                  <img src="{{ asset('storage/'.$contest->path.$contest->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
                </div>
                <div class="contest_container_body">
                  <div class="contest_title"><strong>{{$contest->title}}</strong></div>
                  <div class="contest_period"><strong>締め切り:{{$contest->dead_date}}</strong></div>
                  <div class="contest_dday">
                    <?php
                      $today = date('Y-m-d', time());
                      $date = $contest->dead_date;
                      if($date > $today){
                        $ddy = ( strtotime($date) - strtotime($today) ) / 86400;
                         echo '<button class="btn btn-warning" name="button">'."D-".$ddy.'</button>';} else{
                           echo "締め切り";
                         }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

      @endforeach


    </div>
  </section>

</div>

@endsection
