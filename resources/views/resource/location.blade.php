
@extends('layout')

@section('title','장소대여')

@section('content')

<div id="main">

  <section id="place" class="three">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item active">資源の情報</li>
      <li class="breadcrumb-item active">場所</li>
    </ol>

    <div class="location_div">
      @foreach ($locations as $location)

        <a href="{{ url('/placeinfo', [$location->location_no]) }}">
          <div class="place_container_wrapper thumbnail ">
          <div class="place_container">
            <div class="place_container_img">
              <img src="{{ asset('storage/'.$location->path.$location->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
            </div>
            <div class="place_container_body">
              <div class="place_categroy"><h2>{{$location->category}}</h2></div>
              <div class="place_title"><h2>{{$location->location_name}}</h2></div>
            </div>
          </div>
        </div>
      </a>
      @endforeach

    </div>
  </section>

</div>
@endsection
