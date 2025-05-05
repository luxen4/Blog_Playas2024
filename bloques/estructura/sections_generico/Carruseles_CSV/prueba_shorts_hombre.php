<?php
require_once "generico_CSV.php";
//$productos = leer_CSV_sorts_hombre($arrayElementos, 4); 
$productos = leer_CSV("shorts"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes




// Generamos un número aleatorio entre 0 y 7
$numeroAleatorio = rand(0, 7); 
$numeroAleatorio = 4; 
?>
<?php require "carrusel_auxiliar1.php"; ?>




<script>

let currentIndex_shorts_hombre = 0; 
const productos_shorts_hombre = <?php echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_shorts_hombre = [];
const linksPequenos_shorts_hombre = [];


    const nombreElemento_shorts_hombre = "shorts";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_shorts_hombre);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_shorts_hombre);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_shorts_hombre.push(imagen);
                linksPequenos_shorts_hombre.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento}': `, error);
        }
        
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_shorts_hombre() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex_shorts_hombre = (currentIndex_shorts_hombre + 1) % productos_shorts_hombre.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_shorts_hombre = productos_shorts_hombre[(currentIndex_shorts_hombre + i) % productos_shorts_hombre.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_shorts_hombre[i] && linksPequenos_shorts_hombre[i]) {
            imagenesPequenas_shorts_hombre[i].src = productoPequeno_shorts_hombre['src'];
            imagenesPequenas_shorts_hombre[i].alt = productoPequeno_shorts_hombre['alt'];
            linksPequenos_shorts_hombre[i].href = productoPequeno_shorts_hombre['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    } 
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_shorts_hombre, 4000); // Cambiar cada 4 segundos
</script>