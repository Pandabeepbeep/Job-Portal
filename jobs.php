<?php include 'config.php';?>
<?php include 'header.php';?>

<div class="sidebar">
            <a href="compjob.php">Jobs</a>
            <a class="active" href="#">Candidates Applied</a>
        </div>

<div class="content">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Position</th>
                <th scope="col">Year of Passing</th>
            </tr>
        </thead>
        <tbody>
        <?php
          $sql= "SELECT  `name`,`apply`,`year` FROM `candidate`";
          $result=mysqli_query($conn,$sql);
          $i=0;
          if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
              echo "<tr>
                      <td>".++$i."</td>
                      <td>".$rows['name']."</td>
                      <td>".$rows['apply']."</td>
                      <td>".$rows['year']."</td>
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