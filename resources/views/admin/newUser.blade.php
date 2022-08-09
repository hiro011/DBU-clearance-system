 
@extends('Layouts.adminLayout')

@section('adminContent')

    <style>
        /* Add an active class to the active button/link */
        #userA {
            background-color: blue;
            color: white;
        }
        .dropdown-container{
            display: block;
        }

    </style>

    <div class="wrapper">
        <div class="title">Add New User</div>

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
            
            <form action="{{ route('newUsers.saveUser') }}" method="post" autocomplete="on">

                @csrf
                <div class="inputfield">
                    <label>ID</label> </br>
                    <input type="text" class="input" name="ID_no" placeholder="Enter ID" 
                        value="{{ old('ID_no') }}"> </br>
                    <span style="color:red;">@error('ID_no'){{ $message }} @enderror</span>
                </div>  
                <div class="inputfield">
                    <label>Name</label> </br>
                    <input type="text" class="input" name="name" placeholder="Enter Name" 
                        value="{{ old('name') }}"> </br>
                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                </div>  
                    
                <div class="inputfield">
                    <label>Email</label></br>
                    <input type="text" class="input" name="email" placeholder="Username" value="{{ old('email') }}"></br>
                    <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                </div>  

                <div class="inputfield">
                    <label>Password</label></br>
                    <input type="password" class="input" name="password" placeholder="password"
                        value="{{ old('password') }}"></br>
                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                </div> 
                <div class="inputfield">
                    <label>Role</label></br>
                    <div class="custom_select">
                        <select id="role" name="role">
                            <option selected disabled>Select</option>

                            <option value="Admin" @if(old('role') === 'Admin') selected @endif>Admin</option>
                            <option value="Officer" @if(old('role') === 'Officer') selected @endif>Officer</option>
                            <option value="User" @if(old('role') === 'User') selected @endif>User</option>
                        </select></br>
                        <span style="color:red;">@error('role'){{ $message }} @enderror</span>

                    </div>
                </div> 
                
                <div class="inputfield">
                    <input type="submit" value="Save" class="btn">
                </div>

            </form>
        </div>
    </div>	

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
