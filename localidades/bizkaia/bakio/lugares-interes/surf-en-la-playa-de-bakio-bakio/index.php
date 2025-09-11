<?php  
$localidad = 'Bakio';     
$localidad_minuscula = 'bakio'; 
$lugar_minuscula = 'surf-en-la-playa-de-bakio';
$region = 'Bizkaia';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Surf en la Playa de Bakio – Paraíso del Surf en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Practica surf en la Playa de Bakio, Bizkaia: uno de los destinos más populares del País Vasco para surfistas de todos los niveles, con escuelas, ambiente joven y olas perfectas todo el año."); ?>
<?php define('COLOR_PAGE', "blue"); ?>
<?php define('LUGAR', "Surf en la Playa de Bakio"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Surf Bakio, Playa de Bakio surf, surf Bizkaia, olas Bakio, escuelas de surf, surfistas País Vasco, deportes acuáticos Bakio') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
