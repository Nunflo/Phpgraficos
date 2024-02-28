<?php

// Primer rest api

if($_SERVER ["REQUEST_METHOD"] == "GET"){
    
   
    header ("Content-Type: application/json");
    http_response_code (200);

    $data = array(
        "nombre"=> "juan perez",
        "age"=>24,
        "email"=> "ls@hotmail.com",
        "phone"=> 123456789);
        
        echo json_encode ( $data);

}


?>