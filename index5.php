<!-- Metodos de arreglos -->

<?php

$fruits = array ("apple", "banana", "orange", "grape", "cherry");
echo $fruits [1] . "<br>";
echo count ( $fruits ) . "<br>";

// Agregar nuevo
array_push ( $fruits,"kiwi");

// eliminar ultimo dato

array_pop ( $fruits);

// Orden Acendente 
sort ( $fruits );

// iterar un arreglo
// Partir as
foreach ( $fruits as $fruits ){
    echo $fruits . "<br>";
}



print_r ( $fruits );


function saludar (){
    echo "Hola uenas noches estudiantes";
}
saludar ();




?>