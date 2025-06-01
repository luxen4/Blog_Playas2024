<section id="actividades" class="seccion-actividades container py-5">

  <div class="info-box">

    <!-- Cabecera -->
    <header class="text-center mb-4">
      <h1 class="text-primary">🏄‍♂️ Actividades Recomendadas</h1>
      <p>
        Explora las <strong>mejores actividades turísticas y deportivas</strong> que ofrece la Playa de Ostende en 
        <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" title="Más sobre Castro Urdiales">
          Castro Urdiales, Cantabria
        </a>. Ideal para los amantes del turismo activo y la naturaleza costera.
      </p>
    </header>

    <!-- Descripción General -->
    <div class="mb-4">
      <h5><i class="fas fa-sun me-2" style="color: #f1c40f;"></i>Actividades y Diversión en la Playa de Ostende</h5>
      <p>
        La <strong>Playa de Ostende</strong> es famosa por ser uno de los mejores lugares para practicar 
        <strong>deportes acuáticos</strong> en Cantabria. Puedes disfrutar del <strong>surf, paddle surf, windsurf</strong>, 
        o simplemente relajarte y disfrutar de las hermosas vistas al mar.
      </p>
      <p>
        Además, Ostende cuenta con diversas 
        <a href="https://escueladesurfcastro.com/" target="_blank" rel="noopener noreferrer" title="Escuelas de Surf">
          escuelas de surf
        </a> y alquiler de equipos para quienes deseen aprender o mejorar sus habilidades acuáticas.
      </p>
      <p>
        <i class="fas fa-calendar-alt me-2" style="color: #e67e22;"></i>
        Durante todo el año, la playa alberga <strong>eventos deportivos</strong>, como torneos de vóley de playa, 
        campeonatos de surf y eventos culturales, lo que la convierte en un lugar vibrante.
      </p>
    </div>

    <!-- Lista de actividades -->
    <ul class="list-unstyled">
      <li class="my-4">
        <i class="fas fa-water me-2" style="color: #1abc9c;"></i>
        <strong>Deportes Acuáticos en Cantabria:</strong><br>
        La Playa de Ostende es perfecta para <strong>surf, paddle surf y windsurf</strong>. Dispone de 
        <a href="https://www.surfcantabria.com" target="_blank" rel="noopener" title="Escuelas de surf en Cantabria">
          escuelas especializadas
        </a> con monitores certificados y <strong>alquiler de material deportivo</strong>. 
        Actividades disponibles desde <time datetime="2025-05">mayo</time> hasta <time datetime="2025-09">septiembre</time>.
      </li>

      <li class="my-4">
        <i class="fas fa-hiking me-2" style="color: #27ae60;"></i>
        <strong>Senderismo con vistas al Cantábrico:</strong><br>
        Recorre <strong>rutas de senderismo en Ostende</strong> rodeadas de acantilados, pinares y miradores. 
        Consulta nuestros 
        <a href="https://www.alltrails.com/es/belgium/west-flanders/ostend--2" 
           title="Rutas naturales en Ostende" 
           style="color:#2980b9;" 
           target="_blank" 
           rel="noopener">
           itinerarios recomendados
        </a> para todos los niveles. 
        <time datetime="2025-06">Junio 2025</time> – <time datetime="2025-09">Septiembre 2025</time>.
      </li>

      <li class="my-4">
        <i class="fas fa-ship me-2" style="color: #3498db;"></i>
        <strong>Excursiones en barco desde Ostende:</strong><br>
        Participa en 
        <a href="/excursiones-en-barco-cantabria/" 
           title="Rutas en barco por Cantabria" 
           style="color:#2980b9;" 
           target="_blank" 
           rel="noopener">
           rutas marítimas guiadas
        </a> y descubre calas escondidas, acantilados y la fauna del mar Cantábrico. 
        Actividades disponibles durante todo el año, con especial intensidad en temporada alta: 
        <time datetime="2025-06">junio</time> – <time datetime="2025-08">agosto</time>.
      </li>

      <li class="my-4">
        <i class="fas fa-volleyball-ball me-2" style="color: #e67e22;"></i>
        <strong>Zonas Deportivas junto al mar:</strong><br>
        En la playa hay <strong>espacios deportivos al aire libre</strong> para 
        <strong>voleibol de playa, fútbol y yoga</strong>. Ideales para familias, grupos y visitantes 
        que buscan ejercicio con vistas al mar.
      </li>
    </ul>




  </div>

  <!-- Carrusel solo visible en escritorio -->
  <div class="solo-escritorio">
    <?php PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_shorts_hombre.php'; ?>
  </div>

  <style>
    @media (max-width: 768px) {
      .solo-escritorio {
        display: none;
      }
    }

    header h1{
      margin: 1em;
    }
  </style>

</section>

<?php 
  //define('BLOQUES_PATH',  './../../../../bloques/estructura/sections_generico'); 
  //require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_atuendo.php'; 
  //require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_sneakers.php'; 
?>