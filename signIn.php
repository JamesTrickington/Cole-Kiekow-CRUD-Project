<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link href="223b.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <a href="index.html" class="right button">Home</a>
        <br /><br /><br />
        <a href="userCreation.php" class="right button">Account</a>
    </body>
</html>


<?php

if (!empty($_POST['uname']) && !empty($_POST['pword'])) {   
        require_once '../login.php';
        $conn = mysql_connect($host, $username, $password);
        if (!$conn) die("Unable to connect to MySQL: " . mysql_error());
        mysql_select_db("223b")
            or die("Unable to select database: " . mysql_error());
        
        $query = "SELECT * FROM userTable WHERE username='" . $_POST['uname'] . "'";
        $result = mysql_query($query) or die(mysql_error()) ;
        $row = mysql_fetch_row($result);
        $firstName = $row[0];
        $lastName = $row[1];
        $userName = $row[2];
        $pword = $row[3];
        if (!$result) {
            echo "<p>That user does not exist in our database</p>";
        } else {
            if ($_POST['pword'] == $pword) {
                setcookie(Username, $userName, time() + (86400 * 30), "/");
                setcookie(FirstName, $firstName, time() + (66400 * 30), "/");
                setcookie(LastName, $lastName, time() + (66400 * 30), "/");
                echo "<p>You have been signed in!</p>";
            } else {
                echo "<p>Somthing went wrong</p>";
            }
        }
    }

?>