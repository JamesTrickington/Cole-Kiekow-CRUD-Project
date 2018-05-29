<!DOCTYPE html>
<html>
    <head>
        <title>Search Results</title>
        <link href="223b.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <h1>Results - <a href="index.html" class="right button">Home</a></h1>
        <button class='button' onclick="getElementById('demo').innerHTML=Date()">What is the time?</button>
        <p id="demo"></p>
    </body>
</html>


<?php
    if (!empty($_POST['sfname']) || !empty($_POST['slname'])) {   
        require_once '../login.php';
        
        $conn = new mysqli("localhost", "kiecole", "90342538Jul6", "223b");
        if (!$conn) die("Unable to connect to MySQL: " . mysql_error());
        
        $query = "SELECT * FROM infoTable WHERE firstname='$_POST[sfname]' OR lastname='$_POST[slname]'";
        $result = $conn->query($query);
        if ($result->num_rows == 0) {
            echo '<center>0 results</center>';
        } else {
            echo "<center><TABLE><TR><TH>Steam Name</TH><TH>First Name</TH><TH>Last Name</TH></TR>";
        	while($row = $result->fetch_assoc())
        		{
        			// The following few lines store information from specific cells in the data about an image
                	echo "<TR>";
        			echo "<TD>".$row['steamname']. "</TD><TD>". $row['firstname']. "</TD><TD>".$row['lastname'] ."</TD>";
        			echo "</TR>";
        		}
        	echo "</TABLE></center>";
        }
    }
?>