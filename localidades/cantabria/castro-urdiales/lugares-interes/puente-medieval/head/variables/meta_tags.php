<?php
// Puente Medieval – Castro-Urdiales, Cantabria
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Cambia si tienes un valor distinto

// Pinterest Cards
$pinterest_property_card_card_content        = SUMARY_LARGE_IMAGE;
$pinterest_property_card_title_content       = 'Puente Medieval – Castro-Urdiales, Cantabria';
$pinterest_property_card_description_content = 'Descubre el Puente Medieval de Castro-Urdiales: historia, arquitectura y vistas únicas junto al mar Cantábrico.';
$pinterest_property_card_image_content       = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/puente-medieval-1.jpg";

// Twitter Cards
$twitterCards_card        = SUMARY_LARGE_IMAGE;
$twitterCards_site        = CARD_SITE;
$twitterCards_title       = 'Puente Medieval – Castro-Urdiales, Cantabria';
$twitterCards_description = 'Explora el Puente Medieval de Castro-Urdiales: un símbolo histórico junto a la ermita de Santa Ana y el puerto marinero.';
$twitterCards_image       = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/puente-medieval-1.jpg";
$twitterCards_url         = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/puente-medieval.php";

// Open Graph
$graph_Meta_Tags_property_title        = 'Puente Medieval – Castro-Urdiales, Cantabria';
$graph_Meta_Tags_property_description  = 'Visita el Puente Medieval de Castro-Urdiales: una joya arquitectónica en la costa cántabra, con siglos de historia y encanto marinero.';
$graph_Meta_Tags_property_image        = PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/".LUGAR_MINUSCULA."/img/".LUGAR_MINUSCULA.".jpg";
$graph_Meta_Tags_property_url          = PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/".LUGAR_MINUSCULA."/index.php"; 

echo($graph_Meta_Tags_property_image);
?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD . '/graph_Meta_Tags_property-generico.php'; ?>
