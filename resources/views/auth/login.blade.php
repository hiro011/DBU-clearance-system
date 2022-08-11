
@extends('Layouts.navLayout')

@section('content')

  <style>

    body {
        padding-left: 10%;
        padding-right: 10%;
    }
    
    .topnav a.active:hover {
        opacity: 0.6;
    }
    .column1 {
        width: 48%;
    }
    .center{
      padding: 0 25% 2%;
      margin: 4%;
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
        width: 95%;
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

    .center input[type="submit"]{
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
    .center input[type="submit"]:hover{
        border-color: #a2b4c0;
        background: #4492c7;
        transition: .4s;
    }
    form .subBtn{
        padding-left: 20px;
    }
    
    @media screen and (max-width:420px) {
        form .txt_field {
            flex-direction: column;
            align-items: flex-start;
        }

        form .txt_field label {
            margin-bottom: 5px;
        }

        form .txt_field .terms {
            flex-direction: row;
        }

        .center {
            width: 100%;
            padding-left: 0;
            margin: 0;
        }
        .column1 {
            width: 100%;
            padding-right: 0px;

        }
        .center form {
            padding: 0 ;
            padding-bottom: 80px;
            padding-right: 50px;
            padding-left: 20px; 
            position: center;
        }
    
        .center input[type="submit"]{
            height: 35px;
        }
        body {
            padding-right: 6%;
        }
       
    }
        
    .alert-danger{
        display: block;
        background-color: rgb(252, 232, 224);
        text-align: center;
        color: darkred;
        height: 35px;
        border-radius: 5px;
        width: 100%;
        padding-top: 4%;
        margin-bottom: 10px;
        opacity: 0.8;
    }
    .alert-success{
        display: block;
        background-color: rgb(201, 235, 201);
        text-align: center;
        color: darkgreen;
        height: 35px;
        border-radius: 5px;
        width: 100%;
        padding-top: 4%;
        margin-bottom: 10px;
        opacity: 0.9;
    }

    .profile_dd{
        top: 58px; 
        right: 330px;
        height: auto;
    }
    footer{
        width: 97.7%;
    }
        
  </style>

  
    <div class="center">
        <h1>Login</h1>

        <form action="{{ route('auth.check') }}" method="post">
        
        @if(Session::get('fail'))
            <div class="alert-danger" >
            {{ Session::get('fail') }}
            </div>
        @endif

        @csrf
        <div class="txt_field">
            <label>Email</label>
            <input type="text" class="" name="email" placeholder="email" class="input" value="{{ old('email') }}">
            <span style="color: red;">@error('email'){{ $message }} @enderror</span>
        </div>
        <div class="txt_field">
            <label>Password</label>
            <a href="" style="float: right; color: red;">Forgot Password?</a>
            <input type="password" name="password" placeholder="password" class="input">
            <span style="color: red;">@error('password'){{ $message }} @enderror</span>
        </div>

        <div class="subBtn">
        <input id="myButton" type="submit" value="Login">
        </div>

        </form>
    </div>

    <!-- script for down key to go to next inputfield -->
    <script>
        var allFields = document.querySelectorAll(".input");

        for (var i = 0; i < allFields.length; i++) {

            allFields[i].addEventListener("keyup", function(event) {

                if (event.keyCode === 40) {
                    console.log('Enter clicked')
                    event.preventDefault();
                    if (this.parentElement.nextElementSibling.querySelector('input')) {
                        this.parentElement.nextElementSibling.querySelector('input').focus();
                    }
                }
                if (event.keyCode === 38) {
                    console.log('Enter clicked')
                    event.preventDefault(); 
                    if (this.parentElement.previousElementSibling.querySelector('input')) {
                        this.parentElement.previousElementSibling.querySelector('input').focus();
                    }
                }
            });

        }
    </script>



 
@endsection
