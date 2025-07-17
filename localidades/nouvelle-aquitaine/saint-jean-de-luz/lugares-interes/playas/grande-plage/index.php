<?php
  $region = 'Nouvelle Aquitaine';
  $region_minuscula = strtolower(str_replace(' ', '-', $region)); // "nouvelle-aquitaine"

  $localidad = 'Saint-Jean-de-Luz';
  $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); // "saint-jean-de-luz"
  $carpeta = $localidad_minuscula; // nombre de carpeta para la playa
  $country = 'Francia';
?>

<?php 
    $description_content = 'Descubre La Grande Plage de Saint-Jean-de-Luz en Nouvelle-Aquitaine, una playa familiar y urbana de aguas tranquilas, perfecta para disfrutar del Atlántico y del encanto vasco-francés.';
    $keywords_content    = 'La Grande Plage Saint-Jean-de-Luz, playa urbana, turismo vasco francés, costa atlántica, Nouvelle Aquitaine, playas Francia, surf, paseo marítimo';

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
