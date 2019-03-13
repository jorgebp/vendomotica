<?php

error_reporting(0); 
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$header = 'From: ' . $mail . " \r\n"; 
$header = "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header = "Mime-Version: 1.0 \r\n"; 
$header = "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje = "Su e-mail es: " . $mail . " \r\n"; 
$mensaje = "aficiones " . $_POST['mensaje'] . " \r\n";
$mensaje = "Enviado el " . date('d/m/Y', time()); 

$para = 'jorge.beltranp@outlook.com'; 
$asunto = 'Consulta FamilyVending';

@mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente'; 

?>