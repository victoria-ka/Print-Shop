<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Contact</title>
        <meta charset="utf-8">
        <meta name="description" content="Contact Me">
        <meta name="author" content="Victoria Austin">
        <link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	
	<body class="accountpage">
	
		<?php include 'navmenu.php'; ?>
		
		<?php

			include 'navmenu.php';
			include 'db_connect.php';
		
			$formvalid = "";
			$statevalid = "";
			$zipvalid = "";
			$phonevalid = "";
			$streetvalid = "";
		
			//if all are defined
			if (!$_POST == "") {
				
				//assign all to variables
				$user = $_POST['user_name'];
				$pass = sha1($_POST['pass']);
			    $phone = $_POST['phone'];
			   	$email = $_POST['email']; 
				$street = $_POST['street'];
			    $city = $_POST['city'];
			   	$zip = $_POST['zip'];
				$state = $_POST['state'];
				
				$phone = preg_replace("/[^0-9]/", "", $phone);
				
				$userArray = array($user, $pass, $phone, $email, $street, $city, $zip, $state);
				
				//check if each one meets specifications
				if (strlen($state) != 2) {
					$statevalid = "<p>State must be 2 characters</p><br>";
				} 
				else if (strlen($zip) != 5) {
					$zipvalid = "<p>Zip must be 5 numbers</p><br>";
				}
				else if (strlen($phone) != 10) {
					$phonevalid = "<p>Phone must be 10 numbers<p/><br>";
				}
				else if ( !preg_match("/[0-9]/", $street[0]) || !preg_match("/[a-zA-Z]/",substr($street,-1)) ){
					$streetvalid = "<p>Street must begin with a number and end with a letter.</p><br>";
				}
				else {
					
					$sql = "INSERT INTO UserAccounts (email,username,password) VALUES('$email','$user','$pass')"; //prepare to add stats to database table
					mysqli_query($connection, $sql); //run the query
					
					$formvalid = "You have successfully created <br>an account, $user.<br> You will be redirected to <br>the homepage in 5 seconds.<br><br>";
					header("Refresh:5; url=index.php");
				}
				
			}
				
					//if all are validated
						//Account creation succeeded, redirect to home page in 5 seconds.
        	
		
		?>
		
		<div class="contactform">
			<form action="" method="POST">
			
				<?php 
					echo $formvalid;
					echo $statevalid;
					echo $zipvalid;
					echo $phonevalid;
					echo $streetvalid;
				?>
				
				Username:<br>
				<input type="text" name="user_name" size="30"><span class="error"> *</span><br><br>
				Password:<br>
				<input type="text" name="pass" size="30"><span class="error"> *</span><br><br>
				Phone Number:<br>
				<input type="text" name="phone" size="30"><span class="error"> *</span><br><br>
				E-mail Address:<br>
				<input type="text" name="email" size="30"><span class="error"> *</span><br><br>
				Street:<br>
				<input type="text" name="street" size="30"><span class="error"> *</span><br><br>
				City:<br>
				<input type="text" name="city" size="30"><span class="error"> *</span><br><br>
				Zip Code: 
				<input type="text" name="zip" size="3"><span class="error"> *</span> 
				State: 
				<input type="text" name="state" size="3"><span class="error"> *</span><br><br>
				<input type="submit" value="Send" class="button">
			</form>
		</div>
		
	</body>
	
</html>