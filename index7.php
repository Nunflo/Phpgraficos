<?php
// Encriptar y desencriptar en PHP

$data = "Hola como has estado";
$cipher = "aes-128-cbc"; // Se define el algoritmo de cifrado
$key = openssl_random_pseudo_bytes(16);
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher)); // Se define el IV (Initialization Vector)

$encrypted = openssl_encrypt($data, $cipher, $key, 0, $iv);
echo "Mi mensaje encriptado es: " . $encrypted . "<br>";

$decrypted = openssl_decrypt($encrypted, $cipher, $key, 0, $iv);
echo "Mi mensaje desencriptado es: " . $decrypted . "<br>";
?>

