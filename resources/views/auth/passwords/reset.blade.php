<?php $title = "Password Reset" ?>
@extends('auth.authlayout')

@section('content')

      <p>Reset Your Password</p>
      <form method="post"  action="{{ url('/password/reset') }}">
        {!! csrf_field() !!}

        <input type="hidden" name="token" value="{{ $token }}">
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
        <div class="form-group">
          <label class="sr-only" for="inputPassword">Retype Password</label>
          <input type="password" class="form-control" id="inputPassword" name="password_confirmation"
          placeholder="Password">
          @if ($errors->has('password_confirmation'))
          <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
          @endif
        </div>

        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
      </form>
      <p>Please <a href="/login">Login</a></p>
    @endsection
