<?php
  $hostname = "remotemysql.com";
  $username = "VdBwhp12xA";
  $password = "LWYH1zASPr";
  $dbname = "VdBwhp12xA";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
