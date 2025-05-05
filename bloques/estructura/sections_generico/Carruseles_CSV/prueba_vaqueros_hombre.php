<?php
require_once "generico_CSV.php";
//$productos = leer_CSV_vaqueros_hombre($arrayElementos, 7); 
$productos = leer_CSV("vaqueros_hombre"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes

?>
<?php



// Generamos un número aleatorio entre 0 y 7
$numeroAleatorio = rand(0, 7); 
$numeroAleatorio = 7; 


?>
<?php require "carrusel_auxiliar1.php"; ?>


<script>

let currentIndex_vaqueros_hombre = 0; 
const productos_vaqueros_hombre = <?php echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_vaqueros_hombre = [];
const linksPequenos_vaqueros_hombre = [];


    const nombreElemento_vaqueros_hombre = "vaqueros_hombre";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_vaqueros_hombre);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_vaqueros_hombre);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_vaqueros_hombre.push(imagen);
                linksPequenos_vaqueros_hombre.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento_vaqueros_hombre}': `, error);
        }
       
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_vaqueros_hombre() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex_vaqueros_hombre = (currentIndex_vaqueros_hombre + 1) % productos_vaqueros_hombre.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_vaqueros_hombre = productos_vaqueros_hombre[(currentIndex_vaqueros_hombre + i) % productos_vaqueros_hombre.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_vaqueros_hombre[i] && linksPequenos_vaqueros_hombre[i]) {
            imagenesPequenas_vaqueros_hombre[i].src = productoPequeno_vaqueros_hombre['src'];
            imagenesPequenas_vaqueros_hombre[i].alt = productoPequeno_vaqueros_hombre['alt'];
            linksPequenos_vaqueros_hombre[i].href = productoPequeno_vaqueros_hombre['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    } 
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_vaqueros_hombre, 4000); // Cambiar cada 4 segundos
</script>