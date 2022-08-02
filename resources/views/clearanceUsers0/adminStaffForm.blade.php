<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <script src="/jquery/jquery.js"></script>
  

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            border: none;
            font-family: "Poppins",sans-serif;
            font-size: 14px;
        }
        body{
            background-color: #f9f9f9;
        }
   
        .wrapper{
            width: 380px;
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
        }
        .toast{
            width: 100%;
            height: 80px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 7px;
            display: grid;
            grid-template-columns: 1.3fr 6fr 0.5fr;
            box-shadow: 0 15px 30px rgba(0,0,0,0.08);
        }
        .success{
            border-left: 8px solid #47D764;
        }
        .error{
            border-left: 8px solid #ff355b;
        }
        .info{
            border-left: 8px solid #2F86EB;
        }
        .warning{
            border-left: 8px solid #FFC021;
        }
        .error i{
            color: #ff355b;
        }
        .info i{
            color: #2F86EB;
        }
        .warning i{
            color: #FFC021;
        }
        .toast:not(:last-child){
            margin-bottom: 50px;
        }
        .container-1,.container-2{
            align-self: center;
        } 
        .container-1 img{
            width: 30px;
            height: 30px;
        }
        .container-1 i{
            font-size: 35px;
        }
        .success i{
            color: #47D764;
        }
        .container-2 p:first-child{
            color: #101020;
            font-weight: 600;
            font-size: 16px;
        }
        .container-2 p:last-child{
            font-size: 12px;
            font-weight: 400;
            color: #656565;
        }
        .toast button{
            align-self: flex-start;
            background-color: transparent;
            font-size: 25px;
            color: #656565;
            line-height: 0;
            cursor: pointer;
        }
    </style>


</head>
<body>

    
    <div class="wrapper">
        <div class="toast success">
            <div class="container-1">
                <img src="/img/success-icon.png" alt="success-icon">
            </div>
            <div class="container-2">
                <p>Success</p>
                <p>Your changes are saved successfully</p>
            </div>
            <button>&times;</button>
        </div>

        <div class="toast error">
            <div class="container-1">
                <img src="/img/error-icon.png" alt="error-icon">
            </div>
            <div class="container-2">
                <p>Error</p>
                <p>Error has occured while saving changes.</p>
            </div>
            <button>&times;</button>
        </div>

        <div class="toast info">
            <div class="container-1">
                <i class="fas fa-info-circle"></i>
            </div>
            <div class="container-2">
                <p>Info</p>
                <p>New settings available on your account.</p>
            </div>
            <button>&times;</button>
        </div>

        <div class="toast warning">
            <div class="container-1">
                <i class="fas fa-exclamation-circle"></i>
                <img src="/img/warning-icon.png" alt="warning-icon">
            </div>
            <div class="container-2">
                <p>Warning</p>
                <p>Username you have entered is invalid.</p>
            </div>
            <button>&times;</button>
        </div>
        
    </div>
    
    <script>
        $(document).ready(function(){
            alert("Welcome!!!")
        });
    </script>

    <script>
        var dd_main = document.querySelector(".dd_main");

        dd_main.addEventListener("click", function(){
            this.classList.toggle("active");
        })
    </script>


</body>
</html>

