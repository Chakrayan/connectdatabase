<?php 
	$server = "us-cdbr-east-03.cleardb.com";
	$username="bf1f491c16551f";
	$password="9c5c709c";
	$dbname="heroku_cab583369fb7ce6";
    // Create connection
    $connect = new mysqli($server, $username, $password, $dbname);

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM users";
    $result = $connect->query($sql);
	
	while($row = $result->fetch_assoc()):
	echo $row['username']; 
	echo "<br>";
	endwhile
?>
