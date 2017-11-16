
$(document).ready(function() {

  //스케줄 정보 가져오는 url -- schedule.blade에 있음
  var schedule_get_url = $('#schedule_info').attr('data-get-url');
  var schedule_read_url = $('#schedule_read_info').attr('data-get-url');
  var drama_no = $('#schedule_drama_no').val();

  /* initialize the external events
  -----------------------------------------------------------------*/

  $('#external-events .fc-event').each(function() {

    // store data so the calendar knows to render an event upon drop
    $(this).data('event', {
      title: $.trim($(this).text()), // use the element's text as the event title
      stick: true // maintain when user navigates (see docs on the renderEvent method)
    });

    // make the event draggable using jQuery UI
    $(this).draggable({
      zIndex: 999,
      revert: true,      // will cause the event to go back to its
      revertDuration: 0  //  original position after the drag
    });

  });

  /* initialize the calendar
  // 캘린더 초기화
  -----------------------------------------------------------------*/

  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    events: function(start, end, timezone, callback) {
        $.ajax({
            url: schedule_get_url + "/" + drama_no,
            type:"GET",
            success: function(data) {

              console.log("성공");
              console.log(data);
              var events = [];

              for(var schedule in data){
                // console.log(data[schedule]);
                var schedule_no = data[schedule].schedule_no;
                var drama_no = data[schedule].drama_no;
                var number = data[schedule].number;
                var date = data[schedule].date;


                events.push({
                    title: number+"回",
                    className: "fc-day-schedule",
                    url: schedule_read_url + "/" + schedule_no,
                    start: date,
                });
              }
              callback(events);
            }
        });
    },
    drop: function() {
      // is the "remove after drop" checkbox checked?
      if ($('#drop-remove').is(':checked')) {
        // if so, remove the element from the "Draggable Events" list
        $(this).remove();
      }
    }
  });

  // $(".fc-day").on('click',function(){
  //   var date = $(this).attr('data-date');  //클릭한 날의 날짜
  //
  //   console.log(date);
  // });



});


$(document).on('click','.fc-day',function(){
  var date = $(this).attr('data-date');  //클릭한 날의 날짜
  var drama_no = $('#schedule_drama_no').val();
  console.log(drama_no);
  var url = $("#calendar").attr('data-link');

  // console.log(url);
  location.href=url+'/'+drama_no+'/'+date;

});
