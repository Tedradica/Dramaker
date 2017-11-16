@extends('layout')

@section('title','全体台本')

@section('content')
<div id="main">
<section id="script_add_form" class="two">


  <div id="last_script_count" data-field-id="{{$last_script_count}}" ></div>
  <button class="btn btn-primary btn-lg" id="pdfdown" >PDFに変換</button>
  <div id="all_script_area" style="text-align:center">
      <input id="hidden_scriptCount" type="hidden" name="script_count">
      <div style="display: flex" >
        <div style=" flex:1;">
        </div>
        <div style=" flex:9;">
          @foreach($drama as $drama)
          <div style="display:flex; border:1px solid black; text-align:left">

                ドラマの名前 : {{$drama->drama_name}}

          </div>
          <div style=" border:1px solid black; text-align:left;">
            <table>
              <tr style="display: flex">
                <td style=" flex:1.1;">ドラマの説明 :</td><td style=" flex:8.9;">{{$drama->story}}</td>
              </tr>
            </table>
          </div>
          @endforeach
        </div>
        <div style=" flex:1;" /></div>
      </div>
      <div style="display: flex" >

        <div style=" flex:1;" /></div>

        <?php $pre_scene_no = 0; ?>
        <?php $now_scene_no = 0; ?>
        <?php $change_count = 0; ?>

        <div id="script_area"
           style=" flex: 9; overflow:auto; border: 1px solid black; " />

           @foreach($character_scripts as $character_script)
           <?php $now_scene_no = $character_script->scene_no; ?>
           <?php

           if($character_script->sequence == 1){

             if($change_count != 0){
               echo "</div>"."<hr>";
             }
           }

           if($character_script->sequence == 1){

              echo "<div id='script_".$now_scene_no."'>";
              $change_count++;

            }

            if($now_scene_no > $pre_scene_no){

                foreach($scenes as $scene){

                  if($scene->scene_no == $character_script->scene_no){

                    if($now_scene_no != 1){
                      echo "<div class='scene_info'>"."#".$now_scene_no.". ".$scene->location."</div>";
                    }else{
                      echo "<div class='scene_info'>"."#".$scene->location."</div>";
                    }
                  }
                }
              }

           ?>
            @if($character_script->character_name)
             <div id="view_script_{{$character_script->scene_no}}_{{$character_script->sequence}}" style="display:flex; text-align:left">

               @if( Auth::user()->user_no == $character_script->user_no )
               <div style="flex:1; color:#E27689;">{{$character_script->character_name}}</div>
               <div style="flex:9; color:#E27689;">{!! $character_script->script !!}</div>
               @else
               <div style="flex:1">{{$character_script->character_name}} </div>
               <div style="flex:9">{!! $character_script->script !!}</div>
               @endif

             </div>
            @endif
            @if(!$character_script->character_name)
            <br>
            <div id="view_script_{{$character_script->scene_no}}_{{$character_script->sequence}}" style="display:flex; text-align:left">
              <div>{!! $character_script->script !!}</div>
            </div>
            <br>
            @endif

            <?php $pre_scene_no = $now_scene_no; ?>

           @endforeach
          </div>
        </div>
        <div style=" flex:1;" /></div>

      </div>
  </div>
  <button class="btn btn-primary btn-lg" id="pdfdown" >PDFに変換</button>
  <button class="btn btn-primary btn-lg" onclick="history.go(-1)" type="button" id="btn_script_back">戻る</button>
</section>
</div>
@endsection
