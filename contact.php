<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Contact</title>
        <meta charset="utf-8">
        <meta name="description" content="Contact Me">
        <meta name="author" content="Victoria Austin">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
    <body class="contactpage">
         
        <?php include 'navmenu.php'; ?>
        
        <?php
			$message = "";
        	if ( isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text']) ) {
				
				$contact_name = $_POST['contact_name'];
				$contact_email = $_POST['contact_email'];
				$contact_text = $_POST['contact_text'];
				
				if ( !empty($contact_name) && !empty($contact_email) && !empty($contact_text) ) {
					
					$to = $contact_email;
					$subject = "Contact form submitted.";
					$body = $contact_name."\n".$contact_text;
					$headers = "From: ".$contact_email;
					
					if (mail($to, $subject, $body, $headers)) {
						$message = "The message was sent successfully.";
					}
					
				}
				else {
					
					$message = "Sorry, an error occured.<br> Please include all required fields.";
					
				}
			}
        	
        
        ?>
       
        <div class="contactform">
            <form action="contact.php" method="POST">
            	<p><?php echo $message; ?></p>
            	Name:<br>
				<input type="text" name="contact_name" size="30"><span class="error"> *</span><br><br><br>
            	E-mail:<br>
				<input type="text" name="contact_email" size="30"><span class="error"> *</span><br><br><br>
            	Message:<br>
            	<textarea name="contact_text" rows="6" cols="32"></textarea><span class="error"> *</span><br><br><br>
            	<input type="submit" value="Send" class="button">
            </form>
        </div>
        
	</body>


</html>