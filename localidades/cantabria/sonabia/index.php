<?php define('TITLE', "Sonabia – Turismo y Naturaleza en Cantabria 2025"); ?>
<?php define('DESCRIPTION', "Descubre Sonabia en Cantabria: la Playa de Sonabia, la Peña Candina y rutas costeras únicas."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Sonabia"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Sonabia, Sonabia, playas Cantabria, Peña Candina, naturaleza, costa de Cantabria, turismo natural, playa salvaje, rutas, Ojo del Diablo, monte Candina') ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/sonabia/variables-localidad.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA . "/head/variables/meta_tags.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES . "/data-generico.php";  ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <title>Sonabia – Guía Turística y Naturaleza</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_CONTROL . "/google-analytics.php"; ?>
  <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
</head>


<body class="bg-[url('/Blog_Playas2025/anuncios/assets/img/fondos/arenaplaya.jpg')] bg-cover bg-center text-gray-800">
  <div class="container-xxl py-5">
    <div class="row">

      <!-- Columna izquierda (principal) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; echo($localidad_minuscula);?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marked-alt"></i> Sonabia (Cantabria)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Sonabia es un pequeño paraíso costero en Cantabria, famoso por su playa salvaje,
              la imponente Peña Candina y rutas que recorren acantilados con vistas al mar Cantábrico.
              Un lugar perfecto para amantes del senderismo y la naturaleza.
            </p>
          </div>
        </header>

        <?php  require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/lugares-interes-sonabia-cards.php"; ?>
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
