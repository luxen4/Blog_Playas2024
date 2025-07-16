
<details class="group bg-<?= $color_page; ?>-50 border border-<?= $color_page; ?>-300 rounded-md p-1 w-full mx-auto my-1 shadow-sm">
  <summary class="cursor-pointer text-<?= $color_page; ?>-800 font-semibold text-lg flex items-center justify-between">
    <div class="flex items-center gap-2">
      <!-- Icono SEO (lupa o gráfico) -->
      <svg class="w-6 h-6 text-<?= $color_page; ?>-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5a7 7 0 017 7c0 1.657-.672 3.157-1.758 4.242l4.536 4.536a1 1 0 01-1.414 1.414l-4.536-4.536A7 7 0 1111 5z" />
      </svg>
      <span><?= $localidad_nombre . ' ('. $localidad.')'; ?></span>
    </div>
    <!-- Flecha -->
    <svg class="w-5 h-5 text-<?= $color_page; ?>-600 transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
    </svg>
  </summary>

  <div class="mt-4 text-sm text-<?= $color_page; ?>-900 leading-relaxed">
    <?php require $targeta; ?>
  </div>

</details>