<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines-footer.php"; ?>
<footer class="bg-<?= $color_page; ?>-100 text-center py-2 mt-2 text-sm text-<?= $color_page; ?>-800 shadow-inner">
  <p class="font-semibold text-lg"><?= date('Y') ?> <?= $tema_footer; ?></p>
  <p>&copy; <?= NAME_BLOG; ?> – <?= AUTHOR; ?></p>
  <p>Contacto: <a href="mailto:superlaya50@gmail.com" class="underline hover:text-<?= $color_page; ?>-600">superlaya50@gmail.com</a></p>
</footer>