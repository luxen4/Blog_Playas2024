<?php  
$localidad = 'Bakio';     
$localidad_minuscula = 'bakio'; 
$lugar_minuscula = 'san-juan-de-gaztelugatxe';
$region = 'Bizkaia';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "San Juan de Gaztelugatxe en Bakio – Naturaleza, Historia y Leyenda 2025"); ?>
<?php define('DESCRIPTION', "Descubre San Juan de Gaztelugatxe en Bakio, uno de los lugares más mágicos del País Vasco: una ermita en lo alto de un islote unido por un puente de piedra con 241 escalones, rodeado de acantilados y leyendas marineras."); ?>
<?php define('COLOR_PAGE', "rose"); ?>
<?php define('LUGAR', "San Juan de Gaztelugatxe"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'San Juan de Gaztelugatxe, Bakio, Bizkaia, turismo Bizkaia, costa vasca, ermita, islote, naturaleza, Game of Thrones') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>