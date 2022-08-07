@extends('Layouts.navLayout')

@section('content')

    <style> 
         
        body {
            font-family: 'Nunito', sans-serif;
            padding-left: 6%;
            padding-right: 13%;
            background-color: gray;
        }
        .column1{
            width: 60%;
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
    
        footer{
            width: 98%;
        }
       
    </style>
      
      
    <style>
        .column1{
            width: 95.5%;
            padding: 10px 20px;
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
            align-items: center;
            background-color: rgb(224, 235, 240);
            margin-bottom: 10px;
            padding-top: 5px;
            height: auto;
        }
        .navbar2 ul{
            margin-left: 15%;
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
      

    <span class="dropspanCurrent" >Human Resource Management</span></br>
    <div class="navbar2">
    
        <ul style="margin-top: 0;">
            <a href="/officers/HRM" id="allEmployeeA">All Employees</a>
            <a href="/officers/HRM/teachers" id="teachersA">Teachers</a>
            <a href="/officers/HRM/admin staffs" id="adminStaffA">Administrator Staffs</a>
            <a href="/officers/HRM/new employee" class="abutton"  id="newEmployeeA">New Employee</a>

        </ul>

    </div>
 
 
    <section id="columns">
        <div class="body-container">

            <!-- <div class="column"  >
                
                <div>
                    </br>
                    <a href="/officers/HRM/new employee" class="abutton"  id="newEmployeeA"> 
                        New Employee   
                    </a>
                    <span class="dropspanCurrent" style="background: white; color: black; padding-left: 40px; margin-top: 10%;">Registerd Students</span></br>

                    <ul style="margin-top: 0;">
                        <a href="/officers/HRM" id="allEmployeeA">All Employees</a>
                        <a href="/officers/HRM/teachers" id="teachersA">Teachers</a>
                        <a href="/officers/HRM/admin staffs" id="adminStaffdA">Administrator Staffs</a>
                    </ul>

                    
            
                </div>
                
            </div> -->

            <div class="column1">
                <!-- content place -->
  
                @yield('hrmContent')
            </div>

        </div> 
    </section>
    
    <script>

        $(document).ready(function(){
            $("#list").on('change', function(){
                $(".inputfield1").hide();
                $("#" + $(this).val()).fadeIn(1);
            }).change();
        });

    </script>


@endsection
