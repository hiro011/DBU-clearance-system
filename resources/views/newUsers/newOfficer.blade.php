 
@extends('Layouts.layout')

@section('content')

<section id="columns">

    <style>
        .inputfield1{
            display: none;
        }
    </style>

    <div class="body-container">
        <div class="column">
        
            <div>
                <button class="dropdown-btn">New User</button>
                <div class="dropdown-container">
                    <ul>
                    <a href="/admin/new officer">Officer</a>
                    <a href="login">Teacher</a>
                    <a href="login">Administrator Staff</a>
                    <a href="login">Regular Student</a>
                    <a href="login">Extension Student</a>
                    <a href="login">Distance Student</a>
                    </ul>
                </div>
                <style>
                    .dropdown-container{
                        display: none;
                    }
                </style>
            </div>  
            <div>
            <p>
            <hr size="3" width="100%" color="gray">
            </p>
            <hr size="3" width="100%" color="gray">
            </div>
            <a href="login">Officers</a>
            <a href="login">Teachers</a>
            <a href="login">Administrator Staffs</a>
            <a href="login">Regular Students</a>
            <a href="login">Extension Students</a>
            <a href="login">Distance Students</a>

        </div>

        <div class="column1">
            <!-- content place -->
            <div class="wrapper">
                <div class="title">Add New Officer</div>
                
                <div class="form">

                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success')}}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail')}}
                        </div>
                    @endif

                    <form action="addOfficer" method="post">

                    @csrf
                        <div class="inputfield">
                            <label>Name</label> </br>
                            <input type="text" class="input" name="name" placeholder="Enter Name" 
                                value="{{ old('name') }}"> </br>
                            <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                        </div>  
                         
                        <div class="inputfield">
                            <label>Email</label></br>
                            <input type="text" class="input" name="email" placeholder="Email"
                                value="{{ old('email') }}"></br>
                            <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                        </div>  
                        <div class="inputfield">
                            <label>Password</label></br>
                            <input type="password" class="input" name="password" placeholder="password"
                                value="{{ old('password') }}"></br>
                            <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                        </div> 
                         
                            <div id="college" class="inputfield">
                                <label>College</label></br>
                                <div class="custom_select">
                                    <select name="college">
                                        <option selected disabled>Select</option>
                                        <option value="Officers">Directorate Officers</option>

                                        <option value="College of Engineering">College of Engineering</option>
                                        <option value="College of Computing">College of Computing</option>
                                        <option value="Natural Freshman College">Natural Freshman College</option>
                                        <option value="Social Freshman College">Social Freshman College</option>
                                        <option value="College of Law">College of Law</option>
                                        <option value="College of Social Science & Humanities">College of Social Science & Humanities</option>
                                        <option value="College of Business & Economics">College of Business & Economics</option>
                                        <option value="College of Natural & Computational">College of Natural & Computational</option>
                                        <option value="College of griculture & Natural Science">College of Agriculture & Natural Science</option>
                                    </select></br>
                                    <span style="color:red;">@error('college'){{ $message }} @enderror</span>

                                </div>
                            </div> 
                        
                        <!-- Defualt -->
                        <div id="defualt" class="inputfield">
                            <label>Department</label></br>
                            <div class="custom_select">
                                <select name="department">
                                    <option selected disabled>Select</option>
                                </select>
                            </div>
                        </div> 

                        <!-- Directorate Officers -->
                        <div id="directorate" class="inputfield1">
                            <div class="inputfield">
                                <label>Department</label></br>
                                <div class="custom_select">
                                    <select name="department">
                                        <option selected disabled>Select(Directorate Officers)</option>
                                    
                                        <option value="Library">Library Officer</option>
                                        <option value="Propert">Property Officer</option>
                                        <option value="Registrar">Registrar Officer</option>
                                        <option value="Finance">Finance Officer</option>
                                        <option value="HRM">HRM Officer</option>
                                        <option value="Cashier">Cashier Officer</option>
                                        <option value="Research">Research Officer</option>
                                        <option value="Dining">Dining Officer</option>
                                        <option value="ICT Property">ICT Property Officer</option>
                                        <option value="EngCollege Finance">EngCollege Finance Officer</option>
                                        <option value="General Service">General Service Officer</option>
                                        <option value="Anti Corruption">Anti Corruption Officer</option>
                                        
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
                        <div class="inputfield">
                            <input type="submit" value="Save" class="btn">
                        </div>
                    </form>
                </div>
            </div>	
	
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
