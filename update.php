<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link href="223b.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <a href="index.html" class="right button">Home</a>
        <br /><br /><br />
    </body>
</html>




<?php
    if (!empty($_POST['fname']) && !empty($_POST['steamname'])) {
        require_once '../login.php';
        $conn = mysql_connect($host, $username, $password);
        if (!$conn) die("Unable to connect to MySQL: " . mysql_error());
        mysql_select_db("223b")
            or die("Unable to select database: " . mysql_error());
        $sql = "UPDATE infoTable SET steamname='$_POST[steamname]' WHERE firstname='$_POST[fname]' AND lastname='$_POST[lname]'";
        $query = mysql_query($sql,$conn) or die(mysql_error());
        
        if (mysql_affected_rows($conn) == 0) {
            echo 'Your info was not updated.';
        } else {
            echo 'Your info was updated successfully.';
        }
    }
?>