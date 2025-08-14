<?php
    // Datos principales para la localidad de Biarritz (Francia)
    $descripcion = 'Biarritz, en la región de Nueva Aquitania, es un elegante destino costero famoso por sus playas para el surf, su arquitectura señorial y su vibrante vida cultural.';

    $localidad_minuscula = 'biarritz'; // slug de la localidad
    $region_minuscula    = 'nouvelle-aquitaine'; // región ya en minúsculas

    $url = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/index.php";

    // Schema.org mainEntity (TouristDestination) para Biarritz
    $mainEntity_description     = 'Biarritz es una ciudad costera del suroeste de Francia, reconocida por su historia como balneario de la realeza, sus playas de arena dorada y su cultura del surf.';
    $mainEntity_addressLocality = 'Biarritz';
    $mainEntity_addressRegion   = 'Nueva Aquitania';
    $mainEntity_addressCountry  = 'Francia';

    // Coordenadas aproximadas del centro de Biarritz
    $mainEntity_geo_latitude    = 43.4832;
    $mainEntity_geo_longitude   = -1.5586;

    // Imagen representativa y URL canónica para Biarritz
    $mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/biarritz.jpg";
    $mainEntity_url   = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/index.php";
?>
