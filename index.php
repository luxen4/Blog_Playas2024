



  <?php define('LUGAR', 'Turismo y Playas 2025'); ?>
  <?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define(
    'KEYWORDS_CONTENT', 
    'playas de España, playas del Cantábrico, turismo costero, turismo de playa, naturaleza y mar, costa de Cantabria, surf en España, rutas por la costa, vacaciones en la playa, turismo y naturaleza'
);
?>


<?php 
  $title = 'Playas del Cantabrico'; $lugar_minuscula= 'playas-cantabrico';
  $region_minuscula = 'cantabria';
  $localidad_minuscula = '';
  $lugar_minuscula_footer = 'Playas del Cantábrico';
  $lugar_minuscula = $lugar_minuscula_footer;
  define('COLOR_PAGE', 'orange');

  $localidad_minuscula='';

  $author_content = 'Adrián Laya García'; 
?>
<?php define('TITLE', "Turismo y Playas 2025 – Guía Costera por el Cantábrico}"); ?>
<?php define('DESCRIPTION', "Recorre la Ruta de la Costa Oriental en Ajo: senderos naturales, acantilados, faros y vistas panorámicas del Cantábrico en una experiencia inolvidable."); ?>


<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_HOME_HEAD_VARIABLES . "/meta-tags.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>



<!-- Favicons básicos -->
<link rel="icon" href="<?php echo PATH_HREF_RAIZ ?>/icono-sombrilla.ico" sizes="any">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo PATH_HREF_RAIZ ?>/icono-sombrilla.ico">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo PATH_HREF_RAIZ ?>/icono-sombrilla.ico">



<?php /*
<!-- Fallback clásico -->
<link rel="icon" href="/favicon.ico" sizes="any">

<!-- PNGs modernos -->
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo PATH_HREF_RAIZ ?>/icono-sombrilla-16.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo PATH_HREF_RAIZ ?>/icono-sombrilla-32.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo PATH_HREF_RAIZ ?>/icono-sombrilla-192.png">
<link rel="icon" type="image/png" sizes="512x512" href="<?php echo PATH_HREF_RAIZ ?>/icono-sombrilla-512.png">

*/
?>




<link rel="icon" href="<?php echo PATH_HREF_RAIZ ?>/icono-sombrilla.ico" type="image/x-icon">



<!-- Apple iOS -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

<!-- Android/Chrome -->
<link rel="icon" type="image/png" sizes="192x192" href="/favicon-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/favicon-512x512.png">

<!-- Manifest PWA -->
<link rel="manifest" href="/site.webmanifest">

<!-- Color de la barra en móviles -->
<meta name="theme-color" content="#0a5f8a">












  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title><?= $title; ?></title>
  <?php require PATH_RAIZ_BLOQUES_CONTROL . "/google-analytics.php"; ?>

  <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
</head>

<body>
    <!-- Código de AdCash (runAutoTag) -->
    <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
    <script type="text/javascript">
        aclib.runAutoTag({
            zoneId: 'mnaewnieki', // Usa el Zone ID real que te ha dado AdCash
        });
    </script>

<header class="bg-<?= COLOR_PAGE; ?>-100 text-center py-4 mt-1 text-<?= COLOR_PAGE; ?>-800 shadow-inner">
  <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight">
    Turismo y Playas 2025 – Guía Costera por el Cantábrico
  </h1>
</header>

  <main class="container my-6">
    <div class="row justify-content-center">
      <div class="w-full md:w-8/12 mx-auto max-h-[600px] overflow-y-auto overflow-x-hidden">

        <div class="w-full">
          <section class="bg-orange-50 p-6 rounded-2xl mb-6"> <?php //shadow-lg ?>
            <h2 class="text-3xl font-extrabold text-orange-800 mb-1 border-b border-orange-300 pb-2">
              Playas del Cantábrico
            </h2>

            <section class=" py-1 px-1 md:px-1 rounded-xl mb-1">
              <p class="text-left text-orange-800 text-base md:text-lg leading-relaxed md:leading-loose">
                Bienvenido a nuestro blog, donde te invitamos a explorar las 
                <span class="font-semibold text-orange-500">playas más impresionantes de la costa cantábrica</span>.<br>
                Desde extensas franjas de arena dorada y aguas cristalinas, hasta rincones tranquilos y vibrantes actividades acuáticas, aquí encontrarás toda la información que necesitas para planificar tu próxima escapada a la costa norte de España.<br>
                Navega por nuestras guías y descubre la 
                <span class="font-semibold text-orange-500">belleza natural</span> y la 
                <span class="font-semibold text-orange-500">rica gastronomía</span> de cada destino.
              </p>

              <p class="text-orange-800 text-lg leading-relaxed mt-1">
                Explora las playas más hermosas de la costa cantábrica, desde las tranquilas calas hasta las extensas playas de arena dorada y aguas claras.
              </p>
            </section>
          </section>

          <div class="row">
            <div class="col-12">
              <?php include PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/sumario-playas-cantabria.php'; ?>
              <div id="adcash-zone" style="width: 100%; text-align: center; margin: 1em 0;"></div>
            </div>
            <div class="col-12">
              <?php 
                    $region='Bizkaia'; $region_minuscula = 'bizkaia';
                    include PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/sumario-playas-bizkaia.php'; ?>
            </div>
            <div class="col-12">
              <?php 
                    $region='Gipuzkoa'; $region_minuscula = 'gipuzkoa';
                    include PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/sumario-playas-gipuzkoa.php'; ?>
            </div>
            <div class="col-12">
              <?php 
                    $region='Francia'; $region_minuscula = strtolower($localidad);
                    include PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/sumario-playas-nouvelle-aquitaine.php'; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3 d-none d-md-block">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/sidebar-playa.php'; ?>
      </div>
    </div> 
  </main>

  <?php // require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY. '/footer-generico-playa.php'; ?>


  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>

  <?php //require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>
  <?php $ruta_archivo_visitas = './bloques/control/visitas.csv'; ?>
  <?php require PATH_RAIZ_BLOQUES . "/control/control-visitas.php"; ?>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_ANUNCIOS_JS . "/anuncios-add-cash.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
