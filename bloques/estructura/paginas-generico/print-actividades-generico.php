<section class="mb-10">
  <h2 class="text-2xl font-bold text-green-800 mb-4"><?= $actividades["titulo"] ?></h2>
  <ul class="grid md:grid-cols-2 gap-4">
    <?php foreach ($actividades["items"] as $actividad): ?>
      <li class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-all flex items-center gap-3">
        <span class="text-2xl"><?= $actividad["icono"] ?></span>
        <span><?= $actividad["texto"] ?></span>
      </li>
    <?php endforeach; ?>
  </ul>
</section>