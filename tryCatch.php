<?php

// include "operation.php";

// // include_once, solo se utiliza para solo una vez
// // Requiere se solicita igual que include

// operation (5,6);

try {
    $value =0;

    if ($value > 1) {
        echo"el valor es mayor a 1";
        
    } else 
     throw new Exception(" El valor es menor a 1 ERROR"); }

     catch (Exception $exception){
        echo "Hubo un error en" . $e-> getMessage;
     }
?>