@extends('layout')

@section('title','台本作成')

@section('content')
<div id="main">
<section id="script_add_form" class="two">

<div id="script_add" style="text-align:center">
    <input id="hidden_scriptCount" type="hidden" name="script_count">
    <div style="display: flex" >
      <div style=" flex:1;">
      </div>
      <div style=" flex:9;">
        @foreach($scenes as $scene)
        <div style="display:flex; border:1px solid black; text-align:left">
          <strong>シーン番号 :</strong> <label name="scene_no">&nbsp; {{$scene->scene_no}} </label> &nbsp;&nbsp;
          <strong>場所 :</strong> <label name="location">&nbsp; {{$scene->location}} </label> &nbsp;&nbsp;
          <strong>作成日付 :</strong> <label name="date">&nbsp; {{$scene->created_at}} </label>
        </div>
        <div style="display:flex; border:1px solid black; text-align:left">
          <strong>シーン説明 :</strong> <label name="date">&nbsp; {{$scene->scene_summary}} </label>
        </div>
        @endforeach
      </div>
      <div style=" flex:1;" /></div>
    </div>
    <div style="display: flex" >

      <div style=" flex:1; height:400px" /></div>

        <div id="conti_area"
           style=" flex: 1.5; border: 1px solid black; overflow-x:hidden; overflow-y:auto;" />
           @foreach($continuitys as $continuity)
           <img src="../..{{$continuity->path}}{{$continuity->save_name}}" width="100%">
           @endforeach
        </div>

        <div id="angle_area"
           style=" flex: 1.5; overflow:auto; border: 1px solid black; overflow-x:hidden; " />
           @foreach($cameras as $camera)
           <div id="view_angle{{$camera->sequence}}">{{$camera->content}}</div>
           @endforeach
        </div>

        <div id="script_area"
           style=" flex: 6; overflow:auto; border: 1px solid black; " />
           @foreach($character_scripts as $character_script)
             @if($character_script->character_name)
             <div id="view_script{{$character_script->sequence}}" style="display:flex; text-align:left">
               <div style="flex:1">{{$character_script->character_name}}</div>
               <div style="flex:9">{!! nl2br($character_script->script) !!}</div>
             </div>
             @endif

             @if(!$character_script->character_name)
             <br>
             <div id="view_script{{$character_script->sequence}}" style="display:flex; text-align:left">
               <div style="flex:1">{{$character_script->character_name}}</div>
               <div style="flex:9">{!! nl2br($character_script->script) !!}</div>
             </div>
             <br>
             @endif
           @endforeach
        </div>


      <div style=" flex:1" /></div>

    </div>
    <!-- <br>onclick="location.href={{url('/script_update')}}/{{$script_no}}/{{$scene->scene_no}}" -->
    <button class="btn btn-primary btn-lg" onclick="location.href='{{url('/script_update')}}/{{$script_no}}/{{$scene->scene_no}}'" id="btn_script_add">修正</button>
    <button class="btn btn-primary btn-lg" onclick="location.href='{{url('/script_delete')}}/{{$script_no}}/{{$scene->scene_no}}'" id="btn_script_delete">削除</button>
    <button class="btn btn-primary btn-lg" onclick="history.go(-1)" type="button" id="btn_script_back">戻る</button>
</div>
</section>
</div>
@endsection
