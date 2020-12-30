<?php
  include_once "inc/header.inc.php";
 ?>
 <div class="container">
   <form class="" action="inc/signup.inc.php" method="post"><br>
     <input type="text" name="name" autocomplete="off" placeholder="Name"><br>
     <input type="text" name="username" autocomplete="off"  placeholder="Username"><br>
     <input type="text" name="email" autocomplete="off"  placeholder="Email"><br>
     <input type="password" name="pwd" placeholder="Password"><br>
     <input type="password" name="re_pwd" placeholder="Repeat the Password"><br>
     <input type="submit" name="submit" value="Submit">
     <?php
     if (isset($_GET["error"])) {
       if ($_GET["error"] == "none") {
         echo "<p>Sign Up Succesfully</>";
       }
       if ($_GET["error"] == "Empty") {
         echo "<p>Please Fill all the Form !</>";
       }
       if ($_GET["error"] == "invalidUsername") {
         echo "<p>Username Invalid!!</p>";
       }
       if ($_GET["error"] == "invalidEmail") {
         echo "<p>Email Invalid</p>";
       }
       if ($_GET["error"] == "pwdNotMatch") {
         echo "<p>Password Not Match!!</p>";
       }
       if ($_GET["error"] == "userExisted") {
         echo "<p>Username Existed!</p>";
       }
     }
     ?>
   </form>
 </div>
<?php
  include_once "inc/footer.inc.php";
 ?>
