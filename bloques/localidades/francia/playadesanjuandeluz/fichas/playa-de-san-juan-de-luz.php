<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'San Juan de Luz';
$region = 'Pirineos Atlánticos';
$site_verification_content = 'tu_codigo_de_verificacion_aqui'; // Asegúrate de que este código es correcto para San Juan de Luz si se utiliza para verificación
$description_content = 'Explora la Playa de San Juan de Luz, un hermoso arenal en la costa vasca francesa, ideal para disfrutar del surf, paseos marítimos y la rica gastronomía local.';
$keywords_content = 'Playa de San Juan de Luz, surf, naturaleza, paseo marítimo, Costa Vasca, turismo en Pirineos Atlánticos, San Juan de Luz';

$graph_Meta_Tags_property_title = 'Playa de San Juan de Luz - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de San Juan de Luz, un hermoso arenal en la costa vasca francesa, ideal para disfrutar del surf, paseos marítimos y la rica gastronomía local.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/pirineos-atlanticos/playa-de-san-juan-de-luz/playa-de-san-juan-de-luz.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/pirineos-atlanticos/playa-de-san-juan-de-luz/fichas/playa-de-san-juan-de-luz.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia'; // Actualiza si es necesario
$twiterCards_title = 'Playa de San Juan de Luz - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de San Juan de Luz, un hermoso arenal en la costa vasca francesa, ideal para disfrutar del surf, paseos marítimos y la rica gastronomía local.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/pirineos-atlanticos/playa-de-san-juan-de-luz/playa-de-san-juan-de-luz.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/pirineos-atlanticos/playa-de-san-juan-de-luz/fichas/playa-de-san-juan-de-luz.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de San Juan de Luz - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de San Juan de Luz, un hermoso arenal en la costa vasca francesa, ideal para disfrutar del surf, paseos marítimos y la rica gastronomía local.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/pirineos-atlanticos/playa-de-san-juan-de-luz/playa-de-san-juan-de-luz.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'San Juan de Luz';
$localidad_minuscula = 'san-juan-de-luz';

$descripcion = 'Explora la Playa de San Juan de Luz, un destino famoso por su hermoso arenal, excelente para practicar surf y disfrutar de un vibrante paseo marítimo lleno de vida.';
$url = 'http://playas2024.kesug.com/bloques/localidades/pirineos-atlanticos/playa-de-san-juan-de-luz/fichas/playa-de-san-juan-de-luz.php';

$mainEntity_description = 'La Playa de San Juan de Luz es una de las playas más emblemáticas de la costa vasca francesa, conocida por su hermoso arenal, mar tranquilo y excelente oferta gastronómica.';
$mainEntity_addressLocality = 'San Juan de Luz';
$mainEntity_addressRegion = 'Pirineos Atlánticos';
$mainEntity_addressCountry = 'Francia';

$mainEntity_geo_latitude = 43.3833;
$mainEntity_geo_longitude = -1.6667;

$mainEntity_image = 'https://example.com/path/to/san-juan-de-luz-image.jpg'; // Reemplaza con la imagen correcta
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/pirineos-atlanticos/playa-de-san-juan-de-luz/fichas/playa-de-san-juan-de-luz.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>


<body>



<?php

$page = 'playadesanjuandeluz';
$atras_5niveles = './../../../../..';

require $atras_5niveles . "/bloques/estructura/header.php"; ?>
<?php include_once $atras_5niveles . '/bloques/estructura/barra_navegacion2.php'; ?>
<?php include_once $atras_5niveles . '/bloques/estructura/anuncios/carga_productos.php'; ?>
<?php define('BASE_PATH_ESTRUCTURA', __DIR__ . $atras_5niveles . '/bloques/estructura/'); ?>




<?php require './sections/encabezado.php'; ?>
<?php $articulo = 'sandals_man';
include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

<!-- Contenido principal -->
<main class="container my-4">
    <?php require './sections/descripcion-detallada.php'; ?>
    <?php $articulo = 'jeans_man';
    include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <?php require './sections/mapa-ubicacion.php'; ?>
    <?php $articulo = 'shirts_modelo_derecha';
    include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <?php require './sections/actividades-recomendadas.php'; ?>
    <?php $articulo = 'sneakers_izquierda_45';
    include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <?php require './sections/servicios.php'; ?>
    <?php $articulo = 'dress_woman';
    include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>


    <?php require './sections/galeria-imagenes.php'; ?>
    <?php $articulo = 'purse_woman';
    include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
    <?php $articulo = 'sandals_woman_izda_15';
    include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>



    <?php require './sections/contacto.php'; ?>
    <?php $articulo = 'sandals_woman_izda_15';
    include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

