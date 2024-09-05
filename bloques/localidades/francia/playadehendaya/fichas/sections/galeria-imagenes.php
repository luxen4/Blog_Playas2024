<!-- Galería de Imágenes -->
<section id="galeria" class="gallery container">
    <?php // Carrusel de 3 Imágenes //
    $lugar = 'francia/playadehendaya';
    $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/francia/' . $lugar . '/img';
    $imges_name = ['/playa-de-hendaya_1.jpg', '/playa-de-hendaya_2.jpg', '/playa-de-hendaya_4.jpg'];
    $alt = ["Playa de Hendaya", "Vista aerea de la Playa de Hendaya.", "Vista panorámica de la Playa de Hendaya."];
    require './../../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>


    <?php // Galeria 3 imagenes //
    $lugar = 'francia/playadehendaya';
    $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/francia/' . $lugar . '/img';
    $imges_name = ['/surfistas-playa-de-hendaya.png', '/casino-playa-de-hendaya.png', '/turistas-paseando-por-la-playa-de-hendaya.jpg'];
    $alt = [
        "Surfistas en la Playa de Hendaya",
        "Casino en la Playa de Hendaya.",
        "Turistas paseando por la orilla de la Playa de Hendaya en un día soleado."
    ];
    require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>
</section>