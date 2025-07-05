    
    <?php /*
    <!-- Enlace para volver a lugares de interés -->
    <a href="<?= PATH_HREF_RAIZ_LOCALIDAD ?>/index.php" class="inline-flex items-center gap-2 px-6 py-2 border border-<?= $color_page; ?>-600 text-<?= $color_page; ?>-600 rounded-full hover:bg-<?= $color_page; ?>-600 hover:text-white transition" aria-label="Volver a lugares de interés">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
      Volver a lugares de interés
    </a> */ ?>

    <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/index.php"
         class="inline-flex items-center gap-2 px-5 py-2 border border-blue-600 text-blue-600 rounded-full hover:bg-blue-600 hover:text-white transition"
         aria-label="Volver a la lista de lugares de interés">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Volver a lugares de interés
    </a>