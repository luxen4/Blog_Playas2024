<?php
    // Datos principales para la Plage Centrale en Capbreton (Francia)
    $descripcion = 'Descubre la Plage Centrale de Capbreton, una playa amplia y animada, ideal para el surf, paseos y disfrutar de las vistas al Atlántico, en pleno corazón de Las Landas.';

    $localidad_minuscula = 'plage-centrale-capbreton';  // slug de la playa
    $region_minuscula = 'nouvelle-aquitaine';  // región ya en minúsculas

    $url = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/index.php";

    // Schema.org mainEntity (TouristDestination) para la Plage Centrale de Capbreton
    $mainEntity_description     = 'La Plage Centrale de Capbreton es conocida por su ambiente familiar, su proximidad al centro urbano y su excelente oleaje para el surf.';
    $mainEntity_addressLocality = 'Capbreton';
    $mainEntity_addressRegion   = 'Nueva Aquitania';
    $mainEntity_addressCountry  = 'Francia';

    // Coordenadas aproximadas de la Plage Centrale de Capbreton
    $mainEntity_geo_latitude    = 43.6538;
    $mainEntity_geo_longitude   = -1.4387;

    // Imagen representativa y URL canónica para la Plage Centrale de Capbreton
    $mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/plage-centrale-capbreton.jpg";
    $mainEntity_url   = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/index.php";
?>
