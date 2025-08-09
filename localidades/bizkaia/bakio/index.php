<?php define('TITLE', "Bakio – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Bakio, en Bizkaia: un arenal amplio ideal para surfistas y familias, rodeado de montañas verdes y cercano a San Juan de Gaztelugatxe."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Bakio"); ?>
<?php define('LUGAR_MINUSCULA', 'bakio') ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Bakio, Bizkaia, surf, turismo Bizkaia, playas del País Vasco, San Juan de Gaztelugatxe, naturaleza Bizkaia') ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/bizkaia/bakio/variables-localidad.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA . "/head/variables/meta_tags.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES . "/data-generico.php";  ?>



<!DOCTYPE html>
<html lang="es">
<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $description_content; ?>">
  <meta name="keywords" content="<?= $keywords_content; ?>">
  <title>Playa de Bakio – Guía Turística y Surf</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[url('/Blog_Playas2025/anuncios/assets/img/fondos/arenaplaya.jpg')] bg-cover bg-center text-gray-800">
  <div class="container-xxl py-5">
    <div class="row">

      <!-- Columna izquierda (principal) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-blue-600 via-sky-500 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-water"></i> Playa de Bakio (Bizkaia)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              La Playa de Bakio es uno de los arenales más icónicos de Bizkaia, perfecta para el surf y para disfrutar de
              un día en familia. Su ubicación, rodeada de montañas y a pocos minutos de San Juan de Gaztelugatxe,
              la convierte en un lugar imprescindible.
            </p>
          </div>
        </header>

        <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/lugares-interes-bakio-cards.php"; ?>
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
