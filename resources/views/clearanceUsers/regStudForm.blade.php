
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

    <style>
        .submitA {
            background-color: blue;
            color: white;
        } 
        .accordion-container {
            margin: 8%;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            overflow: hidden;
            font-family: "Quicksand", sans-serif;
            background: #b9ebff;
        }
        .accordion-container .accordion{
            margin: 2%;
            background: #8dcee7;
            opacity: 1;
            border-radius: 8px;
            align-self: center;
            /* grid-template-columns: 1.3fr 6fr 0.5fr; */
        }

        .accordion__label,
        .accordion__content {
            padding: 14px 20px;
        }
       
        .accordion__label {
            display: flex;
            color: black;
            font-weight: 500;
            cursor: pointer;
            align-self: center;
            position: relative;
            transition: background 0.1s;
        }

        .accordion__label:hover {
            background: rgba(0, 0, 0, 0.1);
        }

        .accordion__label::after {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px;
            width: 12px;
            height: 6px;
            /* background-image: url('data:image/svg+xml;utf8,<svg width="100" height="50" xmlns="/img/caret-down-outline.svg"><polygon points="0,0 100,0 50,50" style="fill:%23FFFFFF99;" /></svg>'); */
            background-size: contain;
            transition: transform 0.4s;
        }

        .accordion__content {
            background: #ffffff;
            line-height: 1.6;
            font-size: 0.85em;
            display: none;
        }

        .accordion__input {
            display: none;
        }

        .accordion__input:checked ~ .accordion__content {
            display: block;
        }

        .accordion__input:checked ~ .accordion__label::after {
            transform: translateY(-50%) rotate(0.5turn);
        }
        .accordion__input:checked ~ .acc-down-icon::after{
            transform: rotate(180deg);
        }
       

        .submit-btn-container{
            align-items: center;
        }

        .accordion-container .submit-btn {
            font-size: 16px;
            margin: 5%;
            border: none;
            border-radius: 5px;
            float: left;
            background-color: #009578;
            color: white;
            cursor: pointer;
            width: 50%;
            height: 40px;
        }

        .accordion-container .submit-btn:hover {
            opacity: 0.8;
        }

        .accordion img{
            width: 25px; 
            height: 25px;
        }
        .acc-down-icon{
            width: 15px; 
            height: 15px;
        }
       
    </style>

    <!-- warning  -->
<!--     
    <style>
        .accordion{
            border-left: 12px solid #FFC021;
        } 
        .accordion .warning{
            display: inline;
        }
        
    </style> -->

    <!-- success  -->
    <style>
        .accordion{
            border-left: 12px solid #47D764;
        } 
        .accordion .success{
            display: inline;
        }

    </style>

    <!-- fail  -->
<!--     
    <style>
        .accordion{
            border-left: 12px solid #ff355b;
        }
        .accordion .fail{
            display: inline;
        }
    </style> -->


    <div class="accordion-container">

        <div class="accordion">
             
            <div class="container-1">
                <input type="checkbox" name="example_accordion" id="section1" class="accordion__input">
                <label for="section1" class="accordion__label">

                    <img src="/img/success-icon.png" alt="success-icon" class="success">
                    <!-- <img src="/img/error-icon.png" alt="error-icon" class="fail">
                    <img src="/img/warning-icon.png" alt="warning-icon" class="warning"> -->
    
                    <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                    <span style="margin-left: 5px;"> Department</span>
                </label>
                <div class="accordion__content">
                    <p>Remark</p>
                    <p>
                        Pass 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
                        aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
                        voluptatibus fugiat fuga facere!
                    </p>
                    <p>
                        Fail 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
                        aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
                        voluptatibus fugiat fuga facere!
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion">
            <input type="checkbox" name="example_accordion" id="section2" class="accordion__input">
            <label for="section2" class="accordion__label">
                <img src="/img/success-icon.png" alt="success-icon" class="success">
                <!-- <img src="/img/error-icon.png" alt="error-icon" class="fail">
                <img src="/img/warning-icon.png" alt="warning-icon" class="warning"> -->

                <img src="/img/caret-down-outline.svg" alt="down-icon" class="acc-down-icon">
                <span style="margin-left: 5px;">Main Library</span>
            </label>
            <div class="accordion__content">
            <p>Section #2</p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
                aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
                voluptatibus fugiat fuga facere!
            </p>
            </div>
        </div>

        <div class="accordion">
            <input type="checkbox" name="example_accordion" id="section3" class="accordion__input">
            <label for="section3" class="accordion__label">Residence Office</label>
            <div class="accordion__content">
            <p>Section #3</p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
                aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
                voluptatibus fugiat fuga facere!
            </p>
            </div>
        </div>

        <div class="accordion">
            <input type="checkbox" name="example_accordion" id="section4" class="accordion__input">
            <label for="section4" class="accordion__label">Registrar</label>
            <div class="accordion__content">
            <p>Section #3</p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
                aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
                voluptatibus fugiat fuga facere!
            </p>
            </div>
        </div>
         <div class="accordion">
            <input type="checkbox" name="example_accordion" id="section4" class="accordion__input">
            <label for="section4" class="accordion__label">Dining Office</label>
            <div class="accordion__content">
            <p>Section #3</p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
                aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
                voluptatibus fugiat fuga facere!
            </p>
            </div>
        </div>
        
        <div class="submit-btn-container">
            <input type="button" value="submit" class="submit-btn">
        </div>
    </div>


    </div>

    
</div> 
</section>


@endsection

