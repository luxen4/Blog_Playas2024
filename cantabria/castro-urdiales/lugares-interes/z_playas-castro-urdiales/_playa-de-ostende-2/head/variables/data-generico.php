
<?php require PATH_LOCALIDAD . '/localizacion-localidad.php';?>

<?php // meta-tags
// Variables de configuración para la Playa de Ostende
$graph_Meta_Tags_property_title = 'Playa de Ostende - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$graph_Meta_Tags_property_image = PATH_LOCALIDAD."/{$rutas}.jpg";
$graph_Meta_Tags_property_url = PATH_LOCALIDAD."/fichas/{$rutas}.php";
$graph_Meta_Tags_property_type = 'website';
?>


<?php
    // Variables de configuración para Pinterest
    $pinterest_property_card_card_content = 'summary_large_image';
    $pinterest_property_card_title_content = 'Playa de Ostende - Información y Turismo';
    $pinterest_property_card_description_content = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
    $pinterest_property_card_image_content = PATH_LOCALIDAD.'/playa-de-ostende.jpg';
?>

<?php
 // Variables de configuración Twitter para la Playa de Ostende
$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Ostende - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$twiterCards_image = PATH_LOCALIDAD.'/playa-de-ostende.jpg';
$twiterCards_url = PATH_LOCALIDAD.'/fichas/playa-de-ostende.php?i=1';
?>




<?php
    $descripcion = 'Descubre la Playa de Ostende, un destino conocido por su amplia extensión de arena dorada, ideal para disfrutar del surf y la naturaleza en la costa cantábrica.';
    $url = PATH_LOCALIDAD."/{$region_minuscula}/{$localidad_minuscula}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Ostende es famosa por su hermosa arena dorada y sus excelentes condiciones para deportes acuáticos como el surf.';
    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    $mainEntity_geo_latitude = 43.4693; // Actualiza según la ubicación correcta
    $mainEntity_geo_longitude = -3.5002; // Actualiza según la ubicación correcta

    $mainEntity_image = PATH_DOMINIO_RAIZ . "{$region}}/{$localidad_minuscula}/{$rutas}.jpg"; // Reemplaza con la imagen correcta
    $mainEntity_url =  PATH_DOMINIO_RAIZ . "{$rutas}";
?>


<?php // structure-data-schema-org
// Datos estructurados Schema.org (mainEntity)
$mainEntity_description = 'La Playa de Ostende es famosa por su hermosa arena dorada y sus excelentes condiciones para deportes acuáticos como el surf.';
$mainEntity_addressLocality = $nombre_playa;
$mainEntity_addressRegion = $region;
$mainEntity_addressCountry = $country;

// Coordenadas geográficas
$mainEntity_geo_latitude = 43.4693;
$mainEntity_geo_longitude = -3.5002;

// Imagen representativa y URL canónica
$mainEntity_image = PATH_LOCALIDAD."/img/{$rutas}.jpg";
$mainEntity_url = PATH_DOMINIO_RAIZ . "{$rutas}";
?> 
