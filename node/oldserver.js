'use strict';

var os = require('os');
var nodeStatic = require('node-static');
var http = require('http');
var socketIO = require('socket.io');

var fileServer = new(nodeStatic.Server)();
var app = http.createServer(function(req, res) {
  fileServer.serve(req, res);
}).listen(9000);


var io = socketIO.listen(app);
io.sockets.on('connection', function(socket) {

  // convenience function to log server messages on the client
  function log() {
    var array = ['Message from server:'];
    array.push.apply(array, arguments);
    socket.emit('log', array);
  }

  socket.on('message', function(message) {
    log('Client said: ', message);
    // for a real app, would be room-only (not broadcast)
    socket.broadcast.emit('message', message);
  });

  socket.on('create or join', function(room) {
    log('Received request to create or join room ' + room);   //receive message 1

    var numClients = io.sockets.sockets.length; //연결된 socket의 개수
    log('Room ' + room + ' now has ' + numClients + ' client(s)');

    if (numClients === 1) {     //최초 접속자
      socket.join(room);
      log('Client ID ' + socket.id + ' created room ' + room);
      socket.emit('created', room, socket.id);  //send message 2

    } else if (numClients >= 2 && numClients <= 4) {  //2번째 이상 접속자
      log('Client ID ' + socket.id + ' joined room ' + room);
      io.sockets.in(room).emit('join', room);   //send message 2
      socket.join(room);
      socket.emit('joined', room, socket.id);   //send message 3
      io.sockets.in(room).emit('ready');        //send message 4  ??어디서 받는가?
    } else { // max two clients
      socket.emit('full', room);
    }
  });   //end receive message 1

  socket.on('ipaddr', function() {    //어디서 보내나 ???
    var ifaces = os.networkInterfaces();
    for (var dev in ifaces) {
      ifaces[dev].forEach(function(details) {
        if (details.family === 'IPv4' && details.address !== '127.0.0.1') {
          socket.emit('ipaddr', details.address);
        }
      });
    }
  });

  socket.on('bye', function(){
    console.log('received bye');  //보내는 부분 없음
  });


  // ======================================================

  //canvas 그리기 이벤트
  socket.on('drawclick',function(req){
    // console.log(req);
    io.emit('draw',req);  // io.emit 모두에게 보냄
    // socket.emit('draw',data);
  });


  //canvas에 이미지 추가
  socket.on('canvas_image',function(req){
    console.log(req);
    io.emit('canvas_image_add',req);  // io.emit 모두에게 보냄
    // socket.emit('draw',data);
  });


});
