
@extends('layout')

@section('title','制作現場')

@section('content')

<div id="main">
  <section id="new_drama" class="two">
    @if(Auth::user()->user_type == '기업')
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item active">制作現場</li>
    </ol>
    <div class="production_info_line_div">
      <div class="ibox-production">
        <div class="ibox-title-production">
          <label>制作中の作品</label><hr/>
        </div>
        <div class="ibox-content-production">
          {{$drama_cnt}}
        </div>
      </div>

      <div class="ibox-production">
        <div class="ibox-title-production">
          <label>登録たれた装備</label><hr/>
        </div>
        <div class="ibox-content-production">
          {{$equipment_cnt}}
        </div>
      </div>

      <div class="ibox-production">
        <div class="ibox-title-production">
          <label>登録たれた職員</label><hr/>
        </div>
        <div class="ibox-content-production">
          {{$employee_cnt}}
        </div>
      </div>
    </div>

    <!-- <h2>{{Auth::user()->name}}</h2> -->
    <div class="production_content_line_div">
      <div class="production_content_div">
        <div class="production_header col-md-15">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#drama" aria-controls="drama" role="tab" data-toggle="tab">作品のリスト</a></li>
            <li role="presentation"><a href="#equipment" aria-controls="equipment" role="tab" data-toggle="tab">装備のリスト</a></li>
            <li role="presentation"><a href="#staff" aria-controls="staff" role="tab" data-toggle="tab">職員のリスト</a></li>
          </ul>
        </div>


        <!-- 작품 목록 -->

        <div class="tab-content drama_view_tab_content">
          <div role="tabpanel" class="tab-pane fade in active" id="drama">
            <a href="{{ url('/production_drama_write') }}">
              <button type="button" class="drama_plus_icon btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
              </button>
            </a>

            <!-- <div class="swiper-container">
              <div class="swiper-scrollbar"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-wrapper"> -->

            @foreach ($dramas as $drama)

            <div class="drama_list" >
              <a href="{{ url( '/production_drama_view' , [$drama->drama_no] ) }}">
              <div class="drama_container_wrapper thumbnail ">
                <div class="drama_container">
                  <div class="drama_container_img">
                    <img src="{{ asset('storage/'.$drama->path.'/'.$drama->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
                  </div>
                  <div class="drama_container_body">
                    <div class="drama_title"><strong>{{$drama->drama_name}}</strong></div>
                    <div class="drama_category"><strong>{{$drama->drama_status}}</strong></div>
                  </div>
                </div>
              </div>
              </a>
            </div>

            @endforeach

             <!-- </div>
             <div class="swiper-pagination"></div>
             </div> -->

           </div><!--drama end-->

           <!--장비 목록-->
            <div role="tabpanel" class="tab-pane fade" id="equipment">
              <a href="{{ url('/production_equipment_write') }}">
                <button type="button" class="equipment_plus_icon btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </button>
              </a>

            <!-- <div class="swiper-container">
             <div class="swiper-scrollbar"></div>
             <div class="swiper-button-prev"></div>
             <div class="swiper-button-next"></div>
             <div class="swiper-wrapper"> -->

               @foreach ($production_equipments as $production_equipment)
                 <div class="drama_equipment" >
                     <div class="proudction_equipment_container_wrapper thumbnail" data-link="{{ url('/production_equipment') }}" onclick="equipment_show({{$production_equipment->equipment_no}})">
                       <div class="proudction_equipment_container">
                         <div class="proudction_equipment_container_img">
                           <img src="{{ asset('storage/'.$production_equipment->path.'/'.$production_equipment->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`">
                         </div>
                         <div class="proudction_equipment_container_body">
                           <div class="eqipment_title"><strong>{{$production_equipment->equipment_name}}</strong></div>
                           <div class="eqipment_category"><strong>{{$production_equipment->equipment_status}}</strong></div>
                         </div>
                       </div>
                     </div>
                 </div>

               @endforeach


         </div><!--equiment end-->

         <!--직원목록-->

           <div role="tabpanel" class="tab-pane fade" id="staff">
             <button type="button" class="employee_plus_icon btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
               <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
             </button>
             @foreach ($production_employees as $production_employee)
              <div class="ibox-production-staff" data-link="{{ url('/production_employee') }}" onclick="employee_show({{$production_employee->user_no}})" >
                <div class="ibox-content-production-staff">
                  <div class="text-center">
                    <div class="profile_img">
                      <img class="img-circle m-t-xs img-responsive staff_profile_img" src="{{ asset('storage/'.$production_employee->path.$production_employee->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
                    </div>
                    <div class="staff_position">
                      {{$production_employee->position}}
                    </div>

                    <div class="staff_name">
                      {{$production_employee->user_name}}
                    </div>

                    <div class="staff_email">
                      <a href="mailto:{{$production_employee->email}}">{{$production_employee->email}}</a>
                    </div>

                    <div class="staff_tel">
                      {{$production_employee->tel}}
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

          </div><!--staff end-->

        </div><!--content end-->
      </div>
    </div>
    @else
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item active">制作現場</li>
    </ol>

    <div class="production_content_line_div">
      <div class="production_content_div">
        <div class="production_header col-md-15">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#drama" aria-controls="drama" role="tab" data-toggle="tab">作品のリスト</a></li>
            <li role="presentation"><a href="#equipment" aria-controls="equipment" role="tab" data-toggle="tab">装備のリスト</a></li>
            <li role="presentation"><a href="#staff" aria-controls="staff" role="tab" data-toggle="tab">職員のリスト</a></li>
          </ul>
        </div>

        <!-- 작품 목록 -->

        <div class="tab-content drama_view_tab_content">
          <div role="tabpanel" class="tab-pane fade in active" id="drama">
            <a href="{{ url('/production_drama_write') }}">
              <button type="button" class="drama_plus_icon btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
              </button>
            </a>

            <!-- <div class="swiper-container">
              <div class="swiper-scrollbar"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-wrapper"> -->

            @foreach ($dramas as $drama)

            <div class="drama_list" >
              <a href="{{ url( '/production_drama_view' , [$drama->drama_no] ) }}">
              <div class="drama_container_wrapper thumbnail ">
                <div class="drama_container">
                  <div class="drama_container_img">
                    <img src="{{ asset('storage/'.$drama->path.'/'.$drama->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
                  </div>
                  <div class="drama_container_body">
                    <div class="drama_title"><strong>{{$drama->drama_name}}</strong></div>
                    <div class="drama_category"><strong>{{$drama->drama_status}}</strong></div>
                  </div>
                </div>
              </div>
              </a>
            </div>

            @endforeach

             <!-- </div>
             <div class="swiper-pagination"></div>
             </div> -->

           </div><!--drama end-->

           <!--장비 목록-->
            <div role="tabpanel" class="tab-pane fade" id="equipment">
              <a href="{{ url('/production_equipment_write') }}">
                <button type="button" class="equipment_plus_icon btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </button>
              </a>

            <!-- <div class="swiper-container">
             <div class="swiper-scrollbar"></div>
             <div class="swiper-button-prev"></div>
             <div class="swiper-button-next"></div>
             <div class="swiper-wrapper"> -->

               @foreach ($production_equipments as $production_equipment)
                 <div class="drama_equipment" >
                     <div class="proudction_equipment_container_wrapper thumbnail" data-link="{{ url('/production_equipment') }}" onclick="equipment_show({{$production_equipment->equipment_no}})">
                       <div class="proudction_equipment_container">
                         <div class="proudction_equipment_container_img">
                           <img src="{{ asset('storage/'.$production_equipment->path.'/'.$production_equipment->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`">
                         </div>
                         <div class="proudction_equipment_container_body">
                           <div class="eqipment_title"><strong>{{$production_equipment->equipment_name}}</strong></div>
                           <div class="eqipment_category"><strong>{{$production_equipment->equipment_status}}</strong></div>
                         </div>
                       </div>
                     </div>
                 </div>

               @endforeach


         </div><!--equiment end-->


         <!--직원목록-->

         <div role="tabpanel" class="tab-pane fade" id="staff">
           <button type="button" class="employee_plus_icon btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
             <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
           </button>
           @foreach ($production_employees as $production_employee)
            <div class="ibox-production-staff" data-link="{{ url('/production_employee') }}" onclick="employee_show({{$production_employee->user_no}})" >
              <div class="ibox-content-production-staff">
                <div class="text-center">
                  <div class="profile_img">
                    <img class="img-circle m-t-xs img-responsive staff_profile_img" src="{{ asset('storage/'.$production_employee->path.$production_employee->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
                  </div>
                  <div class="staff_position">
                    {{$production_employee->position}}
                  </div>

                  <div class="staff_name">
                    {{$production_employee->user_name}}
                  </div>

                  <div class="staff_email">
                    <a href="mailto:{{$production_employee->email}}">{{$production_employee->email}}</a>
                  </div>

                  <div class="staff_tel">
                    {{$production_employee->tel}}
                  </div>
                </div>
              </div>
            </div>
            @endforeach

        </div><!--staff end-->
      </div>
    </div>
    @endif

  </div><!--main end-->
