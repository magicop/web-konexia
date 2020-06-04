<?php 
	
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$phone = $_POST['phone'];
	$notes = $_POST['notes'];

	$to = "contacto@konexia.cl"; // this is your Email address

	$subject = "Contacto";
	$message = $sender_name . " envió un mensaje. Su número es: " .  $phone . " Con las siguiente descripción: ". "\n\n" . $notes;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>