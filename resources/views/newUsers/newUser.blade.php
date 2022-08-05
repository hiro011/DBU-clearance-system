 
@extends('Layouts.adminLayout')

@section('adminContent')

    <style>
        /* Add an active class to the active button/link */
        .column #userA {
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

                            <option value="0" @if(old('role') === '0') selected @endif>0</option>
                            <option value="1" @if(old('role') === '1') selected @endif>1</option>
                            <option value="2" @if(old('role') === '2') selected @endif>2</option>
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
