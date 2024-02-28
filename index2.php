<?php
$Edad = 24;

echo "edad . <br>";

$precio_celular = 150.90;

echo $precio_celular . "<br>";

$nombre = "Juan Perdro";
echo $nombre . "<br>";

$foco_encendido = true;
echo $foco_encendido . "<br>";

// Arreglos
$frutas = array ("fresa, manzana, durazno");
echo $frutas [1] . "<br>";

// Objetos
$estudiante = (object)[
    "nombre" => "Jonathan Flores",
    "Edad" => "",
    "Nacionalidad" => "",
    "Genero" => "",
    "sexo" => ""
];

echo $estudiante ->nombre . "<br>";

// Otra forma de agregar un objeto

$docente = new stdClass;
$docente->nombre = "";
$docente->edad = "";
$docente->nacionalidad = "";

echo $docente -> nombre . "<br>";

// String
$lo_que_sea = "Hola como estas";
echo gettype ($lo_que_sea) . "<br>";

$lo_que_sea = 100;
echo $lo_que_sea ."<br>";

$lo_que_sea = true;
echo $lo_que_sea ."<br>";






?>