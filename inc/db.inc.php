<?php
$servername = "localhost";
$username = "root";
$password = "2670875";
$databasename = "users";

  $conn = mysqli_connect($servername, $username, $password, $databasename);

  if(!$conn){
    echo "Cannot Connect";
  }else{
    echo "<script>console.log('Connected')</script>";
  }
