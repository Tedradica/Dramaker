function video_play(file_no){

  var url =$(".video_mypage").attr('data-link');
  $.ajax({
    url: url+"/"+file_no,
    // console.log(url);
    type:"GET",
    success: function(data) {
      var path = data[0]['path'];
      var save_name = data[0]['save_name'];
      console.log(path);
      $(".modal-mypage-video > span").html('<video width="800" height="700" autoplay controls> <source src=http://127.0.0.1/dramaker/public/storage/'+path+"/"+save_name+'></video>');
      console.log("성공");
      console.log(data);
    }
  });

  $('#mypage_video').modal();
}
