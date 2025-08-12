<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en <?= LUGAR ?></h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Ajo.</p>
  </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($lugares_interes as $lugar): ?>
            <div class="col">
            <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

                <figure class="mb-0">
                <img 
                    src= <?= PATH_HREF_RAIZ. "/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/". $lugar['slug']. "/img/" .$lugar['imagen']; ?> 
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
                <a 
                
                
                <?php if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
                    href="/Blog_Playas2025/<?= $lugar['slug']; ?>"<?php
                } else { ?>
                    href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES. '/'.$lugar['slug']; ?>/index.php"   <?php 
                }?> class="btn btn-success btn-sm px-3 py-2 shadow-sm">
                    Explorar &rarr;
                </a>
                </div>

            </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>