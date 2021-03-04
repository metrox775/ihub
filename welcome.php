<?php
   include('connection.php');
   	session_start();
?>
<html>
   
   <head>
       <title>Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" scr="bootstrap/js/jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
    $('#btnasc').click(function() {
      $('#ass').toggle("slide");
      $('#desc').css("display","none");
      $('#all').css("display","none");
    	});
	});
	$(document).ready(function(){
    $('#btndesc').click(function() {
      $('#desc').toggle("slide");
      $('#ass').css("display","none");
      $('#all').css("display","none");
    	});
	});
	</script>
   </head>
   <body>
   	<div class="container">
   	<div class="row">
   		<div class="col-md-8">
      		<h4>Welcome <?php echo  $_SESSION['login_user']; ?></h4>
      		 <form class="form-inline" method="post" action="search.php">
			    <input type="text" name="searchname" class="form-control" placeholder="Search First name..">
			    <button type="submit" name="search" class="btn btn-light" style="background-color:#e83e8c; color:#ffff;">Search</button>
			  </form>
      	</div>
      	<div class="col-md-4">
      		<h4><a href = "logout.php">Sign Out</a></h4>
      		 <button type="submit" id="btnasc" class="btn btn-light" style="background-color:#e83e8c; color:#ffff;">ASC</button>
      		  <button type="submit" id="btndesc" class="btn btn-light" style="background-color:#e83e8c; color:#ffff;">DESC</button>
      	</div>
    </div>
    	<div class="row" id="all" style="">
   		<?php 

   			$results_per_page = 3;

   			$sql1='SELECT * FROM student';
			$result1 = mysqli_query($con, $sql1);
			$number_of_results = mysqli_num_rows($result1);

			$number_of_pages = ceil($number_of_results/$results_per_page);

			if (!isset($_GET['page'])) {
  				$page = 1;
			} else {
  				$page = $_GET['page'];
			}

			$this_page_first_result = ($page-1)*$results_per_page;

   			$sql = "SELECT * FROM student LIMIT". $this_page_first_result . "," .  $results_per_page.";";
			$result = $conn->query($sql);

				if ($result->num_rows > 0) {?>

				  <table  class='table'>
				  	<tr style="background-color:#e83e8c; color:#fff;">
				  		<th>ID</th>
				  		<th>Firstname</th>
				  		<th>Institute name</th>
				  		<th>coursename</th>
				  		<th>enrollmentno</th>
				  		<th colspan='3'>Action</th>
				  	</tr>
				 <?php
				  while($row = $result->fetch_assoc()) {?>
				    <tr>
				    	<td><?php echo $row['stuid'] ?></td>
				    	<td><?php echo $row["firstname"] ?></td>
				    	<td><?php echo $row["institutename"]?></td>
				    	<td><?php echo $row["coursename"]?></td>
				    	<td><?php echo $row["enrollmentno"]?></td>
				    	<td><a href='edit.php?id=<?php echo $row['stuid'] ?>'>Edit</a> | <a href='delete.php?id=<?php echo $row['stuid'] ?>'>Delete</a> | <a href='show.php?id=<?php echo $row['stuid'] ?>'>Show</a></td></tr>
				 <?php } ?>
				  </table>
				<?php 
					for ($page=1;$page<=$number_of_pages;$page++) {
  						echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
						}
				} else {
				  echo "0 results";
				}?>
   	</div>
   	<div class="row" id="desc" style="display: none;">
   		<?php 
   			$sql = "SELECT * FROM student ORDER BY stuid DESC";
			$result = $conn->query($sql);

				if ($result->num_rows > 0) {?>

				  <table  class='table'>
				  	<tr style="background-color:#e83e8c; color:#fff;">
				  		<th>ID</th>
				  		<th>Firstname</th>
				  		<th>Institute name</th>
				  		<th>coursename</th>
				  		<th>enrollmentno</th>
				  		<th colspan='3'>Action</th>
				  	</tr>
				 <?php
				  while($row = $result->fetch_assoc()) {?>
				    <tr>
				    	<td><?php echo $row['stuid'] ?></td>
				    	<td><?php echo $row["firstname"] ?></td>
				    	<td><?php echo $row["institutename"]?></td>
				    	<td><?php echo $row["coursename"]?></td>
				    	<td><?php echo $row["enrollmentno"]?></td>
				    	<td><a href='edit.php?id=<?php echo $row['stuid'] ?>'>Edit</a> | <a href='delete.php?id=<?php echo $row['stuid'] ?>'>Delete</a> | <a href='show.php?id=<?php echo $row['stuid'] ?>'>Show</a></td></tr>
				 <?php } ?>
				  </table>
				<?php } else {
				  echo "0 results";
				}?>
   	</div>
   	<div class="row" id="ass" style="display: none;">
   		<?php 
   			$limit = 3;
   			$page = $_GET['page'];
   			if(isset($_GET['page'])){
   				$page = $_GET['page'];
   			}else
   			{
   				$page =1;
   			}
			$offset=($page - 1) * $limit;
   			$sql = "SELECT * FROM student ORDER BY stuid ASC LIMIT 3";
			$result = $conn->query($sql);

				if ($result->num_rows > 0) 
					{
						$total_records = $result->num_rows;
						$total_page = ceil($total_records / $limit);
						echo '<ul class="pagination">';
						for($i=1; $i <= $total_page; $i++)
						{
							echo '<li><a href="Welcome.php?page='.$i.'" style="background-color:#e83e8c; color:#ffff;">'.$i.'</a></li>';
						}
						echo '</ul>';
						?>
				  <table  class='table'>
				  	<tr style="background-color:#e83e8c; color:#fff;">
				  		<th>ID</th>
				  		<th>Firstname</th>
				  		<th>Institute name</th>
				  		<th>coursename</th>
				  		<th>enrollmentno</th>
				  		<th colspan='3'>Action</th>
				  	</tr>
				 <?php
				  while($row = $result->fetch_assoc()) {?>
				    <tr>
				    	<td><?php echo $row['stuid'] ?></td>
				    	<td><?php echo $row["firstname"] ?></td>
				    	<td><?php echo $row["institutename"]?></td>
				    	<td><?php echo $row["coursename"]?></td>
				    	<td><?php echo $row["enrollmentno"]?></td>
				    	<td><a href='edit.php?id=<?php echo $row['stuid'] ?>'>Edit</a> | <a href='delete.php?id=<?php echo $row['stuid'] ?>'>Delete</a>| <a href='show.php?id=<?php echo $row['stuid'] ?>'>Show</a></td></tr>
				 <?php } ?>
				  </table>
				<?php

					} else {
				  echo "0 results";
				}?>
   	</div>
   	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
   	<script type="text/javascript">
   		$('')
   	</script>
	</div> <!--end container-->
   </body>
   
</html>