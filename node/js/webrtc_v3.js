
var users_info;
var user_info;

// 화상채팅 안에서 사용자 관리를 위한 소켓 연결.
var socket = io.connect('http://54.92.37.34:9000/');
var url = location.href.split('?');
// var room_no = url.slice(url.indexOf('=')+1,url.length);

var room_no = url[1].slice(url[1].indexOf('=')+1,url[1].length);
var user_no = url[2].slice(url[2].indexOf('=')+1,url[2].length);


      socket.on('connect',function (data) {
        // 소켓 연결시 실행
        console.log("서버에 연결됨");
        socket.emit('join_room',{
          "room_no" : room_no,
        })

        //유저 정보를 가져옴
        //room_no를 보내는 이유는 server에서 사용자의 정보에 room정보를 추가시키기위함
        socket.emit('user_info_get',{
          "user_no" : user_no,
          "room_no" : room_no,
        });

      });

      //server에서 연결된 유저들 정보 가져옴
      socket.on('users_info_send',function (data) {
        users_info = data.user_info;

        console.log("유저정보 가져옴");
        console.log(users_info);

        //접속한 모든 사용자의 정보를 순환하면서
        //사용자 정보 초기화
        for(var index in users_info){
          if(users_info[index].uid == user_no){
            user_info = users_info[index];
          }
        }
        //사용자 정보확인
        console.log("사용자 정보");
        console.log(user_info);

        //사용자 정보 추가 + 반영
        user_info_add(user_no);
      });

      //채팅을 추가
      //자신의 채팅은 오른쪽
      //나머지 사용자의 채팅은 왼쪽에 추가시킴
      socket.on('chat_add',function (data) {

        var date = new Date();
        var time = date.getHours() + ":" + date.getMinutes();

        if(data.user_no == user_no){
          $("<div>").attr({
            class:"chat_message"
          }).appendTo( $(".chat_all") );

          $("<img>").attr({
            src:"http://54.92.37.34/dramaker/public/storage/image/user/users_profile_"+data.user_no+".jpg",
            class:"chat_user_img"
          }).html(data.user_no).appendTo( $(".chat_all").children().last() );

          $("<div>").attr({
            class:"message"
          }).appendTo( $(".chat_all").children().last() );

          $("<div>").attr({
            class:"message_chat_info"
          }).appendTo( $(".chat_all").children().last().children(".message") );

          $("<span>").attr({
            class:"message_chat_name"
          }).html(data.user_name).appendTo($(".chat_all").children().last().children('.message').children('.message_chat_info') );
          $("<span>").attr({
            class:"message_chat_time"
          }).html(time).appendTo($(".chat_all").children().last().children('.message').children('.message_chat_info') );

          $("<span>").html(data.chat_content).appendTo($(".chat_all").children().last().children('.message') );


        }else{

          $("<div>").attr({
            class:"chat_message"
          }).appendTo( $(".chat_all") );

          $("<img>").attr({
            src:"http://54.92.37.34/dramaker/public/storage/image/user/users_profile_"+data.user_no+".jpg",
            class:"chat_user_img"
          }).html(data.user_no).appendTo( $(".chat_all").children().last() );

          $("<div>").attr({
            class:"message"
          }).appendTo( $(".chat_all").children().last() );

          $("<div>").attr({
            class:"message_chat_info"
          }).appendTo( $(".chat_all").children().last().children(".message") );

          $("<span>").attr({
            class:"message_chat_name"
          }).html(data.user_name).appendTo($(".chat_all").children().last().children('.message').children('.message_chat_info') );
          $("<span>").attr({
            class:"message_chat_time"
          }).html(time).appendTo($(".chat_all").children().last().children('.message').children('.message_chat_info') );

          $("<span>").html(data.chat_content).appendTo($(".chat_all").children().last().children('.message') );

        }

      });


    //video크기를 조절
    // console.log("remote-videos-container : "+ $('#remote-videos-container').width() );
    var local_width = $('#local-videos-container').width();
    var local_height = $('#local-videos-container').height();
    var remote_width = $('#remote-videos-container').width();
    var remote_height = $('#remote-videos-container').height();


    $(window).ready(function(){

    // ......................................................
    // ..................RTCMultiConnection Code.............
    // ......................................................

    var connection = new RTCMultiConnection();

    // by default, socket.io server is assumed to be deployed on your own URL
    // connection.socketURL = '/';

    // comment-out below line if you do not have your own socket.io server
    connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';

    connection.socketMessageEvent = 'video-conference-demo';

    connection.session = {
        audio: true,
        video: true
    };

    connection.sdpConstraints.mandatory = {
        OfferToReceiveAudio: true,
        OfferToReceiveVideo: true
    };


    var localVideosContainer = document.getElementById('local-videos-container');
    var remoteVideosContainer = document.getElementById('remote-videos-container');

    connection.onstream = function(event){

      if(event.type === 'local'){

        var mediaElement = getMediaElement(event.mediaElement, {
            title: event.userid,
            buttons: ['full-screen'],
            // width: local_width,
            width: remote_width/4,
            // height:local_height,
            showOnMouseEnter: false
        });

        var div = document.createElement('div');
        div.className = 'video-div';
        div.appendChild(mediaElement);

        // localVideosContainer.appendChild(div);
        remoteVideosContainer.appendChild(div);

        //사용자 정보 추가 + 반영
        // user_info_add(user_no);

      }

      if(event.type === 'remote'){

        console.log( "localvideo length ========" + $("#local-videos-container").children().length );

        if($("#local-videos-container").children().length == 0){
          var mediaElement = getMediaElement(event.mediaElement, {
              title: event.userid,
              buttons: ['full-screen'],
              // width: remote_width/4,
              height:local_height,
              showOnMouseEnter: false
          });

          var div = document.createElement('div');
          div.className = 'video-div';
          div.appendChild(mediaElement);

          localVideosContainer.appendChild(div);
        }else{
          var mediaElement = getMediaElement(event.mediaElement, {
              title: event.userid,
              buttons: ['full-screen'],
              width: remote_width/4,
              showOnMouseEnter: false
          });

          var div = document.createElement('div');
          div.className = 'video-div';
          div.appendChild(mediaElement);

          remoteVideosContainer.appendChild(div);
        }




        // remoteVideosContainer.appendChild(div);

        //사용자 정보 추가 + 반영
        // user_info_add(user_no);

      }


    }

    connection.onstreamended = function(event) {
        var mediaElement = document.getElementById(event.streamid);
        if (mediaElement) {
            mediaElement.parentNode.removeChild(mediaElement);
        }
    };

    //연결부분

    connection.openOrJoin(room_no, function(isRoomExists, roomid) {
        if (!isRoomExists) {
            // showRoomURL(roomid);
        }
    });
    //연결 끝

});

