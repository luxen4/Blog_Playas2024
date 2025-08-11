<?php define('TITLE', "Castro-Urdiales – Turismo y Patrimonio en Cantabria 2025"); ?>
<?php define('DESCRIPTION', "Descubre Castro-Urdiales en Cantabria: playas urbanas, puerto pesquero, patrimonio histórico y un ambiente marinero único."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Castro-Urdiales"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Castro-Urdiales, Cantabria, Playa de Ostende, puerto pesquero, patrimonio histórico, turismo Cantabria, costa de Cantabria, castillo-faro, iglesia de Santa María, paseo marítimo, gastronomía marinera') ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/castro-urdiales/variables-localidad.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA . "/head/variables/meta_tags.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES . "/data-generico.php";  ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <title>Castro-Urdiales – Guía Turística y Patrimonio</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_CONTROL . "/google-analytics.php"; ?>
  <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
</head>


<body class="bg-[url('/Blog_Playas2025/anuncios/assets/img/fondos/puerto-marinero.jpg')] bg-cover bg-center text-gray-800">
  <div class="container-xxl py-5">
    <div class="row">

      <!-- Columna izquierda (principal) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-blue-700 via-sky-600 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marked-alt"></i> Castro-Urdiales (Cantabria)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Castro-Urdiales combina historia, mar y gastronomía en un entorno único. 
              Su puerto pesquero, el Castillo-Faro, la iglesia gótica de Santa María, 
              el paseo marítimo y sus playas hacen de este municipio uno de los destinos más atractivos del norte de España.
            </p>
          </div>
        </header>

        <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/lugares-interes-castro-urdiales-cards.php"; ?>
        <?php require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/boton-volver-al-inicio.php"; ?>
      </div>

      <div class="col-4 col-md-3 d-none d-md-block">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/sidebar-playa.php'; ?>
      </div>
    </div>
  </div>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
