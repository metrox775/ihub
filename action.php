<?php

$conn = mysqli_connect("localhost", "root", "root", "ihub");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
	$universityname=$_POST['universityname'];
	$institutename=$_POST['institutename'];
	$coursename=$_POST['course'];
	$enrollmentno=$_POST['eno'];
	$enrollmentyear=$_POST['enoyear'];
	$firstname =$_POST['fname'];
	$middlename=$_POST['mname'];
	$lastname=$_POST['lname'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$category=$_POST['category'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$emailid=$_POST['email'];
	$mobileno=$_POST['moblie'];
	$password=$_POST['confpassword'];
	// $resume=$_POST['resume'];
	// $photo=$_POST['photo'];
// echo "<pre>";
// print_r($_FILES);
// exit();
	if(isset($_FILES['photo']) OR isset($_FILES['resume'])){
      $errorsphoto= array();
      $errorsresume= array();

      $photofile_name = $_FILES['photo']['name'];
      $resumefile_name = $_FILES['resume']['name'];


      $photofile_size =$_FILES['photo']['size'];
      $resumefile_size =$_FILES['resume']['size'];

      $photofile_tmp =$_FILES['photo']['tmp_name'];
      $resumefile_tmp =$_FILES['resume']['tmp_name'];

      $photofile_type=$_FILES['photo']['type'];
      $resumefile_type=$_FILES['resume']['type'];

      $photofile_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));
      $resumefile_ext=strtolower(end(explode('.',$_FILES['resume']['name'])));
      
      $photoextensions= array("jpeg","jpg","png");
      $resumeextensions= array("pdf","docx","doc");
      if(in_array($photofile_ext,$photoextensions)=== false || in_array($resumefile_ext,$resumeextensions)=== false ){
         $errorsphoto[]="extension not allowed, please choose a JPEG or PNG file.";
         $errorsresume[]="extension not allowed, please choose a PDF or Doc file.";
         
      }
      
      if($photofile_size > 2097152 || $resumefile_size > 2097152){
         $errorsphoto[]='File size must be excately 2 MB';
         $errorsresume[]='File size must be excately 2 MB';
      }
      
      if(empty($errorsphoto)==true || empty($errorsphoto)==true){
      	$sql = "INSERT INTO student (universityname,institutename,coursename,enrollmentno,enrollmentyear,firstname,middlename,lastname,dob,gender,category,address,state,city,pincode,emailid,mobileno,password,resume,photo) VALUES ('$universityname','$institutename','$coursename','$enrollmentno','$enrollmentyear','$firstname','$middlename','$lastname','$dob','$gender','$category','$address','$state','$city','$pincode','$emailid','$mobileno','$password','$reumefile_name','$photofile_name')";
         move_uploaded_file($photofile_tmp,"photo/".$photofile_name);
         move_uploaded_file($reumefile_tmp,"resume/".$reumefile_name);
         if(mysqli_query($conn, $sql)){
   		 header("location:login.php");
   		 echo ("alert('Register Successfully')");
			} else{
   		 echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
    }else{
         print_r($errors);
      }
   }
 ?>