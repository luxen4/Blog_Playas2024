<section class="mb-10 text-gray-700">
  <h2 class="text-2xl font-bold text-green-800 mb-4"><?= $contacto["titulo"] ?></h2>
  <ul class="space-y-2">
    <li>
      <strong>Teléfono Ayuntamiento:</strong>
      <a href="<?= $contacto["telefono"]["enlace"] ?>" class="text-green-600 hover:underline">
        <?= $contacto["telefono"]["texto"] ?>
      </a>
    </li>
    <li>
      <strong>Sitio web:</strong>
      <a href="<?= $contacto["web"]["url"] ?>" target="_blank" rel="noopener noreferrer" class="text-green-600 hover:underline">
        <?= $contacto["web"]["texto"] ?>
      </a>
    </li>
  </ul>
</section>
