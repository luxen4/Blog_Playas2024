<?php  
$localidad = 'Ajo';     
$localidad_minuscula = 'ajo'; 
$lugar_minuscula = 'ruta-de-la-costa-oriental';

$region = 'Cantabria';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Ruta de la Costa Oriental en Ajo – Senderismo y Paisajes de Cantabria 2025"); ?>
<?php define('DESCRIPTION', "La Ruta de la Costa Oriental en Ajo ofrece acantilados, calas y vistas espectaculares del mar Cantábrico. Un sendero ideal para caminatas, fotografía y disfrutar de la naturaleza en Bareyo, Cantabria."); ?>
<?php define('COLOR_PAGE', "emerald"); ?>
<?php define('LUGAR', "Ruta de la Costa Oriental en Ajo"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Ruta de la Costa Oriental Ajo, Cantabria, senderismo, acantilados, calas, turismo Cantabria, naturaleza, costa cantábrica, Bareyo, mar Cantábrico') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
