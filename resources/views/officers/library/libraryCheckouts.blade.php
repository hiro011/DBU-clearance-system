 
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
      
      table{
            font-size: 14px;
        }
        body {
            font-family: 'Nunito', sans-serif;
            padding-left: 4%;
            padding-right: 4%;
            background-color: gray;
        }
        .sticky {
            width: 79.5%;
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
            width: 100%;
        }
  
        .column1{
            width: 100%;
            padding: 10px 30px;
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
            margin-top: 20px;
        }
        
        .searchit{
            align-items: center;
            width: 80%;
            height: 80%;
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
            margin-bottom: 20px;
            height: 60px;
            width: 50%;
        }
        .inputfield{
            margin-bottom: 10px;
        }
        
        .custom_select select{
            height: 100%;
            border-radius: 1px;
            color: black;
            font-size: 14px;
            border-radius: 3px;
            cursor: pointer;
            border-color: lightgreen;
        }
        .searchDiv, .searchDiv2{
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
        .chooseField1{
            display: none;
        }
        
        .searchDiv2 {
            margin-bottom: 40px;
            color: darkred;
        }
        
        .searchDiv2 .search-btn{
            margin-top: 23px;
            width: 80px;
        }
        .search-btn:hover{
            opacity: 0.7;
            color: white;
        }
        .searchDiv2 input{
            height: 40px;
            border-width: 1px;
            border-color: lightgreen;
            box-shadow: none; 
        }
        .searchDiv2{
            display: none;
        }
        .chooseField label{
            margin-left: 10px;
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
            padding-right: 180px;
            padding-left: 10px;
        }
        .container input{
            max-width: 100px;
        }
        .container select{
            cursor: pointer;
        }
         
        @media screen and (max-width:420px) {


            .container{
                padding-right: 10px;
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
            .searchDiv2 select{
                max-width: 100px;
                min-width: 30px;
            }
            .searchDiv2 .search-btn{
                margin-left: 0;
                max-width: 60px;
            }  
            .searchDiv2 input{
                max-width: 70px;
                min-width: 30px;
                 
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
        .checkDiv{
            display: none;
        }
    </style>            

    <span class="dropspanCurrent" >Library - Checkouts</span></br>
    <div class="navbar2">
    
        <ul  >
            <a href="/officers/library" class="abutton"  id="viewCA" style="margin-left: 5px;">Back</a>
        </ul>
        <h2 style="margin-left: 20%">{{ $libraryUser->name }}</h2>
        <ul>
        <button id="checkI" class="abtn" onclick="toggleText1()">Check In</button>
        <button id="checkO" class="abtn" onclick="toggleText2()">Check Out</button>

        </ul>

    </div>

    <div style="margin-bottom:20px;">

        <div id="checkIn" class="checkDiv" >  
            <form method="POST" action="{{ route('library.checkInBook') }}"  class="searchForm">
                @csrf
                
                <div class="inputfield" style="width: 100%;">
                    <label style="color: green; padding-left: 10px;">Barcode</label> </br>
                    <input type="text" class="searchit" name="barcode" placeholder="Enter barcode" 
                        value="{{ old('barcode') }}"> </br>
                </div> 
                <button type="submit" class="search-btn" style="margitn-top: 12px;">Submit</button>
            </form>
            
        </div>

        <div id="checkOut" class="checkDiv" >  
            <form method="get" action="{{ route('library.checkOutBook') }}"  class="searchForm">
                @csrf
                <input type="text" style="display: none;" name="card_no" value="{{ $libraryUser->Card_no }}" > 
                
                <div class="inputfield" style="width: 100%;">
                    <label style="color: green; padding-left: 10px;">Barcode</label> </br>
                    <input type="text" class="searchit"   name="barcode" placeholder="Enter barcode" 
                        value="{{ old('barcode') }}"> </br>
                </div> 

                <button type="submit" class="search-btn" style="margitn-top: 10px;">Submit</button>
            </form>
            
        </div>

    </div>
 
    <section id="columns">
        
        <div class="body-container">

            <div class="column1">
                <!-- content place -->
                

                <div class="container" style=" overflow-x:auto; overflow-y:auto;">
                    <br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Barcode</th>
                                            <th>Title</th>
                                            <th>Location</th>
                                            <th>Due Date</th>
                                            <th>Checkout_date</th>
                                            <th>charge</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>

                                    @foreach ($checkouts as $user)
                                        <tr>
                                            <td></td>
                                            <td>{{ $user->barcode }} </td>
                                            <td>{{ $user->title }}</td>
                                            <td>{{ $user->location }}</td>
                                            <td>{{ $user->due_date }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->charge }}</td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div> 
    </section>

<script>
    function toggleText1(){
        var x = document.getElementById("checkIn");
        var es = document.getElementById("checkI");
        if (x.style.display === "none") {
            x.style.display = "block";
            es.style.background = "blue";
        } else {
            es.style.background = "#94b5d8";
            x.style.display = "none";
        }
    }
    function toggleText2(){
        var x = document.getElementById("checkOut");
        var es = document.getElementById("checkO");
        if (x.style.display === "none") {
            x.style.display = "block";
            es.style.background = "blue";
        } else {
            es.style.background = "#94b5d8";
            x.style.display = "none";
        }
    }
</script>

    <!-- script for alert messege -->
    <script>
        var msg = '{{ Session::get('alert')}}';
        var exist = '{{ Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>


@endsection
 
@section('headerLinks')
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
   <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

   <script type="text/javascript" src="/jquery/jqueryTabledit/jquery.tabledit.min.js"></script>
   <script type="text/javascript" src="/jquery/jqueryTabledit/jquery.tabledit.js"></script>
   <script type="text/javascript" src="/jquery/jquery.js"></script>
   <script type="text/javascript" src="/jquery/jquery-2.js"></script>
   <script type="text/javascript" src="/jquery/jquery-5.js"></script>
   <script type="text/javascript" src="/jquery/table-edit-02.js"></script>
   <script type="text/javascript" src="/jquery/ajax-jquery.js"></script>
   <script type="text/javascript" src="/jquery/ajax-query-02.js"></script>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />


@endsection

