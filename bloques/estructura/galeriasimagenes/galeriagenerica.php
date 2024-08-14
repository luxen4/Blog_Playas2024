<!-- Galería de Imágenes -->
<section class="container my-5">
    <h2>Galería de Imágenes</h2>
    <div class="row gallery">
    <?php 
        // Iteramos sobre el array de nombres de imágenes
        for ($i = 0; $i < count($imges_name); $i++) {
            echo '<div class="col-md-4">
                    <img src="' . $ruta . '/' . $imges_name[$i] . '" alt="' . $alt[$i] . '" class="img-fluid gallery-image">
                  </div>';
        }
        ?>

    </div>
</section>        
<?php 
/* 
Vista aérea de la Playa de Noja: alt="Vista aérea de la Playa de Noja"
Atardecer en la Playa de Noja: alt="Atardecer en la Playa de Noja"
Actividades en la Playa de Noja: alt="Actividades en la Playa de Noja"
Dunas de la Playa de Noja: alt="Dunas de la Playa de Noja"
Familias disfrutando en la Playa de Noja: alt="Familias disfrutando en la Playa de Noja"
Surf en la Playa de Noja: alt="Surf en la Playa de Noja"
Paseo marítimo en Noja: alt="Paseo marítimo en Noja"
Mercadillo junto a la Playa de Noja: alt="Mercadillo junto a la Playa de Noja"
Vista panorámica desde el mirador de Noja: alt="Vista panorámica desde el mirador de Noja"
Amanecer en la Playa de Noja: alt="Amanecer en la Playa de Noja" 
*/ ?>