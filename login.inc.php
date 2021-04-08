<?php

	//Get values from signIn.php
	
	$username = $_POST['user'];
	$password = $_POST['pass'];

	//SQL Injection
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	echo $username;

	//connect to the server
	mysql_connect('localhost', 'root', '');
	mysql_select_db("users");

	//Query database 
	$result = mysql_query("SELECT * FROM users WHERE usersName = '$username' AND usersPassword = '$password'") or die("Failed to reach database " . mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['userName'] == $username && $row['usersPassword'] == $password){
		echo "Login success! Welcome " . $row['userName'];
	}	else {
		echo "Failed login";
	}

?>