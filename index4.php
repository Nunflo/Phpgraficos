<?php

// Log Automatizado

$message = "Tienes un ataque Phishing ";
$time = date("Y-m-d H:i:s");

//FILE_APPEND para ir agregando
//.PHP_EOL se registre en texto
//LOCK_EX bloquear la informacion solo se puede manejar desde el servidor

file_put_contents("logs.txt", $message ."".$time .PHP_EOL, FILE_APPEND | LOCK_EX);

?>