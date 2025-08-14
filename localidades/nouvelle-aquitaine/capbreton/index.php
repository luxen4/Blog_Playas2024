<?php $localidad = 'Capbreton'; $lugar_minuscula = 'capbreton'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/nouvelle-aquitaine/variables-generales-region.php"; ?>

<?php define('TITLE', "Capbreton – Turismo y Plage Centrale 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Plage Centrale de Capbreton, en Nueva Aquitania: una playa amplia y animada, ideal para familias y amantes del surf, con paseo marítimo, restaurantes y vistas espectaculares del Atlántico."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Capbreton"); ?>
<?php define('LUGAR_MINUSCULA', 'capbreton'); ?>
<?php define('KEYWORDS_CONTENT', 'Plage Centrale, Capbreton, turismo Nueva Aquitania, playas de Las Landas, surf en Francia, costa atlántica francesa, naturaleza en Capbreton'); ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA . "/head/variables/meta_tags.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES . "/data-generico.php"; ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/{$region_minuscula}/variables-generales-region.php"; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $description_content; ?>">
  <meta name="keywords" content="<?= $keywords_content; ?>">
  <title>Capbreton – Guide Touristique de la Nouvelle-Aquitaine</title>
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
              <i class="fas fa-map-marker-alt"></i> Capbreton (Nouvelle Aquitaine)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Capbreton est une ville portuaire pittoresque de la côte atlantique, réputée pour ses plages, son port animé et ses vagues parfaites pour le surf.
            </p>
          </div>
        </header>

        <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/lugares-interes-capbreton-cards.php"; ?>
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
