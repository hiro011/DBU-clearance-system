
 
@extends('Layouts.layout')

@section('content')

<section id="columns">
    <div class="body-container">
        <div class="column">
            
            <div>
                </br>
                <a href="/residence office/new dorm user" class="abutton">
                        New Dormitory User   
                </a>
                <ul>
                    <a href="login">Female</a>
                    <a href="login">Male</a>
                </ul>

                <style>
                    .abutton {
                        background-color: blue;
                        border: none;
                        color: white;
                        text-align: left;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 10px;
                        cursor: pointer;
                    }
                    .abutton:hover{
                        background-color: rgb(104, 171, 230);
                        color: #f1f1f1;
                            
                    }
                </style>   
                 
            </div>
            
        </div>

        <div class="column1">
            <!-- content place -->
            <div class="wrapper">
                <div class="title">Student Dormitory Form</div>

                <div class="form">
                    <div class="inputfield">
                        <label>First Name</label>
                        <input type="text" class="input">
                    </div>  
                    <div class="inputfield">
                        <label>Last Name</label>
                        <input type="text" class="input">
                    </div>  
                    <div class="inputfield">
                        <label>ID</label>
                        <input type="text" class="input">
                    </div>  
                    <div class="inputfield">
                        <label>Gender</label>
                        <div class="custom_select">
                            <select>
                            <option value="">Select</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            </select>
                        </div>
                    </div> 
                    <div class="inputfield">
                        <label>College</label>
                        <div class="custom_select">
                            <select>
                            <option value="">Select</option>
                            <option value="Freshman College">Freshman College</option>
                            <option value="College of Engineering">College of Engineering</option>
                            <option value="College of Computing">College of Computing</option>
                            <option value="College of Law">College of Law</option>
                            <option value="College of Social Science & Humanities">College of Social Science & Humanities</option>
                            <option value="College of Business & Economics">College of Business & Economics</option>
                            <option value="College of Natural & Computational">College of Natural & Computational</option>
                            <option value="College of griculture & Natural Science">College of Agriculture & Natural Science</option>
                            </select>
                        </div>
                    </div> 

                    <!-- College of Engineering -->
                    <div class="inputfield">
                        <label>Department</label>
                        <div class="custom_select">
                            <select>
                            <option value="">Select</option>
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
                        <label>Year</label>
                        <input type="text" class="input">
                    </div> 
                    <div class="inputfield">
                        <label>Block</label>
                        <input type="text" class="input">
                    </div> 
                    <div class="inputfield">
                        <label>Dorm</label>
                        <input type="text" class="input">
                    </div> 
                    <div class="inputfield">
                        <input type="submit" value="Register" class="btn">
                    </div>

                </div>
            </div>	
	
        </div>

    </div> 
</section>
 

@endsection