</main>

<!-- Footer -->
<?php require $atras_5niveles . '/bloques/estructura/footer.php'; ?>


<?php require $atras_5niveles . '/bloques/estructura/anuncios/js/logica_anuncios.php'; ?>
<?php require $atras_5niveles . '/bloques/estructura/js_bootstrap/scripts-bootstrap.php'; ?>

</body>

</html> 
















<?php /*


<!-- Header -->
<header class="bg-primary text-white text-center py-5">
    <h1>Playa de San Juan de Luz</h1>
    <p class="lead">Tu destino perfecto en la costa vasca francesa</p>
    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-white" href="#presentacion">Presentación</a>
            </li>            
            <li class="nav-item">
                <a class="nav-link text-white" href="#ubicacion">Ubicación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#actividades">Actividades</a>
            </li>            
            <li class="nav-item">
                <a class="nav-link text-white" href="#servicios">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#galeria">Galería</a>
            </li>

            <?php /*
            <li class="nav-item">
                <a class="nav-link text-white" href="#contacto">Contacto</a>
            </li> */ ?>
            
            <li class="nav-item">
                <a class="nav-link text-white" href="#masinfo">Más Info</a>
            </li>
        </ul>
    </nav>


    
</header>


<main>

<!-- Presentación -->
<section id="presentacion" class="container my-5">
    <h2 class="text-center">Bienvenidos a San Juan de Luz</h2>
    <p class="text-justify">La playa de San Juan de Luz, situada en el encantador municipio costero del País Vasco francés, es un destino ideal para quienes buscan disfrutar de la belleza natural y la rica cultura local. Con su arena dorada y aguas tranquilas, esta playa es perfecta tanto para familias como para amantes de los deportes acuáticos. San Juan de Luz se distingue por su ambiente relajado, su pintoresco puerto y su histórico casco antiguo, lo que la convierte en una de las joyas de la costa atlántica.</p>
</section>


<?php $articulo = 'shirts'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

<!-- Mapa de Ubicación -->
<section id="ubicacion" class="map container my-5">
    <h2 class="text-center">Ubicación</h2>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2899.9740157831254!2d-1.664256684502581!3d43.389344879.130274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51944c1d2d76df%3A0x84059a9ae9f3e9b5!2sPlage%20de%20Saint-Jean-de-Luz!5e0!3m2!1ses!2ses!4v1697641577763!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>


<!-- Actividades -->
<section id="actividades" class="container my-5">
    <h2 class="text-center mb-4">Actividades en la Playa de San Juan de Luz</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <h3>Surf</h3>
            <p>San Juan de Luz es un destino perfecto para los amantes del surf. Las olas son ideales tanto para principiantes como para surfistas experimentados. Hay varias escuelas de surf en la playa que ofrecen clases y alquiler de equipo.</p>
            <img src="./../img/surf-en-san-juan-de-luz.png" alt="Surf en San Juan de Luz" class="img-fluid rounded">
        </div>
        <div class="col-md-6 mb-4">
            <h3>Paseos en barco</h3>
            <p>Disfruta de un paseo en barco por la bahía de San Juan de Luz. Explora la costa vasca desde el mar y admira las vistas panorámicas de la playa y las montañas circundantes.</p>
            <img src="./../img/paseos-en-barco-en-san-juan-de-luz.png" alt="Paseos en barco en San Juan de Luz" class="img-fluid rounded">
        </div>
        <div class="col-md-6 mb-4">
            <h3>Senderismo</h3>
            <p>Los alrededores de San Juan de Luz ofrecen excelentes rutas de senderismo. Explora los senderos costeros que te llevarán a impresionantes miradores con vistas al océano Atlántico.</p>
            <img src="./../img/senderismo-en-san-juan-de-luz.jpg" alt="Senderismo en San Juan de Luz" class="img-fluid rounded">
        </div>
        <div class="col-md-6 mb-4">
            <h3>Kayak y Paddle Surf</h3>
            <p>Alquila un kayak o una tabla de paddle surf y explora la costa de San Juan de Luz desde el agua. Es una excelente manera de disfrutar de la tranquilidad del mar y la belleza natural del entorno.</p>
            <img src="./../img/kayak-y-paddle-surf-en-san-juan-de-luz.jpg" alt="Kayak y Paddle Surf en San Juan de Luz" class="img-fluid rounded">
        </div>
    </div>
</section>


<?php /* Hacer mi montaje

video 
Se podría copiar con mis fotografias
https://www.youtube.com/watch?v=gEFvZUnrEfU

<div class="container my-5">
    <h2 class="text-center">Explora la Playa de San Juan de Luz</h2>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gEFvZUnrEfU" allowfullscreen></iframe>
    </div>
</div> */?>







