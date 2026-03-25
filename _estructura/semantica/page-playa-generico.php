<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require PATH_RAIZ . "/_estructura/semantica/head/head-generico.php"; ?>
    </head>

    <body class="bg-<?= COLOR_PAGE; ?>-100">
        <?php require PATH_RAIZ . "/_estructura/semantica/body/header-generico.php"; ?>
        <?php require PATH_RAIZ . "/_estructura/semantica/body/post-header-generico.php"; ?>

        <?php require PATH_RAIZ . "/_estructura/semantica/footer-generico.php"; ?>

        <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/anuncios/js/logica_anuncios.php"; ?>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
        <?php //require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_SCHEMAS_PLAYAS_NOMBRE_PLAYA . "/schemas-body.php"; ?>
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/" .$region_minuscula. "/".$localidad_minuscula . "/lugares-interes/".$lugar_minuscula."/schemas/schemas-body.php"; ?>
    </body>
</html>

