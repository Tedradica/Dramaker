//=================================== script =================================


var character_script_pack = [];
var pre_character_script_pack = [];
var pre_check = true;

var original_name;
var character = [];
var product = [];

var script_count = 0;
var angle_count = 0;

var added_actor_count = 0;
var added_ppl_product_count = 0;

var shift_press;


function take_canvas_data(drawed_canvas_url, original_name){

  original_name = this.original_name;
  $("#conti_area").empty();
  if(document.URL.split("/")[3] != 'script_update'){
    $('#conti_area').text('コンテ');
  }
  $("#conti_area")
  .append($('<img>').attr({"src": drawed_canvas_url, "width":"100%", "name":"conti"}))
  .append($('<input>').attr({"name" : "conti", "type":"hidden" ,"value": drawed_canvas_url}));
}

function go_to_scene(){
  location.href= '#scene' + document.getElementById('select_scene').value;
}

// Enter submit 막기..
function captureReturnKey(e) {
    if(e.keyCode==13 && e.srcElement.type != 'textarea')
    return false;
}

function toggle_layer(event){

  $("#"+event.target.className+"_toggle").toggle();

}

function go_to_category(search_type, search_value, script_no){

  if(search_value == ""){
    alert('キーワードを入力してください');
    return false;
  }

  var url = $("#select_category").attr('data-link');
  location.href=url+"/"+search_type+"/"+search_value+"/"+script_no;

}


