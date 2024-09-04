
        <!-- Galería de Imágenes -->
        <section class="container my-5">
            <?php // Carrusel de 3 Imágenes //
            $lugar = 'playadesopelana';
            $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' .$region. '/' . $lugar . '/img';
            $imges_name = ['/vistaaereadelaplayadeplentzia.jpg', '/atardecerenlaplayadesopelana.jpg', '/surfistasenplayadesopenana.jpg'];
            $alt = ["Vista aérea de la Playa de Sopelana y su entorno natural", "Atardecer en la Playa de Sopelana", "Surfistas en la Playa de Sopelana"];
            require './../../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>

            <?php // Galeria 3 imagenes //
            $lugar = 'playadesopelana';
            $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' .$region. '/' . $lugar . '/img';
            $imges_name = ['/playa-atxabiribil.jpg', '/familiasyturistasenplayadesopelana.jpg', '/rocasenplayadesopelana2.jpg'];
            $alt = ["Vista de la Playa de Atxabiribil", "Familias y turistas relajándose en la Playa de Sopelana", "Rocas y betas Playa de Sopelana"];
            require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>
        </section>

        <?php
        /*
            "Vista panorámica de la Playa de Sopelana con acantilados y surfistas en el agua"
            "Atardecer sobre los acantilados de la Playa de Sopelana"
            "Surfistas disfrutando de las olas en la Playa de Sopelana, Vizcaya"
            "Caminantes explorando los senderos costeros cerca de la Playa de Sopelana"
            "Playa de Sopelana con su paisaje natural y aguas cristalinas"
            "Familias y turistas relajándose en la Playa de Sopelana"
            "Vista aérea de la Playa de Sopelana y su entorno natural"
            "Arena dorada y aguas azules en la Playa de Sopelana, ideal para surf y relax"
        */
        ?>

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
    Alt: "Vista panorámica de la Playa de Zarautz al atardecer, con surfistas disfrutando de las olas."
    Alt: "Playa de Zarautz en un día soleado, con su extenso paseo marítimo y montañas al fondo."
    Alt: "Olas rompiendo en la Playa de Zarautz, un lugar popular para el surf en el País Vasco."
    Alt: "Paseo marítimo de Zarautz con palmeras y restaurantes, ideal para caminar y disfrutar del mar."
    Alt: "Surfistas cogiendo olas en la Playa de Zarautz, conocida por sus excelentes condiciones para este deporte."
    Alt: "Arena dorada de la Playa de Zarautz con el mar Cantábrico en el horizonte."
    Alt: "Familias disfrutando de un día de playa en Zarautz, con sombrillas y castillos de arena."
    Alt: "Vista aérea de la Playa de Zarautz, mostrando su extensión y la costa vasca."
    Alt: "Paseo marítimo de Zarautz al amanecer, con la playa y el mar en calma."
    Alt: "Zarautz al atardecer, con colores cálidos reflejándose en el mar desde la playa."
    Alt: "Surfista saliendo del agua en la Playa de Zarautz, con el mar en el fondo."
    Alt: "Playa de Zarautz, famosa por su larga extensión y actividades acuáticas."




<section id="galeria" class="container my-5">

<?php // Carrusel de 3 Imágenes //
$lugar = 'playadezarautz';
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
$imges_name = ['/atardecerzarautzsurfistas.jpg', '/playadezarautzdiasoleado.jpg', '/paseomaritimozarautz.jpg'];
$alt = ["Vista panorámica de la Playa de Zarautz al atardecer, con surfistas disfrutando de las olas.", "Playa de Zarautz en un día soleado, con su extenso paseo marítimo y montañas al fondo.", "Paseo marítimo de Zarautz con palmeras y restaurantes, ideal para caminar y disfrutar del mar."];
require './../../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>

<?php // Galeria 3 imagenes //
$lugar = 'playadezarautz';
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
$imges_name = ['/amanecerplayazarautz.jpg', '/surfistasaliendoplayazarautz.png', '/familiasenlaplayadezarautz.jpg'];
$alt = ["Amanecer en la Playa de Zarautz", "Surfista saliendo del agua en la Playa de Zarautz, con el mar en el fondo.", "Familias disfrutando de un día de playa en Zarautz, con sombrillas y castillos de arena."];
require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; */ ?>