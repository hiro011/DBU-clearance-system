 

@extends('Layouts.navLayout')

@section('content')
             

    <style>
        .profile_dd{
            top: 58px; 
            right: 240px;
            height: auto;
        }
        #navbar .active{
            border: 1px solid;
            color: white;
        }
        .requestA {
            background-color: blue;
            color: white;
        } 
        #regStudA {
            background-color: blue;
            color: white;
        } 
        #regStudA:hover {
            opacity: 0.8;
            color: black;
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
        
        @media screen and (max-width:420px) {
            
            body {
                padding-right: 6%;
                font-family: "Times New Roman", Times, serif;
            }
            .profile_dd{
                top: 58px; 
                right: 310px;
                height: auto;
            }
        }

        .column {
            float: left;
            width: 30%;
            background-color: rgb(224, 235, 240);
            margin-top: 0;
            padding-top: 3%;
            height: auto;
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
      }
      .sticky {
          width: 71.3%;
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
      .profile_dd{
          top: 58px; 
          right: 250px;
          height: auto;
      }
      footer{
          width: 98.2%;
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
          width: 91.7%;
          background-color: rgb(224, 235, 240);
          padding-top: 5px;
          padding-left: 80px;
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

  </style>
 
 

    <span class="dropspanCurrent" >Clearance Form</span></br>
    <div class="navbar2">
    
        <ul style="margin-top: 0;">
            @if($regStud)
            <a href="/clearance/regular students" id="regStudA">Regular Student</a>
            @endif
            @if($extnStud)
            <a href="/clearance/extension students" id="extnStudA">Extension Student</a>
            @endif
            @if($disStud)
            <a href="/clearance/distance students" id="disStudA">Distance Student</a>
            @endif
            @if($teacher)
            <a href="/clearance/teacher" id="teacherA">Teacher</a>
            @endif
            @if($adminstaff)
            <a href="/clearance/admin staff" id="adminStaffA">Admin Staff</a>
            @endif
        </ul>
        

    </div>

    <section id="columns">
        <div class="body-container">
            <div class="column" style="padding-top: 50px;">
                <span class="dropspanCurrent"  >Regular Student</span></br>
                <hr size="3" width="100%" color="gray">
                <a href="/clearance" class="requestA" style="border-radius: 4px;">Request Form</a>
                <a href="/user/regular student/form" class="submitA">Clearance Submit Form</a>
                <hr size="3" width="100%" color="gray">
            </div>  

            <div class="column1" >

                <div class="wrapper" style="margin-top: 0;">

                    <div class="title">Information Form</div>
                    <div class="form">
                        <form action="" method="post">

                            <div class="inputfield"> 
                                <label>Name</label> </br>
                                <input type="text" class="input" name="name" placeholder="Enter Your Name" value="{{ old('name') }}"> </br>
                                <span style="color: red;">@error('name'){{ $message }} @enderror</span>
                            </div>  
                                
                            <div class="inputfield">
                                <label>ID</label></br>
                                <input type="text" class="input" name="id" placeholder="Enter Your ID" value="{{ old('email') }}"> </br>
                                <span style="color: red;">@error('id'){{ $message }} @enderror</span>
                            </div>  

                            <div class="inputfield">
                                <label>Gender</label></br>
                                <input type="text" class="input" name="gender" placeholder="Enter Your Gender" value="{{ old('email') }}"></br>
                                <span style="color: red;">@error('gender'){{ $message }} @enderror</span>
                            </div> 

                            <div class="inputfield">
                                <label>Year</label></br>
                                <input type="text" class="input" name="year" placeholder="Enter Year" value="{{ old('email') }}"></br>
                                <span style="color: red;">@error('year'){{ $message }} @enderror</span>
                            </div>

                            <div>

                                <!-- Colleges  -->
                                <div class="inputfield">
                                    <label>College</label></br>
                                    <div class="custom_select">
                                        <select id="college" name="college" onchange="college(this)">
                                            <option selected disabled>Select</option>

                                            <option value="engineering">College of Engineering</option>
                                            <option value="computing">College of Computing</option>
                                            <option value="freshman">Freshman College</option>
                                            <option value="law">College of Law</option>
                                            <option value="socialScience">College of Social Science & Humanities</option>
                                            <option value="business">College of Business & Economics</option>
                                            <option value="computational">College of Natural & Computational</option>
                                            <option value="agriculture">College of Agriculture & Natural Science</option>
                                        </select></br>
                                        <span style="color: red;">@error('college'){{ $message }} @enderror</span>
                                    </div>
                                </div> 

                                <!-- Departments -->
                                <div > 
                                    
                                    <!--  Freshman College -->
                                    <div id="freshman" class="inputfield1">
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
                                    <div id="engineering" class="inputfield1">
                                        <div class="inputfield">
                                            <label>Department</label></br>
                                            <div class="custom_select">
                                                <select name="department">
                                                    <option selected disabled>Select (College of Engineering)</option>
                                                    <option value="Electrical & Computer Engineering">Electrical & Computer Engineering </option>
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
                                    <div id="computing" class="inputfield1">
                                        <div class="inputfield">
                                            <label>Department</label></br>
                                            <div class="custom_select">
                                                <select name="department">
                                                    <option selected disabled>Select (College of Computing)</option>
                                                    <option value="Electrical & Computer Engineering">Electrical & Computer Engineering </option>
                                                    <option value="Mechanical  Engineering">Mechanical  Engineering </option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Chemical Engineering">Chemical Engineering</option>
                                                    <option value="Industrial Engineering">Industrial Engineering</option>
                                                    <option value="CoTM Engineering">CoTM Engineering</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- College of Law -->
                                    <div id="law" class="inputfield1">
                                        <div class="inputfield">
                                            <label>Department</label></br>
                                            <div class="custom_select">
                                                <select name="department">
                                                    <option selected disabled>Select (College of Law)</option>
                                                    <option value="Electrical & Computer Engineering">Electrical & Computer Engineering </option>
                                                    <option value="Mechanical  Engineering">Mechanical  Engineering </option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Chemical Engineering">Chemical Engineering</option>
                                                    <option value="Industrial Engineering">Industrial Engineering</option>
                                                    <option value="CoTM Engineering">CoTM Engineering</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- College of Social Science & Humanities -->
                                    <div id="socialScience" class="inputfield1">
                                        <div class="inputfield">
                                            <label>Department</label></br>
                                            <div class="custom_select">
                                                <select name="department">
                                                    <option selected disabled>Select (College of Social Science & Humanities)</option>
                                                    <option value="Electrical & Computer Engineering">Electrical & Computer Engineering </option>
                                                    <option value="Mechanical  Engineering">Mechanical  Engineering </option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Chemical Engineering">Chemical Engineering</option>
                                                    <option value="Industrial Engineering">Industrial Engineering</option>
                                                    <option value="CoTM Engineering">CoTM Engineering</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- College of Agriculture & Natural Science -->
                                    <div id="agriculture" class="inputfield1">
                                        <div class="inputfield">
                                            <label>Department</label></br>
                                            <div class="custom_select">
                                                <select name="department">
                                                    <option selected disabled>Select (College of Agriculture & Natural Science)</option>
                                                    <option value="Electrical & Computer Engineering">Electrical & Computer Engineering </option>
                                                    <option value="Mechanical  Engineering">Mechanical  Engineering </option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Chemical Engineering">Chemical Engineering</option>
                                                    <option value="Industrial Engineering">Industrial Engineering</option>
                                                    <option value="CoTM Engineering">CoTM Engineering</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- College of Natural & Computational -->
                                    <div id="computational" class="inputfield1">
                                        <div class="inputfield">
                                            <label>Department</label></br>
                                            <div class="custom_select">
                                                <select name="department">
                                                    <option selected disabled>Select (College of Natural & Computational)</option>
                                                    <option value="Electrical & Computer Engineering">Electrical & Computer Engineering </option>
                                                    <option value="Mechanical  Engineering">Mechanical  Engineering </option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Chemical Engineering">Chemical Engineering</option>
                                                    <option value="Industrial Engineering">Industrial Engineering</option>
                                                    <option value="CoTM Engineering">CoTM Engineering</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- College of Business & Economics -->
                                    <div id="business" class="inputfield1">
                                        <div class="inputfield">
                                            <label>Department</label></br>
                                            <div class="custom_select">
                                                <select name="department">
                                                    <option selected disabled>Select (College of Business & Economics)</option>
                                                    <option value="Electrical & Computer Engineering">Electrical & Computer Engineering </option>
                                                    <option value="Mechanical  Engineering">Mechanical  Engineering </option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Chemical Engineering">Chemical Engineering</option>
                                                    <option value="Industrial Engineering">Industrial Engineering</option>
                                                    <option value="CoTM Engineering">CoTM Engineering</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <span style="color:red;">@error('department'){{ $message }} @enderror</span>
                                </div>

                            </div>

                            <div class="inputfield" style="margin-top: 20px;">
                                <input type="submit" value="Enter" class="btn">
                            </div>
                        </form>
                        
                    </div>
                </div>	

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

            
            </div>

        
        </div> 
    </section>


@endsection

