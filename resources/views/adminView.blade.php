
@extends('Layouts.layout')

@section('content')


<section id="columns">
  <div class="body-container">
    <div class="column">
       
        <div>
            <button class="dropdown-btn">New User</button>
            <div class="dropdown-container">
                <ul>
                <a href="/admin/new officer">Officer</a>
                <a href="login">Teacher</a>
                <a href="login">Administrator Staff</a>
                <a href="login">Regular Student</a>
                <a href="login">Extension Student</a>
                <a href="login">Distance Student</a>
                </ul>
            </div>
            <style>
                .dropdown-container{
                    display: none;
                }
            </style>
        </div>  
        <div>
        <p>
        <hr size="3" width="100%" color="gray">
        </p>
        <hr size="3" width="100%" color="gray">
        </div>
        <a href="login">Officers</a>
        <a href="login">Teachers</a>
        <a href="login">Administrator Staffs</a>
        <a href="login">Regular Students</a>
        <a href="login">Extension Students</a>
        <a href="login">Distance Students</a>

    </div>

    <div class="column1">
      <!-- content place -->
 
      <div class="box" style="padding-left: 10px; position: center;">

        <h1>
          Welcome to Debre Berhan University Clearance Processing System to continue please login.
        </h1> </br>

        <div style="background-color: lightblue;">

          <style>
            .container {
              position: relative;
              width: 100%;
            }

              /* Style the button and place it in the middle of the container/image */
            .container .btn, .btn1, .btn2, .btn3, .btn4 {
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
              top: 25%;
            }
            .container .btn1 {
              top: 36%;
            }
            .container .btn2 {
              top: 47%;
            }
            .container .btn3 {
              top: 58%;
            }
            .container .btn4 {
              top: 69%;
            }
            .container .btn:hover, .btn1:hover, .btn2:hover, 
            .btn3:hover, .btn4:hover {
              background-color: black;
            }
            
          </style>

          <div class="container">
            <img src="/img/Happy Bunch - Desk.png" alt="officer" style="width: 100%; height: 300px;">  
            <button type="submit" class="btn">Login as Officer</button>
          </div>

          <div class="container">
            <img src="/img/desk.png" alt="DepartmentOfficer" style="width: 100%; height: 300px;"> 
            <button type="submit" class="btn">Department Officer</button> 
          </div class="container">

          <div class="container">
            </br>
            <div style="display: block; background-color: #5f9cec; ">
            <h1 style="padding-left: 25%;">Clearance Request</h1>
            </div>
            </br>
            <img src="/img/work.png" alt="Clearance_Request" style="width: 100%; height: 300px;">  
            <button type="submit" class="btn">Teacher</button> 
            <button type="submit" class="btn1">Administrator staff</button>
            <button type="submit" class="btn2">Regular student</button>
            <button type="submit" class="btn3">Extension student</button>
            <button type="submit" class="btn4">Distance student</button>
          </div>
        </div>

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




