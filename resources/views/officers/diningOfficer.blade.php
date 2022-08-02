@extends('Layouts.navLayout')

@section('content')

<section id="columns">
    <div class="body-container">
        <div class="column">
            
            <div>
                </br>
                <a href="/dining officer/new dining user" class="abutton">
                    New User   
                </a>
                <ul>
                    <a href="login">All students</a>
                    <a href="login">Cafe students</a>
                    <a href="login">non-cafe students</a>
                </ul>

                <style>
                    .abutton {
                        background-color: blue;
                        border: none;
                        color: white;
                        text-align: left;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 10px;
                        cursor: pointer;
                    }
                    .abutton:hover{
                        background-color: rgb(104, 171, 230);
                        color: #f1f1f1;
                            
                    }
                </style>   
                 
            </div>
            
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
                    background-color: #555;
                    color: white;
                    font-size: 16px;
                    padding: 12px 24px;
                    border: none;
                    cursor: pointer;
                    border-radius: 5px;
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
                    .container .btn:hover {
                    background-color: black;
                    }
                </style>

                <div class="container">
                <img src="/img/Happy Bunch - Desk.png" alt="officer" style="width: 100%; height: 300px;">  
                
                    <button type="submit" class="btn">Login as Officer</button>
                    
                </div>
                <div class="container">
                <img src="/img/desk.png" alt="DepartmentOfficer" style="width: 100%; height: 300px;"> 
                    
                    <button type="submit" class="btn">Login as DepartmenOfficer</button> 
                    
                </div class="container">

                <div class="container">
                    </br>
                    <div style="display: block; background-color: white; ">
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

            <!-- content place -->
            
        </div>

    </div> 
</section>

@endsection
