<?php
    //connect to the server
	$servername = "localhost";
	$server_username = "root";
	$server_password = "password";
	$dbName = "switchdata";
    //port variables
	$p1 = $_POST["p1Post"];//0;
	$p2 = $_POST["p2Post"];//0;
	$p3 = $_POST["p3Post"];//0;
	$p4 = $_POST["p4Post"];//0;
	//connect to database
	$conn = new mysqli($servername, $server_username, $server_password, $dbName);
	//cheack connection
	if(!$conn) {
		die("Connection Failed.  ".  mysqli_connect_error());

	}
	//insert into database
	$sql = "INSERT INTO switchTable (p1,p2,p3,p4)
	VALUES ('".$p1."','".$p2."','".$p3."','".$p4."')";
	$result = mysqli_query($conn ,$sql);
    //cheack if it works (in url ip then / name of this file .php)
	if(!result) echo "there was an error";
	else echo "It Worked!";
?>
