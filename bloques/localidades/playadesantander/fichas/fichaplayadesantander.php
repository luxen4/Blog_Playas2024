<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Santander</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php
    $src = './../../../../mifoto.png';
    include_once './../../../../bloques/estructura/barra_navegacion2.php'; ?>

    <!-- Encabezado -->
    <header class="container my-5">
        <h1 class="text-center">Playa del Sardinero, Santander</h1>
        <p class="text-center">La Playa de Santander es una de las playas más populares del norte de España, ubicada en la ciudad de Santander, Cantabria. Con su amplia franja de arena dorada y vistas impresionantes de la bahía, ofrece un espacio ideal para relajarse, practicar deportes acuáticos y disfrutar de un ambiente vibrante.</p>
        <p class="text-center">La Playa del Sardinero es una de las más icónicas y visitadas de Santander, ubicada en la región de Cantabria, en el norte de España. Este extenso arenal, dividido en dos secciones conocidas como Primera y Segunda Playa del Sardinero, se extiende a lo largo de la costa atlántica y es un lugar popular tanto para locales como para turistas.</p>
        <p class="text-center">Con su arena fina y dorada, y sus aguas limpias y cristalinas, la Playa del Sardinero es ideal para disfrutar de un día de sol y mar. Además, está rodeada de un impresionante paisaje, con vistas al mar Cantábrico y al majestuoso Palacio de la Magdalena, que domina la península cercana.</p>
    </header>
    <?php $page = 'playadesantander'; ?>
    <?php include_once './../../../../bloques/estructura/barra_navegacion2.php'; ?>
    <?php include_once './../../../../bloques/estructura/anuncios/carga_productos.php'; ?>

    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../../../bloques/estructura/'); ?>



    <hr><?php
        $articulo = 'shirts';
        $grupo = '_2';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
    <hr>

    <!-- Descripción -->
    <section class="container my-5">
        <p>La Playa de Santander se extiende a lo largo de la ciudad, proporcionando un acceso fácil y conveniente a todos sus visitantes. Con más de 1.5 kilómetros de longitud, la playa es perfecta tanto para tomar el sol como para disfrutar de una variedad de actividades recreativas. Las aguas son ideales para nadar y practicar surf, mientras que el paseo marítimo está repleto de bares, restaurantes y tiendas que añaden un toque urbano al entorno costero.</p>
        <p>Además de su belleza natural, la Playa de Santander cuenta con un entorno urbano vibrante y diversas instalaciones como áreas de juegos para niños y alquiler de equipos para deportes acuáticos. La playa también es conocida por sus eventos y festivales durante el verano, que atraen a locales y turistas por igual.</p>
    </section>


    <!-- Servicios y Actividades -->
    <section class="container my-5">
        <h2>Servicios y Actividades</h2>
        <ul>
            <li>
                <strong>Chiringuitos y Restaurantes:</strong> A lo largo del paseo marítimo que bordea la Playa del Sardinero, encontrarás numerosos chiringuitos, cafeterías y restaurantes que ofrecen una variedad de platos, desde tapas tradicionales hasta mariscos frescos. Es un lugar ideal para relajarse con una bebida fría mientras disfrutas de las vistas al mar.
            </li>
            <li>
                <strong>Alquiler de Equipos:</strong> En la playa, hay puntos de alquiler de equipos para deportes acuáticos como el surf, el windsurf y el paddle surf. También se ofrecen clases para quienes desean aprender o mejorar sus habilidades en estos deportes.
            </li>
            <li>
                <strong>Zonas de Juegos:</strong> La Playa del Sardinero cuenta con varias áreas de juegos infantiles, donde los más pequeños pueden disfrutar mientras los adultos se relajan cerca. Estas zonas están diseñadas para la seguridad y diversión de los niños.
            </li>
            <li>
                <strong>Zonas Deportivas:</strong> Además de los deportes acuáticos, la playa está equipada con canchas para practicar voleibol de playa. Durante el verano, se organizan torneos y actividades deportivas, lo que añade un ambiente vibrante al lugar.
            </li>
            <li>
                <strong>Seguridad y Salvamento:</strong> Durante la temporada alta, la Playa del Sardinero está vigilada por socorristas que garantizan la seguridad de todos los bañistas. También hay servicios de primeros auxilios disponibles en caso de emergencia.
            </li>
            <hr><?php
                $articulo = 'shorts';
                $grupo = '_2';
                include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
            <hr>
            <li>
                <strong>Accesibilidad:</strong> La playa está adaptada para personas con movilidad reducida, con rampas de acceso y sillas anfibias disponibles para garantizar que todos puedan disfrutar del mar de manera segura y cómoda.
            </li>
            <li>
                <strong>Paseo Marítimo:</strong> El paseo marítimo del Sardinero es uno de los más bellos de Santander, ideal para pasear, correr o simplemente disfrutar de las vistas. A lo largo del paseo, se pueden encontrar jardines, bancos y zonas de sombra para descansar.
            </li>
            <li>
                <strong>Eventos y Fiestas:</strong> Durante el verano, la Playa del Sardinero es el escenario de numerosos eventos, incluyendo conciertos, festivales y fuegos artificiales, que atraen a multitud de personas y crean un ambiente festivo.
            </li>
            <li>
                <strong>Aparcamiento:</strong> La playa cuenta con varios aparcamientos cercanos, tanto gratuitos como de pago, lo que facilita el acceso a los visitantes que llegan en coche.
            </li>
            <hr><?php
                $articulo = 'sneakers';
                $grupo = '_2';
                include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
            <hr>
        </ul>
    </section>

    <!-- Galería de imágenes, hacerlo genérico-->
    <section class="gallery container my-5">
        <h2 class="text-center">Galería de Imágenes</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="./../../../../bloques/localidades/playadesantander/img/playadesantander1.jpg" alt="Playa de Santander 1">
            </div>
            <div class="col-md-4">
                <img src="./../../../../bloques/localidades/playadesantander/img/playadesantander2.jpg" alt="Playa de Santander 2">
            </div>
            <div class="col-md-4">
                <img src="./../../../../bloques/localidades/playadesantander/img/playadesantander3.jpg" alt="Playa de Santander 3">
            </div>
        </div>
    </section>

    <!-- Mapa de ubicación -->
    <section class="map container my-5">
        <h2 class="text-center">Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2983.905929488219!2d-3.789331184643264!3d43.46346367913422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd49b1b530c59cf3%3A0x76447374e1b3173!2sPlaya%20de%20Santander!5e0!3m2!1ses!2ses!4v1632922890284!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
    </section>


    <hr><?php
                $articulo = 'swimsuits_woman';
                $grupo = '_2';
                include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
            <hr>



    <!-- Conclusión -->
    <section class="container my-5">
        <p>
            La Playa del Sardinero en Santander es mucho más que un simple lugar para tomar el sol; es un destino lleno de vida, con una amplia gama de servicios y actividades para todas las edades. Ya sea para disfrutar de un día en familia, practicar deportes acuáticos o simplemente relajarse, la Playa del Sardinero es el lugar perfecto para una experiencia inolvidable en la costa cantábrica.
        </p>
    </section>

    <hr><?php
        $articulo = 'sandals_man';
        $grupo = '_2';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
    <hr>



    <footer>
        <?php require './../../../../bloques/estructura/footer.php'; ?>
    </footer>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>



