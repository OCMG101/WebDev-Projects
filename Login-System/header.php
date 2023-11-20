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
    
