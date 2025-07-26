<?php
  $region = 'Cantabria';
  $region_minuscula = strtolower($region);

  $localidad = 'Ajo';
  $localidad_minuscula = strtolower($localidad); // "ajo"
  $carpeta = $localidad_minuscula;
  $country = 'España';
?>

<?php 
    $description_content = 'Descubre la Playa de Antuerta en Ajo, Cantabria: una playa salvaje y tranquila, ideal para desconectar, hacer senderismo costero y disfrutar de la naturaleza en estado puro.';
    $keywords_content    = 'Playa de Antuerta, Ajo, playas Cantabria, naturaleza, costa Cantabria, turismo natural, playa salvaje, senderismo Cantabria';

    $lugar_header   = 'Playa de Antuerta'; 
    $lugar_interes  = 'playa-de-antuerta';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
    $rutas          = $tema . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'emerald';
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
