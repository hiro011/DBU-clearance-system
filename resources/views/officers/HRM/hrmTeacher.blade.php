@extends('Layouts.hrmLayout')

@section('hrmContent')

              
    <style> 
       
        #teachersA{
            background-color: blue;
            color: white;
        }
     
    </style>
    
    <div  style=" overflow-x:auto;">
        <!-- <h2 style="text-align: center;">Teachers</h2><hr> -->
    
        <table border = "1" >
            <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>College</th>
                <th>Department</th>
                <th>Status</th>
            </tr>
            </thead>
            
            <tbody>

            @foreach ($teacherTable as $user)

                <tr>
                    <td></td>
                    <td>{{ $user->ID_no }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->college }}</td>
                    <td>{{ $user->department }}</td>
                    <td>{{ $user->status }}</td>
                </tr>

            @endforeach
           
            
            </tbody>
        </table>

    </div>

      

@endsection
