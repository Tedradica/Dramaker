
@extends('layout')

@section('title','Login')

@section('content')

<div id="main">

  <div class="loginform_wrapper">

    <div class="page-header">
        <h2>로그인</h2>
    </div>

      <div class="login-box well">
          <form accept-charset="UTF-8" role="form" method="post" action="{{url('/login')}}">
              <div class="form-group">
                  <label for="id"> 아이디</label>
                  <input name="id" value='' id="id" placeholder="UserID" type="text" class="form-control" />
              </div>
              <div class="form-group">
                  <label for="password">비밀번호</label>
                  <input name="password" id="password" value='' placeholder="Password" type="password" class="form-control" />
              </div>
              <div class="form-group">
                  <input type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" value="Login" />
              </div>
              <hr />
              <div class="form-group">
                  <a href="" class="btn btn-default btn-block m-t-md"> 회원가입</a>
              </div>
          </form>
      </div>

  </div>

</div>


@endsection
