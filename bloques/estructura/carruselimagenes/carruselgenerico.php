<!-- Carrusel Genérico-->
<section id="galeria" class="container my-5">
    <h2>Galería de imágenes</h2>
    <div id="laredoGallery" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            // Suponiendo que $imges_name es un array con los nombres de las imágenes
            for ($i = 0; $i < count($imges_name); $i++) {
                // Añadir la clase 'active' solo a la primera imagen
                $active_class = $i === 0 ? 'active' : '';
                echo '
                <div class="carousel-item ' . $active_class . '">
                    <img src="' . $ruta . $imges_name[$i] . '" class="d-block w-100" alt="' . $alt[$i] . '">
                </div>';
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#laredoGallery" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#laredoGallery" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>