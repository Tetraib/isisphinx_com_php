<?php
	
	$message  = "<pre>";
	$message .= "--------------------------------------------------------------------------------------------------------"."\r\n";
	$message .= "Civilité           : " . @$_POST['contact-civilite']."\r\n";
	$message .= "Prénom             : " . @$_POST['contact-prenom']."\r\n";
	$message .= "Nom                : " . @$_POST['contact-nom']."\r\n";
	$message .= "Email              : " . @$_POST['contact-email']."\r\n";
	$message .= "Code Postal        : " . @$_POST['contact-code_postal']."\r\n";
	$message .= "Téléphone          : " . @$_POST['contact-telephone']."\r\n";
	$message .= "--------------------------------------------------------------------------------------------------------"."\r\n";
	$message .= "Objet              : " . @$_POST['contact-objet']."\r\n";
	$message .= "Message            : " . @$_POST['contact-message']."\r\n";
	$message .= "--------------------------------------------------------------------------------------------------------"."\r\n";
	$message .= "</pre>"."\r\n";

	$message = strip_tags($message, '<pre><u><a>');

	$to 		 = "thomas@serenad.fr";
	$subject	 = "Formulaire de contact www.isisphinx.com";

	$from  	 = "From:isisphinx <no-reply@isisphinx.com>\n";
	$from 	.= "MIME-version: 1.0\n";
	$from 	.= "Content-type: text/html; charset= UTF-8\n";

	mail($to,$subject,$message,$from);
	mail("thibaut.constant@isisphinx.com",$subject,$message,$from);




	
?>