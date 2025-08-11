<!-- $lugares de Interés en Castro Urdiales -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Asador La Perla',
      'slug'   => 'asador-la-perla',
      'imagen' => 'asador-la-perla.jpg',
      'alt'    => 'Asador La Perla en Castro Urdiales',
      'fuente' => 'asadorlaperla.com',
      'web_imagen' => 'https://www.asadorlaperla.com',
      'desc'   => 'Restaurante tradicional especializado en pescados y mariscos frescos con vistas al mar.',
    ],
    [
      'nombre' => 'Castillo de Santa Ana',
      'slug'   => 'castillo-de-santa-ana',
      'imagen' => 'castillo-de-santa-ana-1.jpg',
      'alt'    => 'Castillo de Santa Ana en Castro Urdiales',
      'fuente' => 'turismodecantabria.com',
      'web_imagen' => 'https://turismodecantabria.com',
      'desc'   => 'Fortaleza medieval situada junto al faro, con vistas panorámicas a la costa.',
    ],
    [
      'nombre' => 'Club Náutico',
      'slug'   => 'club-nautico',
      'imagen' => 'club-nautico.jpg',
      'alt'    => 'Club Náutico de Castro Urdiales',
      'fuente' => 'clubnauticocastro.com',
      'web_imagen' => 'https://clubnauticocastro.com',
      'desc'   => 'Centro de actividades náuticas y deportivas junto al puerto.',
    ],
    [
      'nombre' => 'El Pedregal',
      'slug'   => 'el-pedregal',
      'imagen' => 'playa-el-pedregal-castro-urdiales-1.jpg',
      'alt'    => 'Zona El Pedregal en Castro Urdiales',
      'fuente' => 'castro-urdiales.net',
      'web_imagen' => 'https://www.castro-urdiales.net',
      'desc'   => 'Pequeña cala rocosa ideal para el baño y la pesca.',
    ],
    [
      'nombre' => 'Iglesia de Santa María de la Asunción',
      'slug'   => 'iglesia-santa-maria-de-la-asuncion',
      'imagen' => 'iglesia-santa-maria-de-la-asuncion-castro-urdiales-1.jpg',
      'alt'    => 'Iglesia gótica de Santa María de Castro Urdiales',
      'fuente' => 'turismodecantabria.com',
      'web_imagen' => 'https://turismodecantabria.com',
      'desc'   => 'Imponente iglesia gótica del siglo XIII declarada Monumento Nacional.',
    ],
    [
      'nombre' => 'Palacio de Ocharán',
      'slug'   => 'palacio-ocharan',
      'imagen' => 'palacio-ocharan-castro-urdiales.jpg',
      'alt'    => 'Palacio de Ocharán en Castro Urdiales',
      'fuente' => 'castro-urdiales.net',
      'web_imagen' => 'https://www.castro-urdiales.net',
      'desc'   => 'Edificio modernista rodeado de jardines, visible desde la carretera de acceso.',
    ],
    [
      'nombre' => 'Parque Amestoy',
      'slug'   => 'parque-amestoy',
      'imagen' => 'parque-amestoy-castro-urdiales.jpg',
      'alt'    => 'Parque Amestoy en Castro Urdiales',
      'fuente' => 'castro-urdiales.net',
      'web_imagen' => 'https://www.castro-urdiales.net',
      'desc'   => 'Zona verde frente al mar ideal para pasear y relajarse.',
    ],
    [
      'nombre' => 'Paseo Marítimo',
      'slug'   => 'paseo-maritimo',
      'imagen' => 'paseo-maritimo-castro-urdiales-1.jpg',
      'alt'    => 'Paseo Marítimo de Castro Urdiales',
      'fuente' => 'castro-urdiales.net',
      'web_imagen' => 'https://www.castro-urdiales.net',
      'desc'   => 'Agradable recorrido junto al mar con vistas a la bahía.',
    ],
    [
      'nombre' => 'Playa de Ostende',
      'slug'   => 'playa-de-ostende',
      'imagen' => 'playa-de-ostende-castro-urdiales-cantabria-1.jpg',
      'alt'    => 'Playa de Ostende en Castro Urdiales',
      'fuente' => 'turismodecantabria.com',
      'web_imagen' => 'https://turismodecantabria.com',
      'desc'   => 'Playa urbana de arena dorada, ideal para familias y deportes acuáticos.',
    ],
    [
      'nombre' => 'Plaza del Ayuntamiento',
      'slug'   => 'plaza-del-ayuntamiento',
      'imagen' => 'plaza-del-ayuntamiento-castro-urdiales.jpg',
      'alt'    => 'Plaza del Ayuntamiento de Castro Urdiales',
      'fuente' => 'castro-urdiales.net',
      'web_imagen' => 'https://www.castro-urdiales.net',
      'desc'   => 'Plaza céntrica rodeada de bares, restaurantes y edificios históricos.',
    ],
    [
      'nombre' => 'Puente Medieval',
      'slug'   => 'puente-medieval',
      'imagen' => 'puente-medieval-castro-urdiales-1.jpg',
      'alt'    => 'Puente Medieval de Castro Urdiales',
      'fuente' => 'turismodecantabria.com',
      'web_imagen' => 'https://turismodecantabria.com',
      'desc'   => 'Antiguo puente de piedra que conecta la zona del puerto con el castillo.',
    ],
    [
      'nombre' => 'Puerto de Castro Urdiales',
      'slug'   => 'puerto-pesquero',
      'imagen' => 'puerto-pesquero-castro-urdiales-1.jpg',
      'alt'    => 'Puerto pesquero de Castro Urdiales',
      'fuente' => 'castro-urdiales.net',
      'web_imagen' => 'https://www.castro-urdiales.net',
      'desc'   => 'Puerto tradicional con actividad pesquera y ambiente marinero.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Castro Urdiales</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos e históricos de Castro Urdiales.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2025/localidades/cantabria/castro-urdiales/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
              class="card-img-top h-64 object-cover rounded-top" 
              alt="<?= $lugar['alt']; ?>">

            <figcaption class="text-xs text-gray-500 mt-1 px-3 py-1 bg-gray-100">
              📷 Imagen de <?= $lugar['nombre']; ?> – fuente: 
              <a href="<?= $lugar['web_imagen']; ?>" class="underline hover:text-blue-600 inline-flex items-center gap-1" target="_blank" rel="noopener noreferrer">
                <?= $lugar['fuente']; ?>
              </a>
            </figcaption>
          </figure>

          <div class="card-body p-4">
            <h5 class="card-title text-lg font-semibold text-green-800"><?= $lugar['nombre']; ?></h5>
            <p class="card-text text-muted small mb-3"><?= $lugar['desc']; ?></p>
            <a href="/Blog_Playas2025/lugares-interes/<?= $lugar['slug']; ?>" class="btn btn-success btn-sm px-3 py-2 shadow-sm">
              Explorar &rarr;
            </a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
