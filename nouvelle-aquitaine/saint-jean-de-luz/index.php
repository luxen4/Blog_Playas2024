<?php $localidad = 'Saint-Jean-de-Luz'; $lugar_minuscula = 'saint-jean-de-luz'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/nouvelle-aquitaine/variables-generales-region.php";?>

<?php define('TITLE', "Saint-Jean-de-Luz – Turismo y Naturaleza en País Vasco Francés 2025"); ?>
<?php define('DESCRIPTION', "Descubre Saint-Jean-de-Luz, un pintoresco municipio del País Vasco Francés con playas, gastronomía local y un ambiente encantador junto al mar."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Saint-Jean-de-Luz"); ?>
<?php define('LUGAR_MINUSCULA', 'saint-jean-de-luz') ?>
<?php define('KEYWORDS_CONTENT', 'Saint-Jean-de-Luz, País Vasco Francés, playas, turismo, gastronomía, costa atlántica') ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2026/".$region_minuscula."/".$lugar_minuscula."/variables-localidad.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/".$region_minuscula."/".$lugar_minuscula."/head/variables/meta_tags.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/".$region_minuscula."/".$lugar_minuscula."/head/variables/data-generico.php";  ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2026/{$region_minuscula}/variables-generales-region.php"; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require PATH_RAIZ . "/_estructura/semantica/head/head-generico.php"; ?>
    </head>

  <head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/localidades/_estructura/head/head-generico.php"; ?>
  </head>

<body class="bg-[url('/Blog_Playas2026/anuncios/assets/img/fondos/nature-cote.jpg')] bg-cover bg-center text-gray-800">
  <div class="container-xxl py-5">
    <div class="row">

      <!-- Colonne gauche (principale) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ . '/_estructura/semantica/breadcrums-playa.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-blue-600 via-sky-500 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marker-alt"></i> Saint-Jean-de-Luz (Nouvelle Aquitaine)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Saint-Jean-de-Luz es una ciudad costera de Nueva Aquitania, conocida por sus pintorescas playas, su rico patrimonio vasco y su ambiente acogedor.
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
