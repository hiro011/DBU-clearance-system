 
@extends('Layouts.navLayout')

@section('content')
    
    <style>
        #viewCA{
        background-color: blue;
        color: white;
        }
        #viewCA:hover{
            color: black; 
            opacity: 0.8;
        }
    </style>

    <style>
      
        body {
            /* font-family: 'Nunito', sans-serif; */
            font-family: "Times New Roman", Times, serif;
            padding-left: 4%;
            padding-right: 4%;
            background-color: gray;
        }
        .sticky {
            width: 78.3%;
        }
        #navbar .active{
            border: 1px solid;
            color: white;
        }
        
        .profile_dd{
            top: 58px; 
            right: 250px;
            height: auto;
        }
        footer{
            width: 98.2%;
        }
  
        .column1{
            width: 96%;
            padding: 10px 20px;
            float: center;
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
            border: 1px groove lightblue;
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
        @media screen and (max-width:600px) {
            
            body {
                padding: 0;
                font-family: "Times New Roman", Times, serif;
            }
            footer{
                width: 95.2%;
            }
            .sticky {
                width: 62.8%;
            }
            table{
                display: block;
                height: 650px;
                overflow-y:auto;
            }
            .column1{
                padding: 0;
                /* height: 100vh; */
            }
            
        }

    </style>
   
    <style>
        .search-btn{
            width: 80px;
            color: black;
            font-size: 14px;
            border-radius: 4px;
            border: none;
            background-color: #71a3da;
        }
        
        .searchit{
            align-items: center;
            width: 80%;
            height: 100%;
            outline: none;
            border: 1px solid #d5dbd9;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.3s ease;
        }
        .searchForm{
            margin-left: 20%;
            display: flex;
            float: left;
            margin-bottom: 15px;
            height: 40px;
            width: 50%;
        }
        
        .searchDiv{
            display: flex; 
            float: center;
            width: 100vh;
        }
        .abtnCont{
            display: block;
            padding-top: 3px;
            height: 40px;
        }
        .abtn {
            color: black;
            font-size: 14px;
            border-radius: 4px;
            border: none;
            background-color: #94b5d8;
            padding: 10px;
            text-align: center;
            margin-left: 20px;
            text-decoration: none;
            width: 130px;
            cursor: pointer; 
        }
        .abtn:hover{
            color: #f1f1f1;
            background-color: blue;
        }
        .search-btn:hover{
            opacity: 0.7;
            color: white;
        }
        button{
            width: 40px;
            color: black;
            font-size: 14px;
            border-radius: 4px;
            border: none;
            background-color: transparent;
            background-color: #71a3da;
        }
        .container{
            padding-right: 20px;
            padding-left: 10px;
        }
        .container input{
            max-width: 100px;
        }
        .container select{
            cursor: pointer;
        }
         
        @media screen and (max-width:600px) {


            .container{
                padding: 0;
            }
            table{
                font-size: 12px;
                padding: 1px;
            }
            .search-btn{
                width: 80px;
                color: black;
                font-size: 14px;
                border-radius: 4px;
                border: none;
                background-color: #71a3da;
            }
            .searchit{
                width: 38%;
            }

            .searchForm{
                margin: 10px;
                width: 80%;
                float:center;
            }
            .abtnCont{
                display: block;
                float:left;
                padding: 10px;
            }
             
            .searchDiv{
                display: inline-block;
                vertical-align: top;
                line-height: 1;
            }
            
        }
        

    </style>
                    
    <style>
        .clearance-form{
            background: white;
            padding: 40px;
            margin: 20px;
            margin-left: 15%;
            width: 65%;
        }
        .clearance-form .clearance-top h2, .clearance-form .clearance-top h1{
            text-align: center;
        }
        .clearance-form .underline-value{
            text-decoration: underline;
            margin-left: 5px;
        }
        .clearance-form .clearance-middle{
            /* align-content: space-between; */
        } 
        .clearance-form .clearance-middle .firstc, 
        .clearance-form .clearance-bottom .firstc{
            margin-left: 20px;
        }
        .clearance-form .clearance-bottom .center-text{
            margin-left: 40%;
            text-align: center;
        }
        .stamp{
            /* font-family: Copperplate, Papyrus, fantasy; */
            /* display: block; */
            font-family: 'Trade Winds';
            border: 2px groove   #0154cf;
            font-size: 12px;
            margin-bottom: 10px;
            color: #0154cf;
            font-weight: 700;
        }
        .rotate{
            transform: rotate(-2deg);

        }
    </style>            

    <span class="dropspanCurrent" >Registerar - Requested Clearance</span></br>
    <div class="navbar2">
    
        <ul style="margin-top: 0;">
            <a href="/registrar/clearance/list" class="abutton"  id="viewCA" style="margin-left: 5px;">Back</a>
            <a href="/clearance/export pdf/{{ $clearance->program }}/{{ $clearance->ID_no }}" class="abutton"  id="printCA" style="margin-left: 80px;">Export to PDF</a>
        </ul>
        
    </div>
 
    <section id="columns">
        <div class="body-container">

            <div class="column1">
                <!-- content place -->

                    <div class="clearance-form">

                        <div class="clearance-top">
                            <h1>DEBRE BERHAN UNIVERSITY OFFICE OF THE REGISTRAR</h1>
                            <h2>WITHDRAWAL/CLEARANCE SHEET</h2>
                            @if(($clearance->program) === 'Regular')
                            <h2 class="underline-value"> FOR REGULAR DEGREE STUDENTS</h2>
                            @endif
                            @if(($clearance->program) === 'Extension')
                            <h2 class="underline-value"> FOR EXTENSION DEGREE STUDENTS</h2>
                            @endif
                            @if(($clearance->program) === 'Distance')
                            <h2 class="underline-value"> FOR Distance DEGREE STUDENTS</h2>
                            @endif
                            
                        </div>

                        <div class="top-middle">
                            <p> Purpose <p>
                            </p> 
                                If a student is withdrawing or clearing at the end of the academic or graduating from the University he/she has to
                                If a student is withdrawing or clearing at the end of the academic or graduating from the University he/she has to
                                If a student is withdrawing or clearing at the end of the academic or graduating from the University he/she has to

                            </p>
                            <ul>
                                <p>
                                    1.
                                    If a student is withdrawing or clearing at the end of the academic or graduating from the University he/she has to
                                        If a student is withdrawing or clearing at the end of the academic or graduating from the University he/she has to
                                    </br>   
                                    2. 
                                    If a student is withdrawing or clearing at the end of the academic or graduating from the University he/she has to
                            </br>   3. If a student is withdrawing or clearing at the end of the academic or graduating from the University he/she has to
                                    If a student is withdrawing or clearing at the end of the academic or graduating from the University he/she has to
                                    
                                </p>
                            </ul>
                        </div>

                        <div class="clearance-middle">
                            <span class="firstc">Full Name</span>  <span class="underline-value">{{ $clearance->name }}</span>
                            <span class="firstc">Gender</span> <span class="underline-value">{{ $clearance->gender }}</span>
                            <span class="firstc">ID No.</span> <span class="underline-value">{{ $clearance->ID_no }}</span>
                            </br></br>
                            <span class="firstc">Department</span> <span class="underline-value">{{ $clearance->department }}</span>
                            <span class="firstc">Year</span> <span class="underline-value">{{ $clearance->year }}</span>
                            <span class="firstc">Date</span> <span class="underline-value">{{  date('d-m-Y', strtotime($clearance->created_at)) }}</span>
                            </br></br>
                            <span class="firstc">Reason For Withdrawal/Clearance</span> <span class="underline-value">{{ $clearance->reason }}</span>
                            </br></br>
                            <span class="firstc" style="font-weight: 700;">Please optain signature from the following: </span>
                            </br></br>

                            <div class="nameSign">
                                <span class="underline-value" style="margin-left: 35%;">Name </span>
                                <span class="underline-value" style="margin-left: 30%;">Signature </span>

                            </div>
                            </br>  

                        </div>

                        <div class="clearance-bottom">
                            <ul>
                                <span class="firstc">1. Head of Department </span> <span class="underline-value stamp"  >{{ $clearance->department }}</span> 
                                <span class="underline-value" style="margin-left: 80px;">head of department stamp </span>
                                </br></br>
                                <span class="firstc">2. Main Library</span> <span class="underline-value stamp" style="margin-left: 48px;">Main Library office name</span>
                                <span class="underline-value" style="margin-left: 55px;">Main Library office stamp</span>    
                                </br></br>
                                @if(($clearance->program) === 'Regular')
                                    <span class="firstc">3. Residence Office</span> <span class="underline-value stamp" style="margin-left: 24px;">residence office name</span>
                                    <span class="underline-value" style="margin-left: 80px;">residence office stamp</span>
                                    </br></br>
                                    <span class="firstc">4. Dining Office</span> <span class="underline-value stamp" style="margin-left: 45px;">dining office name</span>
                                    <span class="underline-value" style="margin-left: 100px;"> Dining office stamp</span>
                                    </br></br>
                                @endif
                                @if(($clearance->program) === 'Extension')
                                    <span class="firstc">3. Continuing Education</span> <span class="underline-value stamp" style="">Continuing Education name</span>
                                    <span class="underline-value" style="margin-left: 30px;"> Continuing Education stamp</span>
                                    </br></br>
                                @endif
                            </ul>
                            <span class="firstc" >
                                If a student is withdrawing or clearing at the end of the academic or graduating from the University he/she has to

                            </span>
                            </br></br>
                            <span class="center-text">Date: </span>
                            <span class="underline-value  "> {{  date('d-m-Y', strtotime($clearance->created_at)) }}</span>
                            </br></br>
                            <span class="firstc">Seal of the registrar office</span>
                            </br></br></br></br></br></br></br></br>
                        </div>


                    </div>

                    
 
            </div>

        </div> 
    </section>


@endsection
 
 
