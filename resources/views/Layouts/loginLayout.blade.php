<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DBU Clearance System</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">

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
                           
                            <style>    
                                body {
                                    /* font-family: 'Nunito', sans-serif; */
                                    font-family: "Times New Roman", Times, serif;
                                    padding-left: 6%;
                                    padding-right: 13%;
                                    background-color: gray;
                                }
                                .column1 {
                                    width: 48%;
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
                                
                               
                                 
                                @media (max-width:420px) {
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

                            </style>

                             <!-- content place -->

                            @yield('content')

                        </div>


                    </div> 
                </section>

            </div>

            <footer>
                Copyright 2022 DBU Clearance System
            </footer>
        </div>
      
    </body>
</html>
