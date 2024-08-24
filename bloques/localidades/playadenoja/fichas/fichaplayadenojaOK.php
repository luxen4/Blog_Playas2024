<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Noja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    $src = './../../../../mifoto.png';
    $href_lugar = './../../../../';
    $href_zona = './../../../../index.php';
    include_once './../../../../bloques/estructura/barra_navegacion2.php'; ?>
    <?php
    $page = 'castrourdiales';
    include_once './../../../../bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../../../bloques/estructura/'); ?>



    <!-- Presentación de la Playa de Noja -->
    <section class="container my-5">
        <h1>Playa de Noja</h1>
        <p>Ubicada en la costa de Cantabria, la Playa de Noja es uno de los destinos más apreciados por quienes buscan una combinación de belleza natural y comodidad. Esta playa destaca por su amplio arenal dorado, aguas cristalinas y su entorno protegido que la convierten en un lugar ideal tanto para el descanso como para la práctica de deportes acuáticos.</p>
        <p>La playa cuenta con una gran extensión de arena fina, perfecta para disfrutar de largas caminatas o tomar el sol. Sus aguas, adecuadas para nadar y practicar surf, atraen a numerosos visitantes durante la temporada estival. Además, el entorno natural que rodea la playa, con sus dunas y vegetación costera, ofrece un paisaje impresionante que realza la experiencia de los visitantes.</p>
        <p>En las cercanías, encontrarás una variedad de servicios que incluyen restaurantes, cafeterías y tiendas, lo que asegura que todas tus necesidades estén cubiertas mientras disfrutas de un día en la playa. La Playa de Noja es un lugar ideal para familias, parejas y cualquier persona que desee escapar del bullicio y relajarse en un entorno tranquilo y hermoso.</p>
    </section>
    </div>

    <hr><?php
        $articulo = 'sandals_man';
        $grupo = '_2';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
    <hr>



    <!-- Servicios -->
    <section class="container my-5">
        <h3>Servicios</h3>
        <ul>
            <li><strong>Chiringuitos y Restaurantes:</strong> A lo largo del paseo marítimo, encontrarás varios chiringuitos y restaurantes que ofrecen platos locales y bebidas refrescantes. Es un lugar perfecto para disfrutar de la gastronomía cántabra mientras se contempla el mar.</li>
            <li><strong>Alquiler de Equipos:</strong> La playa cuenta con puntos de alquiler donde puedes rentar sombrillas, tumbonas, y equipos para deportes acuáticos como tablas de surf, paddle surf y kayaks.</li>
            <li><strong>Duchas y Baños Públicos:</strong> La playa está equipada con duchas y baños públicos distribuidos a lo largo de la misma, lo que facilita la comodidad de los visitantes.</li>
            <li><strong>Aparcamiento:</strong> Existen varias zonas de aparcamiento cercanas, algunas gratuitas y otras de pago, para facilitar el acceso a la playa.</li>
        </ul>
    </section>

    <hr><?php
        $articulo = 'shirts_modelo_derecha';
        $grupo = '_2';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
    <hr>

    <!-- Actividades -->
    <section class="container my-5">
        <h3>Actividades</h3>
        <ul>
            <li><strong>Deportes Acuáticos:</strong> La Playa de Noja es un lugar popular para practicar surf, windsurf, y paddle surf. También se organizan cursos y clases para principiantes.</li>
            <li><strong>Senderismo:</strong> Los alrededores de la playa ofrecen rutas de senderismo con vistas espectaculares, ideales para los amantes de la naturaleza y el aire libre.</li>
            <li><strong>Zonas Deportivas:</strong> La playa cuenta con áreas designadas para jugar voleibol de playa y fútbol.</li>
            <li><strong>Excursiones:</strong> Desde Noja, se pueden organizar excursiones en barco para explorar la costa cantábrica y sus acantilados.</li>
        </ul>
    </section>


    <!-- Seguridad y Accesibilidad -->
    <section class="container my-5">
        <h3>Seguridad y Accesibilidad</h3>
        <ul>
            <li><strong>Seguridad:</strong> Durante la temporada alta, la playa está vigilada por socorristas profesionales que garantizan la seguridad de los bañistas.</li>
            <li><strong>Accesibilidad:</strong> La Playa de Noja está equipada con accesos adaptados para personas con movilidad reducida, incluyendo rampas y pasarelas hasta la arena.</li>
            <li><strong>Sillas Anfibias:</strong> Se ofrecen sillas anfibias para que personas con movilidad reducida puedan disfrutar del baño en el mar con seguridad.</li>
        </ul>
    </section>

    <hr><?php
        $articulo = 'shirts_izquierda';
        $grupo = '_2';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
    <hr>

    <!-- Otros -->
    <section class="container my-5">
        <h3>Otros Aspectos Destacables</h3>
        <ul>
            <li><strong>Paseo Marítimo:</strong> El paseo marítimo es ideal para caminar, correr o simplemente disfrutar de un paseo relajado con vistas al mar. Está adornado con bancos y zonas ajardinadas.</li>
            <li><strong>Mercadillos:</strong> Durante el verano, se organizan mercadillos y ferias donde se pueden encontrar artesanías, productos locales y recuerdos.</li>
            <li><strong>Entorno Natural:</strong> La Playa de Noja está rodeada por un entorno natural protegido, con dunas y marismas que son hogar de una rica biodiversidad.</li>
        </ul>
    </section>

    <hr><?php
        $articulo = 'sneakers_izquierda_15';
        $grupo = '_2';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
    <hr>


    <!-- Conclusión -->
    <section class="container my-5">
        <h3>Conclusión</h3>
        <p>
            La Playa de Noja no solo ofrece un entorno natural impresionante, sino que también está equipada con todos los servicios y actividades necesarias para disfrutar de un día perfecto en la costa. Ya sea que busques relajarte al sol, practicar deportes acuáticos o explorar la naturaleza, Noja es el destino ideal.
        </p>
    </section>



    <?php // Galeria 3 imagenes
    $lugar = 'playadenoja';
    $ruta = './../../../../bloques/localidades/' . $lugar . '/img';
    $imges_name = ['/vistadelaplayadenoja.jpg', '/atardecerenlaplayadenoja.jpg', '/playaderis.jpg'];
    $alt = ["Vista aerea de la Playa de Noja", "Atardecer en la Playa de Noja", "Actividades en la Playa de Noja"];
    require './../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>


    <hr><?php
        $articulo = 'sandals_woman_izda_15';
        $grupo = '_2';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
    <hr>

    <!-- Mapa de Ubicación -->
    <section class="map container my-5">
        <h2>Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2987.528405550839!2d-3.568721384490838!3d43.48209267913745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd46b89eb23eb49b%3A0xe0a8705cbf325a77!2sPlaya%20de%20Noja!5e0!3m2!1ses!2ses!4v1599450546904!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
    </section>





    <!-- Footer -->
    <footer>
        <?php require './../../../../bloques/estructura/footer.php'; ?>
    </footer>

    <?php require './../../../../bloques/estructura/anuncios/js/logica_anuncios.php'; ?>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


<style>
    h1,
    h2,
    p,
    li {
        text-align: left;
    }

    .custom-carousel-image {
        height: 100%;

    }

    .map iframe {
        border: 0;
    }

    .gallery img {
        width: 100%;
        height: auto;
        margin-bottom: 15px;
    }
</style>