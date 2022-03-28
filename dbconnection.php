
<?php
$con = new mysqli("localhost","root","","project");

// Check connection
if (!$con){
  
  die(mysqli_error($con));
}



?>