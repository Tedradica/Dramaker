@extends('layout')

@section('title','ppl')

@section('content')

<div id="main">
  <section id="production_drama_view_title" class="two">
    <header>
      <h2>ppl</h2>
    </header>
    @foreach ($products as $product)
      <div class="production_drama_view_info">
        <div class="production_drama_view_img">
          <img src="./images/test_img.png" alt="">
        </div>
        <div class="production_drama_view_detail">
          <div class="production_drama_view_content">
            <div class="production_drama_view_drama_name"><strong>{{ $product->name}}</strong></div>
            <div class="production_drama_view_user"><strong>{{ $product->product_name}}</strong></div>
          </div>
        </div>
      </div>
    @endforeach
  </section>
  <section class="two">
    상세설명
    <div class="">
      {{ $product->introduce}}
    </div>
  </section>
</div>

@endsection
