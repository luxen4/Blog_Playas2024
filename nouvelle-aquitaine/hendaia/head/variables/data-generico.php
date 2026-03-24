<?php
    // Datos principales para la localidad de Hendaia (Francia)
    $descripcion = 'Hendaia, en la región de Nueva Aquitania, es un hermoso destino costero conocido por su extensa playa de arena fina, su puerto deportivo y su proximidad a la frontera española.';

    $localidad_minuscula = 'hendaia'; // slug de la localidad
    $region_minuscula    = 'nouvelle-aquitaine'; // región ya en minúsculas

    $url = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/index.php";

    // Schema.org mainEntity (TouristDestination) para Hendaia
    $mainEntity_description     = 'Hendaia es una localidad vasco-francesa con un encanto especial, famosa por su playa de tres kilómetros, su casco histórico y su ambiente marítimo.';
    $mainEntity_addressLocality = 'Hendaia';
    $mainEntity_addressRegion   = 'Nueva Aquitania';
    $mainEntity_addressCountry  = 'Francia';

    // Coordenadas aproximadas del centro de Hendaia
    $mainEntity_geo_latitude    = 43.3720;
    $mainEntity_geo_longitude   = -1.7731;

    // Imagen representativa y URL canónica para Hendaia
    $mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/hendaia.jpg";
    $mainEntity_url   = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/index.php";
?>
