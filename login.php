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


<?php
  include_once 'footer.php'
?>

<style>
 .login-form{
  background-color: color-mix(in srgb, aquamarine , transparent 90%);
  display: block;
  margin: auto;
  width: 20%;
  padding: 10px;
  text-align: center;
  margin-top: 5%;
  border-radius: 20px;
  
}
input{
  padding:10px;
  width: 80%;
  border: none;
  border-radius: 10px;
  margin:8px;
  text-align: center;
}
input:hover{
  background-color: darkslategrey;
}
button{
  padding:10px;
  border-radius: 10px;
  border: none;
  margin-top: 5px;
  background-color: forestgreen;
}
button:hover{
  background-color: darkgreen;
  cursor: pointer;
}
button:active{
  transform: scale(0.7);
  transition: all 0.1s ease-out
}
.errormessage{
  color:red;
}
h1{
  text-align: center;
}
</style>