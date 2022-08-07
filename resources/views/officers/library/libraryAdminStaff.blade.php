                
@extends('Layouts.libraryLayout')

@section('libraryContent')
          
    <style> 
     
        #adminStaffsA{
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
                <th>Card No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Catagory</th>
                <th>College</th>
                <th>Department</th>
                <th>Add By</th>
            </tr>
            </thead>
            
            <tbody>

                @foreach ($adminStaffTable as $user)
                    <tr>
                        <td></td>
                        <td>{{ $user->Card_no }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->catagory }}</td>
                        <td>{{ $user->college }}</td>
                        <td>{{ $user->department }}</td>
                        <td>{{ $user->add_by }}</td>
                    </tr>

                @endforeach
               
            </tbody>
        </table>

    </div>

      
 
@endsection
