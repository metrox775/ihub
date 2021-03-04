
<?php

$conn = mysqli_connect("localhost", "root", "root", "ihub");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>