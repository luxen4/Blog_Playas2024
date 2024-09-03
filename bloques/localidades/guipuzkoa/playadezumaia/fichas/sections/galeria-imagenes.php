
<section id="galeria" class="container my-5">
    <h2 class="text-center mb-4">Galería de Imágenes - Playa de Zumaia</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/vista-aerea-playa-zumaia.jpg" class="card-img-top img-fluid" alt="Vista aérea de la Playa de Zumaia">
                <div class="card-body">
                    <p class="card-text text-center">Vista aérea de la Playa de Zumaia</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/surf-playa-zumaia.jpg" class="card-img-top img-fluid" alt="Surf en la Playa de Zumaia">
                <div class="card-body">
                    <p class="card-text text-center">Surf en la Playa de Zumaia</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/puesta-sol-playa-zumaia.jpg" class="card-img-top img-fluid" alt="Puesta de sol en Zumaia">
                <div class="card-body">
                    <p class="card-text text-center">Puesta de sol en Zumaia</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/amanecer-playa-zumaia.png" class="card-img-top img-fluid" alt="Amanecer en la Playa de Zumaia">
                <div class="card-body">
                    <p class="card-text text-center">Amanecer en la playa de Zumaia con el mar en calma</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/gente-disfrutando-playa-zumaia.jpg" class="card-img-top img-fluid" alt="Gente disfrutando en la Playa de Zumaia">
                <div class="card-body">
                    <p class="card-text text-center">Gente disfrutando en la Playa de Zumaia</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/olas-rompiendo-playa-zumaia.png" class="card-img-top img-fluid" alt="Olas rompiendo en la Playa de Zumaia, un lugar popular para el surf en el País Vasco.">
                <div class="card-body">
                    <p class="card-text text-center">Olas rompiendo en la Playa de Zumaia, un lugar popular para el surf en el País Vasco.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php /*
<section id="galeria" class="content-section container my-5">
    <?php // Carrusel de 3 Imágenes //
    $lugar = 'playadezumaia';
    $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
    $imges_name = ['/playadezumaia.jpg', '/vistaaereadelaplayadezumaia.jpg', '/rocasenlaplayadezumaia.jpg'];
    $alt = ["Vista de la Playa de Zumaia", "Vista aerea de la playa de Zumaia", "Rocas en la playa de Zumaia"];
    require './../../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>

    <?php // Galeria 3 imagenes //
    $lugar = 'playadezumaia';
    $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
    $imges_name = ['/vistaaereadelaplayadezumaia.jpg', '/vistadelaplayadezumaia2.jpg', '/vistadelaplayadezumaia3.jpg'];
    $alt = ["Vista aerea de la playa de Zumaia", "Vista de la Playa de Zumaia", "Vista de la Playa de Zumaia"];
    require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>
</section> */ ?>


















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
    Alt: "Vista panorámica de la Playa de Zumaia al atardecer, con surfistas disfrutando de las olas."
    Alt: "Playa de Zumaia en un día soleado, con su extenso paseo marítimo y montañas al fondo."
    Alt: "Olas rompiendo en la Playa de Zumaia, un lugar popular para el surf en el País Vasco."
    Alt: "Paseo marítimo de Zumaia con palmeras y restaurantes, ideal para caminar y disfrutar del mar."
    Alt: "Surfistas cogiendo olas en la Playa de Zumaia, conocida por sus excelentes condiciones para este deporte."
    Alt: "Arena dorada de la Playa de Zumaia con el mar Cantábrico en el horizonte."
    Alt: "Familias disfrutando de un día de playa en Zumaia, con sombrillas y castillos de arena."
    Alt: "Vista aérea de la Playa de Zumaia, mostrando su extensión y la costa vasca."
    Alt: "Paseo marítimo de Zumaia al amanecer, con la playa y el mar en calma."
    Alt: "Zumaia al atardecer, con colores cálidos reflejándose en el mar desde la playa."
    Alt: "Surfista saliendo del agua en la Playa de Zumaia, con el mar en el fondo."
    Alt: "Playa de Zumaia, famosa por su larga extensión y actividades acuáticas."




<section id="galeria" class="container my-5">

<?php // Carrusel de 3 Imágenes //
$lugar = 'playadezumaia';
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
$imges_name = ['/atardecerzumaiasurfistas.jpg', '/playadezumaiadiasoleado.jpg', '/paseomaritimozumaia.jpg'];
$alt = ["Vista panorámica de la Playa de Zumaia al atardecer, con surfistas disfrutando de las olas.", "Playa de Zumaia en un día soleado, con su extenso paseo marítimo y montañas al fondo.", "Paseo marítimo de Zumaia con palmeras y restaurantes, ideal para caminar y disfrutar del mar."];
require './../../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>

<?php // Galeria 3 imagenes //
$lugar = 'playadezumaia';
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
$imges_name = ['/amanecerplayazumaia.jpg', '/surfistasaliendoplayazumaia.png', '/familiasenlaplayadezumaia.jpg'];
$alt = ["Amanecer en la Playa de Zumaia", "Surfista saliendo del agua en la Playa de Zumaia, con el mar en el fondo.", "Familias disfrutando de un día de playa en Zumaia, con sombrillas y castillos de arena."];
require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; */ ?>