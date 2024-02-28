<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"]; // Accediendo al valor del campo de entrada "nombre"
    echo "Hola, $nombre. Bienvenido a nuestro sitio";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nombre" placeholder="Ingresa tu nombre"></input> <!-- Agregando el atributo name -->
        <input type="text" name="apellido" placeholder="Ingresa tu apellido"></input> <!-- Agregando el atributo name -->
        <input type="number" name="numero" placeholder="Ingresa tu número"></input> <!-- Agregando el atributo name -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
