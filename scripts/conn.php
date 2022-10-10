<?php
  $dbHost = 'localhost';
  $dbUsername = 'root';
  $dbPassword = 'root';
  $dbName = 'books';

  $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }else{
    echo "Connected";
  }
?>