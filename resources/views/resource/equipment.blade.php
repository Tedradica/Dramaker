@extends('layout')

@section('title','장비대여')

@section('content')

<div id="main">

  <section id="equipment" class="three">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item active">資源の情報</li>
      <li class="breadcrumb-item active">装備</li>
    </ol>
        <div class="equipment_div">
         @foreach ($equipments as $equipment)
           <div class="equipment_container_wrapper thumbnail" data-toggle="modal" data-target="#production_equipment">
             <div class="equipment_container">
               <div class="equipment_container_img">
                 <img src="{{ asset('storage/'.$equipment->path.$equipment->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
               </div>
               <div class="equipment_container_body">
                 <div class="equipment_title"><strong>{{$equipment->company_name}}</strong></div>
                 <div class="equipment_category"><strong>{{$equipment->equipment_name}}</strong></div>
                 @if($equipment->equipment_status == '고장')
                  <div class="equipment_period"><button class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;故障&nbsp;&nbsp;&nbsp;&nbsp;</button></div>
                 @else
                  <div class="equipment_period"><button class="btn btn-success">貸与可能</button></div>
                @endif
               </div>
             </div>
           </div>
         @endforeach
        </div>
        {{ $equipments->links() }}
  </section>

</div>
@endsection
