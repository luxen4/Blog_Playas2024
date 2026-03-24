<?php
    // Datos principales para la localidad de Capbreton (Francia)
    $descripcion = 'Capbreton, en la región de Nueva Aquitania, es un encantador destino costero famoso por su puerto pesquero, su mercado de pescado y sus amplias playas para surfistas.';

    $localidad_minuscula = 'capbreton'; // slug de la localidad
    $region_minuscula    = 'nouvelle-aquitaine'; // región ya en minúsculas

    $url = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/index.php";

    // Schema.org mainEntity (TouristDestination) para Capbreton
    $mainEntity_description     = 'Capbreton es un pintoresco pueblo costero del suroeste de Francia, ideal para disfrutar de deportes acuáticos, paseos marítimos y gastronomía local.';
    $mainEntity_addressLocality = 'Capbreton';
    $mainEntity_addressRegion   = 'Nueva Aquitania';
    $mainEntity_addressCountry  = 'Francia';

    // Coordenadas aproximadas del centro de Capbreton
    $mainEntity_geo_latitude    = 43.6410;
    $mainEntity_geo_longitude   = -1.4287;

    // Imagen representativa y URL canónica para Capbreton
    $mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/capbreton.jpg";
    $mainEntity_url   = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/index.php";
?>
