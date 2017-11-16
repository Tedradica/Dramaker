@extends('layout')

@section('title','스태프')

@section('content')
<div id="main">

  <section id="staff_list" class="three">

    <div class="staff_plus">
      <a href="{{ url('/drama_employee_add', [$drama_number]) }}"><button class="btn btn-primary btn-lg" type="button" name="button">스태프추가</button></a>
    </div>


    <div class="staff_list_sort">
      <!-- <label>직급</label> -->
      <div class="col-sm-2 staff_position_category">
        <select class="staff_category form-control" data-link="{{ url('/staff_position_sort/')}}" onchange="staff_category_sort(this.value)">
          @foreach($positions as $position)
          <option value="{{$position->position_no}}">{{$position->position}}</option>
          @endforeach
        </select>
      </div>
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

      <!--Modal-->
      <div class="modal fade" id="staff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="modal-staff-img img-rounded">
                <span></span>
              </div>
              <div class="modal-staff-name">
                <label>이름</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span></span>
              </div>

              <div class="modal-staff-gender">
                <label>성별</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span></span>
              </div>

              <div class="modal-staff-phonenum">
                <label>연락처</label>&nbsp;&nbsp;&nbsp;
                <span></span>
              </div>

              <div class="modal-staff-email">
                <label>이메일</label>&nbsp;&nbsp;&nbsp;
                <span></span>
              </div>

              <div class="staff-introduce">
                <label>자기소개</label>
                <div class="modal-staff-introduce">
                  <textarea rows="5" cols="55" maxlength="10"></textarea>
                </div>
              </div>

              <div class="staff-career">
                <label>작품활동/경력</label>
                <div class="modal-staff-career">
                  <textarea rows="5" cols="55" maxlength="10"></textarea>
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