<!-- Galería de Imágenes -->
<section id="galeria" class="gallery container my-5">
    <h2 class="text-center">Galería de Imágenes</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="./../img/playa-de-san-juan-de-luz.jpg" alt="Vista de la playa de San Juan de Luz" class="img-fluid mb-3">
        </div>
        <div class="col-md-4">
            <img src="./../img/vista-general-casetas-playa-de-san-juan-de-luz.jpg" alt="Vista general de la Playa de San Juan de Luz y casetas" class="img-fluid mb-3">
        </div>
        <div class="col-md-4">
            <img src="./../img/paseo-playa-de-san-juan-de-luz.png" alt="Paseo por la Playa en San Juan de Luz" class="img-fluid mb-3">
        </div>
    </div>
</section>

<?php $articulo = 'sandals_man'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

<!-- Servicios y Actividades -->
<section id="servicios" class="container my-5">
    <h2 class="text-center">Servicios y Actividades</h2>
    <div class="row">
        <div class="col-md-6">
            <ul>
                <li><strong>Alquiler de sombrillas y tumbonas:</strong> Disfruta de un día de sol con todas las comodidades.
            </li>
                <li><strong>Escuelas de surf:</strong> Aprende a surfear o mejora tus habilidades con instructores locales.</li>
                <li><strong>Chiringuitos y restaurantes:</strong> Saborea la gastronomía local con vistas al mar.</li>
                <li><strong>Zonas de juegos infantiles:</strong> Ideal para que los más pequeños se diviertan en un entorno seguro.</li>
                <li><strong>Senderismo y paseos:</strong> Explora los senderos costeros que ofrecen vistas impresionantes de la bahía.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul>
                <li><strong>Parking cercano:</strong> Acceso fácil y cómodo con parking cercano disponible.</li>
                <li><strong>Accesibilidad:</strong> Servicios y acceso adaptados para personas con movilidad reducida.</li>
                <li><strong>Actividades acuáticas:</strong> Disfruta de actividades como el paddle surf, kayak, y más.</li>
                <li><strong>Socorristas:</strong> Seguridad garantizada con socorristas disponibles durante la temporada alta.</li>
                <li><strong>Alquiler de bicicletas:</strong> Recorre la ciudad y sus alrededores en bicicleta con opciones de alquiler cercanas.</li>
            </ul>
        </div>
    </div>
</section>


<?php $articulo = 'shorts'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>


<!-- Más info -->
<section id="masinfo" class="map container my-5">
    <h6>Para más información puede consultar en la pagina de la oficina de turismo de la
        <a href="https://www.guide-du-paysbasque.com/es/turismo/informacion/oficinas-de-turismo/san-juan-de-luz-75/oficina-de-turismo-de-san-juan-de-luz-1372.html">Playa de San Juan de Luz</a>
    </h6>
</section>
        </main>


<?php /*
<!-- Sección de Testimonios -->
<section id="testimonios" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Lo que dicen nuestros visitantes</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>"San Juan de Luz es un paraíso. La playa es hermosa y la ciudad tiene un encanto único. ¡Volveremos!"</p>
                            <footer class="blockquote-footer">María García, <cite title="Source Title">Visitante</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>"Perfecto para una escapada familiar. Mis hijos disfrutaron muchísimo en la playa y nosotros en los restaurantes locales."</p>
                            <footer class="blockquote-footer">Juan Pérez, <cite title="Source Title">Turista</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>"El lugar ideal para desconectar. Playas, senderos, buena comida y una atmósfera relajada. ¡Muy recomendado!"</p>
                            <footer class="blockquote-footer">Ana López, <cite title="Source Title">Viajera</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<!-- Sección de Contacto -->
<section id="contacto" class="py-5">
    <div class="container">
        <h2 class="text-center">Contáctanos</h2>
        <p class="text-center">¿Tienes alguna pregunta o necesitas más información? ¡Estamos aquí para ayudarte!</p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="envio_contacto.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>*/ ?>



<?php /*
<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2024 Playa de San Juan de Luz. Todos los derechos reservados.</p>
            </div>
            <div class="col-md-6 text-right">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="text-white">Política de Privacidad</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white">Términos de Servicio</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer> */ ?>


    <footer>
        <?php require './../../../../../bloques/estructura/footer.php'; ?>
    </footer>
    
<!-- lógica de anuncios -->
<?php require './../../js/logica_anuncios_generico.php'; ?>

<!-- Enlace a Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>