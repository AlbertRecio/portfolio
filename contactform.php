<?php
   if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $subject = " Job Information";
   $mailfrom = $_POST['email'];
   $number = $_POST['number'];
   $message = $_POST['message'];


   $mailTo = "recio_albert@yahoo.com";
   $headers = "From:".$mailfrom;

   $message = "You have received an e-mail from".$name."\n\n".$message."Here is the number to contact the company".$number;

   mail($mailTo,$subject,$message,$headers);
   header("Location: index.html?mailsend");

	}

