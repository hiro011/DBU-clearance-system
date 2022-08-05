 
@extends('Layouts.registrarLayout')

@section('registrarContent')

    <style>
        .inputfield select{
            cursor: pointer;
        }
        .inputfield1{
            display: none;
            cursor: pointer;
        }

        /* Add an active class to the active button/link */
        .column #officerA {
            background-color: blue;
            color: white;
        }
        .dropdown-container{
            display: block;
        }

    </style> 

    <div class="wrapper">
        <div class="title">Add New Officer</div>
        
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

            <form action="{{ route('newUsers.saveStudent') }}" method="post">

                @csrf
                <div class="inputfield">
                    <label>Program</label></br>
                    <div class="custom_select">
                        <select id="program" name="program">
                            <option selected disabled>Select</option>
                            <option value="Regular"  @if(old('program') === 'Regular') selected @endif>Regular Student</option>
                            <option value="Extension"  @if(old('program') === 'Extension') selected @endif>Extension Student</option>
                            <option value="Distance"  @if(old('program') === 'Distance') selected @endif>Distance Student</option>
                        </select></br>
                        <span style="color:red;">@error('program'){{ $message }} @enderror</span>

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

                        <!-- Directorate Officers -->
                        <div id="Officers" class="inputfield1">
                            <div class="inputfield">
                                <label>Department</label></br>
                                <div class="custom_select">
                                    <select name="department">
                                        <option selected disabled>Select(Directorate Officers)</option>
                                        <option value="Anti Corruption">Anti Corruption Officer</option>
                                        <option value="Cashier">Cashier Officer</option>
                                        <option value="Dining">Dining Officer</option>
                                        <option value="EngCollege Finance">EngCollege Finance Officer</option>
                                        <option value="Finance">Finance Officer</option>
                                        <option value="General Service">General Service Officer</option>
                                        <option value="HRM">HRM Officer</option>
                                        <option value="ICT Property">ICT Property Officer</option>
                                        <option value="Library">Library Officer</option>
                                        <option value="Property Officer">Property Officer</option>
                                        <option value="Registrar">Registrar Officer</option>
                                        <option value="Research">Research Officer</option>
                                        <option value="StudResidence">Student Residence Office</option>

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
