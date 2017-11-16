@extends('layout')

@section('title','구인구직')

@section('content')

<div id="main">

  <section id="job" class="two">
    <header>
      <h2> 구인구직 (배우)</h2>
    </header>
  </section>

  <section id="job_sort" class="three">
    <button type="button" class="btn btn-primary job_sort_btn"> 정렬1 </button>
    <button type="button" class="btn btn-primary job_sort_btn"> 정렬2 </button>
    <button type="button" class="btn btn-primary job_sort_btn"> 정렬3 </button>
    <div>검색</div>
  </section>

  <section id="job_menu" class="three">
    <a href="{{ url('/job_actor_recruit_list') }}"><button type="button" class="btn btn-primary job_menu"> 배우 </button></a>
    <a href="{{ url('/job_staff_recruit_list') }}"><button type="button" class="btn btn-primary job_menu"> 스태프 </button></a>
    <a href="{{ url('/job_actor_find_list') }}"><button type="button" class="btn btn-primary job_menu"> 배우찾기 </button></a>
    <a href="{{ url('/job_staff_find_list') }}"><button type="button" class="btn btn-primary job_menu"> 스태프찾기 </button></a>
  </section>
    <section  id="job_menu" class="three">

      <a href="{{ url('/job_actor_recruit_write') }}"><button type="button" class="btn btn-primary job_menu"> 배우 모집  글쓰기 </button></a>

    <div>배우구인</div>
    <div>
    <table class="table table-bordered" >
      <tr>
        <td>제목</td>
        <td>작품이름</td>
        <td>제작사</td>
        <td>모집배우</td>
        <td>지역</td>
        <td>마감기한</td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
    </table>
  </div>
  </section>

</div>

@endsection
