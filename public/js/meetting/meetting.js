
var socket = io.connect('http://54.92.37.34:9000/');
var uid = user_no.value;  //사용자 user_no
var uname = $("#user_name").val(); //사용자 이름
var uemail = $("#user_email").val(); //사용자 이메일

//유저정보 서버에 보냄 (server.js / 9000)
socket.on('connect',function (data) {
  // 소켓 연결시 실행
    socket.emit('meetting_connect',
      {
        uid : uid,
        uname : uname,
        uemail : uemail,
       }
    );
});

//만들어진 채팅방 목록을 가져옴
socket.on('room_init',function (data){
  console.log("room_init");
  console.log(data.rooms);

  for(var index in data.rooms){

    //중복 처리
    console.log("방 중복개수 : " + $("button[room-number="+data.rooms[index].number+"]").length )
    if( $("button[room-number="+data.rooms[index].number+"]").length > 0 ){

    }else{

      $('<tr>').appendTo( $('#meetting_room_table') );

      $('<td>').html(1).appendTo( $('#meetting_room_table').children().children().last() );
      $('<td>').html(data.rooms[index].title).appendTo( $('#meetting_room_table').children().children().last() );
      $('<td>').html("1/"+data.rooms[index].people).appendTo( $('#meetting_room_table').children().children().last() );
      $('<td>').appendTo( $('#meetting_room_table').children().children().last() );

      $('<button>').attr({
        'class':'btn btn-primary',
        'room-number':data.rooms[index].number,
        'onclick':'join_room('+ data.rooms[index].number +')',
      }).html('입장하기').appendTo( $('#meetting_room_table').children().children().last().children().eq(3) );

    }

  }



});


function open_room(){

  var room_title = document.getElementById("room_title").value;
  var room_number = document.getElementById("room_number").value;
  var room_max_people = document.getElementById("room_max_people").value;
  var room_password = document.getElementById("room_password").value;


  //modal 창 끄기 위함
  var event = document.createEvent("HTMLEvents");
  event.initEvent("click",true,false);
  document.getElementById("open_room_close").dispatchEvent(event);



  // var features = 'width=1600,height=800,scrollbars=0';
  // var test = window.open("http://106.249.38.9:8080?no="+room_number,"온라인 미팅");

  // var frmPop= document.roomCreate;
  // var url = 'http://106.249.36.53:9000?no='+room_number;
  // var url = 'http://127.0.0.1:9000?no='+room_number;
  var url = 'http://54.92.37.34:9000?no='+room_number+"?user="+uid;

  window.open(url,'online meeting');

  //미팅방 개설
  create_room(room_title,room_number,room_max_people);

}

function join_room(room_number){
  // var room_number = document.getElementById("join_room_number").value;

  //modal 창 끄기 위함
  var event = document.createEvent("HTMLEvents");
  event.initEvent("click",true,false);
  document.getElementById("join_room_close").dispatchEvent(event);

  // var url = 'http://106.249.36.53:9000?no='+room_number;
  // var url = 'http://127.0.0.1:9000?no='+room_number;
  var url = 'http://54.92.37.34:9000?no='+room_number+"?user="+uid;

  window.open(url,'online meeting');
}


//밖에 채팅방 생성
function create_room(room_title,room_number,room_max_people){

  console.log("실행됨");
  $('<tr>').appendTo( $('#meetting_room_table') );

  $('<td>').html(1).appendTo( $('#meetting_room_table').children().children().last() );
  $('<td>').html(room_title).appendTo( $('#meetting_room_table').children().children().last() );
  $('<td>').html("1/"+room_max_people).appendTo( $('#meetting_room_table').children().children().last() );
  $('<td>').appendTo( $('#meetting_room_table').children().children().last() );

  $('<button>').attr({
    'class':'btn btn-primary',
    'room-number':room_number,
    'onclick':'join_room('+ room_number +')',
  }).html('입장하기').appendTo( $('#meetting_room_table').children().children().last().children().eq(3) );

  //방정보를 서버에 보냄
  socket.emit('meetting_create',
    {
      title : room_title,
      number : room_number,
      people : room_max_people,
    }
  );

}

//채팅방
