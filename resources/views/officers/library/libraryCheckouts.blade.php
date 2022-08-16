 
@extends('Layouts.navLayout')

@section('content')
    
    <style>
        #viewCA{
        background-color: blue;
        color: white;
        }
        #viewCA:hover{
            color: black; 
            opacity: 0.8;
        }
    </style>

    <style>
      
        body {
            /* font-family: 'Nunito', sans-serif; */
            font-family: "Times New Roman", Times, serif;
            padding-left: 4%;
            padding-right: 4%;
            background-color: gray;
        }
        .sticky {
            width: 78.3%;
        }
        #navbar .active{
            border: 1px solid;
            color: white;
        }
        
        .profile_dd{
            top: 58px; 
            right: 250px;
            height: auto;
        }
        footer{
            width: 98.2%;
        }
  
        .column1{
            width: 96%;
            padding: 10px 20px;
            float: center;
        }
        
        .dropspanCurrent { 
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 22px;
            display: block;
            background: silver;
            text-align: center;
            color: black;
            margin-top: 10px;
        }
        .navbar2{
            display: flex;
            float: left;
            width: 100%;
            background-color: rgb(224, 235, 240);
            margin-bottom: 10px;
            padding-top: 5px;
            height: auto;
        }
 
        .navbar2 a {
            text-align:center;
            float: left;
            display: block;
            padding: 8px 8px 8px 15px;
            color: rgb(0, 0, 0);
            border: 1px groove lightblue;
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .navbar2 a:hover {
            background-color: rgb(85, 85, 221);
            color: #f1f1f1;
        }

        .abutton {
            background-color: #94b5d8;
            border: none;
            border-radius: 3px;
            color: white;
            text-align: left;
            text-decoration: none;
            display: block;
            font-size: 10px;
            margin-bottom: 10px
            cursor: pointer;
        }
        .abutton:hover{
            color: #f1f1f1;
        }
        @media screen and (max-width:600px) {
            
            body {
                padding: 0;
                font-family: "Times New Roman", Times, serif;
            }
            footer{
                width: 95.2%;
            }
            .sticky {
                width: 62.8%;
            }
            table{
                display: block;
                height: 650px;
                overflow-y:auto;
            }
            .column1{
                padding: 0;
                /* height: 100vh; */
            }
            
        }

    </style>
   
    <style>
        .search-btn{
            width: 80px;
            color: black;
            font-size: 14px;
            border-radius: 4px;
            margin-top: 25px;
            border: none;
            background-color: #71a3da;
        }
        
        .searchit{
            align-items: center;
            width: 80%;
            height: 100%;
            outline: none;
            border: 1px solid #d5dbd9;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        .searchForm{
            margin-left: 20%;
            display: flex;
            float: left;
            margin-bottom: 25px;
            padding-bottom: 10px;
            height: 40px;
            width: 50%;
        }
        
        .searchDiv{
            display: flex; 
            float: center;
            width: 100vh;
        }
        .abtnCont{
            display: block;
            padding-top: 3px;
            height: 40px;
        }
        .abtn {
            color: black;
            font-size: 14px;
            border-radius: 4px;
            border: none;
            background-color: #94b5d8;
            padding: 10px;
            text-align: center;
            margin-left: 20px;
            text-decoration: none;
            width: 130px;
            cursor: pointer; 
        }
        .abtn:hover{
            color: #f1f1f1;
            background-color: blue;
        }
        .search-btn:hover{
            opacity: 0.7;
            color: white;
        }
        button{
            width: 40px;
            color: black;
            font-size: 14px;
            border-radius: 4px;
            border: none;
            background-color: transparent;
            background-color: #71a3da;
        }
        .container{
            padding-right: 20px;
            padding-left: 10px;
        }
        .container input{
            max-width: 100px;
        }
        .container select{
            cursor: pointer;
        }
         
        @media screen and (max-width:600px) {


            .container{
                padding: 0;
            }
            table{
                font-size: 12px;
                padding: 1px;
            }
            .search-btn{
                width: 80px;
                color: black;
                font-size: 14px;
                border-radius: 4px;
                border: none;
                background-color: #71a3da;
            }
            .searchit{
                width: 38%;
            }

            .searchForm{
                margin: 10px;
                width: 80%;
                float:center;
            }
            .abtnCont{
                display: block;
                float:left;
                padding: 10px;
            }
             
            .searchDiv{
                display: inline-block;
                vertical-align: top;
                line-height: 1;
            }
            
        }
        

    </style>
                    
    <style>
        .clearance-form{
            background: white;
            padding: 40px;
            margin: 20px;
            margin-left: 15%;
            width: 65%;
        }
        .clearance-form .clearance-top h2, .clearance-form .clearance-top h1{
            text-align: center;
        }
        .clearance-form .underline-value{
            text-decoration: underline;
            margin-left: 5px;
        }
        .clearance-form .clearance-middle{
            /* align-content: space-between; */
        } 
        .clearance-form .clearance-middle .firstc, 
        .clearance-form .clearance-bottom .firstc{
            margin-left: 20px;
        }
        .clearance-form .clearance-bottom .center-text{
            margin-left: 40%;
            text-align: center;
        }
        .stamp{
            /* font-family: Copperplate, Papyrus, fantasy; */
            /* display: block; */
            font-family: 'Trade Winds';
            border: 2px groove   #0154cf;
            font-size: 12px;
            margin-bottom: 10px;
            color: #0154cf;
            font-weight: 700;
        }
        .rotate{
            transform: rotate(-2deg);

        }
    </style>            

    <span class="dropspanCurrent" >Registerar - Requested Clearance</span></br>
    <div class="navbar2">
    
        <ul style="margin-top: 0;">
            <a href="/officers/library" class="abutton"  id="viewCA" style="margin-left: 5px;">Back</a>
        </ul>
        
    </div>

    <div style="margin-bottom:20px;">

        <div id="sDiv2" class="searchDiv2" >  
            <form method="POST" action="{{ route('library.returnBook') }}"  class="searchForm">
                @csrf
                
                <div class="inputfield" style="width: 100%;">
                    <label style="color: green; padding-left: 10px;">Barcode</label> </br>
                    <input type="text" class="searchit" style="width: 95%; margitn-top: 10px;" name="barcode" placeholder="Enter barcode" 
                        value="{{ old('barcode') }}"> </br>
                </div> 
                <button type="submit" class="search-btn" style="margitn-top: 10px;">Return</button>
            </form>
            
        </div>

    </div>
 
    <section id="columns">
        
        <div class="body-container">

            <div class="column1">
                <!-- content place -->
                

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
                                            <th>Card No</th>
                                            <th>Barcode</th>
                                            <th>Title</th>
                                            <th>Location</th>
                                            <th>Due Date</th>
                                            <th>Checkout_date</th>
                                            <th>Updated By</th>
                                            <th>charge</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>

                                    @foreach ($checkouts as $user)
                                        <tr>
                                            <td></td>
                                            <td>{{ $user->Card_no }}</td>
                                            <td>{{ $user->barcode }} </td>
                                            <td>{{ $user->title }}</td>
                                            <td>{{ $user->location }}</td>
                                            <td>{{ $user->due_date }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td>{{ $user->charge }}</td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div> 
    </section>


@endsection
 
 
