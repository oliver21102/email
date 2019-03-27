<?php



$to = "oliverzentenodev@hotmail.com";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
 
mail($to, $subject, $message);

?>