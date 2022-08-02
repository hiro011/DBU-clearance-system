
@extends('Layouts.homeLayout')

@section('homeContent')


  <style>
    .container {
      position: relative;
      width: 100%;
    }
    .container img{
      width: 100%; 
      height: 300px;
    }
    .container a {
      float: left;
      margin-left: 15px;
      background-color: #2ecce0;
      color: white;
      cursor: pointer;
      width: 40%;
      height: 40px;
      text-decoration: none;
      text-align: center;
    }
    .container a:hover {
      opacity: 0.7;
    }
    
    /* Style the button and place it in the middle of the container/image */
    .container a{
      position: absolute;
      left: 30%;
      height: auto;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background-color: #3f5fc7;
      color: white;
      font-size: 16px;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      transition: 0.8s;
    }
    .container .btn {
      margin-top: 15%;
    }
    .container .btn1 {
      top: 35%;
    }
    .container .btn2 {
      top: 47%;
    }
    .container .btn3 {
      top: 59%;
    }
    .container .btn4 {
      top: 71%;
    }
    .container .btn5 {
      top: 83%;
    }
    .container .btn:hover, .btn1:hover, .btn2:hover, 
    .btn3:hover, .btn4:hover, .btn5:hover {
      background-color: blue;
    }
    .column1 {
      width: 63%;
    }
    @media screen and (max-width: 600px) {

      .column1 {
        width: 100%;
      }
    }
    
  </style>


  <div class="box" style=" position: center;">

    <h1 style="text-align: center;">
      Welcome to Debre Berhan University Clearance Processing System to continue please login.
    </h1> </br>

    <div style="background-color: lightblue;">

    
      <div class="container">
        <img src="/img/Happy Bunch - Desk.png" alt="officer" >  
        <a href="/auth/login/officer" class="btn">Login as Officer</a>
      </div>

      <div class="container">

        <div style="display: block; background-color: #5f9cec; height: 40px; ">
        <h1 style="padding-left: 25%; padding-top: 1%;">Clearance Request</h1>
        </div>
        </br>
        <img src="/img/work.png" alt="Clearance_Request" >  

        <div class="btn-container">
          <a href="/auth/login/teacher" class="btn1">Teacher</a>
          <a href="/auth/login/adminStaff" class="btn2">Administrator staff</a>
          <a href="/auth/login/regularStud" class="btn3">Regular student</a>
          <a href="/auth/login/extensionStud" class="btn4">Extension student</a>
          <a href="/auth/login/distanceStud" class="btn5">Distance student</a>
        </div>

      </div>
    </div>

  </div>


@endsection




