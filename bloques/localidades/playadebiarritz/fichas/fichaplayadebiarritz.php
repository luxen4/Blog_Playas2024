<!DOCTYPE html>
<html lang="es">

<?php // head
$localidad = 'Playa de Biarritz';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be';
$description_content = 'Descubre la Playa de Biarritz, un destino de surf mundialmente conocido en la costa vasca francesa. Perfecta para surfear, relajarse y disfrutar de su vibrante paseo marítimo.';
$keywords_content = 'Playa de Biarritz, surf, naturaleza, paseo marítimo, Costa Vasca, turismo en Francia, playa Biarritz';

$graph_Meta_Tags_property_title = 'Playa de Biarritz - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Biarritz, un destino de surf mundialmente conocido en la costa vasca francesa. Perfecta para surfear, relajarse y disfrutar de su vibrante paseo marítimo.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/playadebiarritz/foto_presentacion.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/playadebiarritz/fichas/fichaplayadebiarritz.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Biarritz - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Biarritz, un destino de surf mundialmente conocido en la costa vasca francesa. Perfecta para surfear, relajarse y disfrutar de su vibrante paseo marítimo.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/playadebiarritz/foto_presentacion.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/playadebiarritz/fichas/fichaplayadebiarritz.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Biarritz - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Biarritz, un destino de surf mundialmente conocido en la costa vasca francesa. Perfecta para surfear, relajarse y disfrutar de su vibrante paseo marítimo.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/playadebiarritz/fichas/fichaplayadebiarritz.php?i=1';

$href_styles = './../css/styles.css';
require "./../../../../bloques/estructura/head.php";
?>


