<?php		
	$nombre =  $_POST['nombre'];
	$correo =  $_POST['correo'];
	$mensaje =  $_POST['mensaje'];
	$destino = "antonellapastenbernales@gmail.com";
	$asunto = "Mensaje de pagina";
	$headers = 'From: '.$correo."\r\n".
	'Reply-To: '.$correo."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	mail($destino, "Contacto", $mensaje);
?>
