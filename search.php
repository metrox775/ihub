<html>
   
   <head>
       <title>Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
<div class="container">
<?php
   error_reporting(0);
    include('connection.php');
	session_start();
	if(isset($_POST['search'])){
      $searchname=$_POST['searchname'];
      if(empty($searchname))
      {
          echo "<script>alert('please enter the Fisrt name');</script>";
          header('location:welcome.php');
      }else{

          $sql = "SELECT * FROM `student` WHERE `firstname` LIKE '$searchname%'";
          $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              echo "<table  class='table'><tr style='background-color:#e83e8c; color:#ffff;'><th>ID</th><th>Firstname</th><th>Institute name</th><th>coursename</th><th>enrollmentno</th><th colspan='2'>Action</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $id=$row['id'];
                echo "<tr><td>".$row["stuid"]."</td><td>".$row["firstname"]."</td><td>".$row["institutename"]."</td><td>".$row["coursename"]."</td><td>".$row["enrollmentno"]."</td><td><a href='edit.php?id='".$id."'>Edit</a> | <a href='Delete.php'>Delete</a></td></tr>";
              }
              echo "</table><br><hr><a href='welcome.php' class='btn btn-light' style='background-color:#e83e8c; color:#ffff;'>Back</a>";
            } else {
              echo "0 results";
            } 
      }
   }
 ?>
</div>
</body>
</html>