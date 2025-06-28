
<?php $region = "Cantabria"; $region_minuscula = strtolower($region); $carpeta = 'castro-urdiales';  $nombre_localidad = "Castro-Urdiales"; $tema='restaurantes';?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta}/ocio/pages/previo.php"; ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <?php require PATH_RAIZ_LOCALIDADES_OCIO_HEAD. "/etiquetas-meta.php"; ?>
    <title>🎉Eventos y Fiestas en <?= $nombre_localidad; ?> | Agenda Cultural en <?= $region; ?></title>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
    <?php require PATH_RAIZ_LOCALIDADES_OCIO_SCHEMAS_HEAD . "/schema-org_restaurantes-head.php"; ?>
</head>

<body>
  <main class="container py-5">
    <header class="mb-5 text-center">
      <h1 class="text-success"><i class="fas fa-utensils"></i> Restaurantes en <?= $nombre_localidad; ?></h1>
      <p class="lead">Guía para disfrutar de la gastronomía local en la costa de <?= $region; ?></p>
    </header>
<section class="mb-5">
  <h2 class="h4 text-primary"><i class="fas fa-fish"></i> Mariscos y pescado fresco</h2>
  <p>
    Al ser un puerto pesquero, <strong><?= $nombre_localidad; ?></strong> destaca por su oferta de mariscos frescos y pescado del día. Lugares como el 
    <a href="https://bajamarrestaurant.es/" target="_blank" rel="noopener noreferrer">Restaurante Bajamar</a> o 
    <a href="https://www.tripadvisor.es/LocationPhotoDirectLink-g776898-d3187091-i429406629-Restaurante_La_Arboleda-Castro_Urdiales_Cantabria.html" target="_blank" rel="noopener noreferrer">La Arboleda</a> ofrecen platos como lubina a la espalda, marmita de bonito y rabas de calamar.
  </p>

  <div class="flex flex-wrap justify-center gap-6 mt-4">
    <div class="w-40">
      <img src="<?= PATH_HREF_CARPETA ?>/ocio/pages/imagenes/comedor-bajamar-castro-urdiales.jpg" alt="Restaurante Bajamar en Castro-Urdiales" class="rounded-xl shadow-md w-full">
      <p class="mt-2 text-xs text-center text-gray-600">Restaurante Bajamar</p>
    </div>
    <div class="w-40">
      <img src="<?= PATH_HREF_CARPETA ?>/ocio/pages/imagenes/la-arboleda-castro-urdiales.png" alt="Restaurante La Arboleda en Castro-Urdiales" class="rounded-xl shadow-md w-full">
      <p class="mt-2 text-xs text-center text-gray-600">La Arboleda</p>
    </div>
  </div>

  <div class="text-right mt-4">
    <a href="https://www.viajeroscallejeros.com/donde-comer-en-castro-urdiales/" target="_blank" rel="noopener noreferrer" class="text-sm text-blue-700 hover:underline">
      Ver más sitios donde comer en Castro-Urdiales →
    </a>
  </div>
</section>




    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-drumstick-bite"></i> Cocina tradicional cántabra</h2>
      <p>
        Desde el <em>cocido montañés</em> hasta el chuletón de buey, encontrarás propuestas auténticas en 
        <a href="https://www.google.com/search?q=La+Taberna+de+la+Plaza+Castro-Urdiales" target="_blank">La Taberna de la Plaza</a> o 
        <a href="https://www.google.com/search?q=Casa+Lucio+Castro-Urdiales" target="_blank">Casa Lucio</a>.
      </p>
    </section>

    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-wine-glass-alt"></i> Bares de pintxos y vinos</h2>
      <p>
        En el <strong>Casco Antiguo</strong> abundan los bares de pintxos. Prueba la ruta en la Calle Santander con vinos de Rioja o txakolí local. Recomendados: 
        <a href="https://www.google.com/search?q=La+Fuente+Castro-Urdiales" target="_blank">La Fuente</a> y 
        <a href="https://www.google.com/search?q=La+Goleta+Castro-Urdiales" target="_blank">La Goleta</a>.
      </p>
    </section>

    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-seedling"></i> Opciones vegetarianas y modernas</h2>
      <p>
        <a href="https://www.instagram.com/bokadillo_gastrobar" target="_blank" rel="noopener noreferrer">Bokadillo Gastrobar</a> y 
        <a href="https://www.google.com/search?q=El+Cierzo+Castro-Urdiales" target="_blank">El Cierzo</a> apuestan por menús saludables, vegetarianos y creativos.
      </p>
    </section>

<section class="mb-5">
  <h2 class="text-success"><i class="fas fa-star" style="color:#e74c3c;"></i> Recomendaciones destacadas</h2>
  <ul class="list-unstyled">
    <li class="mb-3">
      <strong>🍽️ Restaurante Bajamar</strong><br>
      Cocina marinera contemporánea con productos frescos del Cantábrico. 
      <a href="https://bajamarrestaurant.es" target="_blank" rel="noopener noreferrer">Visitar web</a>
    </li>
    <li class="mb-3">
      <strong>🥘 La Arboleda</strong><br>
      Cocina tradicional y ambiente familiar. 
      <a href="https://www.tripadvisor.es/LocationPhotoDirectLink-g776898-d3187091-i429406629-Restaurante_La_Arboleda-Castro_Urdiales_Cantabria.html" target="_blank" rel="noopener noreferrer">Ver más</a>
    </li>
    <li class="mb-3">
      <strong>🍷 El Puerto</strong><br>
      Cocina moderna en el paseo marítimo. 
      <a href="https://www.asadorelpuerto.com/" target="_blank" rel="noopener noreferrer">Sitio oficial</a>
    </li>
  </ul>
</section>


    <section class="mb-5">
      <h2 class="text-info"><i class="fas fa-map-marker-alt" style="color:#3498db;"></i> ¿Dónde comer?</h2>
      <p>
        Los restaurantes más destacados están junto al 
        <a href="/playa-de-ostende.php">Paseo Marítimo</a>, la 
        <a href="/plaza-ayuntamiento.php">Plaza del Ayuntamiento
        </a> o el <a href="/puerto.php">Puerto pesquero</a>.
      </p>
    </section>

    <section class="mb-5">
      <h3 class="text-warning"><i class="fas fa-biking" style="color:#f39c12;"></i> Plan perfecto</h3>
      <p>
        Tras una buena comida, disfruta de los <a href="/senderos-costeros-senalizados.php">senderos costeros</a> o la <a href="/playa-de-brazomar.php">Playa de Brazomar</a>.
      </p>
    </section>

    <section class="mt-5 text-center">
      <h3 class="mb-3">📍 ¿Planeas tu visita?</h3>
      <p>
        Descubre más sobre la ciudad en nuestra guía completa:
        <br />
        <a href="/castro-urdiales.php" class="btn btn-outline-success mt-2">Ver guía de Castro-Urdiales</a>
      </p>

      <p class="mt-4">
        🔎 ¿Quieres más opiniones y rankings? Consulta:
        <br />
        <a href="<?= $url_tripadvisor; ?>" class="btn btn-primary mt-2" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-tripadvisor"></i> Ver en TripAdvisor
        </a>
      </p>
    </section>
  </main>

  <footer class="text-center py-4 bg-light mt-5">
    <small>&copy; <?= date('Y'); ?> Playas2025 | Información sobre turismo en la costa de Cantabria</small>
  </footer>

    <?php require PATH_RAIZ_LOCALIDADES_OCIO_SCHEMAS_BODY . '/schema-org_restaurantes.php'; // Por estructura, va aquí! ?>

</body>
</html>