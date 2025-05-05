<?php
require_once "generico_CSV.php";
//$productos = leer_CSV_sneakers($arrayElementos, 5); 
$productos = leer_CSV("sneakers"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes

?>
<?php



// Generamos un número aleatorio entre 0 y 7
$numeroAleatorio = rand(0, 7); 
$numeroAleatorio = 5; 


?>
<?php require "carrusel_auxiliar1.php"; ?>




<script>

let currentIndex_sneakers = 0; 
const productos_sneakers = <?php echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_sneakers = [];
const linksPequenos_sneakers = [];


    const nombreElemento_sneakers = "sneakers";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_sneakers);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_sneakers);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_sneakers.push(imagen);
                linksPequenos_sneakers.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento_sneakers}': `, error);
        }
       
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_sneakers() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex_sneakers = (currentIndex_sneakers + 1) % productos_sneakers.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_sneakers = productos_sneakers[(currentIndex_sneakers + i) % productos_sneakers.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_sneakers[i] && linksPequenos_sneakers[i]) {
            imagenesPequenas_sneakers[i].src = productoPequeno_sneakers['src'];
            imagenesPequenas_sneakers[i].alt = productoPequeno_sneakers['alt'];
            linksPequenos_sneakers[i].href = productoPequeno_sneakers['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    } 
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_sneakers, 4000); // Cambiar cada 4 segundos
</script>