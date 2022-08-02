 

@extends('Layouts.navLayout')

@section('content')

    <style>
        .profile_dd{
            top: 58px; 
            right: 240px;
            height: auto;
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
            .profile_dd{
                top: 58px; 
                right: 310px;
                height: auto;
            }
        }
    </style>

    <section id="columns">
        <div class="body-container">
            <div class="column" style="padding-top: 50px;">
                <span class="dropspanCurrent" style="padding-left: 73px;">Regular Student</span></br>
                <hr size="3" width="100%" color="gray">
                <a href="/user/regular student" class="requestA" style="border-radius: 4px;">Request Form</a>
                <a href="/user/regular student/form" class="submitA" style="border-radius: 4px;">Clearance Submit Form</a>
                <hr size="3" width="100%" color="gray">

            </div>  

            <div class="column1" >

                <!-- content place -->
                @yield('studContent')
            
            </div>

    
        </div> 
    </section>


@endsection

