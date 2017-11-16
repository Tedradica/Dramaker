var socket = io.connect('http://54.92.37.34:9002');
// var socket = io.connect('http://106.249.36.53:9002');


window.onload = function(){
  if(window.Notification){
    Notification.requestPermission();
  }
}

function notify(data){
  if(Notification.permission !== "granted"){
    alert("notification is disabled");
  }else{
    var notification = new Notification('알람',{
      icon : 'http://54.92.37.34/dramaker/public/images/dramaker_logo.PNG',
      body : data['notice'],
    });
  }
}

function notice_sound(){
   var sound_url = 'http://54.92.37.34/dramaker/public/sound/arpeggio.mp3';
   sound = new Audio(sound_url);
   sound.play();
}


// var socket = io.connect('http://54.92.37.34:9002');
// var socket = io.connect('http://106.249.36.53:9002');

    socket.on('connect',function (data) {
      // 소켓 연결시 실행

        var uid = user_no.value;    //input태그의 값이 그냥 불러와짐??

        console.log("user_no : " + user_no.value);
        socket.emit('login',
          { uid : uid });

    });

    socket.on('contest_apply_notice',function (data) {
        //받은 데이터 확인
        console.log(data);
        notify(data);
        $('#notice_new_img').show();
        notice_sound();

    });

    socket.on('schedule_write_notice',function (data) {
        //받은 데이터 확인
        console.log(data);
        notify(data);
        $('#notice_new_img').show();
        notice_sound();

    });

    socket.on('schedule_modify_notice',function (data) {
        //받은 데이터 확인
        console.log(data);
        notify(data);
        $('#notice_new_img').show();
        notice_sound();

    });

    socket.on('scene_write_notice',function (data) {
        //받은 데이터 확인
        console.log(data);
        notify(data);
        $('#notice_new_img').show();
        notice_sound();

    });

    socket.on('scene_modify_notice',function (data) {
        //받은 데이터 확인
        console.log(data);
        notify(data);
        $('#notice_new_img').show();
        notice_sound();

    });

    socket.on('staff_add_notice',function (data) {
        //받은 데이터 확인
        console.log(data);
        notify(data);
        $('#notice_new_img').show();
        notice_sound();

    });
