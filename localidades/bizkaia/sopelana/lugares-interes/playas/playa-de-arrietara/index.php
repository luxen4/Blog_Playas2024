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

    $lugar_header   = 'Playa de Arrietara'; 
    $lugar_interes  = 'playa-de-arrietara';
    $tema           = $lugar_interes;
    $title          = $lugar_header . '- ' . $localidad . ', ' . $region;
    $rutas          = $tema . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'sky'; // Puedes cambiar el color según el diseño del sitio
    $tema_footer    = '- ' . $lugar_header . '-'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
