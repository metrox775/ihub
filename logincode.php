<?php
   error_reporting(0);
    include('connection.php');
	session_start();
	if(isset($_POST['login'])){
   $emailid=$_POST['email'];
   $password=$_POST['password'];
   // $resume=$_POST['resume'];
   // $photo=$_POST['photo'];
// echo "<pre>";
// print_r($_FILES);
// exit();

     $sql = "SELECT * FROM `student` WHERE `emailid`='$emailid' AND `password`='$password'";
      $result = mysqli_query($conn,$sql);
      mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if(mysqli_num_rows($result)==true) {
            $row = mysqli_fetch_assoc($result);
               $emailid = $row['emailid'];
         $_SESSION['login_user'] = $emailid;
         
         header('location:welcome.php');
      }else {
         header('location:login.php');
         echo "Your Login Name or Password is invalid ";
      }

   }
 ?>