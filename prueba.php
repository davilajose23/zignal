<?php


	//Importamos las variables del formulario de contacto
@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$asunto = addslashes($_POST['asunto']);
@$mensaje = addslashes($_POST['mensaje']);
 
//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$email_to = "davila.jose23@gmail.com"; //cambiar por tu email
$contenido = "Nombre: $nombre\n"
. "Email: $email\n"
. "Asunto: $asunto\n"
. "Mensaje: $mensaje\n"
. "\n";
 $asunto .=" ZIGNAL MAIL";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
 
	//Si el mensaje se envía muestra una confirmación
	
	header('Location: ./enviado.html');
	//http://www.dimakers.com/josefer/enviado.html
}else{
 
//Si el mensaje no se envía muestra el mensaje de error
	echo("Error: Su información no pudo ser enviada, intente más tarde");
}

	

?>