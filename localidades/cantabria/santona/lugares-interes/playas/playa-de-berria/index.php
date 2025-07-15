<?php
  $region = 'Cantabria'; $region_minuscula = strtolower($region);
  $localidad = 'Santoña'; $localidad_minuscula = strtolower($localidad); $carpeta = 'santona';   $country = 'España';
  //$localidad_minuscula  = strtolower(str_replace(' ', '-', $localidad));  // "sonabia"
?>
<?php 
    $description_content = 'Descubre la Playa de Berria en Santoña, Cantabria: una amplia playa de arena dorada, perfecta para el surf, rodeada de naturaleza y con servicios en temporada.';
    $keywords_content    = 'Playa de Berria, Santoña, playas de Cantabria, surf, naturaleza, turismo en Santoña, playa con servicios, costa cántabra';

    $lugar_header   = 'Playa de Berria'; 
    $lugar_interes  = 'playa-de-berria';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
    $rutas          = $tema . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'sky'; // Puedes ajustar esto según tu diseño
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>