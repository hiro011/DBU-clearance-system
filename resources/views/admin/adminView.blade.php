
@extends('Layouts.adminLayout')

@section('adminContent')

  <style> 

    /* Add an active class to the active button/link */
    #adminsA{
        background-color: blue;
        color: white;
    }
     
  </style>

  <div class="table-container" >
    <!-- <h2 style="text-align: center;">Registered Users</h2><hr> -->

    <table border = "1" >
        <thead>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Add by</th>
            <th>Created Date</th>
        </tr>
        </thead>
        
        <tbody>

            @foreach ($userLoginTable as $user)
                
              <tr>
                <td></td>
                <td>{{ $user->ID_no }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->add_by }}</td>
                <td>{{ $user->created_at }}</td>

              </tr>

            @endforeach
              
        
        </tbody>
    </table>

  </div>

      

@endsection