$(document).ready(function(){

  var character_list = [];
  // field 1는 캐릭터 데이터가 담겨있음..
  var character_array = $('#field').data("field-id");

  var total_script_count = $("#last_script_count").data("field-id") ;

  for(i = 1 ; i <= total_script_count ; i++){
    var dmp = new diff_match_patch();
    var text1 = $('#pre_script_area_script_'+i).text();
    var text2 = $('#pre_script_area_pre_script_'+i).text();
    // $('#pre_script_area_result_'+i).text();
    // console.log(text1);
    // console.log(text2);
    var d = dmp.diff_main(text2, text1);
    dmp.diff_cleanupSemantic(d);
    var ds = dmp.diff_prettyHtml( d);

    ds = ds.replace(/STARTMAINDIV/g, "<div style='display:flex; margin:10px;' class='pre_main'>");
    ds = ds.replace(/STARTCHARACTERDIV/g, "<div style='flex:1.5' class='pre_character'> ");
    ds = ds.replace(/STARTSCRIPTDIV/g, "<div style='flex:8.5' class='pre_script'>");
    ds = ds.replace(/ENDDIV/g, "</div>");
    ds = ds.replace(/&para;/gi,'');
    ds = ds.replace(/<br>/gi,'');
    ds = ds.replace(/<span>/gi,'');

    $('#pre_script_area_result_'+i).html("<div style='color:white; background-color:#bfbfbf; text-align:center'><span style='font-weight:bold;'>Pre_Script</span></div>"+ "<br>" + ds + "<br>");


  }


  // pre_script_area_result_1

  if(character_array){
    for( var count = 0 ; count < character_array.length ; count++ ){
      // character_list.push(character_array[count][user_no]);
      character_list.push(character_array[count].character_name);
    }
  }


  $(".btn_view_pre_script").on("click", function(){

    if( pre_check){
      $('.pre_script_area').show();
      $('.script_area').hide();
      pre_check = false;
    }else{
      $('.pre_script_area').hide();
      $('.script_area').show();
      pre_check = true;
    }


  });

  $("#btn_script_add").on("click", function(){
    console.log('체크');
    var character_package = [];
    var script_package = [];
    for( i = 0 ; i < $('#script_area').children().length ; i++ ){

      if(i > 0){

        var character = ( $('#script_area').children().eq(i).children().first().val() ) ? $('#script_area').children().eq(i).children().first().val() : "notValue";
        var script = ( $('#script_area').children().eq(i).children().last().val() ) ? $('#script_area').children().eq(i).children().last().val() : "notValue";

        if(i+1 != $('#script_area').children().length){
          character_package.push(character+"division");
          script_package.push(script+"division");
        }else{
          character_package.push(character);
          script_package.push(script);
        }

      }

    }

    $('#character_package').val(character_package);
    $('#script_package').val(script_package);

  });

  $("#btn_script_update_set").on("click", function(){

    var character_package = [];
    var script_package = [];
    for( i = 0 ; i < $('#script_area').children().length ; i++ ){

        var character = ( $('#script_area').children().eq(i).children().first().val() ) ? $('#script_area').children().eq(i).children().first().val() : "notValue";
        var script = ( $('#script_area').children().eq(i).children().last().val() ) ? $('#script_area').children().eq(i).children().last().val() : "notValue";

        if(i+1 != $('#script_area').children().length){
          character_package.push(character+"division");
          script_package.push(script+"division");
        }else{
          character_package.push(character);
          script_package.push(script);
        }

    }

    $('#update_character_package').val(character_package);
    $('#update_script_package').val(script_package);

  });

  // field 2는 대본의 카운터(수) 정보가 담겨있음
  if($('#field2').data("field-id") > 0 ){
    script_count = $('#field2').data("field-id");
    $('#hidden_scriptCount').val(script_count);
  }
  // field 3는 앵글의 카운터(수) 정보가 담겨있음
  if($('#field3').data("field-id") > 0 ){
    angle_count = $('#field3').data("field-id");
    $('#hidden_angleCount').val(angle_count);
  }



  $("#pdfdown").on("click", function(){


    var last_scene_count = $("#last_script_count").data("field-id");

    var script = new Array();
    var script_values = [];

    for(i = 1 ; i <= last_scene_count ; i++){
    //전체 씬에 작성된 최대 scene의 번호 만큼 for문을 돌린다.
      if($('#script_'+i).height() != null){
      //그 중에서 .. 씬안에 값이 들어있는 경우를 잡아낸다.
        if( $('#script_'+i).children().not('br').length > 0){
        //잡아낸 씬에서 <br>태그를 제외한 스크립트 부분의 갯수를 구한다. 즉, 스크립트 값이 있는경우만 캐치한다.
          script_values.push( " "  );
          script_values.push( $('#script_'+i).children().first().text()  );
          script_values.push( " "  );
          for( j = 1 ; j <= $('#script_'+i).children().not('br', 'hr').length ; j ++){
          //씬안에 스크립트가 들어있는 div의 갯수만큼 for문을 돌린다.
            if( $('#view_script_' + i + '_' + j ).children().not('br').length == 2){
            //스크립트 div의 자식요소가 2개인 경우 즉, 배역과 대사가 있는 경우..
              script_values.push( $('#view_script_' + i + '_' + j ).children().first().text() + "  ::  " + $('#view_script_' + i + '_' + j ).children().last().text() );
            }else if( $('#view_script_' + i + '_' + j ).children().not('br', 'hr').length == 1 ){
            //상황 설명인 경우..
              script_values.push( " "  );
              script_values.push( $('#view_script_' + i + '_' + j ).children().text() );
              script_values.push( " "  );
            }
          }
        }
      }
    }


    //==============

    // var pdf_obj = new Object();
    // var script = new Array();
    //
    // var last_scene_count = $("#last_script_count").data("field-id");
    //
    //
    // for(i = 1 ; i <= last_scene_count ; i++){
    // //전체 씬에 작성된 최대 scene의 번호 만큼 for문을 돌린다.
    //   if($('#script_'+i).height() != null){
    //   //그 중에서 .. 씬안에 값이 들어있는 경우를 잡아낸다.
    //     if( $('#script_'+i).children().not('br').length > 0){
    //     //잡아낸 씬에서 <br>태그를 제외한 스크립트 부분의 갯수를 구한다. 즉, 스크립트 값이 있는경우만 캐치한다.
    //
    //       //얘는 하위 루프에서도 생성됨 ****
    //       var script_info = new Object();
    //       var columns_array = new Array();
    //
    //       var script_obj1 = new Object();
    //       var script_obj2 = new Object();
    //
    //       script_obj1.text = $('#script_'+i).children().first().text();
    //       script_obj1.width = 200;
    //       script_obj1.fontSize = 15;
    //       script_obj1.bold = true;
    //       script_obj1.margin = [0,20];
    //
    //       columns_array.push(script_obj1);
    //       // console.log("script_obj1");
    //       // console.log(script_obj1);
    //
    //       script_obj2.text = "";
    //       script_obj2.width = "*";
    //
    //       columns_array.push(script_obj2);
    //
    //       script_info.columns = columns_array;
    //       script.push(script_info);
    //       // script_obj.name = $('#script_'+i).children().first().text();
    //       // script_obj.script = "";
    //       // script_values.push(script_obj);
    //
    //       for( j = 1 ; j <= $('#script_'+i).children().not('br', 'hr').length ; j ++){
    //       //씬안에 스크립트가 들어있는 div의 갯수만큼 for문을 돌린다.
    //         var script_info = new Object();
    //         var columns_array = new Array();
    //
    //         if( $('#view_script_' + i + '_' + j ).children().not('br').length == 2){
    //         //스크립트 div의 자식요소가 2개인 경우 즉, 배역과 대사가 있는 경우..
    //           var script_obj1 = new Object();
    //           var script_obj2 = new Object();
    //
    //           script_obj1.text = $('#view_script_' + i + '_' + j ).children().first().text();
    //           script_obj1.width = 50;
    //           script_obj1.margin = [0,5];
    //
    //           columns_array.push(script_obj1);
    //           // console.log("script_obj1");
    //           // console.log(script_obj1);
    //
    //           script_obj2.text = $('#view_script_' + i + '_' + j ).children().last().text();
    //           script_obj2.width = "*";
    //           script_obj2.margin = [0,5];
    //
    //           columns_array.push(script_obj2);
    //           // console.log("script_obj2");
    //           // console.log(script_obj2);
    //
    //
    //
    //         }else if( $('#view_script_' + i + '_' + j ).children().not('br', 'hr').length == 1 ){
    //           var script_obj1 = new Object();
    //           var script_obj2 = new Object();
    //
    //           script_obj1.text = "";
    //           script_obj1.width = 50;
    //
    //           columns_array.push(script_obj1);
    //
    //           script_obj2.text = $('#view_script_' + i + '_' + j ).children().text();
    //           script_obj2.width = "*";
    //           script_obj2.margin = [0,10];
    //
    //           columns_array.push(script_obj2);
    //
    //         //상황 설명인 경우..
    //         }
    //
    //         script_info.columns = columns_array;
    //         script.push(script_info);
    //       }
    //       //script_info가 하나의 씬
    //       //이안에 columns가 여러개있어야되는데
    //     }
    //   }
    // } //for end
    //
    //
    // pdf_obj.content = script;


    //===================================================================================== pdf 일본어 부분일 경우

      pdfMake.fonts = {
       GenShinGothic: {
         normal: 'GenShinGothic-Medium.ttf'
       }
      }

      //이렇게 하면 됩니다.

      var docDefinition = {
       content: [
         script_values
       ],
       defaultStyle: {
         font: 'GenShinGothic'
       }
      }



    //===================================================================================== pdf 일본어 부분 end ..

    //===================================================================================== pdf 한국어 부분일 경우

    // var docDefinition = {
    //   content : [ script_values ]
    // };

    //===================================================================================== pdf 한국어 부분 end ..

    // console.log(script_values);
    // pdfMake.createPdf(docDefinition).open();

    // pdfMake.createPdf(docDefinition).print();

    pdfMake.createPdf(docDefinition).download();
    pdfMake.createPdf(docDefinition).open();

    //6 18일 새벽 4시 30분 .. 해당하는 div의 높이를 구했으니, 이것을 각각 canvas로 저장하여서 .. 높이 를 지정한다...  [jspdf 사용불가능 .. 인코딩 등의 문제로]
    //작성된 높이가.. pdf파일의 높이 보다 작을 경우 여러개로 만들어서 넣어주고 클 경우 다음페이지로 넘어간다..  [pdfmake로 변경 .. ]
    //여기서 받은 높이로 여러개를 분활해서 보여주는 방법으로 구현해보기 ..




  });

  $('#drop_zone').on('dragover', function(evt){
    evt.stopPropagation();
    evt.preventDefault();
  });

  $('#drop_zone').on('drop', function(evt){
     //부모객체에 이벤트 전달하지 않게
    evt.stopPropagation();
    //브라우저으 행동을 막기 위해서 ..
    evt.preventDefault();

    //발생한 이벤트 중 ..  dataTransfer->files
    var file = evt.originalEvent.dataTransfer.files[0];

///=======================================================================
    // var word_text = "";
    // var docx2html = require('docx2html');
    // docx2html(file);
    // setTimeout(function(){
    //
    //     word_text_arr = document.querySelectorAll("span.a0");
    //
    //     for( word_text_arr_count = 0 ; word_text_arr_count < word_text_arr.length ; word_text_arr_count ++){
    //       // console.log(word_text_arr[word_text_arr_count]);
    //       word_text += (word_text_arr[word_text_arr_count].innerHTML) ? word_text_arr[word_text_arr_count].innerHTML : "";
    //
    //     }
    //
    //     var scripts = word_text.split('/');
    //
    //     // document.getElementById("A").remove();
    //
    //
    //     for(i = 0 ; i < scripts.length ; i ++){
    //
    //
    //       // $("#script_area").append( $('<div>').attr("id", "script" + script_count).css({"border":"none", "height":"auto", "display": "flex", "align-items": "start"}) );
    //       var obj = document.createElement("div").setAttribute("id", "script" + script_count);
    //       obj.style.cssText = ' border:none, height:auto, display:flex, align-items:start ';
    //       document.getElementById("script_area").appendChild(obj);
    //
    //       // if( scripts[i].split(":")[1] != undefined){
    //       //
    //       //   //script영역의 캐릭터영역에 값 보내기 ..
    //       //   var character_name = scripts[i].split(":")[0];
    //       //   $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換", "name":"character"+script_count}).css({"border": "none", "flex":"2", "background-color":"transparent"}).val(character_name).appendTo( $("#script_area").children().last());
    //       //   //script영역의 character_script에는 대사 보내기..
    //       //   var character_script = scripts[i].split(":")[1];
    //       //   $('<textarea>').attr({"placeholder":"::セリフ作成::Shift+Enterで転換", "name":"script"+script_count}).css({"border":"none", "border-left": "1px dotted gray", "flex":"8", "overflow":"hidden", "background-color":"transparent"}).val(character_script).appendTo( $("#script_area").children().last() );
    //       //   //캐릭터를 포함해서 스킄립트로 보내는 경우..
    //       //   console.log(character_name + " : " + character_script);
    //       //
    //       // }else{
    //       //
    //       //   //얘는 캐릭터 없이 스크립트로만 보내는 경우..
    //       //   //script영역의 캐릭터영역에는 빈값을 보내기 ..
    //       //   $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換", "name":"character"+script_count}).css({"border": "none", "flex":"2", "background-color":"transparent"}).appendTo( $("#script_area").children().last());
    //       //   //script영역의 character_script에는 대사 보내기..
    //       //   var script = scripts[i];
    //       //   $('<textarea>').attr({"placeholder":"::セリフ作成::Shift+Enterで転換", "name":"script"+script_count}).css({"border":"none", "border-left": "1px dotted gray", "flex":"8", "overflow":"hidden", "background-color":"transparent"}).val(script).appendTo( $("#script_area").children().last() );
    //       //
    //       //   console.log(script);
    //       //
    //       // }
    //
    //       //script_count 갱신 시켜주기 ..
    //       script_count++;
    //
    //     }
    //
    //     script_count--;
    //
    //
    // }, 50);


  //=========================================================================================

    // console.log(myVar);
    // .then(function(html){
    //  html.toString()
    // });
    // require("docx2html")(file), {container : document.getElementById ('test')});

  //       , {container : document.getElementById ( 'a')}). 그러면 (function (html) {
  //         html.toString ()
  // })

    // file.then(function(converted){
    //   console.log( converted.toString() );
    // });
    // console.log( require("docx2html")evt.originalEvent.dataTransfer.files[0] );


    //=========================================================================================

    var reader = new FileReader(); //파일을 읽기 위한 FileReader객체 생성

    var text;
    reader.onload = function(event) {

      var file_text = event.target.result;
      var scripts = file_text.split('\n');

      for(i = 0 ; i < scripts.length ; i ++){
        $("#script_area").append( $('<div>').attr("id", "script" + script_count).css({"border":"none", "height":"auto", "display": "flex", "align-items": "start"}) );
        if( scripts[i].split(":")[1] != undefined){

          //script영역의 캐릭터영역에 값 보내기 ..
          var character_name = scripts[i].split(":")[0];
          $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換", "name":"character"}).css({"border": "none", "flex":"2", "background-color":"transparent"}).val(character_name).appendTo( $("#script_area").children().last());
          //script영역의 character_script에는 대사 보내기..
          var character_script = scripts[i].split(":")[1];
          $('<textarea>').attr({"placeholder":"::セリフ作成::Shift+Enterで転換", "name":"script"}).css({"border":"none", "border-left": "1px dotted gray", "flex":"8", "overflow":"hidden", "background-color":"transparent"}).val(character_script).appendTo( $("#script_area").children().last() );
          //캐릭터를 포함해서 스킄립트로 보내는 경우..

        }else{

          //얘는 캐릭터 없이 스크립트로만 보내는 경우..
          //script영역의 캐릭터영역에는 빈값을 보내기 ..
          $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換", "name":"character"+script_count}).css({"border": "none", "flex":"2", "background-color":"transparent"}).appendTo( $("#script_area").children().last());
          //script영역의 character_script에는 대사 보내기..
          var script = scripts[i];
          $('<textarea>').attr({"placeholder":"::セリフ作成::Shift+Enterで転換", "name":"script"+script_count}).css({"border":"none", "border-left": "1px dotted gray", "flex":"8", "overflow":"hidden", "background-color":"transparent"}).val(script).appendTo( $("#script_area").children().last() );


        }

        //script_count 갱신 시켜주기 ..
        script_count++;

      }
      script_count--;
      $('#hidden_scriptCount').val(script_count);

    };

    reader.readAsText(file);
  });

  //씬 추가 버튼 누를시 시작..
  $('#btn_script_create').on("click", function(){

    // DB값을 조회하여 scene_no의 마지막 값을 가져온다..
    var last_scene_count = $('#last_script_count').data("field-id");

    $('#scene_no_set').val(last_scene_count+1);
    $('#conti_area').text('コンテ');
    $('#angle_area').text('アングル')

    //최초에 크기를 설정해 주기 위한 div
    $("#script_area").append($('<div>').css("display","flex"));
    $("#script_area").children().append($('<div>').css("flex","2").text('配役'));
    $("#script_area").children().append($('<div>').css("flex","8").text('セリフ'));


    $('#script_add').toggle("fast");
    $('#file_upload').show();
    $('#btn_script_create').hide();
  });

  //씬 추가 버튼 누르면 레이아웃이 보인다.

  $("#conti_area").on("click", function(event){
    //콘티 작성 영역에서 클릭 이벤트가 발생할 시 코드 실행
    if(document.URL.split("/")[3] == 'script_list'){

      window.open("../../resources/views/canvas.php", "_blank", "width=1000, height=600" );



    }else if(document.URL.split("/")[3] == 'script_update'){

      window.open("../../../resources/views/canvas.php", "_blank","width=1000, height=580;");

    }

  });


  $('#script_area').on("click", function(){

    if(document.URL.split("/")[3] == 'script_list' || document.URL.split("/")[3] == 'script_view'){

      //최초에(자식객체가 없는 상태에서) 버튼 누를 시 ..
      if( $("#script_area").children().length == 1 ){

        //대본 작성 영역에 div를 추가 시킨다.
        $("#script_area").append( $('<div>').addClass("scripts").attr("id", "script" + script_count).css({"border":"none", "height":"auto", "display": "flex", "align-items": "start"}));

        //추가된 div에 배역을 적을 수 있는 input태그를 만들어 준다.
        $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換", "name":"character"}).css({"border": "none", "flex":"2", "background-color":"transparent"}).appendTo( $("#script_area").children().last());

        setTimeout(function(){
        //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에 focus해준다.

          $('#script_area').children().last().children().last().focus().autocomplete({source: character_list});

        }, 0);

      }

    }else if(document.URL.split("/")[3] == 'script_update'){

      //최초에(자식객체가 없는 상태에서) 버튼 누를 시 ..
      if( $("#script_area").children().length == 0 ){

        //대본 작성 영역에 div를 추가 시킨다.
        $("#script_area").append( $('<div>').addClass("scripts").attr("id", "script" + script_count).css({"border":"none", "height":"auto", "display": "flex", "align-items": "start"}));

        //추가된 div에 배역을 적을 수 있는 input태그를 만들어 준다.
        $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換", "name":"character"+ script_count}).css({"border": "none", "flex":"2", "background-color":"transparent"}).appendTo( $("#script_area").children().last());

        setTimeout(function(){
        //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에 focus해준다.

          $('#script_area').children().last().children().last().focus().autocomplete({source: character_list});

        }, 0);

      }

    }


  });

  $('#angle_area').on("click", function(){
    //최초에(자식객체가 없는 상태에서) 버튼 누를 시 ..
    if( $("#angle_area").children().length == 0 ){

      if(document.URL.split("/")[3] == 'script_update'){

        var now_angle = "angle" + (angle_count);

        //대본 작성 영역에 div를 추가 시킨다.
        $("#angle_area").append( $('<div>').attr("id", "angle" + angle_count).css({"border":"none", "height":"auto", "display": "flex", "align-items": "start"}));
        //추가된 div에 배역을 적을 수 있는 input태그를 만들어 준다.
        $('<textarea>').attr({"placeholder":"::アングル作成::", "cols":"17%", "name":"angle"+(angle_count)}).css({"border": "none", "overflow":"hidden", "background-color":"transparent"}).appendTo($('#angle_area').children().last());
        setTimeout(function(){
        //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에 focus해준다.

          $('#angle_area').children().last().children().last().focus();

        }, 0);

      }else{

        var now_angle = "angle" + (angle_count);

        //대본 작성 영역에 div를 추가 시킨다.
        $("#angle_area").append( $('<div>').attr("id", "angle" + angle_count).css({"border":"none", "height":"auto", "display": "flex", "align-items": "start"}));
        //추가된 div에 배역을 적을 수 있는 input태그를 만들어 준다.
        $('<textarea>').attr({"placeholder":"::アングル作成::", "cols":"17%", "name":"angle"+(angle_count)}).css({"border": "none", "overflow":"hidden", "background-color":"transparent"}).appendTo($('#angle_area').children().last());
        setTimeout(function(){
        //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에 focus해준다.

          $('#angle_area').children().last().children().last().focus();

        }, 0);
      }

    }

  });


  //----------------------------------------------------------------------------


  //대본(스크립트) 추가, 삭제
  $(document).keyup(function(event){

    if(event.keyCode == 16 ){

      shift_press = false;
      console.log(shift_press);
    }

  });


  $('#script_area').keydown(function(event){

    if(document.URL.split("/")[3] == 'script_update'){

      console.log( $('*:focus').parent().children().length, shift_press,  event.keyCode );

      if( shift_press && event.keyCode == 13 && $('*:focus').parent().children().length % 2 == 0 ){

        script_count++;
        var now_script = "script" + (script_count -1);
        //대본 카운터를 늘린다..

        $('#hidden_scriptCount').val(script_count);

        // console.log( $('#' + now_script).height() );
        //conti, angle, script 영역에 div를 추가한다.. id값은 각각 conti, angle, script + 대본카운터를 가진다.

        // $('#script_area').append( $('<div>').attr( "id", "script" + script_count ).css({"border":"none", "display":"flex", "align-items": "start"}) );
        $('*:focus').parent().after( $('<div>').addClass("scripts").attr( "id", "script" + script_count ).css({"border":"none", "display":"flex", "align-items": "start"}) );

        //.attr({"placeholder":"::アングル作成::", "cols":"17%", "onkeydown":"resize(this)", "onkeyup":"resize(this)"}).css({"border": "none", "background-color":"transparent"})
        //밑의 div의 height의 크기를 대본 스크립트의 크기와 동일하게 설정해주면 같은 레벨의 라인에서 시작가능..

        // $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換","name":"character"+script_count}).css({"border":"none", "flex":"2", "background-color":"transparent"}).appendTo( $('#script'+script_count) );
        $('#script'+script_count).append( $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換","name":"character"}).css({"border":"none", "flex":"2", "background-color":"transparent"}) );
        // $('#script'+script_count).text('gg');

        //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에 focus해준다.
        setTimeout(function(){

          $("#script" + script_count).children().last().focus().autocomplete({source: character_list});


        }, 0);

      }
      //
      // if(event.keyCode == 13 && $('*:focus').parent().is($("#script" + script_count)) ){
      //
      //   var now_script = "script" + (script_count - 0);
      //   script_count++;
      //   //대본 작성 영역에 div를 추가 시킨다.
      //   $("#script_area").append( $('<div>').attr("id", "script" + script_count).css({"border":"none", "height":"auto", "display": "flex", "align-items": "start"}));
      //
      //   //추가된 div에 배역을 적을 수 있는 input태그를 만들어 준다.
      //   $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換", "name":"character"+script_count}).css({"border": "none", "flex":"1.5", "background-color":"transparent"}).appendTo( $("#script_area").children().last());
      //
      //   $('#hidden_scriptCount').val(script_count);
      //
      //   setTimeout(function(){
      //   //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에 focus해준다.
      //
      //     $('#script_area').children().last().children().last().focus().autocomplete({source: character_list});
      //
      //   }, 0);
      // }
      //
      if(event.keyCode == 9 && $('*:focus').parent().children().length % 2 == 1 /* && $('*:focus').parent().is($("#script" + script_count))*/ ){
      //탭키를 눌렀을 때, 또한 대본영역에 추가된 요소의 개수가 홀수일 때, 즉 등장인물(배역)일 때.. && 현재 포커스 된 객체의 부모가 마지막 대본작성 div 일 때 ..
      //코드 실행..

        //대본 영역에 배역을 넣기위한 input태그를 append시키고, 자동완성 함수를 넣어준다.
        $('<textarea>').attr({"placeholder":"::セリフ作成::Shift+Enterで転換", "name":"script"}).css({"border":"none", "border-left": "1px dotted gray", "flex":"8", "overflow":"hidden", "background-color":"transparent"}).appendTo( $('*:focus').parent() );

        //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에
        //focus해준다.
        setTimeout(function(){

          $('*:focus').parent().children().last().focus();

        }, 0);

      }

      if( shift_press && event.keyCode == 8 ){

        $('*:focus').parent().remove();

        setTimeout(function(){

          $("#script_area").children().last().children().last().focus();


        }, 0);

      }

    }else{

      if(event.keyCode == 9 && $('*:focus').parent().children().length % 2 == 1 /* && $('*:focus').parent().is($("#script" + script_count))*/ ){
      //탭키를 눌렀을 때, 또한 대본영역에 추가된 요소의 개수가 홀수일 때, 즉 등장인물(배역)일 때.. && 현재 포커스 된 객체의 부모가 마지막 대본작성 div 일 때 ..
      //코드 실행..

        //대본 영역에 배역을 넣기위한 input태그를 append시키고, 자동완성 함수를 넣어준다.
        $('<textarea>').attr({"placeholder":"::セリフ作成::Shift+Enterで転換", "name":"script"}).css({"border":"none", "border-left": "1px dotted gray", "flex":"8", "overflow":"hidden", "background-color":"transparent"}).appendTo( $('*:focus').parent() );

        //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에
        //focus해준다.
        setTimeout(function(){

          $('*:focus').parent().children().last().focus();

        }, 0);

      }

      if( shift_press && event.keyCode == 13 && $('*:focus').parent().children().length % 2 == 0  /* && $('*:focus').parent().is($("#script" + script_count))*/ ){
      //엔터키를 눌렀을 때 && 대본영역에 추가된 요소의 개수가 짝수일 때, 즉 스크립트 영역일 때 && 현재 포커스 된 객체의 부모가 마지막 대본작성 div 일 때 ..
      //코드 실행..

        script_count++;
        var now_script = "script" + (script_count -1);
        //대본 카운터를 늘린다..

        $('#hidden_scriptCount').val(script_count);

        // console.log( $('#' + now_script).height() );
        //conti, angle, script 영역에 div를 추가한다.. id값은 각각 conti, angle, script + 대본카운터를 가진다.

        // $('#script_area').append( $('<div>').attr( "id", "script" + script_count ).css({"border":"none", "display":"flex", "align-items": "start"}) );
        $('*:focus').parent().after( $('<div>').addClass("scripts").attr( "id", "script" + script_count ).css({"border":"none", "display":"flex", "align-items": "start"}) );

        //.attr({"placeholder":"::アングル作成::", "cols":"17%", "onkeydown":"resize(this)", "onkeyup":"resize(this)"}).css({"border": "none", "background-color":"transparent"})
        //밑의 div의 height의 크기를 대본 스크립트의 크기와 동일하게 설정해주면 같은 레벨의 라인에서 시작가능..

        // $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換","name":"character"+script_count}).css({"border":"none", "flex":"2", "background-color":"transparent"}).appendTo( $('#script'+script_count) );
        $('#script'+script_count).append( $('<input>').attr({"type":"text","size":8, "placeholder":"::配役作成::Tabキーで転換","name":"character"}).css({"border":"none", "flex":"2", "background-color":"transparent"}) );
        // $('#script'+script_count).text('gg');

        //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에 focus해준다.
        setTimeout(function(){

          $("#script" + script_count).children().last().focus().autocomplete({source: character_list});


        }, 0);

      }

      if( shift_press && event.keyCode == 8 ){

        $('*:focus').parent().remove();

        setTimeout(function(){

          $("#script_area").children().last().children().last().focus();


        }, 0);

      }

    }

    if(event.keyCode == 16 ){
      //ctrl 키를 누르면 true로 변환 ..
      shift_press = true;
    }

  });

  $('#angle_area').keydown(function(event){

    if(event.keyCode == 13 && $('*:focus').parent().is($("#angle" + angle_count)) ){
      angle_count++;

      $("#hidden_angleCount").val(angle_count);

      $("#angle_area").append( $('<div>').attr("id", "angle" + angle_count).css({"border":"none", "height":"auto", "display": "flex", "align-items": "start"}));
      //추가된 div에 배역을 적을 수 있는 input태그를 만들어 준다.
      $('<textarea>').attr({"placeholder":"::アングル作成::", "cols":"17%", "name":"angle"+(angle_count)}).css({"border": "none", "overflow":"hidden", "background-color":"transparent"}).appendTo($('#angle_area').children().last());
      setTimeout(function(){
      //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에 focus해준다.

        $('#angle_area').children().last().children().last().focus();

      }, 0);

    }else if(document.URL.split("/")[3] == 'script_update' && event.keyCode == 13 && $('*:focus').is($("#angle" + angle_count)) ){
      angle_count++;

      $("#hidden_angleCount").val(angle_count);

      $("#angle_area").append( $('<div>').attr("id", "angle" + angle_count).css({"border":"none", "height":"auto", "display": "flex", "align-items": "start"}));
      //추가된 div에 배역을 적을 수 있는 input태그를 만들어 준다.
      $('<textarea>').attr({"placeholder":"::アングル作成::", "cols":"17%", "name":"angle"+(angle_count)}).css({"border": "none", "overflow":"hidden", "background-color":"transparent"}).appendTo($('#angle_area').children().last());
      setTimeout(function(){
      //포커싱을 해주기 위해 setTimeout함수를 사용, 해당 요소에서 가장 마지막으로 append된 요소에 focus해준다.

        $('#angle_area').children().last().children().last().focus();

      }, 0);

    }

  });


  //----------------------------------------------------------------------------

  $("#btn_script_cancel").on("click", function(){

    if(confirm("キャンセルしますか？")){
      $('#conti_area').empty();
      $('#angle_area').empty();
      $("#script_area").empty();

      $('#btn_script_create').show();
      $('#script_add').toggle("fast");
      script_count = 0;
    }

  });




  //----------------------------------------------------------------------------

  $("#btn_character_actor_create").on("click", function(){
    //모달창 안에서 배우/배역 추가 버튼을 누를 시 배우 배역을 적어줄 input 태그를 append시켜줌
    // $(".character-modal-body").append($('<div>').attr({"align":"center"}).addClass("character_acotr_area")
    // .append('배역 : &nbsp;&nbsp;')
    // .append($('<input>').attr({ "name":"character" + added_actor_count, }))
    // .append('<br>배우 : &nbsp;&nbsp;')
    // .append($('<input>').attr({ "name":"actor" + added_actor_count }))
    // .append('<br>설명 : &nbsp;&nbsp;')
    // .append($('<input>').attr({ "name":"introduce" + added_actor_count }))
    // .append('<hr>'));
    //
    // $('#hidden_characterCount').val(added_actor_count+1);
    //
    // added_actor_count++;

    $("<tr>").appendTo( $(".character_actor_area").children("table") );

    $("<td>").appendTo( $(".character_actor_area").children("table").children().children().last() );
    $("<input>").attr({
      "class":"form-control",
      "name":"character" + added_actor_count,
    }).appendTo( $(".character_actor_area").children("table").children().children().last().children().last() );

    $("<td>").appendTo( $(".character_actor_area").children("table").children().children().last() );
    $("<input>").attr({
      "class":"form-control",
      "name":"actor" + added_actor_count,
    }).appendTo( $(".character_actor_area").children("table").children().children().last().children().last() );

    $("<td>").appendTo( $(".character_actor_area").children("table").children().children().last() );
    $("<input>").attr({
      "class":"form-control",
      "name":"introduce" + added_actor_count,
    }).appendTo( $(".character_actor_area").children("table").children().children().last().children().last() );

    $('#hidden_characterCount').val(added_actor_count+1);

    added_actor_count++;


  });

  $('.modal').on('hidden.bs.modal', function () {
      $(this).find("input,textarea,select").val('').end();
      $(this).find(".character_actor_area").empty();
      $(this).find(".ppl_product_area").empty();
      added_actor_count = 0
      added_ppl_product_count = 0;
  });


  $('#btn_ppl_product_add').on("click", function(){

    var product_array = [];
    var production_array = [];

    for(var i = 0 ; i < added_ppl_product_count ; i++){
      if( $("input[name='product" + i + "']").val() && $("input[name='production" + i + "']").val() ){
        product_array.push( $("input[name='product" + i + "']").val() );
        production_array.push( $("input[name='production" + i + "']").val() );
      }
    }

      // console.log( location.host + "/produce_supporter/public/test" );
      var request = $.ajax({
        type:'POST',
        data: { "product":product_array , "production":production_array },
        url: '/test',
        success:function(result){
          // alert(result);
          console.log(result);
        },
        error:function(result){
          // alert(result);
        }
      });

  });

});



//=================================== schedule =================================

$(document).on('click','.schedule_scene_info_btn',function(){
  // console.log($(this));
  // console.log($(this).siblings());
  // $(this).siblings().css('display','inline');
  $(this).siblings().toggle();

});

$(document).on('click','.scene_location_sort_content_btn',function(){
  console.log("실행");
  // console.log($(this));
  // console.log($(this).siblings());
  // $(this).siblings().css('display','inline');
  $(this).siblings().toggle();

});

function schedule_scene_add(scene_no){

  console.log("씬추가 실행됨  씬번호 : "+scene_no);

  var location = $("#schedule_scene_"+scene_no).children(".schedule_scene_add_location").find('span').text();
  var summary = $("#schedule_scene_"+scene_no).children(".schedule_scene_add_summary").find('span').text();
  var status = $("#schedule_scene_"+scene_no).children(".schedule_scene_add_status").find('span').text();
  var characters = $("#schedule_scene_"+scene_no).children(".schedule_scene_characters").children(".characters");

  // ======================= 중복 방지 =======================

  var scene_length = $("[class=scene_no]").length;
  var duplicate_flag = true;

  for(var i = 0 ; i < scene_length ; i++){

    // console.log(i + " 번째 for loop :  " + $("[class=scene_no]")[i].innerHTML);

    if($("[class=scene_no]")[i].innerHTML == scene_no){
      alert("이미 등록된 씬입니다.");
      duplicate_flag = false;
      break;
    }
  }

  if(duplicate_flag){ //중복이 없으면 true임

    // ======================= 추가 =======================

    //먼저 들어가있는 씬 수 파악
    var sequence = $("#schedule_table").find("tr").size(); //기존 tr때문에 아무것도 없어도 1임

    // console.log( "sequence : " + sequence);

    $("<tr>").attr('class','sequence_'+sequence).appendTo("#schedule_table")
    // 씬번호
    $("<td>").attr('class','scene_no').html(scene_no).appendTo(".sequence_"+sequence);
    // 장소
    $("<td>").attr('class','scene_location').html(location).appendTo(".sequence_"+sequence);

    // dn
    $("<td>").attr('class','scene_dn ').appendTo(".sequence_"+sequence);
    $("<select>").attr('class','scene_dn_select form-control').appendTo(".sequence_" + sequence + " > .scene_dn ");
    $("<option>").attr('value','d').html("d").appendTo(".sequence_" + sequence + " > .scene_dn > .scene_dn_select");
    $("<option>").attr('value','n').html("n").appendTo(".sequence_" + sequence + " > .scene_dn > .scene_dn_select");

    // sol
    $("<td>").attr('class','scene_sol').appendTo(".sequence_"+sequence);
    $("<select>").attr('class','scene_sol_select form-control').appendTo(".sequence_" + sequence + " > .scene_sol ");
    $("<option>").attr('value','s').html("s").appendTo(".sequence_" + sequence + " > .scene_sol > .scene_sol_select");
    $("<option>").attr('value','o').html("o").appendTo(".sequence_" + sequence + " > .scene_sol > .scene_sol_select");
    $("<option>").attr('value','l').html("l").appendTo(".sequence_" + sequence + " > .scene_sol > .scene_sol_select");

    // ie
    $("<td>").attr('class','scene_ie').appendTo(".sequence_"+sequence);
    $("<select>").attr('class','scene_ie_select form-control').appendTo(".sequence_" + sequence + " > .scene_ie ");
    $("<option>").attr('value','i').html("i").appendTo(".sequence_" + sequence + " > .scene_ie > .scene_ie_select");
    $("<option>").attr('value','e').html("e").appendTo(".sequence_" + sequence + " > .scene_ie > .scene_ie_select");

    // summary
    $("<td>").attr('class','scene_summary').html(summary).appendTo(".sequence_"+sequence);

    // etc
    $("<td>").attr('class','scene_etc').appendTo(".sequence_"+sequence);
    $("<input>").attr({
      type:"text",
      class:"form-control",
    }).appendTo(".sequence_" + sequence + " > .scene_etc ");

    // status
    //trim은 공백제거
    $("<td>").attr('class','scene_status').html(status.trim()).appendTo(".sequence_"+sequence);

    // delete_btn
    $("<td>").attr('class','scene_delete_btn').appendTo(".sequence_"+sequence);
    $("<button>").attr({
      class:'btn btn-danger btn-sm',
    }).html("削除").appendTo(".sequence_" + sequence + " > .scene_delete_btn ");



    //team_schedule에 배우 추가
    // console.log(characters.children().length);

    for(var j = 0 ; j < characters.children().length ; j++){

      var user_no = characters.children().eq(j).attr('data-user-no');

      //schedule_write에서 page로딩시 staff정보 가져옴
      //staff정보에서 user_no로 지금 선택된 user 정보 가져옴
      var user_info;

      for(var staff in staff_info){

        if(staff_info[staff].user_no == user_no){
          user_info = staff_info[staff];
          break;
        }
      }

      team_schedule_staff_add(user_info);

    } // for end  (배우추가하는 for문)
  } //  if end  (중복이없으면 실행되는 if문)

}

//스케줄 sort
function schedule_scene_sort(sort_type){

  var sort_type = sort_type;
  var url = $(".schedule_scene_info_sort").attr("data-link");
  var drama_no = $("#schedule_drama_no").val();

  //테이블 내용 지움
  $("#schedule_scene_info_table").children().remove();

  //장소 정렬
  if(sort_type == "location"){

    $.ajax({
      type:'GET',
      data: {
        "drama_no":drama_no,
        "sort_type":sort_type
      },
      url: url,
      success:function(data){
        console.log(data);

        var duplicate_location = "";

        //추가
        for(var index in data){

          console.log(data[index].status);

          if(data[index].location == duplicate_location){

            $("<li>").appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last() );
            $("<td>").appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last() );
            $("<button>").attr({
              "class":"schedule_scene_info_btn btn btn-default",
            }).html( "#"+data[index].scene_no ).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last() );
            $("<span>").attr({
              "class":"caret",
            }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last().children().last() );

            $("<td>").appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last() );

            //추가버튼
            if(data[index].status == 0){
              $("<button>").attr({
                "class":"btn btn-primary btn-sm",
                "onclick":"schedule_scene_add("+data[index].scene_no+")",
              }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last() );
              $("<span>").attr({
                "class":"glyphicon glyphicon-plus",
              }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last().children().last() );

            }else{
              $("<button>").attr({
                "class":"btn btn-default btn-sm",
                "disabled":"disabled",
                "onclick":"schedule_scene_add("+data[index].scene_no+")",
              }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last() );
              $("<span>").attr({
                "class":"glyphicon glyphicon-ok",
              }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last().children().last() );

            }
            //씬 세부정보
            $("<ul>").attr({
              id:"schedule_scene_"+data[index].scene_no,
            }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().first() );
            //장소
            $("<li>").attr({
              "class":"schedule_scene_add_location",
            }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
            $("<b>").html("場所:").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            $("<span>").html(data[index].location).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );

            //씬 정보
            $("<li>").attr({
              "class":"schedule_scene_add_summary",
            }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
            $("<b>").html("情報:").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            $("<span>").html(data[index].scene_summary).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );

            //촬영 상태
            $("<li>").attr({
              "class":"schedule_scene_add_status",
            }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
            $("<b>").html("進行状態 :").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            if(data[index].status == 0){
              $("<span>").attr({
                "class":"tag label label-primary",
                "style":"margin-right:2px;font-size:12px;",
              }).html("撮影前").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            }else{
              $("<span>").attr({
                "class":"tag label label-primary",
                "style":"margin-right:2px;font-size:12px;",
              }).html("撮影終わり").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            }

            //등장인물
            $("<li>").attr({
              "class":"schedule_scene_characters",
            }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
            $("<b>").html("登場人物").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            $("<div>").attr({
              "class":"characters",
            }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );

            for(var index2 in data[index].characters){

              $("<span>").attr({
                "class":"tag label label-default",
                "data-user-no":data[index].characters[index2].user_no,
                "data-user-name":data[index].characters[index2].name,
                "data-user-position":data[index].characters[index2].position_no,
                "data-team-no":data[index].characters[index2].team_no,
                "style":"margin-right:2px;font-size:12px;",
              }).html(data[index].characters[index2].character_name).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last().children().last() );
            }

          }else{

            //테이블 tr , td , 장소버튼
            $("<tr>").appendTo( $("#schedule_scene_info_table") );
            $("<td>").appendTo( $("#schedule_scene_info_table").children().last() );
            $("<li>").appendTo( $("#schedule_scene_info_table").children().last().children().last() );
            $("<button>").attr({
              "class":"scene_location_sort_content_btn btn btn-primary",
            }).html(data[index].location).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last() );
            $("<span>").attr({
              "class":"caret",
            }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last() );

            //장소를 클릭하면 나오는 씬 버튼까지
            $("<ul>").appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last() );
            $("<li>").appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last() );

            $("<td>").appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last() );
            $("<button>").attr({
              "class":"schedule_scene_info_btn btn btn-default",
            }).html( "#"+data[index].scene_no ).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last() );
            $("<span>").attr({
              "class":"caret",
            }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last().children().last() );

            $("<td>").appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last() );

            //추가버튼
            if(data[index].status == 0){
              $("<button>").attr({
                "class":"btn btn-primary btn-sm",
                "onclick":"schedule_scene_add("+data[index].scene_no+")",
              }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last() );
              $("<span>").attr({
                "class":"glyphicon glyphicon-plus",
              }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last().children().last() );

            }else{
              $("<button>").attr({
                "class":"btn btn-default btn-sm",
                "disabled":"disabled",
                "onclick":"schedule_scene_add("+data[index].scene_no+")",
              }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last() );
              $("<span>").attr({
                "class":"glyphicon glyphicon-ok",
              }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().last().children().last() );

            }

            //씬 세부정보
            $("<ul>").attr({
              id:"schedule_scene_"+data[index].scene_no,
            }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last().children().last().children().first() );
            //장소
            $("<li>").attr({
              "class":"schedule_scene_add_location",
            }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
            $("<b>").html("場所:").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            $("<span>").html(data[index].location).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );

            //씬 정보
            $("<li>").attr({
              "class":"schedule_scene_add_summary",
            }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
            $("<b>").html("情報:").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            $("<span>").html(data[index].scene_summary).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );

            //촬영 상태
            $("<li>").attr({
              "class":"schedule_scene_add_status",
            }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
            $("<b>").html("進行状態 :").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            if(data[index].status == 0){
              $("<span>").attr({
                "class":"tag label label-primary",
                "style":"margin-right:2px;font-size:12px;",
              }).html("撮影前").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            }else{
              $("<span>").attr({
                "class":"tag label label-primary",
                "style":"margin-right:2px;font-size:12px;",
              }).html("撮影終わり").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            }

            //등장인물
            $("<li>").attr({
              "class":"schedule_scene_characters",
            }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
            $("<b>").html("登場人物").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
            $("<div>").attr({
              "class":"characters",
            }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );

            for(var index2 in data[index].characters){

              $("<span>").attr({
                "class":"tag label label-default",
                "data-user-no":data[index].characters[index2].user_no,
                "data-user-name":data[index].characters[index2].name,
                "data-user-position":data[index].characters[index2].position_no,
                "data-team-no":data[index].characters[index2].team_no,
                "style":"margin-right:2px;font-size:12px;",
              }).html(data[index].characters[index2].character_name).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last().children().last() );
            }


          }

          duplicate_location = data[index].location;
        }

      },
      error:function(data){
        // alert(data);
      }
    });

  }else{  //번호 순 정렬

    $.ajax({
      type:'GET',
      data: {
        "drama_no":drama_no,
        "sort_type":sort_type
      },
      url: url,
      success:function(data){
        console.log(data);

        //추가
        for(var index in data){

          //테이블 tr , td , 장소버튼
          $("<tr>").appendTo( $("#schedule_scene_info_table") );
          $("<td>").appendTo( $("#schedule_scene_info_table").children().last() );
          $("<li>").appendTo( $("#schedule_scene_info_table").children().last().children().last() );
          $("<button>").attr({
            "class":"schedule_scene_info_btn btn btn-default",
          }).html("#"+data[index].scene_no).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last() );
          $("<span>").attr({
            "class":"caret",
          }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last().children().last() );

          //씬 세부정보
          $("<ul>").attr({
            id:"schedule_scene_"+data[index].scene_no,
          }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last() );

          //장소
          $("<li>").attr({
            "class":"schedule_scene_add_location",
          }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
          $("<b>").html("場所:").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
          $("<span>").html(data[index].location).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );

          //씬 정보
          $("<li>").attr({
            "class":"schedule_scene_add_summary",
          }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
          $("<b>").html("情報:").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
          $("<span>").html(data[index].scene_summary).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );

          //촬영 상태
          $("<li>").attr({
            "class":"schedule_scene_add_status",
          }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
          $("<b>").html("進行状態 :").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
          if(data[index].status == 0){
            $("<span>").attr({
              "class":"tag label label-primary",
              "style":"margin-right:2px;font-size:12px;",
            }).html("撮影前").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
          }else{
            $("<span>").attr({
              "class":"tag label label-primary",
              "style":"margin-right:2px;font-size:12px;",
            }).html("撮影終わり").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
          }

          //등장인물
          $("<li>").attr({
            "class":"schedule_scene_characters",
          }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no) );
          $("<b>").html("登場人物").appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );
          $("<div>").attr({
            "class":"characters",
          }).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last() );

          for(var index2 in data[index].characters){

            $("<span>").attr({
              "class":"tag label label-default",
              "data-user-no":data[index].characters[index2].user_no,
              "data-user-name":data[index].characters[index2].name,
              "data-user-position":data[index].characters[index2].position_no,
              "data-team-no":data[index].characters[index2].team_no,
              "style":"margin-right:2px;font-size:12px;",
            }).html(data[index].characters[index2].character_name).appendTo( $("#schedule_scene_info_table").find("#schedule_scene_"+data[index].scene_no).children().last().children().last() );
          }

          //추가버튼
          $("<td>").appendTo( $("#schedule_scene_info_table").children().last() );
          if(data[index].status == 0){
            $("<button>").attr({
              "class":"btn btn-primary btn-sm",
              "onclick":"schedule_scene_add("+data[index].scene_no+")",
            }).appendTo( $("#schedule_scene_info_table").children().last().children().last() );
            $("<span>").attr({
              "class":"glyphicon glyphicon-plus",
            }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last() );

          }else{
            $("<button>").attr({
              "class":"btn btn-default btn-sm",
              "disabled":"disabled",
              "onclick":"schedule_scene_add("+data[index].scene_no+")",
            }).appendTo( $("#schedule_scene_info_table").children().last().children().last() );
            $("<span>").attr({
              "class":"glyphicon glyphicon-ok",
            }).appendTo( $("#schedule_scene_info_table").children().last().children().last().children().last() );

          }

        } //end for

      },
      error:function(data){
        // alert(data);
      }
    });

  } //end if


}


