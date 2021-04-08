<?php

	if (isset($_POST["submit"])) {

		$username = $_POST["user"];
		$password = $_POST["password"];

		require_once 'dbh.inc.php';

		if (emptyInputLogin($username, $password) !== false) {
			header("location: ../signIn.php?error=emptyinput");
			exit();
		}

		loginUser($conn, $username, $password);

	} 
	else {
		header("location: ../signIn.php");
		exit();
	}