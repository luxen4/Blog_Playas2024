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
  <?php if (isset($img["caption"])): ?>
        <figcaption class="mt-2 text-sm text-gray-600 text-center">
          <?= $img['caption'] ?> <br>
          <span class="text-xs">📷 Fuente: 
            <?php if($img['fuente']): ?>
              <a href="<?= $img['fuente'] ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline">
                <?= $img['fuente_texto'] ?>
              </a>
            <?php else: ?>
              <?= $img['fuente_texto'] ?>
            <?php endif; ?>
          </span>
        </figcaption>
  <?php endif; ?>
</figure>

    <?php endforeach; ?>
  </div>
  
  
<?php if(isset($intro['video'])): ?>
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


