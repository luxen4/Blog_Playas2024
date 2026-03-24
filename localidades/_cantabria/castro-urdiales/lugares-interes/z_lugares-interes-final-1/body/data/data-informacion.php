<?php 
// ===================== HEADER =====================
$header = [
  "titulo" => "📍 Guía completa de Castro-Urdiales",
  "descripcion" => "Descubre los principales lugares de interés, playas, gastronomía, fiestas y actividades en Castro-Urdiales"
];
?>

<?php
// ===================== LUGARES DE INTERÉS =====================
$lugares_interes = [
    // Club Náutico
    [
        "categoria" => "Náutico",
        "titulo" => "Club Náutico",
        "coords" => [43.3837, -3.2183],
        "descripcion" => "Centro de actividades náuticas, vela y deportes marítimos",
        "imagenes" => [
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/club-nautico-castro-urdiales-1.jpg",
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/club-nautico-castro-urdiales-2.jpg"
        ],
        "comentarios" => [
            "El club tiene un ambiente estupendo, perfecto para disfrutar de la vela y el mar Cantábrico.",
            "Gran lugar para aprender y practicar deportes náuticos, con muy buenas instalaciones."
        ]
    ],
    // Iglesia de Santa María
    [
        "categoria" => "Patrimonio",
        "titulo" => "Iglesia de Santa María de la Asunción",
        "coords" => [43.3843, -3.2192],
        "descripcion" => "Ejemplo destacado de arquitectura gótica en Cantabria",
        "imagenes" => [
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/santa-maria-asuncion-castro-1.jpg",
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/santa-maria-asuncion-castro-2.jpg"
        ],
        "comentarios" => [
            "Una joya del gótico en Cantabria, con unas vidrieras impresionantes.",
            "Muy recomendable la visita guiada para comprender la historia y los detalles arquitectónicos."
        ]
    ],
    // Mirador de Cotolino
    [
        "categoria" => "Miradores",
        "titulo" => "Mirador de Cotolino",
        "coords" => [43.3807, -3.2248],
        "descripcion" => "Balcón natural con vistas panorámicas del mar Cantábrico",
        "imagenes" => [
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cotolino-castro-1.jpg",
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cotolino-castro-2.jpg"
        ],
        "comentarios" => [
            "Un lugar perfecto para desconectar y contemplar el mar, precioso al atardecer.",
            "Las panorámicas del Cantábrico son impresionantes, imprescindible visitarlo."
        ]
    ],
    // Palacio de Ocharán
    [
        "categoria" => "Palacios",
        "titulo" => "Palacio de Ocharán",
        "coords" => [43.3845, -3.2180],
        "descripcion" => "Palacio histórico del siglo XIX en estilo ecléctico",
        "imagenes" => [
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/palacio-ocharan-castro-1.jpg",
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/palacio-ocharan-castro-2.jpg"
        ],
        "comentarios" => [
            "Palacio impresionante con arquitectura ecléctica, merece la visita.",
            "Una joya histórica en el casco antiguo de Castro-Urdiales."
        ]
    ],
    // Playas
    [
        "categoria" => "Playas",
        "titulo" => "Brazomar",
        "coords" => [43.3830, -3.2205],
        "descripcion" => "Playa urbana y familiar con todos los servicios",
        "imagenes" => [
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-brazomar-castro-1.jpg"
        ],
        "comentarios" => [
            "Brazomar es perfecta para ir con niños, arena fina y agua tranquila."
        ]
    ],
    [
        "categoria" => "Playas",
        "titulo" => "Ostende",
        "coords" => [43.3865, -3.2125],
        "descripcion" => "Amplia playa con arena dorada y paseo marítimo",
        "imagenes" => [
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-ostende-castro-1.jpg"
        ],
        "comentarios" => [
            "Ostende es muy amplia y agradable para pasear y tomar el sol."
        ]
    ],
    [
        "categoria" => "Playas",
        "titulo" => "Dícido",
        "coords" => [43.3910, -3.2100],
        "descripcion" => "Playa tranquila, protegida y cercana al casco urbano",
        "imagenes" => [
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-dicido-castro-1.jpg"
        ],
        "comentarios" => [
            "Dícido es más tranquila y muy cómoda para relajarse."
        ]
    ],
    [
        "categoria" => "Playas",
        "titulo" => "Sonabia",
        "coords" => [43.4190, -3.1840],
        "descripcion" => "Playa natural rodeada de acantilados y naturaleza",
        "imagenes" => [
            PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-sonabia-castro-1.jpg"
        ],
        "comentarios" => [
            "Sonabia me encantó, un entorno natural espectacular."
        ]
    ],
    // Gastronomía
    [
        "categoria" => "Gastronomía",
        "titulo" => "Anchoas",
        "coords" => [43.3832, -3.2175],
        "descripcion" => "Producto estrella artesanal del Cantábrico",
        "imagenes" => [],
        "comentarios" => [
            "Las anchoas de Castro son las mejores que he probado, puro Cantábrico."
        ]
    ],
    [
        "categoria" => "Gastronomía",
        "titulo" => "Marmita de bonito",
        "coords" => [43.3832, -3.2190],
        "descripcion" => "Guiso marinero típico de Castro-Urdiales",
        "imagenes" => [],
        "comentarios" => [
            "La marmita de bonito es un plato auténtico, tradición marinera en estado puro."
        ]
    ],
    [
        "categoria" => "Gastronomía",
        "titulo" => "Pintxos",
        "coords" => [43.3828, -3.2185],
        "descripcion" => "Tapas y pequeñas raciones en bares del casco histórico",
        "imagenes" => [],
        "comentarios" => [
            "Los pintxos en el casco viejo son una delicia, cada bar tiene su especialidad."
        ]
    ],
    // Fiestas
    [
        "categoria" => "Fiestas",
        "titulo" => "Coso Blanco",
        "coords" => [43.3835, -3.2179],
        "descripcion" => "Desfile nocturno de carrozas y música (julio)",
        "imagenes" => [],
        "comentarios" => []
    ],
    [
        "categoria" => "Fiestas",
        "titulo" => "Semana Santa",
        "coords" => [43.3843, -3.2192],
        "descripcion" => "Procesiones y representación de la Pasión",
        "imagenes" => [],
        "comentarios" => []
    ],
    [
        "categoria" => "Fiestas",
        "titulo" => "San Andrés",
        "coords" => [43.3837, -3.2183],
        "descripcion" => "Fiesta marinera con gastronomía y tradiciones (30 de noviembre)",
        "imagenes" => [],
        "comentarios" => []
    ]
];
?>

<?php
// ===================== MAPA =====================
$mapa = [
    "titulo" => "🗺️ Mapa completo de Castro-Urdiales",
    "map_id" => "map-castro-urdiales",
    "centro" => [43.3835, -3.2179],
    "zoom"   => 13,
    "markers" => $lugares_interes
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
