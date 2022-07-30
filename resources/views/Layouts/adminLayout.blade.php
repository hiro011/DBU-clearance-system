<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DBU Clearance System/admin</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">

        <style>
            .topnav a.active {
                border: 2px solid #d5dbd9;
            }
        </style>

    </head>

    <body>
        <div class="containerBox">
            <div>

                <section id="navbar">
                    <div class="topnav">
                    
                        <div>
                            <a class="active" href="/">Home</a>
                            <span>DBU Clearance </span> 
                            <span > Processing System</span>
                            <a id="link" href="/about">About</a>
                            <a id="link" href="{{ route('auth.admin.logout') }}">Logout</a>
                        </div>
                    
                    </div>  
            
                    <!-- script for navbar -->
                    <script>
                        window.onscroll = function () { myFunction() };

                        var navbar = document.getElementById("navbar");
                        var sticky = navbar.offsetTop;

                        function myFunction() {
                            if (window.pageYOffset > sticky) {
                            navbar.classList.add("sticky")
                            } else {
                            navbar.classList.remove("sticky");
                            }
                        }
                    </script>
                
                </section>
                
                <section id="columns">
                    <div class="body-container">
                        <div class="column">
                        
                            <div>
                                <div style="margin-right: 42px">
                                <a href="/admin/dashboard" class="dropdown-btn" id="logU">Logged Users</a>
                                </div>
                                <button class="dropdown-btn">New User</button> 
                                <div class="dropdown-container">
                                    <ul>
                                    <a href="/admin/new admin" id="adminA">Admin</a>
                                    <a href="/admin/new officer" id="officerA">Officer</a>
                                    <a href="#" id="clearanceA">Clearance User</a>
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

                            <style>
                               
                                .dropdown-container{
                                    display: none;
                                }
                                .alert-danger{
                                    display: block;
                                    background-color: rgb(241, 211, 199);
                                    text-align: center;
                                    color: darkred;
                                    height: 35px;
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
                                    height: 35px;
                                    border-radius: 5px;
                                    width: 75%;
                                    padding-top: 3%;
                                    margin-bottom: 10px;
                                    opacity: 0.9;
                                }
                                .wrapper .form .inputfield .custom-email .input{
                                    width: 42%;
                                    outline: none;
                                    border: 1px solid #d5dbd9;
                                    font-size: 15px;
                                    padding: 8px 10px;
                                    border-radius: 3px;
                                    transition: all 0.3s ease;
                                }
                                .inputfield .custom-email select{
                                    padding: 4px 8px;
                                    font-size: 15px;
                                    border: 1px solid #d5dbd9;
                                    height: 35px;
                                    background-color: #e9f4fb;
                                    outline: none;
                                    border-radius: 3px;
                                    transition: all 0.3s ease;
                                }
                                
                            </style>

                            <!-- content place -->
 

                            @yield('content')


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

            </div>

            <footer>
                Copyright 2022 DBU Clearance System
            </footer>
        </div>
      
    </body>
</html>
