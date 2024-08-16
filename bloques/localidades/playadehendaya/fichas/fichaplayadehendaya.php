<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Hendaya</title>
    <!-- Enlace al CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php 
    $page = 'playadehendaya';
    $ruta = './../../../../bloques/estructura';
    include './../../../../bloques/estructura/basico.php'; ?>


    <div id="#" class="container">
        <div class="row">
            <!--<iframe src="./../../../../ads_terra/468px-60px.html"></iframe>-->


            <div id="#" class="col-xl-10 text-center col-lg-10 col-md-10 col-sm-12 col-12">

            </div>
        </div>
    </div>


    <!-- Encabezado -->
    <header class="text-center my-5">
        <h1>Playa de Hendaya</h1>
        <p class="lead">Descubre la encantadora Playa de Hendaya, un paraíso costero en el País Vasco francés.</p>
    </header>

    <!-- Descripción de la Playa -->
    <section class="container my-5">
        <h2>Descripción</h2>
        <p>
            La Playa de Hendaya es una extensa franja de arena dorada que se extiende a lo largo de la costa del País Vasco francés, ofreciendo vistas impresionantes del océano Atlántico y de la costa española en el horizonte. Con una longitud de más de 3 kilómetros, esta playa es conocida por sus aguas tranquilas y limpias, ideales para nadar y practicar deportes acuáticos como el surf y el paddle surf.
        </p>
        <p>
            Rodeada de un hermoso paseo marítimo y un vibrante centro turístico, Hendaya ofrece una amplia gama de servicios y actividades para toda la familia. Desde chiringuitos y restaurantes hasta zonas de juegos y deportes, la playa es un destino perfecto para disfrutar de un día completo al aire libre. Además, el entorno natural que rodea la playa es ideal para quienes desean explorar la belleza de la costa vasca.
        </p>
    </section>

        
    <hr><?php
    $articulo = 'shirts'; $grupo = '_2';
    include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?><hr>

    <hr><?php
    $articulo = 'shorts'; $grupo = '_2';
    include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?><hr>




    <!-- Servicios y Actividades -->
    <section class="container my-5">
        <h2>Servicios y Actividades</h2>
        <ul>
            <li>
                <strong>Chiringuitos y Restaurantes:</strong> La playa cuenta con varios chiringuitos y restaurantes a lo largo del paseo marítimo, donde se pueden disfrutar desde platos locales hasta cocina internacional. Es el lugar perfecto para degustar mariscos frescos y platos tradicionales del País Vasco, mientras se disfruta de vistas al mar.
            </li>


            <li>
                <strong>Alquiler de Equipos:</strong> Hay varios puntos de alquiler de equipos deportivos a lo largo de la playa, donde puedes rentar tablas de surf, paddle surf, kayaks y bicicletas. También se ofrecen clases para principiantes y avanzados en surf y otros deportes acuáticos.
            </li>
            <li>
                <strong>Zonas de Juegos:</strong> Para las familias, la playa ofrece áreas de juegos infantiles bien equipadas. Estas zonas son seguras y están ubicadas cerca de los servicios básicos como baños y duchas.
            </li>
            <li>
                <strong>Zonas Deportivas:</strong> Además del surf, la Playa de Hendaya cuenta con instalaciones para practicar voleibol de playa y fútbol. También se organizan torneos y eventos deportivos durante la temporada alta.
            </li>
            <li>
                <strong>Seguridad y Salvamento:</strong> Durante la temporada alta, la playa está vigilada por socorristas, lo que garantiza un entorno seguro para nadar y disfrutar del mar.
            </li>
            <li>
                <strong>Accesibilidad:</strong> La playa está equipada con accesos para personas con movilidad reducida, incluyendo rampas y sillas anfibias, lo que la convierte en un destino inclusivo.
            </li>

            <li>
                <strong>Paseo Marítimo:</strong> El hermoso paseo marítimo que rodea la playa es ideal para caminar, correr o simplemente disfrutar de las vistas. A lo largo del paseo, encontrarás bancos y zonas sombreadas, perfectas para relajarse.
            </li>
            <li>
                <strong>Mercadillos y Ferias:</strong> Durante el verano, se organizan mercadillos y ferias a lo largo del paseo, donde se pueden encontrar artesanías locales, productos frescos y recuerdos.
            </li>
            <li>
                <strong>Excursiones y Rutas:</strong> La Playa de Hendaya es también el punto de partida ideal para explorar la región. Hay varias rutas de senderismo cercanas que ofrecen vistas espectaculares de la costa y las montañas circundantes. Además, es posible realizar excursiones en barco para explorar la bahía y la costa cercana.
            </li>
            <li>
                <strong>Aparcamiento:</strong> La playa dispone de varios aparcamientos cercanos, algunos de ellos gratuitos y otros de pago, que facilitan el acceso a los visitantes.
            </li>
        </ul>
    </section>

    <!-- Galería de Imágenes -->
    <section class="container my-5">
        <h2>Galería de Imágenes</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./../../../../bloques/localidades/playadehendaya/img/playadehendaya1.jpg" class="d-block w-100 custom-carousel-image" alt="Playa de Hendaya 1">
                </div>
                <div class="carousel-item">
                    <img src="./../../../../bloques/localidades/playadehendaya/img/playadehendaya2.jpg" class="d-block w-100 custom-carousel-image" alt="Playa de Hendaya 2">
                </div>
                <div class="carousel-item">
                    <img src="./../../../../bloques/localidades/playadehendaya/img/playadehendaya3.jpg" class="d-block w-100 custom-carousel-image" alt="Playa de Hendaya 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </section>


    <!-- Conclusión -->
    <section class="container my-5">
        <p>
            La Playa de Hendaya no solo es un paraíso natural, sino también un destino completo que ofrece una amplia variedad de servicios y actividades para todos los gustos. Ya sea que busques un día relajado en la playa, una aventura deportiva o una experiencia cultural, Hendaya tiene algo para todos.
        </p>
    </section>





    <!-- Mapa de Ubicación -->
    <section class="map container my-5">
        <h2>Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.826156279471!2d-1.7787072845505665!3d43.33662127913719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4f678e2f6835b1%3A0x8f77db1a89c5da4!2sPlaya%20de%20Hendaya!5e0!3m2!1ses!2ses!4v1689350134823!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
    </section>


    <footer>
        <?php require './../../../../bloques/estructura/footer.php'; ?>
    </footer>


    <?php
    // include_once './../js/logica_anuncios.php'; 
    // include_once './../../../../bloques/localidades/castrourdiales/js/logica_anuncios.php'; 
    ?>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<style>
    /* Estilos para pantallas móviles */
    @media only screen and (max-width: 768px) {
        h1 {
            font-size: 1.17em;
            /* Tamaño similar a h3 */
            font-weight: normal;
        }

        h2 {
            font-size: 1.1em;
            /* Disminuye el tamaño del h2 */
            font-weight: normal;
        }

        h3 {
            font-size: 1em;
            /* Disminuye el tamaño del h3 */
            font-weight: normal;
        }

        h4 {
            font-size: 0.9em;
            /* Disminuye el tamaño del h4 */
            font-weight: normal;
        }

        h5 {
            font-size: 0.8em;
            /* Disminuye el tamaño del h5 */
            font-weight: normal;
        }

        p {
            font-size: 0.9em;
            /* Disminuye el tamaño del párrafo */
        }

        .lead {
            font-size: 1em;
            /* Tamaño similar a h3 */
        }

    }
