<?php
  $region = 'Cantabria';
  $region_minuscula = strtolower($region);

  $localidad = 'Castro-Urdiales';
  $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); // "castro-urdiales"
  $carpeta = 'castro-urdiales';
  $country = 'España';
?>

<?php 
    $description_content = 'Descubre la Playa de Ostende en Castro-Urdiales, Cantabria: una playa urbana amplia y de fácil acceso, perfecta para familias. Ofrece servicios completos, paseo marítimo, vigilancia, y vistas al mar Cantábrico.';
    $keywords_content    = 'Playa de Ostende, Castro-Urdiales, playas Cantabria, playa urbana, costa de Cantabria, turismo Castro Urdiales, playa accesible, servicios playa, paseo marítimo';

    $lugar_header   = 'Playa de Ostende'; 
    $lugar_interes  = 'playa-de-ostende';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
    $rutas          = $tema . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'sky';
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>

