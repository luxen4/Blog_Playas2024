<!-- Lugares de Interés en Biarritz -->

<?php
  LUGARes_interes = [
    [
      'nombre' => 'Rocher de la Vierge',
      'slug'   => 'rocher-de-la-vierge',
      'imagen' => 'rocher-de-la-vierge.jpg',
      'alt'    => 'Rocher de la Vierge en Biarritz',
      'fuente' => 'biarritz.fr',
      'web_imagen' => 'https://www.biarritz.fr/rocher-de-la-vierge',
      'desc'   => 'Icono de Biarritz: un islote rocoso unido por una pasarela con impresionantes vistas al océano.',
    ],
    [
      'nombre' => 'Grande Plage de Biarritz',
      'slug'   => 'grande-plage-biarritz',
      'imagen' => 'grande-plage.jpg',
      'alt'    => 'Grande Plage de Biarritz',
      'fuente' => 'biarritz-tourisme.com',
      'web_imagen' => 'https://www.biarritz-tourisme.com/grande-plage',
      'desc'   => 'Playa más famosa de la ciudad, ideal para surf, baños de sol y paseos junto al centro histórico.',
    ],
    [
      'nombre' => 'Faro de Biarritz',
      'slug'   => 'faro-de-biarritz',
      'imagen' => 'faro-biarritz.jpg',
      'alt'    => 'Faro de Biarritz en la Pointe Saint-Martin',
      'fuente' => 'biarritz-tourisme.com',
      'web_imagen' => 'https://www.biarritz-tourisme.com/faro',
      'desc'   => 'Situado en la Pointe Saint-Martin, ofrece una panorámica espectacular de la costa vasco-francesa.',
    ],
    [
      'nombre' => 'Museo del Mar - Aquarium de Biarritz',
      'slug'   => 'museo-del-mar-aquarium-biarritz',
      'imagen' => 'museo-del-mar.jpg',
      'alt'    => 'Museo del Mar - Aquarium en Biarritz',
      'fuente' => 'biarritz.fr',
      'web_imagen' => 'https://www.biarritz.fr/museo-del-mar-aquarium',
      'desc'   => 'Centro dedicado a la fauna marina del Atlántico con acuarios, exposiciones y vistas al mar.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Biarritz</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos de Biarritz, joya de la costa atlántica francesa.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach (LUGARes_interes as LUGAR): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/nouvelle-aquitaine/biarritz/lugares-interes/<?= LUGAR['slug']; ?>/img/<?= LUGAR['imagen']; ?>" 
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
