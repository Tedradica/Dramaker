

var xStart,xEnd,yStart,yEnd,paint,ctx;

// var socket = io.connect();  //socket.io 소켓

$(document).ready(function (){

 canvas = document.getElementById('canvas');
 ctx = $('canvas')[0].getContext("2d");
 ctx.strokeStyle = '#000';
 ctx.lineJoin="round";
 ctx.lineCap="round";
 ctx.lineWidth = 1;



 $('#clear').click(function(e){
   e.preventDefault();
   ctx.clearRect(0,0,canvas.width,canvas.height);
   console.log("리셋");
   socket.emit('resetclick','reset');
 });


 $('canvas').bind('mousedown mousemove mouseup mouseleave touchstart touchmove touchend', function(e){
      var orig = e.originalEvent;

      if(e.type == 'mousedown'){
          e.preventDefault(); e.stopPropagation();

          xStart = e.clientX - $(this).offset().left;
          yStart = e.clientY - $(this).offset().top;
          xEnd = xStart;
          yEnd = yStart;

          //draw에 보낼 데이터
          data = {
            xStart:xStart,
            yStart:yStart,
            xEnd:xEnd,
            yEnd:yEnd,
            type:e.type
          }

          paint = true;

          draw(data);
          socket.emit('drawclick',data);

      }else if(e.type == 'mousemove'){
          if(paint==true){
            xEnd = e.clientX - $(this).offset().left;
            yEnd = e.clientY - $(this).offset().top;

            lineThickness = 1 + Math.sqrt((xStart - xEnd) *(xStart-xEnd) + (yStart - yEnd) * (yStart-yEnd))/5;

            if(lineThickness > 4){
                  lineThickness = 4;
            }

            // console.log(11-lineThickness);
            // ctx.lineWidth = 5-lineThickness;
            // console.log(ctx.lineWidth);
            linewidth = 5-lineThickness;

            data = {
              xStart:xStart,
              yStart:yStart,
              xEnd:xEnd,
              yEnd:yEnd,
              lineWidth:linewidth,
              type:e.type
            }

            draw(data);
            socket.emit('drawclick',data);
          }
      }else if(e.type == 'mouseup'){
          paint = false;
      }else if(e.type == 'mouseleave'){
          paint = false;
      }else if(e.type == 'touchstart'){
          if(orig.touches.length == 1){
              e.preventDefault(); e.stopPropagation();

              xStart = orig.changedTouches[0].pageX - $(this).offset().left;
              yStart = orig.changedTouches[0].pageY - $(this).offset().top;
              xEnd = xStart;
              yEnd = yStart;

              //draw에 보낼 데이터
              data = {
                xStart:xStart,
                yStart:yStart,
                xEnd:xEnd,
                yEnd:yEnd,
                type:e.type
              }

              paint = true;

              draw(data);
              socket.emit('drawclick',data);
          }
      }else if(e.type == 'touchmove'){
          if(orig.touches.length == 1){
              if(paint==true){
                  xEnd = orig.changedTouches[0].pageX - $(this).offset().left;
                  yEnd = orig.changedTouches[0].pageY - $(this).offset().top;

                  lineThickness = 1 + Math.sqrt((xStart - xEnd) *(xStart-xEnd) + (yStart - yEnd) * (yStart-yEnd))/5;

                  if(lineThickness > 4){
                       lineThickness = 4;
                  }

                  linewidth = 5-lineThickness;
                  // ctx.lineWidth = lineThickness;
                  // ctx.lineWidth = 5-lineThickness;

                  data = {
                    xStart:xStart,
                    yStart:yStart,
                    xEnd:xEnd,
                    yEnd:yEnd,
                    lineWidth:linewidth,
                    type:e.type
                  }

                  draw(data);
                  socket.emit('drawclick',data);
              }
          }
      }else if(e.type == 'touchend'){
          paint = false;
      }

    });


    //file upload

    var fileSelect = document.getElementById("file_upload_button");
    var fileElem = document.getElementById("input_file");


    fileSelect.addEventListener("click", function (e) {
      if (fileElem) {
        fileElem.click();
      }
      e.preventDefault(); // prevent navigation to "#"
    }, false);


    fileElem.addEventListener("change", handleFiles, false);


});





  function draw(event){

  if(event.type == 'mousedown'){

      ctx.beginPath();
      ctx.moveTo(event.xStart, event.yStart);
      ctx.lineTo(event.xEnd, event.yEnd);
      ctx.stroke();


  }else if(event.type == 'mousemove'){


      ctx.lineWidth = event.lineWidth;
      ctx.beginPath();
      ctx.moveTo(event.xStart, event.yStart);
      ctx.lineTo(event.xEnd, event.yEnd);
      ctx.stroke();


  }else if(event.type == 'touchstart'){


      ctx.beginPath();
      ctx.moveTo(event.xStart, event.yStart);
      ctx.lineTo(event.xEnd, event.yEnd);
      ctx.stroke();

  }else if(event.type == 'touchmove'){


      ctx.lineWidth = event.lineWidth;
      ctx.beginPath();
      ctx.moveTo(event.xStart, event.yStart);
      ctx.lineTo(event.xEnd, event.yEnd);
      ctx.stroke();

  }
  xStart = xEnd;
  yStart = yEnd;
}

function handleFiles(files) {

  canvasFileAdd(files);
  socket.emit('canvas_image',files);  //files데이터 서버로 전송
}

function canvasFileAdd(files){
  console.log(files);
  console.log("file length : "+files.length);
  for (var i = 0; i < files .length; i++) {
    console.log(files[i]);
    var file = files[i];
    var imageType = /^image\//;   //정규표현식 image 문자열

    if (!imageType.test(file.type)) {   // file.type에 image가 포함되는가?
      continue;
    }

    var div = document.createElement("div");
    var img = document.createElement("img");
    var preview = document.getElementById("file_upload_list");
    div.className = "file_layout";
    img.classList.add("obj");
    img.file = file;
    preview.appendChild(div); // Assuming that "preview" is the div output where the content will be displayed.
    div.appendChild(img); // Assuming that "preview" is the div output where the content will be displayed.

    var reader = new FileReader();
    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
    reader.readAsDataURL(file);
  }
}











// ====================    socket 부분 ========================
