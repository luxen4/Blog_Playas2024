<?php
  // Variables para la región y localidad
  $region = 'Nouvelle-Aquitaine';
  $region_minuscula = strtolower(str_replace(' ', '-', $region)); // "nouvelle-aquitaine"

  $localidad = 'Capbreton';
  $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); // "capbreton"
  $carpeta = $localidad_minuscula;
  $country = 'Francia';

  // Variables para SEO y contenido
  $description_content = 'Descubre la Plage Centrale en Capbreton, Nouvelle-Aquitaine, Francia: una playa ideal para surfistas, paseos marítimos y disfrutar del encanto de la costa atlántica francesa.';
  $keywords_content    = 'Plage Centrale, Capbreton, playas Capbreton, surf Francia, costa atlántica, turismo Capbreton, playa urbana, Nouvelle-Aquitaine';

  $lugar_header   = 'Plage Centrale'; 
  $lugar_interes  = 'plage-centrale';
  $tema           = $lugar_interes;
  $title          = $lugar_header . ' - ' . $localidad . ', ' . $region;
  $rutas          = $tema . '-' . $localidad_minuscula . '-' . $region_minuscula;
  $color_page     = 'sky';
  $tema_footer    = '- ' . $lugar_header . ' -'; 

  // Incluimos variables genéricas comunes
  require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php";

  // Incluimos plantilla principal de la página de playa
  require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php";
?>
