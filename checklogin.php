<?php
	session_start();

	include 'db_connect.php';

	$message = "";

	//If username matches "dig3134user" && password matches "dig3134pass"
	if ( isset($_POST['username']) && isset($_POST['password']) ) {

		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		
		$sql = "SELECT * FROM UserAccounts WHERE username='" . $username . "' AND password='".$password."' LIMIT 1"; //See if entered username/pass == username/pass in database
		
		$result = mysqli_query($connection, $sql); //Execute the sql query and store result in $result
		
		if (mysqli_num_rows($result) == 1) {		//if account exists
			//If so, set the session to log in
			$_SESSION['loggedin'] = 'true';
			header("Refresh:0; url=login.php");
		} else {
			$message = "Invalid username and password";
		}

	}

?>