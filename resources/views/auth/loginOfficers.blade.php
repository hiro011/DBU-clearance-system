
@extends('Layouts.layout')

@section('content')

<style>    

  .column1 {
    width: 40%;
  }
  .center{
    padding-right: 8%;
  }
 
  .center h1 {
    text-align: center;
    padding: 20px 0;
    border-bottom: 1px solid silver;
  }
  .center form {
    padding: 0 40px;
    padding-bottom: 80px;
    box-sizing: border-box;
  }
  form .txt_field {
    margin-bottom: 15px;
    align-items: center;
  }
   
  .txt_field input {
    width: 100%;
    padding: 8px 10px;
    font-size: 15px;
    border: 1px solid #d5dbd9;
    background-color: #e9f4fb;
    outline: none;
    border-radius: 3px;
    transition: all 0.3s ease;
  }
  .txt_field label{
    width: 200px;
    color: black;
    font-size: 14px;
  }

  input[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
    margin-top: 20px;
  }
  input[type="submit"]:hover{
    border-color: #a2b4c0;
    background: #4492c7;
    transition: .4s;
  }

</style>


<section id="columns">
  <div class="body-container">
    <div class="column">
      <!-- <hr size="3" width="100%" color="gray"> -->
      <a href="login">Officers</a>
      <a href="login">Department Officers</a>
      <div>
        <button class="dropdown-btn">Clearance Request</button>
        <div class="dropdown-container">
          <ul>
            <a href="login">Teacher</a>
            <a href="login">Administrator Staff</a>
            <a href="login">Regular Student</a>
            <a href="login">Extension Student</a>
            <a href="login">Distance Student</a>
          </ul>
        </div>
      </div>

    </div>

    <div class="column1">
      <!-- content place -->

      <div class="center" style="padding-left: 10px; position: center;">
        <h1>Login</h1>

        <form action="{{ route('auth.check') }}" method="post">
        
          @if(Session::get('fail'))
            <div class="alert alert-danger" >
              {{ Session::get('fail') }}
            </div>
          @endif

          @csrf
          <div class="txt_field">
            <label>Email</label>
            <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
            <span style="color: red;">@error('email'){{ $message }} @enderror</span>
          </div>
          <div class="txt_field">
            <label>Password</label>
            <a href="{{ route('auth.forgotPass') }}" style="float: right; color: red;">Forgot Password?</a>
            <input type="password" name="password" placeholder="password">
            <span style="color: red;">@error('password'){{ $message }} @enderror</span>
          </div>

          <input id="myButton" type="submit" value="Login">
       
        </form>
      </div>

    </div>

    <!-- java script dropdown -->
    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
            });
        }
    </script>

  </div> 
</section>


@endsection
