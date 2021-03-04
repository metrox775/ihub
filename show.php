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
  label{
    color: #e83e8c;
  }
</style>
<body>
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

<div class="container">
  <div> <h3 style="color:#e83e8c;">Profile</h3></div>
  <hr>
                  
  <h3 style="color: #e83e8c;">Educational Details</h3>
  <form action="update.php" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-6">
      <label for="text">University Name*</label><h5><?php echo $row["universityname"];?></h5>
    </div>
    <div class="form-group col-md-6">
      <label for="text">Institute Name*</label><h5><?php echo $row["institutename"];?></h5>
    </div>
   <div class="form-group col-md-4">
      <label for="text">Course Name</label><h5><?php echo $row["coursename"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Enrollment No.</label><h5><?php echo $row["enrollmentno"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Enrolled Year</label><h5><?php echo $row["enrollmentyear"];?></h5>
    </div>

     <h3 style="color: #e83e8c;">Personal Details</h3>
            
      <div class="form-group col-md-4">
                 <img style="width:40%; height:35%" src="<?php 
                        $img = $row['photo'];
                        $imp = 'photo/'.$img;
                        echo $imp;
                 ?>">

      </div>
      <div class="form-group col-md-4">
      <label for="text">First Name*</label> <h5><?php echo $row["firstname"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Middle Name*</label><h5><?php echo $row["middlename"];?></h5>
    </div>
   <div class="form-group col-md-4">
      <label for="text">Last Name*</label><h5><?php echo $row["lastname"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Date of Birth*</label><h5><?php echo $row["dob"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Gender*</label><h5><?php echo $row["gender"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Category*</label><h5><?php echo $row["category"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Address*</label><h5><?php echo $row["address"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">State*</label><h5><?php echo $row["state"];?></h5>
    </div>
     <div class="form-group col-md-4">
      <label for="text">City*</label><h5><?php echo $row["city"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Pincode*</label><h5><?php echo $row["pincode"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Email Id*</label><h5><?php echo $row["emailid"];?></h5>
    </div>
    <div class="form-group col-md-4">
      <label for="text">Moblie No.</label><h5><?php echo $row["mobileno"];?></h5>
    </div>
  </form>
</div>
</body>
</html>
