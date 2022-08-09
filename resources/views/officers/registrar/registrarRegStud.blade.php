@extends('Layouts.registrarLayout')

@section('registrarContent')

              
    <style> 
       
        #regStudA{
            background-color: blue;
            color: white;
        }
        #regStudA:hover{
            color: black; 
            opacity: 0.8;
        }
          
    </style>
    
    


    <div  style=" overflow-x:auto;">
        <!-- <h2 style="text-align: center;">Regular Students</h2><hr> -->

        <div class="searchDiv" >  
            <form method="get" action="/officers/registrar/search all" class="searchForm">
                @csrf
                <input type="search" placeholder="Search here" name="key_word"class="searchit">
                <div class="custom_select">
                    <select id="search_by" name="search_by">
                        <option value="ID"  @if(old('search_by') === 'ID') selected @endif>ID</option>
                        <option value="Name"  @if(old('search_by') === 'Name') selected @endif>Name</option>
                    </select></br>
                </div>
                <button type="submit" class="search-btn">Search</button>
            </form>
            <div class="abtnCont">
                <button class="abtn" onclick="toggleText()">Change Status</button>
            </div>

        </div>

        <div id="sDiv2"class="searchDiv2" >  
            <form method="POST" action="{{ route('registrar.registerUpdateExtn') }}" class="searchForm">
                @csrf
                <div class="chooseField">
                    <label>Select</label></br>
                    <div class="custom_select">
                        <select id="select_c" name="select_c" onchange="select_c(this)">
                            <option value="year"  @if(old('select_c') === 'year') selected @endif>Year</option>
                            <option value="college"  @if(old('select_c') === 'college') selected @endif>College</option>
                            <option value="gender"  @if(old('select_c') === 'gender') selected @endif>Gender</option>
                            
                            <!-- <option value="department"  @if(old('select') === 'department') selected @endif>Department</option> -->
                            <!-- <option value="status"  @if(old('select') === 'status') selected @endif>Status</option> -->
                        </select></br>
                        <span style="color:red;">@error('select'){{ $message }} @enderror</span>

                    </div>
                </div>

                <div id="gender" class="chooseField1">
                    <div class="chooseField">
                        <label>Gender</label></br>
                        <div class="custom_select">
                            <select id="where" name="where">
                                <option value="Male"  @if(old('where') === 'Male') selected @endif>Male</option>
                                <option value="Female"  @if(old('where') === 'Female') selected @endif>Female</option>
                            </select></br>
                        </div>
                    </div>
                </div>

                <div id="year" class="chooseField1">
                    <div class="chooseField">
                        <label>Year</label> </br>
                        <input type="text" class="input" name="where" placeholder="Enter year" value="{{ old('year') }}"> </br>
                    </div>
                </div>

                <div id="college" class="chooseField1">
                    <div class="chooseField">
                    <label>College</label></br>
                        <div class="custom_select">
                            <select id="college" name="where">
                                <option selected disabled>Select</option>

                                <option value="Engineering"  @if(old('college') === 'Engineering') selected @endif>Engineering</option>
                                <option value="Computing"  @if(old('college') === 'Computing') selected @endif>Computing</option>
                                <option value="Freshman"  @if(old('college') === 'Freshman') selected @endif>Freshman</option>
                                <option value="Law"  @if(old('college') === 'Law') selected @endif>Law</option>
                                <option value="Education" @if(old('college') === 'Education') selected @endif>Education</option>
                                <option value="Social-Science" @if(old('college') === 'Social-Science') selected @endif>Social-Science</option>
                                <option value="Business" @if(old('college') === 'Business') selected @endif>Business</option>
                                <option value="Computational" @if(old('college') === 'Computational') selected @endif>Computational</option>
                                <option value="Agriculture" @if(old('college') === 'Agriculture') selected @endif>Agriculture</option>
                            </select></br>

                        </div>
                    </div>
                </div>

                <div class="chooseField">
                    <label>New Status</label></br>
                    <div class="custom_select">
                        <select id="status" name="status">
                            <option selected disabled>Select</option>
                            <option value="Dismissed"  @if(old('status') === 'Dismissed') selected @endif>Dismissed</option>
                            <option value="On-Class"  @if(old('status') === 'On-Class') selected @endif>On Class</option>
                            <option value="Transfered"  @if(old('status') === 'Transfered') selected @endif>Transfered</option>
                            <option value="Withdraw"  @if(old('status') === 'Withdraw') selected @endif>Withdraw</option>
                        </select></br>
                    </div>
                </div>

                <button type="submit" class="search-btn">Change</button>
            </form>
                
        </div>
    
        <table border = "1" >
            <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Year</th>
                <th>program</th>
                <th>College</th>
                <th>Department</th>
                <th>Status</th>
            </tr>
            </thead>
            
            <tbody>

                @foreach ($regStudTable as $user)
                    
                    <tr>
                        <td></td>
                        <td>{{ $user->ID_no }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->year }}</td>
                        <td>Regular</td>
                        <td>{{ $user->college }}</td>
                        <td>{{ $user->department }}</td>
                        <td>{{ $user->status }}</td>
                    </tr>

                @endforeach
           
            
            </tbody>
        </table>

    </div>

      

@endsection
