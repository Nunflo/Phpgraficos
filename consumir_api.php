<?php

$url = "https://rickandmortyapi.com/api/character";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response);

echo json_encode($data);

?>
