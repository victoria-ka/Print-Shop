<?php

	//Takes in username and password to connect to phpMyAdmin.

	$username = "vi433515";	//phpMyAdmin account info
	$password = "Pen?guin08!";
	$database = "vi433515";

	$connection = mysqli_connect("localhost" , "$username" , "$password", "$database") or die(mysql_error());  //(host,username,password,database) Connects to mysql server. Throws error if it cannot connect. 
?>