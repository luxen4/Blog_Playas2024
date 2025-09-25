<?php 
$header = [
  "titulo" => "🌅 Mirador de Cotolino",
  "descripcion" => "Punto panorámico en Castro-Urdiales con vistas al mar Cantábrico y a la costa cántabra"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "El <strong>Mirador de Cotolino</strong> se encuentra en la zona residencial del mismo nombre, al oeste de Castro-Urdiales, y ofrece unas vistas privilegiadas del <em>mar Cantábrico</em>.",

    "Es un lugar ideal para pasear, descansar y contemplar tanto el paisaje costero como las puestas de sol sobre el mar.",

    "Rodeado de jardines y zonas tranquilas, el mirador es muy visitado por vecinos y turistas que buscan un punto de calma frente al bullicio del casco urbano.",

    "Su ubicación elevada lo convierte en un balcón natural perfecto para la fotografía y para disfrutar del entorno marítimo en un ambiente relajado."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cotolino-castro-1.jpg",
        "alt" => "Vistas al mar desde el Mirador de Cotolino en Castro-Urdiales",
        "caption" => "Vistas desde el Mirador de Cotolino",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cotolino-castro-2.jpg",
        "alt" => "Zona ajardinada del Mirador de Cotolino",
        "caption" => "Jardines y paseo en el Mirador de Cotolino",
        "fuente" => "",
        "fuente_texto" => ""
    ],
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cotolino-castro-1.jpg",
        "alt" => "Vista panorámica del mar desde el Mirador de Cotolino",
        "caption" => "Panorámica del Cantábrico",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cotolino-castro-2.jpg",
        "alt" => "Mirador con bancos y jardines en Cotolino",
        "caption" => "Espacio ajardinado del mirador",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cotolino-castro-3.jpg",
        "alt" => "Atardecer desde el Mirador de Cotolino",
        "caption" => "Atardecer en Cotolino",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información del Mirador de Cotolino",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "En el barrio residencial de Cotolino, al oeste de Castro-Urdiales"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Entorno",
      "descripcion" => "Balcón natural al mar Cantábrico con zonas verdes"
    ],
    [
      "icono" => "🏞️",
      "titulo" => "Atractivo principal",
      "descripcion" => "Vistas panorámicas, tranquilidad y contacto con la naturaleza"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Atardeceres, fotografía, paseo marítimo y descanso"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "🌅 Actividades en el Mirador de Cotolino",
  "items"  => [
    [ "icono" => "🚶", "texto" => "Pasear por los senderos y jardines" ],
    [ "icono" => "📸", "texto" => "Fotografiar el paisaje y los atardeceres" ],
    [ "icono" => "🌊", "texto" => "Observar el mar Cantábrico desde un punto elevado" ],
    [ "icono" => "🧘", "texto" => "Disfrutar de la tranquilidad y el relax" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Pasar tiempo en familia en un entorno natural" ]
  ]
];
?>


<?php
// Configuración del mapa del Mirador de Cotolino en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-mirador-cotolino",
    "centro" => [43.3807, -3.2248],   // Coordenadas aproximadas del mirador
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.3807, -3.2248],  
        "popup"  => "<strong>Mirador de Cotolino - Castro-Urdiales</strong>"
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 78 29 12", 
    "enlace" => "tel:+34942782912" // Teléfono de la Oficina de Turismo de Castro-Urdiales
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
        "nombre" => "Marta S.",
        "texto"  => "Un lugar perfecto para desconectar y contemplar el mar, precioso al atardecer."
    ],
    [
        "nombre" => "Luis A.",
        "texto"  => "Muy tranquilo, con bancos para sentarse y disfrutar de las vistas."
    ],
    [
        "nombre" => "Carmen T.",
        "texto"  => "Ideal para pasear en familia, con zonas verdes bien cuidadas."
    ],
    [
        "nombre" => "Jon E.",
        "texto"  => "Las panorámicas del Cantábrico son impresionantes, imprescindible visitarlo."
    ]
];
?>
