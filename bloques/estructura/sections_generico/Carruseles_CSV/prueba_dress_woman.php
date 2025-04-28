<?php
require_once "generico_CSV.php";
//$productos = leer_CSV_dress_woman($arrayElementos, 2); 
$productos = leer_CSV("dress_woman"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes

?>
<?php



// Generamos un número aleatorio entre 0 y 7
$numeroAleatorio = rand(0, 7); 
$numeroAleatorio = 2; 


?>

<?php
// Llamamos a la función para leer el CSV y obtener los productos correspondientes

?>

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



<script>

let currentIndex_dress_woman = 0; 
const productos_dress_woman = <?php echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_dress_woman = [];
const linksPequenos_dress_woman = [];


    const nombreElemento_dress_woman = "dress_woman";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_dress_woman);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_dress_woman);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_dress_woman.push(imagen);
                linksPequenos_dress_woman.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento_dress_woman}': `, error);
        }
       
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_dress_woman() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex_dress_woman = (currentIndex_dress_woman + 1) % productos_dress_woman.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_dress_woman = productos_dress_woman[(currentIndex_dress_woman + i) % productos_dress_woman.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_dress_woman[i] && linksPequenos_dress_woman[i]) {
            imagenesPequenas_dress_woman[i].src = productoPequeno_dress_woman['src'];
            imagenesPequenas_dress_woman[i].alt = productoPequeno_dress_woman['alt'];
            linksPequenos_dress_woman[i].href = productoPequeno_dress_woman['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    } 
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_dress_woman, 4000); // Cambiar cada 4 segundos
</script>






































<!--</div>-->


<style>
    .carrusel_auxiliar1 {
        margin-top: 3em;
        margin-bottom: 3em;
        
    }

    .carrusel_auxiliar1 .custom-carousel-image-container {
        border: 1px solid #ccc;
        /* Color y grosor del borde */
        border-radius: 2px;
        /* Radio para bordes redondeados */
        overflow: hidden;
        /* Para asegurar que las esquinas redondeadas se mantengan */
        margin: 0.05em;
        /* Sin margen entre las imágenes */
        padding: 0;
        /* Sin padding */
    }

    .carrusel_auxiliar1 .row {
        margin-left: 0;
        /* Quitar margen izquierdo */
        margin-right: 0;
        /* Quitar margen derecho */
    }

    /* Eliminar padding en columnas */
    .carrusel_auxiliar1 .col-xl-6,
    .carrusel_auxiliar1 .col-lg-6,
    .carrusel_auxiliar1 .col-md-6,
    .carrusel_auxiliar1 .col-sm-6,
    .carrusel_auxiliar1 .col-6 {
        padding-left: 0;
        /* Sin padding izquierdo */
        padding-right: 0;
        /* Sin padding derecho */
    }


    .text-publicidad {
        text-align: left;
        color: lightgray;
    }

</style>