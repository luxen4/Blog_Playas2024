
        <!-- $lugares de Interés en Gorliz -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa de Gorliz',
      'slug'   => 'playa-de-gorliz',
      'imagen' => 'playa-de-gorliz.jpg',
      'alt'    => 'Playa de Gorliz',
      'fuente' => 'gorliz.eus',
      'web_imagen' => 'https://www.gorliz.eus/playa-de-gorliz',
      'desc'   => 'Amplia playa de arena fina con servicios para toda la familia, ideal para paseos y deportes acuáticos.',
    ],
    [
      'nombre' => 'Faro de Gorliz',
      'slug'   => 'faro-de-gorliz',
      'imagen' => 'faro-de-gorliz.jpg',
      'alt'    => 'Faro de Gorliz',
      'fuente' => 'farosdeespana.com',
      'web_imagen' => 'https://www.farosdeespana.com/faro-de-gorliz',
      'desc'   => 'Faro histórico que ofrece unas vistas espectaculares de la costa vizcaína.',
    ],
    [
      'nombre' => 'Parque de las Dunas',
      'slug'   => 'parque-de-las-dunas',
      'imagen' => 'parque-de-las-dunas.jpg',
      'alt'    => 'Parque de las Dunas en Gorliz',
      'fuente' => 'turismo.bizkaia.eus',
      'web_imagen' => 'https://www.turismo.bizkaia.eus/parque-de-las-dunas-gorliz',
      'desc'   => 'Zona natural protegida ideal para paseos y observación de flora y fauna autóctona.',
    ],
    [
      'nombre' => 'Ruta Senderista Gorliz-Armintza',
      'slug'   => 'ruta-senderista-gorliz-armintza',
      'imagen' => 'ruta-senderista-gorliz-armintza.jpg',
      'alt'    => 'Ruta senderista entre Gorliz y Armintza',
      'fuente' => 'wikiloc.com',
      'web_imagen' => 'https://www.wikiloc.com/rutas-senderismo/gorliz-armintza',
      'desc'   => 'Ruta costera que conecta dos municipios con vistas al mar y naturaleza exuberante.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Gorliz</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Gorliz.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/bizkaia/gorliz/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
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
