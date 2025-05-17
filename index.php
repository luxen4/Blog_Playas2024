<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="O4CyyseatW1WkLbzw9poeIPyF27Eik_tDlqrO0ank4o"/>
    <title>Los Viajes de Adrián</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>




<!-- Cargar la librería principal de Adcash -->
<script src="https://static.adcash.com/js/aclib.js" async></script>

<!-- (Opcional) Script adicional desde Adcash si es requerido -->
<?php require "./bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>

<!-- Script de configuración -->
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        if (typeof aclib !== "undefined") {
            aclib.runAutoTag({
                zoneId: 'x2xz7dfrur'
            });
            console.log('Adcash script loaded successfully!');
        } else {
            console.warn('Adcash library (aclib) not loaded.');
        }
    });
</script>





</head>

<body>

    <?php
    $page = 'home';    
    $href_lugar = './';?>

    

    <?php // include_once './bloques/estructura/barra_navegacion2.php'; ?>
    <?php // NOCONESTO include_once './bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/bloques/estructura/'); ?>

    <!-- Header de Introducción -->
    <header class="bg-primary text-white text-center py-5">
        <h1 class="display-4">Descubre las Playas del Cantábrico</h1>
    </header>



    
    <div class="container">
        <p style="text-align: center;">
                Bienvenido a nuestro blog, donde te invitamos a explorar las playas más impresionantes de la costa cantábrica. <br>
                Desde extensas franjas de arena dorada y aguas cristalinas, hasta rincones tranquilos y vibrantes actividades acuáticas,
                Aquí encontrarás toda la información que necesitas para planificar tu próxima escapada a la costa norte de España.
                Navega por nuestras guías y descubre la belleza natural y la rica gastronomía de cada destino.
            </p>
        <div class="row">
            <div class="">
                <?php include './localidades/cantabria/cantabria.php'; ?>

                  <!-- Contenedor donde se inyectará el anuncio -->
                <div id="adcash-zone" style="width: 100%; text-align: center; margin: 1em 0;"></div>


            </div>
            <div class="">
                <?php //include './localidades/vizcaya/vizcaya.php'; ?>
            </div>
            <div class="">
                <?php //include './localidades/guipuzkoa/guipuzkoa.php'; ?>
            </div>
            <div class="">
                <?php //include './localidades/francia/francia.php'; ?>
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


<?php require './bloques/estructura/anuncios/js/logica_anuncios.php'; ?>
<?php require './bloques/estructura/js_bootstrap/scripts-bootstrap.php'; ?>





</body>

</html>     

