<?php

if (($open = fopen("student.csv", "r")) !== false) {

    while (($data = fgetcsv($open, 100, ",")) !== false) {
        $array[] = $data;
    }
    fclose($open);

    // Itera sobre el array para imprimir solo el nombre
    foreach ($array as $student) {
        echo $student[0] . "<br>"; 
    }
}

?> 


<?php

if (($open = fopen("student.csv", "r")) !== false) {
    // Abre el archivo y comienza la manipulación de datos

    while (($data = fgetcsv($open, 100, ",")) !== false) {
        $array[] = $data;
    }
    fclose($open);

    echo "<pre>";

    // Almacena los nombres de los estudiantes en un array separado
    $names = array();
    for ($i = 0; $i < count($array); $i++) {
        $names[] = $array[$i][0]; // Suponiendo que el nombre está en la primera columna
    }

    // Elimina los nombres duplicados
    $unique_names = array_unique($names);

    // Imprime los nombres únicos
    foreach ($unique_names as $name) {
        echo $name . "<br>";
    }

    echo "</pre>";
}

?>



 <?php

if (($open = fopen("student.csv", "r")) !== false) {
    // Abre el archivo y comienza la manipulación de datos

    while (($data = fgetcsv($open, 100, ",")) !== false) {
        $array[] = $data;
    }
    fclose($open);

    echo "<pre>";

    $names = array();
    for ($i = 0; $i < count($array); $i++) {
        $names[] = $array[$i][0]; 
    }

    
    $unique_names = array_unique($names);

    // Ordenar alfabeticamente inicia en la A
    sort($unique_names);
    // Ordenar alfabeticamente inicia en la z
    rsort($unique_names);

    
    foreach ($unique_names as $name) {
        echo $name . "<br>";
    }

    echo "</pre>";
}

?> 
