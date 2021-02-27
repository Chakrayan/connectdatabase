<?
	mysql_connect("us-cdbr-east-03.cleardb.com", "bf1f491c16551f", "9c5c709c")or die("connect error");
	mysql_select_db("heroku_cab583369fb7ce6")or die("database error");
	
	$sql = "SELECT * FROM users";
	$query = mysql_query($sql)or die("query error");
	 
	echo"<h1>Select database in Heroku</h1>";

	while($data = mysql_fetch_array($query)){
	echo"$data['username']<br>";
	}

?>
