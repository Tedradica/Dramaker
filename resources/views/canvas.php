<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <script src="./js/jquery-3.2.0.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="{{ asset('js/jscolor.min.js') }}"></script>


    <title></title>


<!-- CSS를 이용하여 Canvas객체에 마우스를 올리면, 마우스 포인터를 바꿔준다. -->
    <style>
    #drawCanvas :hover{
      cursor:pointer;
    }

    #canvas{
      border-style: solid;
      border-color: black;
      border-width: 3px;
    }

    .filebox label {
      display: inline-block;
      padding: .5em .75em;
      color: #999;
      font-size: inherit;
      line-height: normal;
      vertical-align: middle;
      background-color: #fdfdfd;
      cursor: pointer;
      border: 1px solid #ebebeb;
      border-bottom-color: #e2e2e2;
      border-radius: .25em;
    }

      .filebox input[type="file"] {
         /* 파일 필드 숨기기 */
          position: absolute;
          width: 1px;
          height: 1px;
          padding: 0;
          margin: -1px;
          overflow: hidden;
          clip:rect(0,0,0,0);
          border: 0;
      }


    </style>
<!-- CSS end.. -->


    <script>

    // 마우스 속도를 계산하기 위한 함수 & 변수 영역

    var previousEvent = false;
    var speed;

    //mouse speed variable end --------------------------------------------------

    //캔버스 관련 변수 ..

    //canvas 객체 ..
    var canvas, context, tool;
    //펜 사이즈와 펜 색깔을 저장하기 위한 변수 생성..
    var pensize = 10;
    var pencolor;

    var draw_type;
    var pre_event;

    //속도에 따른 펜굵기 구현을 위해 ..발생한 이벤트를 저장한기 위한 배열 생성
    var evented_x = [];
    var evented_y = [];
    var evented_count = 0;

    //실행취소를 위해 발생한 이벤트를 저장하기 위한 배열 생성..
    var pre_canvas = [];
    var pre_canvas_count = -1;
    //실행 취소기능 구현을 위해, ctrl키가 눌렸는지 확인하는 변수 ..
    var ctrl_press;

    //canvas variable end ---------------------------------------------------------------


    //mouse speed function start ..

    $(document).mousemove(function(evt) {
      //마우스가 움직이는 속도를 계산하여, 마우스의 속도를 숫자로 나타내 주는 함수 ..
      evt.time = Date.now();
      var res = makeVelocityCalculator(evt, previousEvent);
      previousEvent = evt;
      speed = res;

    });

      function makeVelocityCalculator(e_init, e) {
      //마우스가 움직이는 속도를 계산하여, 마우스의 속도를 숫자로 나타내 주는 함수 ..

        var x = e_init.clientX, new_x, new_y, new_t,
                x_dist, y_dist, interval,velocity,
                y = e_init.clientY, t;

        if (e === false) {return 0;}
        t = e.time;
           new_x = e.clientX;
           new_y = e.clientY;
           new_t = Date.now();
           x_dist = new_x - x;
                    y_dist = new_y - y;
                    interval = new_t - t;
                // update values:
                x = new_x;
                y = new_y;
                velocity = Math.sqrt(x_dist*x_dist+y_dist*y_dist)/interval;
                return velocity;
        }

    //mouse speed function end... -------------------------------------------


    //canvas function start..

    if(window.addEventListener){

        //브라우저의 환경에따라 캔버스를 지원하지 않을 경우에 대한 코드를 작성..
        window.addEventListener('load', InitEvent, false);

    }

    function InitEvent () {
      // Canvas 객체를 탐색 한다.
      canvas = document.getElementById('drawCanvas');

      if (!canvas) {
        alert('캔버스 객체를 찾을 수 없음');
        return;
      }

      if (!canvas.getContext) {
        alert(' Drawing Contextf를 찾을 수 없음');
        return;
      }

      // 2D canvas context를 가져 온다.
      context = canvas.getContext('2d');
      if (!context) {
        alert('getContext() 함수를 호출 할 수 없음');
        return;
      }

      // tool_pencil 함수의 인스턴스를 생성 한다.
      tool = new tool_pencil();

      // Canvas에 mousedown, mousemove, mouseup 이벤트 리스너를 추가한다.
      canvas.addEventListener('mousedown', ev_canvas, false);
      canvas.addEventListener('mousemove', ev_canvas, false);
      canvas.addEventListener('mouseup',   ev_canvas, false);
    }

    // Canvas요소 내의 좌표를 결정 한다.
    function ev_canvas (ev){

        //크롬의 경우 둘다 지원..
        if (ev.layerX || ev.layerX == 0) {
          // Firefox 브라우저
          ev._x = ev.layerX;
          ev._y = ev.layerY;
        }
        else if (ev.offsetX || ev.offsetX == 0) {
          // Opera 브라우저
          ev._x = ev.offsetX;
          ev._y = ev.offsetY;
        }

        // tool의 이벤트 핸들러를 호출한다.
        var func = tool[ev.type];

        if (func) {
            func(ev);
        }
    }

    // 마우스 이동을 추적 하여 그리기 작업을 수행 한다.
    function tool_pencil () {

      var tool = this;
      this.started = false;
      //처음에 들어왔을 때, 캔버스를 초기화 시켜준다.
      canvasClear();
      //최초의 캔버스 상태를 저장한다.
      preCanvasPush();

      // 마우스를 누를때 그리기 작업을 시작 한다.
      this.mousedown = function (ev) {

        context.lineWidth = pensize;
        context.strokeStyle = pencolor;
        context.beginPath();

        if(!draw_type){
          tool.started = true;
        }

        if(draw_type){
        //도형메뉴를 눌렀을 때, 처음에 눌렀던 event를 잡아준다. (좌표 추출을 위함 ..)

          pre_event = ev;

        }

      };

      // 마우스가 이동 할때(mousemove) 마다 호출 된다.
      this.mousemove = function (ev) {

        if (tool.started)
        {
          //발생한 이벤트 저장 배열에 마우스의 x, y좌표의 값을 넣음 ..
          evented_x.push(ev._x);
          evented_y.push(ev._y);

          drawpen(evented_x, evented_y, ev._x, ev._y, evented_count);
          evented_count++;
        }

        if(draw_type == "square"){

          if(pre_event){
            context.strokeRect(pre_event._x, pre_event._y, ev._x-pre_event._x, ev._y-pre_event._y);
            context.clearRect(pre_event._x, pre_event._y, ev._x-pre_event._x, ev._y-pre_event._y);
          }

        }else if (draw_type == "circle"){
          context.arc(pre_event._x, pre_event._y, Math.abs( (ev._x + ev._y) -  (pre_event._x + pre_event._y) )/1.5, 0,Math.PI * 2);
          context.fill();
        }



      };

      function drawpen(evented_x, evented_y, ev_x, ev_y, evented_count){

        context.beginPath();
        //펜의 굵기는 지정한 펜 사이즈에서 마우스 이동속도만큼 감소하여 설정한다.
        context.lineWidth = pensize - speed;
        //[1]저장된 이전 객체의 좌표에서 현재 발생한 x, y 좌표값을 연결한다.
        context.moveTo(evented_x[evented_count-1], evented_y[evented_count-1]);
        //펜이 끊기는 것 처럼 보이지 않도록, 펜선의 끝을 둥글게 보여준다.
        context.lineCap = 'round';
        //[2]이전 x, y 좌표에서 현재 x, y 좌표로 선을 그어준다.
        context.lineTo(ev_x, ev_y);
        context.stroke();
        //펜 굵기 출력 ..
        //console.log(context.lineWidth);

      }

      // 마우스 좌측 버튼을 놓았을때(mouseup) 호출 된다.
      this.mouseup = function (ev) {
        if (tool.started) {
              tool.mousemove(ev);

              tool.started = false;

              //마우스 입력을 그만둿을 때, x, y 좌표값을 초기화..
              evented_count = 0;
              evented_x = [];
              evented_y = [];

              //현재상태의 캔버스 저장..
              preCanvasPush();
              //pre_event = 0;
              //draw_type = undefined;
        }

        if(draw_type == "square"){

          // 빨간색 채움형태 사각형
          context.fillStyle = pencolor;

          preCanvasPush();

          draw_type = false;
          pre_event = false;
        }else if(draw_type == "circle"){

          context.fillStyle = pencolor;

          // ctx.beginPath();
          //context.arc(ev._x-pre_event._x, ev._y-pre_event._y,50,0,Math.PI * 2);
          context.stroke();



          preCanvasPush();

          draw_type = false;
          pre_event = false;

        }

      };

    }


    function preCanvasPush(){

      pre_canvas_count++;

      if (pre_canvas_count < pre_canvas.length){

        pre_canvas.length = pre_canvas_count;

      }
      //현재 상태의 캔버스를 저장..
      pre_canvas.push(document.getElementById('drawCanvas').toDataURL());
      //저장된 캔버스 객체 확인 가능..
      //console.log(pre_canvas);
    }


    // 캔버스 밑의 버튼을 눌렀을 때 발생하는 이벤트들
    function canvasClear(){

      //캔버스 초기화
      console.log("초기화");
      context.fillStyle = "white";
      context.fillRect(0, 0, 800, 700);
      preCanvasPush();

    }
    function penSize(value){

      //사용자에게 입력받은 값으로 펜 크기를 바꿈
      pensize = value;

    }

    function penColor(value){

      //사용자에게 입력받은 값으로 펜 색상을 바꿈
      pencolor = value;

    }

    function drawFigure(figure_value) {


      draw_type = (figure_value != "pen") ? figure_value : false;
      console.log(draw_type);
    }


    //실행취소를 위한 함수 ..
    $(document).keydown(function(event){

      if(ctrl_press && event.keyCode == 90){

        if (pre_canvas_count > 0) {
          console.log(pre_canvas_count);
          pre_canvas_count--;
          var canvasPic = new Image();
          canvasPic.src = pre_canvas[pre_canvas_count];

          //이전 캔버스의 그림으로 업데이트 ..
          canvasPic.onload = function () {
            context.drawImage(canvasPic, 0, 0);
          }

        }

      }

      if(event.keyCode == 17){

        ctrl_press = true;

      }


    });

    $(document).keyup(function(event){

      if(event.keyCode == 17 ){
        //ctrl 키를 땟으면 false로 변환 ..
        ctrl_press = false;

      }

    });

    function save_img(){

      //오리지널 네임에는 콘티가 겹치지않도록 유저네임을 더해주어야한다..
      var original_name = "plase_help" + ".png";
      var drawCanvas = document.getElementById('drawCanvas');
      var drawed_canvas_url = drawCanvas.toDataURL('image/png');

      window.opener.take_canvas_data(drawed_canvas_url, original_name);
      window.close();

       // var request = $.ajax({
        // type:'POST',
        // data: {imgUpload:drawCanvas.toDataURL('image/png'), original_name},
        // url:'./canvasupload.php',
        // success:function(result){
        //     alert(result);
      //    console.log(result);
        // },
      // error:function(result){
      //   // alert(result);
      // }

      // });

    // });

    }

    function take_img(files){
       var file = files[0];

       if(!file.type.match(/image.*/)){
          alert("not image file!");
       }
       var reader = new FileReader();

       reader.onload = function(e){

          var img = new Image();
          img.onload = function(){
             context.drawImage(img,0,0,800,700);
        preCanvasPush();
          }
          img.src = e.target.result;
       }

       reader.readAsDataURL(file);

    }



    //canvas function end.. ---------------------

    </script>

  </head>
  <body>

    <div id="container" style="display:flex; border:7px solid #bfbfbf; ">


        <canvas id="drawCanvas" width="800" height="550"
                style="flex:8; position: relative; border-right: 7px solid #bfbfbf; cursor:default;">

        </canvas>

      <div class="filebox" style="flex:2; padding:10px;">
        <div>

          <span style="font-weight:bold;">線の太さ</span>
        <input type="number" min="1" max="50" onchange="penSize(value)" value="10">
        <br>
        </div>

        <div>
          <br>
          <span style="font-weight:bold">ペンの色</span>
          <br>
          <input type="color" onchange="penColor(value)">
          <br>
        </div>

        <div>
          <br>
          <span style="font-weight:bold;">全部消す</span>
        <button onclick="canvasClear();">全部消す</button>
        <br>
        </div>

        <div>
          <br>
          <span style="font-weight:bold;">イメージアップロード</span>

        <label for="inputfile">イメージアップロード</label>
        <input type="file" id="inputfile" onchange="take_img(this.files)"><br>
        </div>

        <!-- <button onclick="drawFigure(this.value)" value="pen">펜</button><br>
        <button onclick="drawFigure(this.value)" value="square">사각형</button><br> -->

        <div>
          <br>
          <span style="font-weight:bold;">イメージセーブ</span>

        <button onclick="save_img()">イメージセーブ</button>
        </div>
      </div>

    </div>

  </body>
</html>