//스케줄을 수동으로 추가하기 위한 정보 get + todo추가
$(document).on('click','.team_schedule_addBtn',function(){
  // console.log("팀 클릭");

  var team_name = $(this).parent().attr('data-team-name');
  var team_name_ko = $(this).prev($('<b>')).html();
  var team_no = $(this).parent().attr('data-team-no');
  var drama_no = $("#schedule_drama_no").val();
  var url = $(".team_schedule_ibox").attr('data-link');


  $("#schedule_add_modal .modal-title ").attr({
    'data-team-no':team_no,
    'data-team-name':team_name,
  }).text(team_name_ko);


  // ajax 통신으로 필요 정보 가져옴
  $.ajax({
    url: url+"/"+drama_no+"/"+team_no,
    type:"GET",
    success: function(data) {

      //테이블 초기화

      $("#schedule_staff_add_table > thead").children().remove();
      $("#schedule_staff_add_table > tbody").children().remove();

      $("#schedule_staff_add_table > thead").append("<tr>");
      $("#schedule_staff_add_table > thead").children().append("<th>名前</td>");
      $("#schedule_staff_add_table > thead").children().append("<th>職位</td>");
      $("#schedule_staff_add_table > thead").children().append("<th>チーム</td>");
      $("#schedule_staff_add_table > thead").children().append("<th> - </td>");

      for (var staff in data){

        $("#schedule_staff_add_table").append($("<tr>").attr({
          'data-user-no':data[staff]['user_no'],
          'data-user-name':data[staff]['name'],
        }));
        $("#schedule_staff_add_table > tbody").children().last().append("<td>"+data[staff]['name']+"</td>");
        $("#schedule_staff_add_table > tbody").children().last().append("<td>"+data[staff]['position']+"</td>");
        $("#schedule_staff_add_table > tbody").children().last().append("<td>"+data[staff]['team_type']+"</td>");


        //추가 버튼
        //여기서 중복처리 함. 이미 추가되어있는 스태프는 check를 못하게 처리
        if($("div[data-team-name="+ team_name + "] > .team_schedule_content > .team_schedule_content_staff > div[data-user-no="+ data[staff]['user_no'] +"]").length > 0 ){
        // if($("." + team_name + " > .team_schedule_content > div[data-user-no="+ data[staff]['user_no'] +"]").length > 0 ){
          // console.log(data[staff]['user_no'] + "회원 중복");
          $("#schedule_staff_add_table > tbody").children().last().append($("<td>").attr('class','team_staff_add_btn'));
          // $("#schedule_staff_add_table > tbody").children().last().append("<td><input type='checkbox' disabled name='box' value='"+ data[staff]['user_no'] +"'>"+"</td>");
          $("#schedule_staff_add_table > tbody").children().last().append("<td>"+
                                                                            "<div class='checkbox'>"+
                                                                            "<label>"+
                                                                            "<input type='checkbox' id='check_all' name='box' value='"+ data[staff]['user_no'] +"' disabled>"+
                                                                            "<span class='cr'><i class='cr-icon glyphicon glyphicon-ok'></i></span>"+
                                                                            "</label>"+
                                                                            "</div>"+
                                                                            "</td>"
                                                                          );
          $("#schedule_staff_add_table > tbody").children().last().css('color','#F15F5F');

        }else{
          $("#schedule_staff_add_table > tbody").children().last().append($("<td>").attr('class','team_staff_add_btn'));
          // $("#schedule_staff_add_table > tbody").children().last().append("<td><input type='checkbox' name='box' value='"+ data[staff]['user_no'] +"'>"+"</td>");
          $("#schedule_staff_add_table > tbody").children().last().append("<td>"+
                                                                            "<div class='checkbox'>"+
                                                                            "<label>"+
                                                                            "<input type='checkbox' id='check_all' name='box' value='"+ data[staff]['user_no'] +"'>"+
                                                                            "<span class='cr'><i class='cr-icon glyphicon glyphicon-ok'></i></span>"+
                                                                            "</label>"+
                                                                            "</div>"+
                                                                            "</td>"
                                                                          );
        }


      }
      // console.log("성공");
      // console.log(data);
    }

  });


  //todo 추가

  //테이블 초기화
  $("#schedule_todo_add_table > tbody").children().remove();

  $("#schedule_todo_add_table > tbody").append("<tr>");
  $("<input>").attr("class","form-control").appendTo('#schedule_todo_add_table > tbody > tr');
  // $("#schedule_todo_add_table > tbody").children().append("<th>직급</td>");




  $("#schedule_add_modal").modal();
  // console.log($(this).attr('class'));

});

