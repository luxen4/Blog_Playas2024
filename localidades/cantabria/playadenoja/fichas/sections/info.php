<?php 
$li_encabezado = '
    <p class="text-center">Descubre la Playa de Noja, una joya de la costa cantábrica. 
        <br>Con su amplia franja de arena dorada, aguas tranquilas y un entorno natural impresionante, es el lugar perfecto para disfrutar de la playa, practicar deportes acuáticos y relajarse. 
        <br>Su paseo marítimo está lleno de bares y restaurantes que ofrecen la deliciosa gastronomía local, creando una experiencia inolvidable para todos los visitantes.
        <br>Noja es el destino perfecto para disfrutar del mar, deportes y la naturaleza.
    </p>'; 
?>

<?php 
$li_descripcion_detallada = '
    <p class="section-content">La Playa de Noja, en la costa de Cantabria, combina belleza natural y comodidad. Con su amplia arena dorada y aguas cristalinas, es ideal para descansar y practicar deportes acuáticos. Rodeada de dunas y marismas, es un refugio de biodiversidad perfecto para los amantes de la naturaleza.</p>
    <p class="section-content">Noja ofrece servicios como restaurantes y tiendas cercanas, y un paseo marítimo para disfrutar del entorno. En verano, se celebran mercadillos locales.</p>

    <h3>Seguridad y Accesibilidad</h3>
    <ul>
        <li class="my-4"><strong>Seguridad:</strong> <br>Socorristas en temporada alta.</li>
        <li class="my-4"><strong>Accesibilidad:</strong> <br>Rampas y sillas anfibias para personas con movilidad reducida.</li>
    </ul>


';
?>


<?php $li_mapa_ubicacion = '
    <p>La Playa de Noja es de fácil acceso tanto en coche como en transporte público.</p>
    <ul>
        <li class="my-4"><strong>En coche:</strong><br> Desde Santander, la Playa de Noja se encuentra a unos 40 minutos en coche por la autovía A-8 y la carretera CA-147. Hay varias zonas de aparcamiento cerca de la playa, tanto gratuitas como de pago.</li>
        <li class="my-4"><strong>En autobús:</strong><br> La playa está bien conectada mediante líneas de autobús que operan desde Santander y otras localidades cercanas, con paradas a poca distancia de la playa.</li>
        <li class="my-4"><strong>A pie o en bicicleta:</strong><br> Noja cuenta con senderos y carriles bici que permiten disfrutar del paisaje mientras se llega a la playa, ofreciendo una alternativa ecológica y saludable para desplazarse.</li>
    </ul>
    <h3>Mapa de la Playa de Noja</h3>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5831.651444241797!2d-3.223077446167217!3d43.386075434058306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd491d8696af44a3%3A0xc1223f750f28a028!2sCastro-Urdiales%2C%20Cantabria!5e0!3m2!1ses!2ses!4v1692109982432!5m2!1ses!2ses"
        width="100%"
        height="450"
        allowfullscreen=""
        loading="lazy"
        aria-hidden="false"
        tabindex="0">
    </iframe>
'; ?>

<?php $li_actividades_recomendadas = '
    <ul class="list-unstyled">
        <li class="my-4"><strong>Deportes Acuáticos:</strong> <br>La Playa de Noja es un lugar popular para practicar surf, windsurf, y paddle surf. También se organizan cursos y clases para principiantes.</li>
        <li class="my-4"><strong>Senderismo:</strong> <br>Los alrededores de la playa ofrecen rutas de senderismo con vistas espectaculares, ideales para los amantes de la naturaleza y el aire libre.</li>
        <li class="my-4"><strong>Zonas Deportivas:</strong> <br>La playa cuenta con áreas designadas para jugar voleibol de playa y fútbol.</li>
        <li class="my-4"><strong>Excursiones:</strong> <br>Desde Noja, se pueden organizar excursiones en barco para explorar la costa cantábrica y sus acantilados.</li>
    </ul>
'; ?>

<?php $li_mas_info = '
    <ul>
        <li class="my-4"><strong>Teléfono:</strong> <br>+34 942 630 306</li>
        <li class="my-4"><strong>Email:</strong> <br>turismo@nojaescapada.com</li>
        <li class="my-4"><strong>Oficina de Turismo:</strong> <br>Plaza de la Villa, 12, 39180 Noja, Cantabria
            <a href="https://www.nojaturismo.com/"><strong>Web</strong></a>
        </li>
    </ul>
