
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="O4CyyseatW1WkLbzw9poeIPyF27Eik_tDlqrO0ank4o"/>
    <meta name="seobility" content="6fdc72f26c4563f937e32ff3def5f9d5">

    <title>Los Viajes de Adrián</title>
    
    <?php // Variables para la página de actividades, NO TOCAR, ya que hay variables que dan error ?>
    <?php define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT']) . '/Blog_Playas2024'); ?>
    <?php define('PATH_RAIZ_BLOQUES', PATH_RAIZ. '/bloques'); ?>
    <?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA', PATH_RAIZ_BLOQUES. '/estructura'); ?>
    <?php define('PATH_BLOQUES_SECTIONS_GENERICO',  PATH_RAIZ_BLOQUES_ESTRUCTURA. '/sections_generico'); ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/link_paginas_secundariass_head_actividades.php"; ?>

</head>

<body>
    <?php //define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2024'); ?>
    <?php //require PATH_RAIZ. "/anuncios/pop-up-publicitario.php"; ?>
    <?php //require PATH_RAIZ. "/anuncios/pop-up-publicitario2.php"; ?>


    <?php //$page = 'home'; $href_lugar = './';?>

    <?php // include_once './bloques/estructura/barra_navegacion2.php'; ?>
    <?php // NOCONESTO include_once './bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php // define('BASE_PATH_ESTRUCTURA', __DIR__ . '/bloques/estructura/'); ?>

    <!-- Header de Introducción -->
    <header class="bg-primary text-white text-center py-1">
        <h1 class="display-4">Descubre las Playas del Cantábrico</h1>
    </header>

    

    <div class="container">
        <p style="text-align: left;">
                Bienvenido a nuestro blog, donde te invitamos a explorar las playas más impresionantes de la costa cantábrica. <br>
                Desde extensas franjas de arena dorada y aguas cristalinas, hasta rincones tranquilos y vibrantes actividades acuáticas,
                Aquí encontrarás toda la información que necesitas para planificar tu próxima escapada a la costa norte de España.
                Navega por nuestras guías y descubre la belleza natural y la rica gastronomía de cada destino.
            </p>
        <div class="row">
            <div class="">
                <?php include './localidades/cantabria/sumario-playas-cantabria.php'; ?>

                  <!-- Contenedor donde se inyectará el anuncio -->
                <div id="adcash-zone" style="width: 100%; text-align: center; margin: 1em 0;"></div>


            </div>
            <div class="">
                <?php //include './localidades/vizcaya/sumario-playas-vizcaya.php'; ?>
            </div>
            <div class="">
                <?php //include './localidades/gipuzkoa/sumario-playas-gipuzkoa.php'; ?>
            </div>
            <div class="">
                <?php include './localidades/francia/sumario-playas-francia.php'; ?>
            </div>
        </div>
    </div>


    <div id="#" class="col-xl-2 text-center col-lg-3 col-md-12 col-sm-12 col-12">
        <?php //require './bloques/anuncios_derecha0.php' ?>
    </div>



    <?php //<iframe src="scripts.html"></iframe> ?>

</main>

<!-- Footer -->
<?php require './bloques/estructura/footer.php'; ?>

<?php  require  PATH_RAIZ. "/anuncios/pop-up-publicitario2.php"; ?>
<?php  require './bloques/estructura/anuncios/js/logica_anuncios.php'; ?>
<?php  require './bloques/estructura/js_bootstrap/scripts-bootstrap.php'; ?>



<!-- (Opcional) Script adicional desde Adcash si es requerido -->
<?php 
/*

require "./bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>

<script  src="https://static.adcash.com/js/aclib.js" async></script><!-- Cargar la librería oficial de Adcash -->

<!-- Ejecutar Adcash una vez cargado -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Espera a que aclib esté disponible
        function tryRunAdcash(retries = 5) {
            if (typeof aclib !== "undefined") {
                aclib.runAutoTag({
                    zoneId: 'x2xz7dfrur'
                });
                console.log('Adcash script loaded successfully!'); 
            } else if (retries > 0) {
                setTimeout(() => tryRunAdcash(retries - 1), 300); // Reintenta hasta 5 veces
            } else {
                console.warn('Adcash library (aclib) not loaded.');
              
            }
        }

        tryRunAdcash();
    });
</script>*/?>
</body>

</html>     

<?php /*
ftpupload.net

FTP USERNAME
if0_38843592

USERNAME
if0_38843592 


PASSWORD
5HJqjWqYLP4k  */?>