</body>
</html>


<?php 
/*
ftpupload.net

FTP USERNAME
if0_38843592

USERNAME
if0_38843592 


PASSWORD
5HJqjWqYLP4k

http://playas2025.kesug.com/Blog_Playas2025/
https: //playas2025.kesug.com/Blog_Playas2025/




https://chatgpt.com/?model=auto


*/    
?>


<?php /* Para amigables URLs
    if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
        href="<?= PATH_HREF_RAIZ.'/'.$localidad_minuscula.'-'.$region_minuscula ?>"<?php
    } else { ?>
        href= <?= PATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD ."/index.php"; }?>
        class="hover:text-<?= COLOR_PAGE; ?>-600 transition-colors duration-200">
    <?= $localidad; */ 
?>

<?php /* https://proyecto-final.kesug.com/ Para copiarle*/?>
<?php /*

Las Arenas
Ereaga
Arrigunaga
Muriola,
PLentzia
Gorliz
Armintza
Aritzatxu
Laidatxu
Toña
Ea
Ogella
Isuntza
Karraspio
Arrigorri

Meter la consulta al tiempo

Barinatxe
Arriatera-Atxabiribil
Bakio
Laida
Laga











<article class="prose max-w-none">
  <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
    🧥 Las mejores chaquetas militares de Cotosen para 2025
  </h1>

  <p class="mb-4 text-gray-700">
    Si buscas <strong>chaquetas militares resistentes, cómodas y con estilo</strong>,
    Cotosen es una de las tiendas más populares para este tipo de ropa. 
    Aquí te presentamos una selección de las mejores chaquetas para este 2025, 
    ideales para <em>outdoor, montaña y uso urbano</em>.
  </p>

  <!-- Producto 1 -->
  <section class="border border-gray-200 p-4 rounded-lg mb-6 shadow-sm bg-white">
    <h2 class="text-xl font-semibold mb-2">1. Chaqueta táctica con múltiples bolsillos</h2>
    <img src="https://cdn.cotosen.com/product1.jpg" alt="Chaqueta táctica Cotosen" class="rounded-lg mb-3 shadow">
    <p class="mb-3 text-sm text-gray-600">
      Perfecta para actividades al aire libre, fabricada con materiales impermeables
      y con gran capacidad de almacenamiento en sus bolsillos.
    </p>
    <a href="https://mylead.global/stl/TU-ENLACE-AFILIADO" 
       target="_blank" 
       rel="nofollow sponsored" 
       class="inline-block px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
       🔗 Ver en Cotosen
    </a>
  </section>

  <!-- Producto 2 -->
  <section class="border border-gray-200 p-4 rounded-lg mb-6 shadow-sm bg-white">
    <h2 class="text-xl font-semibold mb-2">2. Chaqueta militar ligera de camuflaje</h2>
    <img src="https://cdn.cotosen.com/product2.jpg" alt="Chaqueta camuflaje Cotosen" class="rounded-lg mb-3 shadow">
    <p class="mb-3 text-sm text-gray-600">
      Una opción más ligera para climas templados. Su diseño de camuflaje
      la hace ideal para senderismo, airsoft o simplemente para un look urbano.
    </p>
    <a href="https://mylead.global/stl/TU-ENLACE-AFILIADO" 
       target="_blank" 
       rel="nofollow sponsored" 
       class="inline-block px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
       🔗 Comprar en Cotosen
    </a>
  </section>

  <!-- Producto 3 -->
  <section class="border border-gray-200 p-4 rounded-lg mb-6 shadow-sm bg-white">
    <h2 class="text-xl font-semibold mb-2">3. Chaqueta térmica para invierno</h2>
    <img src="https://cdn.cotosen.com/product3.jpg" alt="Chaqueta invierno Cotosen" class="rounded-lg mb-3 shadow">
    <p class="mb-3 text-sm text-gray-600">
      Diseñada para bajas temperaturas, con interior térmico y exterior
      resistente al viento. Ideal para quienes no quieren renunciar al estilo
      en invierno.
    </p>
    <a href="https://mylead.global/stl/TU-ENLACE-AFILIADO" 
       target="_blank" 
       rel="nofollow sponsored" 
       class="inline-block px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
       🔗 Ver oferta en Cotosen
    </a>
  </section>

  <p class="mt-6 text-gray-700">
    👉 Recuerda que todos los productos se envían directamente desde la tienda oficial 
    de Cotosen y puedes aprovechar descuentos especiales con tu compra online.
  </p>
</article>








*/