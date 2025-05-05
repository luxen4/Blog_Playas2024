<?php
require_once "generico_CSV.php";
//$productos = leer_CSV_sports_shirts_hombre($arrayElementos, 6); 
$productos = leer_CSV("sports_shirts"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes

?>
<?php



// Generamos un número aleatorio entre 0 y 7
$numeroAleatorio = rand(0, 7); 
$numeroAleatorio = 6; 


?>

<?php require "carrusel_auxiliar1.php"; ?>




<script>

let currentIndex_sports_shirts_hombre = 0; 
const productos_sports_shirts_hombre = <?php echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_sports_shirts_hombre = [];
const linksPequenos_sports_shirts_hombre = [];


    const nombreElemento_sports_shirts_hombre = "sports_shirts";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_sports_shirts_hombre);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_sports_shirts_hombre);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_sports_shirts_hombre.push(imagen);
                linksPequenos_sports_shirts_hombre.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento}': `, error);
        }
      
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_sports_shirts_hombre() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex_sports_shirts_hombre = (currentIndex_sports_shirts_hombre + 1) % productos_sports_shirts_hombre.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_sports_shirts_hombre = productos_sports_shirts_hombre[(currentIndex_sports_shirts_hombre + i) % productos_sports_shirts_hombre.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_sports_shirts_hombre[i] && linksPequenos_sports_shirts_hombre[i]) {
            imagenesPequenas_sports_shirts_hombre[i].src = productoPequeno_sports_shirts_hombre['src'];
            imagenesPequenas_sports_shirts_hombre[i].alt = productoPequeno_sports_shirts_hombre['alt'];
            linksPequenos_sports_shirts_hombre[i].href = productoPequeno_sports_shirts_hombre['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    } 
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_sports_shirts_hombre, 4000); // Cambiar cada 4 segundos
</script>