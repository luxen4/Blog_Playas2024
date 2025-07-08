<?php
  $region = 'Francia'; $region_minuscula = strtolower($region);
  $localidad = 'saint-jean-de-luz'; $localidad_minuscula = strtolower($localidad); 
  ?>

<?php // require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$lugar_interes}/pre-html.php"; ?>


<?php
$pathConPlayas = $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$lugar_interes}/pre-html.php";
$pathSinPlayas = $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/{$lugar_interes}/pre-htmbl.php";

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

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_HEAD . "/head-generico.php"; ?>
  </head>

<body class="bg-<?= $color_page; ?>-100">
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA_LOCALIDAD . "/_estructura/body/header-generico.php"; ?>
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA_LOCALIDAD . "/_estructura/body/post-header-generico.php"; ?>

    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>
    <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/anuncios/js/logica_anuncios.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
    <?php //require PATH_RAIZ_LOCALIDADES_CARPETA_LOCALIDAD . "/playas/{$lugar_interes}/schemas/schemas-body.php"; ?>


    <?php
    $pathConPlayas = PATH_RAIZ_LOCALIDADES_CARPETA_LOCALIDAD . "/playas/{$lugar_interes}/schemas/schemas-body.php"; 
    $pathSinPlayas = PATH_RAIZ_LOCALIDADES_CARPETA_LOCALIDAD . "/{$lugar_interes}/schemas/schemas-body.php"; 

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