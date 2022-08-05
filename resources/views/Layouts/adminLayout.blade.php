
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
            display: block;
            background-color: transparent;
            margin-top: 0;
            padding-top: 2px;
  
        }
     
        .dropdown-container span, .dropspan-container .dropspan, .dropspanCurrent { /* needed for 'clearance request' span don't delet*/
            background: transparent;
            text-align: left;
            color: darkblue;
            margin: 0;
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
        .sticky {
            width: 70%;
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
                width: 73%;
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
                    <span class="dropspanCurrent" style="background: white; color: black;">Admin</span></br>
                    <div style="margin-right: 42px">
                        <a href="/admin/dashboard" class="dropdown-btn" id="logU">Logged Users</a>
                    </div>
                    <div class="dropdown-container" style="background-color: none;">
                        <span class="dropspanCurrent" style="padding-left: 30px;">Add New User</span> 
                        <hr size="2" width="100%" color="black">
                        <ul>
                        <a href="/admin/new user" id="userA">User</a>
                        <a href="/admin/new officer" id="officerA">Officer</a>
                        </ul>
                    </div>
                    
                </div>  


                <div class="dropspan-container">
                    <span class="dropspan" style="padding-left: 30px;">Registerd Users</span>
                    <hr size="2" width="100%" color="black">
                    <ul>
                        <a href="#" id="adminsA">Users</a>
                        <a href="#" id="officersA">Officers</a>
                    </ul>
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


