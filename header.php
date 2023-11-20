<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Sarabun&family=Urbanist:ital,wght@0,400;0,600;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Josefin+Sans&family=Monoton&family=Sarabun&family=Urbanist:ital,wght@0,400;0,600;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Josefin+Sans&family=Monoton&family=Sarabun&family=Urbanist:ital,wght@0,400;0,600;1,600&family=Wallpoet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <title>Login System</title>
</head>
<body>

    <nav>
        <div class="wrapper">
            <a href="loginsystem.php"><img id="logo"src="images/logo3.jpg" alt="logo"></a>
            <ul>
                <li><a href="loginsystem.php">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Services</a></li>
                <?php
                  if (isset($_SESSION["useruid"])) {
                    echo "<li><a href=''>Profile page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                  }

                  else {
                    echo "<li><a href='signup.php'>Sign up</a></li>";
                    Echo "<li><a href='login.php'>Log in</a></li>";
                  }
                ?>
            </ul>
        </div>
    </nav>
    

<style>    


nav .wrapper, ul{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  justify-content: space-between;
  text-align: center;
  background-color: aquamarine;
  border-radius: 10px;
  padding: 0 10px 0 10px;
}

.wrapper #logo{
  float:left;
  width: auto;
  height: 52px;
  border-radius: 50%;
  padding: 1px;
}

ul li{
  list-style-type: none;
}

ul li a{
  text-decoration: none;
  padding: 10px;
  color: white;
  margin: 10px;

}

ul li a:hover{
  border-radius: 10px;
  background-color: darkslategrey;
}

ul li a:active{
  transform: scale(0.7);
  transition: all 0.1s ease-out;
}

.wrapper{
  position: sticky;
  background-attachment: fixed;
}

</style>