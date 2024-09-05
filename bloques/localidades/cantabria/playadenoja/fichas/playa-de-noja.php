<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Noja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Encabezado de la Playa de Castro Urdiales 
    <header class="bg-primary text-white text-center py-1">
        <h1>Playa de Castro Urdiales</h1>
        <p>La Playa de Castro Urdiales, también conocida como La Salvé, es una de las playas más extensas y bellas de la costa cántabra. Un lugar perfecto para disfrutar del sol, el mar y los deportes acuáticos.</p>
    </header>-->




    <?php
    $src = './../../../../mifoto.png';
    $href_lugar = './../../../../';
    $href_zona = './../../../../index.php';
    include_once './../../../../bloques/estructura/barra_navegacion2.php'; ?>

    <nav>
        <a href="#descripcion">Descripción</a>
        <a href="#ubicacion">Ubicación</a>
        <a href="#actividades">Actividades</a>
        <a href="#servicios">Servicios</a>
        <a href="#galeria">Galería</a>
        <a href="#contacto">Contacto</a>
    </nav>

    <?php
    $page = 'playadenoja';
    include_once './../../../../bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../../../bloques/estructura/'); ?>


    <div class="container my-5">
        <h1 class="text-center">Playa de Noja: Un Paraíso en Cantabria</h1>

        <!-- Presentación de la Playa de Noja -->
        <section id="descripcion" class="container my-5">
            <h3>Descripción</h3>
            <p>Ubicada en la costa de Cantabria, la Playa de Noja es uno de los destinos más apreciados por quienes buscan una combinación de belleza natural y comodidad. Esta playa destaca por su amplio arenal dorado, aguas cristalinas y su entorno protegido que la convierten en un lugar ideal tanto para el descanso como para la práctica de deportes acuáticos.</p>
            <p>La playa cuenta con una gran extensión de arena fina, perfecta para disfrutar de largas caminatas o tomar el sol. Sus aguas, adecuadas para nadar y practicar surf, atraen a numerosos visitantes durante la temporada estival. Además, el entorno natural que rodea la playa, con sus dunas y vegetación costera, ofrece un paisaje impresionante que realza la experiencia de los visitantes.</p>
            <p>En las cercanías, encontrarás una variedad de servicios que incluyen restaurantes, cafeterías y tiendas, lo que asegura que todas tus necesidades estén cubiertas mientras disfrutas de un día en la playa. La Playa de Noja es un lugar ideal para familias, parejas y cualquier persona que desee escapar del bullicio y relajarse en un entorno tranquilo y hermoso.</p>
        </section>

       <?php
            $articulo = 'sandals_man';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
       


        <!-- Servicios -->
        <section id="servicios" class="container my-5">
            <h3>Servicios</h3>
            <ul>
                <li><strong>Chiringuitos y Restaurantes:</strong> A lo largo del paseo marítimo, encontrarás varios chiringuitos y restaurantes que ofrecen platos locales y bebidas refrescantes. Es un lugar perfecto para disfrutar de la gastronomía cántabra mientras se contempla el mar.</li>
                <li><strong>Alquiler de Equipos:</strong> La playa cuenta con puntos de alquiler donde puedes rentar sombrillas, tumbonas, y equipos para deportes acuáticos como tablas de surf, paddle surf y kayaks.</li>
                <li><strong>Duchas y Baños Públicos:</strong> La playa está equipada con duchas y baños públicos distribuidos a lo largo de la misma, lo que facilita la comodidad de los visitantes.</li>
                <li><strong>Aparcamiento:</strong> Existen varias zonas de aparcamiento cercanas, algunas gratuitas y otras de pago, para facilitar el acceso a la playa.</li>
            </ul>
        </section>

       <?php
            $articulo = 'sandals_woman_izda_15';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
       


        <!-- Actividades -->
        <section id="actividades" class="container my-5">
            <h3>Actividades</h3>
            <ul>
                <li><strong>Deportes Acuáticos:</strong> La Playa de Noja es un lugar popular para practicar surf, windsurf, y paddle surf. También se organizan cursos y clases para principiantes.</li>
                <li><strong>Senderismo:</strong> Los alrededores de la playa ofrecen rutas de senderismo con vistas espectaculares, ideales para los amantes de la naturaleza y el aire libre.</li>
                <li><strong>Zonas Deportivas:</strong> La playa cuenta con áreas designadas para jugar voleibol de playa y fútbol.</li>
                <li><strong>Excursiones:</strong> Desde Noja, se pueden organizar excursiones en barco para explorar la costa cantábrica y sus acantilados.</li>
            </ul>
        </section>

       <?php
            $articulo = 'shirts_modelo_derecha';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
       

        <!-- Seguridad y Accesibilidad -->
        <section class="container my-5">
            <h3>Seguridad y Accesibilidad</h3>
            <ul>
                <li><strong>Seguridad:</strong> Durante la temporada alta, la playa está vigilada por socorristas profesionales que garantizan la seguridad de los bañistas.</li>
                <li><strong>Accesibilidad:</strong> La Playa de Noja está equipada con accesos adaptados para personas con movilidad reducida, incluyendo rampas y pasarelas hasta la arena.</li>
                <li><strong>Sillas Anfibias:</strong> Se ofrecen sillas anfibias para que personas con movilidad reducida puedan disfrutar del baño en el mar con seguridad.</li>
            </ul>
        </section>


        <!-- Otros -->
        <section class="container my-5">
            <h3>Otros Aspectos Destacables</h3>
            <ul>
                <li><strong>Paseo Marítimo:</strong> El paseo marítimo es ideal para caminar, correr o simplemente disfrutar de un paseo relajado con vistas al mar. Está adornado con bancos y zonas ajardinadas.</li>
                <li><strong>Mercadillos:</strong> Durante el verano, se organizan mercadillos y ferias donde se pueden encontrar artesanías, productos locales y recuerdos.</li>
                <li><strong>Entorno Natural:</strong> La Playa de Noja está rodeada por un entorno natural protegido, con dunas y marismas que son hogar de una rica biodiversidad.</li>
            </ul>
        </section>

       <?php
            $articulo = 'shirts_izquierda';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
       

        <!-- Conclusión -->
        <section class="container my-5">
            <h3>Conclusión</h3>
            <p>
                La Playa de Noja no solo ofrece un entorno natural impresionante, sino que también está equipada con todos los servicios y actividades necesarias para disfrutar de un día perfecto en la costa. Ya sea que busques relajarte al sol, practicar deportes acuáticos o explorar la naturaleza, Noja es el destino ideal.
            </p>
        </section>



       
    </div>



    <!-- Contenido principal -->
    <main class="container my-4">
    <section id="galeria" class="map container my-5">

        <?php // Carrusel de 3 Imágenes //
        $lugar = 'playadenoja';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
        $imges_name = ['/playadetrengandin.jpg', '/vistaaereadelaplayadenoja.jpg', '/rocasenplayadenoja.jpg'];
        $alt = ["Vista de la Playa Trengandin", "Vista aerea de la Playa de Noja", "Rocas en la Playa de Noja"];
        require './../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>


        <?php // Galeria 3 imagenes
            $lugar = 'playadenoja';
            $ruta = './../../../../bloques/localidades/' . $lugar . '/img';
            $imges_name = ['/vistadelaplayadenoja.jpg', '/atardecerenlaplayadenoja.jpg', '/playaderis.jpg'];
            $alt = ["Vista aerea de la Playa de Noja", "Atardecer en la Playa de Noja", "Actividades en la Playa de Noja"];
            require './../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>

