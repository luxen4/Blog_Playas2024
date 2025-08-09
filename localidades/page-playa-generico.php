<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require PATH_RAIZ_LOCALIDADES . "/_estructura/head/head-generico.php"; ?>
    </head>

    <body class="bg-<?= COLOR_PAGE; ?>-100">
        <?php require PATH_RAIZ_LOCALIDADES . "/_estructura/body/header-generico.php"; ?>
        <?php require PATH_RAIZ_LOCALIDADES . "/_estructura/body/post-header-generico.php"; ?>

        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>

        <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/anuncios/js/logica_anuncios.php"; ?>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
        <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_SCHEMAS_PLAYAS_NOMBRE_PLAYA . "/schemas-body.php"; ?>
    </body>
</html>