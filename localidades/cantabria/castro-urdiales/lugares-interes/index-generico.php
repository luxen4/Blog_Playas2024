<?php
  $region = 'Cantabria'; $region_minuscula = strtolower($region);
  $localidad = 'Castro-Urdiales'; $localidad_minuscula = strtolower($localidad); ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/{$lugar_interes}/pre-html.php"; ?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/head-generico.php"; ?>
  </head>

  <body class="bg-<?= $color_page; ?>-100">
    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/body/header-generico.php"; ?>
    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/body/post-header-generico.php"; ?>

    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>
    <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/anuncios/js/logica_anuncios.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/{$lugar_interes}/schemas/schemas-body.php"; ?>
  </body>

</html>