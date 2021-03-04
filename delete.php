<?php
       include('connection.php');
       session_start();

   $id = $_SESSION['id'] ;
   echo $id;
   $sql = "DELETE FROM student WHERE stuid='$id'";

	if (mysqli_query($conn, $sql)) {
	  echo "Record deleted successfully";
	  header("location:welcome.php");
	} else {
	  echo "Error deleting record: " . $conn->error;
	}

?>