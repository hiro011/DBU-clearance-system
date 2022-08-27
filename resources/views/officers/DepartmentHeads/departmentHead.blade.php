 
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
                
    <span class="dropspanCurrent" >{{ $LoggedDep['department']}} Department</span></br>
    <div class="navbar2">
    
        <ul style="margin-top: 5px;">
            <a href="/officers/department head" id="allStudA">All Student</a>
            <a href="/officers/departments/regular students" id="regStudA">Regular Student</a>
            <a href="/officers/departments/extension students" id="extnStudA">Extension Student</a>
            <a href="/officers/departments/distance students" id="disStudA">Distance Student</a>
            <a href="/departments/checkout/list" class="abutton"  id="viewCA" style="margin-left: 5px;">View Checkouts</a>

            <a href="/officers/departments/add checkout" class="abutton"  id="newStudA">Add Checkout</a>
            <a href="/clearance/administrator staff" class="abutton"  id="reqCA" style="margin-left: 5px;">Request Clearance</a>
        </ul>
        

    </div>
 
    <section id="columns">
        <div class="body-container">

            <div class="column1">
                <!-- content place -->

                @if($new === false)
                    @if($all === true)
                        <style>
                            #allStudA{
                            background-color: blue;
                            color: white;
                            }
                            #allStudA:hover{
                                color: black; 
                                opacity: 0.8;
                            }
                        </style>
                    @endif
                    @if($reg === true)
                        <style>
                            #regStudA{
                            background-color: blue;
                            color: white;
                            }
                            #regStudA:hover{
                                color: black; 
                                opacity: 0.8;
                            }
                        </style>
                    @endif
                    @if($extn === true)
                        <style>
                            #extnStudA{
                            background-color: blue;
                            color: white;
                            }
                            #extnStudA:hover{
                                color: black; 
                                opacity: 0.8;
                            }
                        </style>
                    @endif
                    @if($dis === true)
                        <style>
                            #disStudA{
                            background-color: blue;
                            color: white;
                            }
                            #disStudA:hover{
                                color: black; 
                                opacity: 0.8;
                            }
                        </style>
                    @endif
                    @if($checks === true)
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
                    @endif

                    <div class="studLists">

                        <div style="margin-bottom:20px;">
                            <div class="searchDiv" >  
                                @if($all === true)
                                <form method="get" action="/officers/departments/search all" class="searchForm">
                                @endif
                                @if($reg === true)
                                <form method="get" action="/officers/departments/search regular" class="searchForm">
                                @endif
                                @if($extn === true)
                                <form method="get" action="/officers/departments/search extension" class="searchForm">
                                @endif
                                @if($dis === true)
                                <form method="get" action="/officers/departments/search distance" class="searchForm">
                                @endif
                                @if($checks === true)
                                <form method="get" action="/departments/checkout/search" class="searchForm">
                                @endif
                                
                                @csrf
                                    <input type="search" id="search" placeholder="Search here" name="key_word"class="searchit">
                                    <button type="submit" class="search-btn">Search</button>
                                </form>

                                
                            </div>
 
                        </div>
                        
                        @if($checks === false)
                        <div class="container" style=" overflow-x:auto; overflow-y:auto;">
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        @csrf
                                        <table id="editable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>Year</th>
                                                    <th>program</th>
                                                    <th>College</th>
                                                    <th>Department</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                   
                                                </tr>
                                            </thead>
                                        
                                            <tbody>

                                                @foreach ($studTable as $user)
                                                    
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $user->ID_no }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->gender }}</td>
                                                        <td>{{ $user->year }}</td>
                                                        <td>{{ $user->program }}</td>
                                                        <td>{{ $user->college }}</td>
                                                        <td>{{ $user->department }}</td>
                                                        <td>{{ $user->status }}</td>
                                                            <td>
                                                                <a class="deleteProduct btn btn-xs btn-success" data-id="{{ $user->ID_no }}">Edit</a>
                                                            </td>
                                                    </tr>

                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($checks === true)
                        <div class="container" style=" overflow-x:auto; overflow-y:auto;">
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        @csrf
                                        <table id="editable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>Year</th>
                                                    <th>program</th>
                                                    <th>Items</th>
                                                    <th>Add by</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                        
                                            <tbody>

                                                @foreach ($studTable as $user)
                                                    
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $user->ID_no }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->gender }}</td>
                                                        <td>{{ $user->year }}</td>
                                                        <td>{{ $user->catagory }}</td>
                                                        <td>{{ $user->item_name }}</td>
                                                        <td>{{ $user->add_by }}</td>
                                                        <td>
                                                            <a class="deleteProduct btn btn-xs btn-success" data-id="{{ $user->ID_no }}">Edit</a>
                                                        </td>
                                                        <td>
                                                            <a class="deleteProduct btn btn-xs btn-danger" href="/registrar/delete/{{ $user->program }}/{{ $user->ID_no }}">Delete</a>
                                                        </td>
                                                    </tr>

                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                    </div>
                @endif

                @if($new === true)
                    <style>
                        .inputfield select{
                            cursor: pointer;
                        }
                        .inputfield1{
                            display: none;
                            cursor: pointer;
                        }

                        /* Add an active class to the active button/link */
                        #newStudA {
                            background-color: blue;
                            color: white;
                        }
                        #newStudA:hover {
                            color: black;
                            opacity: 0.8;
                        }
                        .dropdown-container{
                            display: block;
                        }

                    </style> 

                    <div class="wrapper">
                        <div class="title">Assign Items</div>
                        
                        <div class="form">

                            @if (Session::get('success'))
                                <div class="alert-success">
                                    {{ Session::get('success')}}
                                </div>
                            @endif
                            @if (Session::get('fail'))
                                <div class="alert-danger">
                                    {{ Session::get('fail')}}
                                </div>
                            @endif

                            <form action="{{ route('newUsers.saveDepUser') }}" method="POST">

                                @csrf
                                <div class="inputfield">
                                    <label>ID</label> </br>
                                    <input type="text" class="input" name="id" placeholder="Enter ID" 
                                        value="{{ old('id') }}"> </br>
                                    <span style="color:red;">@error('id'){{ $message }} @enderror</span>
                                </div>  
                                 
                                <div class="inputfield">
                                    <label>Item Name</label> </br>
                                    <input type="text" class="input" name="item_name" placeholder="Enter item name" 
                                        value="{{ old('item_name') }}"> </br>
                                    <span style="color:red;">@error('item_name'){{ $message }} @enderror</span>
                                </div>  
                                
                                <div class="inputfield" style="margin-top: 20px;">
                                    <input type="submit" value="Save" class="btn">
                                </div>
                            </form>
                        </div>
                    </div>	
                @endif

            </div>

        </div> 
    </section>


