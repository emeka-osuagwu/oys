@extends('authlayout')

@section('title', 'Login')

@section('content')

      <p>Sign Into Your Oyster Account</p>
      <form method="post" action="/login">
        {!! csrf_field() !!}
        <div class="form-group">
          <label class="sr-only" for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
          @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <label class="sr-only" for="inputPassword">Password</label>
          <input type="password" class="form-control" id="inputPassword" name="password"
          placeholder="Password">
          @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group clearfix">
          <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
            <input type="checkbox" id="inputCheckbox" name="remember">
            <label for="inputCheckbox">Remember me</label>
          </div>
          <a class="pull-right" data-toggle="modal" data-target="#myModal">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
      </form>
      <p>Still no account? Please <a href="/register">Create Your Account</a></p>
    @endsection

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Password Reset</h4>
          </div>
          <form action="/password/email" class="form-horizontal"  method="post" style="width:100%;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-body">
              <input name="email" class="form-control" type="email" placeholder="Please enter your email address"
              data-validation="required email" />


            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
