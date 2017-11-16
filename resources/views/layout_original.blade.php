<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- bootstrap -->
    		<!-- Latest compiled and minified CSS -->
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- bootstrap toggle -->
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <!-- jquery ui -->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" />
        <!-- swiper -->
        <link rel="stylesheet" href="{{ asset('css/swiper/swiper.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/swiper.css') }}" />


        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/production.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/job.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/resource.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/contest.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/mypage.css') }}" />
        @yield('css')


        <!-- Scripts -->
        <script src="{{ asset('js/calendar/moment.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <!-- <script src="{{ asset('js/skel.min.js') }}"></script> -->
        <!-- <script src="{{ asset('js/main.js') }}"></script> -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollzer.min.js') }}"></script>
        <!-- <script src="{{ asset('js/progressbar.min.js') }}"></script> -->
        <script src="{{ asset('js/progressbar.js') }}"></script>
        <script src="{{ asset('js/docx2html.js') }}"></script>

        <!-- google maps api -->
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa8wIx6rWo4qOo7ynl7Z2TYjdwKsyXwdM&callback=initMap"></script> -->
        <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB4AcJ5j7k4HpWPguMB50RSyKP074waKQ8"></script>

        <!-- Pdf -->
        <script src="{{ asset('js/pdf_chan/KOR/pdfmake.min_kor.js') }}"></script>
        <script src="{{ asset('js/pdf_chan/KOR/vfs_fonts_kor.js') }}"></script>

        <script src="//{{ Request::getHost() }}:9002/socket.io/socket.io.js"></script>
        <script src="//{{ Request::getHost() }}:9000/socket.io/socket.io.js"></script>
        <script src="{{ asset('js/alarm.js') }}"></script>

        <script src="{{ asset('js/user.js') }}"></script>
        <script src="{{ asset('js/production.js') }}"></script>
        <script src="{{ asset('js/util.js') }}"></script>
        <script src="{{ asset('js/nav.js') }}"></script>

        <script src="{{ asset('js/contest.js') }}"></script>
        <script src="{{ asset('js/image_upload.js') }}"></script>
        <script src="{{ asset('js/job.js') }}"></script>
        <script src="{{ asset('js/resource.js') }}"></script>



        <!--naver 지도 api-->
        <!-- <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=YqgUwV75hW1QYm8Sm5rT"></script> -->
        <!--google 지도 api-->
        <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2d8zTz6CpXd_slLRkoqG91MeIYPwj-n0&callback=initMap"></script> -->

        @yield('script')


    </head>

    <body>

        <!-- Header -->
        			<div id="header">

        				<div class="top">

        					<!-- Logo -->
        						<div id="logo">
        							<!-- <span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span> -->
                      <div id="title">
                        <a href="{{ url('/home') }}">DRAMAKER</a>
                      </div>
                      <p>GoodITea</p>
        						</div>

        					<!-- Profile -->


                  @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <input type="hidden"  id="user_no" value="0"></input>
                    <!-- 로그인 안한 유저의 번호는 0 -->

                  @else
                  <div class="dropdown profile_element">
                    <span>
                      @if (Auth::guest())
                        <img src= {{ asset('images/non_profile.png') }} class="img-circle">
                      @else
                        <img src= {{ asset('storage/image/user/users_profile_'.Auth::user()->user_no.'.jpg') }} onerror="this.src=`{{ asset('images/test_img.png') }}`" class="img-circle">
                      @endif
                    </span>
                    <br>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
                      <span class="clear">
                        <span class="block m-t-xs">
                          <strong>
                            {{ Auth::user()->name }}
                          </strong>
                        </span>
                        <span class="text-muted text-xs block">

                          <b class="caret"></b>
                        </span>
                      </span>
                    </a>

                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                      <li>
                        <a href="{{ url('/mypage') }}">마이페이지</a>
                      </li>
                      <li>
                        <a href="{{ route('noticeGet') }}">메세지</a>
                      </li>
                      <li>
                        <a id="notice" href="{{ route('noticeGet') }}">알림</a>
                        <img id="notice_new_img" src="{{ asset('images/new.png') }}" data-link ="{{ route('notice') }}">
                      </li>
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                      logout
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                    </ul>
                    @endif

                  </div>



        						<div id="profile">
        							<div id="profile_img">
                        @if (Auth::guest())
                          <img src= {{ asset('images/non_profile.png') }} class="img_rounded">
                        @else
                          <img src= {{ asset('storage/image/user/users_profile_'.Auth::user()->user_no.'.jpg') }} onerror="this.src=`{{ asset('images/test_img.png') }}`" class="img_rounded">
                        @endif
                      </div>
        							<div id="profile_body">

        									<nav>
        										<ul>
                              @if (Auth::guest())
                                  <li><a href="{{ route('login') }}">Login</a></li>
                                  <li><a href="{{ route('register') }}">Register</a></li>
                                  <input type="hidden"  id="user_no" value="0"></input>
                                  <!-- 로그인 안한 유저의 번호는 0 -->
                              @else
                                  <li class="dropdown">

                                          {{ Auth::user()->name }}
                                          <input type="hidden"  id="user_no" value="{{Auth::user()->user_no}}"></input>
                                          <!-- 로그인한 유저의 user_no -->

                                          <li>
                                            <a href="{{ url('/mypage') }}">마이페이지</a>
                                          </li>
                                          <li>
                                            <!--  메세지  -->

                                            <a href="{{ route('noticeGet') }}">메세지</a>
                                            <!-- <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> -->

                                            <!--  알람  -->

                                            <a id="notice" href="{{ route('noticeGet') }}">알림</a>

                                            <img id="notice_new_img" src="{{ asset('images/new.png') }}" data-link ="{{ route('notice') }}">
                                            <!-- <a href="{{ route('notice') }}"><span class="glyphicon glyphicon-exclamation-sign" ></span></a> -->

                                          </li>
                                          <li>
                                              <a href="{{ route('logout') }}"
                                                  onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                          logout
                                              </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  {{ csrf_field() }}
                                              </form>
                                          </li>
                                      <!-- </ul> -->
                                  </li>
                              @endif
        										</ul>
        									</nav>
        							</div>

        						</div>



        					<!-- Nav -->
        						<nav id="nav">
        							<!--

        								Prologue's nav expects links in one of two formats:

        								1. Hash link (scrolls to a different section within the page)

        								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

        								2. Standard link (sends the user to another page/site)

        								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

        							-->
        							<ul>
                        @if (Auth::guest())
                          <li><a href="{{ url('/production') }}" id="top-link" class="skel-layers-ignoreHref">제작현장</a></li>
                        @else
                          <li><a href="{{ url('/production') }}" id="top-link" class="skel-layers-ignoreHref">제작현장</a></li>
                        @endif
                        <li><a href="{{ url('/job') }}" id="portfolio-link" class="skel-layers-ignoreHref">구인구직</a></li>
                        <li class="equipment_menu"><a href="#">자원정보</a></li>
                          <ul class="equipment_menu_sub">
                            <li><a href="{{ url('/resource_location') }}" id="about-link" class="skel-layers-ignoreHref">장소</li>
                            <li><a href="{{ url('/resource_equipment') }}" id="about-link" class="skel-layers-ignoreHref">장비</li>
                            <li><a href="{{ url('/resource_ppl') }}" id="about-link" class="skel-layers-ignoreHref">PPL</li>
                          </ul>
                        <li><a href="{{ url('/contest') }}" id="contact-link" class="skel-layers-ignoreHref">공모전</a></li>
                        <li><a href="{{ url('/meeting') }}" id="contact-link" class="skel-layers-ignoreHref">온라인 미팅</a></li>
                    </ul>
                  </nav>

        				</div>

        				<div class="bottom">

        					<!-- Social Icons -->
        						<!-- <ul class="icons">
        							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
        							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
        							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
        						</ul> -->

        				</div>

        			</div>


        <!--  ====================================================================================  -->
        @yield('content')


        <!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>9조</a></li>
					</ul>

			</div>

      <script src="{{ asset('js/swiper/swiper.min.js') }}"></script>
      <script src="{{ asset('js/swiper.js') }}"></script>

    </body>
</html>
