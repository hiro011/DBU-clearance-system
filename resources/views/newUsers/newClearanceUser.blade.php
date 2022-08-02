 
@extends('Layouts.adminLayout')

@section('adminContent')

<style>
    .inputfield select{
        cursor: pointer;
    }
    .if1{
        display: none;
        cursor: pointer;
    }

    /* Add an active class to the active button/link */
    .column #clearanceA {
        background-color: blue;
        color: white;
    }
    .dropdown-container{
        display: block;
    }

</style> 

<div class="wrapper">
    <div class="title">Add New Clearance User </div>
    
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

        <div style="margin-bottom: 15px;">
            <div class="inputfield">
                <label>Role</label></br>
                <div class="custom_select">
                    <select id="role" name="role" onchange="role(this)" value="{{ old('role') }}">
                        <option value="regularStud">Regular Student</option>
                        <option value="adminStaff">Administrator Staff</option>
                        <option value="distanceStud">Distance Student</option>
                        <option value="extensionStud">Extension Student</option>
                        <option value="teacher">Teacher</option>

                    </select></br>
                    <span style="color:red;">@error('role'){{ $message }} @enderror</span>

                </div>
            </div> 
            
        </div>

        <div id="regularStud" class="if1">
            <form action="{{ route('newUsers.saveRegStud') }}" method="post" >

                @csrf
                <div class="inputfield">
                    <label>Name</label> </br>
                    <input type="text" class="input" name="name" placeholder="Enter Name" 
                        value="{{ old('name') }}"> </br>
                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                </div>  
                    
                <div class="inputfield">
                    <label>Email</label></br>
                    <input type="text" class="input" name="email" placeholder="Username" value="{{ old('email') }}">
                    </br>
                    <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Password</label></br>
                    <input type="password" class="input" name="password" placeholder="password"></br>
                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                </div> 
            
                <div class="inputfield" style="margin-top: 20px;">
                    <input type="submit" value="Save" class="btn">
                </div>
            </form>
        </div>

        <div id="extensionStud" class="if1">
            <form action="{{ route('newUsers.saveExtnStud') }}" method="post" >

                @csrf
                <div class="inputfield">
                    <label>Name</label> </br>
                    <input type="text" class="input" name="name" placeholder="Enter Name" 
                        value="{{ old('name') }}"> </br>
                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                </div>  
                    
                <div class="inputfield">
                    <label>Email</label></br>
                    <input type="text" class="input" name="email" placeholder="Username" value="{{ old('email') }}">
                    </br>
                    <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Password</label></br>
                    <input type="password" class="input" name="password" placeholder="password"></br>
                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                </div> 
            
                <div class="inputfield" style="margin-top: 20px;">
                    <input type="submit" value="Save" class="btn">
                </div>
            </form>
        </div>

        <div id="adminStaff" class="if1">
            <form action="{{ route('newUsers.saveAdminStaff') }}" method="post" >

                @csrf
                <div class="inputfield">
                    <label>Name</label> </br>
                    <input type="text" class="input" name="name" placeholder="Enter Name" 
                        value="{{ old('name') }}"> </br>
                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                </div>  
                    
                <div class="inputfield">
                    <label>Email</label></br>
                    <input type="text" class="input" name="email" placeholder="Username" value="{{ old('email') }}">
                    </br>
                    <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Password</label></br>
                    <input type="password" class="input" name="password" placeholder="password"></br>
                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                </div> 

                <div class="inputfield" style="margin-top: 20px;">
                    <input type="submit" value="Save" class="btn">
                </div>
            </form>
        </div>
        
        <div id="teacher" class="if1">
            <form action="{{ route('newUsers.saveTeacher') }}" method="post" >

                @csrf
                <div class="inputfield">
                    <label>Name</label> </br>
                    <input type="text" class="input" name="name" placeholder="Enter Name" 
                        value="{{ old('name') }}"> </br>
                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                </div>  
                    
                <div class="inputfield">
                    <label>Email</label></br>
                    <input type="text" class="input" name="email" placeholder="Username" value="{{ old('email') }}">
                    </br>
                    <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Password</label></br>
                    <input type="password" class="input" name="password" placeholder="password"></br>
                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                </div> 

                <div class="inputfield" style="margin-top: 20px;">
                    <input type="submit" value="Save" class="btn">
                </div>
            </form>
        </div>

        <div id="distanceStud" class="if1">
            <form action="{{ route('newUsers.saveDisStud') }}" method="post" >

                @csrf
                <div class="inputfield">
                    <label>Name</label> </br>
                    <input type="text" class="input" name="name" placeholder="Enter Name" 
                        value="{{ old('name') }}"> </br>
                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                </div>  
                    
                <div class="inputfield">
                    <label>Email</label></br>
                    <input type="text" class="input" name="email" placeholder="Username" value="{{ old('email') }}">
                    </br>
                    <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Password</label></br>
                    <input type="password" class="input" name="password" placeholder="password"></br>
                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                </div> 

                <div class="inputfield" style="margin-top: 20px;">
                    <input type="submit" value="Save" class="btn">
                </div>
            </form>
        </div>
     

    </div>
</div>	

<!-- script for select options -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
<script>

    $(document).ready(function(){
        $("#role").on('change', function(){
            $(".if1").hide();
            $("#" + $(this).val()).fadeIn(1);
        }).change();
    });

</script>

<!-- script for down key to go to next inputfield -->
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
