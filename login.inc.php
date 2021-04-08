<?php
	if (isset($_POST["submit"])) {

		$username = $_POST["user"];
		$password = $_POST["password"];

		require_once 'dbh.inc.php';

		if (emptyInputLogin($username, $password) !== false) {
			exit();
		}

		loginUser($conn, $username, $password);

	} 
	else {
		exit();
	}
?>