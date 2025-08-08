<?php 
$localidad = 'Saint-Jean-de-Luz';
$localidad_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $localidad
    )
);

$region = 'Nouvelle Aquitaine';
$region_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $region
    )
);

require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/{$region_minuscula}/variables-generales-region.php";

// Paths
define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2025');
define('PATH_HREF_RAIZ', "/Blog_Playas2025");

define('PATH_RAIZ_BLOQUES', PATH_RAIZ. '/bloques'); 
define('PATH_RAIZ_BLOQUES_CONTROL', PATH_RAIZ_BLOQUES . '/control');
define('PATH_RAIZ_BLOQUES_ESTRUCTURA', PATH_RAIZ_BLOQUES. '/estructura');
define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN', PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main');
define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO', PATH_RAIZ_BLOQUES. '/estructura/paginas-generico');

define('PATH_RAIZ_LOCALIDADES_CARPETA', rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}");
define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES', PATH_RAIZ_LOCALIDADES_CARPETA. "/lugares-interes");

define('PATH_HREF_RAIZ_BLOQUES', "/Blog_Playas2025/bloques");
define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_BODY', PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. '/body');
define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD', PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. "/head");

define('SITE_VERIFICATION_CONTENT', "6fdc72f26c4563f937e32ff3def5f9d5");
define('WEB_PAGE', "website");
define('HOY', date('Y-m-d'));
define('IDIOMA_LOCAL', 'fr_FR');

define('PATH_HREF_RAIZ_LOCALIDADES', "https://playas2025.kesug.com/Blog_Playas2025/localidades");

define('PATH_RAIZ_HOME_HEAD_VARIABLES', PATH_RAIZ. '/home/head/variables');
define('PATH_DOMINIO_RAIZ_LOCALIDADES', 'https://playas2024.kesug.com/Blog_Playas2025/localidades/');
define('PATH_DOMINIO_RAIZ', 'https://playas2024.kesug.com/Blog_Playas2025/');

define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); 
?>

<?php require PATH_RAIZ_LOCALIDADES . "/nouvelle-aquitaine/saint-jean-de-luz/lugares-interes/head/variables/_meta_tagsa.php"; ?>

<?php
$description_content = 'Découvrez Saint-Jean-de-Luz, charmante ville côtière de la Nouvelle-Aquitaine, célèbre pour ses plages, son patrimoine basque et son ambiance accueillante.';
$keywords_content = 'Saint-Jean-de-Luz, Nouvelle Aquitaine, tourisme France, plages, patrimoine basque, côte basque';

$tema_footer = 'Saint-Jean-de-Luz, Nouvelle Aquitaine'; 
$color_page='blue'; 
$tema='Saint-Jean-de-Luz'; 
$lugar_interes='Saint-Jean-de-Luz';

define('NAME_BLOG', "Blog Playas 2025");
define('AUTHOR', "Adrián Laya García");
define('EMAIL_AUTHOR', " ");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $description_content; ?>">
  <meta name="keywords" content="<?= $keywords_content; ?>">
  <title>Saint-Jean-de-Luz – Guide Touristique de la Nouvelle-Aquitaine</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[url('/Blog_Playas2025/anuncios/assets/img/fondos/nature-cote.jpg')] bg-cover bg-center text-gray-800">
  <div class="container-xxl py-5">
    <div class="row">

      <!-- Colonne gauche (principale) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-blue-600 via-sky-500 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marker-alt"></i> Saint-Jean-de-Luz (Nouvelle Aquitaine)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Saint-Jean-de-Luz est une ville côtière de la Nouvelle-Aquitaine réputée pour ses plages pittoresques, son riche patrimoine basque et son atmosphère chaleureuse.
            </p>
          </div>
        </header>

        <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/lugares-interes-saint-jean-de-luz-cards.php"; ?>
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
