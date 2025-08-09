
<?php 
$region = "Cantabria"; $region_minuscula = strtolower($region); 
$localidad_minuscula = 'castro-urdiales'; $localidad_minuscula_lugar = 'mirador-de-cotolino'; $nombre_sub_carpeta = 'lugares-interes';
COLOR_PAGE='blue';
$title_head = 'Mirador de Cotolino | Vistas al Cantábrico en Castro-Urdiales';  
lugar_minuscula_footer='Mirador de Cotolino - Castro-Urdiales'; ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/{$nombre_sub_carpeta}/previo.php"; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD. '/head-generico.php'; ?>
  </head>


  <body class="bg-white text-gray-900 font-sans">
    <header class="bg-<?= COLOR_PAGE; ?>-100 p-6 text-center shadow-md">
      <h1 class="text-3xl font-bold text-<?= COLOR_PAGE; ?>-800">Mirador de Cotolino</h1>
      <p class="mt-2 text-lg text-<?= COLOR_PAGE; ?>-700">Un lugar perfecto para contemplar el mar en Castro-Urdiales</p>
    </header>

    <main class="max-w-4xl mx-auto p-6 space-y-8">
      <section>
        <img src="<?= PATH_HREF_CARPETA_IMAGENES ?>/mirador-catolino-castro-urdiales.jpg" alt="Mirador de Cotolino en Castro-Urdiales" class="rounded-xl shadow w-full">
        <p class="mt-4">
          Situado en la zona oeste de Castro-Urdiales, el <strong>Mirador de Cotolino</strong> ofrece unas vistas espectaculares del mar Cantábrico. Es un lugar ideal para pasear, sentarse a leer o disfrutar de un atardecer tranquilo.
        </p>
      </section>

      <section>
        <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-800">Qué encontrarás</h2>
        <ul class="list-disc list-inside mt-2">
          <li>Bancos y zonas ajardinadas frente al mar</li>
          <li>Pasarela peatonal de fácil acceso</li>
          <li>Paneles sobre la geografía del entorno</li>
          <li>Entorno ideal para fotografía y relajación</li>
        </ul>
      </section>

      <section>
        <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-800">Cómo llegar</h2>
        <p class="mt-2">
          Desde el centro se accede a pie en unos 15 minutos siguiendo la Avenida de la Playa y subiendo por la calle Silvestre Ochoa. Hay aparcamiento limitado en la zona.
        </p>
      </section>

      <section>
        <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-800">Consejo local</h2>
        <p class="mt-2">
          Llévate algo para merendar y ve al atardecer: es uno de los rincones más mágicos de Castro-Urdiales para desconectar junto al mar.
        </p>
        <p class="mt-1"><strong>📍 Coordenadas GPS:</strong> 43.3830° N, 3.2150° W</p>
      </section>

      <section>
        <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-800">Cerca de aquí</h2>
        <div class="grid md:grid-cols-2 gap-6 mt-4">
          <div class="bg-<?= COLOR_PAGE; ?>-50 p-4 rounded-xl shadow">
            <h3 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700">Paseo Marítimo</h3>
            <p>Un paseo junto al mar que conecta el centro con zonas verdes y acantilados.</p>
          </div>
          <div class="bg-<?= COLOR_PAGE; ?>-50 p-4 rounded-xl shadow">
            <h3 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700">Mina de Dícido</h3>
            <p>Antiguo complejo minero frente al mar, cargado de historia y vistas únicas.</p>
          </div>
        </div>
      </section>

      <section class="mt-6 text-center">
        <a href="https://turismo.castro-urdiales.net/" target="_blank" class="inline-block bg-<?= COLOR_PAGE; ?>-600 text-white px-5 py-3 rounded-xl shadow hover:bg-<?= COLOR_PAGE; ?>-700 transition">
          Más info oficial en Turismo Castro-Urdiales
        </a>
      </section>
    </main>

      <?php require PATH_RAIZ_CARPETA_LOCALIDADES_LUGARES_INTERES. '/footer-generico.php' ?>
      <?php require PATH_RAIZ_CARPETA_LUGARES_SCHEMAS. '/schemas-body.php' ?>

  </body>
</html>