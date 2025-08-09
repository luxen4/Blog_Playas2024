<!-- Lugares de Interés en Santoña -->

<?php
  LUGARes_interes = [
    [
      'nombre' => 'Playa de Berria',
      'slug'   => 'playa-de-berria',
      'imagen' => 'playa-de-berria-santona.jpg',
      'alt'    => 'Playa de Berria',
      'fuente' => 'turismodecantabria.com',
      'web_imagen' => 'https://turismodecantabria.com/disfrutala/playas/51-playa-de-berria',
      'desc'   => 'Amplia playa de arena fina, muy popular entre surfistas y amantes del mar.',
    ],
    [
      'nombre' => 'Monte Buciero',
      'slug'   => 'monte-buciero',
      'imagen' => 'monte-buciero-santona.jpg',
      'alt'    => 'Monte Buciero',
      'fuente' => 'senderismocantabria.com',
      'web_imagen' => 'https://senderismocantabria.com/monte-buciero/',
      'desc'   => 'Parque natural con rutas de senderismo, vistas espectaculares y naturaleza salvaje.',
    ],
    [
      'nombre' => 'Faro del Caballo',
      'slug'   => 'faro-del-caballo',
      'imagen' => 'faro-del-caballo-santona.jpg',
      'alt'    => 'Faro del Caballo',
      'fuente' => 'farodelcaballo.es',
      'web_imagen' => 'https://farodelcaballo.es/',
      'desc'   => 'Faro histórico al que se accede por más de 700 escalones tallados en la roca.',
    ],
    [
      'nombre' => 'Puerto de Santoña',
      'slug'   => 'puerto-de-santona',
      'imagen' => 'puerto-de-santona.jpg',
      'alt'    => 'Puerto de Santoña',
      'fuente' => 'santona.es',
      'web_imagen' => 'https://www.santona.es/',
      'desc'   => 'Corazón pesquero y comercial de la villa, famoso por sus anchoas.',
    ],
  ];
?>
<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Santoña</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos de esta villa marinera de Cantabria.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach (LUGARes_interes as LUGAR): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/cantabria/santona/lugares-interes/<?= LUGAR['slug']; ?>/img/<?= LUGAR['imagen']; ?>" 
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
