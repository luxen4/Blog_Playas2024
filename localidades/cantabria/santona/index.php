<?php 
$localidad = 'Santoña'; 
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); 
$localidad_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], // lo que quieres reemplazar
        ['n', 'n', '-'], // por qué lo reemplazas
        $localidad
    )
);

?>
<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/variables-generales-region.php"; ?>

<?php define('PATH_RAIZ',                                               rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2025'); ?>
<?php define('PATH_HREF_RAIZ', "/Blog_Playas2025"); ?>

<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_CONTROL',                               PATH_RAIZ_BLOQUES . '/control'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES. '/estructura'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN',    PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO',           PATH_RAIZ_BLOQUES. '/estructura/paginas-generico'); ?>

<?php define('PATH_RAIZ_LOCALIDADES_CARPETA', rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}"); ?>
<?php define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES',                     PATH_RAIZ_LOCALIDADES_CARPETA. "/lugares-interes"); ?>
     
<?php define('PATH_HREF_RAIZ_BLOQUES', "/Blog_Playas2025/bloques"); ?>

<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_BODY',      PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. '/body'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD',      PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. "/head"); ?>
<?php define('SITE_VERIFICATION_CONTENT', "6fdc72f26c4563f937e32ff3def5f9d5"); ?>

<?php define('WEB_PAGE', "website"); ?>
<?php define('HOY', date('Y-m-d')); ?>
<?php define('IDIOMA_LOCAL', 'es_ES'); ?>

<?php define('PATH_HREF_RAIZ_LOCALIDADES', "https://playas2025.kesug.com/Blog_Playas2025/localidades"); ?>

<?php define('PATH_RAIZ_HOME_HEAD_VARIABLES', PATH_RAIZ. '/home/head/variables'); ?>
<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES', 'https://playas2024.kesug.com/Blog_Playas2025/localidades/'); ?>
<?php define('PATH_DOMINIO_RAIZ', 'https://playas2024.kesug.com/Blog_Playas2025/'); ?>

<?php define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); ?>
<?php require PATH_RAIZ_LOCALIDADES . "/cantabria/santona/head/variables/_meta_tagsa.php"; ?>

<?php
$description_content = 'Explora Santoña en Cantabria: famosa por sus marismas, el Monte Buciero, la playa de Berria y su rica tradición marinera. Ideal para senderismo, naturaleza y cultura pesquera.';
$keywords_content = 'Santoña Cantabria, playa de Berria, Monte Buciero, marismas de Santoña, rutas de senderismo, turismo Santoña, naturaleza Cantabria';
?>

<?php 
$tema_footer = 'Santoña, Cantabria'; 
$color_page='blue'; 
$tema='Santoña'; 
$lugar_interes='Santoña';
?>

<?php define('NAME_BLOG', "Turismo y Playas 2025 – Guía Costera por el Cantábrico"); ?>
<?php define('AUTHOR', "Adrián Laya García"); ?>
<?php define('EMAIL_AUTHOR', ""); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $description_content ?>">
  <meta name="keywords" content="<?= $keywords_content ?>">
  <title>Santoña – Guía Turística y Playas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title><?= $title; ?></title>
  <?php require PATH_RAIZ_BLOQUES_CONTROL . "/google-analytics.php"; ?>

  <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
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
              <i class="fas fa-map-marked-alt"></i> Santoña (Cantabria)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Santoña es un destino único en la costa cántabra, rodeado de marismas y naturaleza, con 
              el Monte Buciero, la playa de Berria y una tradición pesquera que se respira en cada rincón. 
              Ideal para combinar relax, senderismo y cultura marinera.
            </p>
          </div>
        </header>

        <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/lugares-interes-santona-cards.php"; ?>
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
