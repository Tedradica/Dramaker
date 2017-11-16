@extends('layout')

@section('title','구인구직')

@section('content')

<div id="main">
    <section id="job_menu" class="three">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/job') }}">求人・求職</a></li>
        <li class="breadcrumb-item active">俳優リスト</li>
      </ol>

      <div class="job_table_menu">
        <a href="{{ url('/job') }}"><button type="button" class="btn btn-default job_menu"> 全体 </button></a>
        <a href="{{ url('/job_actor_find_list') }}"><button type="button" class="btn btn-default job_menu"> 俳優リスト </button></a>
        <a href="{{ url('/job_staff_find_list') }}"><button type="button" class="btn btn-default job_menu"> スタッフリスト </button></a>
      </div>

      <div class="job_actor_list_div">
        <div class="job_actor_list_table_title">
          <img src="{{ asset('images/user_icon.png') }}">
          <h2>俳優リスト</h2>
        </div>
        <div class="job_actor_list_table_div">
          <table class="table table-striped job_actor_list_table">
            <tr class="job_actor_list_table_header">
              <th>#</th>
              <th colspan="2">名前</th>
              <th>生年月日</th>
              <th>性別</th>
              <th>身長/体重</th>
              <th>地域</th>
              <th>キャリア</td>
            </tr>
            @foreach($actors as $actor)
            <tr>
              <th>{{$actor->user_no}}</th>
              <th class="contest_apply_img">
                <img class="img-circle m-t-xs img-responsive" src="{{ asset('storage/'.$actor->path.$actor->save_name) }}" onerror="this.src=`{{ asset('images/user_profile.png') }}`" >
              </th>
              <th>{{$actor->name}}<br/></th>
              <th>{{$actor->birth}}</th>
              @if($actor->gender == 'm')
              <th>남</th>
              @else
              <th>여</th>
              @endif
              <th>{{$actor->height}}/{{$actor->weight}}</th>
              <th>{{$actor->local}}</th>
              <th>{{$actor->career}}</th>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
      {{ $actors->links() }}
  </section>
</div>

@endsection
