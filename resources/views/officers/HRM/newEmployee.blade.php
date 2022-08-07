 
@extends('Layouts.hrmLayout')

@section('hrmContent')

    <style>
        .inputfield select{
            cursor: pointer;
        }
        .inputfield1{
            display: none;
            cursor: pointer;
        }

        /* Add an active class to the active button/link */
        #newEmployeeA {
            background-color: blue;
            color: white;
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
                    <input type="text" class="input" name="id" placeholder="Enter ID" 
                        value="{{ old('id') }}"> </br>
                    <span style="color:red;">@error('id'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Name</label> </br>
                    <input type="text" class="input" name="name" placeholder="Enter Name" 
                        value="{{ old('name') }}"> </br>
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
                    <!-- <input type="text" class="input" name="birth_date" placeholder="Enter birth date" 
                        value="{{ old('birth_date') }}"> </br> -->
                        <input type="date" id="start" class="input" name="birth_date" value="{{ old('birth_date') }}">
                    <span style="color:red;">@error('birth_date'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Guarentor Name</label> </br>
                    <input type="text" class="input" name="guarentor_name" placeholder="Enter guarentor name" 
                        value="{{ old('guarentor_name') }}"> </br>
                    <span style="color:red;">@error('guarentor_name'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Guarentor Phone</label> </br>
                    <input type="text" class="input" name="guarentor_phone" placeholder="Enter guarentor name" 
                        value="{{ old('guarentor_phone') }}"> </br>
                    <span style="color:red;">@error('guarentor_phone'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Level of Education</label> </br>
                    <input type="text" class="input" name="level_of_education" placeholder="Enter level of education" 
                        value="{{ old('level_of_education') }}"> </br>
                    <span style="color:red;">@error('level_of_education'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Job Title</label> </br>
                    <input type="text" class="input" name="jop_title" placeholder="Enter jop title" 
                        value="{{ old('jop_title') }}"> </br>
                    <span style="color:red;">@error('jop_title'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Age</label> </br>
                    <input type="text" class="input" name="age" placeholder="Enter age" 
                        value="{{ old('age') }}"> </br>
                    <span style="color:red;">@error('age'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Salary</label> </br>
                    <input type="text" class="input" name="age" placeholder="Enter salary" 
                        value="{{ old('salary') }}"> </br>
                    <span style="color:red;">@error('salary'){{ $message }} @enderror</span>
                </div>  
                
                <div class="inputfield">
                    <label>Status</label></br>
                    <div class="custom_select">
                        <select id="status" name="status">
                            <option selected disabled>Select</option>
                            <option value="OnGoing"  @if(old('status') === 'OnGoing') selected @endif>On Going</option>
                            <option value="Transfered"  @if(old('status') === 'Transfered') selected @endif>Transfered</option>
                            <option value="Leave"  @if(old('status') === 'Leave') selected @endif>Dismissed</option>
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
