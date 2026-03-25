<?php $localidad = 'Sopelana'; $lugar_minuscula = 'sopelana'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/bizkaia/variables-generales-region.php";?>

<?php define('TITLE', "Sopelana – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre Sopelana, un vibrante municipio costero de Bizkaia conocido por sus playas ideales para el surf, naturaleza y ambiente joven y activo."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Sopelana"); ?>
<?php define('LUGAR_MINUSCULA', 'sopelana') ?>
<?php define('KEYWORDS_CONTENT', 'Sopelana, Bizkaia, municipio, turismo Bizkaia, playas surf Bizkaia, naturaleza Euskadi') ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2026/".$region_minuscula."/".$lugar_minuscula."/variables-localidad.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/".$region_minuscula."/".$lugar_minuscula."/head/variables/meta_tags.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/".$region_minuscula."/".$lugar_minuscula."/head/variables/data-generico.php";  ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require PATH_RAIZ . "/_estructura/semantica/head/head-generico.php"; ?>
    </head>

<body class="bg-[url('/Blog_Playas2026/anuncios/assets/img/fondos/naturaleza-costa.jpg')] bg-cover bg-center text-gray-800">
  <div class="container-xxl py-5">
    <div class="row">

      <!-- Columna izquierda (principal) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ . '/_estructura/semantica/breadcrums-playa.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-blue-600 via-sky-500 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marker-alt"></i> Sopelana (Bizkaia)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Sopelana es un municipio costero en Bizkaia conocido por sus playas para surfistas, amplios espacios naturales y un ambiente joven y dinámico.
            </p>
          </div>
        </header>

        <?php require PATH_RAIZ . "/_estructura/semantica/body/lugares-interes-generico.php"; ?>
      </div>

      <div class="col-4 col-md-3 d-none d-md-block">
                <?php // require PATH_RAIZ . '/_estructura/semantica/sidebar-playa.php'; ?>
        <?php require PATH_RAIZ . '/_estructura/publicidad/getYourGuide/index.php'; ?>
      </div>
    </div>
  </div>

  <?php require PATH_RAIZ . "/_estructura/semantica/footer-generico.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
