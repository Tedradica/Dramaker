
@extends('layout')

@section('title','구인구직')

@section('content')

<div id="main">

  <!-- <section id="job" class="two">
    <header>
      <h2> 구인구직 </h2>
    </header>
  </section> -->

  <!-- <section id="job_sort" class="three">
    <button type="button" class="btn btn-primary job_sort_btn"> 정렬1 </button>
    <button type="button" class="btn btn-primary job_sort_btn"> 정렬2 </button>
    <button type="button" class="btn btn-primary job_sort_btn"> 정렬3 </button>
    <div>검색</div>
  </section> -->

  <section id="job_menu" class="three">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item active">求人・求職</li>
    </ol>

    <div class="job_table_menu">
      <a href="{{ url('/job') }}"><button type="button" class="btn btn-default job_menu"> 全体 </button></a>
      <a href="{{ url('/job_actor_find_list') }}"><button type="button" class="btn btn-default job_menu"> 俳優のリスト </button></a>
      <a href="{{ url('/job_staff_find_list') }}"><button type="button" class="btn btn-default job_menu"> スタッフのリスト </button></a>
      <a href="{{ url('/job_recruit_write') }}"><button type="button" class="btn btn-primary job_menu"> 書き込み </button></a>
    </div>

    <div class="recruit_title_header_1"><h2>締め切り間近</h2></div>

    <div>
    <table class="table table-hover job_table">

      <tr class="job_table_tr_header">
        <td>番号</td>
        <td>タイトル</td>
        <td>制作社</td>
        <td>募集職種</td>
        <td>地域</td>
        <td>締め切り</td>
        <td>d-day</td>
      </tr>

      @foreach ($recruits as $recruit)
        <?php
          $today = date('Y-m-d', time());
          $date = $recruit->dead_date;
          if($date > $today){
            $ddy = ( strtotime($date) - strtotime($today) ) / 86400;}
        ?>


        @if(1 <= 5)
        <tr>
          <td>
            {{$recruit->recruit_no}}
          </td>
          <td>
            <a href="{{ url('/job_recruit_view',[$recruit->recruit_no]) }}">{{$recruit->title}}</a>
          </td>
          <td>
            {{$recruit->name}}
          </td>
          <td>
            @foreach($recruit->recruit_position as $position)
                      {{$position}}
            @endforeach
          </td>
          <td>
            {{$recruit->local}}
          </td>
          <td>
            {{$recruit->dead_date}}
          </td>
          <td>
              <?php
                $today = date('Y-m-d', time());
                $date = $recruit->dead_date;
                if($date > $today){
                  $ddy = ( strtotime($date) - strtotime($today) ) / 86400;
                   echo '<button class="btn btn-danger" name="button">'."D-".$ddy.'</button>';} else{
                     echo "마감";
                   }

              ?>
          </td>
        </tr>
        @endif
      @endforeach
    </table>
  </div><br/><br/><br/>

  <div class="recruit_title_header_2"><h2>全体</h2></div>
  <div>
  <table class="table table-hover job_table">

    <tr class="job_table_tr_header">
      <td>番号</td>
      <td>タイトル</td>
      <td>制作社</td>
      <td>募集職種</td>
      <td>地域</td>
      <td>締め切り</td>
      <td>d-day</td>
    </tr>

    @foreach ($recruits as $recruit)

      <tr>
        <td>
          {{$recruit->recruit_no}}
        </td>
        <td>
          <a href="{{ url('/job_recruit_view',[$recruit->recruit_no]) }}">{{$recruit->title}}</a>
        </td>
        <td>
          {{$recruit->name}}
        </td>
        <td>
          @foreach($recruit->recruit_position as $position)
                    {{$position}}
          @endforeach
        </td>
        <td>
          {{$recruit->local}}
        </td>
        <td>
          {{$recruit->dead_date}}
        </td>
        <td>
            <?php
              $today = date('Y-m-d', time());
              $date = $recruit->dead_date;
              if($date > $today){
                $ddy = ( strtotime($date) - strtotime($today) ) / 86400;
                 echo '<button class="btn btn-warning" name="button">'."D-".$ddy.'</button>';} else{
                   echo "마감";
                 }

            ?>
        </td>
      </tr>

    @endforeach
  </table>
  </div>
  </section>

</div>

@endsection
