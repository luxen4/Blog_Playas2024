<?php 
$header = [
  "titulo" => "📍 Guía completa de Castro-Urdiales",
  "descripcion" => "Descubre los principales lugares de interés, actividades, gastronomía, playas y tradiciones de Castro-Urdiales en un solo mapa interactivo"
];
?>


<?php
$lugares_interes = [
    [
        "categoria" => "Náutico",
        "titulo" => "Club Náutico",
        "coords" => [43.3837, -3.2183],
        "descripcion" => "Centro de actividades náuticas, vela y deportes marítimos"
    ],
    [
        "categoria" => "Patrimonio",
        "titulo" => "Iglesia de Santa María de la Asunción",
        "coords" => [43.3843, -3.2192],
        "descripcion" => "Ejemplo destacado de arquitectura gótica en Cantabria"
    ],
    [
        "categoria" => "Miradores",
        "titulo" => "Mirador de Cotolino",
        "coords" => [43.3807, -3.2248],
        "descripcion" => "Balcón natural con vistas panorámicas del mar Cantábrico"
    ],
    [
        "categoria" => "Palacios",
        "titulo" => "Palacio de Ocharán",
        "coords" => [43.3845, -3.2180],
        "descripcion" => "Palacio histórico del siglo XIX en estilo ecléctico"
    ],
    [
        "categoria" => "Naturaleza",
        "titulo" => "Monte Cueto",
        "coords" => [43.3745, -3.2075],
        "descripcion" => "Rutas de senderismo con vistas de la villa y la costa"
    ],
    [
        "categoria" => "Naturaleza",
        "titulo" => "Peña de Santullán",
        "coords" => [43.3710, -3.1835],
        "descripcion" => "Senderos de montaña con miradores naturales"
    ],
    [
        "categoria" => "Naturaleza",
        "titulo" => "Acantilados de la costa",
        "coords" => [43.3905, -3.2300],
        "descripcion" => "Recorridos junto al mar Cantábrico en entorno salvaje"
    ],
    [
        "categoria" => "Fiestas",
        "titulo" => "Coso Blanco",
        "coords" => [43.3835, -3.2179],
        "descripcion" => "Desfile nocturno de carrozas y música (julio)"
    ],
    [
        "categoria" => "Fiestas",
        "titulo" => "Semana Santa",
        "coords" => [43.3843, -3.2192],
        "descripcion" => "Procesiones y representación de la Pasión"
    ],
    [
        "categoria" => "Fiestas",
        "titulo" => "San Andrés",
        "coords" => [43.3837, -3.2183],
        "descripcion" => "Fiesta marinera con gastronomía y tradiciones (30 de noviembre)"
    ],
    [
        "categoria" => "Gastronomía",
        "titulo" => "Anchoas",
        "coords" => [43.3832, -3.2175],
        "descripcion" => "Producto estrella artesanal del Cantábrico"
    ],
    [
        "categoria" => "Gastronomía",
        "titulo" => "Marmita de bonito",
        "coords" => [43.3832, -3.2190],
        "descripcion" => "Guiso marinero típico de Castro-Urdiales"
    ],
    [
        "categoria" => "Gastronomía",
        "titulo" => "Pintxos",
        "coords" => [43.3828, -3.2185],
        "descripcion" => "Tapas y pequeñas raciones en bares del casco histórico"
    ],
    [
        "categoria" => "Playas",
        "titulo" => "Brazomar",
        "coords" => [43.3830, -3.2205],
        "descripcion" => "Playa urbana y familiar con todos los servicios"
    ],
    [
        "categoria" => "Playas",
        "titulo" => "Ostende",
        "coords" => [43.3865, -3.2125],
        "descripcion" => "Amplia playa con arena dorada y paseo marítimo"
    ],
    [
        "categoria" => "Playas",
        "titulo" => "Dícido",
        "coords" => [43.3910, -3.2100],
        "descripcion" => "Playa tranquila, protegida y cercana al casco urbano"
    ],
    [
        "categoria" => "Playas",
        "titulo" => "Sonabia",
        "coords" => [43.4190, -3.1840],
        "descripcion" => "Playa natural rodeada de acantilados y naturaleza"
    ]
];
?>


<?php
$mapa = [
    "titulo" => "🗺️ Mapa de Castro-Urdiales",
    "map_id" => "map-castro-urdiales",
    "centro" => [43.3835, -3.2179],
    "zoom"   => 13,
    "markers" => $lugares_interes
];
?>


<?php
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
