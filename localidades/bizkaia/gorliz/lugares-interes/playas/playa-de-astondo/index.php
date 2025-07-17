<?php
  $region = 'Bizkaia'; 
  $region_minuscula = strtolower($region);
  
  $localidad = 'Gorliz'; 
  $localidad_minuscula = strtolower($localidad); 
  $carpeta = $localidad_minuscula;  // o 'playa-de-astondoko' si esa es la convención del sistema
  $country = 'España';
?>

<?php 
    $description_content = 'Explora la Playa de Astondo (Astondoko) en Gorliz, Bizkaia: una playa tranquila y natural, ideal para caminatas costeras, desconectar del bullicio y disfrutar de vistas espectaculares del Cantábrico.';
    $keywords_content    = 'Playa de Astondo, Astondoko, Gorliz, playas naturales, Bizkaia, costa vasca, senderismo costero, turismo en Gorliz';

    $lugar_header   = 'Playa de Astondo'; 
    $lugar_interes  = 'playa-de-astondo';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
    $rutas          = $tema . '-' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'teal'; // Puedes ajustar según paleta general (teal, sky, emerald, etc.)
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
