@extends('layout')

@section('title','アラーム')

@section('content')

<script>


</script>

<div id="main">
  <!-- <section id="notice_title" class="two">
    <header>
      <h2>알림</h2>
    </header>
  </section> -->

  <section id="notices" class="three">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item active">アラーム</li>
    </ol>

    <div class="notices_table_div">
      <h2><span class="glyphicon glyphicon-time"></span>&nbsp;アラームリスト</h2><hr/>
      <div class="notices_table_sub_div">
        <table class="table table-hover notices_table">
          @foreach($notices as $notice)
            <tr class="notice_wrapper">
              <td><span class="label label-primary recruit_choose_btn">&nbsp;&nbsp;修正&nbsp;&nbsp;</span></td>
              @if($notice->notice_status == 1)
              <td><span class="label label-primary read_notice">&nbsp;&nbsp;確認&nbsp;&nbsp;</span></td>
              @else
              <td><span class="label label-primary new_notice">&nbsp;&nbsp;未確認&nbsp;&nbsp;</span></td>
              @endif
              <td class="notice_title_img ">
                <img src="{{ asset('storage/'.$notice->path.$notice->save_name) }}"  class="img-circle" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
              </td>
              <td>
                <a href="{{ url( '/notice_read' , [$notice->notice_no] ) }}">{{$notice->notice}}</a>
              </td>
              <td>{{$notice->name}}</td>
              <td>
                @if(floor ((strtotime($time)-strtotime($notice->created_at))/60) < 60)
                  {{ floor ((strtotime($time)-strtotime($notice->created_at))/60) }}分前
                  @elseif(floor ((strtotime($time)-strtotime($notice->created_at))/60/60) < 24 )
                  {{ floor ((strtotime($time)-strtotime($notice->created_at))/60/60) }}時間前
                  @else
                {{ floor ((strtotime($time)-strtotime($notice->created_at))/60/60/24) }}日前
                @endif
              </td>
            </tr>
            <input type="hidden" id="notice_no" value="{{$notice->notice_no}}">
            @endforeach

          </table>
      </div>
    </div>


  </section>

</div>
@endsection
