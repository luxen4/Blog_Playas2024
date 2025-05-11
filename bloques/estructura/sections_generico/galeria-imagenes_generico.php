<?php
function generarGaleria($imagenes) {
    echo '<hr><section id="galeria" class="gallery">';
    echo '<h2 class="text-primary"><i class="fas fa-image" style="color: #2980b9;"></i> Galería de Imágenes</h2>';
    echo '<div class="row">';

    foreach ($imagenes as $imagen) {
        echo '<div class="col-lg-4 col-md-6 mb-3">';
        echo '<figure>';
        echo '<img src="' . htmlspecialchars($imagen['src']) . '" alt="' . htmlspecialchars($imagen['alt']) . '" class="img-fluid">';


        if($imagen['href'] != ''){
        echo '<figcaption>';
        echo htmlspecialchars($imagen['figcaption']) . '<br>Fuente: ';            
        echo '<a href="' . htmlspecialchars($imagen['href']) . '" target="_blank">' . htmlspecialchars($imagen['titulo_href']) . '</a>';
        echo '</figcaption>';        
        }

        echo '</figure>';
        echo '</div>';
    }

    echo '</div>';
    echo '</section>';
}

generarGaleria($imagenes);

?>
