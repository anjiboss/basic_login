<?php
  function isNameValid($username){
    $result = false;
    if(preg_match("/^[a-zA-Z0-9]*$/", $username)){
      $result = true;
    }
    return $result;
  }
  function isEmailValid($email){
    $result = false;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $result = true;
    }
    return $result;
  }
  function userExit($username, $email, $conn){

    $sql ="SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("location: ../signup.php?error=stmtNotPrepared");
      exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)){
      return $row;
    }else{
      $result = false;
    }
    mysqli_stmt_close($stmt);
    return $result;
  }
  function createUser($name, $username, $email, $pwd, $conn){
    $sql ="INSERT INTO users(name, username, email, password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("location: ../signup.php?error=stmtNotPrepared");
      exit();
    }
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss",$name, $username, $email, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  }
  function loginUser($username, $pwd, $conn){
    $checkUser = userExit($username, $username, $conn);
    if ( $checkUser === false) {
      header("Location: ../login.php?error=userNotExist");
      exit();
    }
    $hashedpwd = $checkUser["password"];
    $checkpassword = password_verify($pwd, $hashedpwd);
    if ($checkpassword){
      session_start();
      $_SESSION["userName"] = $checkUser["username"];
      $_SESSION["pwd"] = $checkUser["password"];
      header("Location: ../index.php");
      exit();
    }else{
      header("Location: ../login.php?error=wrongPas");
      exit();
    }
  }
 ?>
