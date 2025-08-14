<?php  
$localidad = 'Santoña';     
$localidad_minuscula = 'santona'; 
$lugar_minuscula = 'playa-de-berria';
$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de Berria – Turismo y Naturaleza en Santoña, Cantabria 2025"); ?>
<?php define('DESCRIPTION', "Disfruta de la Playa de Berria en Santoña: arena fina, dunas protegidas, ideal para familias y deportes acuáticos, con vistas únicas al mar Cantábrico."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Playa de Berria"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Berria, Santoña, playas Cantabria, surf Cantabria, naturaleza, costa de Cantabria, turismo familiar, playa de arena') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
