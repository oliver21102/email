<?php



$to = "oliverzentenodev@hotmail.com";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
echo "enviado correo"; 
mail($to, $subject, $message);


?>