<!-- Contenido principal -->
<div class="container">
    <div class="row"> <!-- Añadido el contenedor de fila -->

        <div id="left-empty-column" class="d-none d-lg-block col-xl-2 col-lg-3 col-md-2 col-sm-2 content-wrapper">
            <?php require 'barra_navegacion.php'; // Barra de Navegación?>
        </div>

        <div id="central-column" class="col-xl-7 col-lg-9 col-md-12 col-sm-12 col-12 content-wrapper">
            <main>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_encabezado_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_descripcion-detallada_generico.php'; ?>
                
                <div class="mt-5">
                  <header class="text-center mb-4">
                    <h2 class="text-primary">🏄‍♂️ Actividades Recomendadas en Ostende</h2>
                    <p>Explora las <strong>mejores actividades turísticas y deportivas</strong> que ofrece la Playa de Ostende en 
                      <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" target="_blank" rel="noopener" title="Más sobre Castro Urdiales">Castro Urdiales, Cantabria</a>. 
                      Ideal para los amantes del turismo activo y la naturaleza costera.
                    </p>
                  </header>

                  <div class="text-center">
                    <a href="./actividades-playa-de-ostende-castro-urdiales-cantabria.php" class="btn btn-primary btn-lg">
                      <i class="fas fa-map-marked-alt me-2"></i> Consultar actividades
                    </a>
                  </div>
                </div>



                <div class="mt-5">
                  <header class="text-center mb-4">
                    <h2 class="text-primary">📍 Cómo llegar a la Playa de Ostende</h2>
                    <p>Consulta rutas, accesos y opciones de transporte para llegar cómodamente a la <strong>Playa de Ostende</strong> en 
                      <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" target="_blank" rel="noopener" title="Más sobre Castro Urdiales">Castro Urdiales</a>, una de las joyas de la costa cántabra.
                    </p>
                  </header>

                  <div class="text-center">
                    <a href="./como-llegar-playa-de-ostende-castro-urdiales-cantabria.php" class="btn btn-primary btn-lg">
                      <i class="fas fa-map-marked-alt me-2"></i> Consultar ruta
                    </a>
                  </div>
                </div>








                <div class="mt-5">
                  <header class="text-center mb-4">
                    <h2 class="text-primary">🛟 Servicios en la Playa de Ostende</h2>
                    <p>Descubre todos los <strong>servicios disponibles</strong> para tu comodidad: duchas, alquiler de equipamiento, restaurantes, aparcamiento y más. ¡Todo lo que necesitas para un día perfecto junto al mar!</p>
                  </header>

                  <div class="text-center">
                    <a href="./servicios-playa-de-ostende-castro-urdiales-cantabria.php" class="btn btn-primary btn-lg">
                      <i class="fas fa-map-marked-alt me-2"></i> Consultar servicios
                    </a>
                  </div>
                </div>



                <?php require './../../../../bloques/estructura/sections_generico/galeria-imagenes_generico.php'; ?>


                <div class="mt-5">
                  <header class="text-center mb-4">
                    <h2 class="text-primary">🎉 Eventos y Festividades en la Playa de Ostende</h2>
                    <p>Vive las <strong>tradiciones y celebraciones locales</strong> más emblemáticas: hogueras de San Juan, procesiones marineras, mercados de verano y competiciones deportivas frente al mar Cantábrico.</p>
                  </header>

                  <div class="text-center">
                    <a href="./eventos-festividades-playa-de-ostende-castro-urdiales-cantabria.php" class="btn btn-primary btn-lg">
                      <i class="fas fa-map-marked-alt me-2"></i> Consultar eventos
                    </a>
                  </div>
                </div>




                <div class="text-center mt-4">

<div class="mt-5">
  <header class="text-center mb-4">
    <h2 class="text-primary">❓ ¿Tienes más dudas sobre la Playa de Ostende?</h2>
    <p>Resolvemos las <strong>preguntas más frecuentes</strong> sobre accesos, servicios, normativas y recomendaciones para que disfrutes al máximo tu visita a <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" title="Más sobre Castro Urdiales">Castro Urdiales</a>.</p>
  </header>

  <div class="text-center">
    <a href="./preguntas-frecuentes-playa-de-ostende-castro-urdiales-cantabria.php" class="btn btn-primary btn-lg">
      <i class="fas fa-question-circle me-2"></i> Consultar FAQs
    </a>
  </div>
</div>

                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_mas-info_generico.php'; ?>


            </main>
        </div>


        <div id="right-column" class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 content-wrapper"> 
            <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo.php'; ?>
            <?php //require './../../../../bloques/estructura/sections_generico/deprecated/_caracteristicas_generico.php'; ?>
            <?php //require './../../../../bloques/estructura/sections_generico/deprecated/_eventos_festividades_generico.php'; ?>
        </div>


    </div> 
</div>


<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
</script>