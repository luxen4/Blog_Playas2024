<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="O4CyyseatW1WkLbzw9poeIPyF27Eik_tDlqrO0ank4o" />
    <meta name="seobility" content="6fdc72f26c4563f937e32ff3def5f9d5">
    <meta name="description" content="Explora las playas del Cantábrico con Los Viajes de Adrián. Guías, actividades, fotos y consejos para tus escapadas al norte de España.">

    <title>Los Viajes de Adrián</title>

    <?php
    // Rutas base del proyecto
    define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT']) . '/Blog_Playas2024');
    define('PATH_RAIZ_BLOQUES', PATH_RAIZ . '/bloques');
    define('PATH_RAIZ_BLOQUES_ESTRUCTURA', PATH_RAIZ_BLOQUES . '/estructura');
    define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD', PATH_RAIZ_BLOQUES_ESTRUCTURA . '/paginas-secundarias/head');
    define('PATH_BLOQUES_SECTIONS_GENERICO', PATH_RAIZ_BLOQUES_ESTRUCTURA . '/sections_generico');

    require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD . "/links-generico.php";
    ?>
</head>

<body>

    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-1">
        <h1 class="display-4">Descubre las Playas del Cantábrico</h1>
    </header>

    <div class="container my-4">
        <p style="text-align: left;">
            Bienvenido a nuestro blog, donde te invitamos a explorar las playas más impresionantes de la costa cantábrica. <br>
            Desde extensas franjas de arena dorada y aguas cristalinas, hasta rincones tranquilos y vibrantes actividades acuáticas,
            aquí encontrarás toda la información que necesitas para planificar tu próxima escapada a la costa norte de España.
            Navega por nuestras guías y descubre la belleza natural y la rica gastronomía de cada destino.
        </p>

        <div class="row">
            <div class="col-12">
                <?php include './localidades/cantabria/sumario-playas-cantabria.php'; ?>

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
                <?php include './localidades/francia/sumario-playas-francia.php'; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require './bloques/estructura/paginas-generico/footer.php'; ?>

    <!-- Scripts -->
    <?php require PATH_RAIZ . "/anuncios/pop-up-publicitario2.php"; ?>
    <?php require './bloques/estructura/anuncios/js/logica_anuncios.php'; ?>
    <?php require './bloques/estructura/js_bootstrap/scripts-bootstrap.php'; ?>

    <!-- Registro de visitas -->
    <?php
    $ruta_archivo_visitas = './bloques/control/visitas.csv';
    require PATH_RAIZ_BLOQUES . "/control/control-visitas.php";
    ?>

    <!-- Estilo opcional para fondo -->
    <style>
        body {
            background-image: url('./arenaplaya.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
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

