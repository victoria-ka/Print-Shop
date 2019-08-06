<!DOCTYPE html>
<html>

	<head>
		<title>My Print Shop</title>
        <meta charset="utf-8">
        <meta name="description" content="Login">
        <meta name="author" content="Victoria Austin">
        <link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	
	<body class="loginpage">
      
      	<?php
			include 'checklogin.php'; 
		?>
       
        <?php
			
			if (!isset($_SESSION['loggedin']) ) { 
		?>
		
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="store.php">Store</a></li>
					<li class="account"><a href="createaccount.php">Create an Account</a></li>
					<li class="Login"><a href="login.php">Login</a></li>
				</ul>
			</nav>

			<div class="contactform">
				<!--Form for login-->
				<form action="" method="POST">
					<p><?php echo $message; ?></p>
					Username:<br>
					<input type="text" name="username" size="30"><br><br><br>
					Password:<br>
					<input type="password" name="password" size="30"><br><br><br>
					<input type="submit" value="Login" class="button">
				</form>
			</div>
			
		<?php
			} else {
		?>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="store.php">Store</a></li>
					<li class="account"><a href="createaccount.php">Create an Account</a></li>
					<li class="Logout"><a href="logout.php">Logout</a></li>
				</ul>
			</nav>	
				
			<h1>You can begin adding items to your cart!</h1>
		
		<?php 		
			}
		?>
		
	</body>
	
</html>