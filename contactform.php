<?php

	$name = $_POST['name'];
	$mailfrom = $_POST['email'];
	$message = $_POST['message'];
	$number = $_POST['number'];
	
	$emailSubject = "Job Information";

	$mailBody = "User Name: ". $name.". \n".
				"User Email: ". $mailfrom.".\n".
				"User message: ". $message.".\n".
				"User Number: ". $number.".\n";

	$mailTo = "recio_albert@yahoo.com";

	$headers = "From: ".$mailfrom;

	$headers .= "Reply To". $mailfrom;

	mail($mailTo,$emailSubject,$mailBody,$headers);

	header("Locations: index.html");
?>
