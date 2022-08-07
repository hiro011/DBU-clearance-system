
@extends('Layouts.navLayout')

@section('content')


    <style> 
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
            background: white; 
            color: black;
            margin: 0;
        }
        
        .sticky {
            width: 76.2%;
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
        
       
    </style>
      
    <style>
        .profile_dd{
            top: 58px; 
            right: 230px;
            height: auto;
        }
            
        .sticky {
            width: 76.2%;
        }
        footer{
            width: 98%;
        }

        .column1{
            width: 95.5%;
            padding: 10px 20px;
            height: 100vh;
        }

        .dropspanCurrent { 
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 22px;
            display: block;
            background: silver;
            text-align: center;
            color: black;
            margin-top: 10px;
        }
        .navbar2{
            display: flex;
            float: left;
            width: 100%;
            background-color: rgb(224, 235, 240);
            margin-bottom: 10px;
            padding-top: 5px;
            height: auto;
        }

        .navbar2 a {
            text-align:center;
            float: left;
            display: block;
            padding: 8px 8px 8px 15px;
            color: rgb(0, 0, 0);
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .navbar2 a:hover {
            background-color: rgb(85, 85, 221);
            color: #f1f1f1;
        }

        .abutton {
            background-color: #94b5d8;
            border: none;
            border-radius: 3px;
            color: white;
            text-align: left;
            text-decoration: none;
            display: block;
            font-size: 10px;
            margin-bottom: 10px
            cursor: pointer;
        }
        .abutton:hover{
            color: #f1f1f1;
        }

    </style>
            
            

    <section id="columns">
        <div class="body-container">
            <!-- <div class="column"> -->
            <span class="dropspanCurrent" style="">Admin</span></br>
                
                <!-- <div class="dropspan-container">
                    <span class="dropspan" >Registerd Users</span>
                    <hr size="2" width="100%" color="black">
                    <ul>
                        <a href="/admin/dashboard" id="adminsA">Users</a>
                        <a href="/admin/dashboard/officers" id="officersA">Officers</a>
                    </ul>
                </div> -->

                <div>
                     
                    <div class="navbar2 dropdown-container" style="background-color: none;">
                        <!-- <span class="dropspan">Add New User</span>  -->
                        <!-- <hr size="2" width="100%" color="black"> -->
                        <ul >
                            <a href="/admin/dashboard" id="adminsA">Users</a>
                            <a href="/admin/dashboard/officers" id="officersA">Officers</a>
                            <a href="/admin/new user" id="userA">Add User</a>
                            <a href="/admin/new officer" id="officerA">Add Officer</a>
                        </ul>
                    </div>
                    
                </div>  

            <!-- </div> -->

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


