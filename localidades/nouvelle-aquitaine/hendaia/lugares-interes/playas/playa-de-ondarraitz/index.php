<?php
  // Variables para la región y localidad
  $region = 'Nouvelle-Aquitaine';
  $region_minuscula = strtolower(str_replace(' ', '-', $region)); // "nouvelle-aquitaine"

  $localidad = 'Hendaia';
  $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); // "hendaia"
  $carpeta = $localidad_minuscula;
  $country = 'Francia';

  // Variables para SEO y contenido
  $description_content = 'Descubre la Playa de Ondarraitz en Hendaia, Nouvelle-Aquitaine, Francia: una playa tranquila perfecta para el surf, paseos naturales y disfrutar de la costa vasco-francesa.';
  $keywords_content    = 'Ondarraitz, Hendaia, playas Hendaia, surf Francia, costa atlántica, turismo Hendaia, playa natural, Nouvelle-Aquitaine';

  $lugar_header   = 'Playa de Ondarraitz'; 
  $lugar_interes  = 'playa-de-ondarraitz';
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
