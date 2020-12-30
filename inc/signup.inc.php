<?php
  include_once "db.inc.php";
  if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $re_pwd = $_POST["re_pwd"];
    require "functions.inc.php";
    echo "<script>console.log('$name')</script>";
    if(empty($name) || empty($username) || empty($email) || empty($pwd) || empty($re_pwd) ){
      header("location: ../signup.php?error=Empty");
      echo "<script>console.log('$name')</script>";

      exit();
    }
    if (!isNameValid($username)) {
      header("location: ../signup.php?error=invalidUsername");
      exit();
    }
    if (!isEmailValid($email)){
      header("location: ../signup.php?error=invalidEmail");
      exit();
    }
    // pwdNotMatch
    if($pwd != $re_pwd){
      header("location: ../signup.php?error=pwdNotMatch");
      exit();
    }
    if (userExit($username, $email, $conn) !== false){
      header("location: ../signup.php?error=userExisted");
      exit();
    }

    createUser($name, $username, $email, $pwd, $conn);
    header("location: ../signup.php?error=none");
    exit();
  }else{
    header("Location: ../index.php");
  }
 ?>
