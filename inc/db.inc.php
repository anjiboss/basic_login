<?php
  $servername = "mysql1.php.xdomain.ne.jp";
  $username = "xd875684_admin";
  $password = "01672548468doggy";
  $databasename = "xd875684_user2";

  $conn = mysqli_connect($servername, $username, $password, $databasename);

  if(!$conn){
    echo "Cannot Connect";
  }else{
    echo "<script>console.log('Connected')</script>";
  }