//************* 0709 추가 (모듈화) *************
//team schedule 에 staff추가하는 함수
function team_schedule_staff_add(user){

  // console.log(user);

  var user_team = $(".tab-content").children("[data-team-no=" + user.team_no + "]").children('.team_schedule_content');

  //스태프 추가
  //중복 아니면 추가
  if( user_team.children(".team_schedule_content_staff").children("[data-user-no=" + user.user_no + "]").length > 0 ){

    // -- 중복처리
    // console.log($(".actor_team_todo > ul > li button[data-user-no=112]").length);
    // 추가되는 배우가 actor_team_todo 영역에 1개이상 있으면 중복이라고 판단
    // 중복되는 배우의 count 를 증가시킴
    // 이는 삭제할때 count가 0이되었을때 삭제되도록 하기 위함.
    user_count = parseInt(user_team.children(".team_schedule_content_staff").children("[data-user-no=" + user.user_no + "]").attr('data-user-count'));
    user_team.children(".team_schedule_content_staff").children("[data-user-no=" + user.user_no + "]").attr('data-user-count',user_count+1);

  }else{
    // console.log("추가");
    sequence = user_team.children(".team_schedule_content_staff").children().length + 1;

    //이미지 들어간 test 방식
    $("<div>").attr({
      class:"team_schedule_staff",
      'sequence':sequence,
      'data-user-no' : user.user_no,
      'data-user-count':1,
      'data-user-name': user.name
    }).appendTo(user_team.children(".team_schedule_content_staff"));

    $("<img>").attr({
      class:"img-circle",
      // src:"http://54.92.37.34/dramaker/public/storage/image/user/users_profile_" + user.user_no + ".jpg",
      src:"http://www.dramaker.net/storage/image/user/users_profile_" + user.user_no + ".jpg",
      style:"width:60px; height:60px;"
    }).appendTo(user_team.children(".team_schedule_content_staff").children().last());

    $("<ul>").appendTo(user_team.children(".team_schedule_content_staff").children().last());
      $("<li>").appendTo(user_team.children(".team_schedule_content_staff").children().last().children().last());
      $("<b>").html(user.name+"("+user.position+")").appendTo(user_team.children(".team_schedule_content_staff").children().last().children().last().children().last());
    // $("<br>").appendTo(user_team.children().last());
    // $("<i>").attr('class','fa fa-phone').appendTo(user_team.children().last());
      $("<li>").appendTo(user_team.children(".team_schedule_content_staff").children().last().children().last());
      $("<b>").attr({
        style:"font-size:13px; "
      }).html(user.tel).appendTo(user_team.children(".team_schedule_content_staff").children().last().children().last().children().last());
      // $("<br>").appendTo(user_team.children().last());
      $("<li>").appendTo(user_team.children(".team_schedule_content_staff").children().last().children().last());
      $("<b>").attr({
        style:"font-size:13px; "
      }).html(user.email).appendTo(user_team.children(".team_schedule_content_staff").children().last().children().last().children().last());


    //staff가 추가될경우 nav에 badge수 증가
    var badge_tag = $(".team_schedule_tab").find($("[data-badge-no="+user.team_no+"]")).html();
    console.log(badge_tag);
    if(!badge_tag){
      $(".team_schedule_tab").find($("[data-badge-no="+user.team_no+"]")).html(1);
    }else{
      badge_tag++;
      $(".team_schedule_tab").find($("[data-badge-no="+user.team_no+"]")).html(badge_tag);
    }

    //이미지 들어간 test 방식

  }
}

