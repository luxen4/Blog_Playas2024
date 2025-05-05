<div class="container carrusel_auxiliar1">
    <div class="row" style="max-width: 1300px; margin:auto;">
        <div class="col-xl-2 text-center col-lg-1 col-md-1"></div>

        <div class="col-xl-7 text-center col-lg-10 col-md-10 col-sm-12 col-12">
            <h6 class="text-publicidad">Publicidad</h6>

            <?php 
            // Verificamos el tipo de publicidad
            if ($arrayElementos[$numeroAleatorio]["tipoPublicidad"] == "horizontal") {
                require 'enHorizontal.php'; // Incluir la vista para publicidad horizontal
            } else if ($arrayElementos[$numeroAleatorio]["tipoPublicidad"] == "vertical"){
                require 'enUnoYtres.php'; // Incluir la vista para otro tipo de publicidad
            }
            ?>
        </div>

        <div class="col-xl-3 text-center col-lg-1 col-md-1"></div>
    </div>
</div>