@extends('layout')

@section('title','장소정보')

@section('content')

<div id="main">

  <section id="contest" class="three">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/resource_location') }}">場所</a></li>
      <li class="breadcrumb-item active">場所の詳細</li>
    </ol>

    <div class="location_view_div">

      <!-- @foreach($location_imgs as $location_img)
      <div class="place_photo">
        <img class="img-thumbnail" src="{{ asset('storage/'.$location_img->path.$location_img->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
      </div>
      @endforeach -->

      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        @foreach($location_imgs as $location_img)
        <div class="carousel-inner">
          <div class="item active">
          <img src="{{ asset('storage/'.$location_img->path.$location_img->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`">
          </div>

          <div class="item">
            <img src="{{ asset('storage/'.$location_img->path.$location_img->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`">
          </div>

          <div class="item">
            <img src="{{ asset('storage/'.$location_img->path.$location_img->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`">
          </div>
        </div>
        @endforeach

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>

        <div id="location_map"></div>
        @foreach ($locations as $location)
        <table class="table table-bordered location_table">
          <tr>
            <td class="active col-sm-3">カテゴリー</td>
            <td class="col-sm-5">{{$location->category}}</td>
          </tr>
          <tr>
            <td class="active">アドレス</td>
            <td id="address" value="{{$location->address}}">{{$location->address}}</td>
          </tr>
          <tr>
            <td class="active">担当者/電話番号</td>
            <td class="">{{$location->manager_tel}}</td>
          </tr>
          <tr>
            <td class="active">場所の紹介</td>
            <td class="">{{$location->location_introduce}}</td>
          </tr>
        </table>
        @endforeach
    </div>
  </section>
</div>

<script>
  $(document).ready(function geocode(){
    var address = $('#address').attr('value');
    // alert(address);
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({'address':address, 'partialmatch':true}, initMap)
  });
</script>
<script>
  function initMap(results, status) {
    if(status == 'OK' && results.length > 0){
      var uluru = {lat: results[0].geometry.location.lat(), lng: results[0].geometry.location.lng()};
      var map = new google.maps.Map(document.getElementById('location_map'), {
        zoom: 17,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  }
</script>
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa8wIx6rWo4qOo7ynl7Z2TYjdwKsyXwdM&callback=initMap">
</script>
@endsection