//스케줄을 수동으로 추가
function team_schedule_add(){

  //스태프 목록에서 체크된 항목들 추가
  var staff_length = $("#schedule_staff_add_table > tbody").children().length;
  var todo_length = $("#schedule_todo_add_table > tbody").children().length;
  var team_no = $("#schedule_add_modal").find(".modal-title").attr('data-team-no');
  var team_name = $("#schedule_add_modal").find(".modal-title").attr('data-team-name');

  for(var i = 0 ; i < staff_length ; i++){

    // console.log( $("#schedule_staff_add_table > tbody").children().eq(i).find("input[name=box]")[0].checked  );
    // checkbox에 check가 되어 있으면 추가
    if( $("#schedule_staff_add_table > tbody").children().eq(i).find("input[name=box]")[0].checked  == true ){
      var user_no = $("#schedule_staff_add_table > tbody").children().eq(i).attr('data-user-no');

      var user_info;

      for(var staff in staff_info){

        if(staff_info[staff].user_no == user_no){
          user_info = staff_info[staff];
          break;
        }
      }

      team_schedule_staff_add(user_info);


    }

  }

  //todo추가
  for(var j = 0 ; j < todo_length ; j++){
    //추가

    var sequence = $("."+team_name+"_todo").children(".team_schedule_content_todo").children().length + 1;

    console.log(team_name);
    console.log(sequence);
    // var sequence = $("." + team_name + " > ul").children().length + 1;
    var todo_content = $("#schedule_todo_add_table > tbody").children().eq(j).children().val();

    // console.log(todo_content);

    if(todo_content == ""){
      console.log("내용이 없음으로 건너뜀");
    }else{

      $("<li>").attr({
        class:"list-group-item",
        sequence:sequence,
        'data-user-no' : 0,
        'data-user-count':1,
      }).html(todo_content).appendTo( $("."+team_name+"_todo").children(".team_schedule_content_todo") );


      //todo가 추가될경우 nav에 badge수 증가
      var badge_tag = $(".team_schedule_tab").find($("[data-badge-no="+team_no+"]")).html();
      console.log(badge_tag);
      if(!badge_tag){
        $(".team_schedule_tab").find($("[data-badge-no="+team_no+"]")).html(1);
      }else{
        badge_tag++;
        $(".team_schedule_tab").find($("[data-badge-no="+team_no+"]")).html(badge_tag);
      }
      // $("<button>").attr({
      //   class :'btn btn-default btn-sm',
      //   'data-user-no' : 0,
      //   'data-user-count':1,
      // }).html(todo_content).appendTo( $("."+team_name+"_todo").children(".team_schedule_content_todo").children().last() );
      //추가된 li에만 추가하기위함

    }
  }


}


//스케줄 scene 삭제 이벤트
$(document).on('click','.scene_delete_btn > button',function(){

  // console.log($(this).parents("tr").find(".scene_no").text());
  var scene_no = $(this).parents("tr").find(".scene_no").text();
  var characters = $("#schedule_scene_"+scene_no).children(".schedule_scene_characters").children(".characters");

  console.log("scene_no : "+scene_no);
  console.log("characters length : "+characters.children().length);


  for(var i = 0 ; i < characters.children().length ; i++){

    var user_no = characters.children().eq(i).attr('data-user-no');
    var team_no = characters.children().eq(i).attr('data-team-no');
    var user_team = $(".tab-content").children("[data-team-no=" + team_no + "]").children('.team_schedule_content').children('.team_schedule_content_staff');
    var user_count = user_team.children("[data-user-no="+ user_no +"]").attr('data-user-count');

    user_team.children("[data-user-no="+ user_no +"]").attr('data-user-count',parseInt(user_count)-1 );

    //data-user-count가 0이되면 삭제
    if(user_team.children("[data-user-no="+ user_no +"]").attr('data-user-count') == 0){
      user_team.children("[data-user-no="+ user_no +"]").remove();

      //staff가 추가될경우 nav에 badge수 감소
      var badge_tag = $(".team_schedule_tab").find($("[data-badge-no="+team_no+"]")).html();
      console.log(badge_tag);
      if(!badge_tag){
        $(".team_schedule_tab").find($("[data-badge-no="+team_no+"]")).html(1);
      }else{
        badge_tag--;
        $(".team_schedule_tab").find($("[data-badge-no="+team_no+"]")).html(badge_tag);
      }

      if(badge_tag == 0){
          $(".team_schedule_tab").find($("[data-badge-no="+team_no+"]")).html("");
      }
    }

  } //  for end

  // scene 삭제
  $(this).parents("tr").remove();

});

// team_schedule에 추가된 요소들 정보 확인.
$(document).on('click','#schedule_team_table > tbody > tr > td > ul > li > button',function(){
  console.log("요소 클릭");
});

//team스케줄 추가시 todo 추가 이벤트
$(document).on('click','#todo_add_btn',function(){
    $("#schedule_todo_add_table > tbody").append("<tr>");
    $("<input>").attr("class","form-control").appendTo($('#schedule_todo_add_table > tbody > tr').last());
});


//집합 시간 및 장소 추가
$(document).on('click','.schedule_meetting',function(){

  //버튼들 초기화
  for(var i = 0 ; i < $(".schedule_meetting_team").children().length ; i++){
    $(".schedule_meetting_team").children().eq(i).attr('data-check-status',"f");
    $(".schedule_meetting_team").children().eq(i).removeClass('meeting_check');

    //이미 선택된 팀이면
    if( $(".schedule_meetting_team").children().eq(i).attr('data-meeting-status') == "t" ){
      $(".schedule_meetting_team").children().eq(i).addClass('team_status_check');
    }
  }

  $('#meetting_team_add').attr('onclick',"meetting_add("+ $(this).attr('data-meetting-no') +")");

  $('#schedule_meetting_modal').modal();
});

//집합 시간 및 장소 추가 버튼 클릭 이벤트
$(document).on('click','.schedule_meetting_team_btn',function(){

  // console.log($(this).attr('data-check-status'));

  if($(this).attr('data-check-status') == "f"){
    $(this).attr('data-check-status',"t");
    $(this).addClass('meeting_check');
  }else{
    $(this).attr('data-check-status',"f");
    $(this).removeClass('meeting_check');
  }


});

