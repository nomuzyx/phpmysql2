<?php
$con=mysqli_connect("localhost","root","","testdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//  $result = mysqli_query($con,"SELECT * FROM staff");
?>  