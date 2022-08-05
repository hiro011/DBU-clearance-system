@extends('Layouts.registrarLayout')

@section('registrarContent')

    <style> 
              
        body {
            font-family: 'Nunito', sans-serif;
            padding-left: 6%;
            padding-right: 13%;
            background-color: gray;
        }
        
        .sticky {
            width: 70%;
        }
        #navbar .active{
            border: 1px solid;
            color: white;
        }
        
        @media screen and (max-width:420px) {
            
            body {
                padding-right: 6%;
                font-family: "Times New Roman", Times, serif;
            }
            .sticky {
                width: 73%;
            }
            
        }
        .profile_dd{
            top: 58px; 
            right: 330px;
            height: auto;
        }
       
        #regStudA{
            background-color: blue;
            color: white;
        }
        
    </style>
      
       

      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
         </tr>
         @endforeach
      </table>

@endsection
