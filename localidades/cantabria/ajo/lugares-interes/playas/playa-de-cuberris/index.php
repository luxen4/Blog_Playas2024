<?php
  $region = 'Cantabria';
  $region_minuscula = strtolower($region);

  $localidad = 'Ajo';
  $localidad_minuscula = strtolower($localidad); // "ajo"
  $carpeta = $localidad_minuscula;
  $country = 'España';
?>

<?php 
    $description_content = 'Descubre la Playa de Antueras en Ajo, Cantabria: un rincón natural de arena dorada, ideal para pasear, surfear y disfrutar de la tranquilidad de la costa cántabra.';
    $keywords_content    = 'Playa de Antueras, Ajo, playas Cantabria, surf Cantabria, naturaleza, costa de Cantabria, turismo natural, playa de arena';

    $lugar_header   = 'Playa de Antueras'; 
    $lugar_interes  = 'playa-de-antueras';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
    $rutas          = $tema . '-' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'teal';
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?> 
