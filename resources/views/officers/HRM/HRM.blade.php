 
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
        input[type=date]{
            cursor: pointer;
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
            padding-right: 15%;
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

                @if($new === false)
                    @if($all === true)
                        <style>
                            #allEmployeeA{
                            background-color: blue;
                            color: white;
                            }
                            #allEmployeeA:hover{
                                color: black; 
                                opacity: 0.8;
                            }
                        </style>
                    @endif
                    @if($teachers === true)
                        <style>
                            #teachersA{
                            background-color: blue;
                            color: white;
                            }
                            #teachersA:hover{
                                color: black; 
                                opacity: 0.8;
                            }
                        </style>
                    @endif
                    @if($adminStaffs === true)
                        <style>
                            #adminStaffA{
                            background-color: blue;
                            color: white;
                            }
                            #adminStaffA:hover{
                                color: black; 
                                opacity: 0.8;
                            }
                        </style>
                    @endif
                     
                    <div class="empLists">

                        <div style="margin-bottom:20px;">
                            <div class="searchDiv" >  
                                @if($all === true)
                                <form method="get" action="/officers/HRM/search all" class="searchForm">
                                @endif
                                @if($teachers === true)
                                <form method="get" action="/officers/HRM/search teachers" class="searchForm">
                                @endif
                                @if($adminStaffs === true)
                                <form method="get" action="/officers/HRM/search adminstaffs" class="searchForm">
                                @endif
                                 
                                    @csrf
                                    <input type="search" id="search" placeholder="Search here" name="key_word"class="searchit">
                                    <button type="submit" class="search-btn">Search</button>
                                </form>

                                @if($all === false)
                                <div class="abtnCont">
                                    <button id="editStatus" class="abtn" onclick="toggleText()">Edit Status</button>
                                </div>
                                @endif
                                
                            </div>

                            <div id="sDiv2" class="searchDiv2" >  
                                @if($teachers === true)
                                <form method="POST" action="{{ route('HRM.teacherUpdateStatus') }}"  class="searchForm">
                                @endif
                                @if($adminStaffs === true)
                                <form method="POST" action="{{ route('HRM.adminStaffUpdateStatus') }}"  class="searchForm">
                                @endif
                                    @csrf
                                    <div class="chooseField">
                                        <label>Select</label></br>
                                        <div class="custom_select">
                                            <select id="select_c" name="select_c" onchange="select_c(this)">
                                                <option value="employee_type"  @if(old('select_c') === 'employee_type') selected @endif>Employee Type</option>
                                                <option value="college"  @if(old('select_c') === 'college') selected @endif>College</option>
                                                <option value="status"  @if(old('select_c') === 'status') selected @endif>Status</option>
                                            </select></br>
                                            <span style="color:red;">@error('select'){{ $message }} @enderror</span>

                                        </div>
                                    </div>

                                    <div id="employee_type" class="chooseField1">
                                        <div class="chooseField">
                                            <label>Employee Type</label></br>
                                            <div class="custom_select">
                                                <select id="where" name="where">
                                                    <option selected disabled>Select</option>
                                                    <option value="Teacher"  @if(old('where') === 'Teacher') selected @endif>Teacher</option>
                                                    <option value="Admin_Staff"  @if(old('where') === 'Admin_Staff') selected @endif>Admin Staff</option>
                                                </select></br>

                                            </div>
                                        </div>
                                    </div>

                                    <div id="status" class="chooseField1">
                                        <div class="chooseField">
                                            <label>Status</label></br>
                                            <div class="custom_select">
                                                <select id="where" name="where">
                                                    <option selected disabled>Select</option>
                                                    <option value="On-work"  @if(old('where') === 'On-work') selected @endif>On Work</option>
                                                    <option value="Transfered"  @if(old('where') === 'Transfered') selected @endif>Transfered</option>
                                                    <option value="Dismissed"  @if(old('where') === 'Dismissed') selected @endif>Dismissed</option>   
                                                </select></br>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="college" class="chooseField1">
                                        <div class="chooseField">
                                        <label>College/Directorate</label></br>
                                            <div class="custom_select">
                                                <select id="where" name="where">
                                                    <option selected disabled>Select</option>
                                                    <option value="Human-Resource-Directorate"  @if(old('where') === 'Human-Resource-Directorate') selected @endif>Human Resource Directorate</option>
                                                    <option value="Finance-Directorate"  @if(old('where') === 'Finance-Directorate') selected @endif>Finance Directorate</option>
                                                    <option value="Library-Directorate"  @if(old('where') === 'Library-Directorate') selected @endif>Library Directorate</option>

                                                    <option value="Engineering"  @if(old('where') === 'Engineering') selected @endif>Engineering</option>
                                                    <option value="Computing"  @if(old('where') === 'Computing') selected @endif>Computing</option>
                                                    <option value="Freshman"  @if(old('where') === 'Freshman') selected @endif>Freshman</option>
                                                    <option value="Law"  @if(old('where') === 'Law') selected @endif>Law</option>
                                                    <option value="Education" @if(old('where') === 'Education') selected @endif>Education</option>
                                                    <option value="Social-Science" @if(old('where') === 'Social-Science') selected @endif>Social-Science</option>
                                                    <option value="Business" @if(old('where') === 'Business') selected @endif>Business</option>
                                                    <option value="Computational" @if(old('where') === 'Computational') selected @endif>Computational</option>
                                                    <option value="Agriculture" @if(old('where') === 'Agriculture') selected @endif>Agriculture</option>
                                                </select></br>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="chooseField">
                                        <label>New Status</label></br>
                                        <div class="custom_select">
                                            <select id="status2" name="status">
                                                <option selected disabled>Select</option>
                                                <option value="On-work"  @if(old('status') === 'On-work') selected @endif>On Work</option>
                                                <option value="Transfered"  @if(old('status') === 'Transfered') selected @endif>Transfered</option>
                                                <option value="Dismissed"  @if(old('status') === 'Dismissed') selected @endif>Dismissed</option>
                                            </select></br>
                                        </div>
                                    </div>

                                    <button type="submit" class="search-btn">Change</button>
                                </form>
                                
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

                                        @if($all === true)
                                            <style>
                                                .column1{
                                                    width: 100%;
                                                    padding: 10px 10px;
                                                }
                                                .container{
                                                    padding-right: 11%;
                                                    padding-left: 2px;
                                                }
                                                table{
                                                    font-size: 13px;
                                                }
                                            </style>
                                            <table id="editable" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Gender</th>
                                                        <th>Birth Date</th>
                                                        <th>Age</th>
                                                        <th>Employee Type</th>
                                                        <th>Guarentor Name</th>
                                                        <th>Guarentor Phone</th>
                                                        <th>Level of Education</th>
                                                        <th>Job Title</th>
                                                        <th>Salery</th>
                                                        <th>Created Date</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>

                                                    @foreach ($Tables as $user)
                                                        <tr>
                                                            <td></td>
                                                            <td>{{ $user->ID_no }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->gender }}</td>
                                                            <td>{{ $user->birth_date }}</td>
                                                            <td>{{ $user->age }}</td>
                                                            <td>{{ $user->employee_type }}</td>
                                                            <td>{{ $user->guarentor_name }}</td>
                                                            <td>{{ $user->guarentor_phone }}</td>
                                                            <td>{{ $user->level_of_education }}</td>
                                                            <td>{{ $user->job_title }}</td>
                                                            <td>{{ $user->salary }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                                                            <td>
                                                                <a class="deleteProduct btn btn-xs btn-success">Edit</a>
                                                            </td>
                                                            <td>
                                                                <a class="deleteProduct btn btn-xs btn-danger" href="/HRM/delete/{{ $user->employee_type }}/{{ $user->ID_no }}">Delete</a>
                                                            </td>
                                                        </tr>

                                                    @endforeach
                                                
                                                </tbody>
                                            </table>
                                        @endif
                                        @if($all === false)
                                            <table id="editable" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Gender</th>
                                                        <th>College</th>
                                                        <th>Department</th>
                                                        <th>Status</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>

                                                    @foreach ($Tables as $user)

                                                        <tr>
                                                            <td></td>
                                                            <td>{{ $user->ID_no }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->gender }}</td>
                                                            <td>{{ $user->college }}</td>
                                                            <td>{{ $user->department }}</td>
                                                            <td>{{ $user->status }}</td>
                                                            <td>
                                                                <a class="deleteProduct btn btn-xs btn-success">Edit</a>
                                                            </td>
                                                            <td>
                                                                <a class="deleteProduct btn btn-xs btn-danger" href="/HRM/delete/{{ $user->name }}/{{ $user->ID_no }}">Delete</a>
                                                            </td>
                                                        </tr>

                                                    @endforeach
                                                
                                                    
                                                </tbody>
                                            </table>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif

                @if($new === true)
                    <style>
                        .inputfield select{
                            cursor: pointer;
                        }
                        .inputfield1, .inputfield002{
                            display: none;
                            cursor: pointer;
                        }

                        /* Add an active class to the active button/link */
                        #newEmployeeA {
                            background-color: blue;
                            color: white;
                        }
                        #newEmployeeA:hover {
                            color: black;
                            opacity: 0.8;
                        }
                    
                    </style> 

                    <div class="wrapper">
                        <div class="title">Add New Employee</div>
                        
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

                            <form action="{{ route('newUsers.saveEmployee') }}" method="post">

                                @csrf
                                <div class="inputfield">
                                    <label>Employee Type</label></br>
                                    <div class="custom_select">
                                        <select id="employee_type" name="employee_type">
                                            <option selected disabled>Select</option>
                                            <option value="Teacher"  @if(old('program') === 'Teacher') selected @endif>Teacher</option>
                                            <option value="Admin_Staff"  @if(old('program') === 'Admin_Staff') selected @endif>Administrator Staff</option>
                                        </select></br>
                                        <span style="color:red;">@error('employee_type'){{ $message }} @enderror</span>

                                    </div>
                                </div>
                                
                                <div class="inputfield">
                                    <label>ID</label> </br>
                                    <input type="text" class="input" name="id" placeholder="Enter ID" value="{{ old('id') }}"> </br>
                                    <span style="color:red;">@error('id'){{ $message }} @enderror</span>
                                </div>  
                                <div class="inputfield">
                                    <label>Name</label> </br>
                                    <input type="text" class="input" name="name" placeholder="Enter Name" value="{{ old('name') }}"> </br>
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>  
                                <div class="inputfield">
                                    <label>Gender</label></br>
                                    <div class="custom_select">
                                        <select id="gender" name="gender">
                                            <option selected disabled>Select</option>

                                            <option value="Male"  @if(old('gender') === 'Male') selected @endif>Male</option>
                                            <option value="Female"  @if(old('gender') === 'Female') selected @endif>Female</option>
                                            <option value="unspecified"  @if(old('gender') === 'unspecified') selected @endif>Unspecified</option>
                                        </select></br>
                                        <span style="color:red;">@error('gender'){{ $message }} @enderror</span>

                                    </div>
                                </div> 
                                <div class="inputfield">
                                    <label>Birth Date</label> </br>
                                    <input type="date" id="start" class="input" name="birth_date" value="{{ old('birth_date') }}"></br>
                                    <span style="color:red;">@error('birth_date'){{ $message }} @enderror</span>
                                </div>  
                                <div class="inputfield">
                                    <label>Guarentor Name</label> </br>
                                    <input type="text" class="input" name="guarentor_name" placeholder="Enter guarentor name" value="{{ old('guarentor_name') }}"> </br>
                                    <span style="color:red;">@error('guarentor_name'){{ $message }} @enderror</span>
                                </div>  
                                <div class="inputfield">
                                    <label>Guarentor Phone</label> </br>
                                    <input type="text" class="input" name="guarentor_phone" placeholder="Enter guarentor phone" value="{{ old('guarentor_phone') }}"> </br>
                                    <span style="color:red;">@error('guarentor_phone'){{ $message }} @enderror</span>
                                </div>  
                                <div class="inputfield">
                                    <label>Level of Education</label></br>
                                    <div class="custom_select">
                                        <select id="status" name="level_of_education">
                                            <option value="none"  @if(old('level_of_education') === 'none') selected @endif>None</option>
                                            <option value="Class_1-4"  @if(old('level_of_education') === 'Class_1-4') selected @endif>Class 1-4</option>
                                            <option value="Class_5-8"  @if(old('level_of_education') === 'Class_5-8') selected @endif>Class 5-8</option>
                                            <option value="High-school"  @if(old('level_of_education') === 'High-school') selected @endif>High-school</option>
                                            <option value="Deploma"  @if(old('level_of_education') === 'Deploma') selected @endif>Deploma</option>
                                            <option value="Bachelor"  @if(old('level_of_education') === 'Bachelor') selected @endif>Bachelor</option>
                                            <option value="Master"  @if(old('level_of_education') === 'Master') selected @endif>Master</option>
                                            <option value="PHD"  @if(old('level_of_education') === 'PHD') selected @endif>PHD</option>
                                            <option value="Doctoral"  @if(old('level_of_education') === 'Doctoral') selected @endif>Doctoral</option>
                                        </select></br>
                                        <span style="color:red;">@error('level_of_education'){{ $message }} @enderror</span>

                                    </div>
                                </div>  
                                <div class="inputfield">
                                    <label>Job Title</label> </br>
                                    <input type="text" class="input" name="job_title" placeholder="Enter jop title" value="{{ old('job_title') }}"> </br>
                                    <span style="color:red;">@error('job_title'){{ $message }} @enderror</span>
                                </div>  
                                
                                <div class="inputfield">
                                    <label>Salary</label> </br>
                                    <input type="text" class="input" name="salary" placeholder="Enter salary" 
                                        value="{{ old('salary') }}"> </br>
                                    <span style="color:red;">@error('salary'){{ $message }} @enderror</span>
                                </div>  
                                <div class="inputfield">
                                    <label>Status</label></br>
                                    <div class="custom_select">
                                        <select id="status" name="status">
                                            <option selected disabled>Select</option>
                                            <option value="On-work"  @if(old('status') === 'On-work') selected @endif>On Work</option>
                                            <option value="Transfered"  @if(old('status') === 'Transfered') selected @endif>Transfered</option>
                                            <option value="Dismissed"  @if(old('status') === 'Dismissed') selected @endif>Dismissed</option>
                                        </select></br>
                                        <span style="color:red;">@error('program'){{ $message }} @enderror</span>

                                    </div>
                                </div>  

                                <div>
                                    <div class="inputfield">
                                        <label>College</label></br>
                                        <div class="custom_select">
                                            <select id="college" name="college" onchange="college(this)">
                                                <option selected disabled>Select</option>
                                                <option value="Human-Resource-Directorate"  @if(old('college') === 'Human-Resource-Directorate') selected @endif>Human Resource Directorate</option>
                                                <option value="Finance-Directorate"  @if(old('college') === 'Finance-Directorate') selected @endif>Finance Directorate</option>
                                                <option value="Library-Directorate"  @if(old('college') === 'Library-Directorate') selected @endif>Library Directorate</option>

                                                <option value="Engineering"  @if(old('college') === 'Engineering') selected @endif>College of Engineering</option>
                                                <option value="Computing"  @if(old('college') === 'Computing') selected @endif>College of Computing Sciences</option>
                                                <option value="Freshman"  @if(old('college') === 'Freshman') selected @endif>Freshman College</option>
                                                <option value="Law"  @if(old('college') === 'Law') selected @endif>College of Law</option>
                                                <option value="Education" @if(old('college') === 'Education') selected @endif>College of Education</option>
                                                <option value="Social-Science" @if(old('college') === 'Social-Science') selected @endif>College of Social Science & Humanities</option>
                                                <option value="Business" @if(old('college') === 'Business') selected @endif>College of Business & Economics</option>
                                                <option value="Computational" @if(old('college') === 'Computational') selected @endif>College of Natural & Computational Science</option>
                                                <option value="Agriculture" @if(old('college') === 'Agriculture') selected @endif>College of Agriculture & Natural Resource</option>
                                            </select></br>
                                            <span style="color:red;">@error('college'){{ $message }} @enderror</span>

                                        </div>
                                    </div> 
                                
                                    <div>
                                        <!-- Finance-Directorate -->
                                        <div id="Finance-Directorate" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option value="Finance">Finance Office</option>
                                                        <option value="Cashier">Cashier</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>
                                        
                                        <!-- Library-Directorate -->
                                        <div id="Library-Directorate" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option value="Main-Library">Library </option>
                                                        <option value="Social-Library">Library </option>
                                                        <option value="Law-Library">Library </option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>

                                        <!-- Human-Resource-Directorate -->
                                        <div id="Human-Resource-Directorate" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option selected disabled>Select(Human-Resource-Directorate)</option>
                                                        <option value="Anti Corruption">Anti Corruption </option>
                                                        <option value="Dining">Dining </option>
                                                        <option value="EngCollege Finance">Engineering College Finance </option>
                                                        <option value="General Service">General Service Officer</option>
                                                        <option value="HRM">Human Resource Management </option>
                                                        <option value="ICT Property">ICT Property </option>
                                                        <option value="Property Officer">Property </option>
                                                        <option value="Registrar">Registrar </option>
                                                        <option value="Research">Research </option>
                                                        <option value="StudResidence">Student Residence</option>

                                                    </select>
                                                </div>
                                            </div> 
                                        </div>
                                        
                                        <!--  Freshman College -->
                                        <div id="Freshman" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option selected disabled>Select (Freshman College)</option>
                                                        <option value="Social Freshman">Social Freshman</option>
                                                        <option value="Natural Freshman">Natural Freshman</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div> 

                                        <!-- College of Engineering -->
                                        <div id="Engineering" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option selected disabled>Select (College of Engineering)</option>
                                                        <option value="Electrical Engineering">Electrical & Computer Engineering </option>
                                                        <option value="Mechanical  Engineering">Mechanical  Engineering </option>
                                                        <option value="Civil Engineering">Civil Engineering</option>
                                                        <option value="Chemical Engineering">Chemical Engineering</option>
                                                        <option value="Industrial Engineering">Industrial Engineering</option>
                                                        <option value="CoTM Engineering">CoTM Engineering</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div> 
                                    
                                        <!-- College of Computing -->
                                        <div id="Computing" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option selected disabled>Select (College of Computing)</option>
                                                        <option value="Information Technology">Information Technology </option>
                                                        <option value="Computer Science">Computer Science </option>
                                                        <option value="Information System">Information System</option>
                                                        <option value="Software Engineering">Software Engineering</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- College of Education -->
                                        <div id="Education" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option selected disabled>Select (College of Education)</option>
                                                        <option value="Technical Drawing">Technical Drawing </option>
                                                        <option value="Business Education">Business Education</option>
                                                        <option value="Special need Education">Special need Education</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- College of Law -->
                                        <div id="Law" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option selected disabled>Select (College of Law)</option>
                                                        <option value="Law">Law</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- College of Social Science & Humanities -->
                                        <div id="Social-Science" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option selected disabled>Select (College of Social Science & Humanities)</option>
                                                        <option value="Psychology">Psychology </option>
                                                        <option value="Geography">Geography and Environmental Studies </option>
                                                        <option value="Sociology">Sociology </option>
                                                        <option value="Amharic">Amharic </option>
                                                        <option value="History">History and Heritage Management</option>
                                                        <option value="Civics">Civics and Ethical Studies </option>
                                                        <option value="English">English </option>
                                                        <option value="Journalism">Journalism and Communication </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- College of Agriculture & Natural Science -->
                                        <div id="Agriculture" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option selected disabled>Select (College of Agriculture & Natural Science)</option>
                                                        <option value="Natural Resource Management">Natural Resource Management </option>
                                                        <option value="Animal  Science">Animal  Science </option>
                                                        <option value="Agriculture Economics">Agriculture Economics</option>
                                                        <option value="Horticulture">Horticulture</option>
                                                        <option value="Plant Science">Plant Science</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- College of Natural & Computational -->
                                        <div id="Computational" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option selected disabled>Select (College of Natural & Computational)</option>
                                                        <option value="Statistics">Statistics </option>
                                                        <option value="Physics">Physics </option>
                                                        <option value="Mathematics">Mathematics </option>
                                                        <option value="Sport Science">Sport Science </option>
                                                        <option value="Biology">Biology </option>
                                                        <option value="Biotechnology">Biotechnology </option>
                                                        <option value="Chemistry">Chemistry </option>
                                                        <option value="Geology">Geology </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- College of Business & Economics -->
                                        <div id="Business" class="inputfield1">
                                            <div class="inputfield">
                                                <label>Department</label></br>
                                                <div class="custom_select">
                                                    <select name="department">
                                                        <option selected disabled>Select (College of Business & Economics)</option>
                                                        <option value="Management">Management </option>
                                                        <option value="Acounting">Acounting and Finance </option>
                                                        <option value="Economics">Economics </option>
                                                        <option value="Tourism">Tourism and Heritage Management</option>
                                                        <option value="Logistics">Logistics and Supply Chain Management </option>
                                                        <option value="Marketing">Marketing Management</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <span style="color:red;">@error('department'){{ $message }} @enderror</span>

                                    </div>
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

    <!-- script for select options -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
        $(document).ready(function(){
            $("#employee_type").on('change', function(){
                $(".inputfield002").hide();
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
    <script src="/jquery/jquery-5.js"></script>
    <script src="/jquery/table-edit-02.js"></script>
    <script src="/jquery/ajax-jquery.js"></script>

    <!-- <script type="text/javascript" src="/jquery/jqueryTabledit/jquery.tabledit.min.js"></script> -->
    <!-- <script type="text/javascript" src="/jquery/jqueryTabledit/jquery.tabledit.js"></script> -->

    <!-- <script type="text/javascript" src="/jquery/jquery.js"></script> -->
    <!-- <script type="text/javascript" src="/jquery/jquery-2.js"></script> -->
    <!-- <script type="text/javascript" src="/jquery/jquery-5.js"></script> -->
    <script type="text/javascript" src="/jquery/ajax-query-02.js"></script>


@endsection
