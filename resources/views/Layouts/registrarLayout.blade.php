@extends('Layouts.navLayout')

@section('content')


    <style>
      
        body {
            font-family: 'Nunito', sans-serif;
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
            right: 250px;
            height: auto;
        }
        footer{
            width: 98.2%;
        }
  
        .column1{
            width: 95.5%;
            padding: 10px 20px;
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

    </style>
   
   
    <span class="dropspanCurrent" >Registerar</span></br>
    <div class="navbar2">
    
        <ul style="margin-top: 0;">
            <a href="/officers/registrar" id="allStudA">All Student</a>
            <a href="/officers/registrar/regular students" id="regStudA">Regular Student</a>
            <a href="/officers/registrar/extension students" id="extnStudA">Extension Student</a>
            <a href="/officers/registrar/distance students" id="disStudA">Distance Student</a>

            <a href="/officers/registrar/new student" class="abutton"  id="newStudA">New Student</a>
            <a href="officers" class="abutton"  id="reqCA" style="margin-left: 10px;">Request Clearance</a>
        </ul>
        

    </div>
 
    <section id="columns">
        <div class="body-container">
            <!--             
            <div class="column"   >
                
                <div>
                    </br>
                    <a href="/officers/registrar/new student" class="abutton"  id="newStudA"> 
                        New Student   
                    </a>
                    <span class="dropspanCurrent" style="background: white; color: black; padding-left: 40px; margin-top: 10%;">Registerd Students</span></br>

                    <ul style="margin-top: 0;">
                        <a href="/officers/registrar" id="allStudA">All Student</a>
                        <a href="/officers/registrar/regular students" id="regStudA">Regular Student</a>
                        <a href="/officers/registrar/extension students" id="extnStudA">Extension Student</a>
                        <a href="/officers/registrar/distance students" id="disStudA">Distance Student</a>
            

                    </ul>
                    
            
                </div>
                
            </div> -->

            <div class="column1">
                <!-- content place -->
  
                @yield('registrarContent')


            </div>

        </div> 
    </section>


@endsection

@section('bottomScripts')

    <script>

        $(document).ready(function(){
            $("#list").on('change', function(){
                $(".inputfield1").hide();
                $("#" + $(this).val()).fadeIn(1);
            }).change();
        });

        $(document).ready(function(){
            $("#select_c").on('change', function(){
                $(".chooseField1").hide();
                $("#" + $(this).val()).fadeIn(1);
            }).change();
        });

        function toggleText(){
            var x = document.getElementById("sDiv2");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            
            $.ajaxSetup({
            headers:{
                'X-CSRF-Token' : $("input[name=_token]").val()
            }
            });

            $('#editable').Tabledit({
            url:'{{ route("tabledit.registrarTableEdit") }}',
            dataType:"json",
            columns:{
                identifier:[0, 'id'],
                identifier:[1, 'ID_no'], 
                editable:[[2, 'name'], [3, 'gender', '{"Male":"Male", "Female":"Female", "Unspecified":"Unspecified"}'],
                [4, 'year'], [5, 'program', '{"Regular":"Regular", "Extension":"Extension", "Distance":"Distance"}'], [6, 'college'], 
                [7, 'department'], [8, 'status', '{"On-Class":"On-Class", "Dismissed":"Dismissed", "Withdrow":"Withdrow", "Transfered":"Transfered"}']]
            },
            restoreButton:false,
            onSuccess:function(data, textStatus, jqXHR)
            {
                if(data.action == 'delete')
                {
                $('#'+data.id).remove();
                }
            }
            });

        });  
    </script>
@endsection

@section('headerLinks')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

    <script type="text/javascript" src="/jquery/jquery-tabledit/jquery.tabledit.min.js"></script>
    <script type="text/javascript" src="/jquery/jquery-tabledit/jquery.tabledit.js"></script>
    <script type="text/javascript" src="/jquery/jquery.js"></script>
    <script type="text/javascript" src="/jquery/jquery-5.js"></script>
    <script type="text/javascript" src="/jquery/table-edit-02.js"></script>
    <script type="text/javascript" src="/jquery/ajax-jquery.js"></script>
    <script type="text/javascript" src="/jquery/ajax-query-02.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

@endsection


