<?php  
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));
$region = 'Nouvelle Aquitaine'; $region_minuscula = 'nouvelle-aquitaine';   
$country = 'Francia'; $country_minuscula = strtolower(str_replace(' ', '-', $country)); 

/*
$localidad = 'Saint-Jean-de-Luz';
$localidad_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $localidad
    )
);

$region = 'Nouvelle Aquitaine';
$region_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $region
    )
);*/

?>