<?php
  include_once 'header.php'
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
     <input type="text" name="name" placeholder="Full Name..."><br>
     <input type="text" name="email" placeholder="Email..."><br>
     <input type="text" name="uid" placeholder="Username..."><br>
     <input type="text" name="pwd" placeholder="Password..."><br>
     <input type="password" name="pwdrepeat" placeholder="Confirm Password..."><br>
     <button type="submit" name="submit">Sign Up</button>
    </form><br>
    
     

    
<?php
  if (isset($_GET["error"])){
    if($_GET["error"] == "emptyinput") {
      echo "<p class=errormessage>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "invalidUid"){
      echo "<p class=errormessage>Choose a proper username!</p>";
    }
    else if ($_GET["error"] == "invalidemail"){
      echo "<p class=errormessage>Choose a proper email!</p>";
    }
    else if ($_GET["error"] == "passwords don't match"){
      echo "<p class=errormessage>Passwords don't match!</p>";
    }
    else if ($_GET["error"] == "stmtfailed"){
      echo "<p class=errormessage>Something went wrong, try again!</p>";
    }
    else if ($_GET["error"] == "usernametaken"){
      echo "<p class=errormessage>Username already taken!</p>";
    }
    else if ($_GET["error"] == "none"){
      echo "<p class=successmessage>Signup Successful!</p>";
    }
  }
  ?>

<p>Already have an account? <br>
      Click here to log in! <br>
      <a href="login.php"><button>Log In</button></a>
    </p>
</section>

<?php
  include_once 'footer.php'
?>

<style>
.signup-form{
  background-color: color-mix(in srgb, aquamarine , transparent 90%);
  display: block;
  margin: auto;
  text-align: center;
  padding:20px;
  border-radius: 20px;
  width: 20%;
}
input{
  text-align: center;
  padding:10px;
  width: 80%;
  border: none;
  border-radius: 10px;
  margin:10px;
}
input:hover{
  background-color: darkslategrey;
  opacity: 0.7;
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
  transition: all 0.1s ease-out;
}
.errormessage{
  color:red;
}
.successmessage{
  color:green;
}
</style>