@extends('Layouts.navLayout')

@section('content')

    <style> 
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
      .dropdown-container{
                display: block;
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
            padding-left: 25%;
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
        .searchDiv{
            display: flex; 
            float: center;
            width: 100vh;
            margin-left: 10%;
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
                    
                
    <span class="dropspanCurrent" >Admin</span></br>
    <div class="navbar2 dropdown-container" style="background-color: none;">
        <ul >
            <a href="/admin/dashboard" id="adminsA">Users</a>
            <a href="/admin/new user" id="newA">Add User</a>
        </ul>
    </div>
 
    <section id="columns">
        <div class="body-container">

            <div class="column1">
                <!-- content place -->
            
            @if($users === true)
              <style> 
                #adminsA{
                    background-color: blue;
                    color: white;
                }
                #adminsA:hover{
                    opacity: 0.8;
                    color: black;
                }

              </style>

              <div class="userLists">

                <div style="margin-bottom:20px;">
                    <div class="searchDiv" >  
                        <form method="get" action="/admin/users/search" class="searchForm">
                          @csrf
                          <input type="search" id="search" placeholder="Search here" name="key_word"class="searchit">
                          <button type="submit" class="search-btn">Search</button>
                        </form>

                    </div>
                </div>
                
                <div class="container" style=" overflow-x:auto; overflow-y:auto;">
                  <br />
                  <div class="panel panel-default">
                      <div class="panel-heading"></div>
                      <div class="panel-body">
                          <div class="table-responsive">
                              @csrf
                              <table id="editable" class="table table-bordered table-striped">
                                  <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Add by</th>
                                        <th>Created Date</th>
                                    </tr>
                                    </thead>
                                    
                                    <tbody>

                                        @foreach ($userLoginTable as $user)
                                            
                                          <tr>
                                            <td></td>
                                            <td>{{ $user->ID_no }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->add_by }}</td>
                                            <td>{{ $user->created_at }}</td>

                                          </tr>

                                        @endforeach

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                </div>
              </div>

            @endif

            @if($new === true)
                <style>
                #newA {
                    background-color: blue;
                    color: white;
                }
                </style>

                <div class="wrapper">
                    <div class="title">Add New User</div>

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
                        
                        <form action="{{ route('newUsers.saveUser') }}" method="post" autocomplete="on">

                            @csrf
                            <div class="inputfield">
                                <label>ID</label> </br>
                                <input type="text" class="input" name="ID_no" placeholder="Enter ID" 
                                    value="{{ old('ID_no') }}"> </br>
                                <span style="color:red;">@error('ID_no'){{ $message }} @enderror</span>
                            </div>  
                            <div class="inputfield">
                                <label>Name</label> </br>
                                <input type="text" class="input" name="name" placeholder="Enter Name" 
                                    value="{{ old('name') }}"> </br>
                                <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                            </div>  
                                
                            <div class="inputfield">
                                <label>Email</label></br>
                                <input type="text" class="input" name="email" placeholder="Username" value="{{ old('email') }}"></br>
                                <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                            </div>  

                            <div class="inputfield">
                                <label>Password</label></br>
                                <input type="password" class="input" name="password" placeholder="password"
                                    value="{{ old('password') }}"></br>
                                <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                            </div> 
                            <div class="inputfield">
                                <label>Role</label></br>
                                <div class="custom_select">
                                    <select id="role" name="role">
                                        <option selected disabled>Select</option>

                                        <option value="Admin" @if(old('role') === 'Admin') selected @endif>Admin</option>
                                        <option value="HRM" @if(old('role') === 'HRM') selected @endif>HRM</option>
                                        <option value="Library" @if(old('role') === 'Library') selected @endif>Library</option>
                                        <option value="Registrar" @if(old('role') === 'Registrar') selected @endif>Registrar</option>
                                        <option value="Dining" @if(old('role') === 'Dining') selected @endif>Dining</option>
                                        <option value="Department-Head" @if(old('role') === 'Department-Head') selected @endif>Department-Head</option>
                                        <option value="StudResidence" @if(old('role') === 'StudResidence') selected @endif>StudResidence</option>
                                        <option value="EngCollege-Finance" @if(old('role') === 'EngCollege-Finance') selected @endif>EngCollege-Finance</option>
                                        <option value="Anti-Corruption" @if(old('role') === 'Anti-Corruption') selected @endif>Anti-Corruption</option>
                                        <option value="Cashier" @if(old('role') === 'Cashier') selected @endif>Cashier</option>
                                        <option value="Finance" @if(old('role') === 'Finance') selected @endif>Finance</option>
                                        <option value="ICT-Property" @if(old('role') === 'ICT-Property') selected @endif>ICT Property</option>
                                        <option value="Research" @if(old('role') === 'Research') selected @endif>Research</option>
                                        <option value="General-Service" @if(old('role') === 'General-Service') selected @endif>General-Service</option>
                                        <option value="Property-Office" @if(old('role') === 'Property-Office') selected @endif>Property-Office</option>
                                        <option value="User" @if(old('role') === 'User') selected @endif>User</option>
                                    </select></br>
                                    <span style="color:red;">@error('role'){{ $message }} @enderror</span>

                                </div>
                            </div> 
                            
                            <div class="inputfield">
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

    <script>
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
            url:'{{ route("tabledit.adminsTableEdit") }}',
            dataType:"json",
            columns:{
                identifier:[0, 'id'],
                identifier:[1, 'ID_no'], 
                editable:[[2, 'name'], [3, 'email'],[4, 'role', '{"Admin":"1", "User":"2", "Officer":"3"}']], 
                identifier:[[5, 'add_by'], [6, 'college']] 
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

  <!-- script for down key to go to next inputfield -->
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
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

    <script type="text/javascript" src="/jquery/jquery-tabledit/jquery.tabledit.min.js"></script>
    <script type="text/javascript" src="/jquery/jquery-tabledit/jquery.tabledit.js"></script>
    <script type="text/javascript" src="/jquery/jquery.js"></script>
    <script type="text/javascript" src="/jquery/jquery-2.js"></script>
    <script type="text/javascript" src="/jquery/jquery-5.js"></script>
    <script type="text/javascript" src="/jquery/table-edit-02.js"></script>
    <script type="text/javascript" src="/jquery/ajax-jquery.js"></script>
    <script type="text/javascript" src="/jquery/ajax-query-02.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />


@endsection
 



