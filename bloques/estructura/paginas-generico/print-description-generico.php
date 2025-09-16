<section class="grid md:grid-cols-2 gap-6 items-start mb-10">
  <div class="space-y-4">
    <?php foreach ($intro["parrafos"] as $p): ?>
      <p class="text-gray-800 text-sm md:text-base"><?= $p ?></p>
    <?php endforeach; ?>
  </div>

  <figure class="grid grid-cols-1 gap-4 rounded-lg overflow-hidden shadow-lg">
    <?php foreach ($intro["imagenes"] as $img): ?>
      <img src="<?= $img["src"] ?>" 
           alt="<?= $img["alt"] ?>" 
           class="w-full aspect-video object-cover">
    <?php endforeach; ?>
  </figure>
</section>
