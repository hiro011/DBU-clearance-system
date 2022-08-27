
@extends('Layouts.navLayout')

@section('content')
             
    <style>
        .alert-success, .alert-danger{
            width: 90%;
            padding: 3%;
            margin: 10px;
            opacity: 0.9;
        }
        .name-title {
            width: 90%;
            padding: 3%;
            margin: 10px;
            color: blue;
            font-weight: bold;
        }
       
        .profile_dd{
            top: 58px; 
            right: 290px;
            height: auto;
        }
        #navbar .active{
            border: 1px solid;
            color: white;
        }
        
        .inputfield select{
            cursor: pointer;
        }
        .inputfield1{
            display: none;
            cursor: pointer;
        }
        .dropdown-container{
            display: block;
        }
         
        .containerBox{
            background-color: #9db9c0;
        }

        .column1 {
            float: left;
            display: block;
            width: 50%;
            background-color: white;
            margin-top: 0;
            padding: 10px;
            margin-left: 23%;
            align-self: center;

        }
         
        .body-container {
            background: #ffffff;
            margin-top: 0;
        }
        .column a{
            border-radius: 4px;
        }

    </style>

    <style>
        
        body {
            font-family: 'Nunito', sans-serif;
            padding-left: 8%;
            padding-right: 8%;
            height: 100vh;
        }
        .sticky {
            width: 71.3%;
        }
        @media screen and (max-width:600px) {
                
            body {
                padding-right: 2%;
                font-family: "Times New Roman", Times, serif;
            }
            .profile_dd{
                top: 58px; 
                right: 40px;
                /* margin-right: 500px; */
                height: auto;
            }
            
            .sticky {
                width: 78.5%;
            }
          
            .column1 {
                display: flex;
                float: center;
                width: 90%;
                margin-top: 0;
                margin-left: 0;
                /* padding: 30px; */
                height: auto;
            }
            footer{
                width: 90%;
                margin-right: 20px;
            }
            
            .body-container a {
                font-size: 12px;

            }
            .body-container {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
            .navbar2 {
                width: 40%;
                margin-left: 50px;

            }
            .navbar2 ul{
                width: 40%;
                margin-left: 25px;
                /* padding-left: 80px; */
            }
            #columns{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            
        }
        
      
        footer{
            width: 98%;
        }

        .dropspanCurrent { 
            padding: 8px 8px 8px 10px;
            text-decoration: none;
            font-size: 22px;
            display: block;
            background: transparent;
            text-align: center;
            color: black;
            margin-top: 5px;
        }
        
        .navbar2{
            display: flex;
            float: left;
            width: 91.2%;
            margin-right: 50px;
            background-color: rgb(224, 235, 240);
            padding-top: 5px;
            padding-left: 80px;
            height: auto;
            border: 1px solid lightblue;
            
        }

        .navbar2 a {
            text-align:center;
            float: left;
            display: block;
            padding: 8px 8px 8px 15px;
            color: rgb(0, 0, 0);
            text-decoration: none;
            border: 1px groove lightblue;
            font-size: 16px;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .navbar2 a:hover {
            background-color: rgb(85, 85, 221);
            color: #f1f1f1;
        }

    </style>
 
    <!-- accordion style -->
    <style>
        .submitA {
            background-color: blue;
            color: white;
        } 
        .accordion-container {
            margin: 8%;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            overflow: hidden;
            font-family: "Quicksand", sans-serif;
            background: #b9ebff;
        }
        .accordion-container .accordion{
            margin: 2%;
            background: #8dcee7;
            opacity: 1;
            border-radius: 8px;
            align-self: center;
            /* grid-template-columns: 1.3fr 6fr 0.5fr; */
        }

        .accordion__label,
        .accordion__content {
            padding: 14px 20px;
        }
       
        .accordion__label {
            display: flex;
            color: black;
            font-weight: 500;
            cursor: pointer;
            align-self: center;
            position: relative;
            transition: background 0.1s;
        }

        .accordion__label:hover {
            background: rgba(0, 0, 0, 0.1);
        }

        .accordion__label::after {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px;
            width: 12px;
            height: 6px;
            /* background-image: url('data:image/svg+xml;utf8,<svg width="100" height="50" xmlns="/img/caret-down-outline.svg"><polygon points="0,0 100,0 50,50" style="fill:%23FFFFFF99;" /></svg>'); */
            background-size: contain;
            transition: transform 0.4s;
        }

        .accordion__content {
            background: #ffffff;
            line-height: 1.6;
            font-size: 0.85em;
            display: none;
        }

        .accordion__input {
            display: none;
        }

        .accordion__input:checked ~ .accordion__content {
            display: block;
        }

        .accordion__input:checked ~ .accordion__label::after {
            transform: translateY(-50%) rotate(0.5turn);
        }
        .accordion__input:checked ~ .acc-down-icon::after{
            transform: rotate(180deg);
        }
       

        .submit-btn-container{
            align-items: center;
        }

        .accordion-container .submit-btn {
            font-size: 16px;
            margin: 5%;
            border: none;
            border-radius: 5px;
            float: left;
            background-color: #009578;
            color: white;
            cursor: pointer;
            width: 50%;
            height: 40px;
        }

        .accordion-container .submit-btn:hover {
            opacity: 0.8;
        }

        .accordion img{
            width: 25px; 
            height: 25px;
        }
        .acc-down-icon{
            width: 15px; 
            height: 15px;
        }
       
    </style>


    <section id="columns">
        <span class="dropspanCurrent" >Clearance Form</span></br>

        <div class="navbar2">
        
            <ul style="margin-top: 0;">
                @if($officerBack===true)
                <a href="/clearance/back/{{ $LoggedUser['role'] }}" id="backA">Home</a>
                @endif
                @if($regStud)
                <a href="/clearance/regular student" id="regStudA">Regular Student</a>
                @endif
                @if($extnStud)
                <a href="/clearance/extension student" id="extnStudA">Extension Student</a>
                @endif
                @if($disStud)
                <a href="/clearance/distance student" id="disStudA">Distance Student</a>
                @endif
                @if($teacher)
                <a href="/clearance/teacher" id="teacherA">Teacher</a>
                @endif
                @if($adminstaff)
                <a href="/clearance/admin staff" id="adminStaffA">Admin Staff</a>
                @endif
            </ul>
            </br>

        </div>
        <div class="body-container">
            

                @yield('clearanceContent')
            
        
        </div> 
    </section>

    <!-- script for select options -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>

        $(document).ready(function(){
            $("#college").on('change', function(){
                $(".inputfield1").hide();
                $("#" + $(this).val()).fadeIn(1);
            }).change();
        });

    </script>

    <script>
        var allFields = document.querySelectorAll(".input");

        for (var i = 0; i < allFields.length; i++) {

            allFields[i].addEventListener("keyup", function(event) {

            if (event.keyCode === 40) {
                console.log('Enter clicked')
                event.preventDefault();
                if (this.parentElement.nextElementSibling.querySelector('input')) {
                    this.parentElement.nextElementSibling.querySelector('input').focus();
                }
            }
            if (event.keyCode === 38) {
                console.log('Enter clicked')
                event.preventDefault(); 
                if (this.parentElement.previousElementSibling.querySelector('input')) {
                    this.parentElement.previousElementSibling.querySelector('input').focus();
                }
            }
            });

        }
    </script>

@endsection


