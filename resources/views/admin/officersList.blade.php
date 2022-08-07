
@extends('Layouts.adminLayout')

@section('adminContent')

    <style> 

        /* Add an active class to the active button/link */
        #officersA{
            background-color: blue;
            color: white;
        }

    </style>

   <div  style=" overflow-x:auto;">
        <!-- <h2 style="text-align: center;">Registered Officers</h2><hr> -->
    
        <table border = "1" >
            <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>College</th>
                <th>Department</th>
                <th>Add by</th>
                <th>Created Date</th>
            </tr>
            </thead>
            
            <tbody>
 
                @foreach ($officerLoginTable as $user)

                  <tr>
                      <td></td>
                      <td>{{ $user->ID_no }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->college }}</td>
                      <td>{{ $user->department }}</td>
                      <td>{{ $user->add_by }}</td>
                      <td>{{ $user->created_at }}</td>

                  </tr>
                    
                @endforeach

            
            </tbody>
        </table>

    </div>

      

@endsection




