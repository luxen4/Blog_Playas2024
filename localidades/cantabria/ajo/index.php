
<?php $localidad = 'Ajo'; $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); 
$lugar='Ruta de la Costa Oriental';
?>
<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/variables-generales-region.php"; ?>

<?php define('NAME_BLOG', "Blog Playas Cantábrico"); ?>
<?php define('AUTHOR', "Adrián Laya García"); ?>
<?php define('EMAIL_AUTHOR', "  ");?>
<?php define('TURISMO_PLAYAS', 'Turismo y Playas'); ?>

<?php define('PATH_RAIZ',                                               rtrim($_SERVER['DOCUMENT_ROOT']) . '/Blog_Playas2025'); ?>
<?php define('PATH_HREF_RAIZ', "/Blog_Playas2025"); ?>

<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_CONTROL',                               PATH_RAIZ_BLOQUES . '/control'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES . '/estructura'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD',         PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/head'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN',    PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO',           PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-generico'); ?>

<?php define('PATH_RAIZ_LOCALIDADES_CARPETA',                           PATH_RAIZ."/localidades/{$region_minuscula}/{$localidad_minuscula}"); ?>
<?php define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES',                     PATH_RAIZ_LOCALIDADES_CARPETA. "/lugares-interes"); ?>
     
<?php define('PATH_HREF_RAIZ_BLOQUES', "/Blog_Playas2025/bloques"); ?>

<?php //define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD',      PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. "/head"); ?>

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
<?php require PATH_RAIZ_LOCALIDADES . "/cantabria/ajo/lugares-interes/ruta-de-la-costa-oriental/head/variables/_meta_tagsa.php"; ?>

<?php
$description_content = 'Descubre la Ruta de la Costa Oriental de Ajo en Cantabria: un recorrido escénico entre acantilados, naturaleza salvaje y vistas al Faro de Ajo. Ideal para senderistas y amantes del mar.';
$keywords_content = 'Ruta Costa Oriental, Ajo Cantabria, senderismo Cantabria, Faro de Ajo, rutas costeras, naturaleza Cantabria, turismo Ajo, rutas a pie Cantabria';
?>

<?php $lugar_interes_footer = 'Ajo, Cantabria'; $color_page='orange'; $lugar_interes='Ajo'; $lugar_interes='Ajo';?>





<!DOCTYPE html>
<html lang="es">
<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descubre Ajo en Cantabria: playas vírgenes, miradores, rutas y el famoso Cabo de Ajo.">
  <meta name="keywords" content="Ajo, Cantabria, turismo, playas, naturaleza, rutas, Cabo de Ajo, faro">
  <title>Ajo – Guía Turística y Playas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>




  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
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
        <?php //define('PATH_HREF_RAIZ_LOCALIDAD', "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta}"); ?>
        <?php //define('PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES',        PATH_HREF_RAIZ_LOCALIDAD. "/lugares-interes"); 15/8/2025 Ya en su archivo, borrar aquí en unos dias?>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marked-alt"></i> Ajo (Cantabria)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Ajo es una de las joyas de la costa oriental de Cantabria, conocida por sus impresionantes acantilados, 
              el Faro de Cabo de Ajo, playas tranquilas y rutas con vistas espectaculares. 
              Un destino perfecto para desconectar en plena naturaleza.
            </p>
          </div>
        </header>
        <?php //require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>
        <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/lugares-interes-ajo-cards.php"; ?>
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









<?php  /*     <!-- Columna derecha (Sidebar y Playas) -->
      <div class="col-lg-4 mt-5 mt-lg-0">
        <!-- Sección Playas -->
        <section id="playas" class="bg-white border border-gray-200 rounded-lg shadow-sm p-4 mb-4">
          <header class="text-center mb-4">
            <h5 class="text-xl font-semibold text-gray-700">🏖️ Playas de <br><strong>Ajo</strong></h5>
            <p class="text-sm text-gray-500">Playas tranquilas de la costa oriental de Cantabria.</p>
          </header>
          <div class="space-y-2">
            <a href="" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Ajo
            </a>
            <a href="lugares-interes/playas/playa-de-cuberris/index.php" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Cuberris
            </a>
            <a href="playas/playa-de-antueras/index.html" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Antueras
            </a>
          </div>
        </section>
      </div> */?>