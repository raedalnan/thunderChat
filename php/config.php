<?php
  $hostname = "sql104.epizy.com";
  $username = "epiz_30456372";
  $password = "ra2d.100200300";
  $dbname = "epiz_30456372_thunder	";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
