<?php  
$localidad = 'Muskiz';     
$localidad_minuscula = 'muskiz'; 
$lugar_minuscula = 'torre-de-muskiz';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Torre de Muskiz – Patrimonio Histórico en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Torre de Muskiz: un edificio histórico emblemático del municipio, testimonio del patrimonio medieval en Bizkaia, hoy convertido en espacio cultural y turístico."); ?>
<?php define('COLOR_PAGE', "stone"); ?>
<?php define('LUGAR', "Torre de Muskiz"); ?>
<?php define('LUGAR_MINUSCULA', 'torre-de-muskiz') ?>
<?php define('KEYWORDS_CONTENT', 'Torre de Muskiz, Muskiz, Bizkaia, patrimonio histórico, torre medieval, arquitectura, cultura, turismo País Vasco, historia') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
