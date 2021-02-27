<?
	$server = "us-cdbr-east-03.cleardb.com";
	$username="bf1f491c16551f";
	$password="9c5c709c";
	$dbname="heroku_cab583369fb7ce6";
	mysql_connect($server, $username, $password);
	mysql_select_db($dbname);
	
	 $sql = "SELECT * FROM users ORDER BY username";
	 $query = mysql_query($sql);
	 
	 echo"<h1>Select database in Heroku</h1>";
	 
	 while($data = mysql_fetch_array($query)){
	 	echo"$data["username"]<br>";
	 }

?>
