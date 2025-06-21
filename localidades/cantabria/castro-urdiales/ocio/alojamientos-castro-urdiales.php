<?php $region = "Cantabria"; $region_minuscula = 'cantabria'; $carpeta = 'castro-urdiales';  $nombre_localidad = "Castro-Urdiales"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta}/ocio/head/variables/data-generico.php"; ?>
<?php $url_tripadvisor = "https://www.tripadvisor.es/Hotels-g776865-Castro_Urdiales_Cantabria-Hotels.html"; ?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA. "/ocio/head/etiquetas-meta.php"; ?>
    <title>Alojamientos en <?= $nombre_localidad; ?> | Dónde Dormir en <?= $region; ?></title>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD . "/links-generico.php"; ?>
  </head>

  <body>
    <main class="container py-5">
      <header class="mb-5 text-center">
        <h1 class="text-success"><i class="fas fa-bed"></i> Alojamientos en <?= $nombre_localidad; ?></h1>
        <p class="lead">Guía de hospedajes para tu estancia en la costa de <?= $region; ?></p>
      </header>

      <section class="mb-5">
        <h2 class="h4 text-primary"><i class="fas fa-hotel"></i> Hoteles recomendados</h2>
        <p>
          En <strong><?= $nombre_localidad; ?></strong> encontrarás hoteles frente al mar y en el centro histórico. Algunos de los más valorados son el 
          <a href="https://www.hotel-lasrocas.com" target="_blank" rel="noopener noreferrer">Hotel Las Rocas</a> con vistas a la Playa de Brazomar, y el 
          <a href="https://www.hotelareatlantico.com" target="_blank">Hotel Área Cantábrico</a> junto al paseo marítimo.
        </p>
      </section>

      <section class="mb-5">
        <h2 class="h4 text-primary"><i class="fas fa-home"></i> Apartamentos y estudios</h2>
        <p>
          Si prefieres independencia y cocina propia, hay apartamentos turísticos como 
          <a href="https://www.booking.com/hotel/es/puertochico-castro.html" target="_blank">PuertoChico</a> o 
          <a href="https://www.booking.com/hotel/es/studio-zen.html" target="_blank">Studio Zen</a>, ideales para parejas o familias.
        </p>
      </section>

      <section class="mb-5">
        <h2 class="h4 text-primary"><i class="fas fa-tree"></i> Casas rurales y zonas tranquilas</h2>
        <p>
          En las afueras de Castro-Urdiales puedes encontrar alojamientos rurales como 
          <a href="https://www.casaruraleltxoko.com" target="_blank">Casa Rural El Txoko</a> o 
          <a href="https://www.toprural.com/Alojamiento-rural/Casona-Campoo.htm" target="_blank">Casona Campoo</a> para un ambiente más natural.
        </p>
      </section>

      <section class="mb-5">
        <h2 class="h4 text-primary"><i class="fas fa-euro-sign"></i> Opciones económicas</h2>
        <p>
          Las pensiones como 
          <a href="https://www.pensionlagaviota.com" target="_blank">Pensión La Gaviota</a> o 
          <a href="https://www.hostalcatamaran.com" target="_blank">Hostal Catamarán</a> ofrecen estancias asequibles en ubicaciones céntricas.
        </p>
      </section>

      <section class="mb-5">
        <h2 class="text-success"><i class="fas fa-star" style="color:#e74c3c;"></i> Recomendaciones destacadas</h2>
        <ul class="list-unstyled">
          <li class="mb-3">
            <strong>🏨 Hotel Las Rocas</strong><br>
            4 estrellas, junto a la playa de Brazomar. 
            <a href="https://www.hotel-lasrocas.com" target="_blank">Sitio oficial</a>
          </li>
          <li class="mb-3">
            <strong>🏡 Casa Rural El Txoko</strong><br>
            Encanto rural a pocos minutos del centro. 
            <a href="https://www.casaruraleltxoko.com" target="_blank">Más info</a>
          </li>
          <li class="mb-3">
            <strong>🛏️ Hostal Catamarán</strong><br>
            Económico y muy bien ubicado. 
            <a href="https://www.hostalcatamaran.com" target="_blank">Ver web</a>
          </li>
        </ul>
      </section>

      <section class="mb-5">
        <h2 class="text-info"><i class="fas fa-map-marker-alt" style="color:#3498db;"></i> ¿Dónde alojarse?</h2>
        <p>
          Las zonas preferidas son la <a href="/playa-de-brazomar.php">Playa de Brazomar</a>, el <a href="/casco-antiguo.php">Casco Antiguo</a> y el entorno del <a href="/paseo-marítimo.php">Paseo Marítimo</a>.
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
          🔎 Opiniones, precios y más opciones:
          <br />
          <a href="<?= $url_tripadvisor; ?>" class="btn btn-primary mt-2" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-tripadvisor"></i> Ver en TripAdvisor
          </a>
        </p>
      </section>
    </main>

    <footer class="text-center py-4 bg-light mt-5">
      <small>&copy; <?= date('Y'); ?> Playas2025 | Alojamientos y turismo en la costa de Cantabria</small>
    </footer>

    <?php require PATH_RAIZ_LOCALIDADES_OCIO . '/schema-org.php'; // Por estructura, va aquí! ?>

  </body>
</html>