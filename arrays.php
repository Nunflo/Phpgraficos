<?php

// Arreglos con varias columnas 

function consume_csv($filename = "", $delimiter = ",") {
    if (!file_exists($filename) || !is_readable($filename)) { 
        return false;
    }   

    $header = null;
    $data = array();

    if (($handle = fopen($filename, "r")) !== false) {
        while (($row = fgetcsv($handle, 200, $delimiter)) !== false) {
            if (!$header) { 
                $header = $row;
            } else {
                $data[] = (object) array_combine($header, $row);
            }
        }
        fclose($handle); 
    }
    
    return $data; 
}

$data = consume_csv("students_details.csv");

print_r($data);

?>
