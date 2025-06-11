<?php define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2024"); ?>
  <?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA', rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2024/bloques/estructura"); ?>
  <?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD', rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2024/bloques/estructura/paginas-secundarias/head"); ?>
  <?php define('PATH_RAIZ_LOCALIDADES_CARPETA', rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2024/localidades/{$region_minuscula}/{$carpeta}"); ?>
  <?php define('PATH_RAIZ_LOCALIDADES_OCIO', PATH_RAIZ_LOCALIDADES_CARPETA . '/ocio'); ?>
  <?php define('PATH_RAIZ_LOCALIDADES_OCIO_HEAD_VARIABLES', PATH_RAIZ_LOCALIDADES_OCIO . '/head/variables');?>

<?php
$charset='UTF-8';
$vieport_content='width=device-width, initial-scale=1.0';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be';
$description_content='Encuentra los mejores alojamientos en Castro-Urdiales. Hoteles, apartamentos, casas rurales y pensiones en la costa de Cantabria.';
$keywords_content='alojamientos en Castro-Urdiales, hoteles Castro-Urdiales, dormir en Castro-Urdiales, turismo Cantabria';
$robots_content='index, follow';
$author_content='Adrián Laya García';
$languaje_content='es';
?>



<?php // Meta Tags Open Graph
$graph_Meta_Tags_property_title = "Alojamientos en Castro-Urdiales | Hoteles, casas rurales y más";
$graph_Meta_Tags_property_description = "Descubre los mejores alojamientos en Castro-Urdiales: hoteles frente al mar, apartamentos turísticos, casas rurales y opciones económicas.";
$graph_Meta_Tags_property_image = "https://tusitio.com/imagenes/alojamientos-castro-urdiales.jpg";
$graph_Meta_Tags_property_url = "https://tusitio.com/alojamientos-en-castro-urdiales.php";
$graph_Meta_Tags_property_type = "article"; // O "website"
?>

<?php // Meta Tags Pinterest
$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Alojamientos en Castro-Urdiales';
$pinterest_property_card_description_content = 'Hoteles, casas rurales y apartamentos para disfrutar de unas vacaciones inolvidables en la costa cántabra.';
$pinterest_property_card_image_content = "https://tusitio.com/imagenes/alojamientos-castro-urdiales.jpg";
?>

<?php // Meta Tags Twitter
$twiterCards_card = "summary_large_image";
$twiterCards_site = "@TuCuentaTwitter"; // Modifica si tienes cuenta
$twiterCards_title = "Alojamientos en Castro-Urdiales | Hoteles, apartamentos y casas rurales";
$twiterCards_descripcion = "Explora los mejores alojamientos en Castro-Urdiales. Encuentra hoteles junto al mar, casas rurales con encanto y alojamientos para todos los presupuestos.";
$twiterCards_image = "https://tusitio.com/imagenes/alojamientos-castro-twitter.jpg";
$twiterCards_url = "https://tusitio.com/alojamientos-en-castro-urdiales.php";
?>

<?php // Schema.org - Datos estructurados mainEntity
$mainEntity_description = 'Los alojamientos en Castro-Urdiales combinan tradición, comodidad y vistas al mar. Desde hoteles familiares hasta casas rurales y apartamentos con encanto.';
$mainEntity_addressLocality = "Castro-Urdiales";
$mainEntity_addressRegion = "Cantabria";
$mainEntity_addressCountry = "España";

$mainEntity_geo_latitude = 43.3846; // Coordenadas aproximadas del centro urbano
$mainEntity_geo_longitude = -3.2167;

$mainEntity_image = "https://tusitio.com/imagenes/alojamientos-castro-urdiales.jpg"; // Imagen principal
$mainEntity_url = "https://tusitio.com/alojamientos-en-castro-urdiales.php";
?>