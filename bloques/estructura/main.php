<!-- Contenido principal -->
<?php define('SECTIONS_ACTIVIDADES_RECOMENDADAS', '/Blog_Playas2024/localidades/' .$region_minuscula. '/' . $page .'/paginas_secundarias/actividades-' . $rutas. '.php'); ?>
<?php define('SECTIONS_COMO_LLEGAR', '/Blog_Playas2024/localidades/' .$region_minuscula. '/' . $page .'/paginas_secundarias/como-llegar-' . $rutas. '.php'); ?>
<?php define('SECTIONS_SERVICIOS', '/Blog_Playas2024/localidades/' .$region_minuscula. '/' . $page .'/paginas_secundarias/servicios-' . $rutas. '.php'); ?>
<?php define('SECTIONS_EVENTOS_FESTIVIDADES', '/Blog_Playas2024/localidades/' .$region_minuscula. '/' . $page .'/paginas_secundarias/eventos-festividades-' . $rutas. '.php'); ?>
<?php define('SECTIONS_FAQS', '/Blog_Playas2024/localidades/' .$region_minuscula. '/' . $page .'/paginas_secundarias/preguntas-frecuentes-' . $rutas. '.php'); ?>


 <?php define('BLOQUES_PATH',  './../../../../bloques/estructura/sections_generico') ?>


<div style="max-width: 1240px;" class="container">
    <div class="row"> <!-- Añadido el contenedor de fila -->

        <div id="left-empty-column" class="d-none d-lg-block col-xl-2 col-lg-3 col-md-2 col-sm-2 content-wrapper">
            <?php require 'barra_navegacion.php'; // Barra de Navegación?>
        </div>

        <div id="central-column" class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12 content-wrapper">
            <main>
                <?php require BLOQUES_PATH . '/deprecated/_encabezado_generico.php'; ?>

                <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sports_shirts_hombre.php'; ?>

                <?php require BLOQUES_PATH . '/deprecated/_descripcion-detallada_generico.php'; ?>
                
<div id="actividades" class="mt-5">
  <header class="mb-3">
    <h4 class="text-primary text-left">🏄‍♂️ Actividades Recomendadas en la Playa de <?= $mainEntity_addressLocality; ?></h4>
    <p>
      Explora las <strong>mejores actividades turísticas y deportivas</strong> que ofrece la Playa de <?= $nombre_playa; ?> en 
      <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" target="_blank" rel="noopener" title="Más sobre Castro Urdiales">Castro Urdiales, Cantabria</a>,
      ideal para los amantes del turismo activo y la naturaleza costera.
      <a href="<?= SECTIONS_ACTIVIDADES_RECOMENDADAS; ?>" target="_blank" class="btn btn-sm btn-outline-primary ms-2">
        <i class="fas fa-map-marked-alt me-1"></i> Ver actividades
      </a>
    </p>
  </header>
</div>





                
<div id="como_llegar" class="mt-5">
  <header class="mb-3">
    <h2 class="text-primary text-left">📍 Cómo llegar a la Playa de <?= $mainEntity_addressLocality; ?></h2>
    <p>
      Consulta rutas, accesos y opciones de transporte para llegar cómodamente a la <strong>Playa de <?= $mainEntity_addressLocality; ?></strong> en 
      <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" target="_blank" rel="noopener" title="Más sobre Castro Urdiales">Castro Urdiales</a>, una de las joyas de la costa cántabra.
      <a href="<?= SECTIONS_COMO_LLEGAR; ?>" target="_blank" class="btn btn-sm btn-outline-primary ms-2">
        <i class="fas fa-map-marked-alt me-1"></i> Consultar ruta
      </a>
    </p>
  </header>
</div>


                <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>
               
