<?php
  $region = 'Cantabria'; $region_minuscula = strtolower($region);
  $localidad = 'Santoña'; $localidad_minuscula = strtolower($localidad); $localidad_minuscula = 'santona';   $country = 'España';
  //$localidad_minuscula  = strtolower(str_replace(' ', '-', $localidad));  // "sonabia"
?>
<?php 
    $description_content = '';
    $keywords_content    = '';

    $lugar   = 'Playa de Berria'; 
    $lugar_minuscula  = 'playa-de-berria';
    $lugar_minuscula           = $lugar_minuscula;
    //$title          = LUGAR . ' - ' . $localidad . ', ' . $region;
    $rutas          = $lugar_minuscula . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'sky'; // Puedes ajustar esto según tu diseño
    //$lugar_minuscula_footer    = '- ' . LUGAR . ' -'; 
?>
<?php define('DESCRIPTION', "Descubre la Playa de Berria en Santoña, Cantabria: una amplia playa de arena dorada, perfecta para el surf, rodeada de naturaleza y con servicios en temporada."); ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Berria, Santoña, playas de Cantabria, surf, naturaleza, turismo en Santoña, playa con servicios, costa cántabra') ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/constantes-localidad-generico.php";?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>