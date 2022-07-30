
@extends('Layouts.loginLayout')

@section('content')
 
<div class="center">
  <h1>Login</h1>

  <form action="{{ route('password.update') }}" method="post">

    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="txt_field">
      <label>Email</label>
      <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
      <span style="color: red;">@error('email'){{ $message }} @enderror</span>
    </div>
    <div class="txt_field">
      <label>New Password</label>
      <input id="password" type="password" name="newPassword" placeholder="New Password">
      <span style="color: red;">@error('password'){{ $message }} @enderror</span>
    </div>
    <div class="txt_field">
      <label>Confirm Password</label>
      <input type="password" name="confirmPassword" placeholder="Confirm Password">
      <span style="color: red;">@error('password'){{ $message }} @enderror</span>
    </div>
    <div class="subBtn">
    <input id="myButton" type="submit" value="Update">
    </div>
  </form>
</div>


@endsection
