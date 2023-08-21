<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <title>--User Login Portal--</title>
        <style>
            body {
                background-image: url("desk-3139127_1920-1200x773.jpg");
                background-size: 110%;
                animation-name: example3;
              animation-duration: 2s;
            }
            .banner{
                margin-top:150px;
                font-size: 100px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #eee;
                TEXT-align: center;
                text-shadow: -1px 1px 0 #000,
                          1px 1px 0 #000,
                         1px -1px 0 #000,
                        -1px -1px 0 #000;
                position: relative;

                animation-name: example;
                animation-duration: 1s;
            }

            @keyframes example {
            0%   {left:0px; top:-200px;}
            100% {left:0px; top:0px;}
            }
            @keyframes example2 {
            0%   {opacity:0}
            50%   {opacity:0}
            100% {opacity:1}
            }
            .button{
                animation-name: example2;
                animation-duration: 2s;
            }
            @keyframes example3 {
            0%   {background-size:100%;}
            100% {background-size:110%;}
            }
            #btn1 {
                background-color: #f4511e;
                border: none;
                color: white;
                padding: 16px 32px;
                font-weight: bold;
                font-size: 16px;
                margin: 4px 2px;
                opacity: 0.6;
                transition: 0.3s;
            }

            #btn1:hover {
                opacity: 1;
            }
            #btn2 {
                background-color: #f4511e;
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                font-weight: bold;
                font-size: 16px;
                margin: 4px 2px;
                opacity: 0.6;
                transition: 0.3s;   
            }

            #btn2:hover {
                opacity: 1;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <div class = "banner">
            <p id = "banner">WELCOME TO BIPRO'S JOB PORTAL</p>
        </div>
    </div>
    <div class="container">
                <div class="row button">
                    <div class="col text-end">
                        <a href="register.php" class="btn btn-primary" id="btn1">Company</a>
                    </div>
                    <div class="col ">
                        <a href="login.php" class="btn btn-primary" id="btn2">  Users  </a>
                    </div>
                </div>
 
                <script>
                    $(document).ready(function () {
                        $("#btn1").prop('disabled', false);
                        $("#btn2").prop('disabled', false);
                        $("#btn1").click(function () {
                            $("#btn2")
                                .delay(1500)
                                .prop('disabled', false);
                            $("#div2").fadeOut(100);
                            $("#div1")
                                .delay(800)
                                .fadeIn(500);
                        });
                        $("#btn2").click(function () {
                            $("#btn1")
                                .delay(1500)
                                .prop('disabled', false);
                            $("#div1").fadeOut(100);
                            $("#div2")
                                .delay(800)
                                .fadeIn(500);
                        });
                    });
                </script>
            </body>
        </html>