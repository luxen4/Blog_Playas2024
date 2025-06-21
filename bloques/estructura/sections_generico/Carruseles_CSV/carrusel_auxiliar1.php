<div class="w-full py-6 carrusel_auxiliar1">
    <div class="w-full max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <h6 class="text-center text-sm font-semibold text-gray-500 uppercase tracking-widest mb-4">
            — Publicidad —
        </h6>

        <div class="w-full">
            <?php 
            // Verificamos el tipo de publicidad
            if ($arrayElementos[$numeroAleatorio]["tipoPublicidad"] == "horizontal") {
                require 'enHorizontal.php'; // Vista de publicidad horizontal
            } else if ($arrayElementos[$numeroAleatorio]["tipoPublicidad"] == "vertical") {
                require 'enUnoYtres.php'; // Vista de publicidad vertical
            }
            ?>
        </div>
    </div>
</div>