<body>

    <header>
        <h1>Playa de Biarritz</h1>
        <p>Un destino icónico en la costa del suroeste de Francia</p>
    </header>

    <main>

        <?php
        $src = './../../../../mifoto.png';
        $href_lugar = './../../../../';
        $href_zona = './../../../../index.php';
        include_once './../../../../bloques/estructura/barra_navegacion2.php'; ?>
        <?php
        $page = 'playadebiarritz';
        include_once './../../../../bloques/estructura/anuncios/carga_productos.php'; ?>
        <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../../../bloques/estructura/'); ?>

        <nav>
            <a href="#descripcion">Descripción</a>
            <a href="#ubicacion">Ubicación</a>
            <a href="#actividades">Actividades</a>
            <a href="#servicios">Servicios</a>
            <a href="#galeria">Galería</a>
            <a href="#atracciones">Atracciones</a>
            <a href="#contacto">Contacto</a>
        </nav>

        <!-- Presentación -->
        <section id="descripcion" class="container my-5">
            <h1 class="text-center">Playa de Biarritz</h1>
            <p class="text-justify">La playa de Biarritz, ubicada en el suroeste de Francia en la región de Nueva Aquitania, es uno de los destinos más icónicos de la costa atlántica. Famosa por su elegante ambiente, impresionantes vistas al océano y olas ideales para el surf, Biarritz combina lujo y naturaleza en un entorno único. Desde el gran Palacio hasta el pintoresco faro, la playa ofrece un sinfín de atractivos para todo tipo de visitantes, convirtiéndola en un lugar perfecto tanto para relajarse como para disfrutar de actividades al aire libre.</p>
        </section>




        <?php $articulo = 'jeans_man';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>



        <!-- Mapa de Ubicación -->
        <section class="map container my-5">
            <h2>Ubicación</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2911.816255969326!2d-1.5596597842959306!3d43.48487787912788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51425e7c8ad165%3A0x8b1c39f846a33a17!2sPlage%20de%20la%20C%C3%B4te%20des%20Basques%2C%2064200%20Biarritz%2C%20Francia!5e0!3m2!1ses!2ses!4v1697641577763!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
        </section>

        <!-- Sección de actividades -->
        <?php
        $lugar = 'playadebiarritz';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img'; ?>
        <section id="actividades" class="container my-5">
            <h2>Actividades en la Playa de Biarritz</h2>
            <p>La Playa de Biarritz ofrece una amplia gama de actividades para todos los gustos. Desde deportes acuáticos hasta relajantes paseos, siempre hay algo que hacer.</p>

            <article>
                <h3>Surf</h3>
                <div class="image-text-container">
                    <img src="<?= $ruta; ?>/surfistas-playa-biarritz-francia.jfif" alt="Surf en la Playa de Biarritz" class="img-fluid img-right">
                    <p>Biarritz es mundialmente famosa por sus excelentes condiciones para el surf. Tanto si eres un principiante como un surfista experimentado,
                        encontrarás olas perfectas para ti.
                        La imagen muestra a surfistas disfrutando de las olas en la Playa de Biarritz, un lugar ideal para los amantes del surf.</p>
                </div>
            </article>


            <article>
                <h3>Paseos por el Paseo Marítimo</h3>
                <div class="image-text-container">
                    <img src="<?= $ruta; ?>/paseo-maritimo-playa-biarritz.jfif" alt="Paseo Marítimo de Biarritz" class="img-fluid img-left">
                    <p>Disfruta de un paseo por el pintoresco paseo marítimo, con vistas al océano Atlántico y a las impresionantes formaciones rocosas de la costa vasca.</p>

                </div>
            </article>


            <article>
                <h3>Paseos por el Paseo Marítimo</h3>
                <div class="image-text-container">
                    <img src="<?= $ruta; ?>/rocher-de-la-vierge.jpg" alt="Rocher de la Vierge en Biarritz" class="img-fluid img-right">
                    <p>Disfruta de un paseo por el pintoresco paseo marítimo, con vistas al océano Atlántico y a las impresionantes formaciones rocosas de la costa vasca.</p>

                </div>
            </article>


            <article>
                <h3>Relax en la Playa</h3>
                <div class="image-text-container">
                    <img src="<?= $ruta; ?>/relax-relajacion-playa-biarritz.jfif" alt="Relajación en la Playa de Biarritz" class="img-fluid img-left">
                    <p>Si lo que buscas es relajarte, la Playa de Biarritz es el lugar perfecto. Extiende tu toalla y disfruta del sol, el sonido de las olas y la brisa marina.</p>
            </article>
        </section>


        <section id="servicios">
            <div class="container my-5">
                <h2>Servicios en la Playa de Biarritz</h2>
                <p>La Playa de Biarritz ofrece una amplia gama de servicios para garantizar que tu visita sea cómoda y agradable. Desde instalaciones para el disfrute del día hasta opciones para comidas y actividades, aquí tienes todo lo que necesitas saber sobre los servicios disponibles.</p>
                <?php
                $articulo = 'sports_shirts';
                include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

                <div class="row">
                    <div class="col-md-4">
                        <h3>Instalaciones Sanitarias</h3>
                        <p>La playa cuenta con modernos baños y duchas para que puedas refrescarte después de un día en la arena. Las instalaciones están mantenidas en perfectas condiciones y son accesibles para todos los visitantes.</p>
                        <img src="https://example.com/path/to/bathroom-image.jpg" alt="Instalaciones Sanitarias en la Playa de Biarritz" class="img-fluid">
                    </div>

                    <div class="col-md-4">
                        <h3>Servicios de Alquiler</h3>
                        <p>Disfruta de la playa al máximo con nuestros servicios de alquiler. Ofrecemos tumbonas, sombrillas y equipos para deportes acuáticos como surf y paddle surf. Los puntos de alquiler están convenientemente ubicados cerca de la playa.</p>
                        <img src="https://example.com/path/to/rental-image.jpg" alt="Servicios de Alquiler en la Playa de Biarritz" class="img-fluid">
                    </div>

                    <div class="col-md-4">
                        <h3>Restaurantes y Cafeterías</h3>
                        <p>Explora una variedad de opciones gastronómicas a lo largo de la playa. Desde restaurantes con vista al mar que sirven comida local y mariscos frescos hasta cafeterías donde puedes disfrutar de un café o un refresco mientras contemplas el paisaje.</p>
                        <img src="https://example.com/path/to/restaurant-image.jpg" alt="Restaurantes en la Playa de Biarritz" class="img-fluid">
                    </div>
                </div>

                <?php
                $articulo = 'shirts_izquierda';
                include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>



                <div class="row">
                    <div class="col-md-4">
                        <h3>Centro de Información</h3>
                        <p>Para cualquier consulta o información adicional, puedes visitar el centro de información ubicado cerca del acceso principal a la playa. Nuestro personal estará encantado de ayudarte con mapas, recomendaciones y cualquier otra pregunta que puedas tener.</p>
                        <img src="https://example.com/path/to/info-center-image.jpg" alt="Centro de Información en la Playa de Biarritz" class="img-fluid">
                    </div>

                    <div class="col-md-4">
                        <h3>Áreas de Juegos para Niños</h3>
                        <p>La playa cuenta con áreas de juegos seguras y bien equipadas para que los niños se diviertan mientras los adultos disfrutan del sol. Estas áreas están diseñadas para ofrecer un entorno seguro y entretenido para los más pequeños.</p>
                        <img src="https://example.com/path/to/playground-image.jpg" alt="Áreas de Juegos para Niños en la Playa de Biarritz" class="img-fluid">
                    </div>

                    <div class="col-md-4">
                        <h3>Accesibilidad</h3>
                        <p>La Playa de Biarritz está equipada con rampas y caminos accesibles para personas con movilidad reducida. Además, ofrecemos sillas de ruedas y otros recursos para garantizar que todos puedan disfrutar de la playa sin barreras.</p>
                        <img src="https://example.com/path/to/accessibility-image.jpg" alt="Accesibilidad en la Playa de Biarritz" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- Galería de Imágenes -->
        <section id="galeria" class="gallery container my-5">



            <?php // Carrusel de 3 Imágenes //
            $lugar = 'playadebiarritz';
            $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
            $imges_name = ['/vistapanoramicaaereaplayadebiarritz.jfif', '/surfistas-playa-biarritz-francia.jfif', '/costa-rocosa-mar-calma-playa-biarritz.jfif'];
            $alt = ["Vista de la Playa de Biarritz", "Surfistas disfrutando de las olas en la Playa de Biarritz, Francia.", "Costa rocosa de Biarritz con el mar en calma."];
            require './../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>

            <?php // Galeria 3 imagenes //
            $lugar = 'playadebiarritz';
            $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
            $imges_name = ['/puenteenlaplayadebiarritz.jfif', '/diadeveranoenlaplayadebiarritz.jfif', '/turistaspaseandoplayadebiarritz.jfif'];
            $alt = [
                "Puente en el paseo de la Playa de Biarritz con vistas espectaculares al mar",
                "Hermoso día de verano en la Playa de Biarritz, con sombrillas y bañistas.",
                "Turistas paseando por la orilla de la Playa de Biarritz en un día soleado."
            ];
            require './../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>
        </section>

        <section id="atracciones" class="container my-5">
            <h2>Atracciones en Biarritz</h2>
            <ul>
                <li><strong>Rocher de la Vierge:</strong> Un emblemático peñón que ofrece vistas espectaculares del océano Atlántico.</li>
                <li><strong>Cote des Basques:</strong> Un paraíso para los surfistas, con olas que atraen a surfistas de todo el mundo.</li>
                <li><strong>El Casino de Biarritz:</strong> Un lugar histórico que ofrece entretenimiento y lujo.</li>
                <li><strong>Museo del Mar:</strong> Explora la vida marina y la historia marítima de la región.</li>
            </ul>
        </section>




        <?php /*
        <section id="contacto">
            <div class="container my-5">
                <h2>Contacto</h2>
                <p>Si necesitas más información, tienes preguntas o deseas comunicarte con nosotros, aquí tienes todos los detalles necesarios. Nuestro equipo está disponible para asistirte y asegurarse de que tu experiencia en la Playa de Biarritz sea la mejor posible.</p>

                <div class="row">
                    <div class="col-md-6">
                        <h3>Formulario de Contacto</h3>
                        <p>Completa el siguiente formulario y nos pondremos en contacto contigo lo antes posible.</p>
                        <form action="submit_contact_form.php" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <h3>Información de Contacto</h3>
                        <p><strong>Dirección:</strong> Playa de Biarritz, Biarritz, Francia</p>
                        <p><strong>Teléfono:</strong> +33 5 59 22 20 00</p>
                        <p><strong>Correo Electrónico:</strong> <a href="mailto:info@playadebiarritz.fr">info@playadebiarritz.fr</a></p>
                        <p><strong>Horarios de Atención:</strong> Lunes a Domingo, de 9:00 a 18:00</p>

                        <h3>Redes Sociales</h3>
                        <p>Síguenos en nuestras redes sociales para estar al tanto de las últimas noticias y eventos:</p>
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/PlayaDeBiarritz" target="_blank" class="btn btn-outline-primary">Facebook</a></li>
                            <li><a href="https://twitter.com/PlayaDeBiarritz" target="_blank" class="btn btn-outline-info">Twitter</a></li>
                            <li><a href="https://instagram.com/PlayaDeBiarritz" target="_blank" class="btn btn-outline-danger">Instagram</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <h3>Ubicación en el Mapa</h3>
                        <p>Consulta nuestra ubicación en el mapa para planificar tu visita:</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.817279055849!2d-1.558089084501964!3d43.48084537910698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5192d394e1d1fb%3A0x428f340de7a7e2c!2sPlaya%20de%20Biarritz!5e0!3m2!1ses!2ses!4v1638928742047!5m2!1ses!2ses" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section> */ ?>


        <?php
        /*
            <img src="puente-biarritz-montana-virgen.jpg" alt="Puente en Biarritz que conecta con la montaña de la Virgen, con vistas panorámicas al océano Atlántico" />

            "Vista panorámica de la Playa de Biarritz al atardecer."
            "Surfistas disfrutando de las olas en la Playa de Biarritz, Francia."
            "Arena dorada y olas perfectas en la Playa de Biarritz."
            "Costa rocosa de Biarritz con el mar en calma."
            "Turistas paseando por la orilla de la Playa de Biarritz en un día soleado."
            "Biarritz: Una de las mejores playas para surfear en Francia."
            "Hermoso día de verano en la Playa de Biarritz, con sombrillas y bañistas."
            "Impresionante vista del faro de Biarritz desde la playa."
            "Familias disfrutando de un día en la Playa de Biarritz, con el océano Atlántico al fondo."
            "Escarpadas rocas junto a la Playa de Biarritz bajo un cielo despejado."
        */
        ?>

        <?php
        $articulo = 'swimsuits_woman';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>






        <!-- Servicios y Actividades -->
        <section class="container my-5">
            <h2 class="text-center">Servicios y Actividades</h2>
            <ul>
                <li><strong>Alquiler de sombrillas y tumbonas:</strong> Disfruta del sol con total comodidad en las playas de Biarritz.</li>
                <li><strong>Escuelas de surf:</strong> Biarritz es uno de los destinos de surf más reconocidos a nivel mundial, con numerosas escuelas para todos los niveles.</li>
                <li><strong>Gastronomía local:</strong> Explora una variedad de restaurantes que ofrecen desde cocina tradicional francesa hasta delicias marinas frescas.</li>
                <li><strong>Tiendas de lujo y boutiques:</strong> Disfruta de un día de compras en el elegante centro de Biarritz.</li>
                <li><strong>Paseos por la costa:</strong> Recorre los senderos costeros que ofrecen vistas espectaculares del Atlántico y del emblemático faro de Biarritz.</li>
            </ul>
        </section>


        <?php
        $articulo = 'sandals_woman';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>






        <?php /*
        <article>
            <h2>Artículo Destacado</h2>
            <p>Un artículo relevante o noticia importante.</p>
        </article> */ ?>



    </main>

    <!-- Footer -->
    <footer>
        <?php require './../../../../bloques/estructura/footer.php'; ?>
    </footer>

    <?php require './../../../../bloques/estructura/anuncios/js/logica_anuncios.php'; ?>

    <!-- Enlace a Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>