
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
            
            

    <section id="columns">
        <div class="body-container">
            <!-- <div class="column"> -->
            <span class="dropspanCurrent" style="">Admin</span></br>
                
                <!-- <div class="dropspan-container">
                    <span class="dropspan" >Registerd Users</span>
                    <hr size="2" width="100%" color="black">
                    <ul>
                        <a href="/admin/dashboard" id="adminsA">Users</a>
                        <a href="/admin/dashboard/officers" id="officersA">Officers</a>
                    </ul>
                </div> -->

            <div>
                    
                <div class="navbar2 dropdown-container" style="background-color: none;">
                    <!-- <span class="dropspan">Add New User</span>  -->
                    <!-- <hr size="2" width="100%" color="black"> -->
                    <ul >
                        <a href="/admin/dashboard" id="adminsA">Users</a>
                        <a href="/admin/dashboard/officers" id="officersA">Officers</a>
                        <a href="/admin/new user" id="userA">Add User</a>
                        <a href="/admin/new officer" id="officerA">Add Officer</a>
                    </ul>
                </div>
                
            </div>  

            <!-- </div> -->

            <div>
                    
                <!-- <div class="navbar3 dropdown-container" style="background-color: none;">
                     
                    <ul >
                        <input type="checkbox" name="edit" id="editC">
                    <form action="{{ route('newUsers.saveOfficer') }}" method="post">

                        @csrf
                        <label>ID</label>
                        <input type="text" class="input" name="id" placeholder="Enter ID">
                        <span style="color:red;">@error('id'){{ $message }} @enderror</span>
                        <label>Name</label> 
                        <input type="text" class="input" name="name" placeholder="Enter Name">
                        <span style="color:red;">@error('name'){{ $message }} @enderror</span>
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
                        <div>
                            <div class="inputfield">
                                <label>College</label></br>
                                <div class="custom_select">
                                    <select id="college" name="college" onchange="college(this)">
                                        <option selected disabled>Select</option>

                                        <option value="Officers"  @if(old('college') === 'Officers') selected @endif>Directorate Officers</option>
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
                            
                            
                        </div>
                        <div class="inputfield" style="margin-top: 20px;">
                            <input type="submit" value="Save" class="btn">
                        </div>
                    </form>
                    </ul>
                </div> -->
                
            </div>  

            <div class="column1">

                <!-- content place -->

                @yield('adminContent')

                
            </div>

            <!-- java script dropdown -->
            <script>
                var dropdown = document.getElementsByClassName("dropdown-btn");
                var i;

                for (i = 0; i < dropdown.length; i++) {
                    dropdown[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                    });
                }
            </script>

        </div> 
    </section>

@endsection