function meetting_add(meeting_no){

    var time = $('#schedule_meetting_time').val();
    var location = $('#schedule_meetting_location').val();

    $("<span>").attr('class','meetting_time').html(time).appendTo( $(".meetting_table" ).children().children().eq(meeting_no).children().eq(1) );
    $("<span>").attr('class','meetting_location').html(location).appendTo( $(".meetting_table" ).children().children().eq(meeting_no).children().eq(2) );


    //팀목록 tag로추가
    // console.log($('.schedule_meetting_team_btn[data-check-status=t]').length);
    for(var i = 0 ; i < $('.schedule_meetting_team_btn[data-check-status=t]').length ; i++){
      // console.log( $('.schedule_meetting_team_btn[data-check-status=t]').eq(i) );
      var team_no = $('.schedule_meetting_team_btn[data-check-status=t]').eq(i).attr('data-team-no');
      var team_name = $('.schedule_meetting_team_btn[data-check-status=t]').eq(i).html();

      //중복처리

      // console.log("중복처리..");
      // console.log( $(".meetting_table").find($("[value="+team_no+"]")).length );
      if($(".meetting_table").find($("[team-no="+team_no+"]")).length > 0){
        console.log("meetting에 tag 이미 있으므로 넘어감");
      }else{

        $('<span>').attr({
          class:'tag label label-primary',
          'team-no':team_no,
          style:"margin-right:5px;",
        }).html(team_name).appendTo( $(".meetting_table" ).children().children().eq(meeting_no).children().eq(3) );

        // console.log(team_name);
        //data-meeting-status를 t로 변경
        $('.schedule_meetting_team_btn[data-check-status=t]').eq(i).attr('data-meeting-status','t');

      }


    }

    $("<i>").attr('class','fa fa-map-marker').appendTo( $(".meetting_table" ).children().children().eq(meeting_no).children().eq(4) );
}

//스케줄 저장
//input태그에 값을 넣지 않아 submit 대신 ajax로 처리함
function schedule_save(){

  //db에 넣기 위한 값들 저장
  var schedule = new Array();
  var schedule_summary = new Array();
  var meetting = new Array();
  var team_schedule = new Array();

  var scheduleData = new Object();    //모든 데이터를 담을 객체


  // ========================== schedule ==========================
  var drama_no = $('#schedule_drama_no').val(); //드라마 번호
  var local = $('#schedule_weather_location').attr("data-elocal"); //지역의 영어이름
  var date = $('#default_date').val(); //날짜
  var schedule_number = $('#schedule_sequence_input > input').val();  //회차

  var schedule_info = new Object();
  // console.log("========= schedule =========");
  // console.log("drama_no : " + drama_no );
  // console.log("local : " + local );
  // console.log("date : " + date);
  // console.log("number : " + schedule_number);

  schedule_info.drama_no = drama_no;
  schedule_info.local = local;
  schedule_info.date = date;
  schedule_info.schedule_number = schedule_number;

  schedule.push(schedule_info);

  // console.log(schedule);

  // ========================== schedule_summary ==========================

  //length는 메뉴역할 tr때문에 1개 많게 나오기때문에 1부터시작
  for(var i = 1 ; i < $('#schedule_table > tbody ').children().length ; i++){

    var sequence = i;
    var scene_no = $('#schedule_table > tbody ').children().eq(i).children().eq(0).html();
    var place = $('#schedule_table > tbody ').children().eq(i).children().eq(1).html();
    var dn = $('#schedule_table > tbody ').children().eq(i).children().eq(2).find( $('.scene_dn_select option:selected')).val();
    var sol = $('#schedule_table > tbody ').children().eq(i).children().eq(3).find( $('.scene_sol_select option:selected')).val();;
    var ie = $('#schedule_table > tbody ').children().eq(i).children().eq(4).find( $('.scene_ie_select option:selected')).val();;
    var scene_summary = $('#schedule_table > tbody ').children().eq(i).children().eq(5).html();;
    var etc = $('#schedule_table > tbody ').children().eq(i).children().eq(6).children().val();
    var schedule_status = $('#schedule_table > tbody ').children().eq(i).children().eq(7).html();

    // console.log("========= schedule_summary =========");
    // console.log("sequence : " + sequence );
    // console.log("scene_no : " + scene_no );
    // console.log("location : " + location);
    // console.log("dn : " + dn);
    // console.log("sol : " + sol);
    // console.log("ie : " + ie);
    // console.log("scene_summary : " + scene_summary);
    // console.log("etc : " + etc);
    // console.log("schedule_status : " + schedule_status);


    var schedule_summary_info = new Object();

    schedule_summary_info.sequence = sequence;
    schedule_summary_info.scene_no = scene_no;
    schedule_summary_info.location = place;
    schedule_summary_info.dn = dn;
    schedule_summary_info.sol = sol;
    schedule_summary_info.ie = ie;
    schedule_summary_info.scene_summary = scene_summary;
    schedule_summary_info.etc = etc;
    schedule_summary_info.schedule_status = schedule_status;

    schedule_summary.push(schedule_summary_info);

  }

  // console.log(schedule_summary);

  // ========================== meetting ==========================


  // console.log(    $(".schedule_meetting").eq(0).find( $('.meetting_time') ).html()  );

  for(var j = 0 ; j < 3 ; j++){

    // 비어 있으면 루프 나감
    // 비어있으면 undefined 임으로 if문으로 체크
    if( !$(".schedule_meetting_tr").eq(j).children().eq(1).html() ){
      console.log("시간비어있음");
      break;
    }

    var meetting_info = new Object();
    var sequence = j+1;
    var time = $(".schedule_meetting_tr").eq(j).children().eq(1).children().html();
    var content = $(".schedule_meetting_tr").eq(j).children().eq(2).children().html();
    var team_no = new Array();

    for(var k = 0 ; k < $(".schedule_meetting_tr").eq(j).children().eq(3).children().length ; k++ ){
      var team_no_info = new Object();
      console.log("k =" + k);
      team_no_info.team_no = $(".schedule_meetting_tr").eq(j).children().eq(3).children(".tag").eq(k).attr('team-no');
      team_no.push(team_no_info);
    }

    // console.log("========= meetting =========");
    // console.log("time : " + time );
    // console.log("content : " + content );
    // console.log("team_no : " + team_no);


    meetting_info.sequence = sequence;
    meetting_info.time = time;
    meetting_info.content = content;
    meetting_info.team_no = team_no;

    meetting.push(meetting_info);
  }

  // console.log(meetting);

  // ========================== team_schedule ==========================

    // console.log("========= team_schedule =========")

    for(var team_count = 0 ; team_count < $('.team_schedule_tab > .tab-content > .tab-pane').length ; team_count++){

      var team = $('.team_schedule_tab > .tab-content > .tab-pane').eq(team_count);
      var team_no = $('.team_schedule_tab > .tab-content > .tab-pane').eq(team_count).attr('data-team-no');
      var team_schedule_team = new Object();
      var team_schedule_schedule = new Array();

      // console.log("team_no : " + team_no);


      //staff 추가
      for (var todo_count = 0; todo_count < team.find(".team_schedule_content_staff").children(".team_schedule_staff").length ; todo_count++) {

        var sequence = team.find(".team_schedule_content_staff").children(".team_schedule_staff").eq(todo_count).attr('sequence');
        var user_no = team.find(".team_schedule_content_staff").children(".team_schedule_staff").eq(todo_count).attr('data-user-no');
        var name = team.find(".team_schedule_content_staff").children(".team_schedule_staff").eq(todo_count).attr('data-user-name');
        var prop = "";
        var data_count = team.find(".team_schedule_content_staff").children(".team_schedule_staff").eq(todo_count).attr('data-user-count');

        var team_schedule_schedule_info = new Object();
        // console.log("-----------------------");
        // console.log("sequence : " + sequence);
        // console.log("user_no : " + user_no);
        // console.log("name : " + name);
        // console.log("prop : " + prop);

        team_schedule_schedule_info.sequence = sequence;
        team_schedule_schedule_info.type = "staff";
        team_schedule_schedule_info.user_no = user_no;
        team_schedule_schedule_info.name = name;
        team_schedule_schedule_info.prop = prop;
        team_schedule_schedule_info.data_count = data_count;

        team_schedule_schedule.push(team_schedule_schedule_info);

      } //staff for end

      //todo 추가
      for (var todo_count = 0; todo_count < team.find(".team_schedule_content_todo").children(".list-group-item").length ; todo_count++) {

        //team_schedule에 배우가 아닌 할일이 들어갈 경우 user_no = 0 임
        var sequence =team.find(".team_schedule_content_todo").children(".list-group-item").eq(todo_count).attr('sequence');
        var user_no = "";
        var name = "";
        var prop = team.find(".team_schedule_content_todo").children(".list-group-item").eq(todo_count).html();
        var data_count = team.find(".team_schedule_content_todo").children(".list-group-item").eq(todo_count).attr('data-user-count');

        var team_schedule_schedule_info = new Object();
        // console.log("-----------------------");
        // console.log("sequence : " + sequence);
        // console.log("user_no : " + user_no);
        // console.log("name : " + name);
        // console.log("prop : " + prop);

        team_schedule_schedule_info.sequence = sequence;
        team_schedule_schedule_info.type = "todo";
        team_schedule_schedule_info.user_no = user_no;
        team_schedule_schedule_info.name = name;
        team_schedule_schedule_info.prop = prop;
        team_schedule_schedule_info.data_count = data_count;

        team_schedule_schedule.push(team_schedule_schedule_info);

      } //staff for end


      team_schedule_team.team_no = team_no;
      team_schedule_team.schedule = team_schedule_schedule;

      team_schedule.push(team_schedule_team);

    } //for end


    // console.log(team_schedule);


    //서버에 Ajax 데이터 전달

    // console.log(schedule);
    // console.log(schedule_summary);
    // console.log(meetting);
    // console.log(team_schedule);

    scheduleData.schedule = schedule;
    scheduleData.schedule_summary = schedule_summary;
    scheduleData.meetting = meetting;
    scheduleData.team_schedule = team_schedule;

    // console.log(JSON.stringify(scheduleData));
    console.log(scheduleData);


    var url = $('#schedule_add_btn').attr('data-link');
    var token = $("input[name=_token]").val();

    //ajax 는 데이터를 object형태로 못받음
    //json형식으로 변환 후 전송

    $.ajax({
      url: url,
      type:"POST",
      data: {
        "schedule":scheduleData,
        "_token":token,
      },
      success: function(data) {

        console.log("성공");
        console.log(data);

        // 알람부분
        // for in 문으로 순회하면서 alarm서버로 데이터 전송
        console.log(data);

        for(var i in data){

          console.log(data[i]);

          //실시간 알람부분
          //app알람을 위해 token도 함께 전달
          socket.emit('schedule_write',
            {
              sender : data[i]['sender'],
              receiver : data[i]['receiver'],
              time : data[i]['time'],
              notice : data[i]['notice'],
              token: data[i]['token'],
            }
          );

        } //end for


        // console.log(data);

        alert("スケジュールが作成されました。");
        var schedule_url = $('#schedule_add_btn').attr('data-schedule-link');
        console.log(schedule_url);

        location.href = schedule_url;

      }
    });




}

