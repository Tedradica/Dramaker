@extends('layout')

@section('title','台本修正')

@section('content')

<script>
$(document).ready(function() {
    //new ajax data send
    $("form#data").submit(function(event){
      console.log("클릭");
      var url = $(".script_update_form").attr('data-link');
      var location_href = $(".script_update_form").attr('data-location-href');
      var script_no = $(".script_update_form").attr('data-script-no');
      console.log("url : "+url);
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
          console.log("성공");
          //알람부분
          //for in 문으로 순회하면서 alarm서버로 데이터 전송
          for(var i in data){
            // console.log(data[i]);
            socket.emit('scene_modify',
              { sender : data[i]['sender'],
                receiver : data[i]['receiver'],
                time : data[i]['time'],
                notice : data[i]['notice'],
                token: data[i]['token'],
              }
            );
          }
          alert("修正されました.");
          //script_list로 redirect
          location.href = location_href + "/" + script_no;

        },
        error:function(e){
            console.log(e);
        }
      }); //ajax end
     }); //event end
 });
 </script>

<div id="main">

  <!-- 배역(캐릭터)정보의 PHP변수를 JavaScript변수로 옮겨주기 위해 .. -->
  <div id="field" data-field-id="{{$characters}}" >
  </div>

  <!-- 기존 스크립트 카운터 정보의 PHP변수를 JavaScript변수로 옮겨주기 위해 .. -->
  <div id="field2" data-field-id="{{$script_count}}">
  </div>
  <div id="field3" data-field-id="{{$angle_count}}">
  </div>

  <input type="hidden" name="pre_script_count" value="{{$script_count}}">

  <section id="script_add_form" class="two">

    <div id="script_update">
      <!-- form문 안에서 버튼을 누르게되면 submit한다.. -->
      @foreach($scenes as $scene)
      <form class="script_update_form" id="data" data-link="{{ url('/script_update_set')}}/{{$script_no}}/{{$scene->scene_no}}"  data-location-href="{{ url('/script_list') }}" data-script-no="{{$script_no}}" onkeydown="return captureReturnKey(event)" method="post" >
      <!-- <form class="script_update_form" action=" {{url('/script_update_set')}}/{{$script_no}}/{{$scene->scene_no}} " onkeydown="return captureReturnKey(event)" method="post" > -->
      @endforeach
        {{ csrf_field() }}
        <input id="hidden_scriptCount" type="hidden" name="script_count">
        <input id="hidden_angleCount" type="hidden" name="angle_count">
        <input type="hidden" id = "update_character_package" name="character_package">
        <input type="hidden" id = "update_script_package" name="script_package">
        <div style="display: flex" />
          <div style=" flex:0.5;" /></div>
          <div style=" flex:8;" />
              @foreach($scenes as $scene)
              <div style="display:flex; border:1px solid black; text-align:left">
              シーン番号<input name="scene_no" style="background-color:transparent; border:none; text-align:center;" type="number" min="1" max="999" value="{{$scene->scene_no}}">
              場所<input name="location" style="background-color:transparent; border:none; width:80%; " type="text" size="50%" value="{{$scene->location}}">
              </div>
              <div style="display:flex; border:1px solid black; text-align:left">
              シーン説明<input name="scene_summary" style="background-color:transparent; border:none; width:93%;" type="text" value="{{$scene->scene_summary}}">
              </div>
              @endforeach
          </div>
          <div style=" flex:1.5;" /></div>
        </div>
        <div style="display: flex" >

          <div style=" flex:0.5; height:400px" /></div>

          <div id="conti_area"
             style=" flex: 1.5; border: 1px solid black; overflow-x:hidden; overflow-y:auto;" />
             @foreach($continuitys as $continuitys)
             <img src="../..{{$continuitys->path}}{{$continuitys->save_name}}" width="100%">
             @endforeach
          </div>

          <div id="angle_area"
             style=" flex: 1.5; overflow:auto; border: 1px solid black; overflow-x:hidden; " />
             @foreach($cameras as $camera)
             <textarea id="angle{{$camera->sequence}}" name="angle{{$camera->sequence}}" style="background-color:transparent; border:none">{{$camera->content}}</textarea>
             @endforeach
          </div>

          <div id="script_area"
             style=" flex: 5; overflow:auto; border: 1px solid black; " />
             @foreach($character_scripts as $character_script)
             <div id="script{{$character_script->sequence}}" style="border: none; height: auto; display: flex; align-items: start;">

                <textarea name="character{{$character_script->sequence}}" style="flex:2; border: none; background-color: transparent;">{{$character_script->character_name}}</textarea>
                <textarea name="script{{$character_script->sequence}}" style="flex:8; border-left:1px dotted black; background-color: transparent;">{{ $character_script->script }}</textarea>

             </div>
             @endforeach
          </div>

          <div style=" flex:1.5" /></div>

        </div>
        <br>
        <button class="btn btn-primary btn-lg" type="submit" id="btn_script_update_set">セーブ</button>
        <!-- <button class="btn btn-primary btn-lg" id="btn_script_update_set">저장</button> -->

      </form>
    </div>
  </section>
</div>
@endsection
