<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
</style>
<body>

<div class="container">
  <div> <h1 style="color:#e83e8c;">Edit Profile<h1></div>
  <hr>
					        
  <h3 style="color: #e83e8c;">Educational Details</h3>
  <?php 
  	include('connection.php');
		$id = $_REQUEST['id'];
		session_start();
		$_SESSION['id']=$id;
		$sql = "SELECT * FROM student WHERE stuid=$id";
		$result =mysqli_query($conn,$sql);
          if(mysqli_num_rows($result))
          {
          	  $row = mysqli_fetch_assoc($result); 
          }
          else
          {
          	  echo "error".mysqli_error($con);
          }
    ?>			
  <form action="update.php" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-6">
      <label for="text">University Name*</label>
      <input type="text" class="form-control" placeholder="Enter University Name" name="universityname" value='<?php echo $row["universityname"];?>'>
    </div>
    <div class="form-group col-md-6">
      <label for="text">Institute Name*</label>
      <input type="text" class="form-control"  placeholder="Enter Institute Name" name="institutename" value='<?php echo $row["institutename"];?>'>
    </div>
   <div class="form-group col-md-4">
      <label for="text">Course Name</label>
      <input type="text" class="form-control"  placeholder="Enter Course name" name="course" value='<?php echo $row["coursename"];?>'>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Enrollment No.</label>
      <input type="text" class="form-control"  placeholder="Enter Enrollment No." name="eno" value='<?php echo $row["enrollmentno"];?>'>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Enrolled Year</label>
      <input type="text" class="form-control"  placeholder="Enter Enrolled Year" name="enoyear" value='<?php echo $row["enrollmentyear"];?>'>
    </div>

     <h3 style="color: #e83e8c;">Personal Details</h3>

      <div class="form-group col-md-4">
      <label for="text">First Name*</label>
      <input type="text" class="form-control" placeholder="Enter First sName" name="fname" value='<?php echo $row["firstname"];?>'>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Middle Name*</label>
      <input type="text" class="form-control"  placeholder="Enter Middle Name" name="mname" value='<?php echo $row["middlename"];?>'>
    </div>
   <div class="form-group col-md-4">
      <label for="text">Last Name*</label>
      <input type="text" class="form-control"  placeholder="Enter Last name" name="lname" value='<?php echo $row["lastname"];?>'>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Date of Birth*</label>
      <input type="date" class="form-control"  placeholder="Enter Date Of Birth" name="dob" value='<?php echo $row["dob"];?>'>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Gender*</label>
      <SELECT class="form-control" name="gender" value='<?php echo $row["gender"];?>'>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </SELECT>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Category*</label>
      <SELECT class="form-control" name="category" value='<?php echo $row["category"];?>'>
        <option value="OPEN">OPEN</option>
        <option value="SEBC">SEBC</option>
        <option value="SC">SC</option>
        <option value="ST">ST</option>
      </SELECT>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Address*</label>
     <textarea name="address" class="form-control" placeholder="Enter Address"><?php echo $row["address"];?></textarea>
    </div>
    <div class="form-group col-md-3">
      <label for="text">State*</label>
      <SELECT class="form-control" name="state" value='<?php echo $row["state"];?>'>
        <option value="gujarat">Gujarat</option>
      </SELECT>
    </div>
     <div class="form-group col-md-3">
      <label for="text">City*</label>
      <SELECT class="form-control" name="city" value='<?php echo $row["city"];?>'>
        <option value="Ahmedabad">Ahmedabad</option>
      </SELECT>
    </div>
    <div class="form-group col-md-6">
      <label for="text">Pincode*</label>
      <input type="text" class="form-control" placeholder="Enter pincode" name="pincode" value='<?php echo $row["pincode"];?>'>
    </div>
    <div class="form-group col-md-6">
      <label for="text">Email Id*</label>
      <input type="email" class="form-control" placeholder="Enter Email" name="email" value='<?php echo $row["emailid"];?>'>
    </div>
    <div class="form-group col-md-6">
      <label for="text">Moblie No.</label>
      <input type="text" class="form-control" placeholder="Enter mobile number" name="moblie" value='<?php echo $row["mobileno"];?>'>
    </div>
    <div class="form-group col-md-6">
      <label for="text">Password</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" value='<?php echo $row["password"];?>'>
    </div>
    <div class="form-group col-md-6">
      <label for="text">Conf. Password</label>
      <input type="password" class="form-control" placeholder="Enter Conf.Password" name="confpassword" value='<?php echo $row["password"];?>'>
    </div>
    <div class="form-group col-md-6">
      <label for="text">Resume</label>
      <input type="file" class="form-control" name="resume" value='<?php echo $row["resume"];?>'>
    </div>
     <div class="form-group col-md-6">
      <label for="text">Photo</label>
      <input type="file" class="form-control" name="photo" value='<?php echo $row["photo"];?>'>
    </div>
    <div  class="form-group col-md-4" style="margin-left:25%">
      <input type="submit" class="form-control btn btn-primary" name="update" value="Update">
    <br>
    </div>
  </form>
</div>
</body>
</html>
