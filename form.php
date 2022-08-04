<?php

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono']
$mail = $_POST['email']
$empresa = $POST['empresa']
$mensaje = $POST['consulta']

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su teléfono es: " . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "De la empresa " . $empresa . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ejemplo@gmail.com'
$asunto = 'Este mail fue enviado desde la web'

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:exito.html');

?>