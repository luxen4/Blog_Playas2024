<?php
  $region = 'Bizkaia'; 
  $region_minuscula = strtolower($region);
  
  $localidad = 'Bakio'; 
  $localidad_minuscula = strtolower($localidad); 
  $localidad_minuscula = $localidad_minuscula;   
  $country = 'España';
  //$localidad_minuscula  = strtolower(str_replace(' ', '-', $localidad));  // "bakio"
?>

<?php 
    $description_content = 'Descubre la Playa de Bakio en Bizkaia: una extensa playa del litoral vasco, ideal para surfistas, familias y amantes del paisaje atlántico.';
    $keywords_content    = 'Playa de Bakio, Bakio, playas de Bizkaia, surf, naturaleza, costa vasca, turismo en Bakio, playas con servicios';

    LUGAR   = 'Playa de Bakio'; 
    lugar_minuscula  = 'playa-de-bakio';
    lugar_minuscula           = lugar_minuscula;
    $title          = LUGAR . '- ' . $localidad . ', ' . $region;
    $rutas          = lugar_minuscula . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    COLOR_PAGE     = 'sky'; // Puedes cambiar el color según el diseño del sitio
    lugar_minuscula_footer    = '- ' . LUGAR . '-'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
