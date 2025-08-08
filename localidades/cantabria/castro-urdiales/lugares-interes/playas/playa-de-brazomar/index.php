<?php
  $region = 'Cantabria';
  $region_minuscula = strtolower($region);

  $localidad = 'Castro-Urdiales';
  $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); // "castro-urdiales"
  $carpeta = 'castro-urdiales';
  $country = 'España';
?>

<?php 
    $description_content = 'Explora la Playa de Brazomar en Castro-Urdiales, Cantabria: una playa urbana con aguas tranquilas, ideal para familias y actividades acuáticas. Cuenta con paseo marítimo, duchas, y todos los servicios para disfrutar del mar Cantábrico.';
    $keywords_content    = 'Playa de Brazomar, Castro-Urdiales, playas Cantabria, playa urbana, costa Cantabria, turismo Castro Urdiales, playa familiar, servicios playa, paseo marítimo';

    $lugar   = 'Playa de Brazomar'; 
    $lugar_interes  = 'playa-de-brazomar';
    $lugar_interes           = $lugar_interes;
    $title          = $lugar . ' - ' . $localidad . ', ' . $region;
    $rutas          = $lugar_interes . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'sky';
    $lugar_interes_footer    = '- ' . $lugar . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
