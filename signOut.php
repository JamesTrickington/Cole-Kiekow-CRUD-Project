<!DOCTYPE html>
<html>
    <head>
        <title>Sign Out</title>
        <link href="223b.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <a href="index.html" class="right button">Home</a>
        <a href="userCreation.php" class="right button">Back to Account</a>
    </body>
</html>


<?php

require_once '../login.php';
$conn = mysql_connect($host, $username, $password);
if (!$conn) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db("223b")
    or die("Unable to select database: " . mysql_error());

if (isset($_COOKIE['Username'])){
    unset($_COOKIE['Username']);
    unset($_COOKIE['FirstName']);
    unset($_COOKIE['LastName']);
    if (!isset($_COOKIE['Username'])){
        echo 'You have been signed out!';
    }
}
?>