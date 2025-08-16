<?php
  $region = 'Bizkaia'; 
  $region_minuscula = strtolower($region);
  
  $localidad = 'Gorliz'; 
  $localidad_minuscula = strtolower($localidad); 
  $localidad_minuscula = $localidad_minuscula;  // o 'playa-de-astondoko' si esa es la convención del sistema
  $country = 'España';
?>

<?php 
    $description_content = 'Explora la Playa de Astondo (Astondoko) en Gorliz, Bizkaia: una playa tranquila y natural, ideal para caminatas costeras, desconectar del bullicio y disfrutar de vistas espectaculares del Cantábrico.';
    $keywords_content    = 'Playa de Astondo, Astondoko, Gorliz, playas naturales, Bizkaia, costa vasca, senderismo costero, turismo en Gorliz';

    LUGAR   = 'Playa de Astondo'; 
    lugar_minuscula  = 'playa-de-astondo';
    lugar_minuscula           = lugar_minuscula;
    $title          = LUGAR . ' - ' . $localidad . ', ' . $region;
    $rutas          = lugar_minuscula . '-' . $localidad_minuscula . '-' . $region_minuscula;
    COLOR_PAGE     = 'teal'; // Puedes ajustar según paleta general (teal, sky, emerald, etc.)
    lugar_minuscula_footer    = '- ' . LUGAR . ' -'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
