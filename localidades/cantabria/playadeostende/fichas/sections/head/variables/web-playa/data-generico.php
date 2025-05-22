<?php
    $descripcion = 'Descubre la Playa de Ostende, un destino conocido por su amplia extensión de arena dorada, ideal para disfrutar del surf y la naturaleza en la costa cantábrica.';
    $url = "http://playas2024.kesug.com/Blog_Playas2024/localidades/{$region_minuscula}/{$carpeta}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Ostende es famosa por su hermosa arena dorada y sus excelentes condiciones para deportes acuáticos como el surf.';
    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    $mainEntity_geo_latitude = 43.4693; // Actualiza según la ubicación correcta
    $mainEntity_geo_longitude = -3.5002; // Actualiza según la ubicación correcta

    $mainEntity_image = PATH_RAIZ . "localidades/{$region}}/{$carpeta}/{$rutas}.jpg"; // Reemplaza con la imagen correcta
    $mainEntity_url =  PATH_RAIZ . "{$rutas}";
?>