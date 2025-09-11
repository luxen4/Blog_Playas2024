<?php  
$localidad = 'Muskiz';     
$localidad_minuscula = 'muskiz'; 
$lugar_minuscula = 'torre-de-muskiz';

$region = 'Bizkaia';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Torre de Muskiz – Historia y Patrimonio en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Torre de Muskiz, un monumento histórico del País Vasco que refleja la tradición medieval y el pasado señorial de Bizkaia. Un lugar emblemático para conocer la historia y el patrimonio cultural de Muskiz."); ?>
<?php define('COLOR_PAGE', "rose"); ?>
<?php define('LUGAR', "Torre de Muskiz"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Torre de Muskiz, Bizkaia, patrimonio histórico, torre medieval, historia de Muskiz, monumentos Bizkaia, cultura vasca, arquitectura defensiva') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