//스케줄 수정 저장
//기존에 있던 값을 지우고 다시 저장
function schedule_modify(){

  //db에 넣기 위한 값들 저장
  var schedule = new Array();
  var schedule_summary = new Array();
  var meetting = new Array();
  var team_schedule = new Array();

  var scheduleData = new Object();    //모든 데이터를 담을 객체


  //schedule_no
  var schedule_no = $('#schedule_no').val(); //스케줄 넘버

  // ========================== schedule ==========================
  var drama_no = $('#schedule_drama_no').val(); //드라마 번호
  var local = $('#schedule_weather_location').attr("data-elocal"); //지역의 영어이름
  var date = $('#default_date').val(); //날짜
  var schedule_number = $('#schedule_sequence_input > input').val();  //회차

  var schedule_info = new Object();
  // console.log("========= schedule =========");
  // console.log("drama_no : " + drama_no );
  // console.log("local : " + local );
  // console.log("date : " + date);
  // console.log("number : " + schedule_number);

  schedule_info.drama_no = drama_no;
  schedule_info.local = local;
  schedule_info.date = date;
  schedule_info.schedule_number = schedule_number;

  schedule.push(schedule_info);

  // console.log(schedule);

  // ========================== schedule_summary ==========================

  //length는 메뉴역할 tr때문에 1개 많게 나오기때문에 1부터시작
  for(var i = 1 ; i < $('#schedule_table > tbody ').children().length ; i++){

    var sequence = i;
    var scene_no = $('#schedule_table > tbody ').children().eq(i).children().eq(0).html();
    var place = $('#schedule_table > tbody ').children().eq(i).children().eq(1).html();
    var dn = $('#schedule_table > tbody ').children().eq(i).children().eq(2).find( $('.scene_dn_select option:selected')).val();
    var sol = $('#schedule_table > tbody ').children().eq(i).children().eq(3).find( $('.scene_sol_select option:selected')).val();;
    var ie = $('#schedule_table > tbody ').children().eq(i).children().eq(4).find( $('.scene_ie_select option:selected')).val();;
    var scene_summary = $('#schedule_table > tbody ').children().eq(i).children().eq(5).html();;
    var etc = $('#schedule_table > tbody ').children().eq(i).children().eq(6).children().val();

    //schedule_status 값
    if( $('#schedule_table > tbody ').children().eq(i).children().eq(7).find($('input')).prop('checked') ){
      var schedule_status = 1;
    }else{
      var schedule_status = 0;
    }

    // console.log("========= schedule_summary =========");
    // console.log("sequence : " + sequence );
    // console.log("scene_no : " + scene_no );
    // console.log("location : " + location);
    // console.log("dn : " + dn);
    // console.log("sol : " + sol);
    // console.log("ie : " + ie);
    // console.log("scene_summary : " + scene_summary);
    // console.log("etc : " + etc);
    // console.log("schedule_status : " + schedule_status);


    var schedule_summary_info = new Object();

    schedule_summary_info.sequence = sequence;
    schedule_summary_info.scene_no = scene_no;
    schedule_summary_info.location = place;
    schedule_summary_info.dn = dn;
    schedule_summary_info.sol = sol;
    schedule_summary_info.ie = ie;
    schedule_summary_info.scene_summary = scene_summary;
    schedule_summary_info.etc = etc;
    schedule_summary_info.schedule_status = schedule_status;

    schedule_summary.push(schedule_summary_info);

  }

  // console.log(schedule_summary);

  // ========================== meetting ==========================


  // console.log(    $(".schedule_meetting").eq(0).find( $('.meetting_time') ).html()  );

  for(var j = 0 ; j < 3 ; j++){

    // 비어 있으면 루프 나감
    // 비어있으면 undefined 임으로 if문으로 체크
    if( !$(".schedule_meetting_tr").eq(j).children().eq(1).html() ){
      console.log("시간비어있음");
      break;
    }

    var meetting_info = new Object();
    var sequence = j+1;
    var time = $(".schedule_meetting_tr").eq(j).children().eq(1).children().html();
    var content = $(".schedule_meetting_tr").eq(j).children().eq(2).children().html();
    var team_no = new Array();

    for(var k = 0 ; k < $(".schedule_meetting_tr").eq(j).children().eq(3).children().length ; k++ ){
      var team_no_info = new Object();
      console.log("k =" + k);
      team_no_info.team_no = $(".schedule_meetting_tr").eq(j).children().eq(3).children(".tag").eq(k).attr('team-no');
      team_no.push(team_no_info);
    }

    // console.log("========= meetting =========");
    // console.log("time : " + time );
    // console.log("content : " + content );
    // console.log("team_no : " + team_no);


    meetting_info.sequence = sequence;
    meetting_info.time = time;
    meetting_info.content = content;
    meetting_info.team_no = team_no;

    meetting.push(meetting_info);
  }

  // console.log(meetting);

  // ========================== team_schedule ==========================

    // console.log("========= team_schedule =========")

    for(var team_count = 0 ; team_count < $('.team_schedule_tab > .tab-content > .tab-pane').length ; team_count++){

      var team = $('.team_schedule_tab > .tab-content > .tab-pane').eq(team_count);
      var team_no = $('.team_schedule_tab > .tab-content > .tab-pane').eq(team_count).attr('data-team-no');
      var team_schedule_team = new Object();
      var team_schedule_schedule = new Array();

      // console.log("team_no : " + team_no);


      //staff 추가
      for (var todo_count = 0; todo_count < team.find(".team_schedule_content_staff").children(".team_schedule_staff").length ; todo_count++) {

        var sequence = team.find(".team_schedule_content_staff").children(".team_schedule_staff").eq(todo_count).attr('sequence');
        var user_no = team.find(".team_schedule_content_staff").children(".team_schedule_staff").eq(todo_count).attr('data-user-no');
        var name = team.find(".team_schedule_content_staff").children(".team_schedule_staff").eq(todo_count).attr('data-user-name');
        var prop = "";
        var data_count = team.find(".team_schedule_content_staff").children(".team_schedule_staff").eq(todo_count).attr('data-user-count');

        var team_schedule_schedule_info = new Object();
        // console.log("-----------------------");
        // console.log("sequence : " + sequence);
        // console.log("user_no : " + user_no);
        // console.log("name : " + name);
        // console.log("prop : " + prop);

        team_schedule_schedule_info.sequence = sequence;
        team_schedule_schedule_info.type = "staff";
        team_schedule_schedule_info.user_no = user_no;
        team_schedule_schedule_info.name = name;
        team_schedule_schedule_info.prop = prop;
        team_schedule_schedule_info.data_count = data_count;

        team_schedule_schedule.push(team_schedule_schedule_info);

      } //staff for end

      //todo 추가
      for (var todo_count = 0; todo_count < team.find(".team_schedule_content_todo").children(".list-group-item").length ; todo_count++) {

        //team_schedule에 배우가 아닌 할일이 들어갈 경우 user_no = 0 임
        var sequence =team.find(".team_schedule_content_todo").children(".list-group-item").eq(todo_count).attr('sequence');
        var user_no = "";
        var name = "";
        var prop = team.find(".team_schedule_content_todo").children(".list-group-item").eq(todo_count).html();
        var data_count = team.find(".team_schedule_content_todo").children(".list-group-item").eq(todo_count).attr('data-user-count');

        var team_schedule_schedule_info = new Object();
        // console.log("-----------------------");
        // console.log("sequence : " + sequence);
        // console.log("user_no : " + user_no);
        // console.log("name : " + name);
        // console.log("prop : " + prop);

        team_schedule_schedule_info.sequence = sequence;
        team_schedule_schedule_info.type = "todo";
        team_schedule_schedule_info.user_no = user_no;
        team_schedule_schedule_info.name = name;
        team_schedule_schedule_info.prop = prop;
        team_schedule_schedule_info.data_count = data_count;

        team_schedule_schedule.push(team_schedule_schedule_info);

      } //staff for end


      team_schedule_team.team_no = team_no;
      team_schedule_team.schedule = team_schedule_schedule;

      team_schedule.push(team_schedule_team);

    } //for end


    // console.log(team_schedule);


    //서버에 Ajax 데이터 전달

    // console.log(schedule);
    // console.log(schedule_summary);
    // console.log(meetting);
    // console.log(team_schedule);

    scheduleData.schedule_no = schedule_no;
    scheduleData.schedule = schedule;
    scheduleData.schedule_summary = schedule_summary;
    scheduleData.meetting = meetting;
    scheduleData.team_schedule = team_schedule;



    // console.log(JSON.stringify(scheduleData));
    console.log(scheduleData);


    var url = $('#schedule_modify_btn').attr('data-link');
    var token = $("input[name=_token]").val();

    //ajax 는 데이터를 object형태로 못받음
    //json형식으로 변환 후 전송

    $.ajax({
      url: url,
      type:"POST",
      data: {
        "schedule":scheduleData,
        "_token":token,
      },
      success: function(data) {

        console.log("성공");

        //알람부분
        //for in 문으로 순회하면서 alarm서버로 데이터 전송
        console.log(data);

        for(var i in data){

          console.log(data[i]);

          //app알람을 위해 token도 함께 전달
          socket.emit('schedule_modify',
            {
              sender : data[i]['sender'],
              receiver : data[i]['receiver'],
              time : data[i]['time'],
              notice : data[i]['notice'],
              token: data[i]['token'],
            }
          );

        }


        alert("スケジュールが修正されました。");
        var schedule_url = $('#schedule_modify_btn').attr('data-schedule-link');
        console.log(schedule_url);

        location.href = schedule_url;

      }
    });


}





///=================================== equipment =================================


function equipment_show(equipment_no){

  var url =$(".proudction_equipment_container_wrapper").attr('data-link');
  $.ajax({
    url: url+"/"+equipment_no,
    type:"GET",
    success: function(data) {
      var path = data[0]['path'];
      console.log(path);
      var save_name = data[0]['save_name'];
      var equipment_url = $(".modal-production-equipment-status").attr('data-link');
      // $(".modal-production-equipment-img > span").html('<img src=http://127.0.0.1/dramaker/public/storage/'+path+"/"+save_name+'>');
      $(".modal-production-equipment-img > span").html('<img src=http://www.dramaker.net/storage/'+path+"/"+save_name+'>');
      $(".modal-production-equipment-name > span").text(data[0]['equipment_name']);
      $(".modal-production-equipment-status > span").text(data[0]['equipment_status']);
      $(".equipment_rewrite_btn").click(function(){
        $(".modal-production-equipment-status > span").remove();
        $(".modal-production-equipment-status > label").html('<span><select><option>사용가능</opition><option>고장</opition></select></span>');
        $(".modal-footer-equipment").html('<button class="btn btn-danger rewrite_success">수정완료</button>');
        $(".rewrite_success").attr('data-link', equipment_url);
        $(".rewrite_success").attr('onclick','rewrite_success('+equipment_no+')');
      })
      console.log("성공");
      console.log(data);

    }
  });

  $('#production_equipment').modal();
}

function rewrite_success(equipment_no){
alert('ff');
}

function staff_add(){
    var val = $('.contest_write_form_staff').html();
    $(val).appendTo('.staff_add');
    console.log(val);
}

function position_select(sel){
  var $this = $(sel);
  var url =$this.attr('data-link');
  var val = $this.val();
  $.ajax({
    url: url+"/"+val,
    type:"GET",
    success: function(data){
      var staff = $this.parent().parent().find('div.staff > select');
      staff.html('');
      $.each(data, function(key, value){
        staff.append('<option value="'+ value["user_no"]+'">'+value["name"]+'</option>')
      });

    }
  });



}

function recruit_apply_list(recruit_no){
  var test = $(".recruit_apply_list"+recruit_no).toggle();

}

function drama_staff_add(){
    var val = $('.employees_add').html();
    $(val).appendTo('.staff_added');
    console.log(val);
}

function staff_info(user_no){
  var url =$(".staff_select").attr('data-link');
  $.ajax({
    url: url+"/"+user_no,
    type:"GET",
    success: function(data) {
      if(data[0]['gender'] == 'm'){
        $('.staff_info_title').after('<tr><td>'+data[0]['name']+'</td><td>남</td><td>'+data[0]['birth']+'</td><td>'
                                      +data[0]['local']+'</td><td>'+data[0]['tel']+'</td></tr>');
      }else{
        $('.staff_info_title').after('<tr><td>'+data[0]['name']+'</td><td>여</td><td>'+data[0]['birth']+'</td><td>'
                                      +data[0]['local']+'</td><td>'+data[0]['tel']+'</td></tr>');
      }

      console.log(data);

    }
  });
}







//드라마 제작장비 추가
function drama_equipment_add(production_no){

  var url =$("#drama_equipment_add_btn").attr('data-link');

  $.ajax({
    url: url+"/"+production_no,
    type:"GET",
    success: function(data) {

      for (var equipment in data){
        // console.log(data[equipment]);

        // var equipment_info = "<tr>"+
        //                         "<td>"+data[equipment]['equipment_name']+"</td>"+
        //                         "<td>"+data[equipment]['category']+"</td>"+
        //                         "<td>"+data[equipment]['equipment_status']+"</td>"+
        //                         "<td><input type='checkbox' value='"+data[equipment]['equipment_no']+"'>"+"</td>"+
        //                      "</tr>";
        //
        // $("#drama_equipment_add_table").append(equipment_info);

        $("#drama_equipment_add_table").append("<tr>");
        $("#drama_equipment_add_table > tbody").children().last().append("<td>"+data[equipment]['equipment_name']+"</td>");
        $("#drama_equipment_add_table > tbody").children().last().append("<td>"+data[equipment]['category']+"</td>");

        if(data[equipment]['equipment_status'] == '사용 가능'){
          $("#drama_equipment_add_table > tbody").children().last().append("<td>"+data[equipment]['equipment_status']+"</td>").children().last().attr('class','equipment_status_p');
          $("#drama_equipment_add_table > tbody").children().last().append("<td><input type='checkbox' value='"+data[equipment]['equipment_no']+"'>"+"</td>");
        }else if(data[equipment]['equipment_status'] == '사용중'){
          $("#drama_equipment_add_table > tbody").children().last().append("<td>"+data[equipment]['equipment_status']+"</td>").children().last().attr('class','equipment_status_u');
          $("#drama_equipment_add_table > tbody").children().last().append("<td><input type='checkbox' disabled value='"+data[equipment]['equipment_no']+"'>"+"</td>");
        }else{
          $("#drama_equipment_add_table > tbody").children().last().append("<td>"+data[equipment]['equipment_status']+"</td>").attr('class','equipment_status_ip');
          $("#drama_equipment_add_table > tbody").children().last().append("<td><input type='checkbox' disabled value='"+data[equipment]['equipment_no']+"'>"+"</td>");
        }

      }

      // console.log("성공");
      // console.log(data);

    }
  });

  $('#production_equipment').modal();

}

// =================================== employee =================================

