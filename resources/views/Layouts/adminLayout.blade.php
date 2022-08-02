
@extends('Layouts.navLayout')

@section('content')


    <style> 
              
        body {
            font-family: 'Nunito', sans-serif;
            padding-left: 6%;
            padding-right: 13%;
            background-color: gray;
        }
        .dropdown-container{
            display: none;
        }
        .alert-danger{
            display: block;
            background-color: rgb(241, 211, 199);
            text-align: center;
            color: darkred;
            height: auto;
            border-radius: 5px;
            width: 75%;
            padding-top: 3%;
            margin-bottom: 10px;
            opacity: 0.8;
        }
        .alert-success{
            display: block;
            background-color: rgb(201, 235, 201);
            text-align: center;
            color: darkgreen;
            height: auto;
            border-radius: 5px;
            width: 75%;
            padding-top: 3%;
            margin-bottom: 10px;
            opacity: 0.9;
        }
        .sticky {
            width: 70.2%;
        }
        #navbar .active{
            border: 1px solid;
            color: white;
        }
        
        @media screen and (max-width:420px) {
            
            body {
                padding-right: 6%;
                font-family: "Times New Roman", Times, serif;
            }
            .sticky {
                width: 73.6%;
            }
             
        }
        .profile_dd{
            top: 58px; 
            right: 330px;
            height: auto;
        }
            
       
    </style>

 
    <section id="columns">
        <div class="body-container">
            <div class="column">
            
                <div>
                    <span class="dropspanCurrent">Admin</span></br>
                    <div style="margin-right: 42px">
                        <a href="/admin/dashboard" class="dropdown-btn" id="logU">Logged Users</a>
                    </div>
                    <button class="dropdown-btn">New User</button> 
                    <div class="dropdown-container">
                        <ul>
                        <a href="/admin/new admin" id="adminA">Admin</a>
                        <a href="/admin/new officer" id="officerA">Officer</a>
                        <a href="/admin/new user" id="clearanceA">Clearance User</a>
                        </ul>
                    </div>
                    
                </div>  

                <div>
                    <p>
                    <hr size="3" width="100%" color="gray">
                    </p>
                    <hr size="3" width="100%" color="gray">
                </div>

                <div class="dropspan-container">
                    <span class="dropspan" style="padding-left: 8px;">Registerd Users</span>
                    <a href="login" id="allA">All</a>
                    <a href="login" id="adminsA">Admins</a>
                    <a href="login" id="officersA">Officers</a>
                    <a href="login" id="teachersA">Teachers</a>
                    <a href="login" id="adminStaffA">Administrator Staffs</a>
                    <a href="login" id="regStudA">Regular Students</a>
                    <a href="login" id="extnStudA">Extension Students</a>
                    <a href="login" id="disStudA">Distance Students</a>
                </div>

            </div>

            <div class="column1">

                <!-- content place -->

                @yield('adminContent')

                
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


