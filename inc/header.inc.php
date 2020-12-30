<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <title>Blogs</title>
  </head>
  <body>
    <header>
      <nav>
        <h1>Blogs</h1>
        <ul class="head">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <?php
            if (isset($_SESSION["userName"])) {
              echo '<li><a href="profile.php">'.$_SESSION["userName"].'</a></li>';
              echo '<li><a href="inc/logout.inc.php">Log Out</a></li>';
            }else{
              echo '<li><a href="signup.php">Sign Up</a></li>';
              echo '<li><a href="login.php">Log In</a></li>';
            }
          ?>

        </ul>
      </nav>
    </header>
    <div class="page-background">