function employee_show(user_no){
  var url =$(".ibox-production-staff").attr('data-link');
  //apply no ajax 통신을 통해 값 가져오기
  $.ajax({
    url: url+"/"+user_no,
    type:"GET",
    success: function(data) {
      var path = data[0]['path'];
      console.log(path);
      var save_name = data[0]['save_name'];
      // $(".modal-member-img").html('<img class="img-circle" width="200" height="200" src=http://127.0.0.1/dramaker/public/storage/'+path+"/"+save_name+'>');
      $(".modal-member-img").html('<img class="img-circle" width="200" height="200" src=http://www.dramaker.net/storage/'+path+"/"+save_name+'>');
      $(".modal-member-name > span").text(data[0]['name']);
      if(data[0]['gender']=='m'){
        $(".modal-member-gender > span").text('남');
      }else{
        $(".modal-member-gender > span").text('여');
      }
      $(".modal-member-birth > span").text(data[0]['birth']);
      $(".modal-member-local > span").text(data[0]['local']);
      $(".modal-member-phonenum > span").text(data[0]['tel']);
      $(".modal-member-position > span").text(data[0]['position']);
      $(".modal-member-email > span").text(data[0]['email']);
      $(".modal-member-career > span").text(data[0]['career']);
      $(".modal-member-introduce > span").text(data[0]['introduce']);


      console.log("성공");
      console.log(data);
    }
  });


  $('#production_member').modal();

}


// =================================== staffpull =================================


$(document).on('click','#staffpull_search',function(){

  console.log("클릭함");
  var start_date = $("#start_date").val();
  var end_date = $('#end_date').val();
  var check_staff = new Array();
  var drama_no = $('#drama_no').val();

  $("input:checkbox[name='staffpull_staf_list']").each(function(){
    if(this.checked){
      check_staff.push(this.value);
    }
  })

  console.log(check_staff);

  var url =$("#staffpull_search").attr('data-link');

  $.ajax({
    url: url,
    type:"GET",
    data:{
      "start_date" : start_date,
      "end_date" : end_date,
      "check_staff" : check_staff,
      "drama_no":drama_no,
    },
    success: function(data) {

      //테이블 초기화
      if($("#staffpull_table > tbody").children().length > 2){

        $("#staffpull_table > tbody").children().remove();
        $("<tr>").appendTo("#staffpull_table > tbody");
        $("<td>").html('이름').appendTo("#staffpull_table > tbody").children();
        $("<td>").html('직종').appendTo("#staffpull_table > tbody").children();
        $("<td>").html('상태').appendTo("#staffpull_table > tbody").children();
        $("<td>").html('스케줄 확인').appendTo("#staffpull_table > tbody").children();

      }

      // console.log(data);
      for(var index in data){

        $("<tr>").attr('data-user-no',data[index]['user_no']).appendTo("#staffpull_table");
        $("<td>").attr({
          'data-toggle':"modal",
          'data-target':"#staff_profile",
          'class':'staffpull_user_info',
        }).html(data[index]['name']).appendTo($("#staffpull_table > tbody").children().last());
        $("<td>").html(data[index]['type']).appendTo($("#staffpull_table > tbody").children().last());
        if(data[index]['ct'] == 0){
          $("<td>").attr('class','staffpull_possible').html('촬영 가능').appendTo($("#staffpull_table > tbody").children().last());
        }else{
          $("<td>").attr('class','staffpull_consultation').html('협의 필요').appendTo($("#staffpull_table > tbody").children().last());
        }
        $("<td>").appendTo($("#staffpull_table > tbody").children().last());
        $("<button>").attr({
            class:"btn btn-info get_staffpull_user_schedule",
            // 'data-toggle':"modal",
            // 'data-target':"#staffpull_calendar",
        }).html("스케줄 보기").appendTo($("#staffpull_table > tbody").children().children().last());

      }

    }

  });

});

//스태프풀 유저 클릭시 정보
$(document).on('click','.staffpull_user_info',function(){

  var user_no = $(this).parent().attr('data-user-no');
  var url = $('#staff_profile').attr('data-url');
  // console.log(user_no);

  $.ajax({
    url: url+"/"+user_no,
    type:"GET",
    data: {
      "user_no":user_no
    },
    success: function(data) {

      // 초기화
      $('#staffpull_user_info_table > tbody').children().remove();
      $('<tr>').appendTo('#staffpull_user_info_table > tbody');
      $('<td>').attr('colspan','2').appendTo( $('#staffpull_user_info_table > tbody').children().last() );

      $('<tr>').appendTo('#staffpull_user_info_table > tbody');
      $('<td>').html('이름').appendTo( $('#staffpull_user_info_table > tbody').children().last() );
      $('<td>').appendTo( $('#staffpull_user_info_table > tbody').children().last() );

      $('<tr>').appendTo('#staffpull_user_info_table > tbody');
      $('<td>').html('예명').appendTo( $('#staffpull_user_info_table > tbody').children().last() );
      $('<td>').appendTo( $('#staffpull_user_info_table > tbody').children().last() );

      $('<tr>').appendTo('#staffpull_user_info_table > tbody');
      $('<td>').html('연락처').appendTo( $('#staffpull_user_info_table > tbody').children().last() );
      $('<td>').appendTo( $('#staffpull_user_info_table > tbody').children().last() );

      $('<tr>').appendTo('#staffpull_user_info_table > tbody');
      $('<td>').html('이메일').appendTo( $('#staffpull_user_info_table > tbody').children().last() );
      $('<td>').appendTo( $('#staffpull_user_info_table > tbody').children().last() );

      $('<tr>').appendTo('#staffpull_user_info_table > tbody');
      $('<td>').html('경력').appendTo( $('#staffpull_user_info_table > tbody').children().last() );
      $('<td>').appendTo( $('#staffpull_user_info_table > tbody').children().last() );

      $('<tr>').appendTo('#staffpull_user_info_table > tbody');
      $('<td>').html('기타').appendTo( $('#staffpull_user_info_table > tbody').children().last() );
      $('<td>').appendTo( $('#staffpull_user_info_table > tbody').children().last() );




      console.log(data);
      // $('<img>').attr('src','http://54.92.37.34/dramaker/public/storage/'+data[0]['path']+data[0]['save_name']).appendTo( $('#staffpull_user_info_table > tbody').children().eq(0).children() );
      $('<img>').attr('src','http://www.dramaker.net/storage/'+data[0]['path']+data[0]['save_name']).appendTo( $('#staffpull_user_info_table > tbody').children().eq(0).children() );
      $('<span>').attr({
        'data-user-no':data[0]['user_no'],
        'id':'staffpull_staff_user_no'
      }).html(data[0]['name']).appendTo( $('#staffpull_user_info_table > tbody').children().eq(1).children().eq(1) );
      $('<span>').html(data[0]['stage_name']).appendTo( $('#staffpull_user_info_table > tbody').children().eq(2).children().eq(1) );
      $('<span>').html(data[0]['tel']).appendTo( $('#staffpull_user_info_table > tbody').children().eq(3).children().eq(1) );
      $('<span>').html(data[0]['email']).appendTo( $('#staffpull_user_info_table > tbody').children().eq(4).children().eq(1) );
      $('<span>').html(data[0]['career']).appendTo( $('#staffpull_user_info_table > tbody').children().eq(5).children().eq(1) );
      $('<span>').html('-').appendTo( $('#staffpull_user_info_table > tbody').children().eq(6).children().eq(1) );

    }

  }); //ajax end

});

//스태프풀 요청하기
$(document).on('click','#staffpull_request',function(){

  var sender_no = $('#user_no').val();
  var staff_no = $('#staffpull_staff_user_no').attr('data-user-no');
  var drama_no = $('#drama_no').val();
  var url = $('#staffpull_request').attr('data-url');

  $.ajax({
    url: url,
    type:"GET",
    data:{
      sender_no:sender_no,
      staff_no:staff_no,
      drama_no:drama_no,
    },
    success: function(data) {


      for(var i in data){

        console.log(data[i]);

        socket.emit('staff_add',
          {
            sender : data[i]['sender'],
            receiver : data[i]['receiver'],
            time : data[i]['time'],
            notice : data[i]['notice'],
          }
        );

      }


      alert("요청되었습니다");


    }
  });



});


// =================================== recruit =================================

function recruit_check(apply_no){
  var url =$(".recruitment").attr('data-link');
  console.log(url);
  $.ajax({
    url: url+"/"+apply_no,
    type:"GET",
    success: function(data) {
      var path = data[0]['path'];
      var save_name = data[0]['save_name'];
      // $(".modal-recruiment-img > span").html('<img src=http://127.0.0.1/dramaker/public/storage/'+path+"/"+save_name+' width="200px"; height="250px;">');
      $(".modal-recruiment-img > span").html('<img src=http://www.dramaker.net/storage/'+path+"/"+save_name+' width="200px"; height="250px;">');
      $(".modal-recruiment-name > span").text(data[0]['name']);
      $(".modal-recruiment-nick-name > span").text(data[0]['stage_name']);
      if(data[0]['gender'] == 'm'){
        $(".modal-recruiment-gender > span").text('남');
      }else{
        $(".modal-recruiment-gender > span").text('여');
      }

      $(".modal-recruiment-birth > span").text(data[0]['birth']);
      $(".modal-recruiment-height > span").text(data[0]['height']);
      $(".modal-recruiment-weight > span").text(data[0]['weight']);
      $(".modal-recruiment-phonenum > span").text(data[0]['tel']);
      $(".modal-recruiment-email > span").text(data[0]['email']);
      $(".modal-recruiment-career > span").text(data[0]['career']);
      // $(".modal-recruiment-pr").html('<video width="520" height="440" controls> <source src=http://127.0.0.1/dramaker/public/storage/'+path+"/"+save_name+'></video>');
      $(".modal-recruiment-pr").html('<video width="520" height="440" controls> <source src=http://www.dramaker.net/storage/'+path+"/"+save_name+'></video>');
      $(".apply_choose").attr('onclick','apply_select('+apply_no+')');
      $(".apply_cancel").attr('onclick','apply_cancel('+apply_no+')');
      console.log(data[0]);
    }
  });

  $('#recruiment_modal').modal();
}

function apply_select(apply_no){

  var url =$(".apply_choose").attr('data-link');
  // console.log(url);
  $.ajax({
    url: url+"/"+apply_no,
    type:"GET",
    success: function(data) {
      var recommend = confirm("채용하시겠습니까?")
        if(recommend == true){
          alert('채용되었습니다');
          // $(".modal-contestcheck-recommend > span").text(data[0]['like']);
          console.log(data[0]);
          window.location.reload();
        }
      }
    });
  }

  function apply_cancel(apply_no){

    var url =$(".apply_cancel").attr('data-link');
    console.log(url);
    $.ajax({
      url: url+"/"+apply_no,
      type:"GET",
      success: function(data) {
        var recommend = confirm("제외하시겠습니까?")
          if(recommend == true){
            alert('제외되었습니다');
            // $(".modal-contestcheck-recommend > span").text(data[0]['like']);
            console.log(data[0]);
            window.location.reload();
          }
      }
    });
  }

    function recruit_list(recruit_no){
      var url =$(".recruit_list").attr('data-link');
      console.log(url);
      $.ajax({
        url: url+"/"+recruit_no,
        type:"GET",
        success: function(data) {
          $.each()
          }
      });
    }


    function drama_employee_show(user_no){
      var url =$(".ibox-staff").attr('data-link');

        $.ajax({
          url: url+"/"+user_no,
          type:"GET",
          success: function(data) {
            var path = data[0]['path'];
            var save_name = data[0]['save_name'];
            // $(".modal-staff-img > span").html('<img class="img-circle" width="200" height="200" src=http://54.92.37.34/dramaker/public/storage/'+path+"/"+save_name+'>');
            $(".modal-staff-img > span").html('<img class="img-circle" width="200" height="200" src=http://www.dramaker.net/storage/'+path+"/"+save_name+'>');
            $(".modal-staff-name > span").text(data[0]['name']);
            $(".modal-staff-position > span").text(data[0]['position']);
            if(data[0]['gender']=='m'){
              $(".modal-staff-gender > span").text('남');
            }else{
              $(".modal-staff-gender > span").text('여');
            }
            $(".modal-staff-phonenum > span").text(data[0]['tel']);
            $(".modal-staff-email > span").text(data[0]['email']);
            $(".modal-staff-introduce > span").text(data[0]['introduce']);
            $(".modal-staff-career > span").text(data[0]['career']);
            $(".staff_delete").attr('onclick','staff_delete('+user_no+')');

            console.log("성공");
            console.log(data);
          }
        });

        $('#staff').modal();
    }

    function staff_delete(user_no){
      var url =$(".staff_delete").attr('data-link');
      console.log(url);
      $.ajax({
        url: url+"/"+user_no,
        type:"GET",
        success: function(data) {
          var recommend = confirm("삭제하시겠습니까?")
            if(recommend == true){
              alert('삭제되었습니다');
              // $(".modal-contestcheck-recommend > span").text(data[0]['like']);
              console.log(data[0]);
              window.location.reload();
            }
          }
        });
    }


    function staff_category_sort(category_no){
      // location.href="http://127.0.0.1/dramaker/public/staff_position_sort/"+category_no;
      location.href="http://www.dramaker.net/staff_position_sort/"+category_no;
    }
