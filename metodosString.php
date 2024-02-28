<?php

$name = "Jonathan Flores";
echo $name . "<br>";

// Metodo para mayusculas

echo strtoupper ($name) . "<br>";
echo strtolower ($name) . "<br>";

// Solo primera letra mayuscula

echo ucfirst ($name) . "<br>";

// Despues de cada espacio sea mayuscula

echo ucwords ($name) . "<br>";

// remplazar
echo str_replace ("a", "e", $name) . "<br>";

echo str_replace ("a", "e", strtoupper ($name)) . "<br>";
 ?>

 <?php

 $name= strrev("Jonathan Flores");
 echo $name . "<br>";
 ?>