function user_info_add(user_no){

  //초기화
  $(".meetting_people").children(".panel-body").children().children().remove();

  for(var index in users_info){

    $("<li>").appendTo( $(".meetting_people").children(".panel-body").children() );
    $("<span>").attr({
      class:"glyphicon glyphicon-user"
    }).appendTo( $(".meetting_people").children(".panel-body").children().children().last() );
    $("<span>").attr({
      style:"margin-left:5px;margin-right:10px;font-weight: bold;",
    }).html(users_info[index].uname).appendTo( $(".meetting_people").children(".panel-body").children().children().last() );
    $("<span>").html(users_info[index].email).appendTo( $(".meetting_people").children(".panel-body").children().children().last() );

  }

}

function chat_send(chat_type){

  if(chat_type == 'all'){ //all 챗

    var chat = $("#chat_all_input_area").val();

    socket.emit('chat_send_all',{
      "user_no" : user_no,
      "user_name": user_info.uname,
      "room_no" : room_no,
      "chat" : chat,
    });

  }else{  //team 채팅

    var chat = $("#chat_team_input_area").val();

  }

}

    // function disableInputButtons() {
    //     document.getElementById('open-or-join-room').disabled = true;
    //     document.getElementById('open-room').disabled = true;
    //     document.getElementById('join-room').disabled = true;
    //     document.getElementById('room-id').disabled = true;
    // }

    // ......................................................
    // ......................Handling Room-ID................
    // ......................................................

    // function showRoomURL(roomid) {
    //     var roomHashURL = '#' + roomid;
    //     var roomQueryStringURL = '?roomid=' + roomid;
    //
    //     var html = '<h2>Unique URL for your room:</h2><br>';
    //
    //     html += 'Hash URL: <a href="' + roomHashURL + '" target="_blank">' + roomHashURL + '</a>';
    //     html += '<br>';
    //     html += 'QueryString URL: <a href="' + roomQueryStringURL + '" target="_blank">' + roomQueryStringURL + '</a>';
    //
    //     var roomURLsDiv = document.getElementById('room-urls');
    //     roomURLsDiv.innerHTML = html;
    //
    //     roomURLsDiv.style.display = 'block';
    // }

    // (function() {
    //     var params = {},
    //         r = /([^&=]+)=?([^&]*)/g;
    //
    //     function d(s) {
    //         return decodeURIComponent(s.replace(/\+/g, ' '));
    //     }
    //     var match, search = window.location.search;
    //     while (match = r.exec(search.substring(1)))
    //         params[d(match[1])] = d(match[2]);
    //     window.params = params;
    // })();

    // var roomid = '';
    // if (localStorage.getItem(connection.socketMessageEvent)) {
    //     roomid = localStorage.getItem(connection.socketMessageEvent);
    // } else {
    //     roomid = connection.token();
    // }
    // document.getElementById('room-id').value = roomid;
    // document.getElementById('room-id').onkeyup = function() {
    //     localStorage.setItem(connection.socketMessageEvent, this.value);
    // };
    //
    // var hashString = location.hash.replace('#', '');
    // if (hashString.length && hashString.indexOf('comment-') == 0) {
    //     hashString = '';
    // }
    //
    // var roomid = params.roomid;
    // if (!roomid && hashString.length) {
    //     roomid = hashString;
    // }
    //
    // if (roomid && roomid.length) {
    //     document.getElementById('room-id').value = roomid;
    //     localStorage.setItem(connection.socketMessageEvent, roomid);
    //
    //     // auto-join-room
    //     (function reCheckRoomPresence() {
    //         connection.checkPresence(roomid, function(isRoomExists) {
    //             if (isRoomExists) {
    //                 connection.join(roomid);
    //                 return;
    //             }
    //
    //             setTimeout(reCheckRoomPresence, 5000);
    //         });
    //     })();
    //
    //     disableInputButtons();
    // }
