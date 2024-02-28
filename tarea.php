<?php

//! Definimos la función para generar la serie Fibonacci
function generarFibonacci($n) {
    // Inicializamos los primeros dos términos de la serie
    $fibonacci = array(0, 1);
    
    // Utilizamos un bucle for para generar los siguientes términos
    for ($i = 2; $i < $n; $i++) {
        // Calculamos el siguiente término como la suma de los dos términos anteriores
        $next = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        // Agregamos el siguiente término a la serie
        $fibonacci[] = $next;
    }
    
    // Retornamos la serie Fibonacci generada
    return $fibonacci;
}

// Número de términos de la serie que deseamos generar
$n = 10;

// Llamamos a la función y almacenamos el resultado en una variable
$serieFibonacci = generarFibonacci($n);

// Imprimimos la serie Fibonacci generada
echo "Los primeros $n términos de la serie Fibonacci son: ";
echo implode(", ", $serieFibonacci) , "<br>";


//! Definimos la función esPrimo que determina si un número dado es primo o no
function esPrimo($numero) {
    // Un número primo debe ser mayor que 1
    if ($numero <= 1) {
        return false;
    }
    
    // Iteramos desde 2 hasta la mitad del número para verificar si es divisible
    for ($i = 2; $i <= $numero / 2; $i++) {
        // Si el número es divisible por $i, entonces no es primo
        if ($numero % $i == 0) {
            return false;
        }
    }
    
    // Si no se encontró ningún divisor entre 2 y la mitad del número, es primo
    return true;
}

// Probamos la función con algunos números
$numeros = [7, 12, 29, 50];

foreach ($numeros as $numero) {
    if (esPrimo($numero)) {
        echo "$numero es primo.\n";
    } else {
        echo "$numero no es primo.\n", "<br>";
    }
}

//! Función para determinar si una cadena es un palíndromo
function esPalindromo($cadena) {
    // Convertimos la cadena a minúsculas para hacer la comparación sin distinguir entre mayúsculas y minúsculas
    $cadena = strtolower($cadena);
    
    // Eliminamos los espacios en blanco de la cadena
    $cadena = str_replace(' ', '', $cadena);
    
    // Obtenemos la longitud de la cadena
    $longitud = strlen($cadena);
    
    // Iteramos sobre la mitad de la cadena
    for ($i = 0; $i < $longitud / 2; $i++) {
        // Comparamos el carácter actual con su correspondiente al final de la cadena
        if ($cadena[$i] !== $cadena[$longitud - $i - 1]) {
            // Si los caracteres no coinciden, la cadena no es un palíndromo
            return false;
        }
    }
    // Si todas las comparaciones son iguales, la cadena es un palíndromo
    return true;
}

// Ejemplo de uso
$cadena1 = "Anita lava la tina";
$cadena2 = "Hola mundo";

if (esPalindromo($cadena1)) {
    echo "'$cadena1' es un palíndromo.";
} else {
    echo "'$cadena1' no es un palíndromo.";
}

echo "<br>";

if (esPalindromo($cadena2)) {
    echo "'$cadena2' es un palíndromo.";
} else {
    echo "'$cadena2' no es un palíndromo.";
}
?>
