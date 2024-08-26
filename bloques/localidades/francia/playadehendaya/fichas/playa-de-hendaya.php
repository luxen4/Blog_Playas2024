<!DOCTYPE html>
<html lang="es">


<?php
$localidad = 'Hendaya';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Hendaya si se utiliza para verificación
$description_content = 'Descubre la Playa de Hendaya, un hermoso destino costero en el País Vasco francés. Ideal para disfrutar del sol, el mar y la rica cultura de la región.';
$keywords_content = 'Playa de Hendaya, País Vasco francés, sol, mar, turismo en Francia, Hendaya';

$graph_Meta_Tags_property_title = 'Playa de Hendaya - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Hendaya, un hermoso destino costero en el País Vasco francés. Ideal para disfrutar del sol, el mar y la rica cultura de la región.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/playadehendaya/foto_presentacion.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/playadehendaya/fichas/fichaplayadehendaya.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Hendaya - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Hendaya, un hermoso destino costero en el País Vasco francés. Ideal para disfrutar del sol, el mar y la rica cultura de la región.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/playadehendaya/foto_presentacion.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/playadehendaya/fichas/fichaplayadehendaya.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Hendaya - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Hendaya, un hermoso destino costero en el País Vasco francés. Ideal para disfrutar del sol, el mar y la rica cultura de la región.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/playadehendaya/foto_presentacion.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Berria';
$localidad_minuscula = 'berria';

$descripcion = 'Explora la Playa de Berria, una impresionante playa en Cantabria, ideal para el surf y el descanso en un entorno natural privilegiado.';
$url = 'http://playas2024.kesug.com/bloques/localidades/playadeberria/fichas/fichaplayadeberria.php';

$mainEntity_description = 'La Playa de Berria es una hermosa playa situada en Santoña, Cantabria, conocida por su arena dorada y sus excelentes condiciones para el surf.';
$mainEntity_addressLocality = 'Santoña';
$mainEntity_addressRegion = 'Cantabria';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4672;
$mainEntity_geo_longitude = -3.4366;

$mainEntity_image = 'https://example.com/path/to/berria-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/playade' . $localidad_minuscula . '/fichas/fichaplayade' . $localidad_minuscula . '.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>

<body>

    <?php
    $page = 'playadehendaya';
    $ruta = './../../../../../bloques/estructura';
    //$href_lugar = 'ficha_playadehendaya';
    include './../../../../../bloques/estructura/basico.php'; ?>


    <div id="#" class="container">
        <div class="row">
            <!--<iframe src="./../../../../ads_terra/468px-60px.html"></iframe>-->


            <div id="#" class="col-xl-10 text-center col-lg-10 col-md-10 col-sm-12 col-12">

            </div>
        </div>
    </div>


    <!-- Encabezado -->
    <header class="text-center">
        <h1>Playa de Hendaya</h1>
        <p class="lead">Descubre la encantadora Playa de Hendaya, un paraíso costero en el País Vasco francés.</p>
    </header>
    <main>
        <!-- Descripción de la Playa -->
        <section class="container">
            <h2>Descripción</h2>
            <p>
                La Playa de Hendaya es una extensa franja de arena dorada que se extiende a lo largo de la costa del País Vasco francés, ofreciendo vistas impresionantes del océano Atlántico y de la costa española en el horizonte. Con una longitud de más de 3 kilómetros, esta playa es conocida por sus aguas tranquilas y limpias, ideales para nadar y practicar deportes acuáticos como el surf y el paddle surf.
            </p>
            <p>
                Rodeada de un hermoso paseo marítimo y un vibrante centro turístico, Hendaya ofrece una amplia gama de servicios y actividades para toda la familia. Desde chiringuitos y restaurantes hasta zonas de juegos y deportes, la playa es un destino perfecto para disfrutar de un día completo al aire libre. Además, el entorno natural que rodea la playa es ideal para quienes desean explorar la belleza de la costa vasca.
            </p>
        </section>



        <?php
        $articulo = 'shirts';
        $grupo = '_2';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>




        <!-- Servicios y Actividades -->
        <section class="container">
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
                <?php
                $articulo = 'sandals_man';
                $grupo = '_2';
                include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

                <li>
                    <strong>Zonas Deportivas:</strong> Además del surf, la Playa de Hendaya cuenta con instalaciones para practicar voleibol de playa y fútbol. También se organizan torneos y eventos deportivos durante la temporada alta.
                </li>
                <li>
                    <strong>Seguridad y Salvamento:</strong> Durante la temporada alta, la playa está vigilada por socorristas, lo que garantiza un entorno seguro para nadar y disfrutar del mar.
                </li>
                <li>
                    <strong>Accesibilidad:</strong> La playa está equipada con accesos para personas con movilidad reducida, incluyendo rampas y sillas anfibias, lo que la convierte en un destino inclusivo.
                </li>

                <?php $articulo = 'shorts';
                $grupo = '_2';
                include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>


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
        <section id="galeria" class="gallery container">
            <?php // Carrusel de 3 Imágenes //
            $lugar = 'francia/playadehendaya';
            $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
            $imges_name = ['/playa-de-hendaya_1.jpg', '/playa-de-hendaya_2.jpg', '/playa-de-hendaya_4.jpg'];
            $alt = ["Playa de Hendaya", "Vista aerea de la Playa de Hendaya.", "Vista panorámica de la Playa de Hendaya."];
            require './../../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>


            <?php // Galeria 3 imagenes //
            $lugar = 'francia/playadehendaya';
            $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
            $imges_name = ['/surfistas-playa-de-hendaya.png', '/casino-playa-de-hendaya.png', '/turistas-paseando-por-la-playa-de-hendaya.jpg'];
            $alt = [
                "Surfistas en la Playa de Hendaya",
                "Casino en la Playa de Hendaya.",
                "Turistas paseando por la orilla de la Playa de Hendaya en un día soleado."
            ];
            require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>
        </section>

        <?php
        $articulo = 'sneakers_izquierda_15';
        $grupo = '_2';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>



        <!-- Conclusión -->
        <section class="container">
            <p>
                La Playa de Hendaya no solo es un paraíso natural, sino también un destino completo que ofrece una amplia variedad de servicios y actividades para todos los gustos. Ya sea que busques un día relajado en la playa, una aventura deportiva o una experiencia cultural, Hendaya tiene algo para todos.
            </p>
        </section>

        <?php $articulo = 'swimsuits_woman';
        $grupo = '_2';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>


        <!-- Mapa de Ubicación -->
        <section class="map container">
            <h2>Ubicación</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.826156279471!2d-1.7787072845505665!3d43.33662127913719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4f678e2f6835b1%3A0x8f77db1a89c5da4!2sPlaya%20de%20Hendaya!5e0!3m2!1ses!2ses!4v1689350134823!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
        </section>

    </main>


    <footer>
        <?php require './../../../../../bloques/estructura/footer.php'; ?>
    </footer>

<!-- lógica de anuncios -->
<?php require './../../js/logica_anuncios_generico.php'; ?>


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