@extends('layout')

@section('title','공모전 지원')

@section('content')

<script>

$(document).ready(function() {

    //new ajax data send

    $("form#data").submit(function(event){

      console.log("클릭");
      var url = $("#contestw_title_section").attr('data-link');
      console.log("url"+url);

      //disable the default form submission
      event.preventDefault();

      //grab all form data
      var formData = new FormData($(this)[0]);

      console.log(formData);

      $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
  	    processData: false,
        success: function (data) {
          console.log(data);
          // console.log("성공");

          //알람부분
          //for in 문으로 순회하면서 alarm서버로 데이터 전송
          for(var i in data){

            console.log(data[i]);

            socket.emit('contest_apply',
              { sender : data[i]['sender'],
                receiver : data[i]['receiver'],
                time : data[i]['time'],
                notice : data[i]['notice'],
              }
            );

          }

          alert("지원되었습니다.");

          var schedule_url = $('#contestw_title_section').attr('data-link-home');
          // location.href="http://54.92.37.34/dramaker/public/home";
          // location.href="http://106.249.36.53/php/produce_supporter/public/home";
          location.href = schedule_url;

        },
        error:function(e){
            console.log(e);
        }

      }); //ajax end

    }); //event end

});

</script>


<div id="main">


  <section id="contestw_title_section" class="three" data-link="{{ route('contestApply') }}" data-link-home="{{ route('home') }}">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/contest') }}">コンテスト</a></li>
      <li class="breadcrumb-item"><a href="{{ URL::previous() }}">コンテストの詳細</a></li>
      <li class="breadcrumb-item active">コンテストの志望</li>
    </ol>
    <!-- <form class="form-horizontal contestwrite_form" action="{{ route('contestApply') }}" method="post" enctype="multipart/form-data"> -->
    <form class="form-horizontal contestwrite_form" id="data"  enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group contestwrite_form_title">
        <label class="control-label col-sm-2">タイトル</label>
        <div class="col-sm-9">
          <input type="text" name="title" class="form-control" >
        </div>
      </div>

      <div class="form-group contestwrite_form_content">
        <label class="control-label col-sm-2">内容</label>
        <div class="col-sm-9">
          <textarea class="form-control" name="content" rows="3"></textarea>
        </div>
      </div>

      <div class="form-group contestwrite_form_file">
        <label class="control-label col-sm-2">添付ファイル</label>
        <div class="col-sm-9">
         <input type="file" name="document">
        </div>
      </div>

      <input type="hidden" name="contest_no" value="{{$contest_no[0]->contest_no}}">
      <input class="btn btn-primary"　type="submit" name="" value="送信">
      <button class="btn btn-primary" name="button">キャンセル</button>
    </form>
  </section>

</div>

@endsection
