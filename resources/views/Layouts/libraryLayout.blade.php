 
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
                    <button class="dropdown-btn">New Patron/User</button>
                    <div class="dropdown-container">
                        <ul>
                        <a href="#">Teacher</a>
                        <a href="#">Administrator Staff</a>
                        <a href="#">Students</a>
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
                    <a href="login">All Users</a>
                    <a href="login">Teachers</a>
                    <a href="login">Administrator Staffs</a>
                    <a href="login">Students</a>
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
                    @yield('content');
    
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

