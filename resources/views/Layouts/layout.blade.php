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
        <div style="background-color: green;">
            <div class="relative flex items-top justify-center " >

                <section id="navbar">
                    <div class="topnav">
                    
                        <div>
                            <a class="active" href="/">Home</a>
                            <span>DBU Clearance </span> 
                            <span > Processing System</span>
                            <a id="link" href="contact">Contact</a>
                            <a id="link" href="about">About</a>
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

                @yield('content')
              
            </div>

            <footer>
                Copyright 2022 DBU Clearance System
            </footer>
        </div>
      
    </body>
</html>
