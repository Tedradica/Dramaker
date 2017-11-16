
function recruit_add(){
  var val = $('.job_recruit_write_form_position').html();
  $(val).appendTo('.recruit_add');
  console.log(val);
}

function user_profile(){

  var url =$(".recruit_profile").attr('data-link');
  $.ajax({
    url: url,
    type:"GET",
    success: function(data) {

      var check=$('input:checkbox[name=profile]').is(':checked');

      if(check == true){
        $('.name').attr('value',data[0]['name']);
        $('.birth').attr('value',data[0]['birth']);
        $('.email').attr('value',data[0]['email']);
        $('.career').val(data[0]['career']);
        $('.tel').attr('value',data[0]['tel']);
        $('.height').attr('value',data[0]['height']);
        $('.weight').attr('value',data[0]['weight']);
        $('.stage_name').attr('value',data[0]['stage_name']);
        $('.local').attr('value',data[0]['local']);
      }else{
        $('.name').attr('value','');
        $('.birth').attr('value','');
        $('.email').attr('value','');
        $('.career').val('');
        $('.tel').attr('value','');
        $('.height').attr('value','');
        $('.weight').attr('value','');
        $('.stage_name').attr('value','');
        $('.local').attr('value','');
      }
    }
  });
}

function recruit_drama_info(){
  $(".recruit_drama_info").toggle();
}
