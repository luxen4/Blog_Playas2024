<?php 
$region = "Cantabria"; $region_minuscula = strtolower($region);  $carpeta='playa-de-sonabia'; $tema_footer='Playa de Sonabia';
$color_page='orange';
$title_head='Playa de Sonabia | Paraíso Natural en Cantabria';
?>

<?php
define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025"); 
define('PATH_RAIZ_LOCALIDADES_CARPETA', PATH_RAIZ. "/localidades/{$region_minuscula}/{$carpeta}");
define('PATH_RAIZ_LOCALIDADES_CARPETA_HEAD', PATH_RAIZ. "/localidades/{$region_minuscula}/{$carpeta}/head"); 
define('PATH_RAIZ_LOCALIDADES_CARPETA_BODY', PATH_RAIZ. "/localidades/{$region_minuscula}/{$carpeta}/body"); 
define('PATH_RAIZ_LOCALIDADES_CARPETA_SCHEMAS', PATH_RAIZ_LOCALIDADES_CARPETA."/schemas");  

define('PATH_HREF_CARPETA', "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta}");
define('PATH_HREF_CARPETA_LUGARES_INTERES', PATH_HREF_CARPETA. "/lugares-interes");
?>

<?php require PATH_RAIZ_LOCALIDADES_CARPETA. "/head/variables/data-generico.php"; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD. '/head-generico.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA_SCHEMAS. '/schemas-head.php' ?>
  </head>
  
  <body class="bg-white text-gray-800 font-sans">
    <header class="bg-<?= $color_page; ?>-100 p-6 shadow-md">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl font-bold text-<?= $color_page; ?>-800">Playa de Sonabia</h1>
        <p class="mt-2 text-lg text-<?= $color_page; ?>-700">Una joya natural entre acantilados y el Cantábrico</p>
      </div>
    </header>

    <main class="max-w-4xl mx-auto p-6 space-y-8">
      <section>
        
      <?php $region = "Cantabria"; $region_minuscula = strtolower($region); $carpeta = 'castro-urdiales'; ?>
        <img src="<?= PATH_HREF_CARPETA ?>/imagenes/Playa-del-Arenal-Sonabia-Liendo-Cantabria-Cantabriarural-A-800x533.jpg" alt="Vista aérea de la Playa de Sonabia" class="rounded-2xl shadow-lg w-full" />
        <p class="mt-4 text-lg">
          La <strong>Playa de Sonabia</strong>, también conocida como "La Ballena", es un rincón escondido en la costa oriental de Cantabria, entre Castro-Urdiales y Laredo. Rodeada de montañas y prados verdes, esta cala virgen ofrece un entorno natural único ideal para desconectar del bullicio urbano.
        </p>
      </section>

      <section>
        <h2 class="text-2xl font-semibold text-<?= $color_page; ?>-700 mb-2">Cómo llegar</h2>
        <p>
          El acceso se realiza a pie desde el pequeño pueblo de Sonabia. Hay un aparcamiento rural limitado. Se recomienda llegar temprano en verano y respetar el entorno.
        </p>
      </section>

      <section>
        <h2 class="text-2xl font-semibold text-<?= $color_page; ?>-700 mb-2">Características</h2>
        <ul class="list-disc list-inside space-y-1">
          <li>Arena dorada y fina</li>
          <li>Entorno natural protegido</li>
          <li>Ideal para senderismo y fotografía</li>
          <li>Zona no urbanizada, sin servicios</li>
        </ul>
      </section>

      <section>
        <h2 class="text-2xl font-semibold text-<?= $color_page; ?>-700 mb-2">Consejos</h2>
        <p>
          Lleva calzado cómodo, protector solar y agua. Es un entorno ideal para el nudismo y la tranquilidad, pero hay que ser respetuoso con la flora y fauna local.
        </p>
      </section>
    </main>

      <?php require PATH_RAIZ_LOCALIDADES_CARPETA_BODY. '/footer-generico.php' ?>
      <?php require PATH_RAIZ_LOCALIDADES_CARPETA_SCHEMAS. '/schemas-body.php' ?>
  </body>
</html>
