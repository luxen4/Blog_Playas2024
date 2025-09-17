<!-- Descripción -->
<section class="grid md:grid-cols-2 gap-6 items-start mb-10">
  <div class="space-y-4">
    <?php foreach ($intro["parrafos"] as $p): ?>
      <p class="text-gray-800 text-sm md:text-base"><?= $p ?></p>
    <?php endforeach; ?>
  </div>

  <div class="grid grid-cols-1 gap-4 rounded-lg overflow-hidden shadow-lg">
    <?php foreach ($intro["imagenes"] as $img): ?>
      <figure class="text-center">
        <img src="<?= $img["src"] ?>" 
             alt="<?= $img["alt"] ?>" 
             class="w-full max-w-full mx-auto aspect-video object-cover rounded-md">
        <?php if (isset($img["pie"])): ?>
          <figcaption class="text-gray-500 text-xs mt-1">
            <?= $img["pie"] ?><br>
            📷 Fuente: 
            <a href="<?= $img['web_imagen']; ?>" class="underline hover:text-blue-600" target="_blank" rel="noopener noreferrer">
              <?= $img['fuente']; ?>
            </a>
          </figcaption>
        <?php endif; ?>
      </figure>
    <?php endforeach; ?>
  </div>
</section>

