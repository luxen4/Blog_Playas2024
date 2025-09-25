<?php 
$header = [
  "titulo" => "🏰 Palacio de Ocharan",
  "descripcion" => "Residencia modernista en Castro-Urdiales, ejemplo singular de arquitectura y jardines históricos"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "El <strong>Palacio de Ocharan</strong>, también conocido como <em>Castillo de Ocharan</em>, es una de las construcciones más singulares de Castro-Urdiales, ubicado en pleno centro urbano.",

    "Fue mandado construir a principios del siglo XX por Luis de Ocharan Mazas, un influyente empresario y político local, con un marcado estilo <strong>modernista y ecléctico</strong>.",

    "El conjunto está rodeado por una extensa finca ajardinada con murallas, esculturas y elementos arquitectónicos que refuerzan su carácter monumental.",

    "En la actualidad, aunque no está abierto al público en su interior, se puede admirar desde el exterior y desde algunos puntos de la ciudad, siendo un referente del patrimonio arquitectónico de Castro-Urdiales."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/palacio-ocharan-castro-1.jpg",
        "alt" => "Vista del Palacio de Ocharan en Castro-Urdiales",
        "caption" => "Palacio de Ocharan",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/palacio-ocharan-castro-2.jpg",
        "alt" => "Detalle de las torres del Palacio de Ocharan en Castro-Urdiales",
        "caption" => "Detalle arquitectónico del Palacio",
        "fuente" => "",
        "fuente_texto" => ""
    ],
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/palacio-ocharan-castro-1.jpg",
        "alt" => "Vista general del Palacio de Ocharan",
        "caption" => "Palacio de Ocharan, símbolo arquitectónico de Castro-Urdiales",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/palacio-ocharan-castro-2.jpg",
        "alt" => "Torres y detalles arquitectónicos del Palacio de Ocharan",
        "caption" => "Detalle de la arquitectura del Palacio",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/palacio-ocharan-castro-3.jpg",
        "alt" => "Jardines y murallas que rodean el Palacio de Ocharan",
        "caption" => "Entorno ajardinado del Palacio",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información del Palacio de Ocharan",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "En pleno centro de Castro-Urdiales, rodeado por jardines y murallas"
    ],
    [
      "icono" => "🏰",
      "titulo" => "Arquitectura",
      "descripcion" => "Estilo modernista y ecléctico de principios del siglo XX"
    ],
    [
      "icono" => "📜",
      "titulo" => "Historia",
      "descripcion" => "Construido por Luis de Ocharan Mazas a inicios del siglo XX como residencia privada"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Torres almenadas, murallas, jardines y esculturas"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "🏰 Actividades relacionadas con el Palacio de Ocharan",
  "items"  => [
    [ "icono" => "📸", "texto" => "Fotografiar el edificio desde el exterior" ],
    [ "icono" => "👣", "texto" => "Recorrer el entorno urbano cercano y admirar su silueta" ],
    [ "icono" => "📚", "texto" => "Conocer la historia local y la figura de Luis de Ocharan" ],
    [ "icono" => "🌆", "texto" => "Disfrutar de vistas panorámicas del Palacio desde distintos puntos de la ciudad" ]
  ]
];
?>


<?php
// Configuración del mapa del Palacio de Ocharan en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-palacio-ocharan",
    "centro" => [43.3825, -3.2165],   // Coordenadas aproximadas del Palacio de Ocharan
    "zoom"   => 17,
    "marker" => [
        "coords" => [43.3825, -3.2165],  
        "popup"  => "<strong>Palacio de Ocharan - Castro-Urdiales</strong>"
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 78 29 12", 
    "enlace" => "tel:+34942782912" // Oficina de Turismo de Castro-Urdiales
  ],
  "web"      => [
    "texto" => "turismodecastro.com",
    "url"   => "https://turismodecastro.com"
  ]
];
?>


<?php
$comentarios = [
    [
        "nombre" => "Andrea G.",
        "texto"  => "Un edificio espectacular, parece un castillo sacado de un cuento."
    ],
    [
        "nombre" => "Sergio P.",
        "texto"  => "Aunque no se puede visitar por dentro, merece la pena contemplarlo desde fuera."
    ],
    [
        "nombre" => "Isabel R.",
        "texto"  => "Su arquitectura modernista y los jardines que lo rodean son únicos en Castro-Urdiales."
    ],
    [
        "nombre" => "Tomás L.",
        "texto"  => "Es uno de los lugares más icónicos de la ciudad, imprescindible en un paseo por Castro."
    ]
];
?>
