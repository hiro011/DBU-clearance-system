
@extends('Layouts.navLayout')

@section('content')
 
    <style>
      
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
            .sticky {
                width: 69.5%;
            }
            table{
                display: block;
                height: 650px;
                overflow-y:auto;
            }
            .column1{
                padding: 0;
                height: 100vh;
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
        .searchDiv2 select{
            /* width: 80px; */
            height: 40px;
            min-width: 130px;
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
        @media screen and (max-width:420px) {
            
            body {
                padding: 0;
                font-family: "Times New Roman", Times, serif;
            }
            .sticky {
                width: 91.5%;
            }
            table{
                display: block;
                height: 650px;
                overflow-y:auto;
            }
            .column1{
                padding: 0;
                height: 100vh;
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
        .searchDiv2 select{
            /* width: 80px; */
            height: 40px;
            min-width: 130px;
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
                
    <span class="dropspanCurrent" >Admin</span></br>
    <div class="navbar2 dropdown-container" style="background-color: none;">
        <ul >
            <a href="/admin/dashboard" id="adminsA">Users</a>
            <a href="/admin/new user" id="userA">Add User</a>
        </ul>
    </div>
 
    <section id="columns">
        <div class="body-container">

            <div class="column1">
                <!-- content place -->

                <!-- <style> 
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
                        
                    table{
                        padding-left: 20px;
                        padding-right: 0;
                    }
                    .sticky {
                        width: 74.8%;
                    }
                    footer{
                        width: 98%;
                    }

                    .column1{
                        width: 95.5%;
                        padding: 10px 20px;
                        height: 100vh;
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
                        -->
                
 
                <div id="sDiv2" class="searchDiv2" >  
                    <form method="POST" action="{{ route('registrar.adminUpdateStatus') }}"  class="searchForm">
                        @csrf
                        <div class="chooseField">
                            <label>Select</label></br>
                            <div class="custom_select">
                                <select id="select_c" name="select_c" onchange="select_c(this)">
                                    <option value="year"  @if(old('select_c') === 'year') selected @endif>Year</option>
                                    <option value="program"  @if(old('select_c') === 'program') selected @endif>Program</option>
                                    <option value="college"  @if(old('select_c') === 'college') selected @endif>College</option>
                                </select></br>
                                <span style="color:red;">@error('select'){{ $message }} @enderror</span>

                            </div>
                        </div>

                        <div id="year" class="chooseField1">
                            <div class="chooseField">
                                <label>Year</label> </br>
                                <input type="text" class="input" name="where" placeholder="Enter year" value="{{ old('where') }}"> </br>
                            </div>
                        </div>

                        <div id="program" class="chooseField1">
                            <div class="chooseField">
                                <label>Program</label></br>
                                <div class="custom_select">
                                    <select id="where" name="where">
                                        <option selected disabled>Select</option>

                                        <option value="Regular"  @if(old('where') === 'Regular') selected @endif>Regular</option>
                                        <option value="Extension"  @if(old('where') === 'Extension') selected @endif>Extension</option>
                                        <option value="Distance"  @if(old('where') === 'Distance') selected @endif>Distance</option>
                                    </select></br>

                                </div>
                            </div>
                        </div>

                        <div id="college" class="chooseField1">
                            <div class="chooseField">
                            <label>College</label></br>
                                <div class="custom_select">
                                    <select id="college" name="where">
                                        <option selected disabled>Select</option>

                                        <option value="Engineering"  @if(old('college') === 'Engineering') selected @endif>Engineering</option>
                                        <option value="Computing"  @if(old('college') === 'Computing') selected @endif>Computing</option>
                                        <option value="Freshman"  @if(old('college') === 'Freshman') selected @endif>Freshman</option>
                                        <option value="Law"  @if(old('college') === 'Law') selected @endif>Law</option>
                                        <option value="Education" @if(old('college') === 'Education') selected @endif>Education</option>
                                        <option value="Social-Science" @if(old('college') === 'Social-Science') selected @endif>Social-Science</option>
                                        <option value="Business" @if(old('college') === 'Business') selected @endif>Business</option>
                                        <option value="Computational" @if(old('college') === 'Computational') selected @endif>Computational</option>
                                        <option value="Agriculture" @if(old('college') === 'Agriculture') selected @endif>Agriculture</option>
                                    </select></br>

                                </div>
                            </div>
                        </div>

                        <div class="chooseField">
                            <label>New Status</label></br>
                            <div class="custom_select">
                                <select id="status" name="status">
                                    <option selected disabled>Select</option>
                                    <option value="Dismissed"  @if(old('status') === 'Dismissed') selected @endif>Dismissed</option>
                                    <option value="On-Class"  @if(old('status') === 'On-Class') selected @endif>On Class</option>
                                    <option value="Transfered"  @if(old('status') === 'Transfered') selected @endif>Transfered</option>
                                    <option value="Withdraw"  @if(old('status') === 'Withdraw') selected @endif>Withdraw</option>
                                </select></br>
                            </div>
                        </div>

                        <button type="submit" class="search-btn">Change</button>
                    </form>
                    
                </div>
                
            </div>

        </div> 
    </section>

@endsection


