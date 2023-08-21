
        <?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <title>--Company Portal--</title>
        <style>
            body {
                background-image: url("locked-wallpaper-1280x720.jpg");
                background-size: 110%;
                animation-name: example3;
              animation-duration: 4s;
            }
            form {
                background-color: #fff;
                margin-top: 4em;
                margin-left: 30em;
                margin-right: 10em;
                padding: 30px;
                box-shadow: 10px 10px 8px 10px #888888;
            }
            .div1 {
              animation-name: example;
              animation-duration: 2s;
            } 
            .div2 {
                display: none;
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
            @keyframes example2 {
            0%   {opacity:0}
            100% {opacity:1}
            }
            @keyframes example3 {
            0%   {background-size:100%;}
            100% {background-size:110%;}
            }
            @keyframes example {
            0%   {opacity:0}
            50%   {opacity:0}
            100% {opacity:1}
            }
            .button{
                animation-name: example2;
                animation-duration: 1s;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="container">
                <div class="row button">
                    <div class="col text-end">
                        <button type="button" class="btn btn-primary" id="btn1" disabled="disabled">Login</button>
                    </div>
                    <div class="col ">
                        <button class="btn btn-primary" id="btn2" disabled="disabled">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container div1" id="div1">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input
                                type="email"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="exampleInputPassword1"
                                name="password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="ALogin">Login</button>
                    </form>
                </div>

                <div class="container div2" id="div2">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputName" name="name">
                        </div>
                       
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input
                                type="email"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputNumber" class="form-label">Phone Number</label>
                            <input
                                type="tel"
                                class="form-control"
                                id="exampleInputNumber"
                                pattern="+[0-9][2]-[0-9][10]"
                                placeholder="+91-1234567890"
                                name="phone_no">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="exampleInputPassword1"
                                name="password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Company</label>
                            <input type="text" class="form-control" id="exampleInputCom" name="Company">
                        </div>
                        <button type="submit" class="btn btn-primary" name="Asubmit" href="#">Sign Up</button>
                        
                    </div>
                </div>

                <script>
                    $(document).ready(function () {
                        $("#btn1").prop('disabled', false);
                        $("#btn2").prop('disabled', false);
                        $("#btn1").click(function () {
                            $("#div2").fadeOut(100);
                            $("#div1")
                                .delay(200)
                                .fadeIn(500);
                        });
                        $("#btn2").click(function () {
                            $("#div1").fadeOut(100);
                            $("#div2")
                                .delay(800)
                                .fadeIn(500);
                        });
                    });
                </script>
            </body>
        </html>
        