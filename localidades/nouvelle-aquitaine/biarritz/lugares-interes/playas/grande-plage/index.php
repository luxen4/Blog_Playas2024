<?php
  $region = 'Nouvelle-Aquitaine';
  $region_minuscula = strtolower($region);

  $localidad = 'Biarritz';
  $localidad_minuscula = strtolower($localidad); // "biarritz"
  $carpeta = $localidad_minuscula;
  $country = 'Francia';
?>

<?php 
    $description_content = 'Descubre La Grande Plage de Biarritz, en Nouvelle-Aquitaine, Francia: una playa icónica de arena dorada, perfecta para el surf, el paseo costero y disfrutar del ambiente urbano junto al Atlántico.';
    $keywords_content    = 'La Grande Plage, Biarritz, playas Biarritz, surf Francia, costa atlántica, turismo Biarritz, playa urbana, Nouvelle-Aquitaine';

    $lugar_header   = 'La Grande Plage'; 
    $lugar_interes  = 'grande-plage';
    $tema           = $lugar_interes;
    $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
    $rutas          = $tema . '-' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'sky';
    $tema_footer    = '- ' . $lugar_header . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
