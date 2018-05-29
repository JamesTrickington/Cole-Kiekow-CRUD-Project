<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link href="223b.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <a href="index.html" class="right button">Home</a>
        <br /><br /><br />
        <a href="userCreation.php" class="right button">Back to Sign Up</a>
    </body>
</html>




<?php
    if (!empty($_POST['fname']) && !empty($_POST['uname'])) {
        require_once '../login.php';
        $conn = mysql_connect($host, $username, $password);
        if (!$conn) die("Unable to connect to MySQL: " . mysql_error());
        mysql_select_db("223b")
            or die("Unable to select database: " . mysql_error());
        $sql = "INSERT INTO userTable (firstname,surname,username,password) VALUES ('$_POST[fname]','$_POST[sname]',' $_POST[uname]','$_POST[pword1]')";
        $query = mysql_query($sql,$conn) or die(mysql_error());
        
        if (mysql_affected_rows($conn) == 0) {
            echo 'Your account was not created.';
        } else {
            echo 'Your account was created successfully';
        }
    }
    
?>