

<?php
  $region = 'Francia'; $region_minuscula = strtolower($region);
  $localidad = 'saint-jean-de-luz'; $localidad_minuscula = strtolower($localidad); 
  ?>


<?php 
    $description_content = 'Descubre la Grande Plage de Saint-Jean-de-Luz, una de las playas más emblemáticas del País Vasco francés, ideal para familias, con aguas tranquilas y ambiente costero encantador.';
    $keywords_content = 'Grande Plage, Saint-Jean-de-Luz, playa Francia, costa vasca, playas familiares, mar Cantábrico, turismo País Vasco, playa urbana, Nouvelle-Aquitaine';

    $lugar_header = 'Grande Plage de Saint-Jean-de-Luz'; 
    $tema = 'grande-plage-saint-jean-de-luz';
    $title = 'Grande Plage de Saint-Jean-de-Luz - País Vasco francés';
    $rutas = 'grande-plage-saint-jean-de-luz-nouvelle-aquitaine';
    $color_page = 'indigo'; // Color sugerido para Saint-Jean-de-Luz, puedes cambiarlo
    $tema_footer = '- Grande Plage de Saint-Jean-de-Luz -'; 
?>



<?php
// Variables de configuración para Saint-Jean-de-Luz (Grande Plage)
// Título y descripción para Open Graph y Twitter Card
$graph_Meta_Tags_property_title       = 'Grande Plage de Saint-Jean-de-Luz – Guía Turística y Playa';
$graph_Meta_Tags_property_description = 'Visita la Grande Plage de Saint-Jean-de-Luz, la playa urbana más famosa del País Vasco francés, con su bahía protegida, arena dorada y vibrante ambiente costero.';

// Ruta a la imagen representativa (asegúrate de que la ruta coincide con tu estructura)
$graph_Meta_Tags_property_image       = PATH_RAIZ_LOCALIDADES_CARPETA 
    . "/{$region_minuscula}/{$carpeta}/img/grande-plage-saint-jean-de-luz-1.jpg";

// URL canónica de la página
$graph_Meta_Tags_property_url         = PATH_RAIZ_LOCALIDADES_CARPETA 
    . "/{$region_minuscula}/{$carpeta}/index.php";

// Tipo de contenido para Open Graph
$graph_Meta_Tags_property_type        = 'website';
?>


<?php // require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$lugar_interes}/pre-html.php"; ?>


<?php
$pathConPlayas = $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$lugar_interes}/pre-html.php";
$pathSinPlayas = $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/{$lugar_interes}/pre-html.php";

try {
    if (file_exists($pathConPlayas)) {
        require $pathdConPlayas;
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