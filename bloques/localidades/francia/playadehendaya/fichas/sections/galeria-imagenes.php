<!-- Galería de Imágenes -->
<section id="galeria" class="gallery container">
    <?php // Carrusel de 3 Imágenes //
    $lugar = 'francia/playadehendaya';
    $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
    $imges_name = ['/playa-de-hendaya_1.jpg', '/playa-de-hendaya_2.jpg', '/playa-de-hendaya_4.jpg'];
    $alt = ["Playa de Hendaya", "Vista aerea de la Playa de Hendaya.", "Vista panorámica de la Playa de Hendaya."];
    require './../../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>


    <?php // Galeria 3 imagenes //
    $lugar = 'francia/playadehendaya';
    $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
    $imges_name = ['/surfistas-playa-de-hendaya.png', '/casino-playa-de-hendaya.png', '/turistas-paseando-por-la-playa-de-hendaya.jpg'];
    $alt = [
        "Surfistas en la Playa de Hendaya",
        "Casino en la Playa de Hendaya.",
        "Turistas paseando por la orilla de la Playa de Hendaya en un día soleado."
    ];
    require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>
</section>



<?php /*
<!-- Galería de Imágenes -->
<section id="galeria" class="container my-5">
    <h2 class="text-center mb-4">Galería de Imágenes - Playa de Hendaya</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="/Blog_Playas2024/bloques/localidades/francia/playadehendaya/img/playa-de-hendaya_1.jpg" class="card-img-top img-fluid" alt="Playa de Hendaya.">
                <div class="card-body">
                    <p class="card-text text-center">Playa de Hendaya.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="/Blog_Playas2024/bloques/localidades/francia/playadehendaya/img/surfistas-playa-de-hendaya.png" class="card-img-top img-fluid" alt="Surf en la Playa de Hendaya.">
                <div class="card-body">
                    <p class="card-text text-center">Surf en la Playa de Hendaya.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">


            <div class="card border-0 shadow">
                <img src="/Blog_Playas2024/bloques/localidades/francia/playadehendaya/img/playa-de-hendaya_4.jpg" class="card-img-top img-fluid" alt="Vista general de la playa de Hendaya.">
                <div class="card-body">
                    <p class="card-text text-center">Vista general de la playa de Hendaya.</p>
                </div>
            </div>

        </div>
        <div class="col-md-4 mb-4">
            <?php 
        
            <div class="card border-0 shadow">
                <img src="./../img/paseo-maritimeo-san-juan-de-luz.jpg" class="card-img-top img-fluid" alt="Panorámica de la Playa de San Juan de Luz desde el paseo marítimo">
                <div class="card-body">
                    <p class="card-text text-center">Panorámica de la Playa de San Juan de Luz desde el paseo marítimo</p>
                </div>
            </div>

            <div class="card border-0 shadow">
                <img src="/Blog_Playas2024/bloques/localidades/francia/playadehendaya/img/casino-playa-de-hendaya.png" class="card-img-top img-fluid" alt="Casino en la Playa de Hendaya.">
                <div class="card-body">
                    <p class="card-text text-center">Casino en la Playa de Hendaya.</p>
                </div>
            </div>



        </div>
        <div class="col-md-4 mb-4">
            <?php /*
            <div class="card border-0 shadow">
                <img src="./../img/familias-disfrutando-playa-san-juan-de-luz.jpg" class="card-img-top img-fluid" alt="Familias disfrutando en la Playa de San Juan de Luz">
                <div class="card-body">
                    <p class="card-text text-center">Familias disfrutando en la Playa de San Juan de Luz</p>
                </div>
            </div> 


            <div class="card border-0 shadow">
                <img src="/Blog_Playas2024/bloques/localidades/francia/playadehendaya/img/turistas-paseando-por-la-playa-de-hendaya.jpg" class="card-img-top img-fluid" alt="Turistas paseando por la Playa de Hendaya.">
                <div class="card-body">
                    <p class="card-text text-center">Turistas paseando por la Playa de Hendaya.</p>
                </div>
            </div>

        </div>



        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="/Blog_Playas2024/bloques/localidades/francia/playadehendaya/img/playa-de-hendaya_1.jpg" class="card-img-top img-fluid" alt="Playa de Hendaya.">
                <div class="card-body">
                    <p class="card-text text-center">Playa de Hendaya.</p>
                </div>
            </div>
        </div>

    </div>
</section>
*/ ?>



<?php /*
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