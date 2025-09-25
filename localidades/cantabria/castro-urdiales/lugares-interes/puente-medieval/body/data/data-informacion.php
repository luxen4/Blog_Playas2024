<?php 
$header = [
  "titulo" => "🌉 Puente Medieval",
  "descripcion" => "Puente histórico de Castro-Urdiales que conecta zonas del casco antiguo con vistas al río y al puerto"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Puente Medieval de Castro-Urdiales</strong> es una estructura emblemática que data de la Edad Media, situada sobre el río que atraviesa la villa.",

    "Este puente, de piedra y arquitectura típica medieval, permite acceder al casco antiguo y se convierte en un punto fotográfico con vistas al río y al puerto.",

    "Es un lugar de gran valor histórico y patrimonial, reflejo del urbanismo medieval de la villa y de su importancia como población portuaria.",

    "Su entorno combina tranquilidad y belleza arquitectónica, siendo ideal para pasear, tomar fotografías y disfrutar del patrimonio histórico de Castro-Urdiales."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puente-medieval-castro-1.jpg",
        "alt" => "Vista del Puente Medieval de Castro-Urdiales sobre el río",
        "caption" => "Puente Medieval",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puente-medieval-castro-2.jpg",
        "alt" => "Detalle de la arquitectura del Puente Medieval",
        "caption" => "Arquitectura medieval",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puente-medieval-castro-1.jpg",
        "alt" => "Panorámica del Puente Medieval",
        "caption" => "Puente Medieval",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puente-medieval-castro-2.jpg",
        "alt" => "Arco del Puente Medieval de Castro-Urdiales",
        "caption" => "Detalle del arco",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puente-medieval-castro-3.jpg",
        "alt" => "Caminar sobre el Puente Medieval con vistas al casco antiguo",
        "caption" => "Recorrido sobre el puente",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Puente Medieval",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Conecta el casco antiguo con la zona cercana al puerto y el río"
    ],
    [
      "icono" => "🏛️",
      "titulo" => "Arquitectura",
      "descripcion" => "Construcción de piedra típica medieval, con arcos y pasarela peatonal"
    ],
    [
      "icono" => "🌟",
      "titulo" => "Atractivo principal",
      "descripcion" => "Valor histórico y panorámicas del río y del casco antiguo"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Puente, vistas al casco antiguo, fotografía y patrimonio histórico"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌉 Actividades en el Puente Medieval",
  "items"  => [
    [ "icono" => "🚶", "texto" => "Pasear y cruzar el puente disfrutando del entorno" ],
    [ "icono" => "📸", "texto" => "Fotografía del puente, el río y el casco antiguo" ],
    [ "icono" => "🏛️", "texto" => "Conocer la historia y arquitectura medieval" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Recorrido familiar por el puente y sus alrededores" ]
  ]
];
?>

<?php
// Configuración del mapa del Puente Medieval en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-puente-medieval",
    "centro" => [43.3840, -3.2185],   // Coordenadas aproximadas del puente
    "zoom"   => 17,
    "marker" => [
        "coords" => [43.3840, -3.2185],  
        "popup"  => "<strong>Puente Medieval - Castro-Urdiales</strong>"
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
        "nombre" => "Ana P.",
        "texto"  => "Un puente lleno de historia, con vistas preciosas al casco antiguo."
    ],
    [
        "nombre" => "José M.",
        "texto"  => "Cruzarlo es un viaje en el tiempo, muy recomendable."
    ],
    [
        "nombre" => "Lucía R.",
        "texto"  => "Perfecto para fotografiar el río y los alrededores del casco antiguo."
    ],
    [
        "nombre" => "Carlos V.",
        "texto"  => "Un rincón histórico que no te puedes perder en Castro-Urdiales."
    ]
];
?>

