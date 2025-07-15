<?php
  $region = 'Gipuzkoa'; 
  $region_minuscula = strtolower($region);

  $localidad = 'Deba'; 
  $localidad_minuscula = strtolower($localidad); 
  $carpeta = $localidad_minuscula;

  $country = 'España';
  // $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));  // útil para nombres con espacios
?>

<?php 
    $description_content = 'Explora la Playa de Santiago en Deba, Gipuzkoa: una playa urbana y familiar con arena fina, fácil acceso, oleaje moderado y todos los servicios para disfrutar de la costa vasca. Ideal para el baño, el relax y el surf ocasional.';
    $keywords_content    = 'Playa de Santiago, Deba, playas de Gipuzkoa, turismo en Deba, costa vasca, surf en Gipuzkoa, playas familiares Euskadi, servicios de playa en Gipuzkoa';

    $lugar_header   = 'Playa de Santiago'; 
    $lugar_interes  = 'playa-de-santiago';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - Deba, Gipuzkoa';
    $rutas          = $tema . '-deba-gipuzkoa';
    $color_page     = 'emerald'; // Puedes usar otro como indigo, sky, etc.
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