<div id="servicios" class="mt-5">
  <header class="mb-3">
    <h2 class="text-primary text-left">🛟 Servicios en la Playa de <?= $mainEntity_addressLocality; ?></h2>
    <p>
      Descubre todos los <strong>servicios disponibles</strong> para tu comodidad: duchas, alquiler de equipamiento, restaurantes, aparcamiento y más.
      ¡Todo lo que necesitas para un día perfecto junto al mar!
      <a href="<?= SECTIONS_SERVICIOS; ?>" class="btn btn-sm btn-outline-primary ms-2" target="_blank">
        <i class="fas fa-map-marked-alt me-1"></i> Consultar servicios
      </a>
    </p>
  </header>
</div>

                <?php require BLOQUES_PATH .'/galeria-imagenes_generico.php'; ?>


<div id="eventos_festividades" class="mt-5">
  <header class="mb-3">
    <h2 class="text-primary text-left">🎉 Eventos y Festividades en la Playa de <?= $mainEntity_addressLocality; ?></h2>
    <p>
      Vive las <strong>tradiciones y celebraciones locales</strong> más emblemáticas: hogueras de San Juan, procesiones marineras, mercados de verano y competiciones deportivas frente al mar Cantábrico.
      <a href="<?= SECTIONS_EVENTOS_FESTIVIDADES; ?>" class="btn btn-sm btn-outline-primary ms-2" target="_blank">
        <i class="fas fa-map-marked-alt me-1"></i> Consultar eventos
      </a>
    </p>
  </header>
</div>


                <div class="text-center mt-4">

<div id="faqs_consejos" class="mt-5">
  <header class="mb-3">
    <h2 class="text-primary text-left">❓ ¿Tienes más dudas sobre la Playa de <?= $mainEntity_addressLocality; ?>?</h2>
    <p>
      Resolvemos las <strong>preguntas más frecuentes</strong> sobre accesos, servicios, normativas y recomendaciones para que disfrutes al máximo tu visita a 
      <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" title="Más sobre Castro Urdiales">Castro Urdiales</a>.
      <a href="<?= SECTIONS_FAQS; ?>" class="btn btn-sm btn-outline-primary ms-2" target="_blank">
        <i class="fas fa-question-circle me-1"></i> Consultar FAQs
      </a>
    </p>
  </header>
</div>

                    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_shorts_hombre.php'; ?>

                    <?php require BLOQUES_PATH .'/deprecated/_mas-info_generico.php'; ?>
                </div>

            </main>
        </div>


        <div id="right-column" class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-3 content-wrapper"> 

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


<style>
                    #descripcion_detallada,
                    #galeria_imagenes,
                    #eventos_festividades,
                    #actividades_recomendadas, 
                    #como_llegar,
                    #servicios,
                    #faqs_consejos,
                    #mas_info
                    {
                      margin-top: 50px;
                      margin-bottom: 50px;                        
                      margin: 20px 0;
                        /*padding: 20px;*/
                        background-color: #f8f9fa;
                        border-radius: 5px;
                    }
                                  
                    #descripcion_detallada h2,
                    #galeria_imagenes h2,
                    #eventos_festividades h2,
                    #actividades_recomendadas h2,
                    #como_llegar h2,
                    #mas_info h2,
                    #faqs_consejos h2,
                    
                    #servicios h2{
                        font-size: 1.5rem;
                        margin-bottom: 15px;
                    }

                    #descripcion_detallada ul,
                    #galeria_imagenes ul,
                    #eventos_festividades ul ,
                    #actividades_recomendadas ul,
                    #como_llegar ul,
                    #faqs_consejos ul,
                      #mas_info ul, 
                      #servicios
                      

                    {
                        list-style-type: none;
                        padding-left: 0;
                    }
    
                    #descripcion_detallada li,
                    #galeria_imagenes li,
                    #eventos_festividades li ,
                    #actividades_recomendadas li,
                    #como_llegar li,
                    #faqs_consejos li,
                    #mas_info li,
                    #servicios li{
                        margin-bottom: 10px;
                    }
                  </style>