
$(document).on('click','.get_staffpull_user_schedule',function(){
  console.log("get_staffpull_user_schedule click 이벤트 실행");
  $("#staffpull_calendar").modal();
  var user_no = $(this).parent().parent().attr('data-user-no');

  //modal이 load되면 캘린더 실행
  //one은 한번만 이벤트를 추가함. on은 계속
  $('#staffpull_calendar').one('shown.bs.modal', function (e) {


    console.log("modal load됨");

    console.log("캘린더 실행");

    //tr에 달려있음
    var url = $('#staffpull_calendar').attr('data-url');
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();

    console.log(user_no);

    //$calendar의 자식이 없을때 한번만 생성
    if( ($('#calendar').children()).length == 0  ){
      console.log( ($('#calendar').children()).length );

      //캘린더 생성
      $('#calendar').fullCalendar({
        header: {
          left: 'prev',
          center: 'title',
          right: 'next',
        },
        events:[

        ],
      }); //fullcalendar end
    }

    // $('#calendar').fullCalendar('removeEventSource');

    //캘린더에 이벤트 추가
    $('#calendar').fullCalendar('addEventSource', function (start, end, timezone, callback) {
        $.ajax({
            url:url,
            type:"GET",
            data: {
              user_no:user_no,
              start_date:start_date,
              end_date:end_date,
            },
            success: function (data) {
              // console.log("성공")
              console.log(data);
              var events = [];

              var split_sdate = start_date.split("-");
              var sdate = new Date(split_sdate[0],split_sdate[1]-1,split_sdate[2]);
              var split_edate = end_date.split("-");
              var edate = new Date(split_edate[0],split_edate[1]-1,split_edate[2]);

              var staff_schedule = new Array();

              for(var schedule in data){
                staff_schedule.push(data[schedule]['date']);
              }

              console.log(staff_schedule);

              //모든 날짜의 배경을 white로 초기화
              $(".fc-day").css('background-color','white');
              $(".fc-day-top").css('background-color','white');

              do {
                // console.log("date : " + sdate);
                if(sdate.getMonth()+1 < 10){
                  var date = sdate.getFullYear() + "-0" + (sdate.getMonth()+1) + "-" + sdate.getDate();
                }else{
                  var date = sdate.getFullYear() + "-" + (sdate.getMonth()+1) + "-" + sdate.getDate();
                }

                console.log(date);

                if(staff_schedule.indexOf(date) >= 0 ){

                  $('[data-date='+date+']').css('background-color','#FFA7A7');


                }else{

                  $('[data-date='+date+']').css('background-color','#CEF279');


                }

                sdate.setDate(sdate.getDate() + 1);

              } while(sdate < edate);


              callback(events);
            },
            error: function (response) {
                alert(response.responseText);
            }
        });
    });

    // $('#calendar').fullCalendar('refetchEvents');
    // $('#calendar').fullCalendar('removeEventSource');






    // $(".fc-day").on('click',function(){
    //   var date = $(this).attr('data-date');  //클릭한 날의 날짜
    //
    //   console.log(date);
    // });


  }); //modal load end



});
