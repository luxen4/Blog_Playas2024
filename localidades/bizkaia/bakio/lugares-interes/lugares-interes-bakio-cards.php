<!-- $lugares de Interés en Bakio -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa de Bakio',
      'slug'   => 'playa-de-bakio',
      'imagen' => 'playa-de-bakio.jpg',
      'alt'    => 'Playa de Bakio',
      'fuente' => 'bakio.eus',
      'web_imagen' => 'https://bakio.eus/playa-de-bakio',
      'desc'   => 'Amplia playa de arena fina, ideal para surfistas y familias, con vistas a las montañas. ',
    ],
    [
      'nombre' => 'San Juan de Gaztelugatxe',
      'slug'   => 'san-juan-de-gaztelugatxe',
      'imagen' => 'san-juan-de-gaztelugatxe.jpg',
      'alt'    => 'San Juan de Gaztelugatxe',
      'fuente' => 'tourspain.es',
      'web_imagen' => 'https://tourspain.es/san-juan-de-gaztelugatxe/',
      'desc'   => 'Pequeña isla con una ermita y escalinata emblemática, famosa por su belleza y cultura. ',
    ],
    [
      'nombre' => 'Monte Serantes',
      'slug'   => 'monte-serantes',
      'imagen' => 'monte-serantes-bakio.jpg',
      'alt'    => 'Monte Serantes',
      'fuente' => 'wikiloc.com',
      'web_imagen' => 'https://www.wikiloc.com/rutas-senderismo/monte-serantes-1234567',
      'desc'   => 'Sendero popular para realizar excursiones con vistas panorámicas de la costa y Bakio.',
    ],
    [
      'nombre' => 'Surf en Bakio',
      'slug'   => 'surf-en-bakio',
      'imagen' => 'surf-bakio.jpg',
      'alt'    => 'Surf en Bakio',
      'fuente' => 'surfbakio.com',
      'web_imagen' => 'https://surfbakio.com/',
      'desc'   => 'Bakio es uno de los mejores puntos para practicar surf en Bizkaia, con escuelas y alquileres.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-blue-700 mb-2">📍 Lugares de Interés en Bakio</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Bakio.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/bizkaia/bakio/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
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
            <h5 class="card-title text-lg font-semibold text-blue-800"><?= $lugar['nombre']; ?></h5>
            <p class="card-text text-muted small mb-3"><?= $lugar['desc']; ?></p>
            <a href="/Blog_Playas2025/lugares-interes/<?= $lugar['slug']; ?>" class="btn btn-primary btn-sm px-3 py-2 shadow-sm">
              Explorar &rarr;
            </a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
