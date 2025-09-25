<?php 
// ===================== HEADER =====================
$header = [
  "titulo" => "📍 Guía completa de Castro-Urdiales",
  "descripcion" => "Explora los lugares de interés, playas, gastronomía y fiestas de Castro-Urdiales"
];
?>

<?php
// ===================== CATEGORÍAS =====================

// --------- CLUB NÁUTICO ---------
$club_nautico = [
    "titulo" => "⛵ Club Náutico",
    "descripcion" => "Centro de actividades náuticas, vela y deportes marítimos en el puerto de Castro-Urdiales",
    "imagenes" => [
        PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/club-nautico-castro-urdiales-1.jpg",
        PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/club-nautico-castro-urdiales-2.jpg"
    ],
    "actividades" => [
        "Práctica de vela y deportes náuticos",
        "Pesca deportiva y recreativa",
        "Paseos en barco y excursiones marítimas",
        "Fotografía del puerto y la costa",
        "Actividades familiares y cursos de iniciación a la vela"
    ],
    "comentarios" => [
        "El club tiene un ambiente estupendo, perfecto para disfrutar de la vela y el mar Cantábrico.",
        "Gran lugar para aprender y practicar deportes náuticos, con muy buenas instalaciones."
    ],
    "coords" => [43.3837, -3.2183]
];

// --------- IGLESIA DE SANTA MARÍA ---------
$iglesia_santa_maria = [
    "titulo" => "⛪ Iglesia de Santa María de la Asunción",
    "descripcion" => "Ejemplo destacado de arquitectura gótica, con vistas al puerto y patrimonio histórico",
    "imagenes" => [
        PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/santa-maria-asuncion-castro-1.jpg",
        PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/santa-maria-asuncion-castro-2.jpg"
    ],
    "actividades" => [
        "Recorridos guiados por el interior",
        "Fotografía del conjunto histórico y vistas al mar",
        "Conocer la historia gótica y el patrimonio de Castro-Urdiales",
        "Asistencia a conciertos de música sacra",
        "Disfrutar del atardecer desde su entorno privilegiado"
    ],
    "comentarios" => [
        "Una joya del gótico en Cantabria, con unas vidrieras impresionantes.",
        "Muy recomendable la visita guiada para comprender la historia y los detalles arquitectónicos."
    ],
    "coords" => [43.3843, -3.2192]
];

// --------- MIRADOR DE COTOLINO ---------
$mirador_cotolino = [
    "titulo" => "🌅 Mirador de Cotolino",
    "descripcion" => "Balcón natural con vistas panorámicas del mar Cantábrico, ideal para pasear y relajarse",
    "imagenes" => [
        PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cotolino-castro-1.jpg",
        PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cotolino-castro-2.jpg"
    ],
    "actividades" => [
        "Pasear por senderos y jardines",
        "Fotografiar el paisaje y los atardeceres",
        "Observar el mar Cantábrico desde un punto elevado",
        "Disfrutar de la tranquilidad y el relax",
        "Pasar tiempo en familia"
    ],
    "comentarios" => [
        "Un lugar perfecto para desconectar y contemplar el mar, precioso al atardecer.",
        "Las panorámicas del Cantábrico son impresionantes, imprescindible visitarlo."
    ],
    "coords" => [43.3807, -3.2248]
];

// --------- PALACIO DE OCHARÁN ---------
$palacio_ocharan = [
    "titulo" => "🏛️ Palacio de Ocharán",
    "descripcion" => "Palacio histórico del siglo XIX en estilo ecléctico, situado en el casco antiguo",
    "imagenes" => [
        PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/palacio-ocharan-castro-1.jpg",
        PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/palacio-ocharan-castro-2.jpg"
    ],
    "actividades" => [
        "Visitar la arquitectura ecléctica",
        "Conocer la historia del palacio",
        "Fotografía del exterior y jardines",
        "Participar en eventos culturales si están disponibles"
    ],
    "comentarios" => [
        "Palacio impresionante con arquitectura ecléctica, merece la visita.",
        "Una joya histórica en el casco antiguo de Castro-Urdiales."
    ],
    "coords" => [43.3845, -3.2180]
];

