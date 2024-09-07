<!-- Sección de Galería -->
<section id="galeria" class="container my-5">
    <h2 class="text-center mb-4">Galería de Imágenes - Playa de Biarritz</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/vista-panoramica-aerea-playa-de-biarritz.jfif" class="card-img-top img-fluid" alt="Vista aérea de la Playa de Biarritz">
                <div class="card-body">
                    <p class="card-text text-center">Vista aérea de la Playa de Biarritz</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/surfistas-playa-biarritz-francia.jfif" class="card-img-top img-fluid" alt="Surf en la Playa de Biarritz">
                <div class="card-body">
                    <p class="card-text text-center">Surf en la Playa de Biarritz</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/puesta-sol-playa-biarritz.jpeg" class="card-img-top img-fluid" alt="Puesta de sol en Biarritz">
                <div class="card-body">
                    <p class="card-text text-center">Puesta de sol en Biarritz</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/panoramica-playa-biarritz.jpg" class="card-img-top img-fluid" alt="Panorámica de la Playa de Biarritz">
                <div class="card-body">
                    <p class="card-text text-center">Panorámica de la Playa de Biarritz</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/dia-de-verano-en-la-playa-de-biarritz.jfif" class="card-img-top img-fluid" alt="Gente disfrutando en la Playa de Biarritz">
                <div class="card-body">
                    <p class="card-text text-center">Gente disfrutando en la Playa de Biarritz</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="./../img/paseo-maritimo-playa-biarritz.jfif" class="card-img-top img-fluid" alt="Paseo marítimo de Biarritz">
                <div class="card-body">
                    <p class="card-text text-center">Paseo marítimo en Biarritz</p>
                </div>
            </div>
        </div>
    </div>
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