 
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
    
    
    <span class="dropspanCurrent" >Human Resource Management</span></br>
    <div class="navbar2">
    
        <ul style="margin-top: 10px;">
            <a href="/officers/HRM" id="allEmployeeA">All Employees</a>
            <a href="/officers/HRM/teachers" id="teachersA">Teachers</a>
            <a href="/officers/HRM/admin staffs" id="adminStaffA">Administrator Staffs</a>
            <a href="/officers/HRM/new employee" class="abutton"  id="newEmployeeA">New Employee</a>

            <a href="/clearance/administrator staff" class="abutton"  id="reqCA" style="margin-left: 5px;"> Request Clearance</a>
            <a href="/HRM/clearance/list" class="abutton"  id="viewCA" style="margin-left: 5px;">View Clearance</a>
        </ul>
        
    </div>
 
    <section id="columns">
        <div class="body-container">

            <div class="column1">
                <!-- content place -->

                    <div class="empLists">

                        <div style="margin-bottom:20px;">
                            <div class="searchDiv" >  
                                
                                <form method="get" action="/registrar/clearance/search" class="searchForm">
                                
                                    @csrf
                                    <input type="search" id="search" placeholder="Search here" name="key_word"class="searchit">
                                    <button type="submit" class="search-btn">Search</button>
                                </form>
                                
                                <div class="abtnCont">
                                    <a href="/registrar/print all" class="abtn"  id="printAllA">Print All</a>
                                </div>

                            </div>

                        </div>
                        
                        <div class="container" style=" overflow-x:auto; overflow-y:auto;">
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        @csrf
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>View</th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>Year</th>
                                                    <th>Catagory</th>
                                                    <th>College</th>
                                                    <th>Department</th>
                                                    <th>Reason</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                        
                                            <tbody>

                                                @foreach ($clearance as $user)
                                                    
                                                    <tr>
                                                        <td></td>
                                                        <td> <a href="/clearance/export pdf/{{ $user->catagory }}/{{ $user->ID_no }}">View</a></td>
                                                        <td><a class="btn btn-xs btn-success" href="/HRM/clearance/pdf/{{ $user->program }}/{{ $user->ID_no }}">View</a></td>
                                                        <td>{{ $user->ID_no }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->gender }}</td>
                                                        <td>{{ $user->year }}</td>
                                                        <td>{{ $user->catagory }}</td>
                                                        <td>{{ $user->college }}</td>
                                                        <td>{{ $user->department }}</td>
                                                        <td>{{ $user->reason }}</td>
                                                        <td>
                                                            <a class="btn btn-xs btn-success" data-id="{{ $user->ID_no }}">Edit</a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-xs btn-danger" href="/registrar/clearance/delete/{{ $user->program }}/{{ $user->ID_no }}">Delete</a>
                                                        </td>
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

        </div> 
    </section>


@endsection

@section('bottomScripts')

    <!-- script for print
    <script>
        // togglePrint()
        function toggleText(){
            var x = document.getElementById("sDiv2");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
         
    </script> -->

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

@endsection

@section('headerLinks')
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        

    <script type="text/javascript" src="/jquery/jquery-tabledit/jquery.tabledit.min.js"></script>
    <script type="text/javascript" src="/jquery/jquery-tabledit/jquery.tabledit.js"></script>
    <script type="text/javascript" src="/jquery/jquery.js"></script>
    <script type="text/javascript" src="/jquery/jquery-2.js"></script>
    <script type="text/javascript" src="/jquery/jquery-5.js"></script>
    <script type="text/javascript" src="/jquery/table-edit-02.js"></script>
    <script type="text/javascript" src="/jquery/ajax-jquery.js"></script>
    <script type="text/javascript" src="/jquery/ajax-query-02.js"></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->


@endsection


