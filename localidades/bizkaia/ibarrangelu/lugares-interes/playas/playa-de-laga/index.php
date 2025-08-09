<?php
  $region = 'Bizkaia'; $region_minuscula = strtolower($region);
  $localidad = 'Ibarrangelu'; $localidad_minuscula = strtolower($localidad); 
  $carpeta = $localidad_minuscula;
  $country = 'España';
  //$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));
?>

<?php 
    $description_content = 'Descubre la Playa de Laga en Ibarrangelu, Bizkaia: una playa virgen ubicada en la Reserva de la Biosfera de Urdaibai, ideal para el surf, el descanso y el contacto con la naturaleza.';
    $keywords_content    = 'Playa de Laga, Ibarrangelu, playas de Bizkaia, surf en Urdaibai, naturaleza, costa vasca, turismo en Bizkaia, playas vírgenes';

    LUGAR   = 'Playa de Laga'; 
    lugar_minuscula  = 'playa-de-laga';
    lugar_minuscula           = lugar_minuscula;
    $title          = LUGAR . ' - ' . $localidad . ', ' . $region;
    $rutas          = lugar_minuscula . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    COLOR_PAGE     = 'emerald'; // Puedes cambiar según el estilo del sitio
    lugar_minuscula_footer    = '- ' . LUGAR . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
