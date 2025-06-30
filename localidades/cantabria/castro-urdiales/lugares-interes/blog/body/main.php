<!-- Main Content Section - Eventos en Castro Urdiales -->
<main class="container mx-auto max-w-7xl px-2 py-4">
  <div class="bg-white rounded-2xl shadow-md p-4 md:p-6">
    
    <header class="mb-6 text-center">
      <h1 class="text-2xl md:text-3xl font-bold text-<?= $color_page; ?>-700 flex items-center justify-center gap-2">
        <i class="fas fa-calendar-days"></i> Eventos en <?= $localidad_minuscula; ?>
      </h1>
      <p class="mt-2 text-gray-600 text-base md:text-lg">Fiestas tradicionales, cultura, música y actividades en la costa de <?= $region; ?></p>
    </header>

    <section class="mb-6 text-gray-700">
      <p>
        Si estás planeando una visita a <strong class="text-gray-900"><?= $localidad_minuscula; ?></strong>, no puedes perderte sus eventos más emblemáticos. Esta villa marinera de Cantabria vibra con celebraciones únicas que combinan tradición, cultura y mucha vida en las calles. Aquí te compartimos una selección de las fiestas y actividades más destacadas.
      </p>
    </section>

    <!-- Pasión Viviente -->
    <section class="mb-6">
      <h2 class="text-lg font-semibold text-primary flex items-center gap-2"><i class="fas fa-cross"></i> La Pasión Viviente (Semana Santa)</h2>
      <p class="text-gray-700 mt-1">Cada Viernes Santo, más de 600 vecinos dan vida a una de las recreaciones más sobrecogedoras de España. La <strong>Pasión Viviente</strong>, declarada Fiesta de Interés Turístico Nacional, transforma el casco histórico en Jerusalén con escenas realistas de la vida y muerte de Jesús.</p>
    </section>

    <!-- Salve Marinera y Carmen -->
    <section class="mb-6">
      <h2 class="text-lg font-semibold text-primary flex items-center gap-2"><i class="fas fa-anchor"></i> Salve Marinera y Día del Carmen</h2>
      <p class="text-gray-700 mt-1">El 15 y 16 de julio, el puerto se llena de emoción con el <strong>Canto de la Salve Marinera</strong> y la procesión de la <strong>Virgen del Carmen</strong>. Barcos engalanados, música coral y devoción pesquera en una de las fiestas más emotivas del calendario.</p>
    </section>

    <!-- Semana Grande -->
    <section class="mb-6">
      <h2 class="text-lg font-semibold text-primary flex items-center gap-2"><i class="fas fa-music"></i> Semana Grande (finales de julio)</h2>
      <p class="text-gray-700 mt-1">Durante la <strong>Semana Grande</strong>, Castro se transforma: conciertos gratuitos, ferias gastronómicas, desfiles, fuegos artificiales y actividades para todos los públicos llenan de vida cada rincón. Una cita imprescindible para locales y turistas.</p>
    </section>

    <!-- Carnaval -->
    <section class="mb-6">
      <h2 class="text-lg font-semibold text-primary flex items-center gap-2"><i class="fas fa-masks-theater"></i> Carnaval</h2>
      <p class="text-gray-700 mt-1">En febrero, las calles se llenan de color y creatividad con disfraces, concursos y espectáculos. El <strong>Carnaval de Castro-Urdiales</strong> es uno de los más animados de la región.</p>
    </section>

    <!-- San Andrés -->
    <section class="mb-6">
      <h2 class="text-lg font-semibold text-primary flex items-center gap-2"><i class="fas fa-fish"></i> Fiesta de San Andrés (30 de noviembre)</h2>
      <p class="text-gray-700 mt-1">Una celebración marinera tradicional con sardinadas populares, danzas y procesiones en honor al patrón de los pescadores. Ideal para los que buscan conocer la esencia más auténtica de la villa.</p>
    </section>

    <!-- Agenda cultural -->
    <section class="text-center my-10">
      <h3 class="text-lg md:text-xl font-semibold text-info mb-2">📅 ¿Quieres ver la agenda completa?</h3>
      <p class="text-gray-700 mb-3">Consulta la programación actualizada de actividades culturales, deportivas y festivas en el sitio oficial del ayuntamiento:</p>
      <a href="<?= $url_ayuntamiento; ?>" target="_blank" rel="noopener noreferrer" class="inline-block px-5 py-2 border border-<?= $color_page; ?>-600 text-<?= $color_page; ?>-600 rounded-full hover:bg-<?= $color_page; ?>-600 hover:text-white transition">
        <i class="fas fa-calendar-check mr-1"></i> Agenda oficial de Castro-Urdiales
      </a>
    </section>

    <!-- Enlace a guía -->
    <section class="text-center mt-10">
      <h3 class="mb-2 text-xl text-gray-900">🧳 ¿Vienes a Castro en fechas especiales?</h3>
      <p class="text-gray-700 mb-4">Acompaña tu visita con <a href="/rutas-costeras-castro-urdiales.php" class="text-<?= $color_page; ?>-700 underline hover:text-<?= $color_page; ?>-900">rutas por los acantilados</a>, una parada en los <a href="/restaurantes.php" class="text-<?= $color_page; ?>-700 underline hover:text-<?= $color_page; ?>-900">mejores restaurantes</a> y paseos por el <a href="/casco-antiguo.php" class="text-<?= $color_page; ?>-700 underline hover:text-<?= $color_page; ?>-900">casco histórico</a>.</p>
      
      <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/guia-completa-castro-urdiales.php" class="inline-block px-6 py-2 bg-<?= $color_page; ?>-600 text-white rounded-full hover:bg-<?= $color_page; ?>-700 transition">
        Ver guía completa de Castro-Urdiales
      </a>
    </section>

  </div>
</main>
