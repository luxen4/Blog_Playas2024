<?php require PATH_RAIZ_LOCALIDADES_CARPETA . '/localizacion-localidad.php';?>


<?php
$charset = 'UTF-8';
$vieport_content = 'width=device-width, initial-scale=1.0';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be';
$description_content = 'Disfruta del Mirador de Cotolino en Castro-Urdiales: vistas espectaculares al mar Cantábrico, paseos al atardecer y tranquilidad junto a los acantilados.';
$keywords_content = 'Mirador de Cotolino, Castro-Urdiales, vistas al mar, atardecer Cantabria, turismo Castro-Urdiales, miradores Cantabria';
$robots_content = 'index, follow';
$author_content = 'Adrián Laya García';
$languaje_content = 'es';
$name_blog= '2025 Turismo y Playas 2025 – Guía Costera por el Cantábrico';
?>




<?php // meta-tags
$graph_Meta_Tags_property_title = 'Mirador de Cotolino - Castro-Urdiales';
$graph_Meta_Tags_property_description = 'Descubre el Mirador de Cotolino, un espectacular balcón al mar Cantábrico en Castro-Urdiales con vistas privilegiadas y entorno natural cuidado.';
$graph_Meta_Tags_property_image = PATH_RAIZ_LOCALIDADES_CARPETA."/mirador-de-cotolino.jpg";
$graph_Meta_Tags_property_url = PATH_RAIZ_LOCALIDADES_CARPETA."/fichas/mirador-de-cotolino.php";
$graph_Meta_Tags_property_type = 'website';
?>

<?php
// Pinterest
$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Mirador de Cotolino - Castro-Urdiales';
$pinterest_property_card_description_content = 'Disfruta de las impresionantes vistas al mar desde el Mirador de Cotolino en Castro-Urdiales.';
$pinterest_property_card_image_content = PATH_RAIZ_LOCALIDADES_CARPETA.'/mirador-de-cotolino.jpg';
?>

<?php
// Twitter Cards
$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Mirador de Cotolino - Castro-Urdiales';
$twiterCards_descripcion = 'Mirador privilegiado en la costa de Castro-Urdiales con panorámicas al Cantábrico, ideal para pasear y contemplar el atardecer.';
$twiterCards_image = PATH_RAIZ_LOCALIDADES_CARPETA.'/mirador-de-cotolino.jpg';
$twiterCards_url = PATH_RAIZ_LOCALIDADES_CARPETA.'/fichas/mirador-de-cotolino.php';
?>

<?php
$descripcion = 'El Mirador de Cotolino es uno de los rincones más tranquilos y pintorescos de Castro-Urdiales, con senderos, bancos y vistas al mar.';
$url = PATH_RAIZ_LOCALIDADES_CARPETA."/{$region_minuscula}/{$carpeta}/mirador-de-cotolino.php";

$mainEntity_description = 'El Mirador de Cotolino ofrece una vista abierta del mar Cantábrico, ideal para disfrutar del paisaje y los atardeceres.';
$mainEntity_addressLocality = $localidad;
$mainEntity_addressRegion = $region;
$mainEntity_addressCountry = $country;

$mainEntity_geo_latitude = 43.3806; // Latitud aproximada del mirador
$mainEntity_geo_longitude = -3.2124; // Longitud aproximada

$mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA."/img/mirador-de-cotolino.jpg";
$mainEntity_url = PATH_RAIZ . "mirador-de-cotolino";
?>

<?php // structure-data-schema-org ?>
<?php
$mainEntity_description = 'El Mirador de Cotolino ofrece una vista abierta del mar Cantábrico, ideal para disfrutar del paisaje y los atardeceres.';
$mainEntity_addressLocality = 'Castro-Urdiales';
$mainEntity_addressRegion = 'Cantabria';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3806;
$mainEntity_geo_longitude = -3.2124;

$mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA."/img/mirador-de-cotolino.jpg";
$mainEntity_url = PATH_RAIZ . "mirador-de-cotolino";
?>
