
var nodeStatic = require('node-static');
var http = require('http');
var socketIO = require('socket.io');

var fileServer = new(nodeStatic.Server)();
var app = http.createServer(function(req, res) {
  fileServer.serve(req, res);
}).listen(9000);

var clients = [];
var rooms = [];

var io = socketIO.listen(app);
io.sockets.on('connection', function(socket) {

  //온라인 미팅 페이지
  //유저 온라인 미팅 페이지 접속
  socket.on('meetting_connect', function (data) {

    var client = new Object();
    client.uid = data.uid;
    client.uname = data.uname;
    client.email = data.uemail;
    client.id = socket.id;
    clients.push(client);

    console.log("user connected");
    console.log("유저 목록");
    console.log(clients);

    // console.log(clients);
    io.emit('room_init',{
        rooms : rooms,
    });
  });

  //방 만들기
  socket.on('meetting_create', function (data) {

    var room = new Object();
    room.title = data.title;
    room.number = data.number;
    room.people = data.people;
    rooms.push(room);

    console.log(rooms);

  });

  //사용자 정보 index.html로 보내줌
  socket.on('user_info_get',function (data) {
    // console.log("user_info_get 실행");
    // console.log(data.user_no);

    var user_no = data.user_no;
    var room_no = data.room_no;
    var users_info = [];

    for(var index in clients){

      if(clients[index].uid === user_no){
        //사용자 정보에 room정보를 추가시킴
        clients[index].room = data.room_no;
      }

      if(clients[index].room === room_no ){
        var user_info = clients[index];
        users_info.push(user_info);
      }
    } //endfor

    //방에 있는 모든 유저 정보 전달
    console.log("유저 정보 전달");
    io.emit('users_info_send',{
      user_info : users_info,
    });

  });

  //사용자 룸에 할당
  socket.on('join_room',function (data) {
    var room_no = data.room_no;
    socket.join(room_no);
  });

  //채팅 받고 전달
  socket.on('chat_send_all', function (data) {

    io.in(data.room_no).emit('chat_add',{
      "user_no" : data.user_no,
      "user_name" : data.user_name,
      "chat_content" : data.chat,
    });
  })


  socket.on('disconnect', function (data) {


    for(var i in clients){
      if(clients[i]['id'] == socket.id){
        console.log("user disconnected : " + clients[i]['uid']);
        clients.splice(i,1);
      }
    }

  });



});
