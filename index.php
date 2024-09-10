<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="O4CyyseatW1WkLbzw9poeIPyF27Eik_tDlqrO0ank4o"/>
    <title>Los Viajes de Adrián</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    $page = 'home';    
    $href_lugar = './';?>

    

    <?php // include_once './bloques/estructura/barra_navegacion2.php'; ?>
    <?php include_once './bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/bloques/estructura/'); ?>

    <!-- Header de Introducción -->
    <header class="bg-primary text-white text-center py-5">
        <h1 class="display-4">Explora las Mejores Playas</h1>
        <p class="lead">Bienvenido a nuestro blog dedicado a las playas más hermosas y emocionantes. Desde arenas doradas y aguas cristalinas hasta vibrantes actividades y tranquilos rincones para relajarte, aquí encontrarás todo lo que necesitas saber para planificar tu próxima escapada costera. Navega por nuestras guías y descubre los secretos mejor guardados de los destinos playeros alrededor del mundo.</p>
        <a href="#explorar" class="btn btn-light btn-lg mt-3">Explora Ahora</a>
    </header>
    
    <div id="#" class="container">
        <?php include 'bloques/localidades/cantabria/cantabria.php'; ?>
        <?php include 'bloques/localidades/vizcaya/vizcaya.php'; ?>
        <?php include 'bloques/localidades/guipuzkoa/guipuzkoa.php'; ?>
        <?php include 'bloques/localidades/francia/francia.php'; ?>
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

<!-- adcash -->
<script type="text/javascript">
    aclib.runAutoTag({
        zoneId: 'ctwlmuaot0',
    });
</script>