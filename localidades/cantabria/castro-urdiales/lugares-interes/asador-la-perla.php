<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asador La Perla - Castro Urdiales</title>

    <?php // Variables para la página de la Playa de Ostende 
    ?>
    <?php $region_minuscula = 'cantabria';
    $carpeta = 'castro-urdiales';
    $tema = 'asdor-la-perla'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php"; ?>
    <?php //require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/localizacion-playa.php"; 
    ?>

    <?php
    // Variables para las etiquetas meta y SEO
    $site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Ostende si se utiliza para verificación
    $description_content = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
    $keywords_content = 'Playa de Ostende, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Ostende';


    //require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/grupo1/index.php"; 

    require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/stylesheets.php"; ?>

    <!--Hoja de estilos-->
    <link rel="stylesheet" href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>/css/styles.css">



    <style>

    </style>
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-4 text-primary">Asador La Perla</h1>

        <p><strong>Asador La Perla</strong> es un restaurante emblemático en Castro Urdiales. Conocido por su ambiente acogedor y su excelente cocina, este asador es una parada obligatoria para quienes visitan la región.</p>

        <p>Se encuentra en una ubicación privilegiada, ofreciendo vistas espectaculares al mar y fácil acceso desde el centro de la ciudad.</p>

        <p>Es famoso por sus platos a la parrilla, especialmente sus carnes y pescados frescos. Algunos de los platos más destacados incluyen <strong>Chuletas de cordero, Solomillo de ternera, Merluza a la brasa</strong> y <strong>Parrillada de mariscos</strong>.</p>

        <p>Ofrece un ambiente cálido y tradicional, con una decoración que refleja el carácter y la cultura de la región.<br>
            Su acogedor interior y su terraza con vistas al mar lo convierten en un lugar perfecto para disfrutar de una comida en cualquier época del año.</p>

        <div class="row my-4">
            <div class="col-md-4">



                <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/asadorlaperla1.jpg" alt="Imagen del Asador La Perla" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/contribution_gallery.jpg" alt="Plato de sardinas en el asador La Perla" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/parrillas2-kJFE-U806794120254DD-624x422@El Correo.jpg" alt="Parrillada en el restaurante" class="gallery-img">
            </div>
            <p class="text-center text-muted">Algunas de las imágenes del Asador La Perla</p>
        </div>

        <p>Entre los servicios que ofrece se incluyen:
            <strong>Reservas previas, Menú del día y a la carta, Opciones para eventos y celebraciones, Atención personalizada.</strong>
        </p>

        <h5 class="mt-4">🕒 Horario</h5>
        <ul>
            <li>Lunes a Viernes: 13:00 - 16:00 y 20:00 - 23:00</li>
            <li>Sábados y Domingos: 13:00 - 23:00 (horario continuo)</li>
        </ul>

        <p class="mt-4">Si buscas una experiencia culinaria memorable en Castro Urdiales, el Asador La Perla es el lugar ideal. ¡No te lo pierdas!</p>



        <a href="<?= PATH_HREF_RAIZ_LOCALIDAD ?>/index.php" class="btn btn-outline-primary mt-3">← Volver a lugares de interés</a>
    </div>

    <footer class="text-center">
        <p>&copy; <?= date('Y') ?> Castro Urdiales Turismo - Asador La Perla</p>
    </footer>



    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/anuncios/js/logica_anuncios.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>



</body>

</html>