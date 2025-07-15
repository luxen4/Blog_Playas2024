<?php
  $region = 'Cantabria'; $region_minuscula = strtolower($region);
  $localidad = 'Ajo'; $localidad_minuscula = strtolower($localidad); $carpeta = $localidad_minuscula;   $country = 'España';
  //$localidad_minuscula  = strtolower(str_replace(' ', '-', $localidad));  // "sonabia"
?>

<?php 
    $description_content = 'Descubre la Playa de Cuberris en Ajo, Cantabria: una playa abierta al mar Cantábrico, ideal para el surf, con servicios de temporada, naturaleza salvaje y fácil acceso.';
    $keywords_content    = 'Playa de Cuberris, Ajo, playas de Cantabria, surf, naturaleza, costa de Cantabria, turismo en Ajo, playas con servicios';

    $lugar_header   = 'Playa de Cuberris'; 
    $lugar_interes  = 'playa-de-cuberris';
    $tema           = $lugar_interes;
    $title          = $lugar_header. '- '.$localidad.', '.$region;
    $rutas          = $tema.' -'.$localidad_minuscula.'-'.$region_minuscula;
    $color_page     = 'sky'; // Puedes cambiar el color según el diseño del sitio
    $tema_footer    = '- '.$lugar_header. '-'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>