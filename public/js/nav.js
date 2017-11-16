$(document).ready(function(){

     $(".equipment_menu_sub").hide();
     $(".equipment_menu").click(function(){
       $(".equipment_menu_sub").slideToggle(300);
     });


     //새로운 알람이 있는지 없는지 확인
     var url = $("#notice_new_img").attr('data-link');

     if(user_no.value > 0){

       $.ajax({

         url: url+"/"+user_no.value,
         type:"GET",
         success: function(data) {

          //  console.log(data.length);
          //  console.log("성공");

           //읽지 않은 알람이 있을 경우
           if(data.length > 0){
             $("#notice_new_img").show();
           }else{
             $("#notice_new_img").hide();
           }


         }
       });

     }



});
