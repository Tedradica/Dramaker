@extends('layout')

@section('title','스태프')

@section('content')
<div id="main">

  <section id="staff_list" class="three">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/production') }}">制作現場</a></li>
      <li class="breadcrumb-item"><a href="{{ URL::previous() }}">作品の情報</a></li>
      <li class="breadcrumb-item active">スタッフ、設備リのスト</li>
    </ol>



    <div class="production_content_line_div">
      <div class="drama_content_div">
        <div class="production_header col-md-15">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#drama_staff" aria-controls="drama_staff" role="tab" data-toggle="tab">스태프목록</a></li>
            <li role="presentation"><a href="#drama_equipment" aria-controls="drama_equipment" role="tab" data-toggle="tab">장비목록</a></li>
          </ul>
        </div>

        <div class="tab-content drama_view_tab_content">
          <div role="tabpanel" class="tab-pane fade in active" id="drama_staff">
            <div class="drama_staff_add_icon_div">
              <a href="{{ url('/drama_employee_add', [$drama_number]) }}">
                <button type="button" class="drama_staff_plus_icon btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </button>
              </a>
            </div>

              @foreach ($staffs as $staff)
              <div class="ibox-staff" data-link="{{ url('/drama_employee/') }}" onclick="drama_employee_show({{$staff->user_no}})">
                <div class="ibox-content-staff">
                  <div class="text-center">
                    <div class="profile_img">
                      <img class="img-circle m-t-xs img-responsive staff_profile_img" src="{{ asset('storage/'.$staff->path.$staff->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
                    </div>
                    <div class="staff_position">
                      {{$staff->position}}
                    </div>

                    <div class="staff_name">
                      {{$staff->name}}
                    </div>

                    <div class="staff_team_type">
                      {{$staff->team_type}}
                    </div>

                    <div class="staff_email">
                      <a href="mailto:{{$staff->email}}">{{$staff->email}}</a>
                    </div>

                    <div class="staff_tel">
                      {{$staff->tel}}
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              {{ $staffs->links() }}
           </div>

           <div role="tabpanel" class="tab-pane fade" id="drama_equipment">
             <div class="drama_equipment_icon_div">
               <a href="{{ url('/production_equipment_write') }}">
                 <button type="button" class="equipment_plus_icon btn btn-default" aria-label="Left Align" onclick="drama_staff_add()">
                   <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                 </button>
               </a>
             </div>

              <!--여기 내용 넣기-->

            </div><!--equipment end-->
         </div><!--tabcontent end-->
       </div><!--production content div end-->
     </div><!--production_content_line_div end-->


      <!--Modal-->
      <div class="modal fade" id="staff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Profile</h3>
            </div>
            <div class="modal-body">
              <div class="modal-staff-img img-rounded">
                <span></span>
              </div>
              <div class="modal-staff-name">
                <span class="modal-staff-name-span"></span>
              </div>

              <div class="modal-staff-position">
                <span class="label label-primary modal-staff-position-btn"></span>
              </div>

              <div class="modal-staff-info-div">
                <div class="modal-staff-gender">
                  <label>성별</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <span></span>
                </div>

                <div class="modal-staff-phonenum">
                  <label>연락처</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <span></span>
                </div>

                <div class="modal-staff-email">
                  <label>이메일</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <span></span>
                </div>

                <div class="modal-staff-introduce">
                  <label>자기소개</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <span></span>
                </div>

                <div class="modal-staff-career">
                  <label>작품활동/경력</label>&nbsp;&nbsp;&nbsp;
                  <span></span>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger staff_delete" data-link="{{ url('/staff_delete/') }}">삭제</button>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!--Modal end-->
</div>
@endsection
