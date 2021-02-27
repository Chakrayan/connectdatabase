<?
	$server = "us-cdbr-east-03.cleardb.com";
	$username="bf1f491c16551f";
	$password="9c5c709c";
	$dbname="heroku_cab583369fb7ce6";
	$conn = new mysqli($server, $username, $password, $dbname);
	

	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);
	 
	echo"<h1>Select database in Heroku</h1>";

	 while ($row = mysqli_fetch_assoc($result)) {
	 	echo"$row['username']";
		echo"<br>";
	 }

?>
