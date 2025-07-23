<?php
require_once "generico_CSV.php";
//$productos = leer_CSV_camisas_hawaianas_man($arrayElementos, 0); 
$productos = leer_CSV("camisas_hawaianas_man"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes

?>
<?php



// Generamos un número aleatorio entre 0 y 7
$numeroAleatorio = rand(0, 7); 
$numeroAleatorio = 0; 

?>

<?php require "carrusel_auxiliar1.php"; ?>




<script>

let currentIndex_camisas_hawaianas_man = 0; 
const productos_camisas_hawaianas_man = <?php echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_camisas_hawaianas_man = [];
const linksPequenos_camisas_hawaianas_man = [];


    const nombreElemento_camisas_hawaianas_man = "camisas_hawaianas_man";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_camisas_hawaianas_man);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_camisas_hawaianas_man);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_camisas_hawaianas_man.push(imagen);
                linksPequenos_camisas_hawaianas_man.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento}': `, error);
        }
        
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_camisas_hawaianas_man() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex_camisas_hawaianas_man = (currentIndex_camisas_hawaianas_man + 1) % productos_camisas_hawaianas_man.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_camisas_hawaianas_man = productos_camisas_hawaianas_man[(currentIndex_camisas_hawaianas_man + i) % productos_camisas_hawaianas_man.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_camisas_hawaianas_man[i] && linksPequenos_camisas_hawaianas_man[i]) {
            imagenesPequenas_camisas_hawaianas_man[i].src = productoPequeno_camisas_hawaianas_man['src'];
            imagenesPequenas_camisas_hawaianas_man[i].alt = productoPequeno_camisas_hawaianas_man['alt'];
            linksPequenos_camisas_hawaianas_man[i].href = productoPequeno_camisas_hawaianas_man['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    } 
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_camisas_hawaianas_man, 4000); // Cambiar cada 4 segundos
</script>