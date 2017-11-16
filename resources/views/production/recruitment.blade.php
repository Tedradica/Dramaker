@extends('layout')

@section('title','구인')

@section('content')

<div id="main">

  <section id="recruiment" class="three">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/production') }}">制作現場</a></li>
      <li class="breadcrumb-item"><a href="{{ URL::previous() }}">作品の情報</a></li>
      <li class="breadcrumb-item active">求人</li>
    </ol>

    <div class="recruitment_main_title"><h2 class="recruitment_main_title_h2">● 作成した文のリスト</h2></div><br/>
    <div class="recruitment_sequnece">
      <table class="table table-hover staff_table recruiment_table">
        <tr class="recruit_apply_table_header">
          <td>タイトル</td>
          <td>作成日</td>
          <td>締め切り</td>
          <td colspan="2">D-day</td>
          <td></td>
        </tr>

      @foreach($recruitments as $recruitment)
        <tr>
          <td>{{$recruitment->title}}</td>
          <td>{{$recruitment->created_at}}</td>
          <td>{{$recruitment->dead_date}}</td>
          <td colspan="2">
            <?php
              $today = date('Y-m-d', time());
              $date = $recruitment->dead_date;
              if($date > $today){
                $ddy = ( strtotime($date) - strtotime($today) ) / 86400;
                 echo '<button class="btn btn-warning" name="button">'."D-".$ddy.'</button>';} else{
                   echo "締め切り";
                 }

            ?>
          </td>
          <td><button class="btn btn-default" onclick="recruit_apply_list({{$recruitment->recruit_no}})">志願者の確認</button></td>
        </tr>

      <!-- <table class="table table-hover staff_table test22"> -->
      <div class="recruit_apply_list_div">
        <tr class="recruit recruit_apply_list{{$recruitment->recruit_no}}">
          <td>状態</td>
          <td colspan="2">名前</td>
          <td>性別</td>
          <td>生年月日</td>
        </tr>

      @foreach($recruitment->apply_list as $apply)
        @if($apply->recruit_status == 1)
          <tr class="recruit recruit_choose recruit_apply_list{{$apply->recruit_no}} recruitment" data-link="{{ url('/recruit_check') }}" onclick="recruit_check({{$apply->apply_no}})">
            <td>
              <span class="label label-primary recruit_choose_btn">&nbsp;&nbsp;採択&nbsp;&nbsp;</span>
            </td>
            <td>
              <img class="img-circle" src="{{ asset('storage/'.$apply->path.$apply->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
            </td>
            <td>
              {{$apply->name}}
            </td>
            @if($apply->gender == 'm')
              <td>男</td>
            @else
              <td>女</td>
            @endif
            <td>
              {{$apply->birth}}
            </td>
            </tr>
        @elseif($apply->recruit_status == 2)
          <tr class="recruit recruit_no_choose recruit_apply_list{{$apply->recruit_no}} recruitment" data-link="{{url('/recruit_check')}}" onclick="recruit_check({{$apply->apply_no}})">
            <td>
              <span class="label label-default recruit_nochoose_btn">미채택</span>
                  </td>
                  <td>
                    <img class="img-circle" src="{{ asset('storage/'.$apply->path.$apply->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
                  </td>
                  <td>
                    {{$apply->name}}
                  </td>
                  @if($apply->gender == 'm')
                    <td>男</td>
                  @else
                    <td>女</td>
                  @endif
                  <td>
                    {{$apply->birth}}
                  </td>
                </tr>
                @else
                <tr class="recruit recruit_choose recruit_apply_list{{$apply->recruit_no}} recruitment" data-link="{{url('/recruit_check') }}" onclick="recruit_check({{$apply->apply_no}})">
                  <td>
                    <span class="label label-default">未採択</span>
                  </td>
                  <td>
                    <img class="img-circle" src="{{ asset('storage/'.$apply->path.$apply->save_name) }}" onerror="this.src=`{{ asset('images/test_img.png') }}`" >
                  </td>
                  <td>
                    {{$apply->name}}
                  </td>
                  @if($apply->gender == 'm')
                    <td>男</td>
                  @else
                    <td>女</td>
                  @endif
                  <td>
                    {{$apply->birth}}
                  </td>
                </tr>
                @endif
              @endforeach
            </div>
          <!-- </table> -->
        @endforeach
        </table>
      </div>
    </div>


        <!--modal-->
        <div class="modal fade" id="recruiment_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="modal-recruiment-img">
                  <span></span>
                </div>

                <div class="modal-recruiment-name">
                  <label>名前 : </label>
                  <span></span>
                </div>

                <div class="modal-recruiment-nick-name">
                  <label>芸名 : </label>
                  <span></span>
                </div>

                <div class="modal-recruiment-gender">
                  <label>性別 : </label>
                  <span></span>
                </div>

                <div class="modal-recruiment-birth">
                  <label>生年月日 : </label>
                  <span></span>
                </div>

                <div class="modal-recruiment-height">
                  <label>身長 : </label>
                  <span></span>
                </div>

                <div class="modal-recruiment-weight">
                  <label>体重 : </label>
                  <span></span>
                </div>

                <div class="modal-recruiment-phonenum">
                  <label>電話番号 : </label>
                  <span></span>
                </div>

                <div class="modal-recruiment-email">
                  <label>メール : </label>
                  <span></span>
                </div>

                <div class="recruiment-career">
                  <label>作品の活動/キャリア</label>
                  <div class="modal-recruiment-career">
                    <span></span>
                  </div>
                </div>

                <div class="recruiment-pr">
                  <label>PR映像</label>
                  <div class="modal-recruiment-pr"></div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary apply_choose" data-link="{{ url('/recruit_apply_choose/') }}">採用</button>
                <button type="button" class="btn btn-danger apply_cancel" data-link="{{ url('/recruit_apply_cancel/') }}">未採用</button>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>

</div>
@endsection
