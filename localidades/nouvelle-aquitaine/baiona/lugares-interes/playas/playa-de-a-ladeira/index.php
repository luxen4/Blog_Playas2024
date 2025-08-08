<?php
  // Variables para la región y localidad
  $region = 'Nouvelle-Aquitaine';
  $region_minuscula = strtolower(str_replace(' ', '-', $region)); // "nouvelle-aquitaine"

  $localidad = 'Baiona';  // Si quieres poner el nombre en vasco o español
  $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); // "baiona"
  $carpeta = $localidad_minuscula;
  $country = 'Francia';

  // Variables para SEO y contenido
  $description_content = 'Descubre la Playa de A Ladeira en Baiona, Nouvelle-Aquitaine, Francia: una playa tranquila ideal para familias, baños y paseos en un entorno natural del País Vasco francés.';
  $keywords_content    = 'A Ladeira, Baiona, playas Baiona, surf Francia, costa atlántica, turismo Baiona, playa natural, Nouvelle-Aquitaine';

  $lugar   = 'Playa de A Ladeira'; 
  $lugar_interes  = 'playa-de-a-ladeira';
  $lugar_interes           = $lugar_interes;
  $title          = $lugar . ' - ' . $localidad . ', ' . $region;
  $rutas          = $lugar_interes . '-' . $localidad_minuscula . '-' . $region_minuscula;
  $color_page     = 'sky';  // Para que combine con la región atlántica
  $lugar_interes_footer    = '- ' . $lugar . ' -'; 

  // Incluimos variables genéricas comunes
  require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php";

  // Incluimos plantilla principal de la página de playa
  require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php";
?>

