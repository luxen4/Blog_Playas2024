<?php
    $region = 'País Vasco Francés'; $region='francia';
    $localidad = 'Hendaya';
    $country = 'Francia';
    $region_minuscula = strtolower(str_replace(' ', '', $region)); // para carpeta sin espacios
    $carpeta = 'playadehendaya'; // nombre de la carpeta para esta playa
    $rutas = 'playa-de-hendaya-francia';

    $descripcion = 'Descubre la Playa de Hendaya, una extensa playa francesa en el País Vasco, ideal para el surf, el relax y disfrutar del mar en un entorno natural privilegiado.';

    $url = "http://playas2024.kesug.com/Blog_Playas2024/localidades/{$region_minuscula}/{$carpeta}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Hendaya es famosa por su gran longitud, arena fina y olas perfectas para el surf, ubicada en un entorno natural muy apreciado por turistas y locales.';
    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    $mainEntity_geo_latitude = 43.3633;  // Coordenadas aproximadas reales de Playa de Hendaya
    $mainEntity_geo_longitude = -1.7850;

    $mainEntity_image = PATH_RAIZ . "localidades/{$region_minuscula}/{$carpeta}/{$rutas}.jpg";
    $mainEntity_url = $url;
?>