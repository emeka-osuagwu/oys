@extends('authlayout')

@section('title', 'Register')

@section('content')

      <p>Create Your Oyster account</p>
      <form method="post" action="/register">
        {!! csrf_field() !!}
        <div class="form-group">
          <label class="sr-only" for="inputName">Name</label>
          <input type="name" class="form-control" id="inputName" name="name" placeholder="Name">
          @if ($errors->has('name'))
          <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
          @endif
        </div>
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

        <button type="submit" class="btn btn-primary btn-block">Create Your Account</button>
      </form>
      <p>Have an account already? Please <a href="/login">Login</a></p>
    @endsection
