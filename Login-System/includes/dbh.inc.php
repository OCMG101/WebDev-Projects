<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$sdBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $sdBName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
?>