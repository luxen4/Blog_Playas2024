<?php
// Parque Amestoy – Castro-Urdiales, Cantabria
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Cambia si tienes un valor distinto

// Pinterest Cards
$pinterest_property_card_card_content        = SUMARY_LARGE_IMAGE;
$pinterest_property_card_title_content       = 'Parque Amestoy – Castro-Urdiales, Cantabria';
$pinterest_property_card_description_content = 'Descubre el Parque Amestoy en Castro-Urdiales: zonas verdes, ocio familiar y naturaleza en Cantabria.';
$pinterest_property_card_image_content       = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/parque-amestoy-1.jpg";

// Twitter Cards
$twitterCards_card        = SUMARY_LARGE_IMAGE;
$twitterCards_site        = CARD_SITE;
$twitterCards_title       = 'Parque Amestoy – Castro-Urdiales, Cantabria';
$twitterCards_description = 'Disfruta del Parque Amestoy en Castro-Urdiales, un espacio verde perfecto para paseos, actividades y relax en Cantabria.';
$twitterCards_image       = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/parque-amestoy-1.jpg";
$twitterCards_url         = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/parque-amestoy-castro-urdiales.php";

// Open Graph
$graph_Meta_Tags_property_title        = 'Parque Amestoy – Castro-Urdiales, Cantabria';
$graph_Meta_Tags_property_description  = 'Visita el Parque Amestoy en Castro-Urdiales: un pulmón verde ideal para el ocio familiar y el contacto con la naturaleza.';
$graph_Meta_Tags_property_image        = PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/".LUGAR_MINUSCULA."/img/".LUGAR_MINUSCULA.".jpg";
$graph_Meta_Tags_property_url          = PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/".LUGAR_MINUSCULA."/index.php"; 

echo($graph_Meta_Tags_property_image);
?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD . '/graph_Meta_Tags_property-generico.php'; ?>
