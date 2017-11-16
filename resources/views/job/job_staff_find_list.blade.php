@extends('layout')

@section('title','구인구직')

@section('content')

<div id="main">


  <section id="job_menu" class="three">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/job') }}">求人・求職</a></li>
      <li class="breadcrumb-item active">スタッフリスト</li>
    </ol>

    <div class="job_table_menu">
      <a href="{{ url('/job') }}"><button type="button" class="btn btn-default job_menu"> 全体 </button></a>
      <a href="{{ url('/job_actor_find_list') }}"><button type="button" class="btn btn-default job_menu"> 俳優リスト </button></a>
      <a href="{{ url('/job_staff_find_list') }}"><button type="button" class="btn btn-default job_menu"> スタッフリスト </button></a>
    </div>

    <div class="job_staff_list_div">
      <div class="job_staff_list_table_title">
        <img src="{{ asset('images/user_icon.png') }}">
        <h2>スタッフリスト</h2>
      </div>
      <div class="job_staff_list_table_div">
        <table class="table table-striped job_staff_list_table">
          <tr>
            <td>#</td>
            <td colspan="2">名前</td>
            <td>分野</td>
            <td>性別</td>
            <td>地域</td>
            <td>キャリア</td>
          </tr>
          @foreach ($staffs as $staff)
            <tr>
              <td>{{$staff->user_no}}</td>
              <th class="contest_apply_img">
                <img class="img-circle m-t-xs img-responsive" src="{{ asset('storage/'.$staff->path.$staff->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
              </th>
              <td>{{$staff->name}}</td>
              <td>{{$staff->type}}</td>
              @if($staff->gender == 'm')
              <td>남</td>
              @else
              <td>여</td>
              @endif
              <td>{{$staff->local}}</td>
              <td>{{$staff->career}}</td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
    {{ $staffs->links() }}
  </section>

</div>

@endsection
