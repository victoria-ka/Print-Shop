<?php
	session_start();
?>

<!DOCTYPE html>
<html>

	<head>
		<title>My Print Shop</title>
        <meta charset="utf-8">
        <meta name="description" content="Logout">
        <meta name="author" content="Victoria Austin">
        <link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	
	<body class="logoutpage">
	
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="store.php">Store</a></li>
				<li class="account"><a href="createaccount.php">Create an Account</a></li>
				<li class="Login"><a href="login.php">Login</a></li>
			</ul>
		</nav>
	
		<?php 
		
			session_destroy();
		
		?>
		
		<h1>You have been logged out.</h1>
		
	</body>
	
</html>