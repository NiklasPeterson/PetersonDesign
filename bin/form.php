<?php	
	if(empty($_POST['first-name']) || empty($_POST['last-name']) || empty($_POST['number']) || empty($_POST['email']) || empty($_POST['message']))
	{
		return false;
	}
	
	$first-name = $_POST['first-name'];
	$last-name = $_POST['last-name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to = 'mail@peterssondesign.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Niklas Petersson.";
	$email_body = "You have received a new message. \n\n".
				  "First-Name: $first-name \nLast-Name: $last-name \nNumber: $number \nEmail: $email \nMessage: $message \n";
	$headers = "From: contact@peterssondesign.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>