// --------- PLAYAS ---------
$playas = [
    [
        "titulo" => "🏖️ Brazomar",
        "descripcion" => "Playa urbana y familiar con todos los servicios",
        "imagenes" => [PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-brazomar-castro-1.jpg"],
        "actividades" => ["Bañarse", "Tomar el sol", "Pasear", "Jugar en la arena"],
        "comentarios" => ["Brazomar es perfecta para ir con niños, arena fina y agua tranquila."],
        "coords" => [43.3830, -3.2205]
    ],
    [
        "titulo" => "🏖️ Ostende",
        "descripcion" => "Amplia playa con arena dorada y paseo marítimo",
        "imagenes" => [PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-ostende-castro-1.jpg"],
        "actividades" => ["Tomar el sol", "Pasear", "Fotografía", "Disfrutar en familia"],
        "comentarios" => ["Ostende es muy amplia y agradable para pasear y tomar el sol."],
        "coords" => [43.3865, -3.2125]
    ],
    [
        "titulo" => "🏖️ Dícido",
        "descripcion" => "Playa tranquila, protegida y cercana al casco urbano",
        "imagenes" => [PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-dicido-castro-1.jpg"],
        "actividades" => ["Relajarse", "Bañarse", "Fotografía", "Pasear"],
        "comentarios" => ["Dícido es más tranquila y muy cómoda para relajarse."],
        "coords" => [43.3910, -3.2100]
    ],
    [
        "titulo" => "🏖️ Sonabia",
        "descripcion" => "Playa natural rodeada de acantilados y naturaleza",
        "imagenes" => [PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-sonabia-castro-1.jpg"],
        "actividades" => ["Explorar la naturaleza", "Fotografía", "Pasear", "Relajarse"],
        "comentarios" => ["Sonabia me encantó, un entorno natural espectacular."],
        "coords" => [43.4190, -3.1840]
    ]
];

// --------- GASTRONOMÍA ---------
$gastronomia = [
    [
        "titulo" => "🍴 Anchoas",
        "descripcion" => "Producto estrella artesanal del Cantábrico",
        "actividades" => ["Degustar en conserveras locales", "Comprar productos artesanales"],
        "comentarios" => ["Las anchoas de Castro son las mejores que he probado, puro Cantábrico."],
        "coords" => [43.3832, -3.2175]
    ],
    [
        "titulo" => "🥘 Marmita de bonito",
        "descripcion" => "Guiso marinero típico de Castro-Urdiales",
        "actividades" => ["Probar en restaurantes y fiestas locales"],
        "comentarios" => ["La marmita de bonito es un plato auténtico, tradición marinera en estado puro."],
        "coords" => [43.3832, -3.2190]
    ],
    [
        "titulo" => "🍷 Pintxos",
        "descripcion" => "Tapas y pequeñas raciones en bares del casco histórico",
        "actividades" => ["Degustar pintxos en tabernas", "Maridar con txakoli o vinos locales"],
        "comentarios" => ["Los pintxos en el casco viejo son una delicia, cada bar tiene su especialidad."],
        "coords" => [43.3828, -3.2185]
    ]
];

// --------- FIESTAS ---------
$fiestas = [
    [
        "titulo" => "🎉 Coso Blanco",
        "descripcion" => "Desfile nocturno de carrozas y música (julio)",
        "actividades" => ["Asistir al desfile", "Fotografía nocturna"],
        "comentarios" => [],
        "coords" => [43.3835, -3.2179]
    ],
    [
        "titulo" => "✝️ Semana Santa",
        "descripcion" => "Procesiones y representación de la Pasión",
        "actividades" => ["Asistir a procesiones", "Fotografía del patrimonio"],
        "comentarios" => [],
        "coords" => [43.3843, -3.2192]
    ],
    [
        "titulo" => "⚓ San Andrés",
        "descripcion" => "Fiesta marinera con gastronomía y tradiciones (30 de noviembre)",
        "actividades" => ["Participar en celebraciones", "Degustar productos del mar"],
        "comentarios" => [],
        "coords" => [43.3837, -3.2183]
    ]
];
?>

<?php
// ===================== MAPA GENERAL =====================
$mapa = [
    "titulo" => "🗺️ Mapa interactivo de Castro-Urdiales",
    "map_id" => "map-castro-urdiales",
    "centro" => [43.3835, -3.2179],
    "zoom"   => 13,
    "markers" => array_merge(
        [$club_nautico, $iglesia_santa_maria, $mirador_cotolino, $palacio_ocharan],
        $playas, $gastronomia, $fiestas
    )
];
?>

<?php
// ===================== CONTACTO =====================
$contacto = [
  "titulo"   => "📞 Información y turismo",
  "telefono" => [
    "texto"  => "+34 942 78 29 12", 
    "enlace" => "tel:+34942782912"
  ],
  "web"      => [
    "texto" => "turismodecastro.com",
    "url"   => "https://turismodecastro.com"
  ]
];
?>
