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

    LUGAR   = 'Playa de Gorliz'; 
    lugar_minuscula  = 'playa-de-gorliz';
    lugar_minuscula           = lugar_minuscula;
    $title          = LUGAR . ' - ' . $localidad . ', ' . $region;
    $rutas          = lugar_minuscula . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    COLOR_PAGE     = 'sky'; // Puedes cambiar el color según el diseño del sitio
    lugar_minuscula_footer    = '- ' . LUGAR . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
