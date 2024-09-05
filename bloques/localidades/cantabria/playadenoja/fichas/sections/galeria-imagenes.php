<section id="galeria" class="map container my-5">

<?php // Carrusel de 3 Imágenes //
$lugar = 'playadenoja';
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
$imges_name = ['/playadetrengandin.jpg', '/vistaaereadelaplayadenoja.jpg', '/rocasenplayadenoja.jpg'];
$alt = ["Vista de la Playa Trengandin", "Vista aerea de la Playa de Noja", "Rocas en la Playa de Noja"];
require './../../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>


<?php // Galeria 3 imagenes
    $lugar = 'playadenoja';
    $ruta = './../../../../../bloques/localidades/' . $lugar . '/img';
    $imges_name = ['/vistadelaplayadenoja.jpg', '/atardecerenlaplayadenoja.jpg', '/playaderis.jpg'];
    $alt = ["Vista aerea de la Playa de Noja", "Atardecer en la Playa de Noja", "Actividades en la Playa de Noja"];
    require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>

</section>