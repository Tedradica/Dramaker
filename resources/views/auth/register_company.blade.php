@extends('layout')

@section('content')

<div id="main">
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Register</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ route('registerCompany') }}">
                          {{ csrf_field() }}

                          <div class="form-group">
                              <label for="name" class="col-md-4 control-label">id</label>

                              <div class="col-md-6">
                                  <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}" required autofocus>

                              </div>
                          </div>

                          <div class="form-group">
                              <label for="password" class="col-md-4 control-label">Password</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">name</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control" name="name" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">birth</label>

                              <div class="col-md-6">
                                  <input id="birth" type="text" class="form-control" name="birth" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">tel</label>

                              <div class="col-md-6">
                                  <input id="tel" type="text" class="form-control" name="tel" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">type</label>

                              <div class="col-md-6">
                                  <input id="type" type="text" class="form-control" name="type" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">introduce</label>

                              <div class="col-md-6">
                                  <input id="introduce" type="text" class="form-control" name="introduce" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">license</label>

                              <div class="col-md-6">
                                  <input id="license_no" type="text" class="form-control" name="license_no" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">ceo</label>

                              <div class="col-md-6">
                                  <input id="ceo" type="text" class="form-control" name="ceo" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">address</label>

                              <div class="col-md-6">
                                  <input id="address" type="text" class="form-control" name="address" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">homepage</label>

                              <div class="col-md-6">
                                  <input id="homepage" type="text" class="form-control" name="homepage" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">manager</label>

                              <div class="col-md-6">
                                  <input id="manager" type="text" class="form-control" name="manager" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">manager position</label>

                              <div class="col-md-6">
                                  <input id="manager_position" type="text" class="form-control" name="manager_position" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="label" class="col-md-4 control-label">manager tel</label>

                              <div class="col-md-6">
                                  <input id="manager_tel" type="text" class="form-control" name="manager_tel" required>
                              </div>
                          </div>





                          <!-- ================================================================== -->





                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Register
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
