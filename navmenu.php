<?php
			
	if ( !isset($_SESSION['loggedin']) ) {

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
	
<?php
	} else {
?>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="store.html">Store</a></li>
			<li class="account"><a href="createaccount.php">Create an Account</a></li>
			<li class="Logout"><a href="logout.php">Logout</a></li>
		</ul>
	</nav>	
			
<?php 		
	}
?>