</style>




<script>
    <?php
    function generateImageConstants($total_images, $categories)
    {
        foreach ($categories as $category => $group) {
            for ($i = 1; $i <= $total_images; $i++) {
                $variable_name = "{$category}_{$group}_{$i}";
                if (isset($GLOBALS["images_" . $variable_name])) {
                    echo "const images_{$variable_name} = " . json_encode($GLOBALS["images_" . $variable_name]) . ";\n";
                } else {
                    echo "const images_{$variable_name} = [];\n";
                }
            }
        }
    }

    // Define categories and their respective groups
    $categories = [
        "shirts" => 2,
        "shorts" => 2
    ];

    // Call the function with the total number of images and categories
    generateImageConstants(4, $categories);
    ?>

    // Initialize currentIndex for each image set
    let currentIndex = {};

    // Function to add properties to the currentIndex object based on a pattern
    function addProperties(baseName, groupRange, count) {
        for (let i = 1; i <= count; i++) {
            currentIndex[`${baseName}_${groupRange}_${i}`] = 0;
        }
    }

    // Define the bases and group ranges
    const definitions = [
        { baseName: 'shirts', groupRange: 2, count: 4 },
        { baseName: 'shorts', groupRange: 2, count: 4 }
    ];

    // Add properties to currentIndex using the defined bases and ranges
    definitions.forEach(def => addProperties(def.baseName, def.groupRange, def.count));

    // Function to update carousel images
    function updateCarouselImage(imageLinkId, imageId, imageArray, indexKey) {
        currentIndex[indexKey] = (currentIndex[indexKey] + 1) % imageArray.length;
        document.getElementById(imageLinkId).href = imageArray[currentIndex[indexKey]].href;
        document.getElementById(imageId).src = imageArray[currentIndex[indexKey]].src;
        document.getElementById(imageId).alt = imageArray[currentIndex[indexKey]].alt;
    }

    // Function to change images in the carousel
    function changeImages() {
        <?php
        $articulo = "shirts";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "updateCarouselImage('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } 

        $articulo = "shorts";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "updateCarouselImage('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } 



        ?>
    }

    // Set interval for changing images
    setInterval(changeImages, 4000);
</script>
