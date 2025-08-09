

<?php lugar_minuscula = 'castro-urdiales';
$localidad = 'Castro-Urdiales'; $localidad_minuscula = strtolower($localidad); $carpeta = $localidad_minuscula;
$region = 'Cantabria'; $region_minuscula = strtolower($region); $country= 'España';
lugar_minuscula = 'Información Castro-Urdiales';
$title = 'Castro Urdiales – Guía Turística y Playas';

//$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be';
$description_content = 'Explora Castro Urdiales: historia, playas (Ostende, Brazomar, El Pedregal), gastronomía, rutas de senderismo y eventos culturales en la Costa Cantábrica.';
$keywords_content = 'Castro Urdiales, turismo Cantabria, playas Castro Urdiales, Ostende, Brazomar, El Pedregal, senderismo, gastronomía Cantabria, eventos Castro Urdiales';

$rutas = 'cantabria';
COLOR_PAGE = 'blue';
lugar_minuscula_footer = '- Castro-Urdiales Turismo -'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES. "/meta_tags.php";      // Variables de etiquetas metarequire PATH_RAIZ_BLOQUES_ESTRUCTURA . "/paginas-generico/etiquetas-meta.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES. "/data-generico.php";  // Variables para el archivo Structured_data_generico.php //<!-- Structured Data (Schema.org) -->    ?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD. "/etiquetas-meta.php";?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
    <title><?= $title; ?></title>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/scripts-generico.php"; ?>
  </head>

  <body>

<div class="container-xxl py-5">
  <div class="row">

    <!-- Columna izquierda (principal) -->
    <div class="col-lg-8">
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

      <header class="mb-10">
        <div class="bg-gradient-to-r from-<?= COLOR_PAGE; ?>-600 via-sky-500 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
          <h1 class="text-4xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
            <i class="fas fa-map-marked-alt"></i> Castro-Urdiales
          </h1>
          <p class="text-lg md:text-xl font-medium">
            Historia, playas y paisajes que enamoran en la costa de <?= $region_minuscula; ?>. Castro Urdiales es una hermosa ciudad costera en la provincia de <?= $region; ?>, conocida por su rica historia, impresionantes playas y vibrante cultura. Desde sus monumentos históricos hasta sus paisajes naturales, Castro Urdiales ofrece una experiencia única para los visitantes.
          </p>
        </div>
      </header>

      <!-- Info principal -->
      <?php require './fichas/sections/info.php' ?>
      <?= $li_encabezado ?>
      <hr>
      <?= $li_descripcion_detallada ?>
      <?= $li_descripcion_detallada2 ?>
      <?= $li_descripcion_detallada3 ?>

      <div class="alert alert-info mt-4" role="alert">
        Si visitas Castro Urdiales, no te pierdas sus rincones más emblemáticos. Desde monumentos históricos hasta espacios naturales y gastronómicos:
      </div>

      <!-- Sección Lugares de Interés -->
      <section id="lugares-interes" class="my-10">
        <div class="text-center mb-6">
          <h2 class="text-3xl font-bold text-<?= COLOR_PAGE; ?>-700 mb-2">📍 Lugares de Interés en Castro Urdiales</h2>
          <p class="text-gray-600">Descubre los rincones más icónicos de la ciudad.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <?php
              LUGARes = [
                'Asador La Perla' => 'asador-la-perla',
                'Castillo de Santa Ana' => 'castillo-santa-ana',
                'Club Náutico' => 'club-nautico',
                'El Pedregal' => 'el-pedregal',
                'Iglesia de Santa María' => 'iglesia-santa-maria-de-la-asuncion',
                'Palacio de Ocharán' => 'palacio-ocharan',
                'Parque Amestoy' => 'parque-amestoy',
                'Paseo Marítimo' => 'paseo-maritimo',
                'Playa de Ostende' => 'playa-de-ostende',
                'Plaza del Ayuntamiento' => 'plaza-del-ayuntamiento',
                'Puente Medieval' => 'puente-medieval',
                'Puerto de Castro Urdiales' => 'puerto-pesquero'
              ];

              foreach (LUGARes as $nombre => $ruta) {
                  if ($_SERVER['SERVER_NAME'] === 'localhost') {
                      // Ruta para entorno local
                      echo '<div class="col">
                              <a href="' . PATH_HREF_RAIZ . '/' . $ruta .'-' . $localidad_minuscula.    '" class="btn btn-outline-secondary w-100 text-start px-3 py-2">'
                              . $nombre .
                              '</a>
                            </div>';
                  } else {
                      // Ruta para entorno de producción (con subcarpeta lugares-interes)
                      echo '<div class="col">
                              <a href="' . PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES . '/' . $ruta . '/index.php" class="btn btn-outline-secondary w-100 text-start px-3 py-2">'
                              . $nombre .
                              '</a>
                            </div>';
                  }
              }
  


          ?>
        </div>
      </section>

      <?= $caja_eventosYfestividades ?>
      <?= $li_mapa_ubicacion ?>
      <?= $li_mas_info ?>

      <!-- Botón Home -->
      <div class="text-center mt-5">
        <a href="/Blog_Playas2025/index.php#<?= $region_minuscula; ?>" class="btn btn-outline-primary">← Volver al Inicio</a>
      </div>
    </div>

    <!-- Columna derecha (Sidebar y Playas) -->
    <div class="col-lg-4 mt-5 mt-lg-0">
      <!-- Sidebar oculto en móviles -->
      <aside class="hidden md:block mb-4">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/sidebar-playa.php'; ?>
      </aside>

      <!-- Sección Playas -->
      <section id="playas" class="bg-white border border-gray-200 rounded-lg shadow-sm p-4 mb-4">
        <header class="text-center mb-4">
          <h5 class="text-xl font-semibold text-gray-700">🏖️ Playas de <br><strong>Castro Urdiales</strong></h5>
          <p class="text-sm text-gray-500">Disfruta del Cantábrico en sus mejores rincones.</p>
        </header>

        <div class="space-y-2">
          <?php
          $carpeta_playa = 'playa-de-ostende';
          define('PATH_HREF_RAIZ_LOCALIDAD_PLAY', "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta_playa}/");
          $playas = [
            'Playa de Ostende' => 'playa-de-ostende',
            'Playa de Brazomar' => 'playa-de-brazomar',
            'El Pedregal' => 'playa-de-el-pedregal-'.$localidad_minuscula
          ];
          foreach ($playas as $nombre => $ruta) {
    if ($_SERVER['SERVER_NAME'] == "localhost") {
        // Cuando estamos en localhost, mostramos este enlace con PATH_HREF_RAIZ y $nombre
        ?>
        <a href="<?= PATH_HREF_RAIZ .'/'. $ruta; ?>" class="block px-4 py-2 bg-blue-50 border border-blue-300 text-blue-700 rounded hover:bg-blue-100 transition">
            <?= htmlspecialchars($nombre) ?>
        </a>
        <?php
    } else {
        // En producción, construimos la URL con PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES y $ruta
        ?>
        <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES . '/playas/' . $ruta . '/index.php' ?>" class="block px-4 py-2 bg-blue-50 border border-blue-300 text-blue-700 rounded hover:bg-blue-100 transition">
            <?= htmlspecialchars($nombre) ?>
        </a>
        <?php
    }
}?>


        </div>
      </section>

      <!-- Anuncios -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_ANUNCIOS_JS . "/anuncios-add-cash.php"; ?>
      </div>
    </div>

  </div>
</div>
    
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_ANUNCIOS_JS . "/anuncios-add-cash.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
</body>
</html>