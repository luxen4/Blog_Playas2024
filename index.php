    <?php $title = 'Playas del Cantabrico';
    $region_minuscula = '';
    $carpeta = 'home';
    $tema_footer = 'Playas del Cantábrico';
    $tema = $tema_footer;
    $color_page = 'orange'; ?>


    <?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>

    <?php require PATH_RAIZ_HOME_HEAD_VARIABLES . "/meta-tags.php"; ?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
        <title><?= $title; ?></title>
        <?php require PATH_RAIZ_BLOQUES_CONTROL . "/google-analytics.php"; ?>

    </head>

    <body>

        <!-- Encabezado -->
        <header class="bg-<?= $color_page; ?>-100 text-center py-1 mt-0.5 text-sm text-<?= $color_page; ?>-800 shadow-inner">
            <h1 class="display-4">Descubre las Playas del Cantábrico</h1>
        </header>
<main class="container my-6">
  <div class="row justify-content-center">
    
    <!-- Contenido principal col-10 -->
<div class="col-12 col-md-8">
      <p style="text-align: left;">
        Bienvenido a nuestro blog, donde te invitamos a explorar las playas más impresionantes de la costa cantábrica. <br>
        Desde extensas franjas de arena dorada y aguas cristalinas, hasta rincones tranquilos y vibrantes actividades acuáticas,
        aquí encontrarás toda la información que necesitas para planificar tu próxima escapada a la costa norte de España.
        Navega por nuestras guías y descubre la belleza natural y la rica gastronomía de cada destino.
      </p>

      <div class="row">
        <div class="col-12">
          <?php include PATH_RAIZ_LOCALIDADES . '/cantabria/sumario-playas-cantabria.php'; ?>

          <!-- Contenedor para anuncios -->
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

<!-- Sidebar de anuncios solo visible en MD en adelante -->
<div class="col-12 col-md-4 d-none d-md-block" style="border: solid 1px black;">
  <aside class="sticky-top" style="top: 4rem; max-height: calc(100vh - 4rem); overflow-y: auto;">
    <!-- Contenido del sidebar -->
    <div class="mb-4 px-2">
      <p class="text-sm text-muted">Publicidad</p>
      <div style="width: 100%; text-align: center;">

        <!-- ✅ Ejemplo de producto Amazon -->
        <?php
        $href = "https://www.amazon.es/Irevial-Cuadros-Franela-Boyfriend-Bolsillo/dp/B09QKHXFX7?tag=adrian8204-21";
        $src = "https://m.media-amazon.com/images/I/71GrO7q8jhL._AC_SX569_.jpg";
        $alt = "Camisa cuadros mujer";
        $nombre_producto = "Irevial Camisa Manga Larga Mujer Oficina Elegante";
        $price = "";
        require PATH_RAIZ_BLOQUES . '/anuncios_derecha.php';
        ?>

        <!-- Otro anuncio -->
        <?php require PATH_RAIZ_BLOQUES . '/anuncios_derecha_1item.php'; ?>

        <?php
        $href = "https://amzn.to/3XkGL8G";
        $src = "https://m.media-amazon.com/images/I/914XCovYMuL._AC_SX625_.jpg";
        $alt = "Bolso mujer gris";
        $nombre_producto = "Tom Tailor lari, Bolsa para Mujer";
        $price = "44,79€";
        require PATH_RAIZ_BLOQUES . '/anuncios_derecha.php';
        ?>

        <!-- Script Adcash -->
        <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
        <script type="text/javascript">
          aclib.runAutoTag({
            zoneId: 'qfow4eeyo8',
          });
        </script>
      </div>
    </div>
  </aside>
</div>


  </div>
</main>

        <!-- Footer -->
        <footer class="bg-<?= $color_page; ?>-100 text-center py-2 mt-12 text-sm text-<?= $color_page; ?>-800 shadow-inner">
            <p class="font-semibold text-lg"><?= $tema_footer; ?></p>
            <p>&copy; <?= NAME_BLOG; ?> – <?= AUTHOR; ?></p>
        </footer>

        <?php //require './bloques/estructura/paginas-generico/footer.php'; ?>



        <?php require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>

        <?php $ruta_archivo_visitas = './bloques/control/visitas.csv'; ?> <?php  //<!-- Registro de visitas --> 
                                                                            ?>
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
    https: //playas2024.kesug.com/Blog_Playas2025/
    ?>