</section>
  <!--member modal-->
  <div class="modal fade" id="production_member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Profile</h3>
        </div>
        <div class="modal-body">
          <div class="modal-member-img">
            <span class="modal-member-img-span"></span>
          </div>
          <div class="modal-member-name">
            <span class="modal-member-name-span"></span>
          </div>
          <div class="modal-member-position">
            <span class="label label-primary modal-member-position-btn"></span>
          </div>
          <div class="modal-member-info-div">
            <div class="modal-member-gender">
              <label>성별</label>
              <span></span>
            </div>
            <div class="modal-member-birth">
              <label>생년월일</label>
              <span></span>
            </div>
            <div class="modal-member-local">
              <label>지역</label>
              <span></span>
            </div>
            <div class="modal-member-phonenum">
              <label>연락처</label>
              <span></span>
            </div>
            <div class="modal-member-email">
              <label>이메일</label>
              <span></span>
            </div>
            <div class="modal-member-career">
              <label>작품활동/경력</label>
              <span></span>
            </div>
            <div class="modal-member-introduce">
              <label>자기소개</label>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--equipment modal-->
  <div class="modal fade" id="production_equipment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">제목</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> -->
        <div class="modal-body">
          <div class="modal-production-equipment-img">
            <span></span>
          </div>
          <div class="modal-production-equipment-name">
            <label>장비이름</label>
            <span></span>
          </div>
          <div class="modal-production-equipment-status" data-link="{{ url('/equipment_rewrite') }}">
            <label>상태</label>
            <span></span>
          </div>
        </div>
        <div class="modal-footer modal-footer-equipment">
          <button type="button" class="btn btn-primary equipment_rewrite_btn">수정</button>
        </div>
      </div>
    </div>
  </div>


@endsection
