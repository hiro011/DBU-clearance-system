
@extends('Layouts.clearanceLayout')

@section('clearanceContent')

    <style>
        #adminStaffA {
            background-color: blue;
            color: white;
        } 
        #adminStaffA:hover {
            opacity: 0.8;
            color: black;
        } 
    </style>

    <section id="columns">
        <div class="body-container">
            <div class="column1" >

                @if(!$IctProperty)
                    <style>
                        .ictproperty{
                            border-left: 12px solid #47D764;
                        } 
                        .ictproperty .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if($IctProperty)
                    <style>
                        .ictproperty{
                            border-left: 12px solid #ff355b;
                        }
                        .ictproperty .fail{
                            display: inline;
                        }
                    </style>
                @endif
                    
                @if($Cashier)
                    @if(!($Cashier->balance) == 0)
                        <style>
                            .cashier{
                                border-left: 12px solid #47D764;
                            } 
                            .cashier .success{
                                display: inline;
                            }
                        </style>
                    @endif
                    @if(($Cashier->balance) > 0)
                        <style>
                            .cashier{
                                border-left: 12px solid #ff355b;
                            }
                            .cashier .fail{
                                display: inline;
                            }
                        </style>
                    @endif
                    @if(($Cashier->balance) < 0)
                        <style>
                            .cashier{
                                border-left: 12px solid #FFC021;
                            } 
                            .cashier .warning{
                                display: inline;
                            }
                            
                        </style>
                    @endif
                @endif
                @if(!$Cashier)
                    <style>
                        .cashier{
                            border-left: 12px solid #47D764;
                        } 
                        .cashier .success{
                            display: inline;
                        }
                    </style>
                @endif

                @if($Finance)
                    @if(!($Finance->balance) == 0)
                        <style>
                            .finance{
                                border-left: 12px solid #47D764;
                            } 
                            .finance .success{
                                display: inline;
                            }
                        </style>
                    @endif
                    @if(($Finance->balance) > 0)
                        <style>
                            .finance{
                                border-left: 12px solid #ff355b;
                            }
                            .finance .fail{
                                display: inline;
                            }
                        </style>
                    @endif
                    @if(($Finance->balance) < 0)
                        <style>
                            .finance{
                                border-left: 12px solid #FFC021;
                            } 
                            .finance .warning{
                                display: inline;
                            }
                            
                        </style>
                    @endif
                @endif
                @if(!$Finance)
                    <style>
                        .finance{
                            border-left: 12px solid #47D764;
                        } 
                        .finance .success{
                            display: inline;
                        }
                    </style>
                @endif

                @if(!$Library)
                    <style>
                        .library{
                            border-left: 12px solid #47D764;
                        } 
                        .library .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if($Library)
                    <style>
                        .library{
                            border-left: 12px solid #ff355b;
                        }
                        .library .fail{
                            display: inline;
                        }
                    </style>
                @endif
                    
                @if(!$DepHead)
                    <style>
                        .department{
                            border-left: 12px solid #47D764;
                        } 
                        .department .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if($DepHead)
                    <style>
                        .department{
                            border-left: 12px solid #ff355b;
                        }
                        .department .fail{
                            display: inline;
                        }
                    </style>
                @endif

                @if(!$Property)
                    <style>
                        .property{
                            border-left: 12px solid #47D764;
                        } 
                        .property .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if($Property)
                    <style>
                        .property{
                            border-left: 12px solid #ff355b;
                        }
                        .property .fail{
                            display: inline;
                        }
                    </style>
                @endif

                @if(($HRM->status) !== 'working')
                    <style>
                        .HRM{
                            border-left: 12px solid #47D764;
                        } 
                        .HRM .success{
                            display: inline;
                        }
                    </style>
                @endif
                @if(($HRM->status) === 'working')
                    <style>
                        .HRM{
                            border-left: 12px solid #ff355b;
                        }
                        .HRM .fail{
                            display: inline;
                        }
                    </style>
                @endif
                
                @if($AntiCorrupt)
                    @if(($AntiCorrupt->status) !== 'working')
                        <style>
                            .AntiCorrupt{
                                border-left: 12px solid #47D764;
                            } 
                            .AntiCorrupt .success{
                                display: inline;
                            }
                        </style>
                    @endif
                    @if(($AntiCorrupt->status) === 'working')
                        <style>
                            .AntiCorrupt{
                                border-left: 12px solid #ff355b;
                            }
                            .AntiCorrupt .fail{
                                display: inline;
                            }
                        </style>
                    @endif
                @endif
                @if(!$AntiCorrupt)
                    <style>
                        .AntiCorrupt{
                            border-left: 12px solid #ff355b;
                        }
                        .AntiCorrupt .fail{
                            display: inline;
                        }
                    </style>
                @endif
                

                <!--       -->
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
                            <span>Your request is submitted you can check HRM office to get the paper</span>
                        </div>
                    @endif

                    <form action="{{ route('clearanceUsers.checkAdminStaff') }}" method="POST">

                        @csrf
                        
                        <div class="accordion HRM">
                            <input type="checkbox" name="example_accordion" id="section0" class="accordion__input">
                            <label for="section0" class="accordion__label">
                                @if(($HRM->status) !== 'working')
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if(($HRM->status) === 'working')
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                 
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">HRM</span>
                            </label>

                            <div class="accordion__content">
                                @if(($HRM->status) !== 'working')
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        HRM office has approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if(($HRM->status) === 'working')
                                    <p style="color: red;"> Declined </p>
                                    <p>
                                        You didnt get the approval of the HRM office, 
                                        that means you didnt permission , 
                                        you have to get permission before requesting clearance,
                                        if there is any problem you can go check in the HRM office,
                                    </p>
                                @endif
                                    
                            </div>
                        </div>
                        <div class="accordion department">
                            <input type="checkbox" name="example_accordion" id="section1" class="accordion__input">
                            <label for="section1" class="accordion__label">
                                @if(!$DepHead)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if($DepHead)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">{{ $adminstaff['department'] }} department</span>
                            </label>

                            <div class="accordion__content">
                                @if(!$DepHead)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        Your department have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if($DepHead)
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
                                @if(!$Library)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if($Library)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Main Library</span>
                            </label>

                            <div class="accordion__content">
                                @if(!$Library)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        The Main Library have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if($Library)
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
                        <div class="accordion property">
                            <input type="checkbox" name="example_accordion" id="section3" class="accordion__input">
                            <label for="section3" class="accordion__label">
                                @if(!$Property)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if($Property)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Property Office</span>
                            </label>

                            <div class="accordion__content">
                                @if(!$Property)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        The Property Office have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if($Property)
                                    <p style="color: red;"> Declined </p>
                                    <p>
                                        You didnt get the approval of Property Office, 
                                        that means you have checkouts that you didnt return, 
                                        you have to return the checkouts before requesting clearance,
                                        if there is any problem you can go check in the Property Office.
                                    </p>
                                @endif
                                    
                            </div>
                        </div>
                        <div class="accordion ictproperty">
                            <input type="checkbox" name="example_accordion" id="section4" class="accordion__input">
                            <label for="section4" class="accordion__label">
                                @if(!$IctProperty)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                @if($IctProperty)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Ict Property Office</span>
                            </label>

                            <div class="accordion__content">
                                @if(!$IctProperty)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        Ict Property Office have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                @if($IctProperty)
                                    <p style="color: red;"> Declined </p>
                                    <p>
                                        You didnt get the approval of the Ict Property office, 
                                        that means you are ..., 
                                        you have to ... before requesting clearance,
                                        if there is any problem you can go check in the Ict Property office
                                    </p>
                                @endif
                                    
                            </div>
                        </div>
                        <div class="accordion cashier">
                            <input type="checkbox" name="example_accordion" id="section5" class="accordion__input">
                            <label for="section5" class="accordion__label">
                                @if($Cashier)
                                    @if(($Cashier->balance) == 0)
                                    <img src="/img/success-icon.png" alt="success-icon" class="success">
                                    @endif
                                    @if(($Cashier->balance) > 0)
                                    <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                    @endif
                                    @if(($Cashier->balance) < 0)
                                    <img src="/img/warning-icon.png" alt="warning-icon" class="warning">
                                    @endif
                                @endif
                                @if(!$Cashier)
                                    <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Cashier Office</span>
                            </label>

                            <div class="accordion__content">
                                @if($Cashier)
                                    @if(($Cashier->balance)  == 0)
                                        <p style="color: green; ">Approved</p>
                                        <p>
                                            The cashier office have approved your Clearance,
                                            you can procceed to the next clearance
                                        </p>
                                    @endif
                                    @if(($Cashier->balance) > 0)
                                        <p style="color: red;"> Declined </p>
                                        <p>
                                            Your balance in cashier is " {{ $Cashier['balance'] }} "
                                            You didnt get the approval of the cashier office, 
                                            that means you have dept to pay for cashier, 
                                            you have to pay your dept before requesting clearance,
                                            if there is any problem you can go check in the cashier office,
                                        </p>
                                    @endif
                                    @if(($Cashier->balance) > 0)
                                        <p style="color: orangeS;"> Declined </p>
                                        <p>
                                            Your balance in cashier is " {{ $Cashier['balance'] }} "
                                            that means you have some moeny to collect, 
                                            if there is any problem you can go check in the cashier office,
                                        </p>
                                    @endif
                                @endif
                                @if(!$Cashier)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        The cashier office have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                    
                            </div>
                        </div>
                        <div class="accordion finance">
                            <input type="checkbox" name="example_accordion" id="section6" class="accordion__input">
                            <label for="section6" class="accordion__label">
                                @if($Finance)
                                    @if(($Finance->balance) == 0)
                                    <img src="/img/success-icon.png" alt="success-icon" class="success">
                                    @endif
                                    @if(($Finance->balance) > 0)
                                    <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                    @endif
                                    @if(($Finance->balance) < 0)
                                    <img src="/img/warning-icon.png" alt="warning-icon" class="warning">
                                    @endif
                                @endif
                                @if(!$Finance)
                                <img src="/img/success-icon.png" alt="success-icon" class="success">
                                @endif
                                
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Finance Office</span>
                            </label>

                            <div class="accordion__content">
                                @if($Finance)
                                    @if(($Finance->balance)  == 0)
                                        <p style="color: green; ">Approved</p>
                                        <p>
                                            The Finance office have approved your Clearance,
                                            you can procceed to the next clearance
                                        </p>
                                    @endif
                                    @if(($Finance->balance) > 0)
                                        <p style="color: red;"> Declined </p>
                                        <p>
                                            Your balance in Finance is " {{ $Finance['balance'] }} "
                                            You didnt get the approval of the Finance office, 
                                            that means you have dept to pay for Finance, 
                                            you have to pay your dept before requesting clearance,
                                            if there is any problem you can go check in the Finance office,
                                        </p>
                                    @endif
                                    @if(($Finance->balance) > 0)
                                        <p style="color: orangeS;"> Declined </p>
                                        <p>
                                            Your balance in Finance is " {{ $Finance['balance'] }} "
                                            that means you have some moeny to collect, 
                                            if there is any problem you can go check in the Finance office,
                                        </p>
                                    @endif
                                @endif
                                @if(!$Finance)
                                    <p style="color: green; ">Approved</p>
                                    <p>
                                        The Finance office have approved your Clearance,
                                        you can procceed to the next clearance
                                    </p>
                                @endif
                                    
                            </div>
                        </div>
                        <div class="accordion AntiCorrupt">
                            <input type="checkbox" name="example_accordion" id="section8" class="accordion__input">
                            <label for="section8" class="accordion__label">
                                @if($AntiCorrupt)
                                    @if(($AntiCorrupt->status) !== 'working')
                                    <img src="/img/success-icon.png" alt="success-icon" class="success">
                                    @endif
                                    @if(($AntiCorrupt->status) === 'working')
                                    <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                    @endif
                                @endif
                                @if(!$AntiCorrupt)
                                <img src="/img/error-icon.png" alt="error-icon" class="fail">
                                @endif
                                 
                                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                                <span style="margin-left: 3px;">Anti-Corruption Office</span>
                            </label>

                            <div class="accordion__content">
                                @if($AntiCorrupt)
                                    @if(($AntiCorrupt->status) !== 'working')
                                        <p style="color: green; ">Approved</p>
                                        <p>
                                            Anti-Corruption office has approved your Clearance,
                                            you can procceed to the next clearance
                                        </p>
                                    @endif
                                    @if(($AntiCorrupt->status) === 'working')
                                        <p style="color: red;"> Declined </p>
                                        <p>
                                            You didnt get the approval of the Anti-Corruption office, 
                                            that means you didnt ... , 
                                            you have to ... before requesting clearance,
                                            if there is any problem you can go check in the Anti-Corruption office,
                                        </p>
                                    @endif
                                @endif
                                @if(!$AntiCorrupt)
                                    <p style="color: red;"> Declined </p>
                                    <p>
                                        You didnt get the approval of the Anti-Corruption office, 
                                        that means you didnt ... , 
                                        you have to ... before requesting clearance,
                                        if there is any problem you can go check in the Anti-Corruption office,
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

