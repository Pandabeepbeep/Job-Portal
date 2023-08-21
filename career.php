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
        <title>Career</title>
        <style>
            .navbar {
                overflow: hidden;
                background-color: #333;
                position:fixed;
                width: 100%;
            }
            .banner {
                background-image: url("https://www.goskills.com/blobs/blogs/236/5-hero.png");
                background-size:contain;
                height: 200px;
                width: 100%;
                padding-top: 90px;
            }
            .jobbox {
                box-shadow: 5px 10px;
                border: 2px solid black;
                padding: 4px;
                margin-left: 20px;
                margin-top: 20px;
                width: 23.5%;
                background-color: white;

                animation-name: example;
                animation-duration: 2s;
            }
            @keyframes example {
                0% {
                    opacity: 0;
                }
                25% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            #text1 {
                font-size: 50px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #eee;
                TEXT-align: center;
                text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;
            }
            @media screen and (max-width: 920px) {
                #text1 {
                font-size: 40px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: #eee;
                TEXT-align: center;
                text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;
            }
                .jobbox {
                box-shadow: 5px 10px;
                border: 2px solid black;
                padding: 4px;
                margin-left: 20px;
                margin-top: 20px;
                width: 40%;
                background-color: white;

                animation-name: example;
                animation-duration: 2s;
            }
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light navbar-fixed">
            <div class="container-fluid">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                        </li>
                        
                    </ul>
                    <ul class = "navbar-nav ms-auto">
                    <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="banner">
            <p id="text1">Available Jobs</p>
        </div>
        <div class="row">
        <?php
          $sql= "SELECT cname,position,jdesc,skills,ctc FROM jobs";
          $result=mysqli_query($conn,$sql);
          $i=0;
          if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
              echo'
              <div class ="col-md-4 jobbox">
                <div class = "jobs">
                  <h3 style="text-align: center;">'.$rows['position'].'</h3>
                  <h4 style="text-align: center;">'.$rows['cname'].'</h4>
                  <p style="text-align: justify; color: black;">'.$rows['jdesc'].'</p>
                  <p style="color: black;"><b>Skills Required : </b>'.$rows['skills'].'</p>
                  <p style="color: black;"><b>CTC : </b>'.$rows['ctc'].'</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" href="#exampleModal" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Apply Now
                  </button>
              </div>              
              ';
              
            }
          }
          else {
            echo"";
          } 
        ?>
        </div>
        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apply For Job</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="rname" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Applying For:</label>
                                <input type="text" class="form-control" name="apply">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Qualification:</label>
                                <input type="text" class="form-control" name="qual">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Year of Passing:</label>
                                <input type="text" class="form-control" name="year">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="sub">Apply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
    </body>
</html>