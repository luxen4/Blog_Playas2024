<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Laredo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Encabezado de la Playa de Laredo 
    <header class="bg-primary text-white text-center py-1">
        <h1>Playa de Laredo</h1>
        <p>La Playa de Laredo, también conocida como La Salvé, es una de las playas más extensas y bellas de la costa cántabra. Un lugar perfecto para disfrutar del sol, el mar y los deportes acuáticos.</p>
    </header>-->


    <?php
    $src = './../../../../mifoto.png';
    include_once './../../../../bloques/estructura/barra_navegacion2.php'; ?>
    <?php
    $page = 'playadelaredo';
    include_once './../../../../bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../../../bloques/estructura/'); ?>







    <div class="container my-5">
        <h1 class="text-center">Playa de Laredo: Un Paraíso en Cantabria</h1>

        <section class="my-4">
            <h2>Descripción General</h2>
            <p>
                La Playa de Laredo, conocida como "La Salvé", es una de las playas más extensas de la costa cantábrica, con más de 4 kilómetros de arena dorada y fina. Ubicada en Cantabria, España, es un destino ideal para disfrutar del sol, el mar y diversas actividades recreativas en un entorno natural espectacular.
            </p>
        </section>

        <!-- Características de la Playa -->
        <section class="container my-5">
            <h2>Características</h2>
            <ul>
                <li>Arena fina y dorada</li>
                <li>Longitud: 4 km</li>
                <li>Mar tranquilo, ideal para familias</li>
                <li>Paseo marítimo amplio</li>
                <li>Servicios: duchas, aseos, socorristas</li>
                <li>Accesible para personas con movilidad reducida</li>
            </ul>
        </section>

        <!-- Información adicional -->
        <section class="container my-5">
            <h2>Datos de Interés</h2>
            <p>
                La Salvé es perfecta para familias y surfistas, ofreciendo servicios completos y vistas impresionantes del Mar Cantábrico y la Ría de Treto. Su ubicación en Laredo permite disfrutar de una jornada de ocio completa, con restaurantes, bares y tiendas en los alrededores.
            </p>
        </section>

        <hr><?php
            $articulo = 'sports_shirts';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>

        <section class="my-4">
            <h2>Entorno y Paisaje</h2>
            <p>
                Rodeada de un impresionante entorno natural, la Playa de Laredo ofrece vistas panorámicas que incluyen el Monte Buciero y el estuario del río Asón. La playa se encuentra en una bahía protegida, lo que la convierte en un lugar seguro para el baño y las actividades acuáticas. Al fondo, se puede apreciar el Paseo Marítimo de Laredo, un lugar perfecto para dar un paseo al atardecer y disfrutar de la brisa marina.
            </p>
        </section>

        <hr><?php
            $articulo = 'shirts_modelo_derecha';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>

        <section class="my-4">
            <h2>Historia y Cultura</h2>
            <p>
                La Playa de Laredo no solo es un lugar de belleza natural, sino que también tiene una rica historia vinculada a la villa de Laredo, una de las localidades más antiguas y con más tradición marinera de Cantabria. Laredo fue uno de los puertos más importantes durante la Edad Media y jugó un papel crucial en el comercio marítimo. Hoy en día, la ciudad conserva su encanto histórico, con un casco antiguo que invita a perderse por sus calles empedradas.
            </p>
        </section>

        <section class="my-4">
            <h2>Servicios Disponibles</h2>
            <ul>
                <li><strong>Puestos de Socorro:</strong> La playa cuenta con varios puestos de socorristas distribuidos a lo largo de la costa, garantizando la seguridad de los bañistas.</li>
                <li><strong>Zonas de Aparcamiento:</strong> Amplias zonas de aparcamiento cerca de la playa, aunque en temporada alta es recomendable llegar temprano.</li>
                <li><strong>Duchas y Lavapiés:</strong> Dispone de duchas y lavapiés públicos para eliminar la arena antes de salir de la playa.</li>
                <li><strong>Alquiler de Sombrillas y Hamacas:</strong> Es posible alquilar sombrillas y hamacas para aquellos que deseen relajarse al sol.</li>
                <li><strong>Chiringuitos y Restaurantes:</strong> A lo largo de la playa y el paseo marítimo, hay varios chiringuitos y restaurantes que ofrecen una variedad de platos, desde tapas y mariscos frescos hasta cocina internacional.</li>
                <li><strong>Accesos para Personas con Movilidad Reducida:</strong> La playa está adaptada con rampas y accesos especiales para personas con movilidad reducida.</li>
                <li><strong>Zonas Deportivas:</strong> Existen áreas designadas para la práctica de deportes como el voleibol, fútbol playa y el surf.</li>
            </ul>
        </section>

        <hr><?php
            $articulo = 'shirts_izquierda';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>

        <section class="my-4">
            <h2>Actividades y Ocio</h2>
            <ul>
                <li><strong>Surf y Bodyboard:</strong> Gracias a sus olas moderadas, la playa es un lugar popular para la práctica del surf y el bodyboard. Existen escuelas de surf que ofrecen cursos para todos los niveles.</li>
                <li><strong>Paseos en Barco:</strong> Desde el puerto deportivo, se pueden tomar excursiones en barco para explorar la costa y las cercanas Rías del Asón y Treto.</li>
                <li><strong>Vela y Windsurf:</strong> Las condiciones de viento en la bahía son ideales para la práctica de deportes como la vela y el windsurf.</li>
                <li><strong>Senderismo:</strong> El entorno natural de Laredo ofrece rutas de senderismo que recorren la costa y los montes cercanos, como la ruta al Monte Buciero.</li>
                <li><strong>Pesca:</strong> Tanto la pesca deportiva como la pesca desde la orilla son actividades populares en Laredo.</li>
                <li><strong>Paseo Marítimo:</strong> El paseo marítimo de Laredo, que bordea la playa, es un lugar perfecto para caminar, correr o simplemente disfrutar de las vistas al mar.</li>
            </ul>
        </section>

        <!-- Sección de Servicios -->
        <section class="container my-5">
            <h2>Servicios en la Playa</h2>
            <p>La Playa de Laredo ofrece una amplia variedad de servicios para asegurar una estancia cómoda y agradable para todos los visitantes:</p>
            <ul>
                <li>Chiringuitos y restaurantes a lo largo del paseo marítimo</li>
                <li>Alquiler de sombrillas y hamacas</li>

                <li>Escuelas de surf y alquiler de material deportivo</li>
                <li>Áreas de juegos infantiles</li>
                <li>Zonas de parking cercano</li>

            </ul>
        </section>

        <hr><?php
            $articulo = 'sneakers_izquierda_0';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>
        <section class="my-4">
            <h2>Eventos y Festividades</h2>
            <ul>
                <li><strong>Batalla de Flores:</strong> Una de las festividades más famosas de Laredo, celebrada a finales de agosto. Se trata de un desfile de carrozas decoradas con flores naturales, que culmina con una fiesta en la playa.</li>
                <li><strong>Fiesta de la Virgen del Carmen:</strong> Esta celebración marítima, en honor a la patrona de los marineros, incluye procesiones y eventos religiosos en la playa.</li>
                <li><strong>Carrera de Caballos:</strong> En verano, se celebra una espectacular carrera de caballos en la misma playa, un evento que atrae a numerosos visitantes.</li>
            </ul>
        </section>

        <hr><?php
            $articulo = 'sandals_woman_izda_15';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>

        <section class="my-4">
            <h2>Consejos para los Visitantes</h2>
            <ul>
                <li><strong>Mejor Época para Visitar:</strong> El verano es la temporada más popular, pero la playa también es hermosa en primavera y otoño, cuando es menos concurrida.</li>
                <li><strong>Amanecer y Atardecer:</strong> No te pierdas la oportunidad de disfrutar del amanecer o el atardecer desde la playa, los colores del cielo reflejándose en el mar son impresionantes.</li>
                <li><strong>Protección Solar:</strong> Debido a la duración de la exposición al sol, es recomendable utilizar protector solar y llevar sombrilla.</li>
                <li><strong>Explora Laredo:</strong> Además de la playa, explora el casco antiguo de Laredo, conocido como "La Puebla Vieja", lleno de historia y encanto.</li>
            </ul>
        </section>


    </div>






    <!-- Contenido principal -->
    <main class="container my-4">
        <?php // Carrusel de 3 Imágenes //
        $lugar = 'playadelaredo';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
        $imges_name = ['/vistaaereaplayadelaredo.jpg', '/paseomaritimoplayadelaredo.jpg', '/atardecerenplayadelaredo.jpg'];
        $alt = ["Vista aérea de la Playa de Laredo", "Paseo marítimo en la Playa de Laredo", "Atardecer en la Playa de Laredo"];
        require './../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>

        <?php // Galeria 3 imagenes //
        $lugar = 'playadelaredo';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
        $imges_name = ['/actividadesenlaplayadelaredo.jpg', '/olasenlaplayadelaredo.jpg', '/puertodeportivodelaredo.jpg'];
        $alt = ["Actividades en la Playa de Laredo", "Olas en la Playa de Laredo", "Puerto deportivo en la Playa de Laredo"];
        require './../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>

        <!-- Mapa de ubicación -->
        <section class="map mb-4">
            <h2>Ubicación y cómo llegar</h2>            
            <p>
                Laredo está bien conectado por carretera a través de la Autovía A-8, lo que facilita el acceso desde ciudades cercanas como Santander y Bilbao. También se puede llegar en autobús, con servicios regulares que conectan Laredo con las principales ciudades de la región.
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.3784514868024!2d-3.4172185!3d43.4132068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd493f799dffea9b%3A0x9acb5cc227731d85!2sPlaya%20de%20Laredo!5e0!3m2!1ses!2ses!4v1689360171345!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
        </section>



    </main>

    <!-- Footer -->
    <footer>
        <?php require './../../../../bloques/estructura/footer.php'; ?>
    </footer>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
 


