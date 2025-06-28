<main class="container mx-auto max-w-7xl px-1 py-1">
  <div class="bg-white rounded-2xl shadow-md p-2 md:p-1">
    <h1 class="text-xl md:text-2xl font-semibold text-<?= $color_page; ?>-700 mb-4">Club Náutico</h1>

    <p class="mb-4 text-gray-700">
      El <strong class="text-gray-900">Club Náutico</strong> de Castro Urdiales es una institución emblemática situada en esta pintoresca ciudad costera de Cantabria, España. 
      Fundado en el siglo XX, este club es un centro de actividades marítimas y recreativas, proporcionando instalaciones y servicios de alta calidad para sus socios y visitantes.
    </p>

    <p class="mb-4 text-gray-700">
      <strong class="text-gray-900">Ubicación:</strong><br>
      Avenida de la Constitución, s/n<br>
      39700 Castro Urdiales, Cantabria, España
    </p>

    <p class="mb-4 text-gray-700">
      El club nació con el objetivo de promover las actividades náuticas y recreativas. 
      Con el paso del tiempo, ha ampliado sus instalaciones y servicios, consolidándose como uno de los principales referentes náuticos de la región.
    </p>

    <div class="mb-4 text-gray-700">
      <h5 class="text-lg font-semibold text-<?= $color_page; ?>-700 mb-2">🚢 Instalaciones</h5>
      <ul class="list-disc list-inside space-y-1">
        <li><strong>Pantalanes y Muelles:</strong> Zonas equipadas para embarcaciones de distintos tamaños.</li>
        <li><strong>Escuela de Vela:</strong> Formación para niños, jóvenes y adultos.</li>
        <li><strong>Restaurante y Bar:</strong> Vistas al mar y carta variada.</li>
        <li><strong>Salas de Reuniones:</strong> Espacios para eventos sociales o de empresa.</li>
        <li><strong>Zona de Deportes:</strong> Para actividades acuáticas y otras disciplinas.</li>
      </ul>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
      <div class="col-span-full">
        <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/club-nautico-castro-urdiales.jpg" 
            alt="Imagen del Club Náutico en Castro Urdiales" 
            class="rounded-lg shadow-sm object-cover w-full h-80 md:h-[28rem]">
      </div>
    </div>

    <p class="text-center text-sm text-gray-500 mb-8">Imagen del Club Náutico en Castro Urdiales</p>

    <div class="mb-4 text-gray-700">
      <h5 class="text-lg font-semibold text-<?= $color_page; ?>-700 mb-2">🎯 Actividades</h5>
      <ul class="list-disc list-inside space-y-1">
        <li><strong>Regatas:</strong> Competencias de vela y otras disciplinas náuticas.</li>
        <li><strong>Cursos y Talleres:</strong> Navegación, seguridad y formación técnica.</li>
        <li><strong>Eventos Sociales:</strong> Cenas, fiestas y encuentros exclusivos para socios.</li>
        <li><strong>Actividades Recreativas:</strong> Pesca deportiva, excursiones en barco y más.</li>
      </ul>
    </div>

    <div class="mb-4 text-gray-700">
      <h5 class="text-lg font-semibold text-<?= $color_page; ?>-700 mb-2">🧾 Membresías</h5>
      <p>El club ofrece membresías individuales, familiares y temporales. Todas incluyen acceso total a las instalaciones y actividades, así como beneficios exclusivos.</p>
    </div>

    <div class="mb-6 text-gray-700">
      <h5 class="text-lg font-semibold text-<?= $color_page; ?>-700 mb-2">📞 Contacto</h5>
      <ul class="space-y-1">
        <li><strong>Teléfono:</strong> +34 942 86 90 00</li>
        <li><strong>Email:</strong> <a href="mailto:info@nauticocastro.com" class="text-<?= $color_page; ?>-500 hover:underline">info@nauticocastro.com</a></li>
        <li><strong>Sitio Web:</strong> <a href="https://www.nauticocastro.com" target="_blank" class="text-<?= $color_page; ?>-500 hover:underline">www.nauticocastro.com</a></li>
      </ul>
    </div>

    <p class="mb-8 text-gray-700">
      El Club Náutico de Castro Urdiales es un lugar ideal para los amantes del mar y las actividades náuticas, ofreciendo un entorno único y servicios de primera calidad.
    </p>

    <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/index.php" class="inline-block px-6 py-2 border border-<?= $color_page; ?>-600 text-<?= $color_page; ?>-600 rounded-full hover:bg-<?= $color_page; ?>-600 hover:text-white transition">← Volver a lugares de interés</a>
  </div>
</main>
