<?php
  $nombre_localidad = "Castro-Urdiales";
  $region = "Cantabria";
  $url_tripadvisor = "https://www.tripadvisor.es/Restaurants-g776865-Castro_Urdiales_Cantabria.html";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Descubre los mejores restaurantes en Castro-Urdiales. Gastronomía cántabra, mariscos, pintxos, comida tradicional y opciones modernas con encanto." />
  <meta name="keywords" content="restaurantes en Castro-Urdiales, dónde comer en Castro-Urdiales, gastronomía cántabra, mariscos Cantabria, pintxos Castro" />
  <title>Restaurantes en <?= $nombre_localidad; ?> | Dónde Comer en <?= $region; ?></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
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
        <a href="https://restaurante-mira-mar.com" target="_blank" rel="noopener noreferrer">Restaurante Miramar</a> o 
        <a href="https://www.google.com/search?q=La+Arboleda+Castro-Urdiales" target="_blank" rel="noopener noreferrer">La Arboleda</a> ofrecen platos como lubina a la espalda, marmita de bonito y rabas de calamar.
      </p>
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
          <strong>🍽️ Restaurante Miramar</strong><br>
          Especializado en mariscos frescos con vistas al mar. 
          <a href="https://restaurante-mira-mar.com" target="_blank">Visitar web</a>
        </li>
        <li class="mb-3">
          <strong>🥘 La Arboleda</strong><br>
          Cocina tradicional y ambiente familiar. 
          <a href="https://laarboleda-castro.com" target="_blank">Ver más</a>
        </li>
        <li class="mb-3">
          <strong>🍷 El Puerto</strong><br>
          Cocina moderna en el paseo marítimo. 
          <a href="https://restauranteelpuerto.es" target="_blank">Sitio oficial</a>
        </li>
      </ul>
    </section>

    <section class="mb-5">
      <h2 class="text-info"><i class="fas fa-map-marker-alt" style="color:#3498db;"></i> ¿Dónde comer?</h2>
      <p>
        Los restaurantes más destacados están junto al <a href="/playa-de-ostende.php">Paseo Marítimo</a>, la <a href="/plaza-ayuntamiento.php">Plaza del Ayuntamiento</a> o el <a href="/puerto.php">Puerto pesquero</a>.
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
    <small>&copy; <?= date('Y'); ?> Playas2024 | Información sobre turismo en la costa de Cantabria</small>
  </footer>

  <!-- Datos estructurados Schema.org -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Restaurantes recomendados en Castro-Urdiales",
    "itemListElement": [
      {
        "@type": "Restaurant",
        "name": "Restaurante Miramar",
        "servesCuisine": ["Mariscos", "Cocina cántabra"],
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Castro-Urdiales",
          "addressRegion": "Cantabria",
          "addressCountry": "ES"
        },
        "url": "https://restaurante-mira-mar.com"
      },
      {
        "@type": "Restaurant",
        "name": "La Arboleda",
        "servesCuisine": ["Tradicional", "Casera"],
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Castro-Urdiales",
          "addressRegion": "Cantabria",
          "addressCountry": "ES"
        },
        "url": "https://laarboleda-castro.com"
      },
      {
        "@type": "Restaurant",
        "name": "El Puerto",
        "servesCuisine": ["Cocina moderna", "Local"],
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Castro-Urdiales",
          "addressRegion": "Cantabria",
          "addressCountry": "ES"
        },
        "url": "https://restauranteelpuerto.es"
      }
    ]
  }
  </script>
</body>
</html>