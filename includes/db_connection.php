<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root"); // change the password to your phpmyadmin password. If there is no password leave it blank
define("DB_NAME", "wingify");

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>
