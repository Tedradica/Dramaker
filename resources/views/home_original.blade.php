
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
                    등록된 작품
                  </div>
                </div>

                <div class="top_category">
                  <div class="top_category_value">
                    <strong class="counter" data-count="{{$user_count}}">0</strong>
                  </div><br/>
                  <div class="top_category_name">
                    등록된 스태프
                  </div>
                </div>

                <div class="top_category">
                  <div class="top_category_value">
                    <strong class="counter" data-count="{{$product_count}}">0</strong>
                  </div><br/>
                  <div class="top_category_name">
                    등록된 공모전
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
              <h2>대본 작성 서비스</h2>
            </div>
            <div class="home_service_content_script">
              <p>콘티, 카메라앵글, 스크립트를 한번에 작성하여 대본을 효율적으로 볼 수 있게 하며 수정 후에는 버전관리가 가능한 대본 작성 플랫폼 </p>
            </div>
          </div>

          <div class="home_service_introduce_schedule home_service_div">
            <div class="home_service_img_schedule">
              <img src="{{ asset('images/schedule_img.png') }}" alt="">
            </div>
            <div class="home_service_name_schedule">
              <h2>스케줄 작성 서비스</h2>
            </div>
            <div class="home_service_content_schedule">
              <p>팀별 스케줄 관리가 가능하며, 스케줄 작성시 구성원들에게 실시간 알람 서비스로 효과적으로 스케줄을 전달하는 서비스</p>
            </div>
          </div>

          <div class="home_service_introduce_cam">
            <div class="home_service_img_cam">
              <img src="{{ asset('images/cam_img.png') }}" alt="">
            </div>
            <div class="home_service_name_cam">
              <h2>웹오디션 서비스</h2>
            </div>
            <div class="home_service_content_cam">
              <p>지원자와 간단한 오디션을 보고자 할 때, 직접 만날 필요 없이 웹에서 오디션을 볼 수 있는 서비스</p>
            </div>
          </div>

          <div class="home_service_introduce_staff">
            <div class="home_service_img_staff">
              <img src="{{ asset('images/staff_img.png') }}" alt="">
            </div>
            <div class="home_service_name_staff">
              <h2>스태프풀 서비스</h2>
            </div>
            <div class="home_service_content_staff">
              <p>업계 특성상 급히 인력이 필요할 때, 원하는 날짜에 원하는 직종만 선택한다면 바로 가용 가능한 스태프 리스트를 보여주는 서비스</p>
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
              <h2>시놉시스 선정 및 대본 작성</h2>
              <p>프로듀서 중심 혹은 작가를 중심으로 시놉시스를 선정하고, <br/>시놉시스 선정 뒤 캐릭터의 이미지를 고려하여 대본 작성을 시작</p>
              <p>▶dramaker 제공서비스: 시놉시스 공모전, 대본 작성 플랫폼</p>
              <!-- <span class="cd-date">Jan 14</span> -->
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->

          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-movie">
              <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <h2>배우 섭외</h2>
              <p>작품의 틀이 완성 되면 기업이 생각하고 있는 배우 또는 <br/> 제작사에서 생각하는 배우를 중심으로 섭외하거나 신인 배우 섭외를 위한 공고 작성</p>
              <p>▶dramaker 제공서비스: 구인구직 서비스</p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->

          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-picture">
              <!-- <img src="{{ asset('images/cd-icon-picture.svg') }}" alt="Picture"> -->
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <h2>스태프 및 장비 결정</h2>
              <p>배우 섭외와 동시에 촬영에 필요한 스태프들을 섭외하고, 필요한 장비를 결정</p>
              <p>▶dramaker 제공서비스: 구인구직 서비스, 장비 정보 리스트</p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->

          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-location">
              <!-- <img src="{{ asset('images/cd-icon-location.svg') }}" alt="Location"> -->
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <h2>장소 섭외</h2>
              <p>작성된 콘티를 바탕으로 촬영을 진행할 장소를 섭외</p>
              <p>▶dramaker 제공서비스: 장소 정보 리스트</p>
              <!-- <a href="#0" class="cd-read-more">Read more</a> -->
              <!-- <span class="cd-date">Feb 14</span> -->
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->

          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-location">
              <!-- <img src="{{ asset('images/cd-icon-location.svg') }}" alt="Location"> -->
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <h2>스케줄 작성</h2>
              <p>위의 과정이 준비 되면, 촬영 계획에 맞게 스케줄을 작성해 촬영을 시작 준비</p>
              <p>▶dramaker 제공서비스: 스케줄 작성 플랫폼</p>
              <!-- <a href="#0" class="cd-read-more">Read more</a> -->
              <!-- <span class="cd-date">Feb 18</span> -->
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->

          <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-movie">
              <!-- <img src="{{ asset('images/cd-icon-movie.svg') }}" alt="Movie"> -->
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
              <p>촬영 시작</p>
              <!-- <span class="cd-date">Feb 26</span> -->
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        </div>

      </section> <!-- cd-timeline -->
    <script src="{{ asset('js/main_1.js') }}"></script> <!-- Resource jQuery -->




    <!-- Portfolio -->
      <!-- <section id="portfolio" class="two">
        <div class="container">

          <header>
            <h2>Portfolio</h2>
          </header>

          <p>Vitae natoque dictum etiam semper magnis enim feugiat convallis convallis
          egestas rhoncus ridiculus in quis risus amet curabitur tempor orci penatibus.
          Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis
          fusce hendrerit lacus ridiculus.</p>

          <div class="row">
            <div class="4u 12u$(mobile)">
              <article class="item">
                <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
                <header>
                  <h3>Ipsum Feugiat</h3>
                </header>
              </article>
              <article class="item">
                <a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
                <header>
                  <h3>Rhoncus Semper</h3>
                </header>
              </article>
            </div>
            <div class="4u 12u$(mobile)">
              <article class="item">
                <a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
                <header>
                  <h3>Magna Nullam</h3>
                </header>
              </article>
              <article class="item">
                <a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
                <header>
                  <h3>Natoque Vitae</h3>
                </header>
              </article>
            </div>
            <div class="4u$ 12u$(mobile)">
              <article class="item">
                <a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
                <header>
                  <h3>Dolor Penatibus</h3>
                </header>
              </article>
              <article class="item">
                <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
                <header>
                  <h3>Orci Convallis</h3>
                </header>
              </article>
            </div>
          </div>

        </div>
      </section> -->

    <!-- 최근 등록된 작품 -->
    <!-- <section id="contest" class="two">
      <div class="container">

        <header>
          <h2> 등록된 공모전 </h2>
        </header>

        <div class="swiper-container">
          <div class="swiper-scrollbar"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-wrapper">

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
                      <div class="contest_period"><strong>{{$contest->dead_date}}</strong></div>
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
    </section> -->


    <!-- 구인구직 ========================================================= -->


    <!-- <section id="new_drama" class="four">
      <div class="container">

        <header>
          <h2>구인구직</h2>
        </header>

        <div class="swiper-container">
          <div class="swiper-scrollbar"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-wrapper">

          @foreach ($recruits as $recruit)

            <div class="swiper-slide" >
              <a href="{{ url( '/job_recruit_view' , [$recruit->recruit_no] ) }}">
                <div class="recruit_container_wrapper thumbnail ">
                  <div class="recruit_container">
                    <div class="recruit_container_img">

                      <img src="{{ asset('storage/'.$recruit->path.$recruit->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
                    </div>
                    <div class="recruit_container_body">
                      <div class="recruit_title"><strong>{{$recruit->title}}</strong></div>
                      <div class="recruit_production"><strong>{{$recruit->name}}</strong></div>
                      <div class="recruit_period"><strong>{{$recruit->dead_date}}</strong></div>
                      <div class="recruit_apply_fields">
                        @foreach($recruit->recruit_position as $position)
                                  <button type="button" class="btn btn-default" name="button">{{$position}}</button>
                        @endforeach
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
    </section> -->


    <!-- 장소/장비  ========================================================= -->


    <!-- <section id="new_drama" class="three">
      <div class="container">

        <header>
          <h2>장소/장비</h2>
        </header>

        <div class="swiper-container">
          <div class="swiper-scrollbar"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-wrapper">

          @foreach ($equipments as $equipment)

            <div class="swiper-slide" >
              <a href="">
                <div class="equipment_container_wrapper thumbnail ">
                  <div class="equipment_container">
                    <div class="equipment_container_img">

                      <img src="{{ asset('storage/'.$equipment->path.$equipment->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
                    </div>
                    <div class="equipment_container_body">
                      <div class="equipment_name"><strong>{{$equipment->equipment_name}}</strong></div>
                      <div class="equipment_production_name"><strong>{{$equipment->company_name}}</strong></div>
                      <div class="equipment_status"><strong>{{$equipment->equipment_status}}</strong></div>
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
    </section> -->


    <!-- PPL상품 ========================================================= -->


    <!-- <section id="new_drama" class="three">
      <div class="container">

        <header>
          <h2>PPL상품</h2>
        </header>

        <div class="swiper-container">
          <div class="swiper-scrollbar"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-wrapper">

          @foreach ($products as $product)

            <div class="swiper-slide" >
              <a href="">
                <div class="product_container_wrapper thumbnail ">
                  <div class="product_container">
                    <div class="product_container_img">

                      <img src="{{ asset('storage/'.$product->path.$product->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
                    </div>
                    <div class="equipment_container_body">
                      <div class="product_name"><strong>{{$product->product_name}}</strong></div>
                      <div class="company_name"><strong>{{$product->company_no}}</strong></div>
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
    </section> -->



  </div>


@endsection
