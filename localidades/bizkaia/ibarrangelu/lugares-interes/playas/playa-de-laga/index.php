<?php
  $region = 'Bizkaia'; 
  $region_minuscula = strtolower($region);

  $localidad = 'Ibarrangelu'; 
  $localidad_minuscula = strtolower($localidad); 
  $carpeta = $localidad_minuscula;   
  $country = 'España';

  //$localidad_minuscula  = strtolower(str_replace(' ', '-', $localidad));  // "laga"
?>

<?php 
    $description_content = 'Descubre la Playa de Laga en Urdaibai, Bizkaia: una playa natural con arena fina, ideal para surfistas, senderistas y amantes del entorno natural protegido.';
    $keywords_content    = 'Playa de Laga, Urdaibai, Bizkaia, playas del País Vasco, surf en Laga, turismo sostenible, naturaleza en Euskadi';

    $lugar_header   = 'Playa de Laga'; 
    $lugar_interes  = 'playa-de-laga';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - Urdaibai, Bizkaia';
    $rutas          = $tema . '-urdaibai-bizkaia';
    $color_page     = 'emerald'; // Cambia a un color acorde a la imagen o estilo que quieras
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
