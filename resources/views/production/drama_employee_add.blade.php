@extends('layout')

@section('title','스태프')

@section('content')
<div id="main">
  <section id="staff_add" class="three">
    <form action="{{ url('/employee_add') }}" method="post">
      {{ csrf_field() }}
    <input type="hidden" name="drama_number" value="{{$drama_number}}">
    <div class="ibox_employees_add">
      <label>스태프 추가</label>
      <hr/>
      <div class="employees_add">
        <div class="form-group drama_staff_add">
          <div class="col-md-4 position">
            <label class="employee_add_label">포지션 선택</label>
            <select class="form-control position_select" name="employee_position[]" data-link=" {{ url('position_select/') }}" onchange="position_select(this)">
            @foreach($position_lists as $position_list)
              <option value="{{$position_list->position_no}}">{{$position_list->position}}</option>
            @endforeach
            </select>
          </div><!--position end-->

          <div class="col-md-4 staff">
            <label class="employee_add_label">스태프 선택</label>
            <select class="form-control staff_select" name="employee[]" data-link="{{ url('staff_info/')}}" onchange="staff_info(this.value)"></select>
          </div>

          <div class="col-md-4 team">
            <label class="employee_add_label">추가될 팀 선택</label>
            <select class="form-control team_select" name="employee_team[]">
              @foreach($team_lists as $team_list)
                <option value="{{$team_list->team_no}}">{{$team_list->team_type}}</option>
              @endforeach
            </select>
          </div>

          <button type="button" class="staff_add_icon btn btn-primary" aria-label="Left Align" onclick="drama_staff_add()">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
          </button>
        </div><!--drama_staff_add end-->

      </div><!--employees_add end-->

      <!--플러스 버튼 누를 때 마다 폼이 생기는 div-->
      <div class="form-group staff_added"></div><br/>
      <button class="col-md-5 btn btn-success staff_add_submit" type="submit" name="button">등록</button>
    </div>

    <div class="ibox_staff_info">
      <label>스태프 정보</label>
      <hr/>
      <div class="staff_info">
        <table class="table table-striped">
          <tr class="staff_info_title">
            <td>Name</td>
            <td>Gender</td>
            <td>Birth</td>
            <td>Local</td>
            <td>tel</td>
          </tr>
        </table>
      </div><!--staff_info end-->
    </div>

    </form>
  </section>
</div><!--main end-->
@endsection
