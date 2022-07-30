 
@extends('Layouts.adminLayout')

@section('content')

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

        <form action="{{ route('newUsers.saveOfficer') }}" method="post">

        @csrf
            <div class="inputfield">
                <label>Name</label> </br>
                <input type="text" class="input" name="name" placeholder="Enter Name" 
                    value="{{ old('name') }}"> </br>
                <span style="color:red;">@error('name'){{ $message }} @enderror</span>
            </div>  
                
            <div class="inputfield">
                <label>Email</label></br>
                <input type="text" class="input" name="email" placeholder="Username" value="{{ old('email') }}"> </br>
                <span style="color:red;">@error('email'){{ $message }} @enderror</span>
            </div>  
            <div class="inputfield">
                <label>Password</label></br>
                <input type="password" class="input" name="password" placeholder="password"></br>
                <span style="color:red;">@error('password'){{ $message }} @enderror</span>
            </div> 
            <div>
                <div class="inputfield">
                    <label>College</label></br>
                    <div class="custom_select">
                        <select id="college" name="college" onchange="college(this)">
                            <option selected disabled>Select</option>

                            <option value="Officers">Directorate Officers</option>
                            <option value="engineering">College of Engineering</option>
                            <option value="computing">College of Computing</option>
                            <option value="freshman">Freshman College</option>
                            <option value="law">College of Law</option>
                            <option value="socialScience">College of Social Science & Humanities</option>
                            <option value="business">College of Business & Economics</option>
                            <option value="computational">College of Natural & Computational</option>
                            <option value="agriculture">College of Agriculture & Natural Science</option>
                        </select></br>
                        <span style="color:red;">@error('college'){{ $message }} @enderror</span>

                    </div>
                </div> 
                
                <div>
                   
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

                    <!-- Directorate Officers -->
                    <div id="Officers" class="inputfield1">
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

 
@endsection
