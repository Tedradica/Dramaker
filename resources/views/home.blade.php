
@extends('layout')

@section('title','Produce Supporter')

@section('content')

<!-- Main -->
  <div id="main">

    <!-- Intro -->
      <section id="top" class="one cover">
        <div class="container">

          <header>
            <span id="home_title"><h2>DRAMAKER</h2></span>
            <span id="home_title_sub"><h2>drama production support service</h2></span>
            <br/><br/><br/><br/><br/><br/>
          </header>

        </div>

        <!-- <div class="counter" data-count="150">0</div>
        <div class="counter" data-count="85">0</div>
        <div class="counter" data-count="2200">0</div> -->


        <!-- top information   -->

      </section>


      <section id="top_two" class="home_section">
        <div class="top_information_wrapper">
            <div class="top_information">

                <div class="top_category">
                  <div class="top_category_value">
                    <strong class="counter" data-count="{{$drama_count}}">0</strong>
                  </div><br/>
                  <div class="top_category_name">
                    登録された作品
                  </div>
                </div>

                <div class="top_category">
                  <div class="top_category_value">
                    <strong class="counter" data-count="{{$user_count}}">0</strong>
                  </div><br/>
                  <div class="top_category_name">
                    登録されたスタッフ
                  </div>
                </div>

                <div class="top_category">
                  <div class="top_category_value">
                    <strong class="counter" data-count="{{$product_count}}">0</strong>
                  </div><br/>
                  <div class="top_category_name">
                    登録されたコンテスト
                  </div>

                </div>

            </div>
        </div>
      </section>

      <script>
      $('.counter').each(function() {
        var $this = $(this),
            countTo = $this.attr('data-count');

        $({ countNum: $this.text()}).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing:'linear',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });



        });
      </script>

      <section class="home_section">

        <div class="home_service_introduce_div">
          <p class="home_service_title">Why you should use dramaker</p>

          <div class="home_service_introduce_script home_service_div">
            <div class="home_service_img_script">
              <img src="{{ asset('images/script_img.png') }}" alt="">
            </div>
            <div class="home_service_name_script">
              <h2>台本作成サービス</h2>
            </div>
            <div class="home_service_content_script">
              <p>コンテ、カメラアングル、スクリプトを一度に作成して台本を<br/>効率的に見ることができるようで修正後は、バージョン管理が<br/>可能な台本作成プラットフォーム</p>
            </div>
          </div>

          <div class="home_service_introduce_schedule home_service_div">
            <div class="home_service_img_schedule">
              <img src="{{ asset('images/schedule_img.png') }}" alt="">
            </div>
            <div class="home_service_name_schedule">
              <h2>スケジュール作成サービス</h2>
            </div>
            <div class="home_service_content_schedule">
              <p>チーム別のスケジュール管理が可能であり、スケジュールの作成時にメンバーに<br/>リアルタイムアラームサービスで効果的にスケジュールを配信するサービス</p>
            </div>
          </div>

          <div class="home_service_introduce_cam">
            <div class="home_service_img_cam">
              <img src="{{ asset('images/cam_img.png') }}" alt="">
            </div>
            <div class="home_service_name_cam">
              <h2>ウェブオーディションサービス</h2>
            </div>
            <div class="home_service_content_cam">
              <p>志願者との簡単なオーディションを見ようとするとき、<br/>直接会わなくても、ウェブ上でオーディションを見る<br/>ことができるサービス</p>
            </div>
          </div>

          <div class="home_service_introduce_staff">
            <div class="home_service_img_staff">
              <img src="{{ asset('images/staff_img.png') }}" alt="">
            </div>
            <div class="home_service_name_staff">
              <h2>スタッフフルサービス</h2>
            </div>
            <div class="home_service_content_staff">
              <p>業界の特性上、早急に人力, ほしい日にほしい<br/>職種のみを選択すればすぐ利用可能なスタッフのリストを<br/>示すサービス</p>
            </div>
          </div>

        </div>
      </section>




      <!---dusgurqnqns---------->
      <link rel="stylesheet" href="{{ asset('css/reset.css') }}"> <!-- CSS reset -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Resource style -->
      <script src="{{ asset('js/modernizr.js') }}"></script> <!-- Modernizr -->

      <section id="cd-timeline" class="cd-container">
        <!-- <p class="home_service_title">Why you should use dramaker</p> -->
        <div class="dramaker_history">
          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-picture">
              <!-- <img src="{{ asset('images/cd-icon-picture.svg') }}" alt="Picture"> -->

            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <h2>シノプシス選定およびシナリオの作成</h2>
              <p>プロデューサー中心あるいは作家を中心にシノプシスを選定し、<br/>シノプシス選定後のキャラクターのイメージを考慮して、台本の作成を始め</p>
              <p>▶DRAMAKER提供サービス: シノプシスコンテスト、台本作成プラットフォーム</p>
              <!-- <span class="cd-date">Jan 14</span> -->
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->

          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-movie">
              <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <h2>俳優渉外</h2>
              <p>作品の枠が完成したら、企業が考えている俳優や <br/>製作で考える俳優を中心に渉外したり、新人俳優渉外のための広告作成</p>
              <p>▶DRAMAKER提供サービス: 求人求職サービス</p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->

          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-picture">
              <!-- <img src="{{ asset('images/cd-icon-picture.svg') }}" alt="Picture"> -->
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <h2>スタッフおよび装置を決定</h2>
              <p>俳優渉外と同時に撮影に必要なスタッフを渉外して、必要な装備を決定</p>
              <p>▶DRAMAKER提供サービス: 求人求職サービス, 装備情報リスト</p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->

          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-location">
              <!-- <img src="{{ asset('images/cd-icon-location.svg') }}" alt="Location"> -->
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <h2>場所渉外</h2>
              <p>作成されたコンテをもとに撮影を進行する場所を渉外</p>
              <p>▶DRAMAKER提供サービス: 場所情報リスト</p>
              <!-- <a href="#0" class="cd-read-more">Read more</a> -->
              <!-- <span class="cd-date">Feb 14</span> -->
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->

          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-location">
              <!-- <img src="{{ asset('images/cd-icon-location.svg') }}" alt="Location"> -->
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <h2>スケジュールの作成</h2>
              <p>上のプロセスが準備されると、撮影計画に合わせてスケジュールを作成して、撮影を始める準備</p>
              <p>▶DRAMAKER提供サービス: スケジュールの作成のプラットフォーム</p>
              <!-- <a href="#0" class="cd-read-more">Read more</a> -->
              <!-- <span class="cd-date">Feb 18</span> -->
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->

          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-movie">
              <!-- <img src="{{ asset('images/cd-icon-movie.svg') }}" alt="Movie"> -->
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <p>撮影を始める</p>
              <!-- <span class="cd-date">Feb 26</span> -->
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        </div>

      </section> <!-- cd-timeline -->
    <script src="{{ asset('js/main_1.js') }}"></script> <!-- Resource jQuery -->







  </div>


@endsection
