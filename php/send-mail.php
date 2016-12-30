<?php
	$to = "joelokwemba@cisa-global.org"; /*Email*/
	$subject = "Message from CISA Web Form"; 
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A");
	$Email=$_REQUEST['Email'];

	$msg="
	Name: $_REQUEST[Name]
	Email: $_REQUEST[Email]
		
	Message sent from website on date  $date, hour: $time.\n

	Message:
	$_REQUEST[message]";

	if ($Email=="") {
		echo "<div class='alert alert-danger'>Please enter your email address</div>";
	}
	else{
		mail($to, $subject, $msg, "From: $_REQUEST[Email]");
		echo "<div class='alert alert-success'>Thank you for your message</div>";	
	}
	
?>
