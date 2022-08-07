@extends('Layouts.hrmLayout')

@section('hrmContent')

              
    <style> 
     
        #allEmployeeA{
            background-color: blue;
            color: white;
        }
            
    </style>
    
    <div  style=" overflow-x:auto;">
        <!-- <h2 style="text-align: center;">All Employees</h2><hr> -->
    
        <table border = "1" >
            <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Birth Date</th>
                <th>Age</th>
                <th>Employee Type</th>
                <th>Guarentor Name</th>
                <th>Guarentor Phone</th>
                <th>Level of Education</th>
                <th>Job Title</th>
                <th>Salery</th>
                <th>Created Date</th>
            </tr>
            </thead>
            
            <tbody>

                @foreach ($employeeTable as $user)
                    <tr>
                        <td></td>
                        <td>{{ $user->ID_no }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->birth_date }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->employee_type }}</td>
                        <td>{{ $user->guarentor_name }}</td>
                        <td>{{ $user->guarentor_phone }}</td>
                        <td>{{ $user->level_of_education }}</td>
                        <td>{{ $user->jop_title }}</td>
                        <td>{{ $user->salery }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>

                @endforeach
               
            </tbody>
        </table>

    </div>

      

@endsection
