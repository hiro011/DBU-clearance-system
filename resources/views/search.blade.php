@extends('Layouts.registrarLayout')

@section('registrarContent')

              
    <style> 
     
        #allStudA{
            background-color: blue;
            color: white;
        }
            
        .search-btn{
            width: 80px;
            color: black;
            font-size: 14px;
            border-radius: 4px;
            border: none;
        }
        .searchit{
            align-items: center;
            width: 60%;
            height: 100%;
            outline: none;
            border: 1px solid #d5dbd9;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.3s ease;
        }
        .searchForm{
            margin-left: 20%;
            display: flex;
            float: left;
            margin-bottom: 15px;
            height: 40px;
            width: 50%;
        }
        .custom_select select{
            height: 100%;
            border-radius: 1px;
            color: black;
            font-size: 14px;
            border-radius: 3px;
            border-color: lightblue;
        }
    </style>
    
    <div  style=" overflow-x:auto;" >
        <div>
            <form method="POST" action="{{ route('search.checkSearch') }}" class="searchForm">
                @csrf
                <input type="search" placeholder="Search here" name="key_word"class="searchit">
                <div class="custom_select">
                    <select id="search_by" name="search_by">
                        <option value="ID"  @if(old('gender') === 'ID') selected @endif>ID</option>
                        <option value="Name"  @if(old('gender') === 'Name') selected @endif>Name</option>
                    </select></br>
                </div>
                <button type="submit" class="search-btn">Search</button>
            </form>
            <span style="color:red;">@error('key_word'){{ $message }} @enderror</span>

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
                @foreach ($extnStudTable as $user)

                    <tr>
                    <td></td>
                        <td>{{ $user->ID_no }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->year }}</td>
                        <td>Extension</td>
                        <td>{{ $user->college }}</td>
                        <td>{{ $user->department }}</td>
                        <td>{{ $user->status }}</td>
                    </tr>

                @endforeach

                @foreach ($disStudTable as $user)

                    <tr>
                        <td></td>
                        <td>{{ $user->ID_no }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->year }}</td>
                        <td>Distance</td>
                        <td>{{ $user->college }}</td>
                        <td>{{ $user->department }}</td>
                        <td>{{ $user->status }}</td>
                    </tr>
                    
                @endforeach

         

            </tbody>
        </table>

    </div>

      

@endsection
