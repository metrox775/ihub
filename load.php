
<?php 
$conn = mysqli_connect("localhost", "root", "root", "ihub");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());

   			$sql = "SELECT * FROM student";
			$result = $conn->query($sql);

				if ($result->num_rows > 0) {

				 $output=" <table  class='table' id='#loadtable'>
				  	<tr>
				  		<th>ID</th>
				  		<th>Firstname</th>
				  		<th>Institute name</th>
				  		<th>coursename</th>
				  		<th>enrollmentno</th>
				  		<th colspan='2'>Action</th>
				  	</tr>";
				  while($row = $result->fetch_assoc()) {
				    $output .="<tr>
				    	<td>".$row['stuid']."</td>
				    	<td>".$row["firstname"]."</td>
				    	<td>".$row["institutename"]."</td>
				    	<td>".$row["coursename"]."</td>
				    	<td>".$row["enrollmentno"]."</td>
				    	<td><a href='edit.php?id=".$row['stuid']."'>Edit</a> | <a href='delete.php?id=".$row['stuid']."'>Delete</a></td></tr>";
				  } 
				  $output. = "</table>";
				  echo $output;
				 } else {
				  echo "0 results";
				}
	}else{
		echo "connection error";
	}
?>