<?php
  include_once "db.inc.php";
  include_once "functions.inc.php";

  if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    if (empty($username) || empty($pwd)) {
      header("Location: ../login.php?erro=emptyblock");
      exit();
    }
    loginUser($username, $pwd, $conn);

  }else {
    header("Location: ../login.php");
    exit();
  }
