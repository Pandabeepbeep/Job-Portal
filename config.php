<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection Failed" .$conn->connect_error);
}
echo"";
if(isset($_POST['Asubmit'])){
   $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];
    $Company=$_POST['Company'];
    $sql2= "INSERT INTO `admin`(`name`, `email`, `password`, `phone_no`,`Company`) VALUES ('$name','$email','$password','$number','$Company')";
    if( mysqli_query($conn, $sql2)){
        echo "Records Inserted Successfully.";
    }
    else {
        echo "Error : Could not able to execute $sql2." . mysqli_error($conn);
    } 
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
     $email=$_POST['email'];
     $number=$_POST['phone_no'];
     $password=$_POST['password'];
 
     $sql= "INSERT INTO `users`(`name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
     if( mysqli_query($conn, $sql)){
         echo "Records Inserted Successfully.";
     }
     else {
         echo "Error : Could not able to execute $sql." . mysqli_error($conn);
     } 
 }

session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * from users WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:career.php");
    }
    else {
        $error="EmailID or password incorrect";
        echo '<script>alert("EmailID or password incorrect")</script>';
  
    }
}
if(isset($_POST['ALogin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query1="SELECT * from admin WHERE `email`='$email' AND `password`='$password'";
    $result1=mysqli_query($conn,$query1);
    $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
    if(mysqli_num_rows($result1)==1){
        header("location:compjob.php");
    }
    else {
        $error="EmailID or password incorrect";
        echo '<script>alert("EmailID or password incorrect")</script>';
  
    }
}
if(isset($_POST['submit1'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $jdesc=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $ctc=$_POST['ctc'];
    $query="INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skills`, `ctc`) VALUES ('$cname','$position','$jdesc','$skills','$ctc')";
    if( mysqli_query($conn, $query)){
        echo "New Job posted Successfully.";
    }
    else {
        echo "Error : Failed to post the job $query." . mysqli_error($conn);
    } 
}
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $year=$_POST['year'];
    $apply=$_POST['apply'];
    $query="INSERT INTO `candidate`(`name`, `qual`, `year`, `apply`) VALUES ('$name','$qual','$year','$apply')";
    if( mysqli_query($conn, $query)){
        echo "Candidate list updated Successfully.";
    }
    else {
        echo "Error : Failed to update $query." . mysqli_error($conn);
    } 
}
?>