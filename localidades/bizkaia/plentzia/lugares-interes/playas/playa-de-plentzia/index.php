<?php
  $region = 'Bizkaia'; 
  $region_minuscula = strtolower($region);

  $localidad = 'Plentzia'; 
  $localidad_minuscula = strtolower($localidad); 
  $carpeta = $localidad_minuscula;
  $country = 'España';
  //$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));
?>

<?php 
    $description_content = 'Disfruta de la Playa de Plentzia en Bizkaia: una playa urbana de aguas tranquilas, ideal para familias, deportes náuticos y paseos junto al estuario. Un destino acogedor en la costa vasca.';
    $keywords_content    = 'Playa de Plentzia, Plentzia, playas de Bizkaia, turismo en Plentzia, costa vasca, deportes acuáticos, playas para familias, playa urbana';

    LUGAR   = 'Playa de Plentzia'; 
    lugar_minuscula  = 'playa-de-plentzia';
    lugar_minuscula           = lugar_minuscula;
    $title          = LUGAR . ' - ' . $localidad . ', ' . $region;
    $rutas          = lugar_minuscula . '-' . $localidad_minuscula . '-' . $region_minuscula;
    COLOR_PAGE     = 'sky'; // Puedes cambiarlo: sky, teal, indigo, etc.
    lugar_minuscula_footer    = '- ' . LUGAR . ' -'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
