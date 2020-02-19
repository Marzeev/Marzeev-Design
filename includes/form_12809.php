<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['phone']) && strlen($_POST['phone']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to = 'marzeev@me.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Marzeev Design";
	$email_body = "New message \n\n".
				  "Name: $name \nPhone: $phone \nEmail: $email \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: marzeev@me.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>