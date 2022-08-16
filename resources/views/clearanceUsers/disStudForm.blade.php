
@extends('Layouts.clearanceLayout')

@section('clearanceContent')

    <style>
        #disStudA {
            background-color: blue;
            color: white;
        } 
        #disStudA:hover {
            opacity: 0.8;
            color: black;
        } 
    </style>

    <section id="columns">
        <div class="body-container">
            <div class="column1" >

                @if(($disContinuing->status)!=='On-Class')
                    <style>
                        .continuing{
                            border-left: 12px solid #47D764;
                        } 
                        .continuing .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if(($disContinuing->status)==='On-Class')
                    <style>
                        .continuing{
                            border-left: 12px solid #ff355b;
                        }
                        .continuing .fail{
                            display: inline;
                        }
                    </style>
                @endif
                    
                @if(($disRegistrar->status)!=='On-Class')
                    <style>
                        .registrar{
                            border-left: 12px solid #47D764;
                        } 
                        .registrar .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if(($disRegistrar->status)==='On-Class')
                    <style>
                        .registrar{
                            border-left: 12px solid #ff355b;
                        }
                        .registrar .fail{
                            display: inline;
                        }
                    </style>
                @endif

                @if(!$disLibrary)
                    <style>
                        .library{
                            border-left: 12px solid #47D764;
                        } 
                        .library .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if($disLibrary)
                    <style>
                        .library{
                            border-left: 12px solid #ff355b;
                        }
                        .library .fail{
                            display: inline;
                        }
                    </style>
                @endif
                    
                @if(!$disDepHead)
                    <style>
                        .department{
                            border-left: 12px solid #47D764;
                        } 
                        .department .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if($disDepHead)
                    <style>
                        .department{
                            border-left: 12px solid #ff355b;
                        }
                        .department .fail{
                            display: inline;
                        }
                    </style>
                @endif
                

                <div class="accordion-container">

                    @if (Session::get('success'))
                        <div class="alert-success">
                            {{ Session::get('success')}}
                        </div>
                    @endif
                    
                    @if (Session::get('fail'))
                        <div class="alert-danger">
                            {{ Session::get('fail')}}
                        </div>
                    @endif

                    @if ($clearance)
                        <div class="alert-success">
                        <span>Your request is submitted you can check Registrar office to get the paper</span>
                        </div>
                    @endif

                    <form action="{{ route('clearanceUsers.checkDistance') }}" method="POST">

                        @csrf
                        <div class="accordion department">
                            <input type="checkbox" name="example_accordion" id="section1" class="accordion__input">
                            <label for="section1" class="accordion__label">
                                @if(!$disDepHead)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if($disDepHead)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">{{ $disStud['department'] }} department</span>
                            </label>

                            <div class="accordion__content">
                                @if(!$disDepHead)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        Your department have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if($disDepHead)
                                    <p style="color: red;"> Declined </p>
                                    <p>
                                        You didnt get the approval of your department, 
                                        you have to ask permission from your department before you request clearance,
                                        if there is any problem you can go check in your department office
                                    </p>
                                @endif
                                    
                            </div>
                        </div>
                         
                        <div class="accordion library">
                            <input type="checkbox" name="example_accordion" id="section2" class="accordion__input">
                            <label for="section2" class="accordion__label">
                                @if(!$disLibrary)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if($disLibrary)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Main Library</span>
                            </label>

                            <div class="accordion__content">
                                @if(!$disLibrary)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        The Main Library have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if($disLibrary)
                                    <p style="color: red;"> Declined </p>
                                    <p>
                                        You didnt get the approval of the main library, 
                                        that means you have checkouts you didnt return, 
                                        you have to return the checkouts before requesting clearance,
                                        if there is any problem you can go check in the main library
                                    </p>
                                @endif
                                    
                            </div>
                        </div>
                         
                        <div class="accordion continuing">
                            <input type="checkbox" name="example_accordion" id="section4" class="accordion__input">
                            <label for="section4" class="accordion__label">
                                @if(!$disContinuing)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if($disContinuing)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Continuing Education Office</span>
                            </label>

                            <div class="accordion__content">
                                @if(!$disContinuing)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        Continuing Education Office have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if($disContinuing)
                                    <p style="color: red;"> Declined </p>
                                    <p>
                                        You didnt get the approval of the Continuing Education office, 
                                        that means you are ..., 
                                        you have to ... before requesting clearance,
                                        if there is any problem you can go check in the Continuing Education office
                                    </p>
                                @endif
                                    
                            </div>
                        </div>
                         
                        <div class="accordion registrar">
                            <input type="checkbox" name="example_accordion" id="section5" class="accordion__input">
                            <label for="section5" class="accordion__label">
                                @if(($disRegistrar->status)!=='On-Class')
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if(($disRegistrar->status)==='On-Class')
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Registrar Office</span>
                            </label>

                            <div class="accordion__content">
                                @if(($disRegistrar->status)!=='On-Class')
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        The Registrar office have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if(($disRegistrar->status)==='On-Class')
                                    <p style="color: red;"> Declined </p>
                                    <p>
                                        Your status is " {{ $disRegistrar->status }} "
                                        You didnt get the approval of the registrar office, 
                                        that means you didn't get permission from registrar, 
                                        you have to get permission from registrar before requesting clearance,
                                        if there is any problem you can go check in the registrar office,
                                    </p>
                                @endif
                                    
                            </div>
                        </div>
                         
                        <div class="submit-btn-container">
                            <input type="submit" value="Request" class="submit-btn">
                        </div>
                    </form>

                </div>


            </div>

        
        </div> 
    </section>


@endsection

