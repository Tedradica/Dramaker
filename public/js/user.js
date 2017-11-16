
function userInfo(user_no){

  $.ajax({
    type:'POST',
    data: { "product":product_array , "production":production_array },
    url: '/test',
    success:function(result){
      // alert(result);
      console.log(result);
    },
    error:function(result){
      // alert(result);
    }
  });

}
