<!-- Lugares de Interés en Hendaia -->

<?php
  LUGARes_interes = [
    [
      'nombre' => 'Playa de Ondarraitz',
      'slug'   => 'playa-de-ondarraitz',
      'imagen' => 'playa-de-ondarraitz.jpg',
      'alt'    => 'Playa de Ondarraitz en Hendaia',
      'fuente' => 'hendaye-tourisme.fr',
      'web_imagen' => 'https://www.hendaye-tourisme.fr/plage-ondarraitz',
      'desc'   => 'Extensa playa de arena fina, perfecta para paseos, surf y actividades familiares en la costa vasco-francesa.',
    ],
    [
      'nombre' => 'Castillo de Abbadia',
      'slug'   => 'castillo-de-abbadia',
      'imagen' => 'castillo-abbadia.jpg',
      'alt'    => 'Castillo de Abbadia en Hendaia',
      'fuente' => 'abbadia.fr',
      'web_imagen' => 'https://www.abbadia.fr',
      'desc'   => 'Castillo neogótico rodeado de jardines, con impresionantes vistas al océano y rica historia científica.',
    ],
    [
      'nombre' => 'Puerto Deportivo de Hendaia',
      'slug'   => 'puerto-deportivo-hendaia',
      'imagen' => 'puerto-hendaia.jpg',
      'alt'    => 'Puerto deportivo de Hendaia',
      'fuente' => 'hendaye-tourisme.fr',
      'web_imagen' => 'https://www.hendaye-tourisme.fr/puerto',
      'desc'   => 'Puerto moderno con ambiente animado, ideal para pasear y disfrutar de la gastronomía local.',
    ],
    [
      'nombre' => 'Corniche Basque',
      'slug'   => 'corniche-basque-hendaia',
      'imagen' => 'corniche-basque.jpg',
      'alt'    => 'Corniche Basque en Hendaia',
      'fuente' => 'tourisme64.com',
      'web_imagen' => 'https://www.tourisme64.com/corniche-basque',
      'desc'   => 'Carretera costera panorámica que conecta Hendaia con San Juan de Luz, con acantilados y vistas espectaculares.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Hendaia</h2>
    <p class="text-gray-600">Explora los lugares más destacados de este rincón del País Vasco francés.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach (LUGARes_interes as LUGAR): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/nouvelle-aquitaine/hendaia/lugares-interes/<?= LUGAR['slug']; ?>/img/<?= LUGAR['imagen']; ?>" 
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
