@extends('.././layout')

@section('title','Register')

@section('content')

<div id="main">

  <div class="register_wrapper">
    <div class="register_button">
      <div class="register_user">
        <a href="{{ url('register/user') }}">개인</a>
      </div>
      <div class="register_company">
        <a href="{{ url('register/company') }}">기업</a>
      </div>
    </div>

  </div>


</div>
@endsection
