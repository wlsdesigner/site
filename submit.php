<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   empty($_POST['phone'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$email_address = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'wlsdesigner@gmail.com'; // Add your email address inbetween the '' replacing wlsdesigner@gmail.com - This is where the form will send a message to.
$email_subject = "$name enviou um e-mail através do site";
$email_body = "Você recebeu uma mensagem nova de seu formulário de contato site.\n\n"."Aqui estão os detalhes:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // Este é o endereço de e-mail a mensagem gerada será de. Recomendamos o uso de algo como noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>