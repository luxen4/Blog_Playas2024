<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Actividades en la Playa de Ostende – Castro-Urdiales</title>


  <?php // Variables para la página de la Playa de Ostende
  require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/head/variables/web-playa/localizacion-playa.php';
  require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php'; ?>



  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="./css/styles.css" />


    <?php /*<!--🧭 Canonical URL (evita contenido duplicado en SEO)-->*/?>
    <link rel="canonical" href= "<?= PATH_RAIZ; ?>/actividades-<?= $rutas; ?>" />


    <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$carpeta}/fichas/sections/head/etiquetas_meta_actividades.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/link_paginas_secundariass_head_actividades.php"; ?>


    <?php // Descripción general y URL
    $url = PATH_RAIZ_LOCALIDADES."/{$region_minuscula}/{$carpeta}/fichas/{$rutas}.php";?>

    <?php 
    require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$carpeta}/fichas/sections/head/variables/web-playa/structure-data-schema-org.php";
    include_once  PATH_RAIZ_BLOQUES_ESTRUCTURA . "/structured_data_generico.php"; ?>

  </head>

  <body>
    <?php require  PATH_RAIZ_BLOQUES_ESTRUCTURA . "/actividades_bloque_generico.php"; ?>
    <?php require  PATH_RAIZ. "/anuncios/pop-up-publicitario2.php"; ?>
    <?php require  PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap2.php"; ?>
   </body>

</html>