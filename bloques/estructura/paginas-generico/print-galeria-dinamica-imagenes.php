<!-- Galería dinámica imágenes-->
<section aria-labelledby="galeria" class="mb-12">
  <h2 id="galeria" class="text-2xl font-bold text-emerald-700 mb-4">📸 Galería de la Playa</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <?php foreach($galeria_imagenes as $img): ?>
      <figure class="w-full overflow-hidden rounded-2xl shadow-lg">
<div class="w-full overflow-hidden rounded-2xl shadow-lg">
  <img src="<?= $img['src'] ?>"
       alt="<?= $img['alt'] ?>"
       class="w-full h-auto object-contain transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl"
       loading="lazy">
</div>


        <figcaption class="mt-2 text-sm text-gray-600 text-center">
          <?= $img['caption'] ?> <br>
          <span class="text-xs">Fuente: 
            <?php if($img['fuente']): ?>
              <a href="<?= $img['fuente'] ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline">
                <?= $img['fuente_texto'] ?>
              </a>
            <?php else: ?>
              <?= $img['fuente_texto'] ?>
            <?php endif; ?>
          </span>
        </figcaption>
      </figure>
    <?php endforeach; ?>

  </div>
</section>
