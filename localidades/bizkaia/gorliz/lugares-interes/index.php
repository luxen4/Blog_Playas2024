<?php
  $region = 'Bizkaia'; 
  $region_minuscula = strtolower($region);
  
  $localidad = 'Gorliz'; 
  $localidad_minuscula = strtolower($localidad); 
  $carpeta = $localidad_minuscula;   
  $country = 'España';
  // $localidad_minuscula  = strtolower(str_replace(' ', '-', $localidad));  // "gorliz"
?>

<?php 
    $description_content = 'Disfruta de la Playa de Gorliz en Bizkaia: una playa amplia y familiar con aguas tranquilas, entorno natural protegido y todos los servicios necesarios para pasar un día perfecto en la costa vasca.';
    $keywords_content    = 'Playa de Gorliz, Gorliz, playas de Bizkaia, turismo en Gorliz, costa vasca, naturaleza, playa accesible, playa familiar, mar Cantábrico';

    $lugar_header   = 'Playa de Gorliz'; 
    $lugar_interes  = 'playa-de-gorliz';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
    $rutas          = $tema . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'sky'; // Puedes cambiar el color según el diseño del sitio
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