</section>


        <!-- Mapa de Ubicación -->
        <section id="ubicacion" class="map container my-5">
            <h2>Ubicación</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5831.651444241797!2d-3.223077446167217!3d43.386075434058306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd491d8696af44a3%3A0xc1223f750f28a028!2sCastro-Urdiales%2C%20Cantabria!5e0!3m2!1ses!2ses!4v1692109982432!5m2!1ses!2ses"
                width="100%"
                height="450"
                allowfullscreen=""
                loading="lazy"
                aria-hidden="false"
                tabindex="0">
            </iframe>
        </section>

        <?php
            $articulo = 'sneakers_izquierda_15';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

        <h6>Para más información puede consultar en la pagina de la oficina de turismo de la
                    <a href="https://turismodecantabria.com/municipios/noja/">Playa de Noja</a>
                </h6>

    </main>

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



<?php
/*                
Vista aérea de la Playa de Castro Urdiales
Para una imagen que muestre una vista desde arriba de la playa y sus alrededores.

Paseo marítimo en la Playa de Castro Urdiales
Para una imagen que capture el paseo marítimo junto a la playa.

Atardecer en la Playa de Castro Urdiales
Para una imagen que muestre el atardecer sobre el mar en Castro Urdiales.

Actividades en la Playa de Castro Urdiales
Para una imagen que muestre a personas disfrutando de actividades como voleibol o natación en la playa.

Olas en la Playa de Castro Urdiales
Para una imagen que capture las olas rompiendo en la orilla de la playa.

Surf en la Playa de Castro Urdiales
Para una imagen que muestre a surfistas disfrutando de las olas en la playa.

Familias disfrutando en la Playa de Castro Urdiales
Para una imagen que muestre a familias jugando o relajándose en la arena.

Vista panorámica desde el monte Atalaya en Castro Urdiales
Para una imagen que muestre una vista panorámica de la playa y la ciudad desde una ubicación elevada.

Playas doradas de Castro Urdiales en verano
Para una imagen que capture la playa llena de bañistas en un día soleado de verano.

Puerto deportivo de Castro Urdiales junto a la playa
Para una imagen que muestre el puerto deportivo cercano a la playa.*/



?>

<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #2c3e50;
        color: #ecf0f1;
        padding: 20px 0;
        text-align: center;
    }

    nav {
        background-color: #34495e;
        padding: 10px;
        text-align: center;
    }

    nav a {
        color: #ecf0f1;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
    }

    main {
        padding: 20px;
    }

    h1, h2 {
        /*color: #2c3e50;*/
    }

    .content-section {
        margin-bottom: 20px;
    }

    footer {
        background-color: #2c3e50;
        color: #ecf0f1;
        text-align: center;
        padding: 10px 0;
        margin-top: 20px;
    }
</style>