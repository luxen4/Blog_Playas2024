<?php
    $region = 'Nouvelle-Aquitaine'; $region='francia';
    $localidad = 'Biarritz';
    $country = 'Francia';
    $region_minuscula = strtolower(str_replace(' ', '-', $region));
    $carpeta = 'playadebiarritz'; // nombre de la carpeta para esta playa
    $rutas = 'playa-de-biarritz-francia';

    $descripcion = 'Descubre la Playa de Biarritz, una joya de la costa vasco-francesa, famosa por su ambiente elegante, su cultura surfista y su hermoso paisaje costero.';

    $url = "http://playas2024.kesug.com/Blog_Playas2024/localidades/{$region_minuscula}/{$carpeta}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Biarritz combina la belleza del Atlántico con el estilo de vida francés, siendo un destino ideal tanto para los amantes del surf como para quienes buscan relax junto al mar.';
    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    $mainEntity_geo_latitude = 43.4832;  // Coordenadas reales aproximadas de Biarritz
    $mainEntity_geo_longitude = -1.5586;

    $mainEntity_image = PATH_RAIZ . "localidades/{$region_minuscula}/{$carpeta}/{$rutas}.jpg";
    $mainEntity_url = $url;
?>