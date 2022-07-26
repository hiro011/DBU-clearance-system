
@extends('Layouts.layout2')
@section('content')

<style>
    input[type="submit"]{
    border: 1px solid;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
    margin-top: 20px;
    }
    input[type="submit"]:hover{
    border-color: #88a5b8;
    background: #4d94c4;
    transition: .5s;
    }

    *, 
    *::before,
    *::after{
        margin: 0;
        padding: 0;
        box-sizing: inherit;

    }
    html{
        font-family: 'Roboto', sans-serif;
        font-size: 10px;
        box-sizing: border-box;
    }
    .item-list1{
        width: 100%;
        height: 100vh;
        background-color: #3c4053;
        display: flex;
        align-items: left;
        justify-content: left; 
    }
    .container{
        width: 100%;
        max-width: 80rem;
        /* margin: 0 auto;
        padding: 0 1.5rem; */
    }
    .accordion-item{
        background-color: #283042;
        border-radius: .4rem;
        margin-bottom: 1rem;
        padding: 1rem;
        box-shadow: .5rem 2px .5rem rgba(0,0,0,.1);
    }
    .accordion-link{
        font-size: 1.6rem;
        color: rgba(255,255,255,.8);
        text-decoration: none;
        background-color: #283042;
        width: 100%; 
        display: flex;
        align-items: right;
        justify-content: space-between;
        padding: 1rem 0;
    }
    .accordion-link ion-icon {
        color: #e7d5ff;
        padding: .5rem;
    }
    ion-icon[name="remove-outline"] {
        display: none;
    }
    .comment{
        max-height: 0;
        overflow: hidden;
        position: relative;
        background-color: #212838;
    }
    .comment::before{
        content: "";
        position: absolute;
        width: .6rem;
        height: 90%;
        background-color: #8fc460;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
    }
    .comment p{
        font-size: 1.4rerm;
        color: rgba(255,255,255,.6)
    }
    
    
</style>

<script>
    
</script>

<div class="box" style="padding-left: 10px; position: center;">
    <h1>
    Welcome to Debre Berhan University Clearance Processing System
    </h1> </br>

    <table>
        <tr>
            <th>Officers</th>
            <th>Status</th>
        </tr>
        <tr>
            <td> Registerar</td>
            <td>Approved</td>
        </tr>
        <tr>
            <td>Department Dean</td>
            <td>Approved</td>
        </tr>
        <tr>
            <td>Main Library</td>
            <td> Approved</td>
        </tr>
        <tr>
            <td>Residence Office</td>
            <td>Approved </td>
        </tr>
        <tr>
            <td>Dining Room</td>
            <td> Approved</td>
        </tr>
         
    </table>
    
    <input id="myButton" type="submit" value="Submit">
      
 

</div> </br>

<section class="item-list1">
    <div class="container">
        <div class="accordion">
            <div class="accordion-item" id="item1">
                <a class="accordion-link" href="#item1">
                    Registerar
                    <ion-icon name="add-outline"></ion-icon>
                    <ion-icon name="remove-outline"></ion-icon>
                </a>
                <div class="comment">
                    <p> 
                    comments: you didnt finish the steps need for clearance 
                    to be completed come at main library and finish 
                    </p>
                </div>
            </div> 
            <div class="accordion-item" id="item2">
                <a class="accordion-link" href="#item2">
                    Department Dean
                    <ion-icon name="add-outline"></ion-icon>
                    <ion-icon name="remove-outline"></ion-icon>
                </a>
                <div class="comment">
                    <p> 
                    comments: you didnt finish the steps need for clearance 
                    to be completed come at main library and finish 
                    </p>
                </div>
            </div>
            <div class="accordion-item" id="item3">
                <a class="accordion-link" href="#item3">
                    Main Library
                    <ion-icon name="add-outline"></ion-icon>
                    <ion-icon name="remove-outline"></ion-icon>
                </a>
                <div class="comment">
                    <p> 
                    comments: you didnt finish the steps need for clearance 
                    to be completed come at main library and finish 
                    </p>
                </div>
            </div>
            <div class="accordion-item" id="item4">
                <a class="accordion-link" href="#item4">
                    Residence Office
                    <ion-icon name="add-outline"></ion-icon>
                    <ion-icon name="remove-outline"></ion-icon>
                </a>
                <div class="comment">
                    <p> 
                    comments: you didnt finish the steps need for clearance 
                    to be completed come at main library and finish 
                    </p>
                </div>
            </div>
            <div class="accordion-item" id="item5">
                <a class="accordion-link" href="#item5">
                    Dining Room
                    <ion-icon name="add-outline"></ion-icon>
                    <ion-icon name="remove-outline"></ion-icon>
                </a>
                <div class="comment">
                    <p> 
                    comments: you didnt finish the steps need for clearance 
                    to be completed come at main library and finish 
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- script link for dropdown icon (ionicons) -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection




