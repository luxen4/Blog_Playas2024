<?php
  $region = 'Cantabria';
  $region_minuscula = strtolower($region);

  $localidad = 'Sonabia';
  $localidad_minuscula = strtolower($localidad); // "sonabia"
  $carpeta = $localidad_minuscula;
  $country = 'España';
?>

<?php 
    $description_content = 'Explora la Playa de Sonabia en Cantabria, una playa salvaje y aislada, perfecta para los amantes de la naturaleza, el senderismo y el mar abierto. Rodeada de montañas y sin servicios turísticos, es un refugio natural único.';
    $keywords_content    = 'Playa de Sonabia, Sonabia, playas salvajes Cantabria, naturaleza, mar Cantábrico, costa de Cantabria, turismo natural, senderismo, playas vírgenes';

    LUGAR   = 'Playa de Sonabia'; 
    lugar_minuscula  = 'playa-de-sonabia';
    lugar_minuscula           = lugar_minuscula;
    $title          = LUGAR . ' - ' . $localidad . ', ' . $region;
    $rutas          = lugar_minuscula . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    COLOR_PAGE     = 'sky';
    lugar_minuscula_footer    = '- ' . LUGAR . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
