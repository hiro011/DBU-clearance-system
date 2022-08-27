 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link rel="stylesheet" href="/css/main.css">

    <style>
            .navbar_right{
                display: flex;
                list-style: none;
                box-sizing: border-box;
                font-family: 'Montserrat';
            }
            .topnav a.active:hover {
                opacity: 0.6;
            }
            
            .profile img{
                width: 45px;
                height: 50px;
            }

            .profile .down-icon{
                width: 25px;
                height: 20px;
            }

            .profile .icon_wrap{
                position: relative;
                display: flex;
                align-items: center;
                cursor: pointer;
                border-radius: 5px;
                padding-right: 20px;
                padding-left: 5px;
                background: linear-gradient(120deg, #1e7585, #0997bb, #19caf7);
            }
           
            .profile_dd{
                position: absolute;
                position: fixed;
                top: 60px; 
                right: 28px;
                /* margin-right: 220px;
                margin-top: 8px; */
                user-select: none;
                background: white;
                border: 1px solid #c7d8e2;
                width: 150px;
                height: auto;
                display: none;
                border-radius: 8px;
                box-shadow: 10px 10px 35px rgba(0,0,0,0.125),
                            -10px -10px 35px rgba(0,0,0,0.125);
               
                align-items: left;
                z-index: 1;
            }

            .profile_dd:before{
                content: "";
                position: absolute;
                top: -20px;
                right: 15px;
                border: 5px solid;
                border-color: transparent transparent #fff transparent;
                width: 10px;

            }
 
            .profile_dd .profile_ul  a{
                color: black;
                padding: 8px 0px 8px 0px;
                text-decoration: none;
                border-radius: 5px;
                font-size: 18px;
                display: block;
                transition: 0.3s;
                position: relative;
                width: 100%;
            }

            .alert-success{
                display: block;
                background-color: rgb(201, 235, 201);
                text-align: center;
                color: darkgreen;
                height: auto;
                border-radius: 5px;
                width: 75%;
                padding-top: 3%;
                margin-bottom: 10px;
                opacity: 0.9;
            }
            .alert-danger{
                display: block;
                background-color: rgb(241, 211, 199);
                text-align: center;
                color: darkred;
                height: auto;
                border-radius: 5px;
                width: 75%;
                padding-top: 3%;
                margin-bottom: 10px;
                opacity: 0.8;
            }
            .profile_dd .spanText{
                color: black;
                font-size: 15px;
                padding: 10px;
            }

            .profile_dd .profile_ul  a:hover{
                color: #3b80f9;
                background: transparent;
                background: #d3dff8;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
                cursor: pointer;
            }

            .profile .icon_wrap:hover{
                color: #3b80f9;
                opacity: 0.8;
            }
            
            .profile:hover .profile_dd{
                display: block;
            }
            
            .navbar_left a{
                padding: 0;
                width: 60px;
                height: 45px;
                border: none;
            }
            .navbar_left a:hover{
                opacity: 0.6;
            }
            .navbar_left img{
                width: 70px;
                height: 50px;
                border-radius: 8px;
            }

            table {
                display: block;
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                height: 100vh;
                border: 2px solid #ddd;
                margin-bottom: 5px;
                background-color: transparent;
                background-color: #fff;
                overflow-y: scroll;
                overflow-x: auto;
                font-size: 16px;
            }
            th, td {
                text-align: left;
                /* line-height: 1.42857143; */
                line-height: 2.5;
                vertical-align: top;
                border-bottom-width: 2px;
            }

            tr:nth-child(even){background-color: #f2f2f2}
            table tr:nth-child(){
            counter-reset: rowNumber;
            }
            table tr {
            counter-increment: rowNumber;
            }
            table tr td:first-child::before {
            content: counter(rowNumber);
            min-width: 1em;
            margin-right: 0.5em;
            }
        
            tr:hover {
                background-color: #f5f5f5
            }
    
            @media screen and (max-width:600px) {
                .table {
                    width: 100%;
                    margin-bottom: 15px;
                    overflow-y: hidden;
                    -ms-overflow-style: -ms-autohiding-scrollbar;
                    border: 1px solid #ddd;
                    margin-bottom: 0;
                }
    
                th, td {
                    border: 0;
                }
    
            }
             
        </style>

 </head>
 <style>
   .welcome{
      color: blue;
      text-decoration: underline;
      margin-top: 10%;
      text-align: center;
   }
 </style>
 
 <body>

    <h1  class="welcome">Welcome there I am ahmed</h1>

   <div class="studLists">
 
      <div class="container" style=" overflow-x:auto; overflow-y:auto;">
         <br />
         <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                  <div class="table-responsive">
                     
                     <table class="table table-bordered table-striped">
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

                              @foreach ($Table as $user)
                                 
                                 <tr>
                                    <td></td>
                                    <td>{{ $user->ID_no }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->year }}</td>
                                    <td>{{ $user->program }}</td>
                                    <td>{{ $user->college }}</td>
                                    <td>{{ $user->department }}</td>
                                    <td>{{ $user->status }}</td>
                                 </tr>

                              @endforeach

                        </tbody>
                     </table>

                  </div>
            </div>
         </div>
      </div>

   </div>


 </body>
 </html>