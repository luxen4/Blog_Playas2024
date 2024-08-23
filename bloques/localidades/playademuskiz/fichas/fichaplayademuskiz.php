<!DOCTYPE html>
<html lang="es">

<?php // head
$localidad = 'Playa de Muskiz';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be';
$description_content = 'Explora la Playa de Muskiz, un hermoso destino costero en la provincia de Bizkaia. Ideal para disfrutar del sol, el mar y la tranquilidad del entorno natural que la rodea.';
$keywords_content = 'Playa de Muskiz, costa de Bizkaia, sol, mar, turismo en el País Vasco, playa Muskiz';

$graph_Meta_Tags_property_title = 'Playa de Muskiz - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Muskiz, un hermoso destino costero en la provincia de Bizkaia. Ideal para disfrutar del sol, el mar y la tranquilidad del entorno natural que la rodea.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/playademuskiz/foto_presentacion.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/playademuskiz/fichas/fichaplayademuskiz.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Muskiz - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Muskiz, un hermoso destino costero en la provincia de Bizkaia. Ideal para disfrutar del sol, el mar y la tranquilidad del entorno natural que la rodea.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/playademuskiz/foto_presentacion.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/playademuskiz/fichas/fichaplayademuskiz.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Muskiz - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Muskiz, un hermoso destino costero en la provincia de Bizkaia. Ideal para disfrutar del sol, el mar y la tranquilidad del entorno natural que la rodea.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/playademuskiz/fichas/fichaplayademuskiz.php?i=1';


$href_styles = './../css/styles.css';
require "./../../../../bloques/estructura/head.php";
?>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">Playas 2024</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="./">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./playas.html">Playas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./actividades.html">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contacto.html">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <!-- Sección de Presentación -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Playa de Muskiz</h1>
            <p class="lead">Descubre la tranquilidad y belleza natural de la costa de Bizkaia en la Playa de Muskiz.</p>
        </div>
    </header>
       <?php
    $src = './../../../../mifoto.png';
    $href_lugar = './../../../../';
    $href_zona = './../../../../index.php';
    include_once './../../../../bloques/estructura/barra_navegacion2.php'; ?>
    <?php
    $page = 'castrourdiales';
    include_once './../../../../bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../../../bloques/estructura/'); ?>
 

    <nav>
        <a href="#descripcion">Descripción</a>
        <a href="#ubicacion">Ubicación</a>
        <a href="#actividades">Actividades</a>
        <a href="#servicios">Servicios</a>
        <a href="#galeria">Galería</a>
        <a href="#contacto">Contacto</a>
    </nav>

    <style>
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
    </style>

    <!-- Descripción detallada -->
    <section id="descripcion" class="container my-5">
        <h2 class="mb-4">Descripción</h2>
        <p>La Playa de Muskiz, también conocida como La Arena, es uno de los rincones más encantadores de la costa de Bizkaia. Ubicada en la localidad de Muskiz, esta playa de arena fina dorada y aguas tranquilas es el lugar ideal para quienes buscan relajarse y disfrutar de la naturaleza en un entorno sereno.</p>
        <p>Con una longitud de aproximadamente 900 metros, la Playa de Muskiz ofrece amplios espacios para caminar, tomar el sol y disfrutar de diversas actividades al aire libre. Rodeada de dunas y vegetación autóctona, esta playa es perfecta para familias, parejas y amantes de la tranquilidad.</p>
        <p>Además de su belleza natural, la Playa de Muskiz cuenta con todos los servicios necesarios para una visita cómoda, incluyendo duchas, baños públicos, chiringuitos y acceso para personas con movilidad reducida.</p>
    </section>

    <?php // Carrusel de 3 Imágenes //
        $lugar = 'playademuskiz';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
        $imges_name = ['/vista-panoramica-de-la-playa-de-muskiz-con-su-arena-dorada_1.jfif', '/vista-panoramica-de-la-playa-de-muskiz-con-su-arena-dorada_2.jfif', '/vista-panoramica-de-la-playa-de-muskiz-con-su-arena-dorada-3.jfif'];
        $alt = ["Vista panorámica de la Playa de Muskiz con su arena dorada", "Vista panorámica de la Playa de Muskiz con su arena dorada", "Vista panorámica de la Playa de Muskiz con su arena dorada"];
        require './../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>

        <?php // Galeria 3 imagenes //
        $lugar = 'playademuskiz';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
        $imges_name = ['/vista-panoramica-de-la-playa-de-muskiz-con-su-arena-dorada4.jfif', '/fronton-cercano-playa-de-muskiz.jfif', '/bar-cafeteria-en-la-playa-de-muskiz.jfif'];
        $alt = ["Vista panorámica de la Playa de Muskiz con su arena dorada", "Un frontón cercano a la Playa de Muskiz", "Bar-Cafetería en la Playa de Muskiz"];
        require './../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>


