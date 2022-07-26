
 
@extends('Layouts.layout')

@section('content')

<section id="columns">
    <div class="body-container">
        <div class="column">
            
            <div>
                </br>
                <a href="/library/new patron" class="abutton">
                        New patron   
                </a>
                <ul>
                    <a href="login">Teachers</a>
                    <a href="login">Students</a>
                    <a href="login">Administrator staff</a>
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
                <div class="title">Information Form</div>

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
                        <label>Password</label>
                        <input type="password" class="input">
                    </div>  
                    <div class="inputfield">
                        <label>Confirm Password</label>
                        <input type="password" class="input">
                    </div> 
                    <div class="inputfield">
                        <label>Gender</label>
                        <div class="custom_select">
                            <select>
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            </select>
                        </div>
                    </div> 
                    <div class="inputfield">
                        <label>Email Address</label>
                        <input type="text" class="input">
                    </div> 
                    <div class="inputfield">
                        <label>Phone Number</label>
                        <input type="text" class="input">
                    </div> 
                    <div class="inputfield">
                        <label>Address</label>
                        <textarea class="textarea"></textarea>
                    </div> 
                    <div class="inputfield">
                        <label>Postal Code</label>
                        <input type="text" class="input">
                    </div> 
                    <div class="inputfield terms">
                        <label class="check">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <p>Agreed to terms and conditions</p>
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
