<?php  
$localidad = 'Deba';     
$localidad_minuscula = 'deba'; 
$lugar_minuscula='playa-de-santiago';

$region = 'Gipuzkoa';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de Santiago en Deba – Turismo y Naturaleza en Gipuzkoa 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Santiago en Deba: arena fina, olas perfectas para surfistas, entornos naturales y un lugar ideal para disfrutar de la costa vasca."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Playa de Santiago"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Santiago, Deba, playas Gipuzkoa, surf Gipuzkoa, naturaleza, costa vasca, turismo natural, playa de arena') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
