//알람서버를 목적으로 만들었으나
//여기서 생성되는 socket을 meetting에서 공유함
// + fcm push alarm서버

var admin = require("firebase-admin");  //firebase 모듈

var clients = [];
var io = require('socket.io').listen(9002);

//fcm사용을 위한 json파일
var serviceAccount = require("./to/dramaker2-bd7eb-firebase-adminsdk-1phry-4fe5405226.json");
//fcm사용을 위한 초기화
admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
  databaseURL: "https://dramaker2-bd7eb.firebaseio.com"
});

function fcm_push_alarm(token,payload){

  admin.messaging().sendToDevice(token, payload)
    .then(function(response) {
      // See the MessagingDevicesResponse reference documentation for
      // the contents of response.
      console.log("Successfully sent message:", response);
    })
    .catch(function(error) {
      console.log("Error sending message:", error);
    });

}


// connection이 발생할 때 핸들러를 실행한다.
io.sockets.on('connection', function (socket) {

    // 클라이언트에서 my other event가 발생하면 데이터를 받는다.
    socket.on('login', function (data) {

        var client = new Object();
        client.uid = data.uid;
        client.id = socket.id;
        clients.push(client);

        console.log(clients);
    });

    //콘테스트 지원
    socket.on('contest_apply', function (data) {
        console.log("sender : "+data['sender']+", receiver : "+data['receiver']);

        //넘어오는 정보
        // sender : data[i]['sender'],
        // receiver : data[i]['receiver'],
        // time : data[i]['time'],
        // notice : data[i]['notice'],

        //clients 배열 순회

        for(var i in clients){
          if(clients[i]['uid']==data['receiver']){
            io.to(clients[i]['id']).emit('contest_apply_notice',
              { sender : data['sender'],
                time : data['time'],
                notice : data['notice'],
              }
            );
          }
        }

    });

    //스케줄 작성
    socket.on('schedule_write', function (data) {
        console.log("sender : "+data['sender']+", receiver : "+data['receiver']);

        //넘어오는 정보
        // sender : data[i]['sender'],
        // receiver : data[i]['receiver'],
        // time : data[i]['time'],
        // notice : data[i]['notice'],
        // token : data[i]['token'],

        for(var i in clients){
          //실시간 알림
          if(clients[i]['uid']==data['receiver']){

            console.log("online user : " + clients[i]['uid']);
            io.to(clients[i]['id']).emit('schedule_write_notice',
              { sender : data['sender'],
                time : data['time'],
                notice : data['notice'],
              }
            );
          } // end if
        } //end for

        // fcm alarm 부분
        if(data['token']){  //token값이 NULL이면 false임

          var token = data['token'];

          var payload = {
            "notification" : {
              title : "スケジュール作成",
              body : data['notice']
            },
            "data" : {
               "content" : "test.html"
            }
          };  //end payload


          fcm_push_alarm(token,payload);

        }//end fcmalarm


    });

    //스케줄 수정
    socket.on('schedule_modify', function (data) {
        console.log("sender : "+data['sender']+", receiver : "+data['receiver']);

        //넘어오는 정보
        // sender : data[i]['sender'],
        // receiver : data[i]['receiver'],
        // time : data[i]['time'],
        // notice : data[i]['notice'],

        for(var i in clients){
          if(clients[i]['uid']==data['receiver']){
            console.log("online user : " + clients[i]['uid']);
            io.to(clients[i]['id']).emit('schedule_modify_notice',
              { sender : data['sender'],
                time : data['time'],
                notice : data['notice'],
              }
            );

          }
        }

        // fcm alarm 부분
        if(data['token']){  //token값이 NULL이면 false임

          var token = data['token'];

          var payload = {
            "notification" : {
              "title" : "スケジュール修正",
              "body" : data['notice']
            }
            // "data" : {
            //    "url" : "fcm_test.html"
            // }
          };  //end payload

          fcm_push_alarm(token,payload);

        }//end fcmalarm

    });

    //씬 작성
    socket.on('scene_write', function (data) {
        console.log("sender : "+data['sender']+", receiver : "+data['receiver']);

        //넘어오는 정보
        // sender : data[i]['sender'],
        // receiver : data[i]['receiver'],
        // time : data[i]['time'],
        // notice : data[i]['notice'],

        for(var i in clients){
          if(clients[i]['uid']==data['receiver']){
            console.log("online user : " + clients[i]['uid']);
            io.to(clients[i]['id']).emit('scene_write_notice',
              { sender : data['sender'],
                time : data['time'],
                notice : data['notice'],
              }
            );

          }
        }

        // fcm alarm 부분
        if(data['token']){  //token값이 NULL이면 false임

          var token = data['token'];

          var payload = {
            "notification" : {
              title : "台本作成",
              body : data['notice']
            },
            "data" : {
               "content" : "test.html"
            }
          };  //end payload


          fcm_push_alarm(token,payload);

        }//end fcmalarm

    });

    //씬 수정
    socket.on('scene_modify', function (data) {
        console.log("sender : "+data['sender']+", receiver : "+data['receiver']);

        //넘어오는 정보
        // sender : data[i]['sender'],
        // receiver : data[i]['receiver'],
        // time : data[i]['time'],
        // notice : data[i]['notice'],

        for(var i in clients){
          if(clients[i]['uid']==data['receiver']){
            console.log("online user : " + clients[i]['uid']);
            io.to(clients[i]['id']).emit('scene_modify_notice',
              { sender : data['sender'],
                time : data['time'],
                notice : data['notice'],
              }
            );

          }
        }

        // fcm alarm 부분
        if(data['token']){  //token값이 NULL이면 false임

          var token = data['token'];

          var payload = {
            "notification" : {
              title : "台本修正",
              body : data['notice']
            },
            "data" : {
               "content" : "test.html"
            }
          };  //end payload


          fcm_push_alarm(token,payload);

        }//end fcmalarm

    });

    //스태프풀 스태프 추가
    socket.on('staff_add', function (data) {
        console.log("sender : "+data['sender']+", receiver : "+data['receiver']);

        //넘어오는 정보
        // sender : data[i]['sender'],
        // receiver : data[i]['receiver'],
        // time : data[i]['time'],
        // notice : data[i]['notice'],

        for(var i in clients){
          if(clients[i]['uid']==data['receiver']){
            console.log("online user : " + clients[i]['uid']);
            io.to(clients[i]['id']).emit('staff_add_notice',
              { sender : data['sender'],
                time : data['time'],
                notice : data['notice'],
              }
            );

          }
        }

    });



    socket.on('disconnect', function (data) {
      for(var i in clients){
        if(clients[i]['id'] == socket.id){
          clients.splice(i,1);
        }
      }
      // console.log(socket.id);
      // console.log(data);
    });


});
