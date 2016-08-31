<?php 

	$name = $_POST["fullname"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$mailto = "sknielsen@live.dk";
	$subject = "Mail fra $name";
	$headers  = "From: $name <$email>\r\n";
	$headers .= "Reply-To: $email\r\n";
	
	mail($mailto, $subject, $message, $headers);


	sleep(2);


	header('Location: contact.php');


?>