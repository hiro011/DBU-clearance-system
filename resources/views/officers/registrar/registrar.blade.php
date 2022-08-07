@extends('Layouts.registrarLayout')

@section('registrarContent')

              
    <style> 
     
        #allStudA{
            background-color: blue;
            color: white;
        }
            
    </style>
    
    <div  style=" overflow-x:auto;">
        <!-- <h2 style="text-align: center;">All Students</h2><hr> -->
    
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
                        <td>Regular</td>
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
