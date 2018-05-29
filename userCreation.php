<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link href="223b.css" type="text/css" rel="stylesheet">
    </head>
    
    <body>
        <h1>Sign Up - <a href="index.html" class="right button">Home</a></h1>
        <form action="signUp.php" method="post">
            <p>First Name:<br /><input type="text" name="fname" /></p>
            <p>Surname:<br /><input type="text" name="sname" /></p>
            <p>Username:<br /><input type="text" name="uname" /></p>
            <p>Password:<br /><input type="password" name="pword1" /></p>
            <p>Verify Password:<br /><input type="password" name="pword2" /></p>
            <p><input type="submit" name="submitForm" value=" Sign Up " /></p>
        </form>
        <br />
        <h1>Sign In - </h1>
        <form action="signIn.php" method="post">
            <p>Username:<br /><input type="text" name="uname" /></p>
            <p>Password<br /><input type="password" name="pword" /></p>
            <p><input type="submit" name="submitForm" value=" Sign In " /></p>
        </form>
    </body>
</html>

<?php
    if (isset($_COOKIE['Username'])) {
        echo "<br /><a href='signOut.php' class='button'>Sign Out</a>";
    }
?>