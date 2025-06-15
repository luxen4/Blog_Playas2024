
<?php
$localidad = 'Castro-Urdiales'; $localidad_minuscula = strtolower($localidad); $carpeta = $localidad_minuscula;
$region = 'Cantabria'; $region_minuscula = strtolower($region); $country= 'España';
$tema = 'Información Castro-Urdiales';
$title = 'Castro Urdiales – Guía Turística y Playas';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be';
$description_content = 'Explora Castro Urdiales: historia, playas (Ostende, Brazomar, El Pedregal), gastronomía, rutas de senderismo y eventos culturales en la Costa Cantábrica.';
$keywords_content = 'Castro Urdiales, turismo Cantabria, playas Castro Urdiales, Ostende, Brazomar, El Pedregal, senderismo, gastronomía Cantabria, eventos Castro Urdiales';

$rutas = 'castro-urdiales-cantabria';
//$hoy = date('Y-m-d');


$color_page = 'blue';
$tema_footer = '- Castro-Urdiales Turismo -'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES. "/meta_tags.php";      // Variables de etiquetas metarequire PATH_RAIZ_BLOQUES_ESTRUCTURA . "/paginas-generico/etiquetas-meta.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES. "/data-generico.php";  // Variables para el archivo Structured_data_generico.php //<!-- Structured Data (Schema.org) -->    ?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD. "/etiquetas-meta.php";?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/links.php"; ?>
    
    <title><?= $title; ?></title>

    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          brand: '#1e40af', red: 'red',
        }
      }
    }
  }
</script>

  </head>

  <body>
    <div class="bg-brand text-white p-4">
  Fondo con el color personalizado "brand"
</div>

    <div class="bg-red text-white p-4">
  Fondo con el color personalizado "brand"
</div>


    <div class="container-xxl py-5">
      <div class="row">

        <div class="col-lg-10 col-xl-10">
          <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

          <header class="mb-10">
            <div class="bg-gradient-to-r from-<?= $color_page; ?>-600 via-sky-500 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
              <h1 class="text-4xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
                <i class="fas fa-map-marked-alt"></i> Castro-Urdiales
              </h1>
              <p class="text-lg md:text-xl font-medium">Historia, playas y paisajes que enamoran en la costa de <?= $region_minuscula; ?>. Castro Urdiales es una hermosa ciudad costera en la provincia de <?= $region; ?>, conocida por su rica historia, impresionantes playas y vibrante cultura. Desde sus monumentos históricos hasta sus paisajes naturales, Castro Urdiales ofrece una experiencia única para los visitantes.</p>
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
              <h2 class="text-3xl font-bold text-<?= $color_page; ?>-700 mb-2">📍 Lugares de Interés en Castro Urdiales</h2>
              <p class="text-gray-600">Descubre los rincones más icónicos de la ciudad.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <?php
              $lugares = [
                'Asador La Perla' => 'asador-la-perla.php',
                'Castillo de Santa Ana' => 'castillo-santa-ana.php',
                'Club Náutico' => 'club-nautico.php',
                'El Pedregal' => 'el-pedregal.php',
                'Iglesia de Santa María' => 'iglesia-santa-maria.php',
                'Palacio de Ochagarán' => 'palacio-ochagaran.php',
                'Parque Amestoy' => 'parque-amestoy.php',
                'Paseo Marítimo' => 'paseo-maritimo.php',
                'Playa de Ostende' => 'playa-ostende.php',
                'Plaza del Ayuntamiento' => 'plaza-ayuntamiento.php',
                'Puente Medieval' => 'puente-medieval.php',
                'Puerto de Castro Urdiales' => 'puerto.php'
              ];
              foreach ($lugares as $nombre => $ruta) {
                echo '<div class="col"><a href="' . PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES . '/' . $ruta . '" class="btn btn-outline-secondary w-100 text-start px-3 py-2">' . $nombre . '</a></div>';
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

        <!-- Columna derecha más estrecha -->
        <div class="col-lg-2 col-xl-2">
          <!-- Sección Playas -->
          <section id="playas" class="bg-light rounded shadow-sm p-3 mt-4">
            <header class="text-center mb-3">
              <h5 class="text-secondary">🏖️ Playas de <br><strong>Castro Urdiales</strong></h5>
              <p class="small text-muted">Disfruta del Cantábrico en sus mejores rincones.</p>
            </header>

            <?php
            $carpeta_playa = 'playa-de-ostende';
            define('PATH_HREF_RAIZ_LOCALIDAD_PLAYA', "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta_playa}/");
            $playas = [
              'Playa de Ostende' => 'index.php',
              'Playa de Brazomar' => 'playa-brazomar.php',
              'El Pedregal' => 'el-pedregal.php'
            ];
            foreach ($playas as $nombre => $ruta) {
              echo '<div class="mb-2"><a href="' . PATH_HREF_RAIZ_LOCALIDAD_PLAYA . $ruta . '" class="btn btn-outline-primary w-100 py-2">' . $nombre . '</a></div>';
            }
            ?>
          </section>
        </div>
      </div>
    </div>

<footer class="bg-<?= $color_page; ?>-100 text-center py-6 mt-12 text-sm text-<?= $color_page; ?>-800 shadow-inner">
  <p class="font-semibold text-lg"><?= $tema_footer; ?></p>
  <p>&copy; <?= NAME_BLOG; ?> – <?= AUTHOR; ?></p>
</footer>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/anuncios-add-cash.php"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
</body>
</html>