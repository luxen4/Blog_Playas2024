<?php
// Paseo Marítimo – Castro-Urdiales, Cantabria
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Cambia si tienes un valor distinto

// Pinterest Cards
$pinterest_property_card_card_content        = SUMARY_LARGE_IMAGE;
$pinterest_property_card_title_content       = 'Paseo Marítimo – Castro-Urdiales, Cantabria';
$pinterest_property_card_description_content = 'Descubre el Paseo Marítimo de Castro-Urdiales: vistas al Cantábrico, ambiente relajado y gastronomía local junto al mar.';
$pinterest_property_card_image_content       = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/paseo-maritimo-1.jpg";

// Twitter Cards
$twitterCards_card        = SUMARY_LARGE_IMAGE;
$twitterCards_site        = CARD_SITE;
$twitterCards_title       = 'Paseo Marítimo – Castro-Urdiales, Cantabria';
$twitterCards_description = 'Explora el Paseo Marítimo de Castro-Urdiales: un lugar perfecto para pasear junto al mar y disfrutar del entorno costero.';
$twitterCards_image       = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/paseo-maritimo-1.jpg";
$twitterCards_url         = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/paseo-maritimo.php";

// Open Graph
$graph_Meta_Tags_property_title        = 'Paseo Marítimo – Castro-Urdiales, Cantabria';
$graph_Meta_Tags_property_description  = 'Visita el Paseo Marítimo de Castro-Urdiales: un espacio para disfrutar de la costa cántabra y su atmósfera única junto al mar.';
$graph_Meta_Tags_property_image        = PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/".LUGAR_MINUSCULA."/img/".LUGAR_MINUSCULA.".jpg";
$graph_Meta_Tags_property_url          = PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/".LUGAR_MINUSCULA."/index.php"; 

echo($graph_Meta_Tags_property_image);
?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD . '/graph_Meta_Tags_property-generico.php'; ?>
