 
@extends('Layouts.adminLayout')

@section('content')

<style>
    /* Add an active class to the active button/link */
    .column #adminA {
        background-color: blue;
        color: white;
    }
    .dropdown-container{
        display: block;
    }

</style>

<!-- <script>
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
</script> -->

<div class="wrapper">
    <div class="title">Add New Admin</div>

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
        <form action="{{ route('newUsers.saveAdmin') }}" method="post" autocomplete="on">

        @csrf
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
                <input type="submit" value="Save" class="btn">
            </div>
        </form>
    </div>
</div>	


@endsection