<style>
    .custom-carousel-image {
        width: 100%;
        height: auto;
    }

    .gallery img {
        width: 100%;
        height: auto;
        margin-bottom: 15px;
    }

    .map {
        margin-top: 30px;
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
        "swimsuits_woman" => 2,
        "sneakers" => 2,
        "shorts" => 2,
        "sandals_man" => 2
    ];

    // Call the function with the total number of images and categories
    generateImageConstants(4, $categories);
    ?>



    const images_shirts_lateral_1_1 = <?php echo json_encode($images_shirts_lateral_1_1); ?>


    let currentIndex = {};

    // Función para agregar propiedades al objeto con un patrón definido
    function addProperties(baseName, groupRange, count) {
        for (let i = 1; i <= count; i++) {
            currentIndex[`${baseName}_${groupRange}_${i}`] = 0;
        }
    }

    // Definir las bases y rangos de grupos
    const definitions = [{
            baseName: 'shirts',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'shorts',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'sneakers',
            groupRange: 2,
            count: 4
        },

        {
            baseName: 'swimsuits_woman',
            groupRange: 2,
            count: 4
        },

{
    baseName: 'sandals_man',
    groupRange: 2,
    count: 4
}
    ];

    // Agregar las propiedades usando la función definida
    definitions.forEach(def => addProperties(def.baseName, def.groupRange, def.count));




    function prueba(image_link, image, cte, indexKey) {
        currentIndex[indexKey] = (currentIndex[indexKey] + 1) % cte.length;
        document.getElementById(image_link).href = cte[currentIndex[indexKey]].href;
        document.getElementById(image).src = cte[currentIndex[indexKey]].src;
        document.getElementById(image).alt = cte[currentIndex[indexKey]].alt;
    }


    function changeImages() {


        <?php
        $articulo = "shirts";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>


        <?php
        $articulo = "shorts";
        $images = ["images_{$articulo}_3_1", "images_{$articulo}_3_2", "images_{$articulo}_3_3", "images_{$articulo}_3_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_3_$i', 'image_{$articulo}_3_$i', {$images[$i - 1]}, '{$articulo}_3_$i');\n";
        } ?>

        <?php
        $articulo = "sneakers";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>


        <?php
        $articulo = "swimsuits_woman";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

        <?php // Problemas
        $articulo = "sandals_man";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>




    }

    setInterval(changeImages, 4000);
</script>