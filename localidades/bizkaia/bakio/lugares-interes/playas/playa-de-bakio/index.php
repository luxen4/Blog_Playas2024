<?php
  $region = 'Bizkaia'; 
  $region_minuscula = strtolower($region);
  
  $localidad = 'Bakio'; 
  $localidad_minuscula = strtolower($localidad); 
  $carpeta = $localidad_minuscula;   
  $country = 'España';
  //$localidad_minuscula  = strtolower(str_replace(' ', '-', $localidad));  // "bakio"
?>

<?php 
    $description_content = 'Descubre la Playa de Bakio en Bizkaia: una extensa playa del litoral vasco, ideal para surfistas, familias y amantes del paisaje atlántico.';
    $keywords_content    = 'Playa de Bakio, Bakio, playas de Bizkaia, surf, naturaleza, costa vasca, turismo en Bakio, playas con servicios';

    $lugar_header   = 'Playa de Bakio'; 
    $lugar_interes  = 'playa-de-bakio';
    $tema           = $lugar_interes;
    $title          = $lugar_header . '- ' . $localidad . ', ' . $region;
    $rutas          = $tema . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'sky'; // Puedes cambiar el color según el diseño del sitio
    $tema_footer    = '- ' . $lugar_header . '-'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
