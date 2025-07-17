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

    $lugar_header   = 'Playa de Plentzia'; 
    $lugar_interes  = 'playa-de-plentzia';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
    $rutas          = $tema . '-' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'sky'; // Puedes cambiarlo: sky, teal, indigo, etc.
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
