<?php

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$telefono= $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//librerias
require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();

//Configuracion servidor mail
$mail->From = "modernizacionmmp@gmail.com"; //remitente
$mail->FromName = "muebles-andy.com"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='modernizacionmmp@gmail.com'; //nombre usuario
$mail->Password = 'modernizacionmarcospaz55'; //contraseña
 

//Agregar destinatario	
$mail->AddAddress('ventas@muebles-andy.com');
$mail->Subject = "Contacto a través del Sitio Web";
$mail->Body = " \n
Buenos días, recibiste una sugerencia a través de http://marcospazdigital.gob.ar: \n
Apellido/s y Nombre/s: ". $nombre ."\n
Asunto: ". $asunto ."\n
Telefono de Contacto: ". $telefono ."\n
Mensaje: ". $mensaje ."\n\n\n
Agradecemos que por favor, comparta esta información con los responsables del área\n
Muchas Gracias.

"
;
	
//le activamos el charset utf8
$mail->CharSet = 'UTF-8';
//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
	header("Location:mailconfirmado.php");
} else {
	header("Location:mailnoconfirmado.php");
}

?>