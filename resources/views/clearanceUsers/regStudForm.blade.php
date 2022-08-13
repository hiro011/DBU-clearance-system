
@extends('Layouts.clearanceLayout')

@section('clearanceContent')

    <style>
        #regStudA {
            background-color: blue;
            color: white;
        } 
        #regStudA:hover {
            opacity: 0.8;
            color: black;
        } 
    </style>

    <section id="columns">
        <div class="body-container">
            <div class="column1" >

                @if($regStudResidence)
                    @if(($regStudResidence->status)==='leave')
                        <style>
                            .residence{
                                border-left: 12px solid #47D764;
                            } 
                            .residence .success{
                                display: inline;
                            }
                        </style>
                    @endif
                    @if(($regStudResidence->status)==='stay')
                        <style>
                            .residence{
                                border-left: 12px solid #ff355b;
                            }
                            .residence .fail{
                                display: inline;
                            }
                        </style>
                    @endif
                @endif
                @if(!$regStudResidence)
                    <style>
                        .residence{
                            border-left: 12px solid #47D764;
                        } 
                        .residence .success{
                            display: inline;
                        }
                    </style>
                @endif

                @if(!$regDining)
                    <style>
                        .dining{
                            border-left: 12px solid #47D764;
                        } 
                        .dining .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if($regDining)
                    <style>
                        .dining{
                            border-left: 12px solid #ff355b;
                        }
                        .dining .fail{
                            display: inline;
                        }
                    </style>
                @endif
                    
                @if(($regRegistrar->status)!=='On-Class')
                    <style>
                        .registrar{
                            border-left: 12px solid #47D764;
                        } 
                        .registrar .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if(($regRegistrar->status)==='On-Class')
                    <style>
                        .registrar{
                            border-left: 12px solid #ff355b;
                        }
                        .registrar .fail{
                            display: inline;
                        }
                    </style>
                @endif

                @if(!$regLibrary)
                    <style>
                        .library{
                            border-left: 12px solid #47D764;
                        } 
                        .library .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if($regLibrary)
                    <style>
                        .library{
                            border-left: 12px solid #ff355b;
                        }
                        .library .fail{
                            display: inline;
                        }
                    </style>
                @endif
                    
                @if(!$regDepHead)
                    <style>
                        .department{
                            border-left: 12px solid #47D764;
                        } 
                        .department .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if($regDepHead)
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

                    <form action="{{ route('clearanceUsers.checkRegular') }}" method="POST">

                        @csrf
                        <div class="accordion department">
                            <input type="checkbox" name="example_accordion" id="section1" class="accordion__input">
                            <label for="section1" class="accordion__label">
                                @if(!$regDepHead)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if($regDepHead)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">{{ $regStud['department'] }} department</span>
                            </label>

                            <div class="accordion__content">
                                @if(!$regDepHead)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        Your department have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if($regDepHead)
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
                                @if(!$regLibrary)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if($regLibrary)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Main Library</span>
                            </label>

                            <div class="accordion__content">
                                @if(!$regLibrary)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        The Main Library have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if($regLibrary)
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
                         
                        <div class="accordion residence">
                            <input type="checkbox" name="example_accordion" id="section3" class="accordion__input">
                            <label for="section3" class="accordion__label">

                                @if($regStudResidence)
                                    @if(($regStudResidence->status)==='leave')
                                    <img src="/img/success-icon.png" alt="success-icon" class="success">
                                    @endif
                                    @if(($regStudResidence->status)==='stay')
                                    <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                    @endif
                                @endif
                                @if(!$regStudResidence)
                                    <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Student Residence Office</span>
                            </label>

                            <div class="accordion__content">
                                @if($regStudResidence)
                                    @if(($regStudResidence->status)==='leave')
                                        <p style="color: green; ">Approved</p>
                                        <p>
                                            The student residence office  have approved your Clearance,
                                            you can procceed to the next clearance
                                        </p>
                                    @endif
                                    @if(($regStudResidence->status)==='stay')
                                        <p style="color: red;"> Declined </p>
                                        <p>
                                            You didnt get the approval of the student residence office, 
                                            that means you didn't submit your dorm and dorm materials, 
                                            you have to give back your dorm materials before requesting clearance,
                                            if there is any problem you can go check in the student residence office,
                                        </p>
                                    @endif
                                @endif
                                @if(!$regStudResidence)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        Your request have been approved ,
                                        you can procceed to the next clearance
                                    </p>
                                @endif

                            </div>
                        </div>
                        
                        <div class="accordion dining">
                            <input type="checkbox" name="example_accordion" id="section4" class="accordion__input">
                            <label for="section4" class="accordion__label">
                                @if(!$regDining)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if($regDining)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Dining Office</span>
                            </label>

                            <div class="accordion__content">
                                @if(!$regDining)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        Dining Office have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if($regDining)
                                    <p style="color: red;"> Declined </p>
                                    <p>
                                        You didnt get the approval of the dining office, 
                                        that means you are non-cafe user, 
                                        you have to ask dining office to remove you from non cafe lists before requesting clearance,
                                        if there is any problem you can go check in the dining office
                                    </p>
                                @endif
                                    
                            </div>
                        </div>
                         
                        <div class="accordion registrar">
                            <input type="checkbox" name="example_accordion" id="section5" class="accordion__input">
                            <label for="section5" class="accordion__label">
                                @if(($regRegistrar->status)!=='On-Class')
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if(($regRegistrar->status) ==='On-Class')
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Registrar Office</span>
                            </label>

                            <div class="accordion__content">
                                @if(($regRegistrar->status)!=='On-Class')
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        The Registrar office have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if(($regRegistrar->status)==='On-Class')
                                    <p style="color: red;"> Declined </p>
                                    <p>
                                        Your status is " {{ $regRegistrar['status'] }} "
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