'; ?>


<?php $li_services = '
    <ul class="list-unstyled">
        <li class="my-4"><strong>Chiringuitos y Restaurantes:</strong> <br>A lo largo del paseo marítimo, encontrarás varios chiringuitos y restaurantes que ofrecen platos locales y bebidas refrescantes. Es un lugar perfecto para disfrutar de la gastronomía cántabra mientras se contempla el mar.</li>
        <li class="my-4"><strong>Alquiler de Equipos:</strong> <br>La playa cuenta con puntos de alquiler donde puedes rentar sombrillas, tumbonas, y equipos para deportes acuáticos como tablas de surf, paddle surf y kayaks.</li>
        <li class="my-4"><strong>Duchas y Baños Públicos:</strong> <br>La playa está equipada con duchas y baños públicos distribuidos a lo largo de la misma, lo que facilita la comodidad de los visitantes.</li>
        <li class="my-4"><strong>Aparcamiento:</strong> <br>Existen varias zonas de aparcamiento cercanas, algunas gratuitas y otras de pago, para facilitar el acceso a la playa.</li>
    </ul>
'; ?>



<?php // Carrusel de 3 Imágenes //
$lugar = 'playadenoja';
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/localidades/'.$region.'/'.$lugar.'/img';


$imagenes = [
        [
            'src' => $ruta . '/playa-trengandin-Isla-Cantabria.jpg',
            'alt' => 'Vista de la Playa de Trengandin, Noja, Cantabria',
            'figcaption' => 'Vista de la Playa de Trengandin.',
            'href' => 'https://www.travelechoes.com/es/trengandin',
            'titulo_href' => 'travelechoes.com'
        ],
        [
            'src' => $ruta . '/vista-aerea-playa-Noja-Cantabria.jpg',
            'alt' => 'Vista aerea de la Playa de Noja, Cantabria',
            'figcaption' => 'Vista aerea de la Playa de Noja.',
            'href' => 'https://somosviajeros.com/blog/la-costa-de-noja-santona-en-cantabria.html',
            'titulo_href' => 'somosviajeros.com'
        ],
        [
            'src' => $ruta .'/rocas-playa-Trengandin-Noja-Cantabria.jpg',
            'alt' => 'Rocas en la Playa de Noja, Cantabria',
            'figcaption' => 'Rocas en la Playa de Noja.',
            'href' => 'https://www.turismodeobservacion.com/foto/rocas-en-playa-trengandin-noja/78652/',
            /* https://vivirnoescaro.com/es/noja-y-sus-curiosas-playas-extraterrestres */
            'titulo_href' => 'turismodeobservacion.com'
        ],
        [
            'src' => $ruta .'/vista-playa-noja.jpg',
            'alt' => 'Vista aerea de la Playa de Noja',
            'figcaption' => 'Vista aerea de la Playa de Noja.',
            'href' => 'https://www.cantabriarural.com/playas/playas-de-noja-playa-de-ris.html',
            'titulo_href' => 'cantabriarural.com'
        ],
        [
            'src' => $ruta . '/atardecer-playa-Noja-Cantabria.jpg',
            'alt' => 'Atardecer en la Playa de Noja, Cantabria.',
            'figcaption' => 'Atardecer en la Playa de Noja.',
            'href' => 'https://sunrise.maplogs.com/es/noja_cantabria_spain.84879.html',
            'titulo_href' => 'maplogs.com'
        ],
        [
            'src' => $ruta .'/rocas-playa-Noja-cantabria.jpg',
            'alt' => 'Rocas en la Playa de Noja.',
            'figcaption' => 'Rocas en la playa de Noja.',
            'href' => 'https://www.ayuntamientodenoja.com/sicted_asociado.asp?id=8',
            'titulo_href' => 'ayuntamientodenoja.com'
        ]
    ]; 
    
    /* https://saposyprincesas.elmundo.es/actividades-ninos/cantabria/aire-libre/playas/playa-de-tregandin */
    ?>

