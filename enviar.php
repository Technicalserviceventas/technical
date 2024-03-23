<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['Phone Number'];
$message = &$_POST['Message'];

$header = 'from: ' .$mail . "\r\n";
$header .= "x-Mailer: php/" . phpversion() . "\r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message = "Su e-email es: " . $mail . " \r\n";
$message = "Telefono de contacto: "  . $phone . "\r\n";
$message = "Mensaje: " . $_POST['message'] . "\r\n";
$message = "Enviado el: " . date('d/m/y', time());

$para = 'technicalserviceventas@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);

header("location:index.html");
?>
