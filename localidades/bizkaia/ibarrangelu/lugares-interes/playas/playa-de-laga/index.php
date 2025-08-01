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

    $lugar_header   = 'Playa de Laga'; 
    $lugar_interes  = 'playa-de-laga';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
    $rutas          = $tema . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'emerald'; // Puedes cambiar según el estilo del sitio
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
