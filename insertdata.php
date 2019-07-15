<?php
    //connect to the server
	$servername = "localhost";
	$server_username = "NAME OF USER FOR db";
	$server_password = "PASSWORD OF DB";
	$dbName = "NAME OF THE DB";
    //NAMES OF THE COLUMNS
	$NAMEOFCOLUMN1=$_POST["NAMEOFCOLUMN1"];
	$NAMEOPFCOLUMN2=$_POST["NAMEOFCOLUMN2"];
...
	//connect to database
	$conn = new mysqli($servername, $server_username, $server_password, $dbName);
	//cheack connection
	if(!$conn) {
		die("Connection Failed.  ".  mysqli_connect_error());

	}
	//insert into database
	$sql = "INSERT INTO switchTable (NAMEOFCOLUMN1,NAMEOFCOLUMN2...)
	VALUES ('".$NAMEOFCOLUMN1."','".$NAMEOFCOLUMN2."', ... ')";
	$result = mysqli_query($conn ,$sql);
    //cheack if it works (in url ip then / name of this file .php)
	if(!result) echo "there was an error";
	else echo "It Worked!";
?>
