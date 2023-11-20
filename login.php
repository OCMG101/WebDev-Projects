<?php
  include_once 'header.php'
?>
<h1>Welcome Back!</h1>
<section class="login-form">
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email..."><br>
        <input type="password" name="pwd" placeholder="Password..."><br>
        <button type="submit" name="submit">Log In</button>
    </form>
    

    <?php
  if (isset($_GET["error"])){
    if($_GET["error"] == "emptyinput") {
      echo "<p class=errormessage>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "wronglogin"){
      echo "<p class=errormessage>Incorrect login credentials!</p>";
    }
  }
  ?>
</section>    

