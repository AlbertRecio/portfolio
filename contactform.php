<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailfrom = $_POST['email'];
	$name = $_POST['message'];

	$mailTo = "recio_albert@yahoo.com";
	$headers = "From: ".$mailfrom;

	$txt = "You have received an email from ". $name."\n\n".$message;

	mail($mailTo, $text, $headers);
	header("Location: index.html?mailsend");
}
