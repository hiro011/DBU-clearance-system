
@extends('Layouts.homeLayout')

@section('homeContent')

  <style>
    /* Add an active class to the active button/link */
    .column #officerA {
      background-color: blue;
      color: white;
    }
  </style>
  
  
  <div class="center">
    <h2 style="text-align: center;">Officers</h2>
    <h1>Login</h1>

    <form action="{{ route('auth.officer.check') }}" method="post">
    
      @if(Session::get('fail'))
        <div class="alert alert-danger" >
          {{ Session::get('fail') }}
        </div>
      @endif

      @csrf
      <div class="txt_field">
        <label>Email</label>
        <input type="text" class="" name="email" placeholder="email" value="{{ old('email') }}">
        <span style="color: red;">@error('email'){{ $message }} @enderror</span>
      </div>
      <div class="txt_field">
        <label>Password</label>
        <a href="" style="float: right; color: red;">Forgot Password?</a>
        <input type="password" name="password" placeholder="password">
        <span style="color: red;">@error('password'){{ $message }} @enderror</span>
      </div>
      <div class="subBtn">
      <input id="myButton" type="submit" value="Login">
      </div>
    </form>
  </div>

 
@endsection
