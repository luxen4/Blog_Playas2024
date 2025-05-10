<?php
require_once "generico_CSV.php";
//$productos = leer_CSV_atuendo1($arrayElementos, 7); 
$nombreAtuendo = 'atuendo2'; // Nombre del atuendo
$productos = leer_CSV("atuendo2"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes

$numeroAleatorio = rand(0, 7); // Generamos un número aleatorio entre 0 y 7 para cambiar las imágenes de en medio
$numeroAleatorio = 8; ?>

<div class="container carrusel_auxiliar1">
    <div class="row" style="max-width: 1300px; margin:auto;">
        <div class="col-xl-3 text-center col-lg-1 col-md-1"></div>

        <div class="col-xl-6 text-center col-lg-10 col-md-10 col-sm-12 col-12">
            <h6 class="text-publicidad">Publicidad</h6>
                <?php require 'elementos_atuendo_en_linea.php'; ?>
        </div>

        <div class="col-xl-3 text-center col-lg-1 col-md-1"></div>
    </div>
</div>



<script>
    
/*
let currentIndex_atuendo2 = 0; 
const productos_atuendo2 = <?php // echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_atuendo2 = [];
const linksPequenos_atuendo2 = [];


    const nombreElemento_atuendo2 = "atuendo2";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_atuendo2);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_atuendo2);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_atuendo2.push(imagen);
                linksPequenos_atuendo2.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento_atuendo2}': `, error);
        }
       
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_atuendo2() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex_atuendo2 = (currentIndex_atuendo2 + 1) % productos_atuendo2.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_atuendo2 = productos_atuendo2[(currentIndex_atuendo2 + i) % productos_atuendo2.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_atuendo2[i] && linksPequenos_atuendo2[i]) {
            imagenesPequenas_atuendo2[i].src = productoPequeno_atuendo2['src'];
            imagenesPequenas_atuendo2[i].alt = productoPequeno_atuendo2['alt'];
            linksPequenos_atuendo2[i].href = productoPequeno_atuendo2['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    } 
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_atuendo2, 4000); // Cambiar cada 4 segundos*/
</script>