<?php
/*                
Vista aérea de la Playa de Laredo
Para una imagen que muestre una vista desde arriba de la playa y sus alrededores.

Paseo marítimo en la Playa de Laredo
Para una imagen que capture el paseo marítimo junto a la playa.

Atardecer en la Playa de Laredo
Para una imagen que muestre el atardecer sobre el mar en Laredo.

Actividades en la Playa de Laredo
Para una imagen que muestre a personas disfrutando de actividades como voleibol o natación en la playa.

Olas en la Playa de Laredo
Para una imagen que capture las olas rompiendo en la orilla de la playa.

Surf en la Playa de Laredo
Para una imagen que muestre a surfistas disfrutando de las olas en la playa.

Familias disfrutando en la Playa de Laredo
Para una imagen que muestre a familias jugando o relajándose en la arena.

Vista panorámica desde el monte Atalaya en Laredo
Para una imagen que muestre una vista panorámica de la playa y la ciudad desde una ubicación elevada.

Playas doradas de Laredo en verano
Para una imagen que capture la playa llena de bañistas en un día soleado de verano.

Puerto deportivo de Laredo junto a la playa
Para una imagen que muestre el puerto deportivo cercano a la playa.*/



?>


<script>
    /* Solo Shirts */
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
        "sports_shirts" => 2,
        "shirts_modelo_derecha" => 2,
        "shirts_izquierda" => 2,
        "sneakers_izquierda_0" => 2,
        "sandals_woman_izda_15" => 2
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
            baseName: 'sports_shirts',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'shirts_modelo_derecha',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'shirts_izquierda',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'sneakers_izquierda_0',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'sandals_woman_izda_15',
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
        $articulo = "sports_shirts";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

        <?php
        $articulo = "shirts_modelo_derecha";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

        <?php
        $articulo = "shirts_izquierda";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

        <?php
        $articulo = "sneakers_izquierda_0";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

        <?php
        $articulo = "sandals_woman_izda_15";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>



    }

    setInterval(changeImages, 4000);
</script>