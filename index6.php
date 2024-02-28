<?php

// Estructuras Selectivas

// $age = 2;

// if($age >=18){
//     echo "Tu eres mayor de edad";
// } else {
// echo"Tu eres menor de edad";}

// function esPar($numero) {
    
//     if ($numero % 2 == 0) {
//         return true; 
//     } else {
//         return false; 
//     }
// }

// $num = 5;
// if (esPar($num)) {
//     echo "$num es par.";
// } else {
//     echo "$num es impar.";
// }

// !Anidados
// function determinarCategoriaEdad($edad) {
//     if ($edad >= 20 && $edad <= 29) {
//         return "veinteañero";
//     } elseif ($edad >= 30 && $edad <= 39) {
//         return "eres treintañero";
//     } else {
//         return "eres viejo";
//     }
// }

// $edad = 39; 

// $categoria = determinarCategoriaEdad($edad);
// echo "A los $edad años, $categoria";

// !Swich


// $dia = "desconocido"; 

// switch ($dia) {
//     case "lunes":
//         echo "Ahora es lunes";
//         break;
//     case "martes":
//         echo "Ahora es martes";
//         break;
//     case "miércoles":
//         echo "Ahora es miércoles";
//         break;
//     case "jueves":
//         echo "Ahora es jueves";
//         break;
//     case "viernes":
//         echo "Ahora es viernes";
//         break;
//     case "sábado":
//         echo "Ahora es sábado";
//         break;
//     case "domingo":
//         echo "Ahora es domingo";
//         break;
//     default:
//         echo "Se desconoce el día";
// }

// Estructuras de Repetitivas

// $counter = 1;
// while ($counter <= 10){
//     echo "El numero es" . $counter . "<br>";
//     $counter ++;
// } 

// for ($counter = 1; $counter <= 10; $counter+2) {
//     echo "El numero es". $counter . "<br>";}

// $counter = 1;

// do {
//     echo $counter . "<br>";
//     $counter++; 
// } while ($counter <= 10);

// !Arreglo de numeros

$numeros = array (1,2,3,4,5,6,7,8,9);
foreach ($numeros as $numero ) {
    echo $numero ."<br>";
}


?>