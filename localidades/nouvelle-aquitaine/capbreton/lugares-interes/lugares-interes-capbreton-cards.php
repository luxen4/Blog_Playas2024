<!-- Lugares de Interés en Capbreton -->

<?php
  LUGARes_interes = [
    [
      'nombre' => 'Playa de Capbreton',
      'slug'   => 'playa-de-capbreton',
      'imagen' => 'playa-de-capbreton.jpg',
      'alt'    => 'Playa de Capbreton',
      'fuente' => 'capbreton.fr',
      'web_imagen' => 'https://www.capbreton.fr/plage-de-capbreton',
      'desc'   => 'Amplia playa de arena fina, ideal para surfistas y familias, con un ambiente relajado y vistas al Atlántico.',
    ],
    [
      'nombre' => 'Puerto de Capbreton',
      'slug'   => 'puerto-de-capbreton',
      'imagen' => 'puerto-de-capbreton.jpg',
      'alt'    => 'Puerto pesquero y deportivo de Capbreton',
      'fuente' => 'tourisme-capbreton.com',
      'web_imagen' => 'https://www.tourisme-capbreton.com/puerto',
      'desc'   => 'Puerto histórico con actividad pesquera y marina deportiva, rodeado de restaurantes y paseos marítimos.',
    ],
    [
      'nombre' => 'La Piste Cyclable Vélodyssée',
      'slug'   => 'piste-cyclable-velodyssee',
      'imagen' => 'velodyssee-capbreton.jpg',
      'alt'    => 'Pista ciclista Vélodyssée en Capbreton',
      'fuente' => 'velodyssee.com',
      'web_imagen' => 'https://www.velodyssee.com/capbreton',
      'desc'   => 'Ruta ciclista costera que pasa por Capbreton, ideal para descubrir la región en bicicleta.',
    ],
    [
      'nombre' => 'Forêt Domaniale de Capbreton',
      'slug'   => 'foret-domaniale-capbreton',
      'imagen' => 'foret-capbreton.jpg',
      'alt'    => 'Bosque estatal de Capbreton',
      'fuente' => 'landes-tourisme.com',
      'web_imagen' => 'https://www.landes-tourisme.com/foret-capbreton',
      'desc'   => 'Gran bosque de pinos cercano a la playa, perfecto para senderismo, picnic y contacto con la naturaleza.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Capbreton</h2>
    <p class="text-gray-600">Descubre los espacios naturales y culturales que hacen especial a Capbreton.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach (LUGARes_interes as LUGAR): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/nouvelle-aquitaine/capbreton/lugares-interes/<?= LUGAR['slug']; ?>/img/<?= LUGAR['imagen']; ?>" 
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
