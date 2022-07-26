
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>

<div class="container">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4>Login | Custom Auth</h4><hr>
           <form action=" " method=" ">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Sign In</button>
              <br>
              <a href="{{ route('auth.register') }}">I don't have an account, create new</a>
           </form>
      </div>
   </div>
</div>
    
</body>
</html>

  -->
@extends('Layouts.layout')

@section('content')

<section id="columns">
  <div class="body-container">
    <div class="column">
      <a href="login">Officers</a>
      <a href="login">Department Officers</a>
      <button class="dropdown-btn">Clearance Request
          <i class="fa fa-caret-down"></i>
      </button>
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

    <div class="column1">
      <!-- content place -->

      <style>    
      
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
          position: relative;
          border-bottom: 2px solid #adadad;
          margin: 30px 0;
        
        }
        .txt_field input {
          width: 100%;
          padding: 0 5px;
          height: 40px;
          font-size: 16px;
          border: none;
          background: none;
          outline: none;
        }
        .txt_field label{
          position: absolute;
          top: 50%;
          left: 5px;
          color: #adadad;
          transform: translateY(-50%);
          font-size: 16px;
          pointer-events: none;
          transition: .5s;
        }
        .txt_field span::before{
          content: '';
          position: absolute;
          top: 40px;
          left: 0;
          width: 0%;
          height: 2px;
          background: #2691d9;
          transition: .5s;
        }
        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label{
          top: -5px;
          color: #2691d9;
        }
        .txt_field input:focus ~ span::before,
        .txt_field input:valid ~ span::before{
          width: 100%;
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
          border-color: #88a5b8;
          background: #4d94c4;
          transition: .5s;
        }

      </style>

      <div class="center" style="padding-left: 10px; position: center;">
          <h1>Login</h1>
          <form method="post">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <input id="myButton" type="submit" value="Login">
            
            <script type="text/javascript">
                document.getElementById("myButton").onclick = function () {
                    location.href = "student info";
                };
            </script>
              
          </form>
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
