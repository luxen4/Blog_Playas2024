<?php
require_once "generico_CSV.php";
//$productos = leer_CSV_atuendo1($arrayElementos, 7); 
$productos = leer_CSV("atuendo1"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes

?>
<?php



// Generamos un número aleatorio entre 0 y 7
$numeroAleatorio = rand(0, 7); 
$numeroAleatorio = 8; 


?>

<?php // require "carrusel_auxiliar1.php"; ?>

<div class="container carrusel_auxiliar1">
    <div class="row" style="max-width: 1300px; margin:auto;">
        <div class="col-xl-3 text-center col-lg-1 col-md-1"></div>

        <div class="col-xl-12 text-center col-lg-10 col-md-10 col-sm-12 col-12">
            <h6 class="text-publicidad">Publicidad</h6>

            <?php 
            // Verificamos el tipo de publicidad
            if ($arrayElementos[$numeroAleatorio]["tipoPublicidad"] == "horizontal") {
                require 'enHorizontal.php'; // Incluir la vista para publicidad horizontal
            } else if ($arrayElementos[$numeroAleatorio]["tipoPublicidad"] == "vertical"){
                require 'enUnoYtres.php'; // Incluir la vista para otro tipo de publicidad
            } else if($arrayElementos[$numeroAleatorio]["tipoPublicidad"] == "atuendo"){
                require 'atuendo.php'; // Incluir la vista para otro tipo de publicidad

            }
            ?>
        </div>

        <div class="col-xl-3 text-center col-lg-1 col-md-1"></div>
    </div>
</div>



<script>
    /*

let currentIndex_atuendo1 = 0; 
const productos_atuendo1 = <?php echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_atuendo1 = [];
const linksPequenos_atuendo1 = [];


    const nombreElemento_atuendo1 = "atuendo1";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_atuendo1);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_atuendo1);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_atuendo1.push(imagen);
                linksPequenos_atuendo1.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento_atuendo1}': `, error);
        }
       
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_atuendo1() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex_atuendo1 = (currentIndex_atuendo1 + 1) % productos_atuendo1.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_atuendo1 = productos_atuendo1[(currentIndex_atuendo1 + i) % productos_atuendo1.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_atuendo1[i] && linksPequenos_atuendo1[i]) {
            imagenesPequenas_atuendo1[i].src = productoPequeno_atuendo1['src'];
            imagenesPequenas_atuendo1[i].alt = productoPequeno_atuendo1['alt'];
            linksPequenos_atuendo1[i].href = productoPequeno_atuendo1['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    } 
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_atuendo1, 4000); // Cambiar cada 4 segundos*/
</script>