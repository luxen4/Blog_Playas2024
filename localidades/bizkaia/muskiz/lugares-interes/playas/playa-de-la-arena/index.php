<?php
  $region = 'bizkaia'; $region_minuscula = strtolower($region);
  $localidad = 'Muskiz'; $localidad_minuscula = strtolower($localidad); $carpeta = $localidad_minuscula;   $country = 'España';
  //$localidad_minuscula  = strtolower(str_replace(' ', '-', $localidad));  // "sonabia"
?>

<?php 
    $description_content = 'Descubre la Playa de la Arena en Muskiz, bizkaia: una amplia playa con arena fina, ideal para familias, surfistas y amantes del paseo marítimo. Perfecta combinación de naturaleza, servicios y accesibilidad.';
    $keywords_content    = 'Playa de la Arena, Muskiz, playas de bizkaia, surf en Muskiz, turismo en la costa vasca, playas familiares, naturaleza en Euskadi';

    $lugar_header   = 'Playa de la Arena'; 
    $lugar_interes  = 'playa-de-la-arena';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - Muskiz, bizkaia';
    $rutas          = $tema . '-muskiz-bizkaia';
    $color_page     = 'indigo'; // Puedes cambiarlo a otro: teal, sky, emerald, etc.
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
