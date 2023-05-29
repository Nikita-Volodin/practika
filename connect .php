<?php
$con=mysqli_connect("localhost","root"," ","regi");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Change db to "test" db
mysqli_select_db($con, "new_db");