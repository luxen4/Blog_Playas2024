<section class="mb-10">
  <h2 class="text-2xl font-bold text-green-800 mb-4"><?= $infoParque["titulo"] ?></h2>
  <div class="grid md:grid-cols-2 gap-6">
    <?php foreach ($infoParque["items"] as $item): ?>
      <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-2"><?= $item["titulo"] ?></h3>
        <p><?= $item["descripcion"] ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>