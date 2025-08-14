<!-- $lugares de Interés en Saint-Jean-de-Luz -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa Grande de Saint-Jean-de-Luz',
      'slug'   => 'playa-grande-saint-jean-de-luz',
      'imagen' => 'playa-grande.jpg',
      'alt'    => 'Playa Grande de Saint-Jean-de-Luz',
      'fuente' => 'saint-jean-de-luz.com',
      'web_imagen' => 'https://www.saint-jean-de-luz.com/',
      'desc'   => 'Playa principal de arena fina, protegida por la bahía, ideal para familias y baños tranquilos.',
    ],
    [
      'nombre' => 'Puerto Pesquero',
      'slug'   => 'puerto-pesquero-saint-jean-de-luz',
      'imagen' => 'puerto-pesquero.jpg',
      'alt'    => 'Puerto pesquero de Saint-Jean-de-Luz',
      'fuente' => 'saint-jean-de-luz.com',
      'web_imagen' => 'https://www.saint-jean-de-luz.com/',
      'desc'   => 'Histórico puerto vasco-francés con barcos de pesca tradicionales y ambiente marinero.',
    ],
    [
      'nombre' => 'Iglesia de San Juan Bautista',
      'slug'   => 'iglesia-san-juan-bautista',
      'imagen' => 'iglesia-san-juan-bautista.jpg',
      'alt'    => 'Iglesia de San Juan Bautista en Saint-Jean-de-Luz',
      'fuente' => 'patrimoine-nouvelle-aquitaine.fr',
      'web_imagen' => 'https://www.patrimoine-nouvelle-aquitaine.fr/',
      'desc'   => 'Famosa por acoger la boda de Luis XIV, destaca por su arquitectura vasco-barroca y su retablo dorado.',
    ],
    [
      'nombre' => 'Fuerte de Socoa',
      'slug'   => 'fuerte-de-socoa',
      'imagen' => 'fuerte-socoa.jpg',
      'alt'    => 'Fuerte de Socoa en Saint-Jean-de-Luz',
      'fuente' => 'ot-socoa.fr',
      'web_imagen' => 'https://www.ot-socoa.fr/',
      'desc'   => 'Fortificación costera construida para proteger la bahía, con vistas espectaculares del Atlántico.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-red-700 mb-2">📍 Lugares de Interés en Saint-Jean-de-Luz</h2>
    <p class="text-gray-600">Descubre el encanto histórico, cultural y natural de esta joya de la costa vasca francesa.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/francia/saint-jean-de-luz/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
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
            <h5 class="card-title text-lg font-semibold text-red-800"><?= $lugar['nombre']; ?></h5>
            <p class="card-text text-muted small mb-3"><?= $lugar['desc']; ?></p>
            <a href="/Blog_Playas2025/lugares-interes/<?= $lugar['slug']; ?>" class="btn btn-danger btn-sm px-3 py-2 shadow-sm">
              Explorar &rarr;
            </a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
