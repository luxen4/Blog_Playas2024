<?php  
$localidad = 'Sonabia';     $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); 
$localidad_minuscula = strtolower(str_replace(['ñ', 'Ñ', ' '], ['n', 'n', '-'], $localidad));
$localidad_minuscula = $localidad_minuscula; 
$region = 'Cantabria';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    $country_minuscula = strtolower(str_replace(' ', '-', $country));   
?>