 
@extends('Layouts.registrarLayout')

@section('registrarContent')


    <div class="wrapper">
        <div class="title">Add New Student</div>
        
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

            <form action="add" method="post">

            @csrf
                <div class="inputfield">
                    <label>First Name</label> </br>
                    <input type="text" class="input" name="firstName" placeholder="Enter first name" 
                        value="{{ old('firstName') }}"> </br>
                    <span style="color:red;">@error('firstName'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Last Name</label></br>
                    <input type="text" class="input" name="lastName" placeholder="Enter last name" 
                        value="{{ old('lastName') }}"></br>
                    <span style="color:red;">@error('lastName'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>ID</label></br>
                    <input type="text" class="input" name="id" placeholder="Your ID"
                        value="{{ old('id') }}"></br>
                    <span style="color:red;">@error('id'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Year</label></br>
                    <input type="text" class="input" name="year" placeholder="Year"
                        value="{{ old('year') }}"></br>
                    <span style="color:red;">@error('year'){{ $message }} @enderror</span>
                </div> 
                <div class="inputfield">
                    <label>Gender</label></br>
                    <div class="custom_select">
                        <select name="gender" >
                            <option selected disabled>Select</option>
                            <option value="male" >Male</option>
                            <option value="female" >Female</option>
                        </select></br>
                        <span style="color:red;">@error('gender'){{ $message }} @enderror</span>
                        
                    </div>
                </div> 
                <div class="inputfield">
                    <label>Program</label></br>
                    <div class="custom_select">
                        <select name="program">
                            <option selected disabled>Select</option>
                            <option value="Regular">Regular</option>
                            <option value="Extension">Extension</option>
                            <option value="Distance">Distance</option>
                        </select></br>
                        <span style="color:red;">@error('program'){{ $message }} @enderror</span>

                    </div>
                </div> 
                <div class="inputfield">
                    <label>College</label></br>
                    <div class="custom_select">
                        <select name="college">
                            <option selected disabled>Select</option>
                            <option value="Natural Freshman College">Natural Freshman College</option>
                            <option value="Social Freshman College">Social Freshman College</option>
                            <option value="College of Engineering">College of Engineering</option>
                            <option value="College of Computing">College of Computing</option>
                            <option value="College of Law">College of Law</option>
                            <option value="College of Social Science & Humanities">College of Social Science & Humanities</option>
                            <option value="College of Business & Economics">College of Business & Economics</option>
                            <option value="College of Natural & Computational">College of Natural & Computational</option>
                            <option value="College of griculture & Natural Science">College of Agriculture & Natural Science</option>
                        </select></br>
                    <span style="color:red;">@error('college'){{ $message }} @enderror</span>

                    </div>
                </div> 

                <!-- College of Engineering -->
                <div class="inputfield">
                    <label>Department</label></br>
                    <div class="custom_select">
                        <select name="department">
                            <option selected disabled>Select</option>
                            <option value="Electrical & Computer Engineering">Electrical & Computer Engineering </option>
                            <option value="Mechanical  Engineering">Mechanical  Engineering </option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Chemical Engineering">Chemical Engineering</option>
                            <option value="Industrial Engineering">Industrial Engineering</option>
                            <option value="CoTM Engineering">CoTM Engineering</option>
                        </select>
                    </div>
                </div> 
                <div class="inputfield">
                    <input type="submit" value="Save" class="btn">
                </div>
            </form>
        </div>
    </div>	


@endsection
