<?php

$destino = "damianabalos@hotmail.com";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$company = $_POST['empresa'];

$header = "Envio desde formulario de contacto";
$mensajeCompleto = "\n Nombre :" . $nombre . "\n" . "Email :" . $email . "\n" . "Empresa :" . "\n" . $company;

mail($destino, $mensajeCompleto, $header);
header('Location: index.html');
?>