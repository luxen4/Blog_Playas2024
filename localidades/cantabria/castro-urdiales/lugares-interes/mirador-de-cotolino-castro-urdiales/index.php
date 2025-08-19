<?php  
$localidad = 'Castro-Urdiales';     
$localidad_minuscula = 'castro-urdiales'; 
$lugar_minuscula = 'mirador-de-cotolino-castro-urdiales';

$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Mirador de Cotolino en Castro-Urdiales – Vistas al Cantábrico 2025"); ?>
<?php define('DESCRIPTION', "El Mirador de Cotolino en Castro-Urdiales ofrece unas impresionantes vistas panorámicas del mar Cantábrico y la costa cántabra. Un lugar ideal para pasear, relajarse y disfrutar de atardeceres inolvidables.");?>
<?php define('COLOR_PAGE', "emerald"); ?>
<?php define('LUGAR', "Mirador de Cotolino"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Mirador de Cotolino, Castro-Urdiales, vistas Cantabria, costa Cantábrica, turismo Castro Urdiales, atardeceres Castro, paseo Cotolino') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
