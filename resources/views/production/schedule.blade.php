@extends('layout')

@section('title','スケジュール')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.print.min.css') }}" media='print' />
  <style>


	#calendar_wrap {
		width: 90%;
		margin: 0 auto;
    color: black;
	}

	#external-events {
		float: left;
		width: 150px;
		padding: 0 10px;
		border: 1px solid #ccc;
		background: #eee;
		text-align: left;
	}

	#external-events h4 {
		font-size: 16px;
		margin-top: 0;
		padding-top: 1em;
	}

	#external-events .fc-event {
		margin: 10px 0;
		cursor: pointer;
	}

	#external-events p {
		margin: 1.5em 0;
		font-size: 11px;
		color: #666;
	}

	#external-events p input {
		margin: 0;
		vertical-align: middle;
	}

	#calendar {
		float: right;
		width: 100%;
    overflow: hidden;
	}

  .fc-day:hover{
    background-color: #D5D5D5;
  }

</style>
@endsection

@section('script')
  <script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('js/calendar/calendar.js') }}"></script>
@endsection


@section('content')

<div id="main">
  <section id="schedule_write_title_section" class="two">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/production') }}">制作現場</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/production_drama_view',[$drama_no]) }}">作品の情報</a></li>
      <li class="breadcrumb-item active">スケジュール</li>
    </ol>
  </section>

<!-- <section id="schedule_write_section" class="three"> -->

  <input type="hidden" id="schedule_info" data-get-url="{{ url('/schedule/get') }}">
  <input type="hidden" id="schedule_read_info" data-get-url="{{ url('/schedule_read') }}">
  <input type="hidden" id="schedule_drama_no" value="{{$drama_no}}">

  <div id='calendar_wrap'>

		<!-- <div id='external-events'>
			<h4>Draggable Events</h4>
			<div class='fc-event'>My Event 1</div>
			<div class='fc-event'>My Event 2</div>
			<div class='fc-event'>My Event 3</div>
			<div class='fc-event'>My Event 4</div>
			<div class='fc-event'>My Event 5</div>
			<p>
				<input type='checkbox' id='drop-remove' />
				<label for='drop-remove'>remove after drop</label>
			</p>
		</div> -->

		<div id='calendar' data-link="{{url('/schedule/write/')}}"></div>

		<div style='clear:both'></div>

	</div>

<!-- </section> -->
</div>

@endsection
