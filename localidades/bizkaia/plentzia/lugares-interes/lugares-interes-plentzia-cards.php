<!-- Lugares de Interés en Plentzia -->

<?php
  LUGARes_interes = [
    [
      'nombre' => 'Playa de Plentzia',
      'slug'   => 'playa-de-plentzia',
      'imagen' => 'playa-de-plentzia.jpg',
      'alt'    => 'Playa de Plentzia en Plentzia',
      'fuente' => 'bizkaia.eus',
      'web_imagen' => 'https://www.bizkaia.eus/playa-de-plentzia',
      'desc'   => 'Amplia playa de arena fina, perfecta para familias y deportes acuáticos en un entorno tranquilo.',
    ],
    [
      'nombre' => 'Puerto Deportivo de Plentzia',
      'slug'   => 'puerto-deportivo-plentzia',
      'imagen' => 'puerto-deportivo-plentzia.jpg',
      'alt'    => 'Puerto Deportivo de Plentzia',
      'fuente' => 'plentzia.eus',
      'web_imagen' => 'https://www.plentzia.eus/puerto-deportivo',
      'desc'   => 'Zona de ocio y náutica con bares, restaurantes y actividades al aire libre junto al mar.',
    ],
    [
      'nombre' => 'Ruta Senderista Plentzia - Gorliz',
      'slug'   => 'ruta-senderista-plentzia-gorliz',
      'imagen' => 'ruta-plentzia-gorliz.jpg',
      'alt'    => 'Ruta senderista entre Plentzia y Gorliz',
      'fuente' => 'wikiloc.com',
      'web_imagen' => 'https://www.wikiloc.com/rutas-senderismo/plentzia-gorliz',
      'desc'   => 'Camino costero entre dos municipios con vistas a la ría y la playa, ideal para caminatas relajadas.',
    ],
    [
      'nombre' => 'Parque de los Pinos',
      'slug'   => 'parque-de-los-pinos',
      'imagen' => 'parque-de-los-pinos.jpg',
      'alt'    => 'Parque de los Pinos en Plentzia',
      'fuente' => 'plentzia.eus',
      'web_imagen' => 'https://www.plentzia.eus/parque-de-los-pinos',
      'desc'   => 'Espacio verde con zonas infantiles y áreas de descanso para toda la familia.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Plentzia</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Plentzia.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach (LUGARes_interes as LUGAR): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/bizkaia/plentzia/lugares-interes/<?= LUGAR['slug']; ?>/img/<?= LUGAR['imagen']; ?>" 
              class="card-img-top h-64 object-cover rounded-top" 
              alt="<?= LUGAR['alt']; ?>">

            <figcaption class="text-xs text-gray-500 mt-1 px-3 py-1 bg-gray-100">
              📷 Imagen de <?= LUGAR['nombre']; ?> – fuente: 
              <a href="<?= LUGAR['web_imagen']; ?>" class="underline hover:text-blue-600 inline-flex items-center gap-1" target="_blank" rel="noopener noreferrer">
                <?= LUGAR['fuente']; ?>
              </a>
            </figcaption>
          </figure>

          <div class="card-body p-4">
            <h5 class="card-title text-lg font-semibold text-green-800"><?= LUGAR['nombre']; ?></h5>
            <p class="card-text text-muted small mb-3"><?= LUGAR['desc']; ?></p>
            <a href="/Blog_Playas2025/lugares-interes/<?= LUGAR['slug']; ?>" class="btn btn-success btn-sm px-3 py-2 shadow-sm">
              Explorar &rarr;
            </a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
