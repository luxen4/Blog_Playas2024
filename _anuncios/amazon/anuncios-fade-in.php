<?php
$archivos = [
  'botas-hombre'         => '/prueba_botas_hombre.php',  
  'sports-shirts-hombre' => '/prueba_sports_shirts_hombre.php',
  'sneakers'             => '/prueba_sneakers.php',
  'vaqueros-hombre'      => '/prueba_vaqueros_hombre.php',
  'shorts-hombre'        => '/prueba_shorts_hombre.php',
  'chaquetas-hombre'     => '/prueba_chaquetas_hombre.php',
  'dress_woman'          => '/prueba_dress_woman.php',
];

// Reordenar preservando claves
$claves = array_keys($archivos);
shuffle($claves);

$publicidadPaths = [];
foreach ($claves as $clave) {
  $archivo = $archivos[$clave];
  $publicidadPaths[$clave] = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . $archivo;
}
?>

<div id="bloque-publicidad" class="relative mb-6 mt-6 fade-in">
  <button 
    onclick="cerrarPublicidad()"
    class="absolute top-0 right-0 mt-2 mr-2 text-gray-500 hover:text-red-600 text-xl font-bold z-10"
    aria-label="Cerrar publicidad"
  >
    &times;
  </button>

  <div class="row border border-gray-200 rounded shadow-sm p-1 bg-white" >
    <div class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12" style="padding: 0px;">
      <?php foreach ($publicidadPaths as $clave => $ruta): ?>
        <div class="bloque-anuncio" data-clave="<?= $clave ?>" style="display: none;">
          <?php require $ruta; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<script>
  const bloques = document.querySelectorAll('.bloque-anuncio');
  const contenedor = document.getElementById('bloque-publicidad');
  let actual = Math.floor(Math.random() * bloques.length);

  function mostrarBloque(index) {
    bloques.forEach((el, i) => el.style.display = i === index ? 'block' : 'none');
  }

  function cerrarPublicidad() {
    contenedor.classList.remove('show');
    contenedor.classList.add('oculto');

    setTimeout(() => {
      // Cambia el contenido
      let nuevo;
      do {
        nuevo = Math.floor(Math.random() * bloques.length);
      } while (nuevo === actual && bloques.length > 1);
      actual = nuevo;
      mostrarBloque(actual);

      contenedor.classList.remove('oculto');
      contenedor.classList.add('show');
    }, 5000);
  }

  window.addEventListener('DOMContentLoaded', () => {
    mostrarBloque(actual);
    contenedor.classList.add('show');
  });
</script>

<style>
.fade-in {
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.5s ease-in-out, visibility 0.5s;
}

.fade-in.show {
  opacity: 1;
  visibility: visible;
}

.fade-in.oculto {
  opacity: 0;
  visibility: hidden;
}
</style>