<?php 
/*
Imagen Principal:
Alt: "Vista panorámica de la Playa de Muskiz con su arena dorada y aguas tranquilas."
Imagen de Surf:
Alt: "Surfista cabalgando una ola en la Playa de Muskiz bajo un cielo despejado."
Imagen del Entorno Natural:
Alt: "Entorno natural verde rodeando la Playa de Muskiz, ideal para el senderismo."
Imagen del Atardecer:
Alt: "Impresionante atardecer en la Playa de Muskiz, con el sol ocultándose tras el horizonte."
Imagen de Actividades en Familia:
Alt: "Familia disfrutando de un día soleado en la Playa de Muskiz, construyendo castillos de arena."
Imagen de las Instalaciones:
Alt: "Área de servicios en la Playa de Muskiz, con duchas y zona de picnic."
Imagen del Paseo Marítimo:
Alt: "Paseo marítimo en la Playa de Muskiz, perfecto para caminatas relajantes junto al mar."
Imagen de la Flora:
Alt: "Vegetación autóctona cerca de la Playa de Muskiz, mostrando la diversidad natural de la zona."

Imagen de Deportes Acuáticos:

Alt: "Grupo de personas practicando paddle surf en las aguas tranquilas de la Playa de Muskiz."
Imagen de la Fauna:

Alt: "Gaviotas volando sobre la Playa de Muskiz con el mar de fondo."
Imagen de Picnic en la Playa:

Alt: "Familia disfrutando de un picnic en la Playa de Muskiz, rodeada de naturaleza."
Imagen de Seguridad:

Alt: "Torre de vigilancia y socorristas en la Playa de Muskiz, asegurando un ambiente seguro para los visitantes."
Imagen del Estuario:

Alt: "Vista del estuario que desemboca en la Playa de Muskiz, con aguas serenas y paisaje verde."
Imagen de la Zona de Juegos:

Alt: "Área de juegos infantiles cerca de la Playa de Muskiz, con niños divirtiéndose."
Imagen de la Playa en Invierno:

Alt: "Playa de Muskiz en invierno, con un ambiente tranquilo y solitario bajo un cielo nublado."
Imagen de la Accesibilidad:

Alt: "Rampa de acceso para personas con movilidad reducida en la Playa de Muskiz, garantizando la inclusividad."
Imagen de Eventos Culturales:

Alt: "Escenario montado para un evento cultural en la Playa de Muskiz, con el mar como fondo."
Imagen de la Bahía:

Alt: "Bahía de Muskiz vista desde la playa, con barcos pequeños y montañas en la distancia."

*/
?>







    <!-- Servicios -->
    <section id="servicios" class="container my-5">
        <h2 class="mb-4 text-center">Servicios en la Playa de Muskiz</h2>
        <p>La Playa de Muskiz está bien equipada para garantizar que tu visita sea placentera y segura. Entre los servicios disponibles se incluyen:</p>

        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img style="height: 200px;" src="<?= $ruta; ?>/socorristas-playa-de-muskiz.jpg" class="card-img-top" alt="Servicios de socorrismo en la Playa de Muskiz">
                    <div class="card-body">
                        <h5 class="card-title">Servicios de Playa</h5>
                        <p class="card-text">La playa está equipada con duchas, baños públicos y socorristas para garantizar la seguridad de todos los visitantes.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img style="height: 200px;" src="<?= $ruta; ?>/acceso-playa-de-muskiz.png" class="card-img-top" alt="Accesibilidad en la Playa de Muskiz">
                    <div class="card-body">
                        <h5 class="card-title">Accesibilidad</h5>
                        <p class="card-text">La Playa de Muskiz es accesible para personas con movilidad reducida, con rampas y pasarelas disponibles.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img style="height: 200px;" src="<?= $ruta; ?>/bar-cafeteria-en-la-playa-de-muskiz.jfif" class="card-img-top" alt="Restauración en la Playa de Muskiz">
                    <div class="card-body">
                        <h5 class="card-title">Restauración</h5>
                        <p class="card-text">Disfruta de la gastronomía local en los chiringuitos y restaurantes cercanos, con opciones para todos los gustos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Actividades -->
    <section id="actividades" class="container my-5">
        <h2 class="mb-4 text-center">Actividades en la Playa de Muskiz</h2>
        <p>La Playa de Muskiz no solo es un lugar para relajarse, sino que también ofrece una variedad de actividades para todas las edades.</p>

        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img style="height: 200px;" src="<?= $ruta; ?>/surf-playa-muskiz.png" class="card-img-top" alt="Surf en la Playa de Muskiz">
                    <div class="card-body">
                        <h5 class="card-title">Surf</h5>
                        <p class="card-text">Aprovecha las olas suaves de Muskiz para practicar surf, ideal para principiantes y surfistas experimentados.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img style="height: 200px;" src="<?= $ruta; ?>/mapa-senderismo-muskiz.png" class="card-img-top" alt="Senderismo en Muskiz">
                    <div class="card-body">
                        <h5 class="card-title">Senderismo</h5>
                        <p class="card-text">Explora las rutas de senderismo cercanas, que ofrecen vistas impresionantes del litoral y la naturaleza.</p>
                        
                        <a href="https://www.outdooractive.com/es/rutas-de-senderismo/muskiz/rutas-de-senderismo-en-muskiz/13135961/">Todo en Senderismo</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img style="height: 200px;" src="<?= $ruta; ?>/voley-playa-muskiz.jpg" class="card-img-top" alt="Vóley playa en Muskiz">
                    <div class="card-body">
                        <h5 class="card-title">Vóley Playa</h5>
                        <p class="card-text">Disfruta de una partida de vóley playa con amigos o familiares en las áreas designadas de la playa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Información adicional -->
    <section id="informacion" class="container my-5">
        <h2 class="mb-4 text-center">Información Adicional</h2>
        <p>La Playa de Muskiz es un destino perfecto para quienes buscan una experiencia de playa tranquila y natural en la costa de Bizkaia. Aquí, podrás disfrutar de un día completo de actividades al aire libre, seguido de una deliciosa comida en uno de los restaurantes locales.</p>
        <p>Para llegar a la playa, puedes utilizar el transporte público, ya que cuenta con conexiones de autobús desde el centro de Muskiz y otras localidades cercanas. Si prefieres llegar en coche, la playa ofrece amplias zonas de aparcamiento cercanas.</p>
        <p>Durante la temporada alta, es recomendable llegar temprano para asegurar un buen lugar en la playa y disfrutar de todas las comodidades que ofrece.</p>
    </section>

    <!-- Pie de página -->
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Playas 2024</h5>
                    <p>Tu guía completa para explorar las mejores playas de España. Encuentra información sobre destinos, actividades y servicios para planificar tu próxima escapada al mar.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Enlaces Útiles</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#descripcion" class="text-dark">Descripción</a></li>
                        <li><a href="#servicios" class="text-dark">Servicios</a></li>
                        <li><a href="#actividades" class="text-dark">Actividades</a></li>
                        <li><a href="#informacion" class="text-dark">Información Adicional</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contacto</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="mailto:info@playas2024.com" class="text-dark">info@playas2024.com</a></li>
                        <li><a href="tel:+34900123456" class="text-dark">+34 900 123 456</a></li>
                        <li><a href="./contacto.html" class="text-dark">Formulario de Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-dark text-white">
            © 2024 Playas 2024. Todos los derechos reservados.
        </div>
    </footer>


    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>