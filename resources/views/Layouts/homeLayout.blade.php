

@extends('Layouts.navLayout')

@section('content')

    <style>    
        body {
            /* font-family: 'Nunito', sans-serif; */
            font-family: "Times New Roman", Times, serif;
            padding-left: 6%;
            padding-right: 13%;
            background-color: gray;
        }
        #navbar .active{
            background-color: blue;
            color: white;
        }
        .topnav a.active:hover {
            opacity: 0.6;
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
        
        @media screen and (max-width:420px) {
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

        .profile_dd{
            top: 58px; 
            right: 330px;
            height: auto;
        }
           
    </style>

    <section id="columns">
        <div class="body-container">
            <div class="column">
                <!-- <hr size="3" width="100%" color="gray"> -->
                <span class="dropspanCurrent">Home</span></br>
                <a href="/auth/login/admin" id="adminA">Admin</a>
                <a href="/auth/login/officer" id="officerA">Officers</a>
                <div>
                    <div class="dropdown-container">
                        <span class="dropspan">Clearance Request</span>
                        <ul>
                            <a href="/auth/login/teacher" id="teacherA">Teacher</a>
                            <a href="/auth/login/adminStaff" id="adminStaffA">Administrator Staff</a>
                            <a href="/auth/login/regularStud" id="regStudA">Regular Student</a>
                            <a href="/auth/login/extensionStud" id="extnStudA">Extension Student</a>
                            <a href="/auth/login/distanceStud" id="disStudA">Distance Student</a>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="column1">
                
            
                    <!-- content place -->

                @yield('homeContent')

            </div>


        </div> 
    </section>


@endsection

