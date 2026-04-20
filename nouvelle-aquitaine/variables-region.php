
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/_utilidades/functions.php'; ?>

<?php
$lugar = $localidad;   $lugar_minuscula = limpiar_texto($lugar);
$localidad_minuscula = limpiar_texto($localidad);

$lugar_interes = limpiar_texto($lugar_interes);

$region = "Nouvelle Aquitaine"; $region_minuscula    = limpiar_texto($region);
$country = "Francia";  $country_minuscula   = limpiar_texto($country);
?>
<?php define('LUGAR', $localidad); ?>