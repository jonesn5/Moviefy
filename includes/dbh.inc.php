<?php

	$serverName = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "database1";

	$conn = mysql_connect($serverName, $dbUsername, $dbPassword, $dbName);

	if (!conn) {
		die("connection unavailable: " . mysql_connect_error());
	}

?>