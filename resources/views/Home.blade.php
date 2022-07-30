
@extends('Layouts.layout')

@section('content')

<style>
  #navbar .active{
    background-color: blue;
    color: white;
  }
  .topnav a.active:hover {
    opacity: 0.6;
  }
</style>

<section id="columns">
  <div class="body-container">
    <div class="column">
      <!-- <hr size="3" width="100%" color="gray"> -->
      <a href="/auth/login/admin">Admin</a>
      <a href="/auth/login/officer">Officers</a>
      <a href="/auth/login/officer">Department Officers</a>
      <div>
         
        <div class="dropdown-container">
          <span class="dropspan">Clearance Request</span>
          <ul>
            <a href="/auth/login/teacher">Teacher</a>
            <a href="/auth/login/adminStaff">Administrator Staff</a>
            <a href="/auth/login/regular">Regular Student</a>
            <a href="/auth/login/extension">Extension Student</a>
            <a href="/auth/login/distance">Distance Student</a>
          </ul>
        </div>
      </div>

    </div>

    <div class="column1">
      <!-- content place -->
 
      <div class="box" style=" position: center;">

        <h1 style="text-align: center;">
          Welcome to Debre Berhan University Clearance Processing System to continue please login.
        </h1> </br>

        <div style="background-color: lightblue;">

          <style>
            .container {
              position: relative;
              width: 100%;
            }
            .container img{
              width: 100%; 
              height: 300px;
            }

            /* Style the button and place it in the middle of the container/image */
            .container .btn, .btn1, .btn2, .btn3, .btn4, .btn5{
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
            .btn3:hover, .btn4:hover {
              background-color: black;
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

          <div class="container">
            <img src="/img/Happy Bunch - Desk.png" alt="officer" >  
            <button type="submit" class="btn">Login as Officer</button>
          </div>

          <div class="container">
            <img src="/img/desk.png" alt="DepartmentOfficer" > 
            <button type="submit" class="btn">Department Officer</button> 
          </div class="container">

          <div class="container">
            </br>
            <div style="display: block; background-color: #5f9cec; height: 40px; ">
            <h1 style="padding-left: 25%;">Clearance Request</h1>
            </div>
            </br>
            <img src="/img/work.png" alt="Clearance_Request" >  
            <div class="btn-container01">
              <button type="submit" class="btn1">Teacher</button> 
              <button type="submit" class="btn2">Administrator staff</button>
              <button type="submit" class="btn3">Regular student</button>
              <button type="submit" class="btn4">Extension student</button>
              <button type="submit" class="btn5">Distance student</button>
            </div>
          </div>
        </div>

      </div>

    </div>

 
  </div> 
</section>


@endsection




