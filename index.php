<?php 
  $title = 'Playas del Cantabrico';
  $region_minuscula = '';
  $carpeta = 'home';
  $tema_footer = 'Playas del Cantábrico';
  $tema = $tema_footer;
  $color_page = 'orange';
  $name_blog = 'Blog Playas 2025'; 
  $author_content = 'Adrián Laya García'; 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_HOME_HEAD_VARIABLES . "/meta-tags.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
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

<header class="bg-<?= $color_page; ?>-100 text-center py-4 mt-1 text-<?= $color_page; ?>-800 shadow-inner">
  <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight">
    Blog Playas 2025
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
              <?php include PATH_RAIZ_LOCALIDADES . '/cantabria/sumario-playas-cantabria.php'; ?>
              <div id="adcash-zone" style="width: 100%; text-align: center; margin: 1em 0;"></div>
            </div>
            <div class="col-12">
              <?php //include './localidades/vizcaya/sumario-playas-vizcaya.php'; ?>
            </div>
            <div class="col-12">
              <?php //include './localidades/gipuzkoa/sumario-playas-gipuzkoa.php'; ?>
            </div>
            <div class="col-12">
              <?php /*include './localidades/francia/sumario-playas-francia.php'; */ ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3 d-none d-md-block">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/sidebar-playa.php'; ?>
      </div>
    </div> <!-- Cierre de .row justify-content-center -->
  </main>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY. '/footer-generico-playa.php'; ?>
  <?php require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>

  <?php $ruta_archivo_visitas = './bloques/control/visitas.csv'; ?>
  <?php require PATH_RAIZ_BLOQUES . "/control/control-visitas.php"; ?>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_ANUNCIOS_JS . "/anuncios-add-cash.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
</body>
</html>



    <?php /*
ftpupload.net

FTP USERNAME
if0_38843592

USERNAME
if0_38843592 


PASSWORD
5HJqjWqYLP4k  

http://playas2025.kesug.com/Blog_Playas2025/*/
    https: //playas2025.kesug.com/Blog_Playas2025/
    ?>