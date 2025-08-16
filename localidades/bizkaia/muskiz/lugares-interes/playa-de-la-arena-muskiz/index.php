<?php
  $region = 'bizkaia'; $region_minuscula = strtolower($region);
  $localidad = 'Muskiz'; $localidad_minuscula = strtolower($localidad); $localidad_minuscula = $localidad_minuscula;   $country = 'España';
  //$localidad_minuscula  = strtolower(str_replace(' ', '-', $localidad));  // "sonabia"
?>

<?php 
    $description_content = 'Descubre la Playa de la Arena en Muskiz, bizkaia: una amplia playa con arena fina, ideal para familias, surfistas y amantes del paseo marítimo. Perfecta combinación de naturaleza, servicios y accesibilidad.';
    $keywords_content    = 'Playa de la Arena, Muskiz, playas de bizkaia, surf en Muskiz, turismo en la costa vasca, playas familiares, naturaleza en Euskadi';

    LUGAR   = 'Playa de la Arena'; 
    lugar_minuscula  = 'playa-de-la-arena';
    lugar_minuscula           = lugar_minuscula;
    $title          = LUGAR . ' - Muskiz, bizkaia';
    $rutas          = lugar_minuscula . '-muskiz-bizkaia';
    COLOR_PAGE     = 'indigo'; // Puedes cambiarlo a otro: teal, sky, emerald, etc.
    lugar_minuscula_footer    = '- ' . LUGAR . ' -'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
