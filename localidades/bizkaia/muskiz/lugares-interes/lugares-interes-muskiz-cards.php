<!-- Lugares de Interés en Muskiz -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa de La Arena',
      'slug'   => 'playa-de-la-arena',
      'imagen' => 'playa-de-la-arena.jpg',
      'alt'    => 'Playa de La Arena en Muskiz',
      'fuente' => 'bizkaia.eus',
      'web_imagen' => 'https://www.bizkaia.eus/playa-de-la-arena',
      'desc'   => 'Amplia playa de arena fina con servicios para familias y deportes acuáticos.',
    ],
    [
      'nombre' => 'Torre de Muskiz',
      'slug'   => 'torre-de-muskiz',
      'imagen' => 'torre-de-muskiz.jpg',
      'alt'    => 'Torre histórica de Muskiz',
      'fuente' => 'muskiz.eus',
      'web_imagen' => 'https://www.muskiz.eus/torre',
      'desc'   => 'Antigua torre medieval emblemática con historia y visitas guiadas.',
    ],
    [
      'nombre' => 'Ruta Senderista Muskiz - Punta Lucero',
      'slug'   => 'ruta-senderista-muskiz-punta-lucero',
      'imagen' => 'ruta-muskiz-punta-lucero.jpg',
      'alt'    => 'Ruta senderista en Muskiz hasta Punta Lucero',
      'fuente' => 'wikiloc.com',
      'web_imagen' => 'https://www.wikiloc.com/rutas-senderismo/muskiz-punta-lucero',
      'desc'   => 'Ruta natural con vistas al mar y a la costa vizcaína, ideal para caminantes.',
    ],
    [
      'nombre' => 'Parque Ecológico de Muskiz',
      'slug'   => 'parque-ecologico-muskiz',
      'imagen' => 'parque-ecologico.jpg',
      'alt'    => 'Parque Ecológico de Muskiz',
      'fuente' => 'muskiz.eus',
      'web_imagen' => 'https://www.muskiz.eus/parque-ecologico',
      'desc'   => 'Espacio natural protegido con senderos y zonas de picnic para toda la familia.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Muskiz</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Muskiz.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/bizkaia/muskiz/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
              class="card-img-top h-64 object-cover rounded-top" 
              alt="<?= $lugar['alt']; ?>">

            <figcaption class="text-xs text-gray-500 mt-1 px-3 py-1 bg-gray-100">
              📷 Imagen de <?= $lugar['nombre']; ?> – fuente: 
              <a href="<?= $lugar['web_imagen']; ?>" class="underline hover:text-blue-600 inline-flex items-center gap-1" target="_blank" rel="noopener noreferrer">
                <?= $lugar['fuente']; ?>
              </a>
            </figcaption>
          </figure>

          <div class="card-body p-4">
            <h5 class="card-title text-lg font-semibold text-green-800"><?= $lugar['nombre']; ?></h5>
            <p class="card-text text-muted small mb-3"><?= $lugar['desc']; ?></p>
            <a href="/Blog_Playas2025/lugares-interes/<?= $lugar['slug']; ?>" class="btn btn-success btn-sm px-3 py-2 shadow-sm">
              Explorar &rarr;
            </a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