@endsection

@section('bottomScripts')

    <!-- script for delete -->
    <script>
        var msg = '{{ Session::get('alert')}}';
        var exist = '{{ Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>

    <!-- script for select -->
    <script>
        $(document).ready(function(){
            $("#list").on('change', function(){
                $(".inputfield1").hide();
                $("#" + $(this).val()).fadeIn(1);
            }).change();
        });

        $(document).ready(function(){
            $("#select_c").on('change', function(){
                $(".chooseField1").hide();
                $("#" + $(this).val()).fadeIn(1);
            }).change();
        });
        $(document).ready(function(){
            $("#college").on('change', function(){
                $(".inputfield1").hide();
                $("#" + $(this).val()).fadeIn(1);
            }).change();
        });

        function toggleText(){
            var x = document.getElementById("sDiv2");
            var es = document.getElementById("editStatus");
            if (x.style.display === "none") {
                x.style.display = "block";
                es.style.background = "blue";
            } else {
                x.style.display = "none";
                es.style.background = "#94b5d8";
            }
        }
    </script>

    <!-- table edit -->
    <script type="text/javascript">
        $(document).ready(function(){
            
            $.ajaxSetup({
                headers:{
                    'X-CSRF-Token' : $("input[name=_token]").val()
                }
            });

            $('#editable').Tabledit({
            url:'{{ route("tabledit.registrarTableEdit") }}',
            dataType:"json",
            columns:{
                identifier:[0, 'id'],
                identifier:[1, 'ID_no'], 
                editable:[[2, 'name'], [3, 'gender', '{"Male":"Male", "Female":"Female", "Unspecified":"Unspecified"}'],
                [4, 'year'], [5, 'program', '{"Regular":"Regular", "Extension":"Extension", "Distance":"Distance"}'], [6, 'college'], 
                [7, 'department'], [8, 'status', '{"On-Class":"On-Class", "Dismissed":"Dismissed", "Withdrow":"Withdrow", "Transfered":"Transfered"}']]
            },
            // buttons: {
            //     edit: {
            //         class: 'btn btn-sm btn-secondary',
            //         html: '<span class="fas fa-pencil-alt"></span>',
            //         action: 'edit'

            //         "type": "row",
            //         "icon": "pencil-alt",
            //         "class": "is-warning",
            //         "event": "edit"
            //     }
            //     edit: {
            //         class: 'btn btn-sm btn-secondary',
            //         html: '<span class="fas fa-trash"></span>',
            //         action: 'delete'
            //     }
            // },
             

            restoreButton:false,
            onSuccess:function(data, textStatus, jqXHR)
            {
                if(data.action == 'delete')
                {
                $('#'+data.id).remove();
                }
            }
            });

        });  
    </script>

    <!-- script for up down key options -->
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

@section('headerLinks')

    <!-- <link rel="stylesheet" href="/css/bootstrap-4.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
    <!-- <script type="text/javascript" src="/jquery/jqueryTabledit/jquery.tabledit.min.js"></script> -->
    <!-- <script type="text/javascript" src="/jquery/jqueryTabledit/jquery.tabledit.js"></script> -->

    <script type="text/javascript" src="/jquery/ajax-query-02.js"></script>

    

@endsection


