

function show(apply_no){
  var url =$(".contest_check").attr('data-link');

  console.log(url);
  //apply no ajax 통신을 통해 값 가져오기
  $.ajax({
    url: url+"/"+apply_no,
    type:"GET",
    success: function(data) {
      var path = data[0]['path'];
      var save_name = data[0]['save_name'];
      var original_name = data[0]['original_name'];
      if(path==null){
        $(".modal-contestcheck-title > span").text(data[0]['title']);
        $(".modal-contestcheck-writer > span").text(data[0]['name']);
        $(".modal-contestcheck-date > span").text(data[0]['created_at']);
        $(".modal-contestcheck-recommend > span").text(data[0]['like']);
        if(data[0]['apply_status'] == 1){
          $(".modal-contestcheck-status > span").text('채택')
        }else{
          $(".modal-contestcheck-status > span").text('미채택')
        }
        $(".modal-contestcheck-recommend > span").text(data[0]['like']);
        $(".modal-contestcheck-content > div").text(data[0]['content']);
        $(".recommend").attr('onclick','recommend('+apply_no+')');
        // $(".cancel").attr('onclick','delete('+apply_no+')');
        $(".choose").attr('onclick','choose('+apply_no+')');
        console.log("성공");
        console.log(data[0]);
      }
      else{
        $(".modal-contestcheck-title > span").text(data[0]['title']);
        $(".modal-contestcheck-writer > span").text(data[0]['name']);
        $(".modal-contestcheck-date > span").text(data[0]['created_at']);
        $(".modal-contestcheck-recommend > span").text(data[0]['like']);
        if(data[0]['apply_status'] == 1){
          $(".modal-contestcheck-status > span").text('채택')
        }else{
          $(".modal-contestcheck-status > span").text('미채택')
        }
        $(".modal-contestcheck-file > span").html('<a href=http://127.0.0.1/dramaker/public/storage/'+path+"/"+save_name+'>'+original_name+'</a>');
        $(".modal-contestcheck-content > div").text(data[0]['content']);
        $(".recommend").attr('onclick','recommend('+apply_no+')');
        $(".choose").attr('onclick','choose('+apply_no+')');
        console.log("성공");
        console.log(data[0]);
      }
    }
  });


  $('#contestcheck_write').modal();
}

//모달 창 버튼
function recommend(apply_no){

  var url =$(".recommend").attr('data-link');

  $.ajax({
    url: url+"/"+apply_no,
    type:"GET",
    success: function(data) {
       var recommend = confirm("추천하시겠습니까?");
       if(recommend == true){
         alert('추천되었습니다');
         $(".modal-contestcheck-recommend > span").text(data[0]['like']);



         console.log(data[0]);
       }
      }

    });

    // window.location.reload();

  }


function choose(apply_no){
  var url =$(".choose").attr('data-link');
  console.log(url);
  $.ajax({
    url: url+"/"+apply_no,
    type:"GET",
    success: function(data) {
      var choose = confirm("채택하시겠습니까?")
      if(choose == true){
        if(data[0]['apply_status'] == 1 ){
          $(".modal-contestcheck-status > span").text('채택');
        }else{
          $(".modal-contestcheck-status > span").text('미채택');
        }
        console.log("성공");
      }
    }
  });
  window.location.reload();
}

function recommend_sort(contest_no){
  location.href="http://54.92.37.34/dramaker/public/apply_recommend_sort/"+contest_no;
}
