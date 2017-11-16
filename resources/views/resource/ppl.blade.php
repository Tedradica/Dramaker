
@extends('layout')

@section('title','ppl')

@section('content')

<div id="main">

  <section id="ppl" class="two">
    <header>
      <h2> ppl</h2>
    </header>
  </section>

  <section id="ppl_sort" class="three">
    <div class="ppl_btn">
      <label>카테고리</label>
      <select class="category" name="category" data-link="{{ url('/ppl_category_sort/')}}" onchange="category_sort(this.value)">
        @foreach ($ppl_categorys as $ppl_category)
          <option value="{{$ppl_category->category_no}}">{{$ppl_category->category}}</option>
        @endforeach
      </select>
    </div>
    <div class="ppl_write">
      <a href="{{ url('/resource_company_ppl_write') }}"><button type="button" class="btn btn-primary ppl_sort_btn">글쓰기</a>
    </div>
  </section>

  <section id="ppl" class="three">


       @foreach ($ppls as $ppl)

         <div class="swiper-slide" >
           <a href="{{ url( '/ppl_view' , [$ppl->product_no] ) }}">
             <div class="resource_ppl_container_wrapper thumbnail" data-toggle="modal" data-target="#production_equipment">
               <div class="resource_ppl_container">
                 <div class="resource_ppl_container_img">
                   <img src="{{ asset('storage/'.$ppl->path.$ppl->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
                 </div>
                 <div class="resource_ppl_container_body">
                   <div class="resource_ppl_category"><strong>{{$ppl->category}}</strong></div>
                   <div class="resource_ppl_name"><strong>{{$ppl->name}}</strong></div>
                   <div class="resource_ppl_product_name"><strong>{{$ppl->product_name}}</strong></div>
                 </div>
               </div>
             </div>
           </a>
         </div>

       @endforeach

  </section>



</div>

@endsection
