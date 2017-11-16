
@extends('layout')

@section('title','장비목록')

@section('content')

<div id="main">
  <section id="equipment_list_title" class="two">
    <h2>장비 목록</h2>
  </section>
  <section id="equipment_list_category" class="three">
    <div class="equipment_list_category">
      카테고리
    </div>
  </section>

  <section id="equipment_array" class="three">

    <button type="button" class="btn btn-primary contest_sort_btn"> 정렬1 </button>
    <button type="button" class="btn btn-primary contest_sort_btn"> 정렬2 </button>
    <button type="button" id="drama_equipment_add_btn" class="btn btn-primary contest_sort_btn" data-toggle="modal" data-target="#equipment_add" onclick="drama_equipment_add({{$production_no}})" data-link="{{ url('/production_equipments_get') }}" > 장비 추가 </button>

  </section>


  @foreach ( $equipments as $equipment)

  <section id="equipment" class="three">
    <div class="container">

      <div class="equipment_container_wrapper thumbnail" data-toggle="modal" data-target="#equipment_list">
        <div class="equipment_container">
          <div class="equipment_container_img">
            <img src="" onerror="this.src=`{{ asset('images/test_img.png') }}`">
          </div>
          <div class="equipment_container_body">
            <div class="equipment_title"><strong>{{$equipment->equipment_name}}</strong></div>
            <div class="equipment_category"><strong>{{$equipment_status}}</strong></div>
          </div>
        </div>
      </div>

  @endforeach

      <!-- 장비추가 모달  -->
      <!--modal-->
      <div class="modal fade" id="equipment_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" id="modal_equipment_add">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">장비추가</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="modal-equipment-list">
                <label>장비 목록</label>
                <table id="drama_equipment_add_table">
                  <tr>
                    <td>장비 이름</td>
                    <td>카테고리</td>
                    <td>장비 상태</td>
                    <td> - </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="equipment_add_btn" class="btn btn-secondary" data-dismiss="modal" onclick="equipment_add()">추가</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
            </div>
          </div>
        </div>
      </div>
      <!--modal end-->

      <!-- 장비 읽기 모달  -->
      <!--modal-->
      <div class="modal fade" id="equipment_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">제목</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="modal-equipment-img">
                <label>사진</label>
              </div>
              <div class="modal-equipment-name">
                <label>장비이름</label>
              </div>
              <div class="modal-equipment-status">
                <label>상태</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">수정</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
            </div>
          </div>
        </div>
      </div>
      <!--modal end-->
    </div>
  </section>

</div>
@endsection
