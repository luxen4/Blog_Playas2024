  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title><?= $title; ?></title>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/scripts-generico.php"; ?>
  <?php //require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/playas/{$lugar_interes}/schemas/schemas-head.php"; ?>


  <?php
$pathConPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/playas/{$lugar_interes}/schemas/schemas-head.php";
$pathSinPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/{$lugar_interes}/schemas/schemas-head.php"; 

try {
    if (file_exists($pathConPlayas)) {
        require $pathConPlayas;
    } elseif (file_exists($pathSinPlayas)) {
        require $pathSinPlayas;
    } else {
        throw new Exception("Archivo pre-htmlS.php no encontrado en ninguna ruta.");
    }
} catch (Exception $e) {
    // Aquí puedes manejar el error: mostrar mensaje, log, redirección, etc.
    echo "<p style='color:red;'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
    // Opcional: log error
    error_log($e->getMessage());
}
?>