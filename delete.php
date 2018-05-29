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
    if (!empty($_POST['fname']) && !empty($_POST['lname'])) {
        require_once '../login.php';
        $conn = mysql_connect($host, $username, $password);
        if (!$conn) die("Unable to connect to MySQL: " . mysql_error());
        mysql_select_db("223b")
            or die("Unable to select database: " . mysql_error());
        $sql = "DELETE FROM infoTable WHERE firstname='$_POST[fname]' AND lastname='$_POST[lname]'";
        $query = mysql_query($sql,$conn) or die(mysql_error());
        
        $query = "SELECT * FROM infoTable WHERE firstname='$_POST[fname]' AND lastname='$_POST[lname]'";
        $result = mysql_query($sql,$conn) or die(mysql_error());
        if ($result->num_rows == 0) {
            echo 'Your info was deleted successfully.';
        } else {
            echo 'Your info was not deleted.';
        }
    }
?>