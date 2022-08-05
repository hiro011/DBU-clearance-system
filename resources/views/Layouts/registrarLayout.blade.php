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
        .abutton {
            background-color: #7488f8;
            border: none;
            color: white;
            text-align: left;
            text-decoration: none;
            display: block;
            font-size: 10px;
            cursor: pointer;
        }
        .abutton:hover{
            color: #f1f1f1;
        }
        
    </style>
      
       

    <section id="columns">
        <div class="body-container">
            <div class="column"  >
                
                <div>
                    </br>
                    <a href="/registrar/new student" class="abutton"  id="newStudA"> 
                        New Student   
                    </a>
                    <span class="dropspanCurrent" style="background: white; color: black; padding-left: 40px; margin-top: 10%;">Registerd Users</span></br>

                    <ul style="margin-top: 0;">
                        <a href="login" id="allStudA">All Student</a>
                        <a href="login" id="regStudA">Regular Student</a>
                        <a href="login" id="extnStudA">Extension Student</a>
                        <a href="login" id="disStudA">Distance Student</a>
                    </ul>
                    
            
                </div>
                
            </div>

            <div class="column1">
                <!-- content place -->

              
                @yield('registrarContent')


            </div>

        </div> 
    </section>

@endsection
