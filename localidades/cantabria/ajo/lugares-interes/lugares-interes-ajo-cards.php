
        <!-- Lugares de Interés en ajo -->

        <?php
          $lugares_interes = [
            [
              'nombre' => 'Faro de Cabo de Ajo',
              'slug'   => 'faro-de-cabo-de-ajo',
              'imagen' => 'faro-de-cabo-de-ajo.jpg',
              'alt'    => 'Faro de Cabo de Ajo',
              'fuente' => 'farodelcaballo.es',
              'web_imagen' => 'https://farodelcaballo.es/faro-de-ajo-como-llegar/',
              'desc'   => 'El faro más colorido de España, con vistas únicas al Cantábrico.',
            ],
            [
              'nombre' => 'Playa de Cuberris',
              'slug'   => 'playa-de-cuberris',
              'imagen' => 'playa-de-cuberris-ajo-cantabria-1.jpg',
              'alt'    => 'Playa de Cuberris',
              'fuente' => 'www.escapadarural.com',
              'web_imagen' => 'https://www.escapadarural.com/que-hacer/ajo/playa-de-cuberris',
              'desc'   => 'Una playa amplia ideal para surf y familias, rodeada de naturaleza.',
            ],
            [
              'nombre' => 'Playa de Antuerta',
              'slug'   => 'playa-de-antuerta',
              'imagen' => 'playa-de-antuerta-ajo-cantabria-1.jpg',
              'alt'    => 'Playa de Antuerta',
              'fuente' => 'turismodecantabria.com',
              'web_imagen' => 'https://turismodecantabria.com/playas/playa-de-antuerta/',
              'desc'   => 'Playa virgen de arena dorada y entorno natural protegido, ideal para desconectar y disfrutar del mar.',
            ],
            [
              'nombre' => 'Acantilados de Cabo de Ajo',
              'slug'   => 'acantilados-de-cabo-de-ajo',
              'imagen' => 'acantilados-de-cabo-de-ajo.jpg',
              'alt'    => 'Acantilados de Cabo de Ajo',
              'fuente' => 'yendoporlavida.com',
              'web_imagen' => 'https://yendoporlavida.com/ruta-faro-de-ajo-la-ojerada/',
              'desc'   => 'Impresionantes formaciones rocosas con vistas al mar Cantábrico.',
            ],
            [
              'nombre' => 'Ruta de la Costa Oriental',
              'slug'   => 'ruta-de-la-costa-oriental',
              'imagen' => 'ruta-de-la-costa-oriental.jpg',
              'alt'    => 'Ruta de la Costa Oriental',
              'fuente' => 'lossaltapraos.blogspot.com',
              'web_imagen' => 'https://lossaltapraos.blogspot.com/2019/05/costa-de-ajo-circular.html',
              'desc'   => 'Sendero costero ideal para caminatas junto al mar y acantilados.',
            ]/*,
            [
              'nombre' => 'Mirador del Cabo en Ajo',
              'slug'   => 'mirador-del-cabo-en-ajo',
              'imagen' => 'mirador-del-cabo-en-ajo.jpg',
              'alt'    => 'Mirador del Cabo en Ajo',
              'fuente' => 'turismodecantabria.com',
              'web_imagen' => 'https://turismodecantabria.com/disfrutala/que-visitar/389-mirador-del-cabo-de-ajo',
              'desc'   => 'Punto panorámico con impresionantes vistas del litoral cantábrico y el faro de Ajo.',
            ]*/
          ];
          ?>
          <section id="lugares-interes" class="my-10">
            <div class="text-center mb-6">
              <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Ajo</h2>
              <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Ajo.</p>
            </div>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <?php foreach ($lugares_interes as $lugar): ?>
    <div class="col">
      <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

        <figure class="mb-0">
          <img 
            src="/Blog_Playas2025/localidades/cantabria/ajo/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
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