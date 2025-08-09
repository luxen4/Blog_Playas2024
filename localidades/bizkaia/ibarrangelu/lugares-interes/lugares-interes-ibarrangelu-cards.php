<!-- Lugares de Interés en Ibarrangelu -->

<?php
  LUGARes_interes = [
    [
      'nombre' => 'Playa de Laga',
      'slug'   => 'playa-de-laga',
      'imagen' => 'playa-de-laga-1.jpg',
      'alt'    => 'Playa de Laga en Ibarrangelu',
      'fuente' => 'bizkaia.eus',
      'web_imagen' => 'https://www.bizkaia.eus/playa-de-laga',
      'desc'   => 'Playa virgen ideal para surf y disfrutar de la naturaleza en el corazón de la Reserva de Urdaibai.',
    ],
    [
      'nombre' => 'Cabo Ogoño',
      'slug'   => 'cabo-ogono',
      'imagen' => 'cabo-ogono.jpg',
      'alt'    => 'Cabo Ogoño en Ibarrangelu',
      'fuente' => 'urdaibai.org',
      'web_imagen' => 'https://www.urdaibai.org/cabo-ogono',
      'desc'   => 'Mirador natural con impresionantes vistas al mar Cantábrico y la costa vasca.',
    ],
    [
      'nombre' => 'Ruta Senderista Laga-Ogoño',
      'slug'   => 'ruta-senderista-laga-ogono',
      'imagen' => 'ruta-laga-ogono.jpg',
      'alt'    => 'Ruta senderista entre Laga y Ogoño',
      'fuente' => 'wikiloc.com',
      'web_imagen' => 'https://www.wikiloc.com/rutas-senderismo/laga-ogono',
      'desc'   => 'Paseo costero con panorámicas naturales y biodiversidad protegida.',
    ],
    [
      'nombre' => 'Centro de Interpretación de la Reserva de Urdaibai',
      'slug'   => 'centro-interpretacion-urdaibai',
      'imagen' => 'centro-interpretacion.jpg',
      'alt'    => 'Centro de Interpretación de la Reserva de Urdaibai',
      'fuente' => 'urdaibai.org',
      'web_imagen' => 'https://www.urdaibai.org/centro-interpretacion',
      'desc'   => 'Espacio educativo para conocer la fauna, flora y patrimonio natural de Urdaibai.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Ibarrangelu</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Ibarrangelu.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach (LUGARes_interes as LUGAR): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/bizkaia/ibarrangelu/lugares-interes/<?= LUGAR['slug']; ?>/img/<?= LUGAR['imagen']; ?>" 
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
