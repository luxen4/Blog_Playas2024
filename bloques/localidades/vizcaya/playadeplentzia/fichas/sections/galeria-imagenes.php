<!-- Galería de Imágenes -->
<section class="container my-5">
    <?php // Carrusel de 3 Imágenes //
    $lugar = 'playadeplentzia';
    $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' .$region. '/' . $lugar . '/img';
    $imges_name = ['/vista-aerea-playa-plentzia.jpg', '/panoramicadelaplayadeplentzia.jpg', '/atardecerenplayadeplentzia.jpg'];
    $alt = ["Vista aérea de la Playa de Plentzia y su entorno natural", "Vista panorámica de la Playa de Plentzia con arena dorada y aguas tranquilas", "Atardecer en la Playa de Plentzia"];
    require $atras_5niveles . '/bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>

    <?php // Galeria 3 imagenes //
    $lugar = 'playadeplentzia';
    $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' .$region. '/' . $lugar . '/img';
    $imges_name = ['/vistadeplayadeplentzia2.jpg', '/paseomaritimo.jpg', '/puentenuevoplayadeplentzia.jpg'];
    $alt = ["Vista de la Playa de Plentzia", "Paseo Maritimo en Playa de Plentzia", "Puente Nuevo Playa de Plentzia"];
    require $atras_5niveles . '/bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>
</section>

<style>
    #galeria .card-img-top {
        height: 250px;
        object-fit: cover;
    }

    #galeria .card-body {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
    }

    #galeria .card-text {
        color: #333;
        font-size: 1rem;
        font-weight: 500;
    }
</style>



<?php
/*
"Vista panorámica de la Playa de Plentzia con arena dorada y aguas tranquilas"
"Atardecer en la Playa de Plentzia, Vizcaya"
"Familias disfrutando de un día soleado en la Playa de Plentzia"
"Deportistas practicando paddle surf en la Playa de Plentzia"
"Vista aérea de la Playa de Plentzia y su entorno natural"
"Playa de Plentzia en la costa vasca, ideal para un día de relax"
"Niños jugando en la arena de la Playa de Plentzia"
"Paseo marítimo junto a la Playa de Plentzia, Vizcaya"
*/ ?>