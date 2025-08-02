<!DOCTYPE html>
<html lang="es">

  <head>
    <?php require PATH_RAIZ_LOCALIDADES . "/_estructura/head/head-generico.php"; ?>
  </head>

<body class="bg-<?= $color_page; ?>-100">
    <?php require PATH_RAIZ_LOCALIDADES . "/_estructura/body/header-generico.php"; ?>
    <?php require PATH_RAIZ_LOCALIDADES . "/_estructura/body/post-header-generico.php"; ?>

    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>

    <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/anuncios/js/logica_anuncios.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
    <?php //require PATH_RAIZ_LOCALIDADES . "/playas/{$lugar_interes}/schemas/schemas-body.php"; ?>


    <?php 
    $pathConPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_SCHEMAS_PLAYAS_NOMBRE_PLAYA . "/schemas-body.php";
    $pathConPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_SCHEMAS_PLAYAS_NOMBRE_PLAYA . "/schemas-body.php"; 

    try {
        if (file_exists($pathConPlayas)) {
            require $pathConPlayas;
        } elseif (file_exists($pathSinPlayas)) {
            require $pathSinPlayas;
        } else {
            throw new Exception("Archivo pre-html.php no encontrado en ninguna ruta.");
        }
    } catch (Exception $e) {
        // Aquí puedes manejar el error: mostrar mensaje, log, redirección, etc.
        echo "<p style='color:red;'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
        // Opcional: log error
        error_log($e->getMessage());
    }
    ?>
</body>

</html>