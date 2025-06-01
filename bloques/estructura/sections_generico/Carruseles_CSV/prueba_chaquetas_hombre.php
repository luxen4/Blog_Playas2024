<?php
require_once "generico_CSV.php";


$productos = leer_CSV("chaquetas_hombre"); 
$numeroAleatorio = rand(0, 7); $numeroAleatorio = 1; 

?>

<?php require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV. "/carrusel_auxiliar1.php"; ?>



<script>

let currentIndex = 0; 
const productos = <?php echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_chaquetas_hombre = [];
const linksPequenos_chaquetas_hombre = [];


    const nombreElemento = "chaquetas_hombre";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_chaquetas_hombre.push(imagen);
                linksPequenos_chaquetas_hombre.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento}': `, error);
        }
        
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_chaquetas_hombre() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex = (currentIndex + 1) % productos.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_chaquetas_hombre = productos[(currentIndex + i) % productos.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_chaquetas_hombre[i] && linksPequenos_chaquetas_hombre[i]) {
            imagenesPequenas_chaquetas_hombre[i].src = productoPequeno_chaquetas_hombre['src'];
            imagenesPequenas_chaquetas_hombre[i].alt = productoPequeno_chaquetas_hombre['alt'];
            linksPequenos_chaquetas_hombre[i].href = productoPequeno_chaquetas_hombre['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    }
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_chaquetas_hombre, 4000); // Cambiar cada 4 segundos
</script>

<?php //$productos = leer_CSV_chaquetas_hombre("chaquetas_hombre"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes ?>