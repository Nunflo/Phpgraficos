<?php


// Web scraping buscar

$url = "urlsitioweb";

$html = file_get_contents($url);

$dom = new DOMDocument();

libxml_use_internal_errors(true);

$dom -> loadHTML ($html);


?>