<?php
  include_once "inc/header.inc.php";
 ?>
 <div class="container"style="height: 40%">
   <div class="centering">
     <form class="" action="inc/login.inc.php" method="post">
       <input type="text" name="username" placeholder="Username" style="margin-top: 30px"><br>
       <input type="password" name="pwd" placeholder="Password"><br>
       <input type="submit" name="submit" value="Submit">
   </form>
  </div>
  <?php
    if (isset($_GET["error"])) {
      // code...
      if ($_GET["error"] === "emptyblock") {
        echo "<p>Fill All The Form Please</p>";
      }
      if ($_GET["error"] === "userNotExist") {
        echo "<p>User Not Existed or Wrong Username</p>";
      }
      if ($_GET["error"] === "wrongPas") {
        echo "<p>Wrong Password</p>";
      }
  }
   ?>
 </div>
<?php
  include_once "inc/footer.inc.php";
 ?>
