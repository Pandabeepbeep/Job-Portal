<?php include 'config.php';?>
<?php include 'header.php';?>

<div class="sidebar">
            <a class="active" href="#">Jobs</a>
            <a href="jobs.php">Candidates Applied</a>
        </div>
<!-- Page content -->
<div class="content">
    <p>
        <button
            class="btn btn-primary"
            data-bs-toggle="collapse"
            href="#collapseExample"
            role="button"
            aria-expanded="false"
            aria-controls="collapseExample">
            Post Job
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="Company" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="Company" name="cname">
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="Text" class="form-control" id="position" name="position">
                </div>
                <div class="mb-3">
                    <label for="Jobdesc" class="form-label">Job Description</label>
                    <textarea class="form-control" cols="30" rows="10" id="Jobdesc" name="jdesc"></textarea>
                </div>
                <div class="mb-3">
                    <label for="Skills" class="form-label">Skills Required</label>
                    <input type="Text" class="form-control" id="Skills" name="skills">
                </div>
                <div class="mb-3">
                    <label for="CTC" class="form-label">CTC</label>
                    <input type="Text" class="form-control" id="CTC" name="ctc">
                </div>
                <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
        <tbody>
        <?php
          $sql= "SELECT  cname,position,ctc FROM jobs";
          $result=mysqli_query($conn,$sql);
          $i=0;
          if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
              echo "<tr>
                      <td>".++$i."</td>
                      <td>".$rows['cname']."</td>
                      <td>".$rows['position']."</td>
                      <td>".$rows['ctc']."</td>
                    </tr>";
            }
          }
          else {
            echo"";
          } 
        ?>
        </tbody>
    </table>
</div>
<!-- JavaScript Bundle with Popper -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>
</html>