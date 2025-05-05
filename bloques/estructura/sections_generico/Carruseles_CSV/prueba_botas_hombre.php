<?php
require_once "generico_CSV.php";
//$productos = leer_CSV_botas_hombre($arrayElementos, 0); 
$productos = leer_CSV("botas_hombre"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes

?>
<?php



// Generamos un número aleatorio entre 0 y 7
$numeroAleatorio = rand(0, 7); 
$numeroAleatorio = 0; 

?>

<?php require "carrusel_auxiliar1.php"; ?>




<script>

let currentIndex_botas_hombre = 0; 
const productos_botas_hombre = <?php echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_botas_hombre = [];
const linksPequenos_botas_hombre = [];


    const nombreElemento_botas_hombre = "botas_hombre";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_botas_hombre);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_botas_hombre);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_botas_hombre.push(imagen);
                linksPequenos_botas_hombre.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento}': `, error);
        }
        
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_botas_hombre() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex_botas_hombre = (currentIndex_botas_hombre + 1) % productos_botas_hombre.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_botas_hombre = productos_botas_hombre[(currentIndex_botas_hombre + i) % productos_botas_hombre.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_botas_hombre[i] && linksPequenos_botas_hombre[i]) {
            imagenesPequenas_botas_hombre[i].src = productoPequeno_botas_hombre['src'];
            imagenesPequenas_botas_hombre[i].alt = productoPequeno_botas_hombre['alt'];
            linksPequenos_botas_hombre[i].href = productoPequeno_botas_hombre['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    } 
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_botas_hombre, 4000); // Cambiar cada 4 segundos
</script>