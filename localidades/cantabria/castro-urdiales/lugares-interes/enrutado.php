
<?php
$pathConPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/playas/{$lugar_interes}/schemas/schemas-body.php"; 
$pathSinPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/{$lugar_interes}/schemas/schemas-body.php"; 

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