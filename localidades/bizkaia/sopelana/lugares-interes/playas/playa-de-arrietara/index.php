<?php
  $region = 'Bizkaia'; 
  $region_minuscula = strtolower($region);
  
  $localidad = 'Sopelana'; 
  $localidad_minuscula = strtolower($localidad); 
  $carpeta = $localidad_minuscula;   
  $country = 'España';
  //$localidad_minuscula  = strtolower(str_replace(' ', '-', $localidad));  // "sopelana"
?>

<?php 
    $description_content = 'Descubre la Playa de Arrietara en Sopelana: una playa ideal para surfistas y familias, con un entorno natural precioso y servicios cercanos.';
    $keywords_content    = 'Playa de Arrietara, Arrietara, Sopelana, playas de Bizkaia, surf, naturaleza, costa vasca, turismo en Sopelana, playas con servicios';

    LUGAR   = 'Playa de Arrietara'; 
    lugar_minuscula  = 'playa-de-arrietara';
    lugar_minuscula           = lugar_minuscula;
    $title          = LUGAR . '- ' . $localidad . ', ' . $region;
    $rutas          = lugar_minuscula . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    COLOR_PAGE     = 'sky'; // Puedes cambiar el color según el diseño del sitio
    lugar_minuscula_footer    = '- ' . LUGAR . '-'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
