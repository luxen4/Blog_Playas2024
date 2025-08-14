<?php
    // Datos principales para la localidad de Baiona (Francia)
    $descripcion = 'Baiona, en la región de Nueva Aquitania, es una ciudad con encanto histórico, famosa por su casco antiguo, su gastronomía vasca y su ambiente cultural único.';

    $localidad_minuscula = 'baiona'; // slug de la localidad
    $region_minuscula    = 'nouvelle-aquitaine'; // región ya en minúsculas

    $url = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/index.php";

    // Schema.org mainEntity (TouristDestination) para Baiona
    $mainEntity_description     = 'Baiona es una ciudad del País Vasco francés reconocida por su arquitectura tradicional, su catedral gótica y sus festivales como la célebre Fiesta de Baiona.';
    $mainEntity_addressLocality = 'Baiona';
    $mainEntity_addressRegion   = 'Nueva Aquitania';
    $mainEntity_addressCountry  = 'Francia';

    // Coordenadas aproximadas del centro de Baiona
    $mainEntity_geo_latitude    = 43.4929;
    $mainEntity_geo_longitude   = -1.4748;

    // Imagen representativa y URL canónica para Baiona
    $mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/baiona.jpg";
    $mainEntity_url   = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/index.php";
?>
