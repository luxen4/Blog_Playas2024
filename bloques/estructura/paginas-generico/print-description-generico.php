<!-- Descripción -->
<section class="grid md:grid-cols-2 gap-6 items-start mb-10">
  <div class="space-y-4">
    <?php foreach ($intro["parrafos"] as $p): ?>
      <p class="text-gray-800 text-sm md:text-base"><?= $p ?></p>
    <?php endforeach; ?>
  </div>

  <div class="grid grid-cols-1 gap-4 rounded-lg overflow-hidden shadow-lg">
    <?php foreach ($intro["imagenes"] as $img): ?>
<figure class="text-center w-full rounded-md overflow-hidden shadow-lg">
  <img src="<?= $img["src"] ?>" 
       alt="<?= $img["alt"] ?>" 
       class="w-full h-auto object-contain transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl"
       loading="lazy">
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
  </div><?php if(isset($intro['video'])): ?>
  <div class="my-6">
    <iframe class="w-full aspect-video rounded-md shadow" 
            src="<?= $intro['video']['url'] ?>" 
            title="<?= $intro['video']['titulo'] ?>" 
            frameborder="0" 
            allowfullscreen>
    </iframe>
  </div>
<?php endif; ?>


</section>


