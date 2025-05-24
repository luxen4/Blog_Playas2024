<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Actividades en la Playa de Ostende – Castro-Urdiales</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUa6mY5yY35Y9peR+kyZQF8pZ6Vn3ciZpqCXUw3nFZ+IOB4yM1Klmhkt1P3U"
        crossorigin="anonymous">

  <?php

  // Variables para la página de la Playa de Ostende
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/head/variables/web-playa/localizacion-playa.php';

  

require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php';

  ?>


<?php /*<!--🧭 Canonical URL (evita contenido duplicado en SEO)-->*/?>
<link rel="canonical" href= "<?= PATH_RAIZ; ?>/actividades-<?= $rutas; ?>" />


<?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$carpeta}/fichas/sections/head/etiquetas_meta_actividades.php"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/link_paginas_secundariass_head_actividades.php"; ?>


<?php

// Descripción general y URL
//$descripcion = 'Descubre la Playa de Ostende, un destino conocido por su amplia extensión de arena dorada, ideal para disfrutar del surf y la naturaleza en la costa cantábrica.';
$url = "https://playas2024.kesug.com/Blog_Playas2024/localidades/{$region_minuscula}/{$carpeta}/fichas/{$rutas}.php";



 ?>

<?php 
require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$carpeta}/fichas/sections/head/variables/web-playa/structure-data-schema-org.php";
include_once  PATH_RAIZ_BLOQUES_ESTRUCTURA . "/structured_data_generico.php"; 
?>

</head>

<body>
  <?php require  PATH_RAIZ_BLOQUES_ESTRUCTURA . "/actividades_bloque_generico.php"; ?>
  <?php require  PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap2.php"; ?>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ENjdO4Dr2bkBIFxQpeo5F2bSpV8CkR0VZ3HSMa7PR9U8D7V7B2E5uVOlmXJURyJA"
          crossorigin="anonymous"></script>


</body>

</html>


  <style>
    body { background-color: #f8f9fa; }
    .info-box { background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .info-box ul { padding-left: 1.2rem; }
    .info-box li { margin-bottom: 1.5rem; font-size: 1rem; }
    .info-box i { margin-right: .5rem; }
    .section-header i { margin-right: .5rem; }
    .map-responsive iframe { border: 0; width: 100%; height: 450px; border-radius: 10px; }
  </style>

C:\xampp\htdocs\Blog_Playas2024\localidades\cantabria\playadeostende\paginas_secundarias\actividades-playa-de-ostende-castro-urdiales-cantabria.php
