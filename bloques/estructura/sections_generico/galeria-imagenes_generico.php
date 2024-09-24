<?php
function generarGaleria($imagenes) {
    echo '<section class="gallery container mb-5">';
    echo '<h2 class="">Galería de Imágenes</h2>';
    echo '<div class="row">';
    
    foreach ($imagenes as $imagen) {
        echo '<div class="col-lg-4 col-md-6 mb-3">';
        echo '<figure>';
        echo '<img src="' . htmlspecialchars($imagen['src']) . '" alt="' . htmlspecialchars($imagen['alt']) . '" class="img-fluid">';


        if($imagen['href'] != ''){
        echo '<figcaption>';
        echo htmlspecialchars($imagen['figcaption']) . ' Fuente: ';            
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
