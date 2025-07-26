<?php
  $region = 'Cantabria';
  $region_minuscula = strtolower($region);

  $localidad = 'Ajo';
  $localidad_minuscula = strtolower($localidad); // "ajo"
  $carpeta = $localidad_minuscula;
  $country = 'España';
?>

<?php 
    $description_content = 'Descubre la Playa de Cuberris en Ajo, Cantabria: una playa de arena dorada, ideal para el surf y el contacto con la naturaleza en un entorno protegido y tranquilo.';
    $keywords_content    = 'Playa de Cuberris, Ajo, playas Cantabria, surf Cantabria, naturaleza, costa de Cantabria, turismo natural, playa de arena';

    $lugar_header   = 'Playa de Cuberris'; 
    $lugar_interes  = 'playa-de-cuberris';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
    $rutas          = $tema . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'sky';
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
